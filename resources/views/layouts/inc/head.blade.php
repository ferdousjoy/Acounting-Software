<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{asset('dashjscss')}}/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('dashjscss')}}/app-assets/images/ico/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{asset('dashjscss')}}/app-assets/ltr/vendors.css">
    <link rel="stylesheet" type="text/css" href="{{asset('dashjscss')}}/app-assets/vendors/css/extensions/unslider.css">
    <link rel="stylesheet" type="text/css" href="{{asset('dashjscss')}}/app-assets/vendors/css/weather-icons/climacons.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('dashjscss')}}/app-assets/fonts/meteocons/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('dashjscss')}}/app-assets/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="{{asset('dashjscss')}}/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('dashjscss')}}/app-assets/vendors/css/tables/extensions/buttons.dataTables.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashjscss')}}/app-assets/ltr/app.css">

    <!-- END STACK CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashjscss')}}/app-assets/vendors/css/calendars/fullcalendar.min.css">
<link href="{{asset('dashjscss')}}/assets/c_portcss/bootstrapValidator.min.css" rel="stylesheet"/>

<!-- Custom css  -->
<link href="{{asset('dashjscss')}}/assets/c_portcss/custom.css?v=?v=3.553" rel="stylesheet"/>
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashjscss')}}/app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('dashjscss')}}/app-assets/ltr/core/colors/palette-gradient.css">
    <link rel="stylesheet" href="{{asset('dashjscss')}}/assets/custom/datepicker.min.css">
    <link rel="stylesheet" href="{{asset('dashjscss')}}/assets/custom/summernote-bs4.css">
    <link rel="stylesheet" type="text/css" href="{{asset('dashjscss')}}/app-assets/vendors/css/forms/selects/select2.min.css">

    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashjscss')}}/assets/css/style.css">

    <link rel="stylesheet" type="text/css" href="{{asset('dashjscss')}}/app-assets/ltr/core/menu/menu-types/horizontal-menu.css">
    <!-- END Custom CSS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
    <script src="{{asset('dashjscss')}}/app-assets/vendors/js/vendors.min.js"></script>
    <script src="{{asset('dashjscss')}}/app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="{{asset('dashjscss')}}/app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
    <script src="{{asset('dashjscss')}}/assets/portjs/raphael.min.js"></script>
    <script src="{{asset('dashjscss')}}/assets/portjs/morris.min.js"></script>
    <script src="{{asset('dashjscss')}}/assets/myjs/datepicker.min.js"></script>
    <script src="{{asset('dashjscss')}}/assets/myjs/summernote-bs4.min.js"></script>
    <script src="{{asset('dashjscss')}}/assets/myjs/select2.min.js"></script>

</head>
