<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="My name is Lawal Oladipupo Olawunmi, and I am a web developer from Nigeria. Love technology and its parents...">
    <meta name="keywords" content="web developer, web developer nigeria, nigeria, lawal, oladipupo, lawal oladipupo,
    blessedhorlar, firstlawal, php developer nigeria, laravel developer, laravel nigeri">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>@yield('title') | Lawal Oladipupo Olawunmi | iamlawal.com.ng</title>
    <!--
    Stimulus Template
    http://www.templatemo.com/tm-498-stimulus
    -->
    <link rel="stylesheet" href="{{secure_asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{secure_asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{secure_asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{secure_asset('css/templatemo-style.css')}}">

    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90904178-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-90904178-2');
    </script>

    <!-- Google Site Console -->
    <meta name="google-site-verification" content="ATJVM_-pikXisRyuLlUn6k-j9UCBYtuba51IEslK0h0" />
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
                <a href="#" class="navbar-brand">{{env('APP_NAME')}}</a>
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

<footer class="bg-dark">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <div class="wow fadeInUp footer-copyright" data-wow-delay="1.8s">
                    <p>Copyright &copy; {{date('Y')}} Lawal Oladipupo

                        | Design: <a href="http://www.google.com/+templatemo" target="_parent">templatemo</a></p>
                </div>
                <ul class="wow fadeInUp social-icon" data-wow-delay="2s">
                    <li><a href="//facebook.com/blessedhorlar" class="fa fa-facebook"></a></li>
                    <li><a href="//twitter.com/@firstlawal" class="fa fa-twitter"></a></li>
                    <li><a href="//www.linkedin.com/in/lawal-oladipupo-ba9525b0" class="fa fa-linkedin"></a></li>
                    <li><a href="//visualcv.com/i_am_lawal/pdf" class="fa fa-files-o"></a></li>
                </ul>
            </div>

        </div>
    </div>
</footer>

<!-- SCRIPTS -->

<script src="{{secure_asset('js/jquery.js')}}"></script>
<script src="{{secure_asset('js/bootstrap.min.js')}}"></script>
<script src="{{secure_asset('js/jquery.parallax.js')}}"></script>
<script src="{{secure_asset('js/smoothscroll.js')}}"></script>
<script src="{{secure_asset('js/wow.min.js')}}"></script>
<script src="{{secure_asset('js/custom.js')}}"></script>

</body>
</html>
