<div style="width:100%; height: auto;background-color: gray;margin: 20px;padding: 20px;">
	<h1>Hidaya Trust</h1>
	<hr />
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
	<hr />
		<h2>Working on forelse, Students Names</h2>
		<ul>
		@forelse($students as $student)
			<li>{{ "Id: ".$student['id']." || Name:".$student['full_name']  }}</li>
		@empty	
			<li>{{"No Data"}}</li>
		@endforelse
		</ul>
		<h2>Interns Names</h2>
<ul>
@foreach($interns as $key=>$intern)
		<li>{{ "Id: ".$intern['id']." || Name:".$intern['full_name']  }}</li>
@endforeach
</ul>

	
</div>