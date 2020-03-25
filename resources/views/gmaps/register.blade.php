@extends('layouts.app')

@section('breadcrumb')
{{ Breadcrumbs::render('admin.register') }}
@stop


@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Register</div>

    <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Name</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('lat') ? ' has-error' : '' }}">
                <label for="lat" class="col-md-4 control-label">緯度　Latitude</label>

                <div class="col-md-6">
                    <input id="lat" type="lat" class="form-control" name="lat" required>

                    @if ($errors->has('lat'))
                    <span class="help-block">
                        <strong>{{ $errors->first('lat') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('lng') ? ' has-error' : '' }}">
                        <label for="lng" class="col-md-4 control-label">経度　Longitude</label>

                            <div class="col-md-6">
                                <input id="lng" type="lng" class="form-control" name="lng" required>

                                @if ($errors->has('lng'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lng') }}</strong>
                                    </span>
                                @endif
                            </div>
            </div>

            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                <label for="address" class="col-md-4 control-label">住所　Address</label>

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
                                @if ($errors->has('url'))
                    <span class="help-block">
                        <strong>{{ $errors->first('url') }}</strong>
                    </span>
                    @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                            <label for="text" class="col-md-4 control-label">詳細</label>

                            <div class="col-md-6">
                                <textarea id="text" type="text" class="form-control" name="text"  rows="10" required></textarea>

                                @if ($errors->has('text'))
                    <span class="help-block">
                        <strong>{{ $errors->first('text') }}</strong>
                    </span>
                    @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cost') ? ' has-error' : '' }}">
                            <label for="cost" class="col-md-4 control-label">料金</label>

                            <div class="col-md-6">
                               <textarea id="cost" type="text" class="form-control" name="cost"  rows="5"required></textarea>
                                @if ($errors->has('cost'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cost') }}</strong>
                    </span>
                    @endif
                            </div>
                        </div>

                    <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
                            <label for="time" class="col-md-4 control-label">使用可能時間</label>

                            <div class="col-md-6">
                                <input id="time" type="text" class="form-control" name="time" required>
                                @if ($errors->has('time'))
                    <span class="help-block">
                        <strong>{{ $errors->first('time') }}</strong>
                    </span>
                    @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
            
        </form>
    </div>
</div>

@endsection
