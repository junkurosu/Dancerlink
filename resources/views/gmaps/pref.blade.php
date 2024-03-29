@extends('layouts.app')

@section('child-title')都道府県選択@endsection
@section('child-description')都道府県選択ページです。@endsection

@section('breadcrumb')
{{ Breadcrumbs::render('studio.pref') }}
@stop

@section('meta')
<meta name="robots" content="nofollow,noindex">
@stop

@section('content')
<div class="panel-heading"><h1>地図からスタジオを検索する</h1></div>
<div class="panel panel-default">
	@if (session('message'))
	<div class="alert alert-success">
		{{ session('message') }}
	</div>
	@endif
	
	<div id="preftest">
		<preftest></preftest>
	</div>
</div>
@endsection

@push('js')
<script type="text/javascript" src="{{asset('js/preftest.js')}}"></script>
@endpush
