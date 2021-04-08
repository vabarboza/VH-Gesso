<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>VH Gesso - Forros e Molduras</title>
    <!-- MDB icon -->
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Stepper CSS - minified-->
    <link href="{{ asset('css/addons-pro/steppers.min.css') }}" rel="stylesheet">
    <!-- DataTables CSS - minified-->
    <link href="{{ asset('css/addons/datatables.min.css') }}" rel="stylesheet">
    <!-- MDBootstrap Cards Extended Pro  -->
    <link href="{{ asset('css/addons-pro/cards-extended.min.css') }}" rel="stylesheet">
    <!-- MDBootstrap flags -->
    <link href="{{ asset('css/addons/flag.min.css') }}" rel="stylesheet">
    <link href="" <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

</head>

<body>

    <!--Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light white font-weight-bolder sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">
                <img src="{{ asset('img/content/mdb-transparent.png') }}" height="35" alt="mdb logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent-555" aria-controls="navbarSupportedContent-555"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sobre') }}">A Empresa</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Produtos
                        </a>
                        <div class="dropdown-menu dropdown-ins" aria-labelledby="navbarDropdownMenuLink-555">
                            <a class="dropdown-item font-weight-normal" href="{{ route('forro-liso') }}">Forro
                                Liso</a>
                            <a class="dropdown-item font-weight-normal" href="{{ route('molduras') }}">Molduras</a>
                            <a class="dropdown-item font-weight-normal" href="{{ route('gesso-acartonado') }}">Gesso
                                Acartonado</a>
                            <a class="dropdown-item font-weight-normal" href="{{ route('sancas') }}">Sancas</a>
                            <a class="dropdown-item font-weight-normal" href="{{ route('colunas') }}">Colunas
                                Decorativas</a>
                            <a class="dropdown-item font-weight-normal" href="{{ route('gesso-decorado') }}">Gesso
                                Decorado</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Parcerias
                        </a>
                        <div class="dropdown-menu dropdown-ins" aria-labelledby="navbarDropdownMenuLink-555">
                            <a class="dropdown-item font-weight-normal" href="">Parceiros Especiais</a>
                            <a class="dropdown-item font-weight-normal" href="">Parceiros</a>
                            <a class="dropdown-item font-weight-normal" href="">Quero ser um parceiro</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>

                </ul>
                <ul class="navbar-nav ml-auto nav-flex-icons">

                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="https://www.facebook.com/vhgesso/"
                            target="blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="https://bit.ly/2vUZIEi" target="blank">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!--/.Navbar -->

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('img/content/01.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/content/02.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/content/03.jpg') }}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>




    @yield('main')


    <!-- Footer -->
    <footer class="page-footer font-small special-color pt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Footer links -->
            <div class="row text-center text-md-left mt-3 pb-3">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Vh Gesso</h6>
                    <p>Forros - Molduras - Gesso Acartonado - Divisorias - Sancas - Colunas - Gesso Decorado.</p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Produtos</h6>
                    <p>
                        <a href="{{ route('forro-liso') }}">Forro Liso</a>
                    </p>
                    <p>
                        <a href="{{ route('molduras') }}">Molduras</a>
                    </p>
                    <p>
                        <a href="{{ route('gesso-acartonado') }}">Gesso Acartonado</a>
                    </p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Produtos</h6>
                    <p>
                        <a href="{{ route('sancas') }}">Sancas</a>
                    </p>
                    <p>
                        <a href="{{ route('colunas') }}">Colunas Decorativas</a>
                    </p>
                    <p>
                        <a href="{{ route('gesso-decorado') }}">Gesso Decorado</a>
                    </p>
                </div>

                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none">

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contatos</h6>
                    <p>
                        <a href="mailto: contato@vhgesso.com.br?Subject=Solicitação%20de%20Contato"><i
                                class="fas fa-envelope mr-3"></i>
                            contato@vhgesso.com.br
                        </a>
                    </p>
                    <p>
                        <a href="tel:44998210967"><i class="fas fa-phone mr-3"></i> (44) 99821-0967
                        </a>
                    </p>
                    <p>
                        <a href="tel:44998210967"><i class="fas fa-phone mr-3"></i> (44) 99821-0967
                        </a>
                    </p>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Footer links -->

            <hr>

            <!-- Grid row -->
            <div class="row d-flex align-items-center">

                <!-- Grid column -->
                <div class="col-md-7 col-lg-8">

                    <!--Copyright-->
                    <p class="text-center text-md-left">© 2020 Copyright:
                        <a href="https://vhgesso.com.br/">
                            <strong> vhgesso.com.br </strong> <i class="brazil flag"></i>
                        </a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-5 col-lg-4 ml-lg-0">

                    <!-- Social buttons -->
                    <div class="text-center text-md-right">
                        <ul class="list-unstyled list-inline">

                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1"
                                    href="https://www.facebook.com/vhgesso/" target="blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://bit.ly/2vUZIEi"
                                    target="blank">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </li>

                        </ul>
                    </div>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

    </footer>
    <!-- Footer -->


    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <!-- Stepper JavaScript - minified -->
    <script type="text/javascript" src="{{ asset('js/addons-pro/steppers.min.js') }}"></script>
    <!-- MDBootstrap Datatables  -->
    <script type="text/javascript" src="{{ asset('js/addons/datatables.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            new WOW().init();
        });

    </script>

    <script>
        // MDB Lightbox Init
        $(function() {
            $("#mdb-lightbox-ui").load("{{ asset('mdb-addons/mdb-lightbox-ui.html') }}");
        });

    </script>


    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-analytics.js"></script>

    <script>
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        var firebaseConfig = {
            apiKey: "AIzaSyD4GcwKnBIo_FGOzAaggIUPEDVFYP-E0D0",
            authDomain: "vhgesso-6bc62.firebaseapp.com",
            projectId: "vhgesso-6bc62",
            storageBucket: "vhgesso-6bc62.appspot.com",
            messagingSenderId: "82180068896",
            appId: "1:82180068896:web:8305dc6a62346c47cb4e45",
            measurementId: "G-BSMQL268X9"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        firebase.analytics();

    </script>

</body>

</html>
