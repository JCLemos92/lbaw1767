<!-- Arquivo base para as paginas estáticas autenticadas -  -->

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
    <nav class="navbar navbar-light bg-light static-top" style="height: 118px;">
      <div class="container">
        <a class="icon" href="aut_index">
          <img class="img-fluid mb-2"  src="img/proplanlogo.svg" alt="" href="aut_index">
        </a>
        <a class="navbar-brand" href="aut_projects">Projects</a>
        
        <div class="btn-group">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{Auth::user()->username}}
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="project">My Projects</a>
            <a class="dropdown-item" href="editprofile">Edit Profile</a>
            <a class="dropdown-item" href="pwreset">Edit Password</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/logout">Sign Out</a>
          </div>
        </div>
        </div>
    </nav>
    
    <div class="col-xl-0 mx-auto">
            <img  width="100%" height="30" src="img/bg-masthead.jpg" alt="">
    </div>


    @yield('content')

    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="aut_about">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="aut_faq">FAQ</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="aut_contact">Contact</a>
              </li>
            <p class="text-muted small mb-4 mb-lg-0">&copy; ProPlan 2018. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="our_css/bootstrap/js/bootstrap.js"></script>
    <script src="our_css/jquery/jquery.min.js"></script>
    <script src="our_css/jquery/popup.js"></script>
    <script src="our_css/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>