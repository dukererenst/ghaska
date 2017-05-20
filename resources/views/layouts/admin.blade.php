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
        <link rel="stylesheet" type="text/css" href='{{asset('public/css/admin/app.css')}}'/>
        <link rel="stylesheet" type="text/css" href='{{asset('public/css/admin/bootstrap-tagsinput.css')}}'/>
        <link rel="stylesheet" type="text/css" href='{{asset('public/css/admin/summernote.css')}}'/>
        <link rel="stylesheet" type="text/css" href='{{asset('public/css/admin/select2.min.css')}}'/>
        <link rel="stylesheet" type="text/css" href='{{asset('public/css/admin/select2-bootstrap.css')}}'/>
        <link rel="stylesheet" type="text/css" href='{{asset('public/css/admin/blog.css')}}'/>

        <link rel="stylesheet" type="text/css" href='{{asset('public/css/frontend/animate.min.css')}}'/>
        <link rel="stylesheet" type="text/css" href='{{asset('public/css/frontend/font-awesome.css')}}'/>
        <link rel="stylesheet" type="text/css" href='{{asset('public/css/admin/bootstrap3-wysihtml5.min.css')}}'/>
        <link rel="stylesheet" type="text/css" href='{{asset('public/css/admin/trumbowyg.min.css')}}'/>
        <link rel="stylesheet" type="text/css" href='{{asset('public/css/admin/trumbowyg.colors.min.css')}}'/>
        <link rel="stylesheet" type="text/css" href='{{asset('public/css/admin/editor.css')}}'/>




        <style type="text/css"> .icon {background:none;} </style>





    </head>
    <body class="skin-josh">
        <header class="header">
            <a href="#" class="logo">
                <img src='{{asset('public/img/ghaska-logo-small.png')}}' alt="logo">
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <div>
                    <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                        <div class="responsive_nav"></div>
                    </a>
                </div>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                                    
                                     <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="http://joshadmin.com/uploads/users/PIp5t9bLAi.jpg" alt="img" height="35px" width="35px" class="img-circle img-responsive pull-left">
                                <div class="riot">
                                    <div>
                                        {{ Auth::user()->first_name }}
                                        <span>
                                            <i class="caret"></i>
                                        </span>
                                    </div>
                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="http://joshadmin.com/uploads/users/PIp5t9bLAi.jpg" alt="img" class="img-circle img-bor">
                                    <p class="topprofiletext">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
                                </li>
                                <!-- Menu Body -->
                                <li>
                                    <a href="#">
                                        <i class="" data-name="user" data-s="18" id="-21" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="canvas-for--21" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#333333" stroke="none" d="M21.291,21.271C20.116,20.788,19.645,19.452,19.645,19.452S19.116,19.756,19.116,18.908C19.116,18.058,19.645,19.452,20.176,16.179000000000002C20.176,16.179000000000002,21.644,15.753000000000002,21.351999999999997,12.238000000000003H20.997999999999998C20.997999999999998,12.238000000000003,21.880999999999997,8.479000000000003,20.997999999999998,7.206000000000003C20.115999999999996,5.933000000000003,19.763999999999996,5.085000000000003,17.820999999999998,4.477000000000003C15.879999999999997,3.8700000000000028,16.587999999999997,3.991000000000003,15.174999999999997,4.053000000000003C13.762999999999998,4.1140000000000025,12.585999999999997,4.902000000000003,12.585999999999997,5.325000000000003C12.585999999999997,5.325000000000003,11.703999999999997,5.386000000000003,11.351999999999997,5.750000000000003C10.998999999999997,6.1140000000000025,10.410999999999996,7.810000000000002,10.410999999999996,8.235000000000003S10.805999999999996,11.509000000000004,11.099999999999996,12.116000000000003L10.648999999999996,12.237000000000004C10.354999999999995,15.752000000000004,11.824999999999996,16.178000000000004,11.824999999999996,16.178000000000004C12.353999999999996,19.450000000000003,12.883999999999995,18.057000000000006,12.883999999999995,18.907000000000004C12.883999999999995,19.755000000000003,12.353999999999996,19.451000000000004,12.353999999999996,19.451000000000004S11.883999999999995,20.787000000000003,10.707999999999995,21.270000000000003C9.530999999999995,21.755000000000003,3.002999999999995,24.361000000000004,2.471999999999994,24.906000000000002C1.942,25.455,2.002,28,2.002,28H29.997999999999998C29.997999999999998,28,30.058999999999997,25.455,29.526999999999997,24.906C28.996,24.361,22.468,21.756,21.291,21.271Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                        My Profile
                                    </a>
                                </li>
                                <li role="presentation"></li>
                                
                                <!-- Menu Footer-->
                                <li >

                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                        <i class="" data-name="sign-out" data-s="18" id="-23" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="canvas-for--23" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#333333" stroke="none" d="M20.424,8.135C20.191,7.901,20,7.979,20,8.311V12H13.2C12.536999999999999,12,12,12.537,12,13.2V18.801C12,19.463,12.537,20,13.2,20H20V23.689C20,24.019,20.191,24.099,20.424,23.865L28,16.424C28.234,16.192,28.234,15.809999999999999,28,15.575999999999999L20.424,8.135Z" opacity="1" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#333333" stroke="none" d="M7,30H19C19.553,30,20,29.553,20,29V27C20,26.447,19.553,26,19,26H8V6H19C19.553,6,20,5.553,20,5V3C20,2.447,19.553,2,19,2H7C5.344,2,4,3.343,4,5V27C4,28.656,5.344,30,7,30Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>

                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <aside class="left-side sidebar-offcanvas" style="min-height: 1375px;">
                <section class="sidebar ">
                    <div class="page-sidebar  sidebar-nav">
                        <div class="nav_icons">
                            
                        </div>
                        <div class="clearfix"></div>
                        <!-- BEGIN SIDEBAR MENU -->
                        <ul id="menu" class="page-sidebar-menu">
                            <li>
                                <a href="#">
                                    <i class="" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true" id="-28" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;" id="canvas-for--28"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#418bca" stroke="none" d="M29.719,15.469L24,9.751V5H21V6.752L17.414,3.167L16.424000000000003,2.1769999999999996C16.19,1.9429999999999996,15.810000000000002,1.9429999999999996,15.575000000000003,2.1769999999999996L14.585000000000003,3.167L2.282,15.469C2.048,15.703,2.048,16.083,2.282,16.317999999999998L2.847,16.883999999999997C3.081,17.116999999999997,3.461,17.118,3.6959999999999997,16.883999999999997L16,4.58L28.304000000000002,16.884C28.537000000000003,17.117,28.918000000000003,17.118000000000002,29.153000000000002,16.884L29.718000000000004,16.318C29.952,16.083,29.952,15.704,29.719,15.469ZM16,6.701L6,16.701V30H12V19.6C12,19.269000000000002,12.269,19,12.6,19H19.4C19.730999999999998,19,20,19.269,20,19.6V30H26V16.701L16,6.701ZM16,15.5L16,15.5L16,15.5L16,15.5L16,15.5ZM16,15.5L16,15.5L16,15.5L16,15.5L16,15.5ZM16,15.5L16,15.5L16,15.5L16,15.5L16,15.5ZM16,15.5L16,15.5L16,15.5L16,15.5L16,15.5Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="#418bca" stroke="none" d="M18.4,20H13.599999999999998C13.267999999999997,20,12.999999999999998,20.269,12.999999999999998,20.6V30H19V20.6C19,20.269,18.731,20,18.4,20Z" transform="matrix(0.5625,0,0,0.5625,0,0)" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                    <span class="title">Dashboard</span>
                                </a>
                            </li>



                            <li>
                                <a href="#">
                                    <i class="" data-name="image" data-c="#418BCA" data-hc="#418BCA" data-size="18" data-loop="true" id="-39" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; top: -0.109375px;" id="canvas-for--39"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#418bca" stroke="none" d="M6,24L8,18L10,20L16,14L18,16L21.664,10.75L26,18V24H6ZM9,10C7.343,10,6,11.343,6,13S7.343,16,9,16S12,14.657,12,13S10.657,10,9,10Z" opacity="1" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#418bca" stroke="none" d="M19.2,24C19.249,23.66,19.258,23.602,19.258,23.232C19.258,22.733,19.207,22.253999999999998,19.122,21.814C19.608,22.25,20.076999999999998,22.429,20.524,22.19C21.52,21.671000000000003,21.392,19.682000000000002,20.236,17.742C19.740000000000002,16.906000000000002,19.132,16.229,18.522000000000002,15.756C17.811000000000003,16.241,16.944000000000003,16.537,16.001,16.537C15.055000000000001,16.537,14.188,16.241,13.478000000000002,15.755999999999998C12.868000000000002,16.229,12.261000000000001,16.906,11.763000000000002,17.741999999999997C10.607000000000001,19.682,10.480000000000002,21.671999999999997,11.478000000000002,22.189999999999998C11.924000000000001,22.424999999999997,12.394000000000002,22.249999999999996,12.879000000000001,21.813999999999997C12.794,22.253999999999998,12.744000000000002,22.732999999999997,12.744000000000002,23.231999999999996C12.744000000000002,23.567999999999994,12.761000000000001,23.687999999999995,12.8,23.999999999999996H19.2ZM16,15.779C17.92,15.779,19.477,14.328,19.477,12.539C19.477,10.75,17.92,9.3,16,9.3C14.079,9.3,12.522,10.751000000000001,12.522,12.540000000000001S14.079,15.779,16,15.779ZM22.985,17.833C24.561,17.833,25.839,16.642999999999997,25.839,15.172999999999998C25.839,13.704999999999998,24.563,12.512999999999998,22.985,12.512999999999998S20.13,13.703999999999999,20.13,15.172999999999998C20.13,16.643,21.407,17.833,22.985,17.833ZM25.7,24C25.7,23.588,25.618,23.149,25.548,22.788C25.945999999999998,23.146,26.331999999999997,23.294,26.698999999999998,23.096C27.517999999999997,22.674,27.410999999999998,21.038,26.464,19.446C26.055999999999997,18.759,25.555999999999997,18.204,25.057,17.816000000000003C24.473,18.213,23.759999999999998,18.456000000000003,22.987,18.456000000000003C22.372999999999998,18.456000000000003,21.802,18.301000000000002,21.299,18.039C21.703,18.866,21.951999999999998,19.706000000000003,21.999,20.455000000000002C22.075,21.603,21.689,22.455000000000002,20.918999999999997,22.852C20.752999999999997,22.94,20.572999999999997,22.990000000000002,20.388999999999996,23.021C20.343,23.317,20.3,23.672,20.3,24H25.7ZM9.016,17.833C10.592,17.833,11.870000000000001,16.642999999999997,11.870000000000001,15.172999999999998C11.870000000000001,13.704999999999998,10.592,12.512999999999998,9.016000000000002,12.512999999999998C7.439000000000002,12.512999999999998,6.160000000000002,13.703999999999999,6.160000000000002,15.172999999999998C6.16,16.643,7.438,17.833,9.016,17.833ZM11.7,24C11.7,23.67,11.657,23.315,11.610999999999999,23.019C11.427,22.988999999999997,11.245999999999999,22.939999999999998,11.075,22.848C9.780999999999999,22.177999999999997,9.661,20.179,10.703,18.037C10.200999999999999,18.3,9.629,18.455,9.014999999999999,18.455C8.238,18.455,7.525999999999999,18.212999999999997,6.942999999999999,17.814999999999998C6.442999999999999,18.203,5.943999999999999,18.758,5.533999999999999,19.444999999999997C4.5859999999999985,21.037999999999997,4.481999999999999,22.673999999999996,5.300999999999999,23.094999999999995C5.667999999999999,23.288999999999994,6.052,23.143999999999995,6.449999999999999,22.786999999999995C6.381,23.149,6.4,23.588,6.4,24H11.7Z" opacity="0" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#418bca" stroke="none" d="M5.5,18.791L7.356,17.936L9.975,19.219L13.033,17.188000000000002L7.954999999999999,14.782000000000002L9.758,13.017000000000001L19.067999999999998,14.434000000000001C19.067999999999998,14.434000000000001,22.424999999999997,12.001000000000001,24.773999999999997,12.001000000000001C27.557999999999996,12.001000000000001,26.136999999999997,13.337000000000002,26.136999999999997,13.337000000000002C19.312,20.023,9.759,22,9.759,22C7.467,20.797,5.5,18.791,5.5,18.791Z" opacity="0" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#418bca" stroke="none" d="M2,7.2V26.8C2,27.463,2.537,28,3.2,28H28.8C29.463,28,30,27.463,30,26.8V7.2C30,6.537,29.463,6,28.8,6H3.2C2.537,6,2,6.537,2,7.2ZM28,26H4V8H28V26Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                    <span class="title">Setting</span>
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu collapse">
                                    <li>
                                        <a href='{{route('regions.index')}}'>
                                            <i class="fa fa-angle-double-right"></i>
                                            Regions
                                        </a>
                                    </li>
                                    <li>
                                       <a href='{{route('admin_about_us.index')}}'>
                                            <i class="fa fa-angle-double-right"></i>
                                           About us
                                        </a>
                                    </li>
                                    <li>
                                         <a href='{{route('admin_executives.index')}}'>
                                            <i class="fa fa-angle-double-right"></i>
                                            Executives
                                        </a>
                                    </li>
                                    <li>
                                         <a href='{{route('regional_reps.index')}}'>
                                            <i class="fa fa-angle-double-right"></i>
                                            Regional Reps
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="" data-name="image" data-c="#418BCA" data-hc="#418BCA" data-size="18" data-loop="true" id="-39" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; top: -0.109375px;" id="canvas-for--39"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#418bca" stroke="none" d="M6,24L8,18L10,20L16,14L18,16L21.664,10.75L26,18V24H6ZM9,10C7.343,10,6,11.343,6,13S7.343,16,9,16S12,14.657,12,13S10.657,10,9,10Z" opacity="1" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#418bca" stroke="none" d="M19.2,24C19.249,23.66,19.258,23.602,19.258,23.232C19.258,22.733,19.207,22.253999999999998,19.122,21.814C19.608,22.25,20.076999999999998,22.429,20.524,22.19C21.52,21.671000000000003,21.392,19.682000000000002,20.236,17.742C19.740000000000002,16.906000000000002,19.132,16.229,18.522000000000002,15.756C17.811000000000003,16.241,16.944000000000003,16.537,16.001,16.537C15.055000000000001,16.537,14.188,16.241,13.478000000000002,15.755999999999998C12.868000000000002,16.229,12.261000000000001,16.906,11.763000000000002,17.741999999999997C10.607000000000001,19.682,10.480000000000002,21.671999999999997,11.478000000000002,22.189999999999998C11.924000000000001,22.424999999999997,12.394000000000002,22.249999999999996,12.879000000000001,21.813999999999997C12.794,22.253999999999998,12.744000000000002,22.732999999999997,12.744000000000002,23.231999999999996C12.744000000000002,23.567999999999994,12.761000000000001,23.687999999999995,12.8,23.999999999999996H19.2ZM16,15.779C17.92,15.779,19.477,14.328,19.477,12.539C19.477,10.75,17.92,9.3,16,9.3C14.079,9.3,12.522,10.751000000000001,12.522,12.540000000000001S14.079,15.779,16,15.779ZM22.985,17.833C24.561,17.833,25.839,16.642999999999997,25.839,15.172999999999998C25.839,13.704999999999998,24.563,12.512999999999998,22.985,12.512999999999998S20.13,13.703999999999999,20.13,15.172999999999998C20.13,16.643,21.407,17.833,22.985,17.833ZM25.7,24C25.7,23.588,25.618,23.149,25.548,22.788C25.945999999999998,23.146,26.331999999999997,23.294,26.698999999999998,23.096C27.517999999999997,22.674,27.410999999999998,21.038,26.464,19.446C26.055999999999997,18.759,25.555999999999997,18.204,25.057,17.816000000000003C24.473,18.213,23.759999999999998,18.456000000000003,22.987,18.456000000000003C22.372999999999998,18.456000000000003,21.802,18.301000000000002,21.299,18.039C21.703,18.866,21.951999999999998,19.706000000000003,21.999,20.455000000000002C22.075,21.603,21.689,22.455000000000002,20.918999999999997,22.852C20.752999999999997,22.94,20.572999999999997,22.990000000000002,20.388999999999996,23.021C20.343,23.317,20.3,23.672,20.3,24H25.7ZM9.016,17.833C10.592,17.833,11.870000000000001,16.642999999999997,11.870000000000001,15.172999999999998C11.870000000000001,13.704999999999998,10.592,12.512999999999998,9.016000000000002,12.512999999999998C7.439000000000002,12.512999999999998,6.160000000000002,13.703999999999999,6.160000000000002,15.172999999999998C6.16,16.643,7.438,17.833,9.016,17.833ZM11.7,24C11.7,23.67,11.657,23.315,11.610999999999999,23.019C11.427,22.988999999999997,11.245999999999999,22.939999999999998,11.075,22.848C9.780999999999999,22.177999999999997,9.661,20.179,10.703,18.037C10.200999999999999,18.3,9.629,18.455,9.014999999999999,18.455C8.238,18.455,7.525999999999999,18.212999999999997,6.942999999999999,17.814999999999998C6.442999999999999,18.203,5.943999999999999,18.758,5.533999999999999,19.444999999999997C4.5859999999999985,21.037999999999997,4.481999999999999,22.673999999999996,5.300999999999999,23.094999999999995C5.667999999999999,23.288999999999994,6.052,23.143999999999995,6.449999999999999,22.786999999999995C6.381,23.149,6.4,23.588,6.4,24H11.7Z" opacity="0" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#418bca" stroke="none" d="M5.5,18.791L7.356,17.936L9.975,19.219L13.033,17.188000000000002L7.954999999999999,14.782000000000002L9.758,13.017000000000001L19.067999999999998,14.434000000000001C19.067999999999998,14.434000000000001,22.424999999999997,12.001000000000001,24.773999999999997,12.001000000000001C27.557999999999996,12.001000000000001,26.136999999999997,13.337000000000002,26.136999999999997,13.337000000000002C19.312,20.023,9.759,22,9.759,22C7.467,20.797,5.5,18.791,5.5,18.791Z" opacity="0" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#418bca" stroke="none" d="M2,7.2V26.8C2,27.463,2.537,28,3.2,28H28.8C29.463,28,30,27.463,30,26.8V7.2C30,6.537,29.463,6,28.8,6H3.2C2.537,6,2,6.537,2,7.2ZM28,26H4V8H28V26Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                    <span class="title">Gallery</span>
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu collapse">
                                    <li>
                                       <a href='{{route('galleryGroup.index')}}'>
                                            <i class="fa fa-angle-double-right"></i>
                                            Gallery Group
                                        </a>
                                    </li>
                                    <li>
                                       <a href='{{route('admin_gallery.index')}}'>
                                            <i class="fa fa-angle-double-right"></i>
                                             Gallery
                                        </a>
                                    </li>
                                   
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="" data-name="user" data-size="18" data-c="#6CC66C" data-hc="#6CC66C" data-loop="true" id="-40" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; top: -0.109375px;" id="canvas-for--40"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#6cc66c" stroke="none" d="M21.291,21.271C20.116,20.788,19.645,19.452,19.645,19.452S19.116,19.756,19.116,18.908C19.116,18.058,19.645,19.452,20.176,16.179000000000002C20.176,16.179000000000002,21.644,15.753000000000002,21.351999999999997,12.238000000000003H20.997999999999998C20.997999999999998,12.238000000000003,21.880999999999997,8.479000000000003,20.997999999999998,7.206000000000003C20.115999999999996,5.933000000000003,19.763999999999996,5.085000000000003,17.820999999999998,4.477000000000003C15.879999999999997,3.8700000000000028,16.587999999999997,3.991000000000003,15.174999999999997,4.053000000000003C13.762999999999998,4.1140000000000025,12.585999999999997,4.902000000000003,12.585999999999997,5.325000000000003C12.585999999999997,5.325000000000003,11.703999999999997,5.386000000000003,11.351999999999997,5.750000000000003C10.998999999999997,6.1140000000000025,10.410999999999996,7.810000000000002,10.410999999999996,8.235000000000003S10.805999999999996,11.509000000000004,11.099999999999996,12.116000000000003L10.648999999999996,12.237000000000004C10.354999999999995,15.752000000000004,11.824999999999996,16.178000000000004,11.824999999999996,16.178000000000004C12.353999999999996,19.450000000000003,12.883999999999995,18.057000000000006,12.883999999999995,18.907000000000004C12.883999999999995,19.755000000000003,12.353999999999996,19.451000000000004,12.353999999999996,19.451000000000004S11.883999999999995,20.787000000000003,10.707999999999995,21.270000000000003C9.530999999999995,21.755000000000003,3.002999999999995,24.361000000000004,2.471999999999994,24.906000000000002C1.942,25.455,2.002,28,2.002,28H29.997999999999998C29.997999999999998,28,30.058999999999997,25.455,29.526999999999997,24.906C28.996,24.361,22.468,21.756,21.291,21.271Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                    <span class="title">Users</span>
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu collapse">
                                    <li>
                                         <a href='{{route('pending_user.index')}}'>
                                            <i class="fa fa-angle-double-right"></i>
                                            Pending Users
                                        </a>
                                    </li>
                                    <li>
                                        <a href='{{route('members.index')}}'>
                                            <i class="fa fa-angle-double-right"></i>
                                            Members
                                        </a>
                                    </li>



                                </ul>
                            </li>


                            <li>
                                <a href="#">
                                    <i class="" data-name="comment" data-c="#F89A14" data-hc="#F89A14" data-size="18" data-loop="true" id="-43" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; top: -0.109375px;" id="canvas-for--43"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#f89a14" stroke="none" d="M16,4.61C8.437000000000001,4.61,2.3049999999999997,8.686,2.3049999999999997,13.715C2.3049999999999997,16.592,4.318,19.154,7.452,20.822C7.006,22.301,6.116,23.939,4.396,25.387999999999998C4.396,25.387999999999998,8.411,25.122,11.247,22.244999999999997C11.41,22.284,11.635,22.362,11.8,22.397999999999996C12.100000000000001,22.498999999999995,12.504000000000001,22.631999999999998,13,22.697999999999997C16.8,23.197999999999997,20.431,22.570999999999998,23.2,21.397999999999996C25.8,20.296999999999997,26.9,19.397999999999996,27.9,18.296999999999997C29,16.996999999999996,29.695,15.370999999999997,29.695,13.711999999999996C29.695,8.687,23.563,4.61,16,4.61Z" opacity="1" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path></svg></i>
                                    <span class="title">Blog</span>
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu collapse">
                                    <li>
                                        <a href='{{route('blog_category.index')}}'>
                                            <i class="fa fa-angle-double-right"></i>
                                            Blog Category List
                                        </a>
                                    </li>
                                    <li>
                                       <a href='{{route('blog.index')}}'>
                                            <i class="fa fa-angle-double-right"></i>
                                            Blog List
                                        </a>
                                    </li>
                                    <li>
                                        <a href='{{route('blog.create')}}'>
                                            <i class="fa fa-angle-double-right"></i>
                                            Add New Blog
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <!-- Menus generated by CRUD generator -->
                        </ul>                <!-- END SIDEBAR MENU -->
                    </div>
                </section>
            </aside>

            <aside class="right-side">
                <section class="content-header">
                    <h1> @yield('title')</h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <a href="#">

                                @yield('title')
                            </a>
                        </li>
                    </ol>
                </section>
                <section class="content">
                    @yield('content')
                </section>
            </aside>


        </div>




        <script type="text/javascript" src='{{asset('public/js/admin/app.js')}}'></script>
        <script type="text/javascript" src='{{asset('public/js/admin/bootstrap-tagsinput.js')}}'></script>
      

        <script type="text/javascript" src='{{asset('public/js/admin/add_newblog.js')}}'></script>
        <script type="text/javascript" src='{{asset('public/js/admin/bootstrap3-wysihtml5.all.min.js')}}'></script>
        <script type="text/javascript" src='{{asset('public/js/admin/bootstrap3-wysihtml5.min.js')}}'></script>
        <script type="text/javascript" src='{{asset('public/js/admin/tinymce.min.js')}}'></script>
        <script type="text/javascript" src='{{asset('public/js/admin/summernote.min.js')}}'></script>
        <script type="text/javascript" src='{{asset('public/js/admin/trumbowyg.js')}}'></script>
        <script type="text/javascript" src='{{asset('public/js/admin/trumbowyg.base64.min.js')}}'></script>
        <script type="text/javascript" src='{{asset('public/js/admin/trumbowyg.colors.min.js')}}'></script>
        <script type="text/javascript" src='{{asset('public/js/admin/trumbowyg.noembed.min.js')}}'></script>
        <script type="text/javascript" src='{{asset('public/js/admin/trumbowyg.pasteimage.min.js')}}'></script>
        <script type="text/javascript" src='{{asset('public/js/admin/trumbowyg.preformatted.min.js')}}'></script>
        <script type="text/javascript" src='{{asset('public/js/admin/trumbowyg.upload.min.js')}}'></script>
          <script type="text/javascript" src='{{asset('public/js/admin/editor2.js')}}'></script>

    </body>
</html>
