<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create Post</title>
</head>
<body>
	<hr />
		<form action="/post/<?php echo $id; ?>" method="POST">
			@csrf()
			@method('PUT')
			<input type="hidden" name="podt_id" value="<?php echo $id; ?>">
			<table border="2">
				<tr>
					<td colspan="2" style="text-align: center;">Post Update</td>
				</tr>
				<tr>
				<td>Full Name: </td>
				<td>
					<input type="text" name="fullname" value="Ali"/>
				</td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="submit" value="Update Data"></td>
				</tr>
			</table>
			
		</form>
		<hr />

</body>
</html>