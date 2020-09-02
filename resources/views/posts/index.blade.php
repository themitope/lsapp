@extends('layouts.app')
@section('content')
<h1>Posts</h1>
@if(count($posts) > 0)
@foreach($posts as $post)
<div class="card bg-light p-3 m-2">
	<div class="row">
		<div class="col-md-4 col-sm-4">
			<img style= "width:100% "src="/storage/cover_images/{{$post->cover_image}}">
		</div>
	</div>
	<h3><a href="/posts/{{$post->id}}">
		{{$post->title}}</h3>
	<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
	</div>
@endforeach
{{$posts->links()}}
@else
<p>No posts found</p>
@endif
@endsection