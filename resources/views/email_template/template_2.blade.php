<h1>Hidaya Email Testing</h1>
<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>
<hr />
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
	<div style="display:none;">
		 {{ $message->embed("images/hidaya.jpg"); }}
	</div>
</center>


