@extends('layouts.app')

@section('child-title')[管理]都道府県テスト@endsection
@section('child-description')[管理]都道府県テスト@endsection

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
	<div id="preftest">
		<preftest></preftest>
	</div>
</div>
@endsection

@push('js')
<script type="text/javascript" src="{{asset('js/preftest.js')}}"></script>
@endpush
