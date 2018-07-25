@if(count($errors) > 0)
		@foreach($errors->all as $error)
			<br>
			<div class="alert alert-danger" role="alert">
				{{$error}}
			</div>
		@endforeach
@endif

@if(session('success'))
		<br>
		<div class="alert alert-success" role="alert">
			{{session('success')}}
		</div>
@endif

@if(session('error'))
		<br>
		<div class="alert alert-danger" role="alert">
			{{session('error')}}
		</div>
@endif