<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Add Files</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/custom_css_file.css') }}">
  <!-- Add Bootstrap -->

  <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">


</head>
<body>
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>
  <!-- <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-8">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>
  </div> -->

</div>
<center>
  <h1>Hidaya Trust</h1>
  <hr />
  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
  <hr />
  
  <img width="50%" src="{{ asset('images/hidaya.jpg') }}" />
  <hr />
  @php
  $interns = array();
  $students = array();
  @endphp
  @include('includes/example_include')
</center>

<script type="text/javascript" src="{{ asset('js/custom_js_file.js') }}"></script>

<!-- bootstrap -->
<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/jquery-3.6.0.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function(){
    alert("jQuery is working");
  });
</script>
</body>
</html>

