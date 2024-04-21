<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="https://rawaabeauty.com/assets/web/images/fav-icon.png" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://rawaabeauty.com/assets/web/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://rawaabeauty.com/assets/web/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="https://rawaabeauty.com/assets/web/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://rawaabeauty.com/assets/web/css/chosen.min.css" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.min.css" />


    {{-- <link rel="stylesheet" type="text/css" href="https://rawaabeauty.com/assets/web/css/font-awesome.min.css" /> --}}
    <link rel="stylesheet" type="text/css" href="https://rawaabeauty.com/assets/web/css/jquery.scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="https://rawaabeauty.com/assets/web/css/lightbox.min.css" />
    <link rel="stylesheet" type="text/css" href="https://rawaabeauty.com/assets/web/css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="https://rawaabeauty.com/assets/web/css/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://rawaabeauty.com/assets/web/css/megamenu.css" />
    <link rel="stylesheet" type="text/css" href="https://rawaabeauty.com/assets/web/css/dreaming-attribute.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css" />
    {{-- <link rel="stylesheet" type="text/css" href="https://rawaabeauty.com/assets/css/modified.css?v=0.2.4" /> --}}

    <link rel="stylesheet" href="https://rawaabeauty.com/assets/vendor/libs/toastr/toastr.css" />
    {{-- <link rel="stylesheet" href="https://rawaabeauty.com/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" /> --}}
    <meta name="robots" content="noindex">
    <link rel="canonical" href="https://rawaabeauty.com/fr">

    <meta name="description" content="#!">
    <meta name="image" content="https://rawaabeauty.com/assets/web/images/rb-black.png">
    <meta property="og:title" content="Accueil">
    <meta property="og:description" content="#!">
    <meta property="og:locale" content="fr">
    <meta property="og:image" content="https://rawaabeauty.com/assets/web/images/rb-black.png">
    <meta property="og:url" content="https://rawaabeauty.com/fr">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="https://rawaabeauty.com/assets/web/images/rb-black.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="https://rawaabeauty.com/assets/web/images/rb-black.png">
    <meta name="twitter:title" content="Accueil">
    <meta name="twitter:description" content="#!">

    <style>
        .myslide img {
            width: 100% !important;
        }

        .slide-info{
            top: 58% !important;
        }

        .slide-inner h5,
        .slide-inner h1,
        .slide-inner h2,
        .slide-inner h5 span {
            color: #fff !important;
        }


        .black-links {
            color: #000 !important;
        }

        .white-links {
            color: #fff !important;
        }

        .header.style-04 .lynessa-live-search-form .txt-livesearch {
            min-width: 200px;
            border-bottom: 1px solid #fff;
        }

        .searchfield {
            color: #fff !important;
        }

        .header.style-04 .block-search-form .btn-submit {
            color: #fff !important;
        }

        .loader {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            z-index: 999999999 !important;
            background: #fff;
        }

        @keyframes scale {
            0% {
                transform: scale(0);
            }

            100% {
                transform: scale(1);
            }



        }

        .loader img {
            animation: scale 3s infinite;
        }
    </style>

    <title>{{ config('app.name') }}</title>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @livewireStyles()
    {{-- @vite('resources/css/app.css') --}}
</head>

