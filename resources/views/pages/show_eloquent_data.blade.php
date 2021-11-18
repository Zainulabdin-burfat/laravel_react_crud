<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Data</title>
</head>
<body>
<center>
	<h1>Hidaya </h1>
	<hr />

	<table border="1">
		<tr>
			<th>Titile</th>
			<th>Description</th>
			<th>Author Name</th>
			<th>Categories</th>		
		</tr>
		@forelse($result as $article)
		<tr>
			<td>{{ $article['title'] }}</td>
			<td>{{ $article['description']}}</td>
			<td>{{ $article['user']['name'] }}</td>
			<td>
				@foreach($article['category'] as $key =>$category)
					{{ $category['category_type'] }}, 
				@endforeach
			</td>
		</tr>
		@empty 
		<tr>
			<td colspan="4"> No Data</td>
		</tr>
		@endforelse
	</table>
</center>

</body>
</html>