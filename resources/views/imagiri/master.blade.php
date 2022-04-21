<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link
        href="{{asset('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap')}}"
        rel="stylesheet">
    <!-- {{asset('assets/css/fontawesome.css')}} -->

    <title>IMAGIRI | Yogyakarta</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-finance-business.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Navbar -->
    @include('imagiri.layout.navbar')


    <!-- Page Content -->
    <!-- Banner Starts Here -->
    @include('imagiri.layout.hero')
    <!-- Banner Ends Here -->


    @include('imagiri.layout.about')
    @include('imagiri.layout.visiMisi')

    <div class="request-form">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4>Yuk, bergabung menjadi bagian dari Imagiri-Yogyakarta!</h4>
                    <span>Untuk mahasiswa di berbagai perguruan tinggi di Yogyakarta dan berasal dari Kabupaten
                        Wonogiri. </span>
                </div>
                <div class="col-md-4">
                    <style>
                    footer {
                        margin: auto;
                        /* content-align: center; */
                    }

                    html {
                        scroll-behavior: smooth;
                    }
                    </style>
                    <a href="/join" id class="border-button">Join Us</a>
                </div>
            </div>
        </div>
    </div>

    @yield('team')
    @include('imagiri.layout.team')
    @include('imagiri.layout.album')
    @include('imagiri.layout.event')

    <div class="mt-5 mb-5">

    </div>
    <!-- Footer Starts Here -->
    <div id="footer" class="main">
        @include('imagiri.layout.footer')
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright &copy; 2022 Imagiri Yogyakarta
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Additional Scripts -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('assets/js/owl.js')}}"></script>
    <script src="{{asset('assets/js/slick.js')}}"></script>
    <script src="{{asset('assets/js/accordions.js')}}"></script>

    <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
        if (!cleared[t.id]) { // function makes it static and global
            cleared[t.id] = 1; // you could use true and false, but that's more typing
            t.value = ''; // with more chance of typos
            t.style.color = '#fff';
        }
    }
    </script>

</body>

</html>