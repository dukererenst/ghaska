@extends('layouts.frontend_home')

@section('content')


<div id="owl-demo" class="owl-carousel owl-theme">
    <div class="item"><img src='{{asset('public/img/kn.jpg')}}' alt="slider-image"/></div>
    <div class="item"><img src='{{asset('public/img/banner2.jpg')}}' alt="slider-image"/></div>
    <div class="item"><img src='{{asset('public/img/banner1.jpg')}}' alt="slider-image"/></div>
</div>

<div class="container">
    <div class="row">
        <!-- Responsive Section Start -->
        <div class="text-center">
            <h3 class="border-primary"><span class="heading_border bg-primary">Our Activities</span></h3>
        </div>
        <div class="col-sm-6 col-md-3 wow bounceInLeft" data-wow-duration="3.5s">
            <div class="box">
                <div class="box-icon">
                    <i class="livicon icon" data-name="paper-plane" data-size="55" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                </div>
                <div class="info">
                    <h3 class="success text-center">Conferences</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!</p>
                    <div class="text-right primary"><a href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Responsive Section End -->
        <!-- Easy to Use Section Start -->
        <div class="col-sm-6 col-md-3 wow bounceInDown" data-wow-duration="3s" data-wow-delay="0.4s">
            <!-- Box Start -->
            <div class="box">
                <div class="box-icon box-icon1">
                    <i class="livicon icon1" data-name="pen" data-size="55" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                </div>
                <div class="info">
                    <h3 class="primary text-center">Meetings</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!.</p>
                    <div class="text-right primary"><a href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Easy to Use Section End -->
        <!-- Clean Design Section Start -->
        <div class="col-sm-6 col-md-3 wow bounceInUp" data-wow-duration="3s" data-wow-delay="0.8s">
            <div class="box">
                <div class="box-icon box-icon2">
                    <i class="livicon icon1" data-name="doc-portrait" data-size="55" data-loop="true" data-c="#f89a14" data-hc="#f89a14"></i>
                </div>
                <div class="info">
                    <h3 class="warning text-center">Seminars</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!</p>
                    <div class="text-right primary"><a href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Clean Design Section End -->
        <!-- 20+ Page Section Start -->
        <div class="col-sm-6 col-md-3 wow bounceInRight" data-wow-duration="5s" data-wow-delay="1.2s">
            <div class="box">
                <div class="box-icon box-icon3">
                    <i class="livicon icon1" data-name="touch" data-size="55" data-loop="true" data-c="#FFD43C" data-hc="#FFD43C"></i>
                </div>
                <div class="info">
                    <h3 class="yellow text-center">Volunteering</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!</p>
                    <div class="text-right primary"><a href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- //20+ Page Section End -->
    </div>
</div>
<div class="container">

    <div class="row">
        <!-- What we are Start -->
        <div class="col-md-6 col-sm-6 wow zoomInLeft" data-wow-duration="3s">
            <div class="text-left">
                <div>
                    <h4 class="border-warning"><span class="heading_border bg-warning">What We Are</span></h4>
                </div>
            </div>
            <img src="assets/images/image_12.jpg" alt="image_12" class="img-responsive">
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <p>
            <div class="text-right primary"><a href="#">Read more</a></div>
            </p>
        </div>
        <!-- //What we are End -->
        <!-- About Us Start -->
        <div class="col-md-6 col-sm-6 wow zoomInRight" data-wow-duration="3s">
            <div class="text-left">
                <div>
                    <h4 class="border-success"><span class="heading_border bg-success">About Us</span></h4>
                </div>
            </div>
            <img src="assets/images/image_11.jpg" alt="image_11" class="img-responsive">
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <p>
            <div class="text-right primary"><a href="#">Read more</a>
            </div>
            </p>
        </div>
        <!-- //About Us End -->
    </div>
</div>

<div class="container">
    <div class="row features">
        <div class="text-center">
            <div class="text-center">
                <h3 class=" border-warning"><span class="heading_border bg-warning">Latest Blog</span></h3>
            </div>
        </div>
        @foreach($blogs as $blog)
        <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-duration="3s">
            <div>
                <a href="#"><i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#25a3d8" data-hc="#25a3d8"></i></a>
                <h4><bold>{{$blog->blog_title}}</bold></h4>
            </div>
            <div>
                <p>
                    <label>
                      {{ mb_substr(strip_tags(html_entity_decode($blog->blog_content)), '0','300')}}
                    </label>
                <div class="text-right primary"><a href="#">Read more</a></div>
                </p>

            </div>

        </div>
        @endforeach

    </div>
</div>
<div class="copyright">
    <div class="container">
        <p>Copyright &copy; Josh Admin Template, 2015</p>
    </div>
</div>
@endsection
