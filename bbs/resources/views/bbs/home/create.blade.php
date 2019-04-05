@extends('bbs.layout.master')
@section('title',"发帖")
@section('content')
	<h1 id="subject">发表新帖
	<a href="{{asset('bbs/home/login.html')}}" class="add-user"><button type="button" class="btn btn-primary">Login</button></a> &nbsp;&nbsp; 
	<a href="{{asset('bbs/home/add.html')}}" class="add-user"><button type="button" class="btn btn-primary">Add</button></a>
	<a href="{{asset('/')}}" class="add-user"><button type="button" class="btn btn-primary">首页</button></a>
	</h1>
	@include('bbs.layout.navbar')
	<form action="{{asset('bbs/home/insertTopic.html')}}" method="post">
	<!-- <form action="{{asset('bbs/home/insertTopic.html')}}" method="post" class="form-horizontal"> -->
		{{csrf_field()}}
		<table>
			<tr>
				<td>标题: <input type="text" name="TTOPIC"></td>
				<td><select name="TSID" >  
					 @foreach($sessions as $key => $session)
						<option value="{{$key+1}}">{{$session->SName}}</option> 
					@endforeach
					</select></td>
			</tr>
			<tr>
				<td colspan="2"><textarea name="TContents"   cols="150"   rows="10"   style="OVERFLOW:   hidden"></textarea></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" class="btn btn-primary" value="按钮"></td>
			</tr>
		</table>
			<!-- <div class="row" style="height: 50px;" >
				<div class="col-3">标题: <input type="text" name="TTOPIC"></div>
				<div class="col-9">
					<select name="TSID" >  
					 @foreach($sessions as $session)
						<option value="1">{{$session->SName}}</option> 
					@endforeach
					</select>
				</div>
			</div>
		
		<div class="row">
			<textarea name="TContents"   cols="450"   rows="10"   style="OVERFLOW:   hidden"></textarea>
		</div>
		<br>
		<div class="clear">
			<input type="submit" class="btn btn-primary" value="按钮">
		</div> -->
	</form>
	
@stop