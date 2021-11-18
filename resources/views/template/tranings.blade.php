@extends('layouts/master')

@section('title','Trainings')

@section('breadcrumb_item')
   @parent()
  <li class="breadcrumb-item active" aria-current="page">Trainings</li>

@endsection


@section('main_content')
<div style="margin-top: 20px;">
	<h5 class="text-center">Trainings</h5>
	<hr />
	<div>
		<h6>English Language Training</h6>
		<p>
			Meet the growing demand for communicating in English by sharpening the English language skills. 1st to 4th semester students from all universities are encouraged to register. Various sessions throughout the day will be offered for the classes starting 8:00 AM until 8:00 PM.
		</p>
	</div>
	<div>
		<h6>Web Development Training Using PHP With MySQL (Advance Level)</h6>
		<p>
			This training is for those candidates who have completed PHP Basic Training from Hidaya Institute of Science and Technology(HIST) Jamshoro. 
		</p>
	</div>
	<div>
		<h6>Java Essential Training (Basic Level)</h6>
		<p>
			This course introduces the students to Java™ technology which provides an object-oriented, portable and robust framework for application development. The course is designed to leverage the participants' existing programming skills and to highlight the new and extended features of the Java programming framework as compared to other common languages. Comprehensive lab exercises provide hands on practice crucial to developing competence and confidence with the new skills being learned. 
		</p>
	</div>
	@php

			$result = getAllUsers();
         dd($result);

	@endphp
</div>
@endsection

@section('left_sidebar')
<p>Notification</p>
As per the government latest notification, HIST classes will remain close for all the training programs until further notice.
@endsection

@section('right_sidebar')
<p>Events</p>
Why HIST?
Students will benefit from a range of teaching methods that are all geared towards awakening interest and kindling enthusiasm. We believe that this approach is the best way to impact knowledge easily and successfully.
16 Sep
HIST Offers
Training in different fields like Software Development Training, English Language Training, System Adminstration Training, Network Adminstration Training, Basic Computer Skills.
01 Oct
HIST Online Services
HIST offers you the online service like Online Discussion Forum where you can discuss technical things in a community of best software engineers. Please register yourself for such service. for registration follow the appropriate link on the home page. ice.
@endsection
