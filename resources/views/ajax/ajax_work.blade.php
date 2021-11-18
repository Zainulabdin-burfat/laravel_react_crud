<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> ::.. Ajax ..::</title>

  <!-- Add Bootstrap -->
  <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

  <style type="text/css">
  	.row{
  		margin: 5px;
  	}
  </style>
</head>
<body>
  <div class="row">
  		<div class="col-sm-12 text-center bg-info">
  			<h2>Ajax</h2>
  		</div>
  </div>
  <hr />
  <div class="row">
  		<div class="col-sm-12">
  			<button id="get_example_1"> Get: Click </button>
  			<button id="get_example_2"> Get: Get Data</button>
  			<button id="get_example_4"> Get: Example 4 </button>
  			 ||
  			<button id="post_example_1"> POST: Click </button>
  			<button id="post_example_2"> POST: Get Data </button>
  			 || 
  			<button id="put_example_1"> PUT: Click </button>
  			 || 
  			<button id="delete_example_1"> DELETE: Click </button>
  			||
  			<button id="show_article"> Show Article </button>



  		</div>
  </div>
  <hr />
  <div class="row">
  		<div class="col-sm-12" id="display_data">
  			
  		</div>
  </div>
  <hr />
  <div class="row">
  		<div class="col-sm-12">
  			<center>
  				<table border="2" cellpadding="20">
  					<tr>
  						<td>
  							Name: 
  						</td>
  						<td>
  							<input type="text" id="name" />
  						</td>
  					</tr>
  					<tr>
  						<td>
  							Email: 
  						</td>
  						<td>
  							<input type="email" id="email">
  						</td>

  					</tr>
  					<tr>
  						<td>Address</td>
  						<td>
  							<textarea id="address">
  								
  							</textarea>
  						</td>
  					</tr>
  					<tr>
  						<td>
  							Course
  						</td>
  						<td>
  							<select id="course">
  								<option>Php Basic</option>
  								<option>Php Advance</option>
  							</select>
  						</td>
  					</tr>
  					<tr>
  						<td colspan="2">
  							<button id="get_example_3"> Send Data Using Get Method</button>
  							<button id="post_example_3"> Send Data Using POST Method</button>
  						</td>
  					</tr>
  				</table>
  			</center>
  				
  			
  		</div>
  </div>







<!-- bootstrap -->
<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/jquery-3.6.0.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function(){

    /*alert("working jquery");*/

    /**/
    function ajax_success_respose(responseText,status,XMLHttpRequest)
    {
    			
	if(status == "success" &&  XMLHttpRequest.status == 200 && XMLHttpRequest.statusText == "OK")
		{
		console.log(responseText);
		$("#display_data").html(responseText);
		console.log(status);
		console.log(XMLHttpRequest);

		}
    			
    		
    }
    /**/
    /**/
    function ajax_error_response(XMLHttpRequest){
    	console.log(XMLHttpRequest);
    	$("#display_data").html(XMLHttpRequest.statusText);
    	//$("#display_data").html(XMLHttpRequest.responseJSON);
    }
    /**/


  
    $("#get_example_1").click(function(){
    		//alert("work");
    		$.ajax({
    			url: "{{ route('get_example_1') }}",
    			type: "GET",
    			success:function(responseText){
    				//console.log(responseText);
    				$("#display_data").html(responseText);
    			},
    			error:function(XMLHttpRequest){
    				console.log(XMLHttpRequest);
    			},

    		});
    });

    $("#get_example_2").click(function(){

    	$.ajax({
    		url:"{{route('get_example_2')}}",
    		type: "GET",
    		success:function(responseText){
    			console.log(responseText);
    			$("#display_data").html(responseText.name);
    		},
    		error:function(XMLHttpRequest){
    				console.log(XMLHttpRequest);
    		}
    	});

    });

    $("#get_example_3").click(function(){

    	var name =  $("#name").val();
    	var email =  $("#email").val();
    	var address =  $("#address").val();
    	var course =  $("#course").val();

    	$.ajax({
    		url: "{{route('get_example_3')}}",
    		type: "GET",
    		data:{name:name,email:email,address:address,course:course},
    		success:function(responseText){
    			$("#display_data").html(responseText);
    		},
    		error:function(XMLHttpRequest){
    				console.log(XMLHttpRequest);
    		},
    	});

    });

    $("#get_example_4").click(function(){
    		
    	$.ajax({
    		url:"{{route('get_example_1')}}",
    		type: "GET",
    		success:ajax_success_respose,
    		error:ajax_error_response,
    	});

    });

    /*Post Method*/
      $("#post_example_1").click(function(){
    		//alert("work");
    		$.ajax({
    			url: "{{ route('post_example_1') }}",
    			type: "POST",
    			data:{_token:"{{@csrf_token()}}"},
    			success:ajax_success_respose,
    			error:ajax_error_response,
    		});
    });

     $("#post_example_2").click(function(){
    		//alert("work");
    		$.ajax({
    			url: "{{ route('post_example_2') }}",
    			type: "POST",
    			data:{_token:"{{@csrf_token()}}"},
    			success:ajax_success_respose,
    			error:ajax_error_response,
    		});
    });

     $("#post_example_3").click(function(){

    	var name =  $("#name").val();
    	var email =  $("#email").val();
    	var address =  $("#address").val();
    	var course =  $("#course").val();

    	$.ajax({
    		url: "{{route('post_example_3')}}",
    		type: "POST",
    		data:{_token:"{{@csrf_token()}}",name:name,email:email,address:address,course:course},
    		success:ajax_success_respose,
    		error:ajax_error_response,
    	});

    });

     $("#put_example_1").click(function(){
    		//alert("work");
    		$.ajax({
    			url: "{{ route('put_example_1') }}",
    			type: "PUT",
    			data:{_token:"{{@csrf_token()}}"},
    			success:ajax_success_respose,
    			error:ajax_error_response,
    		});
    });

     $("#delete_example_1").click(function(){
    		//alert("work");
    		$.ajax({
    			url: "{{ route('delete_example_1') }}",
    			type: "DELETE",
    			data:{_token:"{{@csrf_token()}}"},
    			success:ajax_success_respose,
    			error:ajax_error_response,
    		});
    });
     

    /**/
    $("#show_article").click(function(){

    		$.ajax({
    			url:"/show_article",
    			type:"GET",
    			success:ajax_success_respose,
    			error:ajax_error_response,
    		});

    });
    /**/ 


    $(document).on("click",".delete",function(event){

    	event.preventDefault();

    	var id = $(this).attr("data-id");
    	// /alert(id);

    	$.ajax({
			url: "{{ route('delete_article') }}",
			type: "DELETE",
			data:{_token:"{{@csrf_token()}}",id:id},
			success:function(responseText){
				//console.log(responseText);
				$("#row_"+id).hide();
				$("#msg").html("Status : " + responseText.status+" Message: " + responseText.msg);

			},
			error:ajax_error_response,
    	});

    });

    /*$(".delete").click(function(event){
    	event.preventDefault();
    	var id = $(this).attr("data-id");
    	alert(id);
    });*/



  });
</script>
</body>
</html>







