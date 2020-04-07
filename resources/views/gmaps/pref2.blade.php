@extends('layouts.app')

@section('child-title')都道府県選択@endsection
@section('child-description')都道府県選択ページです。@endsection

@section('breadcrumb')
{{ Breadcrumbs::render('studio.pref2') }}
@stop

@section('meta')
<meta name="robots" content="nofollow,noindex">
@stop

@section('content')
<div class="panel-heading"><h1>住所からスタジオを検索する</h1></div>
<div class="panel panel-default">
	@if (session('message'))
	<div class="alert alert-success">
		{{ session('message') }}
	</div>
	@endif
	
	<div id="preftest2">
		<preftest2></preftest2>
	</div>
</div>
@endsection

@push('js')
<script type="text/javascript" src="{{asset('js/preftest.js')}}"></script>
@endpush

