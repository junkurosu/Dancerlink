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
		@foreach($studios as $studio)
		<div class="thread-list">
	
				<p><a class="thread_title" href="/studio/{{$studio->id}}" >{{$studio->name}}</a></p> 
				<div><small class="gray">住所:{{$studio->address}}</small></div>
				<div><small>料金:{{$studio->cost}}</small></div>
				<div><small>使用可能時間:{{$studio->time}}</small></div>
			
			
			</div>
			@endforeach
			
		</div>
	</div>
	@endsection
