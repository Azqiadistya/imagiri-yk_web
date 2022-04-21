  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>IMAGIRI | Yogyakarta</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <header class="fixed">
      <nav class="navbar navbar-expand-lg">
          <div class="container">
              <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item ">
                          <a class="nav-link" href="/">Home
                              <span class="sr-only">(current)</span>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#about">About</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#team">Team</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#event">Event</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#footer">Contact</a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
  </header>