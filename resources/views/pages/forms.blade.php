<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Forms </title>
</head>
<body>
	<center>
		<h1>Hidaya- Laravel Http Methods Examples</h1>
		<hr />
		<form action="{{route('postmethod')}}" method="POST">
		<!-- CSRF = Cross Site Request Forgery -->
		<!-- XSRF -->
		<!-- Sea-Surf -->
		<!-- Session Riding -->
		<!-- Stop One Time Attack -->

		<!-- <form action="/post_method" method="POST"> -->
			<!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
			@csrf()

			<table border="2">
				<tr>
					<td colspan="2" style="text-align: center;">Post Method</td>
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
		<form method="POST" action="/put_method">
		@method("PUT")
		@csrf()	
		<table border="2">
				<tr>
					<td colspan="2" style="text-align: center;">Put Method</td>
				</tr>
				<tr>
				<td>Full Name: </td>
				<td>
					<input type="text" name="fullname" />
				</td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="submit" value="Update Data"></td>
				</tr>
			</table>
		</form>
		<hr />
		<form method="POST" action="{{route('deletemethod')}}">
		@method("DELETE")
		@csrf()	
		<table border="2">
				<tr>
					<td colspan="2" style="text-align: center;">Delete Method</td>
				</tr>
				<tr>
				<td>Id :</td>
				<td>
					<input type="number" name="id_number" />
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