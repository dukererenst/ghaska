<link rel="stylesheet" type="text/css" href='{{asset('public/css/frontend/contact.css')}}'/>
@extends('layouts.frontend')
@section('title')
Contact Us
@endsection
@section('content')

<div class="container margin-top-10">
    <div class="row">
        <!-- Contact form Section Start -->
        <div class="col-md-6">
            <h2>Contact Form</h2>
            <!-- Notifications -->

            <form class="contact" id="contact" action="#" method="POST">
                <input type="hidden" name="_token" value="s6tYXxxJVHCm29jAS0tucjNVtXHe69bwavCETn3B" />
                <div class="form-group">
                    <input type="text" name="contact-name" class="form-control input-lg" placeholder="Your name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="contact-email" class="form-control input-lg" placeholder="Your email address" required>
                </div>
                <div class="form-group">
                    <textarea name="contact-msg" class="form-control input-lg no-resize" rows="6" placeholder="Your comment" required></textarea>
                </div>
                <div class="input-group">
                    <button class="btn btn-primary" type="submit">submit</button>
                    <button class="btn btn-danger" type="reset">cancel</button>
                </div>
            </form>
        </div>
        <!-- //Conatc Form Section End -->
        <!-- Address Section Start -->
        <div class="col-md-6 col-sm-6" >
            <div class="media media-right">
                <div class="media-left media-top">
                    <a href="#">
                        <div class="box-icon">
                            <i class="livicon" data-name="home" data-size="22" data-loop="true" data-c="#fff" data-hc="#fff"></i>
                        </div>
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Address:</h4>
                    
                    <address>
                         No. 120. Dokseodang-ro,
                        <br>Yonsang-gu Seoul,140-210.C. 
                        <br> P.O Box 3887, Seoul, 
                        <br> Korea
                    </address>
                </div>
            </div>
            <div class="media padleft10">
                <div class="media-left media-top">
                    <a href="#">
                        <div class="box-icon">
                            <i class="livicon" data-name="phone" data-size="22" data-loop="true" data-c="#fff" data-hc="#fff"></i>
                        </div>
                    </a>
                </div>
                <div class="media-body padbtm2">
                    <h4 class="media-heading">Telephone:</h4> +82 10-5853-6493
                    
                </div>
            </div>
            <div class="media padleft10">
                <div class="media-left media-top">
                    <a href="#">
                        
                           <i class="fa fa-whatsapp fa-3x" aria-hidden="false"></i>
                       
                    </a>
                </div>
                <div class="media-body padbtm2">
                    <h4 class="media-heading">Whatsup:</h4> +82 10-5924-5052
                    
                </div>
            </div>
           
        </div>
        <!-- //Address Section End -->
    </div>
</div>

@endsection