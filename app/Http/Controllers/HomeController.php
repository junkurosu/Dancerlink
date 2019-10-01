<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Category;
use \App\Thread;
use \App\Meta;
use \App\Comment;
use \App\Spam;
use Session;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');

    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home',[
            'threads' => Thread::orderBy('updated_at','desc')->take(5)->get(),
            'categories' => Category::all(),
        ]);
    }
    public function categoryArchive(){
        return view('category.archive',[
            'categories' => Category::all()
        ]);
    }
    public function categoryPost($id){
        $category = Category::findOrFail($id);
        $threads = $category->threads()->paginate(20);
        return view('category.post',[
            'category' => $category,
            'threads' => $threads,
        ]);
    }
    public function search(Request $request)
    {
        $search_text = $request->text;
        $text = preg_replace('/( |　|,|、)/', ',', $search_text);
        $keywords = explode(',',$text);

        $threads = Thread::where('id','>','0');
        foreach ($keywords as $key => $value) {
            $threads = $threads->where('title','like',"%{$value}%");
        }
        $threads = $threads->paginate(100);

        return view('search.archive',[
            'search' => $search_text,
            'threads' => $threads
        ]);
    }
    public function threadArchive(){
        return view('thread.archive',[
            'threads' => Thread::orderBy('updated_at','desc')->paginate(50)
        ]);
    }
    public function threadCreate(){
        return view('thread.create');
    }
    public function threadCreatePost(Request $request){

        $thread = Thread::create($request->all());
        if($thread){
          Session::flash('status', 'alert-success');
          Session::flash('message', 'スレッドを新規追加しました。（ID：'.$thread->id.'）');
          Session::flash('threadurl',$thread->path());

      }else{
        Session::flash('status', 'alert-danger');
        Session::flash('message', 'スレッドの作成中にエラーが発生しました。');
    }
    return back();
}
public function threadPost($id){
    if(!Session::has('cookie_id')){
        Session::put('cookie_id',substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz'), 0, 8));
    }

    $thread = Thread::findOrFail($id);
    $category = $thread->category;
    $metas = $category->metas;
    $comments = $thread->comments()->orderBy('id','desc')->paginate(config('app.pagination'));
    return view('thread.post',[
        'thread' => $thread,
        'category' => $category,
        'metas' => $metas,
        'comments' => $comments,
        'cookie_id' => Session::get('cookie_id'),
    ]);
}

public function threadPostComment($id,Request $request){
    $thread = Thread::findOrFail($id);
    if($thread->count < 1000){
       if(!Session::has('cookie_id')){
        Session::put('cookie_id',substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz'), 0, 8));
    }
    $request['thread_id'] = $id;
    $request['cookie_id'] = Session::get('cookie_id');
    $request['thread_count'] = $thread->count + 1;
    $request['content'] = $this->url2link($this->res2link($request['content'],$thread));

    $comment = Comment::create($request->all());
    $comment_count = Comment::where('thread_id',$id)->count();
    $thread->fill(['count' => $comment_count])->save();

    Session::flash('status', 'alert-success');
    Session::flash('message', 'コメントが投稿されました。');
}else{
   Session::flash('status', 'alert-danger');
   Session::flash('message', 'コメントが1000件に達しているか、何かのエラーが起きているようです。');
}
return back();
}

public function commentSpam(Request $request){
    $comment_id = $request->comment_id;
    if(!Session::has('cookie_id')){
        Session::put('cookie_id',substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz'), 0, 8));
    }

    $cookie_id = Session::get('cookie_id');

    if(!Spam::where('comment_id',$comment_id)->where('cookie_id',$cookie_id)->first()){
        Spam::create([
            'comment_id' => $comment_id,
            'cookie_id' => $cookie_id
        ]);

        $spam_count = Spam::where('comment_id',$comment_id)->count();
        Comment::findOrFail($comment_id)->fill(['spam' => $spam_count])->save();
        Session::flash('status', 'alert-success');
        Session::flash('message', '該当のコメントを不適切なものだと通報しました。');
    }else{
        Session::flash('status', 'alert-danger');
        Session::flash('message', 'あなたは既に該当のコメントを通報しています。');
    }
    return back();
}

public function linkPage(Request $request){
    $link = $request->url;
    $back = url()->previous();
    return view('link',[
        'link' => $link,
        'back' => $back
    ]);
}
public function jump(Request $request){
    $thread_count = $request->comment;
    $thread = Thread::findOrFail($request->thread);
    $thread_max = $thread->count;
    $page_count = 0;
    for($i = $thread_max; $i > 0; $i = $i - config('app.pagination')){
        if($i < $thread_count){
            break;
        }
        $page_count++;
    }
    return redirect('/thread/'.$thread->id.'?page='.$page_count.'#c_'.$thread_count);
}
function url2link($body)
{
    $pattern = '/(?<!href=")https?:\/\/[-_.!~*\'()a-zA-Z0-9;\/?:@&=+$,%#]+/';
    $body = preg_replace_callback($pattern, function($matches){
        if(strpos($matches[0],'uranai-cafe.jp') !== false){
            $url = $matches[0];
        }else{
            $url = url('link?url='.$matches[0]);
        }
        $title = $matches[0];
        return "<a href=\"{$url}\" rel='nofollow' target='_blank'>$title</a>";
    }, $body);
    return $body;
}
function res2link($body,$thread)
{
    $pattern = '/>>([0-9]+)/';
    $body = preg_replace_callback($pattern, function($matches) use ($thread){ 
        $comment_number = $matches[1];
        $thread_id = $thread->id;
        $url = url('jump?thread='.$thread_id.'&comment='.$matches[1]);
        return "<a href=\"{$url}\" rel='nofollow' target='_blank'>{$matches[0]}</a>";
    }, $body);
    return $body;
}
}
