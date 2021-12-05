<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Laravel</title>

    <link rel="icon" href="../../img/Fevicon.png" type="image/png">
    <link rel="stylesheet" href="../../vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../../vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../../vendors/nice-select/nice-select.css">
    <link rel="stylesheet" href="../../vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="../../vendors/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <style>
        {{--        ADMIN STYLES        --}}

        .admin .nice-select, .admin .nice-select .list {
            width: 100%;
        }

        .admin .nice-select .list {
            max-height: 300px !important;
            overflow: auto !important;
        }
        {{--    /    ADMIN STYLES        --}}


    </style>
</head>
<body class="antialiased">
@yield('content')

<script src="../../vendors/jquery/jquery-3.2.1.min.js"></script>
<script src="../../vendors/bootstrap/bootstrap.bundle.min.js"></script>
<script src="../../vendors/skrollr.min.js"></script>
<script src="../../vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="../../vendors/nice-select/jquery.nice-select.min.js"></script>
<script src="../../vendors/jquery.ajaxchimp.min.js"></script>
<script src="../../vendors/nouislider/nouislider.min.js"></script>
<script src="../../vendors/jquery.ajaxchimp.min.js"></script>
<script src="../../vendors/mail-script.js"></script>
<script src="../../js/main.js"></script>
<script src="../../js/admin.js"></script>
</body>
</html>
