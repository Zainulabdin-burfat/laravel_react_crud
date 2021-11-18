<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Email Form</title>
</head>
<body>

<center>
	<h1>Eamil Form</h1>
	<hr />
	@if(Session::has('true_msg'))
	{{Session::get("true_msg")}}
	@endif
	<hr />
	<fieldset>
		<legend>Email Form</legend>
		{!! Form::open(array("url"=>"email_send_process","method"=>"POST")) !!}
		<table>
			<tr>
				<td>
					{!! Form::label("msg"," Message: ") !!}
				</td>
				<td>
					{!! Form::textarea("msg",null,array("class"=>"")) !!}
				</td>
			</tr>
			<tr>
				<td>
					{!! Form::label("to_email"," To Email: ") !!}
				</td>
				<td>
					{!! Form::email("to_email",null,array("required")) !!}
				</td>
			</tr>
			<tr>
				<td colspan="2">
					{!! Form::submit("Send",array("class"=>"")) !!}
				</td>
			</tr>
		</table>

		{!! Form::close() !!}
	</fieldset>
</center>

</body>
</html>