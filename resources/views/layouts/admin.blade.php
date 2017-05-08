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




        <style type="text/css"> .icon {background:none;} </style>





    </head>
    <body class="skin-josh">
        <header class="header">
            <a href="http://joshadmin.com/admin" class="logo">
                <img src="http://joshadmin.com/assets/img/logo.png" alt="logo">
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
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="" data-name="message-flag" data-loop="true" data-color="#42aaca" data-hovercolor="#42aaca" data-size="28" id="-1" style="width: 28px; height: 28px;"><svg height="28" version="1.1" width="28" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.890625px;" id="canvas-for--1"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#42aaca" stroke="none" d="M24,16.931V27.059C24,27.578,23.578,28,23.059,28H2.941C2.422,28,2,27.578,2,27.059V15.035L6,18.32L2.9,27.1L7.577999999999999,19.672L11.517,22.516000000000002C12.334999999999999,23.161,13.663,23.161,14.482,22.516000000000002L18.421,19.672L23.218,27.125L20,18.32L22.225,16.493000000000002C22.79,16.704,23.383,16.853,24,16.931ZM14.482,20.818L20.936999999999998,15.880000000000003C19.438,14.991,19,14,19,12H2.941C2.422,12,2,12.422,2,12.941V13.537L11.518,20.818C12.336,21.459,13.664,21.459,14.482,20.818Z" stroke-width="0" transform="matrix(0.875,0,0,0.875,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="#42aaca" stroke="none" d="M24,14H22V4H24V14ZM30,12C26,12,28,10,24,10C24.688,8,24.75,6.125,24,4C28,4,26,6,30,6C30,8,30,10,30,12Z" stroke-width="0" transform="matrix(0.875,0,0,0.875,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu dropdown-messages pull-right">
                                <li class="dropdown-title">4 New Messages</li>
                                <li class="unread message">
                                    <a href="javascript:;" class="message"> <i class="pull-right" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mark as Read"><span class="pull-right ol " data-n="adjust" data-s="10" data-c="#287b0b" id="-2" style="width: 10px; height: 10px;"><svg height="10" version="1.1" width="10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="canvas-for--2" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#287b0b" stroke="none" d="M16,2C8.268,2,2,8.268,2,16S8.268,30,16,30S30,23.732,30,16S23.732,2,16,2ZM16,27C9.924,27,5,22.076,5,16S9.924,5,16,5C16,6.005,16,7.244,16,9C16,10.736,16,12.979,16,16C16,19.259,16,21.323,16,23C16,24.45,16,25.609,16,27Z" stroke-width="0" transform="matrix(0.3125,0,0,0.3125,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></span></i>
                                        <img src="http://joshadmin.com/assets/img/authors/avatar.jpg" class="img-responsive message-image" alt="icon">

                                        <div class="message-body">
                                            <strong>Riot Zeast</strong>
                                            <br>Hello, You there?
                                            <br>
                                            <small>8 minutes ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li class="unread message">
                                    <a href="javascript:;" class="message">
                                        <i class="pull-right" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mark as Read"><span class="pull-right ol " data-n="adjust" data-s="10" data-c="#287b0b" id="-3" style="width: 10px; height: 10px;"><svg height="10" version="1.1" width="10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="canvas-for--3" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#287b0b" stroke="none" d="M16,2C8.268,2,2,8.268,2,16S8.268,30,16,30S30,23.732,30,16S23.732,2,16,2ZM16,27C9.924,27,5,22.076,5,16S9.924,5,16,5C16,6.005,16,7.244,16,9C16,10.736,16,12.979,16,16C16,19.259,16,21.323,16,23C16,24.45,16,25.609,16,27Z" stroke-width="0" transform="matrix(0.3125,0,0,0.3125,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></span></i>
                                        <img src="http://joshadmin.com/assets/img/authors/avatar1.jpg" class="img-responsive message-image" alt="icon">

                                        <div class="message-body">
                                            <strong>John Kerry</strong>
                                            <br>Can we Meet ?
                                            <br>
                                            <small>45 minutes ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li class="unread message">
                                    <a href="javascript:;" class="message">
                                        <i class="pull-right" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mark as Read">
                                            <span class="pull-right ol " data-n="adjust" data-s="10" data-c="#287b0b" id="-4" style="width: 10px; height: 10px;"><svg height="10" version="1.1" width="10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="canvas-for--4" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#287b0b" stroke="none" d="M16,2C8.268,2,2,8.268,2,16S8.268,30,16,30S30,23.732,30,16S23.732,2,16,2ZM16,27C9.924,27,5,22.076,5,16S9.924,5,16,5C16,6.005,16,7.244,16,9C16,10.736,16,12.979,16,16C16,19.259,16,21.323,16,23C16,24.45,16,25.609,16,27Z" stroke-width="0" transform="matrix(0.3125,0,0,0.3125,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></span>
                                        </i>
                                        <img src="http://joshadmin.com/assets/img/authors/avatar5.jpg" class="img-responsive message-image" alt="icon">

                                        <div class="message-body">
                                            <strong>Jenny Kerry</strong>
                                            <br>Dont forgot to call...
                                            <br>
                                            <small>An hour ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li class="unread message">
                                    <a href="javascript:;" class="message">
                                        <i class="pull-right" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mark as Read">
                                            <span class="pull-right ol " data-n="adjust" data-s="10" data-c="#287b0b" id="-5" style="width: 10px; height: 10px;"><svg height="10" version="1.1" width="10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="canvas-for--5" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#287b0b" stroke="none" d="M16,2C8.268,2,2,8.268,2,16S8.268,30,16,30S30,23.732,30,16S23.732,2,16,2ZM16,27C9.924,27,5,22.076,5,16S9.924,5,16,5C16,6.005,16,7.244,16,9C16,10.736,16,12.979,16,16C16,19.259,16,21.323,16,23C16,24.45,16,25.609,16,27Z" stroke-width="0" transform="matrix(0.3125,0,0,0.3125,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></span>
                                        </i>
                                        <img src="http://joshadmin.com/assets/img/authors/avatar4.jpg" class="img-responsive message-image" alt="icon">

                                        <div class="message-body">
                                            <strong>Ronny</strong>
                                            <br>Hey! sup Dude?
                                            <br>
                                            <small>3 Hours ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li class="footer">
                                    <a href="#">View all</a>
                                </li>
                            </ul>
                        </li>                <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="" data-name="bell" data-loop="true" data-color="#e9573f" data-hovercolor="#e9573f" data-size="28" id="-6" style="width: 28px; height: 28px;"><svg height="28" version="1.1" width="28" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.890625px;" id="canvas-for--6"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#e9573f" stroke="none" d="M17.5,3C17.5,3.828,16.828,4.5,16,4.5C15.17,4.5,14.5,3.828,14.5,3S15.17,1.5,16,1.5C16.828,1.5,17.5,2.172,17.5,3Z" stroke-width="0" transform="matrix(0.875,0,0,0.875,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="#e9573f" stroke="none" d="M17,28.5C17,30.156,16.552,30.5,16,30.5S15,30.031,15,28.5C15,27,15.447,26.5,16,26.5S17,27,17,28.5Z" stroke-width="0" transform="matrix(0.875,0,0,0.875,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="#e9573f" stroke="none" d="M5.5,26C5.5,26,5.16,23.94,5.5,23C5.943,21.775,7.481,21.194,8,20C9.605,16.303,7.729,11.621,9.5,8C10.018,6.941,10.911,5.9510000000000005,12,5.5C14.464,4.479,17.536,4.479,20,5.5C21.089,5.951,21.982,6.941,22.5,8C24.271,11.621,22.395,16.303,24,20C24.518,21.194,26.057,21.775,26.5,23C26.84,23.94,26.5,26,26.5,26H5.5Z" stroke-width="0" transform="matrix(0.875,0,0,0.875,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                <span class="label label-warning">7</span>
                            </a>
                            <ul class=" notifications dropdown-menu">
                                <li class="dropdown-title">You have 7 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->

                                </li>
                                <li class="footer">
                                    <a href="#">View all</a>
                                </li>
                            </ul>
                        </li>                <li class="dropdown user user-menu">
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
                                    <p class="topprofiletext">buaya Abd Ur Rehman</p>
                                </li>
                                <!-- Menu Body -->
                                <li>
                                    <a href="http://joshadmin.com/admin/users/1">
                                        <i class="" data-name="user" data-s="18" id="-21" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="canvas-for--21" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#333333" stroke="none" d="M21.291,21.271C20.116,20.788,19.645,19.452,19.645,19.452S19.116,19.756,19.116,18.908C19.116,18.058,19.645,19.452,20.176,16.179000000000002C20.176,16.179000000000002,21.644,15.753000000000002,21.351999999999997,12.238000000000003H20.997999999999998C20.997999999999998,12.238000000000003,21.880999999999997,8.479000000000003,20.997999999999998,7.206000000000003C20.115999999999996,5.933000000000003,19.763999999999996,5.085000000000003,17.820999999999998,4.477000000000003C15.879999999999997,3.8700000000000028,16.587999999999997,3.991000000000003,15.174999999999997,4.053000000000003C13.762999999999998,4.1140000000000025,12.585999999999997,4.902000000000003,12.585999999999997,5.325000000000003C12.585999999999997,5.325000000000003,11.703999999999997,5.386000000000003,11.351999999999997,5.750000000000003C10.998999999999997,6.1140000000000025,10.410999999999996,7.810000000000002,10.410999999999996,8.235000000000003S10.805999999999996,11.509000000000004,11.099999999999996,12.116000000000003L10.648999999999996,12.237000000000004C10.354999999999995,15.752000000000004,11.824999999999996,16.178000000000004,11.824999999999996,16.178000000000004C12.353999999999996,19.450000000000003,12.883999999999995,18.057000000000006,12.883999999999995,18.907000000000004C12.883999999999995,19.755000000000003,12.353999999999996,19.451000000000004,12.353999999999996,19.451000000000004S11.883999999999995,20.787000000000003,10.707999999999995,21.270000000000003C9.530999999999995,21.755000000000003,3.002999999999995,24.361000000000004,2.471999999999994,24.906000000000002C1.942,25.455,2.002,28,2.002,28H29.997999999999998C29.997999999999998,28,30.058999999999997,25.455,29.526999999999997,24.906C28.996,24.361,22.468,21.756,21.291,21.271Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                        My Profile
                                    </a>
                                </li>
                                <li role="presentation"></li>
                                <li>
                                    <a href="http://joshadmin.com/admin/users/1/edit">
                                        <i class="" data-name="gears" data-s="18" id="-22" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="canvas-for--22" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#333333" stroke="none" d="M12,10.21C11.021,10.21,10.228,11.003,10.228,11.982000000000001C10.228,12.961,11.020999999999999,13.753,12,13.753C12.979,13.753,13.772,12.96,13.772,11.982C13.772,11.003,12.979,10.21,12,10.21ZM21.001,12.896V11.067L18.448,10.24C18.298000000000002,9.683,18.059,9.167,17.78,8.677L19.009,6.263L17.717,4.971L15.320999999999998,6.195C14.829999999999998,5.9110000000000005,14.299999999999997,5.687,13.740999999999998,5.533L12.912999999999998,2.982L11.083999999999998,2.982L10.250999999999998,5.553000000000001C9.698999999999998,5.703000000000001,9.176999999999998,5.925000000000001,8.689999999999998,6.2010000000000005L6.279999999999998,4.972L4.99,6.264L6.213,8.66C5.929,9.15,5.705,9.68,5.553,10.241L3.001,11.068V12.897L5.553,13.725C5.703,14.282,5.941,14.798,6.221,15.286999999999999L4.99,17.698L6.282,18.992L8.678,17.767C9.169,18.05,9.699000000000002,18.275,10.257000000000001,18.428L11.085,20.981H12.915000000000001L13.743,18.426000000000002C14.299,18.277,14.814,18.038,15.303,17.759L17.718,18.989L19.012,17.697L17.787,15.302999999999999C18.070999999999998,14.811,18.296,14.282,18.45,13.722L21.001,12.896ZM14.672,14.864C14.672,14.864,14.133000000000001,14.295000000000002,14.109,14.315000000000001C13.535,14.833000000000002,12.779,15.150000000000002,11.966000000000001,15.150000000000002C10.229000000000001,15.150000000000002,8.82,13.696000000000002,8.82,11.959000000000003C8.82,10.221000000000004,10.229000000000001,8.812000000000003,11.966000000000001,8.812000000000003C13.704,8.812000000000003,15.211000000000002,10.221000000000004,15.178,11.959000000000003C15.163,12.754000000000003,14.952,13.176000000000004,14.600000000000001,13.739000000000003C14.579,13.772000000000002,15.232000000000001,14.231000000000002,15.232000000000001,14.231000000000002L14.672,14.864Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="#333333" stroke="none" d="M23.161,20.885C22.557000000000002,20.808,22.004,21.231,21.925,21.837000000000003C21.846,22.438000000000002,22.273,22.993000000000002,22.877000000000002,23.070000000000004C23.480000000000004,23.149000000000004,24.033,22.722000000000005,24.111000000000004,22.121000000000002C24.19,21.515,23.765,20.964,23.161,20.885ZM27.052,21.007C26.948,20.579,26.776,20.177000000000003,26.551,19.809L27.296999999999997,17.699L26.031,16.732000000000003L24.204,17.994000000000003C23.995,17.931000000000004,23.779,17.885,23.556,17.855000000000004C23.333000000000002,17.826000000000004,23.113,17.816000000000003,22.896,17.823000000000004L21.452,16.135000000000005L19.981,16.745000000000005L20.161,18.977000000000004C19.849,19.275000000000002,19.580000000000002,19.620000000000005,19.371000000000002,20.005000000000003L17.175,20.414L16.968,21.993000000000002L18.987000000000002,22.950000000000003C19.091,23.378000000000004,19.263,23.78,19.488000000000003,24.149000000000004L18.742000000000004,26.256000000000004L20.008000000000003,27.224000000000004L21.836000000000002,25.962000000000003C22.045,26.024000000000004,22.261000000000003,26.070000000000004,22.483,26.100000000000005C22.702,26.128000000000004,22.917,26.124000000000006,23.13,26.120000000000005L24.587,27.824000000000005L26.057,27.211000000000006L25.878,24.973000000000006C26.188,24.678000000000004,26.45,24.333000000000006,26.661,23.954000000000008L28.866,23.543000000000006L29.07,21.963000000000008L27.052,21.007ZM24.981,22.219C24.829,23.248,24.061,24.089000000000002,22.743000000000002,23.929000000000002C21.67,23.8,20.919,22.783,21.058000000000003,21.708000000000002C21.198000000000004,20.636000000000003,22.181000000000004,19.883000000000003,23.252000000000002,20.021C24.325,20.161,25.141,21.15,24.981,22.219Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                        Account Settings
                                    </a>
                                </li>
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
                            <ul class="sidebar_threeicons">
                                <li>
                                    <a href="http://joshadmin.com/admin/form_builder">
                                        <i class="" data-name="hammer" title="Form Builder 1" data-loop="true" data-color="#42aaca" data-hc="#42aaca" data-s="25" id="-24" style="width: 25px; height: 25px;"><svg height="25" version="1.1" width="25" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;" id="canvas-for--24"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#42aaca" stroke="none" d="M23.336,7.409C22.535999999999998,7.409,22.203,7.0169999999999995,21.874,6.574L21.273999999999997,5.773C21.273999999999997,5.773,20.915,6.133,20.471999999999998,6.5729999999999995C20.029999999999998,7.015,19.634999999999998,7.406,19.034999999999997,7.404999999999999L11.534999999999997,7.395999999999999C8.234999999999996,7.3919999999999995,6.232999999999997,9.488999999999999,6.232999999999997,9.488999999999999C5.54,3.888,9.743,1.593,12.743,1.597L19.043,1.6039999999999999C19.643,1.6049999999999998,20.087,1.956,20.509999999999998,2.3899999999999997L21.278,3.175C21.278,3.175,21.546999999999997,2.8179999999999996,21.878999999999998,2.376C22.211,1.9349999999999998,22.444,1.609,23.244999999999997,1.609L25.842999999999996,1.6139999999999999L25.836999999999996,7.414C25.836,7.413,24.276,7.41,23.336,7.409ZM13.324,30.398L18.314,30.403L18.331,8.402999999999999L13.341,8.397999999999998L13.324,30.398Z" transform="matrix(0.5524,0.5524,-0.5524,0.5524,10.5469,-4.3965)" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="#42aaca" stroke="none" d="M25,16V18H24V27L23,30L22,27V18H21V16H25Z" transform="matrix(0.7813,0,0,0.7813,4.2969,0)" stroke-width="0" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path></svg></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://joshadmin.com/admin/form_builder2">
                                        <i class="" data-name="list-ul" title="Form Builder 2" data-loop="true" data-color="#e9573f" data-hc="#e9573f" data-s="25" id="-25" style="width: 25px; height: 25px;"><svg height="25" version="1.1" width="25" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;" id="canvas-for--25"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#e9573f" stroke="none" d="M27.4,10H12.6C12.269,10,12,9.731,12,9.4V6.6C12,6.269,12.269,6,12.6,6H27.4C27.731,6,28,6.269,28,6.6V9.399999999999999C28,9.731,27.731,10,27.4,10ZM27.4,14H12.6C12.267999999999999,14,12,14.269,12,14.6V17.4C12,17.730999999999998,12.269,18,12.6,18H27.4C27.730999999999998,18,28,17.731,28,17.4V14.599999999999998C28,14.269,27.731,14,27.4,14ZM27.4,22H12.6C12.267999999999999,22,12,22.269,12,22.6V25.4C12,25.730999999999998,12.269,26,12.6,26H27.4C27.730999999999998,26,28,25.731,28,25.4V22.6C28,22.269,27.731,22,27.4,22ZM7,5C5.343,5,4,6.343,4,8S5.343,11,7,11S10,9.657,10,8S8.657,5,7,5ZM7,13C5.344,13,4,14.343,4,16C4,17.656,5.344,19,7,19S10,17.656,10,16C10,14.343,8.656,13,7,13ZM7,21C5.344,21,4,22.344,4,24S5.344,27,7,27S10,25.656,10,24S8.656,21,7,21Z" stroke-width="0" transform="matrix(0.7813,0,0,0.7813,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://joshadmin.com/admin/buttonbuilder">
                                        <i class="" data-name="vector-square" title="Button Builder" data-loop="true" data-color="#f6bb42" data-hc="#f6bb42" data-s="25" id="-26" style="width: 25px; height: 25px;"><svg height="25" version="1.1" width="25" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;" id="canvas-for--26"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#f6bb42" stroke="none" d="M29,7V3H25V4H7V3H3V7H4V25H3V29H7V28H25V29H29V25H28V7H29ZM4,4H6V6H4V4ZM6,28H4V26H6V28ZM25,26H7V25H6V7H7V6H25V7H26V25H25V26ZM28,28H26V26H28V28ZM26,6V4H28V6H26Z" stroke-width="0" transform="matrix(0.7813,0,0,0.7813,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="#f6bb42" stroke="none" d="M12,6H6V12H4V6H-2V4H4V-2H6V4H12V6Z" transform="matrix(0.7813,0,0,0.7813,-6.25,-6.25)" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://joshadmin.com/admin/gridmanager">
                                        <i class="" data-name="new-window" title="Page Builder" data-loop="true" data-color="#37bc9b" data-hc="#37bc9b" data-s="25" id="-27" style="width: 25px; height: 25px;"><svg height="25" version="1.1" width="25" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;" id="canvas-for--27"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#37bc9b" stroke="none" d="M3.2,24C2.537,24,2,23.463,2,22.8V3.2C2,2.537,2.537,2,3.2,2H24.8C25.463,2,26,2.537,26,3.2V8H24V6H4V22H6V24H3.2Z" stroke-width="0" transform="matrix(0.7813,0,0,0.7813,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="#37bc9b" stroke="none" d="M6,9.2V28.8C6,29.463,6.537,30,7.2,30H28.8C29.463,30,30,29.463,30,28.8V9.2C30,8.537,29.463,8,28.8,8H7.2C6.537,8,6,8.537,6,9.2ZM28,28H8V12H28V28Z" transform="matrix(0.7813,0,0,0.7813,0,0)" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <!-- BEGIN SIDEBAR MENU -->
                        <ul id="menu" class="page-sidebar-menu">
                            <li>
                                <a href="http://joshadmin.com/admin">
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
                                        <a href="http://joshadmin.com/admin/masonry_gallery">
                                            <i class="fa fa-angle-double-right"></i>
                                           About us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://joshadmin.com/admin/imagecropping">
                                            <i class="fa fa-angle-double-right"></i>
                                            What we are
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
                                        <a href="http://joshadmin.com/admin/gallery">
                                            <i class="fa fa-angle-double-right"></i>
                                            Gallery
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://joshadmin.com/admin/masonry_gallery">
                                            <i class="fa fa-angle-double-right"></i>
                                            Masonry Gallery
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://joshadmin.com/admin/imagecropping">
                                            <i class="fa fa-angle-double-right"></i>
                                            Image Cropping
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://joshadmin.com/admin/imgmagnifier">
                                            <i class="fa fa-angle-double-right"></i>
                                            Image Magnifier
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




        <script type="text/javascript" src='{{asset('public//js/admin/app.js')}}'></script>
        <script type="text/javascript" src='{{asset('public//js/admin/bootstrap-tagsinput.js')}}'></script>
        <script type="text/javascript" src='{{asset('public//js/admin/summernote.min.js')}}'></script>

        <script type="text/javascript" src='{{asset('public//js/admin/add_newblog.js')}}'></script>

    </body>
</html>
