@extends('layouts.app')

@section('child-title')スタジオ詳細@endsection
@section('child-description')スタジオ詳細ページです。@endsection

@section('breadcrumb')
{{ Breadcrumbs::render('studioDetails',$item) }}
@stop

@section('content')

<div class="panel panel-default">
	<div class="panel-heading"><h1>{{$item->name}}</h1></div>


	<div class="panel-body">

<div class="panel panel-default">
		<div class="panel-heading">
		スタジオ詳細
	</div>
		<p>{{$item->text}}</p>
	
		
        <div class="panel-heading">
        	STUDIO DATA
	   </div>
		
		<tbody>
			<tr>
				<th>レンタル料金</th>
				<td>
					<p>{{$item->cost}}</p>
				</td>
			</tr>
			<tr>
				<th>使用可能時間</th>
				<td>
					<p>{{$item->time}}</p>
				</td>
			</tr>
			<tr>
				<th>住所</th>
				<td>
					<p>{{$item->address}}</p>
				</td>
			</tr>
			<tr>
				<th>URL</th>
				<td>
					<p><a class="thread_title" href="{{$item->url}}" target="_blank">"{{$item->url}}"</a></p>
				</td>
			</tr>
		</tbody>
	</div>

</div>
	<div class="panel-body">
		<h5>※このスタジオの周辺のスタジオをGoogleMapを用いて探す</h5>
		<form class="form-horizontal" method="POST" action="{{ route('mapsearch') }}">
					{{ csrf_field() }}
					<input name="lat" type="hidden" value="{{$item->lat}}">
					<input name="lng" type="hidden" value="{{$item->lng}}">
					<button type="submit" class="btn btn-primary">
                                    探す
                                </button>
        </form>

	</div>
</div>


@endsection

