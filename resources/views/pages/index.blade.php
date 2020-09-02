@extends('layouts.app')
@section('content')
	<div class="jumbotron text-center">
	    <h1>{{$title}}</h1>
	        <p> this is the Laravel application form the "Laravel From Youtube series"</p>
	        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
	</div>
@endsection