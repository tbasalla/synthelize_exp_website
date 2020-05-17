<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo $page_title ?></title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <!-- Favicons -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top {% if page != "home" %}header-inner-pages{% endif %}">
  <div class="container d-flex align-items-center">

    <h1 class="logo mr-auto"><a href="{% if page != "home" %}index.html{% endif %}#header" class="scrollto">Synthelize</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="{% if page != "home" %}index.html{% endif %}#header" class="logo mr-auto scrollto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li {% if page == "home" %}class="active"{% endif %}><a href="{% if page != "home" %}index.html{% endif %}#header">Home</a></li>
        <li><a href="{% if page != "home" %}index.html{% endif %}#about">About</a></li>
        <li><a href="{% if page != "home" %}index.html{% endif %}#services">Services</a></li>
        <li {% if page == "portfolio" %}class="active"{% endif %}><a href="{% if page != "home" %}index.html{% endif %}#portfolio">Portfolio</a></li>
        <li><a href="{% if page != "home" %}index.html{% endif %}#team">Team</a></li>
        <li><a href="{% if page != "home" %}index.html{% endif %}#pricing">Pricing</a></li>
        <li {% if page == "blog" %}class="active"{% endif %}><a href="blog.html">Blog</a></li>
        <li class="drop-down"><a href="">Drop Down</a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li class="drop-down"><a href="#">Deep Drop Down</a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
          </ul>
        </li>
        <li><a href="{% if page != "home" %}index.html{% endif %}#contact">Contact</a></li>

      </ul>
    </nav><!-- .nav-menu -->

  </div>
</header><!-- End Header -->
