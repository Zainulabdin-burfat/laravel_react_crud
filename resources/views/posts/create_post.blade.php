<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create Post</title>
</head>
<body>
	<hr />
		<form action="/post" method="POST">
			@csrf()
			<table border="2">
				<tr>
					<td colspan="2" style="text-align: center;">Post Create</td>
				</tr>
				<tr>
				<td>Full Name: </td>
				<td>
					<input type="text" name="fullname" />
				</td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="submit" value="Add Data"></td>
				</tr>
			</table>
			
		</form>
		<hr />

</body>
</html>