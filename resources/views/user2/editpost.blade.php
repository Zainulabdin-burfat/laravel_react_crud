<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin</title>
</head>
<body>
	<center>
		<h1>
			Welcome Admin: 
			{{session('user')['name']}}
		</h1>
		<a href="/custom_logout"> Logout Here</a>
		<hr />
		@if(session('msg'))
		<span>
		{{ session('msg') }}
		</span>
		@endif
	
		
		<fieldset>
			<legend>Edit Post</legend>
			{!! Form::open(array('url'=>"/admin2/add_post","method"=>"Post")) !!}
			<table>
				<tr>
					<td>
						{!! Form::label("title","Title") !!}
					</td>
					<td>
						{!! Form::text("title",null, array("required")) !!}
					</td>
				</tr>
				<tr>
					<td>
						{!! Form::label("des","Description") !!}
					</td>
					<td>
						{!! Form::textarea("des",null,array("required")) !!}
					</td>
				</tr>
				<tr>
					<td colspan="2">
						{!! Form::input("submit","add_post","Add Post") !!}
					</td>
				</tr>
			</table>
			{!! Form::close() !!}
		</fieldset>
		<hr />
		

	</center>

</body>
</html>