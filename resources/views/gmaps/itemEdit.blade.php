@extends('layouts.app')

@section('child-title')[管理]スタジオ編集一覧@endsection
@section('child-description')[管理]スタジオ編集一覧ページです。@endsection


@section('breadcrumb')
{{ Breadcrumbs::render('admin.studios') }}
@stop

@section('content')
<div class="panel panel-default">
	<div class="panel-heading"><h1>@yield('child-title')</h1></div>
	<div class="panel-body">
		@foreach($items as $item)
		<div class="thread-list">
			<p>
				{{$item->name}}
			</p>
				<div><small class="gray">緯度:{{$item->lat}} , 経度:{{$item->lng}}</small></div>
				<div><small class="gray">住所:{{$item->address}}</small></div>
				<div><small class="gray">URL:<a class="thread_title" href="{{$item->url}}" target="_blank">"{{$item->url}}"</a></small></div>
				<div><small>詳細:{{$item->text}}</small></div>
				<div><small>料金:{{$item->cost}}</small></div>
				<div><small>使用可能時間:{{$item->time}}</small></div>
			<small>
				<form method="POST" action="{{ route('studioEdit') }}">
					{{ csrf_field() }}
					<button type="submit" class="btn btn-primary">
                                    編集する
                                </button>
					<input type="hidden" name="id" value="{{$item->id}}">
				</form>

			</small>
			
		</div>
		@endforeach
		{{$items->links()}}
	</div>
</div>
@endsection