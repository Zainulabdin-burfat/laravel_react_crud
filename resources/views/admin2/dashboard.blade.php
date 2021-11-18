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
			<legend>Add Post</legend>
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
		
		<table border="2">
			<tr>
				<th>Id</th>
				<th>Title</th>
				<th>Des</th>
				<th>Action</th>
			</tr>
		
		@forelse($posts as $key=>$post)
		<tr>
			<td>{{ $post->post_id }}</td>
			<td>{{ $post->title }}</td>
			<td>{{ $post->des }}</td>
			<td><a href="/admin2/editpost/{{$post->post_id}}">Edit</a></td>
		</tr>
		
		@empty
		<tr>
			<td colspan="3">
				{{ "No Posts" }}
			</td>
		</tr>
		
		@endforelse
		</table>

	</center>

</body>
</html>