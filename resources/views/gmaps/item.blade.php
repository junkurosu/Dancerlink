@extends('layouts.app')

@section('child-title')スタジオ一覧@endsection
@section('child-description')スタジオ一覧ページです。@endsection


@section('breadcrumb')
{{ Breadcrumbs::render('studio.archive') }}
@stop

@section('content')
<div class="panel panel-default">
	<div class="panel-heading"><h1>@yield('child-title')</h1></div>
	<div class="panel-body">
		@foreach($items as $item)
		<div class="thread-list">
			<p>
				<a class="thread_title" href="{{$item->url}}" target="_blank">{{$item->name}}</a>
			</p>
				<div>
				<small class="gray"></small></div>
			<small></small>
		</div>
		@endforeach
		{{$items->links()}}
	</div>
</div>
@endsection