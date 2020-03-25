@extends('layouts.app')

@section('child-title')スタジオ一覧@endsection
@section('child-description')スタジオ一覧ページです。@endsection


@section('breadcrumb')
{{ Breadcrumbs::render('studio.archive') }}
@stop

@section('content')
<div class="panel panel-default">
	<div class="panel-heading"><h1>@yield('child-title')</h1></div>
	<div class="panel-body">
		@foreach($items as $item)
		<div class="thread-list">
			<p>

				<form method="POST" action="{{ route('studioDetails') }}">
					{{ csrf_field() }}
					<div><small>{{$item->name}}

						<button type="submit" class="btn btn-primary">
                                    スタジオページに進む
                                </button>

					</small></div>
					<input type="hidden" name="id" value="{{$item->id}}">
				</form>
				
			</p>
				
		</div>
		@endforeach
		{{$items->links()}}
	</div>
</div>
@endsection