<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Jaga Jogja</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">
   
    <div class="top-bar py-3 bg-light" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-6 text-left">
            <ul class="social-media">
              <li><a href="#" class="p-2"><span class="icon-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
          <div class="col-6">
            <p class="mb-0 float-right">
              <span class="mr-3"> <span class="icon-phone mr-2"></span><span class="d-none d-lg-inline-block">+62 813 912 954 85</span></span>
              <span><span class="icon-envelope mr-2"></span><span class="d-none d-lg-inline-block">jogjajaga@gmail.com</span></span>
            </p>
            
          </div>
        </div>
      </div> 
    </div>



    <header class="site-navbar top-bar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="/" class="text-black h2 mb-0">JagaJogja<span class="text-primary">.</span> </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#about-section" class="nav-link">Tentang Kita</a></li>
                <li><a href="#team-section" class="nav-link">Tim</a></li>
                <li><a href="#services-section" class="nav-link">Layanan</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  
     
    <div class="site-blocks-cover overlay" style="background-image: url(images/brdr.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row mb-4">
              <div class="col-md-6">
                <h1>Menjaga dan Merawat Pariwisata Yogyakarta</h1>
                <p class="mb-5">membangun citra kawasan pariwisata yang lebih baik dan menarik bersamamu dengan menjaga keamanan, kebersihan, serta perawatan berbagai fasilitas umum sebagai tujuan wisata.</p>
                <div>
                @if (Route::has('login'))                
                    @auth
                    <a href="{{ url('/home') }}" class="btn btn-primary mr-2 mb-2">Home</a>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-primary mr-2 mb-2">Mulai</a>
                    @endauth 
                @endif
                  
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  


    <div class="site-section" id="about-section">
      <div class="container">
        <div class="row align-items-lg-center">
          <div class="col-md-6 mb-5 mb-lg-0 position-relative">
            <img src="images/museumerapi.jpg" class="img-fluid" alt="Image">
            
          </div>
          <div class="col-md-5 ml-auto">
            <h3 class="section-sub-title">Tentang Kita</h3>
            <h2 class="section-title mb-3">Selamat Datang di JagaJogja</h2>
            <p class="mb-4">Sebuah desain aplikasi berbasis web yang difungsikan sebagai sebuah platform untuk menampung laporan permasalahan di kawasan wisata oleh para masyarakat jogja. Melalui platform ini, Dinas DIY akan terbantu dalam mengawasi serta menangani permasalahan yang terjadi di kawasan wisata serta lebih mudah dalam berkomunikasi dengan pihak pengelola.</p>
            
          </div>
        </div>
      </div>
    </div>

    <section class="site-section border-bottom" id="team-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">Tim</h3>
            <h2 class="section-title mb-3">Tim Kami</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <div class="person text-center">
              <img src="images/2.jpg" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
              <h3>Kurnia Edo Susandro</h3>
              <p class="position text-muted">Developer</p>
              <ul class="ul-social-circle">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-youtube"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <div class="person text-center">
              <img src="images/5.jpg" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
              <h3>Adi Wahyu Bimantara</h3>
              <p class="position text-muted">Tester, Documentator</p>
              <ul class="ul-social-circle">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-youtube"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
            <div class="person text-center">
              <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
              <h3>Ahmad Raihan Akhdani</h3>
              <p class="position text-muted">Project Manager</p>
              <ul class="ul-social-circle">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-youtube"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>


    

    <section class="site-section border-bottom bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">Layanan</h3>
            <h2 class="section-title mb-3">Layanan Kami</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-assignment"></span></div>
              <div>
                <h3>Pelaporan</h3>
                <p>Masyarakat dapat melaporkan masalah keamanan, kerusakan, atau kebersihan lingkungan. Pelaporan dapat dilakukan dengan cara mendokumentasikannya dalam bentuk gambar dilengkapi dengan alamat yang jelas.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-autorenew"></span></div>
              <div>
                <h3>Feedback</h3>
                <p>Masyarakat dapat mengirimkan feedback untuk mengukur tingkat kepuasan terhadap kinerja dari petugas atas penyelesaian kasus yang dilaporkan sehingga akan menjadi bahan evaluasi kami.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-star"></span></div>
              <div>
                <h3>Point</h3>
                <p>Masyarakat dapat menerima point setiap melaporkan masalah sehingga diharapkan akan meningkatkan semangat dalam menjaga DIY.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
   



    <a href="#" class="bg-primary py-5 d-block">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md10"><h2 class="text-white">Let's Get Started</h2></div>
        </div>
      </div>  
    </a>
    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">Tentang Aplikasi</h2>
                <p>Aplikasi berbasis web yang difungsikan sebagai sebuah platform untuk menampung laporan permasalahan di kawasan wisata.</p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a >About Us</a></li>
                  <li><a >Services</a></li>
                  <li><a >Testimonials</a></li>
                  <li><a>Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Ikuti</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Hubungi</h2>
            <ul class="list-unstyled">
                <li>Email: jogjajaga@gmail.com</li>
                <li>Phone: +62 82736127232</li>
                <li>Jln Kaliurang km 13.5,</li>
                <li>Universitas Islam Indonesia</li>
            </ul>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>







