<!--
=========================================================
 Paper Dashboard - v2.0.0
=========================================================

 Product Page: https://www.creative-tim.com/product/paper-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 UPDIVISION (https://updivision.com)
 Licensed under MIT (https://github.com/creativetimofficial/paper-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('backupmodule') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  
    <title>
        {{ __('Backup Module') }}
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
   <!-- <link href="{{ asset('backupmodule') }}/css/bootstrap.min.css" rel="stylesheet" /> -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('backupmodule') }}/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <!-- <link href="{{ asset('backupmodule') }}/demo/demo.css" rel="stylesheet" /> -->
   

    <style>
.progress {
      position: relative;
      height: 20px;
      display: block;
      width: 100%;
      background-color: white;
      border-radius: 2px;
      background-clip: padding-box;
      /*margin: 0.5rem 0 1rem 0;*/
      overflow: hidden;

    }
    .progress .indeterminate {
background-color:black; }
    .progress .indeterminate:before {
      content: '';
      position: absolute;
      background-color: #2C67B1;
      top: 0;
      left: 0;
      bottom: 0;
      will-change: left, right;
      -webkit-animation: indeterminate 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
              animation: indeterminate 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite; 
              z-index: 10;
              }
    .progress .indeterminate:after {
      content: '';
      position: absolute;
      background-color: #2C67B1;
      top: 0;
      left: 0;
      bottom: 0;
      will-change: left, right;
      -webkit-animation: indeterminate-short 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
              animation: indeterminate-short 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
      -webkit-animation-delay: 1.15s;
              animation-delay: 1.15s; }

    @-webkit-keyframes indeterminate {
      0% {
        left: -35%;
        right: 100%; }
      60% {
        left: 100%;
        right: -90%; }
      100% {
        left: 100%;
        right: -90%; } }
    @keyframes indeterminate {
      0% {
        left: -35%;
        right: 100%; }
      60% {
        left: 100%;
        right: -90%; }
      100% {
        left: 100%;
        right: -90%; } }
    @-webkit-keyframes indeterminate-short {
      0% {
        left: -200%;
        right: 100%; }
      60% {
        left: 107%;
        right: -8%; }
      100% {
        left: 107%;
        right: -8%; } }
    @keyframes indeterminate-short {
      0% {
        left: -200%;
        right: 100%; }
      60% {
        left: 107%;
        right: -8%; }
      100% {
        left: 107%;
        right: -8%; } }
    </style>
</head>

<body class="{{ $class }}">
    
<div class="progress" id="PreLoaderBar">
        <div class="indeterminate"></div>
    </div>

    @auth()
        @include('backupmodule::layouts.page_templates.auth')
       <!-- @include('backupmodule::layouts.navbars.fixed-plugin') -->
    @endauth
    
    @guest
        @include('backupmodule::layouts.page_templates.guest')
    @endguest


       
    <!--   Core JS Files   -->
    <script src="{{ asset('backupmodule') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('backupmodule') }}/js/core/popper.min.js"></script>
    <script src="{{ asset('backupmodule') }}/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('backupmodule') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="{{ asset('backupmodule') }}/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('backupmodule') }}/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('backupmodule') }}/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('backupmodule') }}/demo/demo.js"></script>
    <!-- Sharrre libray -->
    <script src="../assets/demo/jquery.sharrre.js"></script>
    
    <script>
        document.onreadystatechange = function () {
            if (document.readyState === "complete") {
                console.log(document.readyState);
                document.getElementById("PreLoaderBar").style.display = "none";
            }
        }
</script>
    @stack('scripts')

    @include('backupmodule::layouts.navbars.fixed-plugin-js')
</body>

<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

</html>
