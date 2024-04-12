
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome to Princess Chicken Joy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a class="navbar-brand brand-logo mr-5" href=""><img src="{{ asset('mytemplate/images/logo.png')}}" class="mr-2" alt="logo"/></a>
   </h1>


      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#bh">Home</a></li>
          <li><a class="nav-link scrollto" href="#available">Our Menu</a></li>
          <!-- <li><a class="nav-link scrollto " href="#municipality">Municipality</a></li> -->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="{{ route('register') }}">Create Account</a></li>

          <li><a class="nav-link scrollto" href="{{ route('login') }}">Admin</a></li>
           <!-- <li class="dropdown"><a href="#"><span>User</span> <i class="bi bi-chevron-down"></i></a>

            <ul>
              
              <li class="dropdown"><a href="#"><span>Admin</span> <i class="bi bi-chevron-right"></i></a>
              	<ul>
                  <li><a href="{{ route('login') }}">Login </a></li>
                  
                </ul>
          </li> -->
       
        
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="bh" class="d-flex align-items-center">
    <div class="container position-relative text-center" data-aos="fade-up" data-aos-delay="500">
        <h1>Welcome and Enjoy</h1>

              <input type="text" class="form-control" id="search" placeholder="Search now" aria-label="search" aria-describedby="search">

        <a href="#available" class="btn-get-started scrollt">Search</a>


            </div>
          </li>
        </ul>
    </div>
</section>
<!-- End Hero -->

  <main id="main">

        


   


<section id="available" class="available">
      <div class="container">

        <div class="section-title">
          <span>Menu For Today</span>
          <h2>Menu For Today</h2>
        </div>

        <div class="row">
           @foreach($restaurants as $restaurant)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="icon-box">  
           <img  src="/{{ $restaurant->img }}" alt="">
                  
                        
              <h1>{{ $restaurant->name_of_bh }}</h1>
              <span>{{ $restaurant->owner }}</span>
              <p>{{ $restaurant->description }}</p>
             <div>

                <a class="social" href="">Contact Number:<i >{{ $restaurant->contact_number }}</i></a>
</div>
               <div>
                <h4 href=""><i class="">{{ $restaurant->status }}</i></h4>
                
            </div>
            </div>
          </div>


         
           @endforeach


        </div>

      </div>
    </section>

   <div class="d-flex justify-content-center">
  {!!$restaurants->links()!!}
</div>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          
          <h2>Contact</h2>
          
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Location</h3>
              <p>Bontoc, Southern Leyte</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-2">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>49ner@gmail.com</p>
              
            </div>

          </div>

        <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+63926716227</p>
            </div>
          </div>

</div>

       
      </div>
    </section>





  </main><!-- End #main -->

  
   

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>