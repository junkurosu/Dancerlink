@extends('layouts.app')

@section('child-title')[管理]カテゴリー編集@endsection
@section('child-description')[管理]カテゴリー編集@endsection

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
<!-- 	<hr>
	<p>CSVで追加更新</p>
	<p><a href="{{ url()->current().'/csvfile' }}" download="dream.csv">CSVファイル取得</a></p>
	<form method="POST" action="{{ url()->current().'/csvregist' }}" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="form-group">
			<input class="form-control" type="file" name="data_file">
		</div>
		<input class="btn btn-primary" type="submit" value="CSVで追加">
	</form>
	<hr> -->
	<p>新規追加</p>
	<form action="{{url()->current()}}" method="post">
		{{ csrf_field() }}
		<div class="form-group">
			<label>名前</label>
			<input name="name" class="form-control" type="text">
		</div>

		<div class="form-group">
			<label>説明文</label>
			<textarea name="description" class="form-control" rows="5"></textarea>
		</div>

		<div class="form-group">
			<label>画像URL</label>
			<input name="image_url" class="form-control" type="text">
		</div>
		<div class="form-group">
			<label>アフィリエイト用テキスト</label>
			<input name="affiliate_text" class="form-control" type="text">
		</div>
		<div class="form-group">
			<label>アフィリエイト用URL</label>
			<input name="affiliate_url" class="form-control" type="text">
		</div>
		<div class="form-group">
			<label>ランキングカテゴリー</label>
			<br>
			<input type="radio" name="ranking" value="1" checked>政治<br>
			<input type="radio" name="ranking" value="2">経済<br>
			<input type="radio" name="ranking" value="3">その他<br>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="新規追加">
		</div>
		<input type="hidden" name="cmd" value="create">
	</form>
	<hr>
	<p>各カテゴリー編集</p>	
	@foreach(\App\Category::all() as $v)
	<p>
		<a href="{{route('admin.category.edit',$v->id)}}">{{$v->name}}</a>
	</p>
	@endforeach

</div>
@endsection
