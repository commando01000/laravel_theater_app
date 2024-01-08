<!DOCTYPE html>
<html>
<head>
    <title>Event Registeration Laravel 10 CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Lemon&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/event_registeration_create.css') }}">
  </head>
<body>
  

    <nav class="navbar navbar-expand-lg p-5">
        <div class="container">
          <div class="logo">
            <a class="branding" href="/">
              <img src="images/logo.png" alt="" class="logo" />
              <div class="logo-type ms-1">
                <h6 class="site-title">Supra's Theater</h6>
              </div>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item ps-5">
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item ps-5">
                <a class="nav-link" href="#">News</a>
              </li>
              <li class="nav-item ps-5">
                <a class="nav-link" href="#">what's new !</a>
              </li>
              <li class="nav-item ps-5">
                <a class="nav-link" href="#">Shows</a>
              </li>
              <li class="nav-item ps-5">
                <a class="nav-link" href="#">Contact us</a>
              </li>
            </ul>
          </div>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
      <section id="admin-control" class="m-5 p-5">
        <div class="container w-75">
          @yield('content')
        </div>
      </section>
</div>
   
</body>
</html>