<body class="antialiased">
    <x-nav />
    @yield('content')
    <x-footer />





    {{-- @vite('resources/js/app.js') --}}


        @livewire('login')
        <a href="#" class="backtotop active">
            <img src="/assets/imgs/arrow-small-up.svg" width="40px" alt="Top">
        </a>


        @livewireScripts()
        <script src="https://rawaabeauty.com/assets/web/js/jquery-1.12.4.min.js"></script>
        <script src="https://rawaabeauty.com/assets/web/js/bootstrap.min.js"></script>
        <script src="https://rawaabeauty.com/assets/web/js/chosen.min.js"></script>
        <script src="https://rawaabeauty.com/assets/web/js/countdown.min.js"></script>
        <script src="https://rawaabeauty.com/assets/web/js/jquery.scrollbar.min.js"></script>
        <script src="https://rawaabeauty.com/assets/web/js/lightbox.min.js"></script>
        <script src="https://rawaabeauty.com/assets/web/js/magnific-popup.min.js"></script>
        <script src="https://rawaabeauty.com/assets/web/js/slick.js"></script>
        <script src="https://rawaabeauty.com/assets/web/js/jquery.zoom.min.js"></script>
        <script src="https://rawaabeauty.com/assets/web/js/threesixty.min.js"></script>
        <script src="https://rawaabeauty.com/assets/web/js/jquery-ui.min.js"></script>
        <script src="https://rawaabeauty.com/assets/web/js/mobilemenu.js?v=0.0.1"></script>
        <script src="https://rawaabeauty.com/assets/web/js/functions.js?v=0.0.1"></script>

        <script src="https://rawaabeauty.com/assets/vendor/libs/select2/select2.js"></script>
        <script src="https://rawaabeauty.com/assets/vendor/libs/toastr/toastr.js"></script>
        {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
        <script src="https://rawaabeauty.com/assets/vendor/libs/block-ui/block-ui.js"></script>
        {{-- <script src="https://rawaabeauty.com/assets/js/controllers/web/NewsLetterController.js"></script> --}}
        <script src="/assets/js/app.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
        </script>


<script>
    <script>
        $('.variant').on('click', function() {
                $('.variant').removeClass('active-variant');
                $(this).addClass('active-variant');
                $value = $(this).data('value');
                $('#size').val($value);
            });

            $('.show_guide').on('click', function() {
                $('.img_guide').removeClass('d-none');
                $('.show_guide').addClass('d-none');
                $('.hide_guide').removeClass('d-none');
            });

            $('.hide_guide').on('click', function() {
                $(this).addClass('d-none');
                $('.show_guide').removeClass('d-none');
                $('.img_guide').addClass('d-none');
            });

            $('.matiere').on('click', function() {
                $('.matiere_div').removeClass('d-none');
                $('.matiere').addClass('d-none');
                $('.hide_matiere').removeClass('d-none');
            });

            $('.hide_matiere').on('click', function() {
                $(this).addClass('d-none');
                $('.matiere').removeClass('d-none');
                $('.matiere_div').addClass('d-none');
            });

            $('.schema').on('click', function() {
                $('.schema_div').removeClass('d-none');
                $('.schema').addClass('d-none');
                $('.hide_schema').removeClass('d-none');

            });

            $('.hide_schema').on('click', function() {
                $(this).addClass('d-none');
                $('.schema').removeClass('d-none');
                $('.schema_div').addClass('d-none');
            });

            function checkIfMobile() {
                if ($(window).width() < 768) {
                    $('.lynessa-product-gallery__trigger.activeZoom').removeClass('d-none');
                    $(".activeZoom").on("click", function() {
                        $(".lynessa-product-gallery .lynessa-product-gallery__image").zoom();
                        $(this).addClass('d-none');
                        $('.hide-zoom').removeClass('d-none');
                    });
                    $('.hide-zoom').on('click', function() {
                        $(".lynessa-product-gallery .lynessa-product-gallery__image").trigger('zoom.destroy');
                        $(this).removeClass('d-none');
                        $('.hide-zoom').addClass('d-none');
                        $('.activeZoom').removeClass('d-none');
                    });
                    $(".lynessa-product-gallery .lynessa-product-gallery__image").trigger('zoom.destroy');
                } else {
                    $('.lynessa-product-gallery__trigger.activeZoom').addClass('d-none');
                    $(".lynessa-product-gallery .lynessa-product-gallery__image").zoom();
                }
            }

            checkIfMobile();

            $(window).resize(function() {
                checkIfMobile();
            });
    </script>

    <script>
        var success = null;
            if (success) {
                toastr.success(success);
            }

            var error = null;
            if (error) {
                toastr.error(error);
            }
    </script>


    <script>
        $(document).ready(function() {
                $('.curency').on('click', function() {
                    var curency = $(this).data('curency');
                });


                $('.reviews').slick({
                    slidesToShow: 3,
                    slidesToScroll: 2,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    arrows: false,
                    dots: false,
                    infinite: true,
                    speed: 500,

                    responsive : [
                        {
                            breakpoint: 768,
                            settings: {
                                arrows: false,
                                dots: false,
                                slidesToShow:1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            });
    </script>
</script>

</body>

</html>
