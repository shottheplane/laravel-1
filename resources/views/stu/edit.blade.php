<!doctype html>
<html>
	<head>
		<title>修改信息</title>
	</head>
	<body>
		<form action='/stu/{{$vo->id}}' method='post'>
			<input type='hidden' name='_token' value="{{ csrf_token() }}">
			<input type="hidden" name="_method" value="put">
			姓名：<input type='text' name='name' value="{{$vo->name}}"><br>
			密码：<input type='text' name='password' value="{{$vo->password}}"><br>
			<input type='submit' value='修改'>
		</form>
	</body>
</html>