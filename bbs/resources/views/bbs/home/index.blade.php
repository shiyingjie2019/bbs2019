@extends('bbs.layout.master')
@section('title',"BBS2019首页")
@section('content')
	<h1 id="subject">
		<img src="{{url('images\logo.png')}}" alt="">
		<a href="{{asset('bbs/home/login.html')}}" class="add-user"><button type="button" class="btn btn-primary">Login</button></a> &nbsp;&nbsp; 
		<a href="{{asset('bbs/home/add.html')}}" class="add-user"><button type="button" class="btn btn-primary">Add</button></a>
	</h1>
	@include('bbs.layout.navbar')
	
	
	<p>这里是论坛内容</p>
	
	
@stop