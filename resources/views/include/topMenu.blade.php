 <div class="collapse navbar-collapse" id="collapse" >
                    <ul class="nav navbar-nav navbar-right">
                        <li class='{{$home_active}}'> <a href='{{route('home')}}'> Home</a>
                        </li>
                        <li class='{{$about_active}}'><a href='{{route('about_us')}}'> About Us</a>

                        </li>
                        <li class="dropdown "><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Membership</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="aboutus.html">Executive</a>
                                </li>
                                <li><a href="timeline.html">Regional Executive</a></li>

                                <li><a href="timeline.html">Members</a></li>

                            </ul>
                        </li>
                        <li class="dropdown "><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Media</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href='{{route('blogs')}}'>Blog</a>
                                </li>
                                <li><a href="single_product.html">Gallery</a>
                                </li>
                                <li><a href="compareproducts.html">Compare Products</a>
                                </li>
                                <li><a href="category.html">Categories</a></li>
                            </ul>
                        </li>

                        <li class="dropdown "><a href="#" class="dropdown-toggle" data-toggle="dropdown"> News &AMP; Events</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="news.html">News</a>
                                </li>
                                <li><a href="news_item.html">News Item</a>
                                </li>
                            </ul>
                        </li>
                        <li ><a href="blog.html"> Ghana/Korea Experience</a>
                        </li>

                         <li class='{{$contact_active}}'><a href='{{route('contact_us')}}'>Contact</a>
                        </li>
                        @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->first_name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="#">
                                        Profile
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endif

                    </ul>
                </div>