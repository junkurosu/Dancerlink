@extends('layouts.app')
@include('layouts.part')

@section('child-title')運営会社@endsection
@section('child-description')運営会社概要@endsection
@section('breadcrumb')
{{ Breadcrumbs::render('company') }}
@stop

@section('meta')
<meta name="robots" content="nofollow,noindex">
@stop



@section('content')
<div class="panel panel-default">
    <div class="panel-heading"><h1>運営会社</h1></div>

    <div class="panel-body">
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>会社名</th>
                    <td></td>
                </tr>
                <tr>
                    <th>住所</th>
                    <td></td>
                </tr>
                <tr>
                    <th>設立日</th>
                    <td></td>
                </tr>
                <tr>
                    <th>主要取引銀行</th>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th>メール</th>
                    <td></td>
                </tr>
                <tr>
                    <th>代表取締役</th>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
