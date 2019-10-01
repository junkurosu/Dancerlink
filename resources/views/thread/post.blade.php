@extends('layouts.app')
@include('layouts.part')

@section('child-title'){{$thread->title}}@endsection
@section('child-description'){{$thread->description}}@endsection

@section('breadcrumb')
{{ Breadcrumbs::render('thread.post',$thread) }}
@stop

@section('content')
<div class="panel panel-default">
	@if (session('status') && session('status') == 'alert-success')
	<div class="alert alert-success">
		{{ session('message') }}
	</div>
	@elseif(session('status') && session('status') == 'alert-danger')
	<div class="alert alert-danger">
		{{ session('message') }}
	</div>
	@endif
	
	<div class="panel-heading"><h1>@yield('child-title')</h1></div>

	<div class="panel-body">
		<h2 class="header">スレッドの内容詳細・注意</h2>
		<p>{!! nl2br($thread->description) !!}</p>

		<h2 class="header">「{{$category->name}}」に関する基本的な説明</h2>
		@if($category->image_url != "")
		<div class="image-wrap">
			<img src="{{$category->image_url}}" alt="@yield('child-title')">
		</div>
		@endif
		@if($category->metas)
		<table class="table">
			<tbody>
				@foreach($category->metas()->orderBy('priority','asc')->get() as $meta)
				<tr>
					<th>{{$meta->meta_key}}</th>
					<td>{{$meta->meta_value}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@endif
		<p>{!! nl2br($category->description) !!}</p>

		@if($category->affiliate_url != "")
		<div class="cta-wrap">
			<a class="btn btn-cta" href="{{$category->affiliate_url}}" target="_blank">{{$category->affiliate_text}}</a>
		</div>
		@endif
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading"><h2>「{{$thread->title}}」へのコメント</h2></div>

	<div class="panel-body">
		@foreach($comments as $comment)
		<div class="comment-wrap" >
			<small class="user-info">
				{{$comment->thread_count}}：{{$comment->name}} ID：{{$comment->cookie_id}} 投稿日時：{{$comment->updated_at->format('Y/m/d h:i:s')}}
			</small>
			@if($comment->spam < config('app.spam',3))
			<div class="comment" id="c_{{$comment->thread_count}}">{!! nl2br($comment->content) !!}</div>
			<small class="spam-report">
				<form action="{{route('comment.spam')}}" method="post">
					{{ csrf_field() }}
					<input type="hidden" name="comment_id" value="{{$comment->id}}">
					<input class="spam-btn" type="submit" value="このコメントを不適切なものだと通報する" onclick='return confirm("このコメントを通報しますか？");'>
				</form>
			</small>
			@else
			<p>このコメントは通報により非表示にされました。</p>
			<small class="user-info">ID：{{$comment->cookie_id}} 投稿日時：{{$comment->updated_at->format('Y/m/d h:i:s')}}</small>
			@endif
		</div>
		@endforeach
	</div>
	{{$comments->links()}}
</div>


<div class="panel panel-default">
	<div class="panel-heading"><h2>「{{$thread->title}}」にコメントする</h2></div>
	<div class="panel-body">
		<form action="{{route('thread.post.comment',$thread->id)}}" method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<label>名前</label>
				<input name="name" class="form-control" type="text" value="匿名">
			</div>
			<div class="form-group">
				<label>コメント</label>
				<textarea name="content" class="form-control" rows="5"></textarea>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="送信">
			</div>
			<input type="hidden" name="spam" value="0">
		</form>
	</div>
</div>

@endsection
