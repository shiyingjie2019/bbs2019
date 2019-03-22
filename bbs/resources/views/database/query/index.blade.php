@extends('database.query.layout.master')
@section('title','首页')
@section('content')
	<h1 id="subject">首页</h1>
	<table>
		<tr>
			<td>序号</td>
			
			<td>姓名</td>
			<td>头像</td>
			<td>性别</td>
			<td>年龄</td>
			
			<td>操作</td>
		</tr>
		@foreach($records as $record)
		<tr>
			<td>{{($records->currentPage()-1)*$records->perPage()+$loop->iteration}}</td>
			<td>{{$record->username}}</td>
			<td><img src="{{asset('images/'.$record->face)}}" alt="" style="width:30px;height:30px;border-radius:100%;" ></td>
			<td>{{$record->sex?'女':"男"}}</td>
			<td>{{$record->age}}</td>
			<td><a href="{{url('database/query/edit-'.$record->id)}}">编辑</a>&nbsp;|&nbsp;<a href="{{url('database/query/destroy-'.$record->id)}}">删除</a></td>
		</tr>
		@endforeach
		
	</table>
		{{$records->links()}}
</body>
</html>
@stop