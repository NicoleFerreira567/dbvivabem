<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') - Academia </title>
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ ('css/fontawesome.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ ('css/magnific-popup.min.css') }}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ ('css/slick.min.css') }}">
    <!-- Flip Slider -->
    <link rel="stylesheet" href="{{ ('css/jquery.flipster.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ ('css/style.css') }}">

</head>
<body

<nav class="main-menu">
<ul>
    <img src="{{ asset('img/logoVivaBem.svg') }}" alt="logo">
<li><a href="{{ url('/') }}">home</a></li>
<li><a href="{{ url('/sobre') }}">sobre</a></li>
<li><a href="{{ url('/modalidade') }}">modalidade</a></li>
<li><a href="{{ url('/treino') }}">treino</a></li>
<li><a href="{{ url('/noticia') }}">noticia</a></li>
<li><a href="{{ url('/contato') }}">contato</a></li>
</ul>
</nav>

<main class="conteiner">
@yield('conteudo')
</main>

<!--area do banner--




<footer>
    <h2>blablublé</h2>
</footer>
<!--Script-->

    <!--==============================
    All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('js/vendor/slick.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <!-- Flip Slider -->
    <script src="{{ asset('js/jquery.flipster.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>

    <script src="{{ asset('js/bmi.calculator.js') }}"></script>

    <!-- Main Js File -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</body>
</html>
