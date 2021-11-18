<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Eloquent</title>
	

</head>
<body>
<center>
	<h1>Eloquent</h1>
	<hr />
	<div style="height: 200px;">
		<div>
			{{-- $result->links() --}}
		</div>
		<div>
			{{-- $result->total() --}}
		</div>
		<div>
			{{-- $result->currentPage() --}}
		</div>
		<div>
			{{ $result->count() }}
		</div>
	</div>


	<table border="2">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Role type</th>
		</tr>
		@forelse( $result as $user)
			<tr>
				<td> {{ $user->id }} </td>
				<td> {{ $user->name }} </td>
				<td> {{ $user->email }} </td>
				<td> {{ $user->role_type }} </td>
			</tr>

		@empty
			<tr>
				<th colspan="4">Data not found!....	</th>
			</tr>

		@endforelse
		
		<tr>
			<td colspan="4">
			{{ $result->links() }}
			
			</td>
		</tr>
	</table>
</center>

</body>
</html>




