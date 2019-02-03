<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="Lawal Oladipupo Olawunmi">
    <meta name="keywords" content="web developer, web developer nigeria, nigeria, lawal, oladipupo, lawal oladipupo,
    blessedhorlar, firstlawal, php developer nigeria, laravel developer, laravel nigeri">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>@yield('title') | Lawal Oladipupo Olawunmi | iamlawal.com.ng</title>
    <!--
    Stimulus Template
    http://www.templatemo.com/tm-498-stimulus
    -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/templatemo-style.css')}}">

    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">

</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- PRE LOADER -->

<div class="preloader">
    <div class="spinner">
        <span class="spinner-rotate"></span>
    </div>
</div>
<!-- Navigation Section -->

<div class="navbar navbar-fixed-top custom-navbar" role="navigation">
    <div class="container">

        <!-- navbar header -->
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Stimulus</a>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#home" class="smoothScroll">Home</a></li>
                <li><a href="#about" class="smoothScroll">About Me</a></li>
                <li><a href="#experience" class="smoothScroll">Experiences</a></li>
                <li><a href="#quotes" class="smoothScroll">Testimonial</a></li>
                <li><a href="#contact" class="smoothScroll">Contact</a></li>
            </ul>
        </div>

    </div>
</div>


@yield('content')

<!-- Footer Section -->

<footer>
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <div class="wow fadeInUp footer-copyright" data-wow-delay="1.8s">
                    <p>Copyright &copy; 2016 Your Company

                        | Design: <a href="http://www.google.com/+templatemo" target="_parent">templatemo</a></p>
                </div>
                <ul class="wow fadeInUp social-icon" data-wow-delay="2s">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-google-plus"></a></li>
                    <li><a href="#" class="fa fa-dribbble"></a></li>
                    <li><a href="#" class="fa fa-linkedin"></a></li>
                </ul>
            </div>

        </div>
    </div>
</footer>

<!-- SCRIPTS -->

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.parallax.js')}}"></script>
<script src="{{asset('js/smoothscroll.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

</body>
</html>