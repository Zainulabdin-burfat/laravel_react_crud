<?php 
	//echo "Our Blade Practice";
	$page = "This is a Blade Template Page";
?>
{{ "Our Blade Practice" }}
<hr />
{{ $page }}
<hr />
{{ time() }}
<hr />
{{ date("D F, Y",time()) }}
<hr />
{{ 10+10 }}
<hr/>
{{ $name }}
<hr/>
@isset($name)
	{{ "This is Isset Function" }}
	<br />
	{{ "Value Of Name: ".$name }}
@endisset
<hr/>
@empty($name)
	{{ "This is Empty Function" }}
	<br />
	{{ "Name variable value is empty: " }}
@endempty
<hr />
@if($day == "Monday")
	{{ "Its Monday" }}
@endif
<hr />
@if($day == "Monday")
	{{ "Today is a Monday" }}
@else
	{{ "Today is not a Monday" }}	
@endif

<hr />
@if($day == "Monday")
	{{ "Today is a Monday" }}
@elseif($day == "Tuesday")
	{{ "Today is a Tuesday" }}
@elseif($day == "Wednesday")
	{{ "Today is a Wednesday" }}
@elseif($day == "Thursday")
	{{ "Today is a Wednesday" }}
@else
	{{ "Today Sunday" }}
@endif

<hr />
@if($course == "Php Advance")
	{{ "Course: ".$course}}
	<br />
	@if($shfit == "Evening")
	{{" Shfit: ".$shfit}}
	@endif
@endif
<hr />
<h3>{{"Working on Switch Condition"}}</h3>
@switch($working_days)
	@case(1)
		{{"Monday"}}
		@break
	@case(2)
		{{"Tuesday"}}
		@break
	@case(3)
		{{"Wednesday"}}
		@break
	@case(4)
		{{"Thursday"}}
		@break
	@case(5)
		{{"Friday"}}
		@break
	@case(6)
		{{"Saturday"}}
		@break
	@default
		{{"Sunday"}}
		@break
@endswitch
<hr />

<h2>{{ 'Working on for loop' }}</h2>
@for($i=1; $i<=$working_days; $i++)
	{{ "Loop: ".$i }}
	<br />
@endfor
<hr />
@php
$loop_number = 2;
@endphp

@while($loop_number <= 10)
	{{ "While Loop: ".$loop_number }}
	<?php $loop_number++; ?>
	<br />
@endwhile
<hr />
<h2>{{"Working on Foreach Loop"}}</h2>

<h2>Interns Names</h2>
<ul>
@foreach($interns as $key=>$intern)
		<li>{{ "Id: ".$intern['id']." || Name:".$intern['full_name']  }}</li>
@endforeach
</ul>
<hr />
@if(count($students) > 0)
	<h2>Students Names</h2>
	<ul>
	@foreach($students as $key=>$student)
		<li>{{ "Id: ".$student['id']." || Name:".$student['full_name']  }}</li>
	@endforeach
</ul>
@else
{{ "No Data" }}
@endif

<hr />
<h2>Working on forelse, Students Names</h2>
<ul>
@forelse($students as $student)
	<li>{{ "Id: ".$student['id']." || Name:".$student['full_name']  }}</li>
@empty	
	<li>{{"No Data"}}</li>
@endforelse
</ul>

<hr />
<h4>Break/Continue</h4>
@foreach($students as $student)
	@continue( $student['id'] =="124")
	<li>{{ "Id: ".$student['id']." || Name:".$student['full_name']  }}</li>
	@break( $student['id'] =="126")
@endforeach
<hr />
{{-- "Hidaya" --}}
<br />
{{-- $day --}}

<hr />
@include("includes/example_include",$interns)


@for($i=0; $i<=50; $i++)
	<br />
@endfor













