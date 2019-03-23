@extends('bbs.layout.master')
@section('title',"用户注册")
@section('content')
	<h1 id="subject">
		<img src="{{url('images\logo.png')}}" alt="">
		<a href="{{asset('bbs/home/login.html')}}" class="add-user">Login</a>&nbsp;&nbsp; <a href="{{asset('/')}}" class="add-user">首页</a>
	</h1>
	@include('bbs.layout.navbar')
	<form action="">
		<table>
			<tr>
				<td>用户名</td>
				<td><input type="text" name="Uname"></td>
			</tr>
			<tr>
				<td>密&nbsp;码</td>
				<td><input type="password" name="UPassword"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="UEmail"></td>
			</tr>
			<tr>
				<td>生日</td>
				<td><input type="text" name="UBirthday"></td>
			</tr>
			<tr>
				<td>性别</td>
				<td>
					男<input type="radio" name="UBirthday" value="0" checked>
					女<input type="radio" name="UBirthday" value="1" >
				</td>
			</tr>
			<tr>
				<td>验证码</td>
				<td><input type="text" ><img src="" alt=""></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" value="登录">&nbsp; &nbsp;&nbsp;&nbsp;<input type="reset" value="重置"></td>
			</tr>
		</table>
	</form>
@stop