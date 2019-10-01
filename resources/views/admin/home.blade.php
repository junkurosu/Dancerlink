@extends('layouts.app')

@section('child-title')[管理]ホーム@endsection
@section('child-description')@endsection

@section('meta')
<meta name="robots" content="nofollow,noindex">
@stop

@section('content')
<div class="panel panel-default">
	<p><a href="{{route('admin.category')}}">カテゴリーを編集する</a></p>
	<p><a href="{{route('admin.spam')}}">スパムコメント確認</a></p>
</div>
@endsection
