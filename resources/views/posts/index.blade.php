<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Manage Post</title>
</head>
<body>
<center>
	<h4>Manage Post</h4>
	<hr />
	<a href="/post/create">Add New Post Form </a>
	<hr />
	<hr />
	<a href="/post/145/edit">Update Post Form </a>
	<hr />
	<h3>Delete Method Using Post Controller Resource</h3>
	<form action="/post/3454" method="POST">
			@csrf()
			@method('DELETE')
			
			<table border="2">
				<tr>
					<td colspan="2" style="text-align: center;">Post Delete</td>
				</tr>
				<tr>
				<td>Full Name: </td>
				<td>
					<input type="text" name="fullname" value="Ali"/>
				</td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="submit" value="Delete Data"></td>
				</tr>
			</table>
			
		</form>

</center>
</body>
</html>