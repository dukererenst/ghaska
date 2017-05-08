<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>GHASKA</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href='{{asset('public/css/frontend/lib.css')}}'/>
        <link rel="stylesheet" type="text/css" href='{{asset('public/css/frontend/tabbular.css')}}'/>
        <link rel="stylesheet" type="text/css" href='{{asset('public/css/frontend/animate.min.css')}}'/>
        <link rel="stylesheet" type="text/css" href='{{asset('public/css/frontend/owl.carousel.css')}}'/>
        <link rel="stylesheet" type="text/css" href='{{asset('public/css/frontend/owl.theme.css')}}'/>
        <link rel="stylesheet" type="text/css" href='{{asset('public/css/frontend/primary-skin.css')}}'/>
        <link rel="stylesheet" type="text/css" href='{{asset('public/css/frontend/jquery.circliful.css')}}'/>
        <link rel="stylesheet" type="text/css" href='{{asset('public/css/frontend/font-awesome.css')}}'/>
    </head>
    <body>
        <header >
            <!-- Icon Section Start -->
            <div class="icon-section">
                <div class="container">
                    <ul class="list-inline">
                        <li>
                            <a href="#"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="livicon" data-name="google-plus" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="livicon" data-name="rss" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                            </a>
                        </li>
                        <li class="pull-right">
                            <ul class="list-inline icon-position">
                                <li>
                                    <a href="mailto:"><i class="livicon" data-name="mail" data-size="18" data-loop="true" data-c="#fff" data-hc="#fff"></i></a>
                                    <label class="hidden-xs"><a href="mailto:" class="text-white">info@joshadmin.com</a></label>
                                </li>
                                <li>
                                    <a href="tel:"><i class="livicon" data-name="phone" data-size="18" data-loop="true" data-c="#fff" data-hc="#fff"></i></a>
                                    <label class="hidden-xs"><a href="tel:" class="text-white">(703) 717-4200</a></label>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- //Icon Section End -->
            <!-- Nav bar Start -->
            <nav class="navbar navbar-default container" >
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                        <span><a href="#">_<i class="livicon" data-name="responsive-menu" data-size="25" data-loop="true" data-c="#757b87" data-hc="#ccc"></i>
                            </a></span>
                    </button>
                    <a class="navbar-brand"  href='{{route('home')}}'><img src='{{asset('public/img/ghaska-logo-small.png')}}' alt="logo" class="logo_position">
                    </a>
                </div>
                @include('include.topMenu')
            </nav>
            <!-- Nav bar End -->
        </header>
         @include('include.breadcrumb')

        @yield('content')


        <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
            <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
        </a>

        <script type="text/javascript" src='{{asset('public/js/frontend/lib.js')}}'></script>

        <script type="text/javascript" src='{{asset('public/js/frontend/jquery-1.11.1.min.js')}}'></script>
        <script type="text/javascript" src='{{asset('public/js/frontend/owl.carousel.min.js')}}'></script>
        <script type="text/javascript" src='{{asset('public/js/frontend/carousel.js')}}'></script>
        <script type="text/javascript" src='{{asset('public/js/frontend/bootstrap.min.js')}}'></script>
        <script type="text/javascript" src='{{asset('public/js/frontend/jquery.circliful.js')}}'></script>


        <script type="text/javascript" src='{{asset('public/js/frontend/livicons-1.4.min.js')}}'></script>
        <script type="text/javascript" src='{{asset('public/js/frontend/raphael-min.js')}}'></script>
        <script type="text/javascript" src='{{asset('public/js/frontend/wow.min.js')}}'></script>

    </body>
</html>
