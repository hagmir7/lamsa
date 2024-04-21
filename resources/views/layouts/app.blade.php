<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="https://rawaabeauty.com/assets/web/images/fav-icon.png" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <meta name="csrf-token" content="ZekuFMjCWdPb8guuSFuUkaeSLLQaJZuNc7lAxiKC" />
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://rawaabeauty.com/assets/web/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://rawaabeauty.com/assets/web/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="https://rawaabeauty.com/assets/web/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://rawaabeauty.com/assets/web/css/chosen.min.css" />
    <link rel="stylesheet" type="text/css" href="https://rawaabeauty.com/assets/web/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="https://rawaabeauty.com/assets/web/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" type="text/css" href="https://rawaabeauty.com/assets/web/css/jquery.scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="https://rawaabeauty.com/assets/web/css/lightbox.min.css" />
    <link rel="stylesheet" type="text/css" href="https://rawaabeauty.com/assets/web/css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="https://rawaabeauty.com/assets/web/css/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://rawaabeauty.com/assets/web/css/megamenu.css" />
    <link rel="stylesheet" type="text/css" href="https://rawaabeauty.com/assets/web/css/dreaming-attribute.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css" />

    <link rel="stylesheet" href="https://rawaabeauty.com/assets/vendor/libs/toastr/toastr.css" />
    <link rel="stylesheet"
        href="https://rawaabeauty.com/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />

    <title> GANDOURA - SAHARA STRIPE | RawaaBeauty </title>
    <meta name="robots" content="noindex">
    <link rel="canonical" href="https://rawaabeauty.com/fr/products/gandoura-sahara-stripe">

    <meta name="description"
        content="GANDOURA - SAHARA STRIPE est une création exclusive de Rawaa Beauty, définie par sa coupe moderne et ses finitions impeccables. Fabriqué à partir de matériaux de haute qualité, ce vêtement offre un équilibre parfait entre tendance et confort.">
    <title>GANDOURA - SAHARA STRIPE</title>
    <meta name="image" content="https://rawaabeauty.comhttps://rawaabeauty.com/assets/web/images/rb-black.png">
    <meta property="og:title" content="GANDOURA - SAHARA STRIPE">
    <meta property="og:description"
        content="GANDOURA - SAHARA STRIPE est une création exclusive de Rawaa Beauty, définie par sa coupe moderne et ses finitions impeccables. Fabriqué à partir de matériaux de haute qualité, ce vêtement offre un équilibre parfait entre tendance et confort.">
    <meta property="og:locale" content="fr">
    <meta property="og:image" content="https://rawaabeauty.comhttps://rawaabeauty.com/assets/web/images/rb-black.png">
    <meta property="og:url" content="https://rawaabeauty.com/fr/products/gandoura-sahara-stripe">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="https://rawaabeauty.comhttps://rawaabeauty.com/assets/web/images/rb-black.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="https://rawaabeauty.comhttps://rawaabeauty.com/assets/web/images/rb-black.png">
    <meta name="twitter:title" content="GANDOURA - SAHARA STRIPE">
    <meta name="twitter:description"
        content="GANDOURA - SAHARA STRIPE est une création exclusive de Rawaa Beauty, définie par sa coupe moderne et ses finitions impeccables. Fabriqué à partir de matériaux de haute qualité, ce vêtement offre un équilibre parfait entre tendance et confort.">

    <style>
        .my-wrapper img {
            width: 100%;
        }



        .payment__img {
            background-image: url(https://rawaabeauty.com/assets/img/method.png);
            height: 40px;
            width: 100%;
            background-repeat: no-repeat;
            background-position: center center;
        }

        .variant {
            width: 40px;
            height: 20px;
            background: #f4f4f4;
            border-radius: 4px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 4px;
            color: #000;
            cursor: pointer;
        }

        .active-variant {
            background: #000;
            color: #fff;
        }

        .entry-summary form.cart.variations_form .variations {
            padding-bottom: 0px !important;
            position: relative;
        }

        .input-qty.input-text.qty.text {
            border: none !important;
        }

        .lynessa-newsletter.style-01 .email-newsletter {
            width: 100%;
            height: 40px;
            line-height: 38px;
            background-color: #fff;
            padding-right: 145px;
            text-align: start !important;
        }

        .main-container {
            padding-top: 70px;
            padding-bottom: 0px !important;
        }

        .hide-zoom {
            position: absolute;
            top: 16px;
            right: 16px;
            z-index: 9999;
            background: #87654a;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
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



        @livewireScripts()
    <a href="#" class="backtotop active">
        <img src="/assets/imgs/arrow-small-up.svg" width="40px" alt="Top">
    </a>
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
    {{-- <script src="https://rawaabeauty.com/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script> --}}
    {{-- <script src="https://rawaabeauty.com/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script> --}}
    <script src="https://rawaabeauty.com/assets/vendor/libs/block-ui/block-ui.js"></script>
    {{-- <script src="https://rawaabeauty.com/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script> --}}
    {{-- <script src="https://rawaabeauty.com/assets/js/controllers/web/NewsLetterController.js"></script> --}}
    <script src="/assets/js/app.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" crossorigin="anonymous">
    </script>
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
</body>

</html>
