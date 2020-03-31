@extends('layouts.app')

@section('child-title')[管理]管理者画面@endsection
@section('child-description')[管理]管理者画面ページです。@endsection

@section('breadcrumb')
{{ Breadcrumbs::render('Admin') }}
@stop

@section('child-title')[管理]ホーム@endsection
@section('child-description')@endsection

@section('meta')
<meta name="robots" content="nofollow,noindex">
@stop

@section('content')
<div class="panel panel-default">
	<p><a href="{{route('admin.permission')}}">スタジオ許可</a></p>
	<p><a href="{{route('admin.studios')}}">スタジオ編集</a></p>
	<p><a href="{{route('admin.register')}}">スタジオ登録</a></p>
	<p><a href="{{route('admin.contact')}}">問い合わせ一覧</a></p>
	<p><a href="{{route('admin.prefs.index')}}">都道府県編集</a></p>
	<p><a href="{{route('admin.preftest')}}">都道府県検索テスト</a></p>
	<form class="form-horizontal" method="POST" action="{{ route('logout') }}">
            {{ csrf_field() }}
    <button>ログアウト</button>
    </form>
</div>
@endsection
