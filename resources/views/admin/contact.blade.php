@extends('layouts.app')

@section('child-title')お問い合わせ一覧@endsection
@section('child-description')スタジオ一覧ページです。@endsection


@section('breadcrumb')
{{ Breadcrumbs::render('admin.contact') }}
@stop

@section('content')
<div class="panel panel-default">
	<div class="panel-heading"><h1>@yield('child-title')</h1></div>
	<div class="panel-body">
		@foreach($contacts as $contact)
		<div class="thread-list">
			<p>
				{{$contact->name}} ({{$contact->email}})
			</p>
				<div>
				<small class="gray">{{$contact->contact}}</small></div>

			<small>
				<form method="POST" action="{{ route('admin.contact') }}">
					{{ csrf_field() }}
					<input type="hidden" name="id" value="{{$contact->id}}">
					<button type="submit" class="my-2 btn btn-sm btn-danger d-inline-block" onclick="return confirm('削除確認')">
						削除
					</button>
				</form>

			</small>
		</div>
		@endforeach
		{{$contacts->links()}}
	</div>
</div>
@endsection