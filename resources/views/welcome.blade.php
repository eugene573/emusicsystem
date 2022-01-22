<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>EMusic</title>
  </head>
  <body>
  <div class="bg-secondary text-white">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">EMusic</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item font-weight-bold white-text pr-2">
            <a class="nav-link" href="#">Playlist</a>
          </li>
        <li class="nav-item font-weight-bold white-text pr-2">
            <a class="nav-link" href="#">Artist</a>
          </li>
          <li class="nav-item font-weight-bold white-text pr-2">
             <a class="nav-link" href="#">Album</a>
          </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Music
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Rock & Roll</a></li>     
            <li><a class="dropdown-item" href="#">Disco</a></li>
            <li><a class="dropdown-item" href="#">Pop</a></li>
            <li><a class="dropdown-item" href="#">Hip hop</a></li>
            <li><a class="dropdown-item" href="#">lyrical</a></li>
            <li><a class="dropdown-item" href="#">Classical</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">More</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" action="{{route('search.song')}}" method="POST">
                        @csrf
                        <input class="form-control me-2" name="keyword" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
     </form>
    </div>
  </div>
</nav>
<!--Content(Slide)-->

<div class="m-2">
  <br>
  <h2><b>Today's biggest hits</b></h2>
  <br>
</div>
<center>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{url('/images/welcome.jpeg')}}" class="d-block" alt="..."style="width:60%;height:550px;">
    </div>
    <div class="carousel-item">
      <img src="{{url('/images/Sam_Smith_-_Love_Goes.png')}}" class="d-block" alt="..."style="width:60%;height:550px;">
    </div>
    <div class="carousel-item">
      <img src="{{url('/images/Silk_Sonic_-_An_Evening_with_Silk_Sonic.png')}}" class="d-block" alt="..."style="width:60%;height:550px;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</center>
<br>
  </div>


  <main class="py-4">
            @yield('content')
            <!--Footer-->
<section class="copyright bg-dark white-text py-2 mt-0" id="copyright">
  <div class="container">
      <div class="row text-center">
             <div style="color: skyblue; font-size: 16px; float: left;" align="left">
              <small>Contact Us: </small></br>
              <small>20/2, Jalan Enjoy, Taman Kampung Kura , 82000, Johor.</small></br>
              <small>EMusic.com</small> </br>
              <small> +016 1234567</small>
             </div>

             <div class="col-sm-5 col-md-12 col-lg-12" align="text-center" style="color:white;"> 
             <small>© Copyright 2022 EMusic Property. All Rights Reserved.</small></br>
             <small> Made with by ABC Company</small>
              </div>
</div>
        </main>
    </div>
      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>