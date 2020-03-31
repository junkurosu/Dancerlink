@extends('layouts.app')

@section('child-title')スタジオ登録@endsection
@section('child-description')スタジオ登録ページです。@endsection

@section('breadcrumb')
{{ Breadcrumbs::render('register') }}
@stop


@section('content')
<div class="panel panel-default">
    <div class="panel-heading">スタジオ登録画面</div>
    <h4>{{$message}}</h4>

    <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{ route('studioCreate') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">スタジオ名</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                <label for="address" class="col-md-4 control-label">住所</label>

                <div class="col-md-6">
                    <input id="address" type="address" class="form-control" name="address" required>

                    @if ($errors->has('address'))
                    <span class="help-block">
                        <strong>{{ $errors->first('address') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

           
                        <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                            <label for="url" class="col-md-4 control-label">URL</label>

                            <div class="col-md-6">
                                <input id="url" type="url" class="form-control" name="url" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    登録
                                </button>
                            </div>
                        </div>
            
        </form>

    </div>
</div>

@endsection
