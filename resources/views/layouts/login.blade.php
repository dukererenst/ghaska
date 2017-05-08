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
        <link rel="stylesheet" type="text/css" href='{{asset('public/css/register/bootstrap.min.css')}}'/>

        <link rel="stylesheet" type="text/css" href='{{asset('public/css/register/all.css')}}'/>
        <link rel="stylesheet" type="text/css" href='{{asset('public/css/register/login.css')}}'/>
    </head>
    <body>


        @yield('content')

       

        <script type="text/javascript" src='{{asset('public/js/register/jquery.min.js')}}'></script>
        <script type="text/javascript" src='{{asset('public/js/register/bootstrap.min.js')}}'></script>
        <script type="text/javascript" src='{{asset('public/js/register/icheck.js')}}'></script>
         <script>
            $(document).ready(function(){
            $("input[type='checkbox'],input[type='radio']").iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
                    radioClass: 'iradio_minimal-blue'
            });
            });
        </script>

    </body>
</html>
