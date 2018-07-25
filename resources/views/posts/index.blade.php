@extends('layouts.app')

@section('content')
	<br>
	<h1>Posts</h1>
	@if(count($posts) > 0)
		@foreach($posts as $post)
			<div class="col-md-12">
				<div class="card bg-light mb-3">
	  				<div class="card-header"><a href="/posts/{{$post->id}}">{{$post->title}}</a></div>
	  				<div class="card-body">
	    					<h5 class="card-title">{!!$post->body!!}</h5>
	    					<small>Written on {{$post->created_at}}</small>
	  				</div>
				</div>
			</div>
		@endforeach
		{{$posts->links()}}
	@else
		<p> No posts found </p>
	@endif
@endsection