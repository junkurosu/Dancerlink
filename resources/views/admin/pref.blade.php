@extends('layouts.app')

@section('child-title')[管理]都道府県編集@endsection
@section('child-description')[管理]都道府県編集@endsection

@section('meta')
<meta name="robots" content="nofollow,noindex">
@stop

@section('content')
<div class="panel panel-default">
	@if (session('message'))
	<div class="alert alert-success">
		{{ session('message') }}
	</div>
	@endif
	<a class="btn btn-default" href="{{route('admin')}}">管理画面トップ</a>
	<hr>
	<p>CSVで追加更新</p>
	<form method="POST" action="{{ route('admin.prefs.csvregist') }}" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="form-group">
			<input class="form-control" type="file" name="data_file">
		</div>
		<input class="btn btn-primary" type="submit" value="CSVで追加">
	</form>
	<hr>
	<p>都道府県リスト</p>
	<table class="table table-hover table-responsive-sm small">
		<thead>
			<th>コード</th>
			<th>都道府県</th>
			<th>市区町村1</th>
			<th>市区町村2</th>
			<th>緯度</th>
			<th>経度</th>
		</thead>
		<tbody>
			@foreach(\App\Prefecture::cursor() as $p)
			<tr>
				<td>{{$p->code}}</td>
				<td>{{$p->pref_name}}</td>
				<td>{{$p->city_name}}</td>
				<td>{{$p->city_sub_name}}</td>
				<td>{{$p->lat}}</td>
				<td>{{$p->lng}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection
