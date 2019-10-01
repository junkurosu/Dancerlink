@extends('layouts.app')
@include('layouts.part')

@section('breadcrumb')
{{ Breadcrumbs::render('home') }}
@stop

@section('content')

<div class="panel panel-default">
	<div class="panel-heading"><h1>{{config('app.name')}}掲示板の使い方</h1></div>
	<div class="panel-body">

		<p>ご利用の際には、{{config('app.name')}}の「<a href="{{route('policy')}}">免責事項・注意事項</a>」をお読みの上利用してください。</p>

		@yield('doublerecad')

		<h2 class="header">禁止事項</h2>
		以下の内容の投稿については、予告なく削除することがあります。
		<ul>
			<li>法令や公序良俗に反する表現を含む場合</li>
			<li>犯罪行為またはこれを予告、関与、助長した場合</li>
			<li>虚偽または誤解を招くような内容を含む情報を投稿した場合</li>
			<li>同一内容の情報を複数投稿した場合</li>
			<li>特定のサイトの評判を毀損し、信用不安を引き起こす恐れのある場合</li>
			<li>当サイトが提供するサービスの趣旨に関連のない情報を投稿した場合</li>
			<li>第三者の財産、信用、名誉、プライバシーを侵害した場合</li>
			<li>電話番号やメールアドレスなどの自己または第三者の個人情報を含む場合</li>
			<li>自己または第三者の営業に関する宣伝、またはその他営利を目的とした場合</li>
			<li>有害なプログラムやスクリプトなどを含む場合</li>
			<li>サイトまたは第三者に対する誹謗中傷の場合</li>
			<li>当サイトの運営を妨げる内容を含む場合</li>
			<li>その他、当サイトが不適当と判断した場合</li>
		</ul>

		<h2 class="header">免責</h2>
		<p>当サイトのご利用にあたり、利用者間または利用者と紹介先のサービスとの間で発生した各種係争、問題に関しては、当サイトは一切関知しないものとします。</p>

		<p>雷、地震、クラッキング、あるいはその他のシステムトラブルなどによりデータの一部もしくは全部が消去されたとしても、当サイトは一切の責任を負わないものとします。</p>

		<p>投稿の削除は、運営の判断のもと行います。個別のメール対応はいたしておりませんので、ご理解願います。</p>

		<h2 class="header">スレッド一覧</h2>

		<p>今話題になっているスレッドです。各スレッドにあなたもコメントを加えることができます。</p>

		@foreach($threads as $thread)
		<div class="thread-list">
			<p>
				<a href="{{$thread->path()}}">{{$thread->title}}</a>
			</p>
			<div>
				<small class="gray">{{$thread->description}}</small></div>
			<small>{{$thread->count}}件のコメント 最終更新時間：{{$thread->updated_at->format('Y/m/d h:i:s')}}</small>
		</div>
		@endforeach
		<p>
			<a class="btn btn-primary" href="{{route('thread.archive')}}">スレッド一覧へ</a>
		</p>
		<p class="center">
			<a href="{{route('thread.create')}}">スレッドを新規作成する</a>
		</p>


		<h2>カテゴリー一覧</h2>

		<p>{{config('app.name')}}掲示板にある、カテゴリーです。カテゴリー毎にスレッドを絞り込んで検索できます。</p>

		@foreach($categories as $category)
		<div class="category-list">
			<p>
				<a href="{{$category->path()}}">{{$category->name}}</a>
			</p>
		</div>
		@endforeach
	</div>
</div>


@endsection

