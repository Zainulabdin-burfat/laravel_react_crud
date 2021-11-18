<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register Form Validation </title>
	<style type="text/css">
		fieldset{
			width: 70%;
		}
		.our_form_controller{
			width: 300px;
			border: 2px solid red;
			padding: 5px;
		}
	</style>
</head>
<body>
<center>
		<h1>Register Form Validation</h1>
		<hr />
		@isset($messages)
		{{-- dd($messages->all()) --}}
		{{-- dd($messages->get('full_name')) --}}
		@foreach($messages->get('full_name') as $full_name)
		{{-- $full_name --}}
		@endforeach
		
		@endisset

		@if($errors->any())
			{{-- dd($errors->all()) --}}
			@foreach($errors->get('full_name') as $full_name)
				{{-- $full_name --}}
			@endforeach
		@endif
		<hr />
		{!! Form::open(array("url"=>'/register_form_process','method'=>'POST')) !!}
		<fieldset>
			<legend>Form</legend>
			<table>
				<tr>
					<td>{!! Form::label("name","Full Name") !!} :</td>
					<td>
					{{-- {!! Form::text("full_name","Ahmed Khan",array("required"=>"required", 'class'=>"our_form_controller","id"=>"fullname")) !!} --}}
					{!! Form::text("full_name",old('full_name'),array('class'=>"our_form_controller","id"=>"fullname","placeholder"=>"Enter a full name")) !!}	
					</td>
					<td>
						@if($errors->has('full_name'))
						<span style="color:red;">
							@foreach($errors->get('full_name') as $full_name)
								{{ $full_name }}
							@endforeach
						</span>
						@endif
					</td>
				</tr>
				<tr>
					<td>
						{!! Form::label('email',"Email") !!} :
					</td>
					<td>
						{!! Form::email('email',old('email'),array("class"=>"our_form_controller","placeholder"=>"Enter a email")) !!}
					</td>
					<td>
						@if($errors->has('email'))
						<span style="color:red;">
							@foreach($errors->get('email') as $email)
								{{ $email }}
							@endforeach
						</span>
						@endif
					</td>
					
				</tr>
				<tr>
					<td>
						{!! Form::label('number',"Number") !!} :
					</td>
					<td>
						{{-- {!! Form::number('number',null,array('required',"class"=>"our_form_controller")) !!} --}}

						{!! Form::input('number','my_number',old('full_name'),array("class"=>"our_form_controller", "placeholder"=>"Enter a number")) !!}
					</td>
					<td>
						@if($errors->has('my_number'))
						<span style="color:red;">
							@foreach($errors->get('my_number') as $my_number)
								{{ $my_number }}
							@endforeach
						</span>
						@endif
					</td>
					
				</tr>
				<tr>
					<td>
						{!! Form::label('password',"Password") !!}:
					</td>
					<td>
						{!! Form::input('password','my_password',null,array("placeholder"=>"Enter a password", "class"=>"our_form_controller")) !!}
					</td>
					<td>
						@if($errors->has('my_password'))
						<span style="color:red;">
							@foreach($errors->get('my_password') as $my_password)
								{{ $my_password }}
							@endforeach
						</span>
						@endif
					</td>
					
				</tr>
				<tr>
					<td>
						{!! Form::label("gender","Gender") !!} :
					</td>
					<td>
						<span>Male</span> 
						{!! Form::radio('gender','Male',false,array()) !!}

						<span>Female</span> 
						{!! Form::radio('gender','Female',false,array()) !!}
					</td>
					
				</tr>
				<tr>
					<td>
						{!! Form::label('country',"Country") !!} :
					</td>
					<td>
						{{-- {!! Form::select('country',array(""=>"-- Select Country --","pakistan"=>"Pakistan","india"=>"India"),"pakistan",array("class"=>"our_form_controller")) !!} --}}

						{!! Form::select('country',array(""=>"-- Select Country --","pakistan"=>"Pakistan","india"=>"India"),NULL,array("class"=>"our_form_controller")) !!}
					</td>
					<td>
						@if($errors->has('country'))
						<span style="color:red;">
							@foreach($errors->get('country') as $country)
								{{ $country }}
							@endforeach
						</span>
						@endif
					</td>
				</tr>
				<tr>
					<td>
						{!! Form::label('address',"Address") !!} :
					</td>
					<td>
						{!! Form::textarea("address",NUll,array("class"=>"our_form_controller")) !!}
					</td>
				</tr>
				<tr>
					<td>
						{!! Form::label('file',"File") !!}:
					</td>
					<td>
						{!! Form::input('file','file',null,array("class"=>"our_form_controller")) !!}
					</td>
					<td>
						@if($errors->has('file'))
						<span style="color:red;">
							@foreach($errors->get('file') as $file)
								{{ $file }}
							@endforeach
						</span>
						@endif
					</td>
					
				</tr>
				<tr>
					<td>
						{!! Form::label('skills',"Skills") !!}:
					</td>
					<td>
						PHP 
						{!! Form::checkbox("skill_1","PHP",false) !!}
						Java
						{!! Form::checkbox("skill_2","Java",false) !!}
						C++
						{!! Form::checkbox("skill_3","C++",false) !!}
					</td>
				</tr>
				<tr>
					<td colspan="2">
						{!! Form::input('submit',"add_form","Add Form",array("class"=>"btn")) !!}
						
					</td>
				</tr>

			</table>

		</fieldset>
		{!! Form::close()!!}

</center>
</body>
</html>