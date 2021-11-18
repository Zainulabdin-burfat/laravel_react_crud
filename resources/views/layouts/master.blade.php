<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <style type="text/css">
      .row{
        margin: 10px;
      }
    </style>

    <title>Hist >> @yield('title')</title>
  </head>
  <body>
    <div class="row bg-info" style="padding: 30px;">
      <div class="col-sm-12 text-center">
          <h1>Hidaya Trust</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{route('index')}}">Hist</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">

                @php 
                  $current_url = url()->current();
                  //echo $current_url;

                  $our_hist = "";
                  if($current_url == route('our_hist'))
                  {
                    $our_hist = "active";
                  }

                  $index = "";
                  if($current_url == route('index'))
                  {
                    $index = "active";
                  }


                @endphp

                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link <?php echo $index; ?>" aria-current="page" href="{{route('index')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?php echo $our_hist; ?>" href="{{route('our_hist')}}">Our Hist</a>
                  </li>
                  @yield('main_nav_bar')
                  
                </ul>
              </div>
            </div>
          </nav>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            @section('breadcrumb_item')
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            
            @show
          </ol>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-2 bg-success">
        @yield('left_sidebar')
      </div>
      <div class="col-sm-8 bg-info">
        @yield('main_content')
      </div>
      <div class="col-sm-2 bg-success">

        @yield('right_sidebar')
      </div>
      
    </div>

    
    <!-- footer -->
    <div class="row bg-dark" style="padding: 10px;color: white;">
      <div class="col-sm-12 text-center">
          <h5>Created By @Hidaya Trust @php echo date('Y'); @endphp</h5>
      </div>
    </div>

    <script type="text/javascript" src="{{asset('js/jquery-3.6.0.js')}}"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  </body>
</html>
