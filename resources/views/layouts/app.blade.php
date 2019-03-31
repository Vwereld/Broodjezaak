<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 9]>
<html id="ie9" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if gt IE 9]>
<html class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if !IE]>
<html dir="ltr" lang="en-US">
<![endif]-->

<!-- START HEAD -->
<head>

    <meta charset="UTF-8" />
    <!-- this line will appear only if the website is visited with an iPad -->

    <title>Broodjeszaak</title>
    <!-- CSSs -->
    <link href="{{ asset('css/style-minifield.css') }}" rel="stylesheet">
    {{--<!-- CSSs Plugin -->--}}

    <link rel="stylesheet" id="google-fonts-css" href="http://fonts.googleapis.com/css?family=Oswald%7CDroid+Sans%7CPlayfair+Display%7COpen+Sans+Condensed%3A300%7CRokkitt%7CShadows+Into+Light%7CAbel%7CDamion%7CMontez&amp;ver=3.4.2" type="text/css" media="all" />
    <link rel='stylesheet' href='/css/font-awesome.css' type='text/css' media='all' />

    <!-- JAVASCRIPTs -->
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="/js/bootstrap-filestyle.min.js"></script>
    <script type="text/javascript" src="/js/jquery-ui.js"></script>
</head>
<!-- END HEAD -->

<!-- START BODY -->
<body class="no_js responsive stretched">

<!-- START BG SHADOW -->
<div class="bg-shadow">
    <!-- START WRAPPER -->
    <div id="wrapper" class="group">
        <!-- START HEADER -->
        <div id="header" class="group">
            <div class="group inner">
                <!-- START LOGO -->
                <div class="clearer"></div>
                <hr />
                <div id="header-shadow"></div>
                <div id="menu-shadow"></div>
            </div>
        </div>
        <!-- END HEADER -->
        <!-- START PRIMARY -->
        @if(session()->exists('status'))
            <div class="box success-box">
                {{ session()->get('status') }}
            </div>
        @endif﻿
        <div id="primary">
            <div class="inner group">
                <!-- START CONTENT -->
            @yield('content')
            <!-- END CONTENT -->
            </div>
        </div>
    </div>
    <!-- END PRIMARY -->
</div>
<!-- END WRAPPER -->
</div>
<!-- END BG SHADOW -->
</body>
<!-- END BODY -->
</html>
