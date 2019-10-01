@extends('layouts.app')

@section('child-title')[管理]「{{$category->name}}」編集@endsection
@section('child-description')[管理]「{{$category->name}}」編集@endsection

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
	<p><a class="btn btn-default" href="{{route('admin')}}">管理画面トップ</a></p>
	<p><a class="btn btn-default" href="{{route('admin.category')}}">カテゴリー一覧編集へ</a></p>
	<hr>
	<p>カテゴリー項目編集</p>
	<form action="{{url()->current()}}" method="post">
		{{ csrf_field() }}
		<div class="form-group">
			<label>名前</label>
			<input name="name" class="form-control" type="text" value="{{$category->name}}">
		</div>

		<div class="form-group">
			<label>説明文</label>
			<textarea name="description" class="form-control" rows="5">{!! nl2br($category->description) !!}</textarea>
		</div>

		<div class="form-group">
			<label>画像URL</label>
			<input name="image_url" class="form-control" type="text" value="{{$category->image_url}}">
		</div>
		<div class="form-group">
			<label>アフィリエイト用テキスト</label>
			<input name="affiliate_text" class="form-control" type="text" value="{{$category->affiliate_text}}">
		</div>
		<div class="form-group">
			<label>アフィリエイト用URL</label>
			<input name="affiliate_url" class="form-control" type="text" value="{{$category->affiliate_url}}">
		</div>
		<div class="form-group">
			<label>ランキングカテゴリー</label>
			<br>
			<input type="radio" name="ranking" value="1" @if($category->ranking == 1) checked @endif>政治<br>
			<input type="radio" name="ranking" value="2" @if($category->ranking == 2) checked @endif>経済<br>
			<input type="radio" name="ranking" value="3" @if($category->ranking == 3) checked @endif>その他<br>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="更新">
		</div>
		<input type="hidden" name="cmd" value="category">
	</form>
	<hr>
	<p>メタ編集</p>
	<form action="{{url()->current()}}" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="cmd" value="meta">
		<div class="form-group">
			<div class="col-md-1">ID</div>
			<div class="col-md-4">meta_key</div>
			<div class="col-md-5">meta_value</div>
			<div class="col-md-2">priority</div>
		</div>
		@foreach($category->metas as $meta)
		<div class="form-group">
			<div class="col-md-1">
				{{$meta->id}}
				<input type="hidden" name="meta_id[]" value="{{$meta->id}}">
			</div>
			<div class="col-md-4">
				<input class="form-control" name="meta_key[]" type="text" value="{{$meta->meta_key}}">
			</div>
			<div class="col-md-5">
				<input class="form-control" name="meta_value[]" type="text" value="{{$meta->meta_value}}">
			</div>
			<div class="col-md-2">
				<input class="form-control" name="meta_priority[]" type="text" value="{{$meta->priority}}">
			</div>
		</div>
		@endforeach

		@for($i=0; $i < 5; $i++)
		<div class="form-group">
			<div class="col-md-1">
				新規
				<input type="hidden" name="meta_id[]" value="0">
			</div>
			<div class="col-md-4">
				<input class="form-control" name="meta_key[]" type="text">
			</div>
			<div class="col-md-5">
				<input class="form-control" name="meta_value[]" type="text">
			</div>
			<div class="col-md-2">
				<input class="form-control" name="meta_priority[]" type="text">
			</div>
		</div>
		@endfor
		<div class="clear"></div>
		<br>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="更新">
		</div>
		
	</form>
	


</div>
@endsection
