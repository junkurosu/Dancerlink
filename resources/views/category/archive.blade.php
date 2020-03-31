@extends('layouts.app')
@include('layouts.part')

@section('child-title'){{config('app.name')}}掲示板カテゴリー一覧@endsection
@section('child-description'){{config('app.name')}}掲示板のカテゴリーが全て確認できます。@endsection

@section('breadcrumb')
{{ Breadcrumbs::render('category.archive') }}
@stop

@section('meta')
<meta name="robots" content="nofollow,noindex">
@stop

@section('content')
<div class="panel panel-default">
	<div class="panel-heading"><h1>{{config('app.name')}}掲示板カテゴリー一覧</h1></div>

	<div class="panel-body">
		<p>{{config('app.name')}}掲示板のカテゴリー一覧ページです。</p>
		<p>あなたが話したいトピックに合わせて、スレッドを選んでみましょう！</p>
		@foreach($categories as $category)
		<h2 class="header">「{{$category->name}}」の基本情報</h2>
		<p>{!! nl2br($category->description) !!}</p>
		<h3 class="header">「{{$category->name}}」のスレッド</h3>
		@foreach($category->threads()->orderBy('updated_at','desc')->take(5)->get() as $thread)
		<div class="thread-list">
			<p>
				<a class="thread_title" href="{{$thread->path()}}">{{$thread->title}}</a>
			</p>
				<div>
				<small class="gray">{{$thread->description}}</small></div>
			<small>{{$thread->count}}件のコメント 最終更新時間：{{$thread->updated_at->format('Y/m/d h:i:s')}}</small>
		</div>
		@endforeach
		<p><a href="{{$category->path()}}">「{{$category->name}}」のスレッド一覧へ</a></p>
		@endforeach
	</div>
</div>
@endsection
