<!doctype html>
<html>
	<head>
		<title>添加信息</title>
	</head>
	<body>
		<form action='/stu' method='post'>
			<input type='hidden' name='_token' value="{{ csrf_token() }}">
			姓名：<input type='text' name='name'><br>
			密码：<input type='text' name='password'><br>
			<input type='submit' value='提交'>
		</form>
	</body>
</html>