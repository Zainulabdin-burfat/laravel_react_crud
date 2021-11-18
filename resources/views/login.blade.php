<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
	<center>
		<fieldset>
			<legend>Login Here...</legend>
			<form action="/login_process" method="POST">
			@csrf()
			<table>
				<tr>
					<td>
						Email:
					</td>
					<td>
						<input type="email" name="email" />
					</td>
				</tr>
				<tr>
					<td>
						Password:
					</td>
					<td>
						<input type="password" name="password" />
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" name="login" value="Login">
					</td>
				</tr>
			
			</table>
		</form>
		</fieldset>
	</center>

</body>
</html>