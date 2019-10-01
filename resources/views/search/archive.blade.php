@extends('layouts.app')
@include('layouts.part')

@section('child-title')「{{$search}}」の検索結果@endsection
@section('child-description')「{{$search}}」の検索結果一覧@endsection

@section('breadcrumb')
{{ Breadcrumbs::render('search.archive') }}
@stop

@section('content')
<div class="panel panel-default">
	<div class="panel-heading"><h1>@yield('child-title')</h1></div>
	<div class="panel-body">
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
