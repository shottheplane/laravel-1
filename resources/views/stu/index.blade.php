<!doctype html>
<html lang="en">
	<head>
		<title>学生信息管理系统</title>
	</head>
	<script type="text/javascript">
		function doDel(id){
			if(confirm("确定要删除吗？")){
				var myform = document.myform;
				myform.action = "/stu/"+id;
				myform.submit();
			}
		}
		
	</script>
	<body>
		@include("stu.menu")
		<form action="" name="myform" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="_method" value="delete">	
			</form>
		<table width="600px" border="1px">
			<tr>
				<th>编号</th>
				<th>姓名</th>
				<th>密码</th>
				<th>操作</th>
			</tr>

			@foreach($list as $stu)
			
			<tr>
				<td>{{ $stu->id }}</td>
				<td>{{ $stu->name }}</td>
				<td>{{ $stu->password }}</td>
				<td>
					<center>
					<a href="javascript:doDel({{ $stu->id }})">删除</a>
					<a href="/stu/{{ $stu->id }}/edit">修改</a>
					
				</center>
				</td>
			</tr>
			@endforeach
		</table>	

	</body>
</html>