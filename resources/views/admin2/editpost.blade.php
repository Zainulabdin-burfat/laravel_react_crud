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
			{!! Form::open(array('url'=>"/admin2/update_post","method"=>"Post")) !!}
			@method('PUT')
			{!! Form::input('hidden',"post_id", $post->post_id,array('id'=>"post_id")) !!}
			<table>
				<tr>
					<td>
						{!! Form::label("title","Title") !!}
					</td>
					<td>
						{!! Form::text("title",$post->title, array("required")) !!}
					</td>
				</tr>
				<tr>
					<td>
						{!! Form::label("des","Description") !!}
					</td>
					<td>
						{!! Form::textarea("des",$post->des,array("required")) !!}
					</td>
				</tr>
				<tr>
					<td colspan="2">
						{!! Form::input("submit","update_post","Update Post") !!}
					</td>
				</tr>
			</table>
			{!! Form::close() !!}
		</fieldset>
		<hr />
		

	</center>

</body>
</html>