@extends('layouts.app')
@include('layouts.part')

@section('child-title')特定商取引法に基づく表記@endsection
@section('child-description')特定商取引法に基づく表記@endsection
@section('breadcrumb')
{{ Breadcrumbs::render('tokusho') }}
@stop

@section('meta')
<meta name="robots" content="nofollow,noindex">
@stop



@section('content')
<div class="panel panel-default">
    <div class="panel-heading"><h1>特定商取引法に基づく表記</h1></div>

    <div class="panel-body">
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>サイト運営者</th>
                    <td></td>
                </tr>
                <tr>
                    <th>所在地</th>
                    <td></td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td></td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td></td>
                </tr>
                <tr>
                    <th>販売URL</th>
                    <td></td>
                </tr>
                <tr>
                    <th>お支払い方法</th>
                    <td></td>
                </tr>
                <tr>
                    <th>販売価格</th>
                    <td></td>
                </tr>
                <tr>
                    <th>商品代金以外の
                    必要金額</th>
                    <td></td>
                </tr>
                <tr>
                    <th>販売数量</th>
                    <td></td>
                </tr>
                <tr>
                    <th>お申込み有効期限</th>
                    <td></td>
                </tr>
                <tr>
                    <th>商品引渡し時期</th>
                    <td></td>
                </tr>
                <tr>
                    <th>商品引渡し方法</th>
                    <td></td>
                </tr>
                <tr>
                    <th>ソフトウェア
                    動作環境</th>
                    <td></td>
                </tr>
                <tr>
                    <th>返品・
                    不良品について</th>
                    <td></td>
                </tr>
                <tr>
                    <th>表現、及び商品に
                    関する注意書き</th>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
