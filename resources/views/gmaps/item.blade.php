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
					
					<p><a class="thread_title" href="/studio/{{$item->id}}" >{{$item->name}}</a></p> 
				<div><small class="gray">住所:{{$item->address}}</small></div>
				<div><small>料金:{{$item->cost}}</small></div>
				<div><small>使用可能時間:{{$item->time}}</small></div>
			
					
		</div>
		@endforeach
		{{$items->links()}}
	</div>
</div>
@endsection