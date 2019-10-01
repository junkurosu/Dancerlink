@extends('layouts.app')
@include('layouts.part')

@section('child-title')外部リンク@endsection
@section('child-description')外部リンク@endsection
@section('breadcrumb')
{{ Breadcrumbs::render('link') }}
@stop

@section('meta')
<meta name="robots" content="nofollow,noindex">
@stop



@section('content')
<div class="panel panel-default">
    <div class="panel-body">
        <p>外部のサイトに行こうとしています。外部のサイトにいく場合は、自己責任でお願いします。</p>
        <p><a href="{{$link}}" rel="nofollow" target="_blank">{{$link}}</a></p>
        <p><a class="btn btn-default" href="{{$back}}">元のページへ戻る</a></p>
    </div>
</div>
@endsection
