@extends('layouts.app')

@section('child-title')お問い合わせ確認@endsection
@section('child-description')お問い合わせ確認ページです。@endsection

@section('breadcrumb')
{{ Breadcrumbs::render('confirm') }}
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">お問い合せ確認</div>

    <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{ route('confirm') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Name</label>

                <div class="col-md-6">
                    {{$name}}
                    <input id="name" type="hidden" class="form-control" name="name" value="{{$name}}" required autofocus>

                    @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
            </div>


            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                <div class="col-md-6">
                    {{$email}}
                    <input id="email" type="hidden" class="form-control" name="email" value="{{$email}}" required autofocus>

                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
                <label for="contact" class="col-md-4 control-label">問い合わせ内容</label>

                <div class="col-md-6">
                    {{$contact}}
                    <input id="contact" type="hidden" class="form-control" name="contact"  rows="10"
                    value="{{$contact}}"required>


                    @if ($errors->has('contact'))
                    <span class="help-block">
                        <strong>{{ $errors->first('contact') }}</strong>
                    </span>
                    @endif
                    
                </div>
            </div>

            

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        確認
                    </button>

                    
                </div>
            </div>
        </form>

        
    </div>
</div>
@endsection
