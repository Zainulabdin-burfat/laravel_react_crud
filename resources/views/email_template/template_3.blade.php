<center>
	<h1 style="color:blue;background-color:gray;padding:20px;">User Information</h1>
	<hr />
	<h4>Name      : {{ $name }}</h4>
	<h4>Number    : {{ $number }}</h4>
	<h4>Email	  : {{ $email  }}</h4>
	<hr />
	<table>
		<tr>
			<th>Products:</th>
			<td>
				@foreach($products as $product)
					{{ $product }}
					<br />
				@endforeach
			</td>	
		</tr>
	</table>
	<hr />
</center>


