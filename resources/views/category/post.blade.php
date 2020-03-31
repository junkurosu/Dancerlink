@extends('layouts.app')
@include('layouts.part')

@section('child-title')「{{$category->name}}」のスレッド一覧@endsection
@section('child-description')「{{$category->name}}」に関連するスレッド一覧です。{{$category->description}}@endsection

@section('breadcrumb')
{{ Breadcrumbs::render('category.post',$category) }}
@stop

@section('meta')
<meta name="robots" content="nofollow,noindex">
@stop

@section('content')
<div class="panel panel-default">
	<div class="panel-heading"><h1>@yield('child-title')</h1></div>

	<div class="panel-body">
		<p>{{$category->name}}に関するスレッド一覧や、基本的な情報について掲載してあります。</p>
		<p>あなたの気になるスレッドを探して、あなたも一緒にコメントをしてみましょう！</p>
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

		<h2 class="header">「{{$category->name}}」のスレッド</h2>
		@foreach($threads as $thread)
		<div class="thread-list">
			<p>
				<a class="thread_title" href="{{$thread->path()}}">{{$thread->title}}</a>
			</p>
			<div>
				<small class="gray">{{$thread->description}}</small></div>
				<small>{{$thread->count}}件のコメント 最終更新時間：{{$thread->updated_at->format('Y/m/d h:i:s')}}</small>
			</div>
			@endforeach
			{{$threads->links()}}
		</div>

	</div>
	@endsection
