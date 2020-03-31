@extends('layouts.app')

@section('child-title')スレッド一覧@endsection
@section('child-description')スレッド一覧ページです。@endsection


@section('breadcrumb')
{{ Breadcrumbs::render('thread.archive') }}
@stop

@section('meta')
<meta name="robots" content="nofollow,noindex">
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
