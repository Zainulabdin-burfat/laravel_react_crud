<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>File Uploading</title>
</head>
<body>
	<center>
		<h1>File Uploading Using Laravel</h1>
		<hr />
		@if(Session::has('msg') && Session::has("class"))

			<span style="color:{{Session::get('class')}};">
				{{ Session::get('msg') }}
			</span>
			<br />
			@if(Session::has('file_path'))
			<img src="{{asset('storage')}}/{{Session::get('file_path') }}" style="width:200px;height:200px">
			@endif


		@endif
		<hr />
		<fieldset style="width: 50%;">
			<legend>File Uploading....</legend>
			{!! Form::open(array("url"=>"/file_uploading_process","method"=>"POST","enctype"=>"multipart/form-data")) !!}

			<table border="3">
				<tr>
					<td>
						{!! Form::label("upload", "File: ") !!}
					</td>
					<td>
						{!! Form::file("upload",array("class"=>"form-control")) !!}
					</td>
				</tr>
				<tr>
					<td colspan="2">
						{!! Form::submit("uploading",array("class"=>"btn_file")) !!}
					</td>
				</tr>
			</table>

			{!! Form::close() !!}
		</fieldset>
	</center>

</body>
</html>