<!-- Arquivo base para as paginas estáticas -->

<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ProPlan</title>

    <!-- Bootstrap core CSS -->
    <link href="our_css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="our_css/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="our_css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="our_css/font-awesome/css/font-awesome-popup.css" rel="stylesheet" type="text/css">
    <link href="our_css/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="our_css/landing-page.min.css" rel="stylesheet">
         <style type="text/css">
      tab1 { padding-left: 10em; }

    </style>
  </head>
<body>
<!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="icon" href="index">
          <img class="img-fluid mb-2"  src="img/proplanlogo.svg" alt="" href="aut_index.html">
        </a>
        <a class="navbar-brand" href="index">Home</a>
        <a class="navbar-brand" href="about">About</a>
        <a class="navbar-brand" href="project">Projects</a>
        <a class="navbar-brand" href="faq">FAQ</a>
        <a class="navbar-brand" href="contact">Contact</a>
        <a class="btn btn-primary" href="/login" onclick="location.href='signin'" style="width:auto;">Sign In</a>
      </div>
    </nav>

    <div class="col-xl-0 mx-auto">
            <img  width="100%" height="30" src="img/bg-masthead.jpg" alt="">
    </div>

	@yield('content')

  <!-- Call to Action -->
    <section class="call-to-action text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h2 class="mb-4">Don't have a register? Sign up now!</h2>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
              <div class="form-row">
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                  <button type="submit" class="btn btn-block btn-lg btn-primary" onclick="location.href='/register'">Sign up for ProPlan!</button>  
                 </div>
              </div>
          </div>
        </div>
      </div>
    </section>

<!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="about">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="faq">FAQ</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="contact">Contact</a>
              </li>
            <p class="text-muted small mb-4 mb-lg-0">&copy; ProPlan 2018. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery/popup.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script scr="public/our_css/jquery/faq.js"></script>

</body>
</html>