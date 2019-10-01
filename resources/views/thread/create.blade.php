@extends('layouts.app')

@section('child-title')スレッド新規作成@endsection
@section('child-description')スレッド新規作成ページです。@endsection

@section('meta')
<meta name="robots" content="nofollow,noindex">
@stop

@section('breadcrumb')
{{ Breadcrumbs::render('thread.create') }}
@stop

@section('content')
<div class="panel panel-default">
	@if (session('status') && session('status') == 'alert-success')
	<div class="alert alert-success">
		{{ session('message') }}
	</div>
	@elseif(session('status') && session('status') == 'alert-danger')
	<div class="alert alert-danger">
		{{ session('message') }}
	</div>
	@endif

	@if(session('threadurl'))
	<a class="btn btn-primary" href="{{session('threadurl')}}">作ったスレッドを見に行く</a>
	@endif
	<div class="panel-body">
		<h2 class="header">スレッド新規作成</h2>
		<form action="{{url()->current()}}" method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<label>スレッドタイトル</label>
				<input name="title" class="form-control" type="text">
				<small>スレッドのタイトルを決めます。他のユーザーがひと目で何について書いているのか分かるようなタイトルをつけましょう。</small>
			</div>
			<div class="form-group">
				<label>説明文</label>
				<textarea name="description" class="form-control" rows="5"></textarea>
				<small>スレッドの内容の詳細や注意書きはこの説明文に追加しましょう。どういった口コミを投稿してほしいかなど、あなたの要望も記入するとより活発になりやすいです！</small>
			</div>
			<div class="form-group">
				<label>カテゴリー選択</label>
				<select class="form-control" name="category_id">
					@foreach(\App\Category::all() as $category)
					<option value="{{$category->id}}">{{$category->name}}</option>
					@endforeach
				</select>
				<small>あなたのスレッドのカテゴリーを選択します。</small>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="新規追加">
			</div>
		</form>
		<a class="btn btn-default" href="{{route('home')}}">トップへ戻る</a>
	</div>
</div>
@endsection
