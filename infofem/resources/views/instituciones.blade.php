<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Instituciones | Infofem</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Tempo - v4.7.0
  * Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Infofem</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a  href="{{route('home')}}">Inicio</a></li>
          <li><a href="/#about">Acerca</a></li>
          <li><a href="/#services">Objetivos</a></li>
          <li><a href="{{route('buzon.index',1)}}">Buzón</a></li>
          <li><a class="active" href="">Instituciones</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{route('home')}}">Inicio</a></li>
          <li>Instituciones</li>
        </ol>
        <h2>Instituciones</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="col-12">
        <table class="table-primary">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Dirección</th>
              <th scope="col">Código Postal</th>
              <th scope="col">Teléfono</th>
              <th scope="col">Correo</th>
              <th scope="col">Estado</th>
            </tr>
          </thead>
          <tbody>
            @foreach($instituciones as $institucion)
            <tr>
            <td class="table-primary"><a href="{{route('instituciones.show',$institucion['id'])}}">{{$institucion['nombre']}}</a></td>
            <td class="table-primary">{{$institucion['direccion']}}</td>
            <td class="table-primary">{{$institucion['cp']}}</td>
            @if(!empty($institucion['telefono']))
            <td class="table-primary">{{$institucion['telefono']}}</td>
            @else
            <td class="table-primary">No tiene</td>
            @endif
            @if(!empty($institucion['correo']))
            <td class="table-primary">{{$institucion['correo']}}</td>
            @else
            <td class="table-primary">No tiene</td>
            @endif
            <td class="table-primary">{{$institucion['estado']}}</td>
          </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 footer-contact">
            <h3>Infofem</h3>
            <p>
              Santiago de Querétaro, Querétaro, México<br>
              <strong>Email: </strong><a href="mailto:infofem@gmail.com">infofem@gmail.com</a><br>
            </p>
          </div>

          <div class="col-lg-6 col-md-6 footer-links">
            <h4>Menú</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Acerca</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Objetivos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('buzon.index',1)}}">Buzón</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Instituciones</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Pinkware</span></strong>. Todos los derechos reservados
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/ -->
          Diseñado por <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://instagram.com/infofemm/" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>