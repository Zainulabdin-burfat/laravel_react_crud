<center>
	Article Data
	<br />
	<span id="msg">
		
	</span>
</center>
<table class="table table-dark table-striped">
	<tr>
		<th>
			Title
		</th>
		<th>
			Description
		</th>
		<th>
			Author
		</th>
		<th>
			Action
		</th>
	</tr>
	@forelse($article as $article_data)
		<tr id="row_{{$article_data['id']}}">
			<td>{{ $article_data['title'] }}</td>
			<td>{{ $article_data['description'] }}</td>
			<td>{{ $article_data['user']['name'] }}</td>
			<td>
				<a href="#" class="delete" data-id="{{ $article_data['id'] }}">Delete</a>
			</td>
		</tr>

	@empty
	<tr>
		<th colspan="3">
			No Record Found!..........
		</th>
	</tr>
	@endforelse
</table>

 
