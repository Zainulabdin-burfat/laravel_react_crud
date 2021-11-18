<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Form</title>
</head>
<body>
<center>
	
	@if(session('msg'))
		<span style="color:red;">
		{{ session('msg') }}
		</span>
	@endif
	
	<fieldset>
		<legend>Login Form</legend>
		{!! Form::open(array('url'=>"/login_process","method"=>"POST")) !!}
		<table>
				<tr>
					<td>{!! Form::label("email","Email") !!}</td>
					<td>
						{!! Form::email('email',Null,array("id"=>"email")) !!}

					</td>
				</tr>
				<tr>
					<td>{!! Form::label("password","Password") !!}</td>
					<td>
						{!! Form::password('password',Null,array("id"=>"password")) !!}
						
					</td>
				</tr>
				<tr>
					<td>
						{!! Form::input("submit","login_btn","Login") !!}
					</td>
				</tr>
		</table>
		{!! Form::close()!!}
	</fieldset>
</center>
</body>
</html>