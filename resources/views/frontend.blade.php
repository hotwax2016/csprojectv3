<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    @yield('title')   TourGuide
     </title>
     <link rel="stylesheet" href="\frontend\css\nav.css">
     <link rel="stylesheet" href="\frontend\css\animate.css">
     <link rel="stylesheet" href="\frontend\css\animate.min.css">
     <link rel="stylesheet" href="\frontend\css\nivo-slider.css">
     <link rel="stylesheet" href="\frontend\css\nivo-slider-theme.css">
     <link rel="stylesheet" href="\frontend\css\responsive.css">
     <link rel="stylesheet" href="\frontend\css\booking.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" herf="frontend/css/bootstrap.min.css">
    <link rel="stylesheet" herf="\frontend\css\nav.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        /* bookin*/
        


       /* booking end */
   .carosel-inner.item { heigh:100%}
    .carousel-caption{ top:30%; botton:auto;}
    .heading{ font-size:60px; text-shadow:2px 2px #ff0e3d; }
    .sub-heading{ font-size:30px; text-shadow:2px 2px #ff0e3d; }


</style>
</head>
<body>


        <!-- nav state-->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
              
              <div class="navbar-header">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
                            </button>
                                    <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                                           <h1><span>Tour</span>Guide</h1>
                  
                                   </a>
            </div> 
            
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2" id="navbar-example">    
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
    <a class="nav-link" href="#">	Home</a>
  </li>
  
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="\views\layouts\card.blade.php" role="button" >Destination</a>
    <div class="dropdown-menu">
        <!--card-->
        <div class="card-group">
  <div class="card">
    <img src="\frontend\desti\s1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Matara</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="\frontend\desti\s7.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Galle</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="\frontend\desti\s10.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Hambanthota</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
<!--end card-->
</div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">	Guide</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Register</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Contact</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Others</a>
  </li>
  
</ul>
</div>
</nav>
<!--nav end-->
<!--carousel state--><!--
<div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="\frontend\slider\s2.jpg" alt="" title="#slider-direction-1" />
        <img src="\frontend\slider\s5.jpg" alt="" title="#slider-direction-2" />
        <img src="\frontend\slider\sl2.jpg" alt="" title="#slider-direction-3" />
      </div>

     
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">The Best Tourism Information In Sri Lanka </h2>
                </div>
               
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">We're In The Tourism Guide Of Helping You Start Your Tour</h1>
                </div>
               
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#destinations">See Destinations</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">The Best Tourism Information In Sri Lanka </h2>
                </div>
             
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">We're In The Tour Guide Of Get Quality Guide Contact Service</h1>
                </div>
                
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#destinations">See Destinations</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

-->

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="\frontend\slider\s2.jpg" class="d-block w-100" alt="...">
           <div class="carousel-caption ">
                <p class="heading heading animated bounce delay-2s">The Best Tourism Information In Sri Lanka</p>
                <p class="sub-heading animated  bounceInUp delay-2s">We're In The Tourism Guide Of Helping You Start Your Tour </p>
                <a class="btn btn-lg btn-info mt-5" >See Destinations</a>
                <a class="btn btn-lg btn-info mt-5">Learn More</a>
          </div>
    </div>
    <div class="carousel-item">
      <img src="\frontend\slider\s5.jpg" class="d-block w-100" alt="...">
           <div class="carousel-caption d-none d-md-block">
              <p class="heading animated  bounce delay-2s">The Best Tourism Information In Sri Lanka<p>
              <p class="sub-heading animated  bounceInUp delay-2s">We're In The Tourism Guide Of Helping You Start Your Tour </p>
              <a class="btn btn-lg btn-info mt-5" >See Destinations</a>
                <a class="btn btn-lg btn-info mt-5">Learn More</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="\frontend\slider\sl2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
               <p class="heading heading animated  bounce delay-2s">The Best Tourism Information In Sri Lanka</p>
                <p class="sub-heading animated  bounceInUp delay-2s">We're In The Tourism Guide Of Helping You Start Your Tour </p>
                <a class="btn btn-lg btn-info mt-5" >See Destinations</a>
                <a class="btn btn-lg btn-info mt-5">Learn More</a>
      </div>
                
    </div>
  </div>

<!--booking form-->
<section class="search-filter">
      <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
      <div id="booking" class="section">
        <div class="section-center">
                
                    <div class="container bg">
    
                        <div class="row">
                            <div class="booking-form">
                                <div class="form-header">
                                    <h1>Book Your Guide</h1>
                                </div>
                                <footer>
                                    <form>
    
    
    
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="date">
                                                    <span class="form-label">Check In</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="date">
                                                    <span class="form-label">Check Out</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
    
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                    <span class="select-arrow"></span>
                                                    <span class="form-label">Adults (18+)</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                    </select>
                                                    <span class="select-arrow"></span>
                                                    <span class="form-label">Children (0-17)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-btn">
                                            <button class="submit-btn">Check availability</button>
                                        </div>
                                    </form>
                                </footer>
                            </div>
                        </div>
                    
                </div>
        </div>
      </div>
    
      <script src="jsB/jquery.min.js"></script>
      <script>
        $('.form-control').each(function () {
          floatedLabel($(this));
        });
    
        $('.form-control').on('input', function () {
          floatedLabel($(this));
        });
    
        function floatedLabel(input) {
          var $field = input.closest('.form-group');
          if (input.val()) {
            $field.addClass('input-not-empty');
          } else {
            $field.removeClass('input-not-empty');
          }
        }
      </script>
      </section><!--end booking-->
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--end crosel-->

      <script src="lib/jquery/jquery.min.js"></script>
      <script src="lib/bootstrap/js/bootstrap.min.js"></script>
      <script src="lib/owlcarousel/owl.carousel.min.js"></script>
      <script src="lib/venobox/venobox.min.js"></script>
      <script src="lib/knob/jquery.knob.js"></script>
      <script src="lib/wow/wow.min.js"></script>
      <script src="lib/parallax/parallax.js"></script>
      <script src="lib/easing/easing.min.js"></script>
      <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
      <script src="lib/appear/jquery.appear.js"></script>
      <script src="lib/isotope/isotope.pkgd.min.js"></script>
    
      
      <script src="contactform/contactform.js"></script>
    
      <script src="js/main.js"></script>


<div class="content">
        @yield('content')
        </div> 
   
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    @yield('scripts')
</body>



</html>