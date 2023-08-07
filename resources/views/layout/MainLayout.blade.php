<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Conference project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('css')
</head>

<body>

    <div class="super_container">

        

        <div class="menu trans_500">
            <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
                <div class="menu_close_container">
                    <div class="menu_close"></div>
                </div>
                <div class="logo menu_logo">
                    <a href="#">
                        <div class="logo_container d-flex flex-row align-items-start justify-content-start">
                            <div class="logo_image">
                                <div><img src="images/muet_logo.png" alt=""></div>
                            </div>
                            <div class="logo_content">
                                <div class="logo_text logo_text_not_ie">Sports Events Management</div>
                                <div class="logo_sub">University Of Engineering And Technology</div>
                            </div>
                        </div>
                    </a>
                </div>
                <ul>
                    <li class="menu_item"><a href="index.html">Home</a></li>
                    <li class="menu_item"><a href="facilities.html">Facilities</a></li>
                    <li class="menu_item"><a href="contactus.html">Contact Us </a></li>
                    <li class="menu_item"><a href="Achievements.php">Achievements</a></li>
                </ul>
            </div>
            <div class="menu_social">
                <div class="menu_social_title">Follow uf on Social Media</div>
                <ul>
                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>

        <!-- Home -->

        <div class="home">
        @if ($parallax)
            
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/1-0.jpg" data-speed="0.8"></div>
        @endif
            <!-- Header -->

            <header class="header" id="header">
                <div>
                    <div class="header_top">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="header_top_content d-flex flex-row align-items-center justify-content-start">
                                        <div>
                                            <a href="#">
                                                <div class="logo_container d-flex flex-row align-items-start justify-content-start">
                                                    <div class="logo_image">
                                                        <div><img src="images/muet_logo.png" alt=""></div>
                                                    </div>
                                                    <div class="logo_content">
                                                        <div class="logo_text logo_text_not_ie">Sports Events Management</div>
                                                        <div class="logo_sub">University Of Engineering And Technology</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="header_social ml-auto">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header_nav" id="header_nav_pin">
                        <div class="header_nav_inner">
                            <div class="header_nav_container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
                                                <nav class="main_nav">
                                                    <ul>
                                                        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{route('home')}}">Home</a></li>
                                                        <li class="{{ Request::is('facilities') ? 'active' : '' }}"><a href="{{route('facilities')}}">Facilities</a></li>
                                                        <li class="{{ Request::is('achievements') ? 'active' : '' }}"><a href="{{route('achievements')}}">Achievements</a></li>
                                                        <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{route('contact')}}">Contact Us</a></li>
                                                        <li class="{{ Request::is('gallery') ? 'active' : '' }}"><a href="{{route('gallery')}}">Gallery</a></li>

                                            
                                                    </ul>
                                                </nav>
                                                <div class="header_extra ml-auto">
                                                    <a class="TA-login" href="/login">Teachers/Admin Login </a>
                                                    <a class="TA-login" href="/register">Register </a>
                                                   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="search_container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="search_content d-flex flex-row align-items-center justify-content-end">
                                                <form action="#" id="search_container_form" class="search_container_form">
                                                    <input type="text" class="search_container_input" placeholder="Search" required="required">
                                                    <button class="search_container_button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </header>

            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content d-flex flex-row align-items-end justify-content-start">
                                <div class="current_page">@yield('current')</div>
                                <div class="breadcrumbs ml-auto">
                                    <ul>
                                        <li>@yield('current')</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- content goes here --}}
        @yield('content')

        <!-- Footer -->

        <footer class="footer">
            <div class="footer_content">
                <div class="container">
                    <div class="row">

                        <!-- Footer Column -->
                        <div class="col-lg-8 footer_col">
                            <div class="footer_about">
                                <div>
                                    <a href="#">
                                        <div
                                            class="logo_container d-flex flex-row align-items-start justify-content-start">
                                            <div class="logo_image">
                                                <div><img src="images/muet_logo.png" alt=""></div>
                                            </div>
                                            <div class="logo_content">
                                                <div id="logo_text" class="logo_text logo_text_not_ie">Sports Events
                                                    Management</div>
                                                <div class="logo_sub"> All Tournament , Competition , Events At One
                                                    Place</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="footer_about_text">
                                    <p>The Sport Platform, puts Great Olympic athletes at the heart of its proposition,
                                        with a greater depth of content, info and data, and a rich new platform...</p>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class="col-lg-4 footer_col">
                            <div class="footer_links">
                                <ul>





                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                                    <li><a href="{{route('facilities')}}">Facitlities </a></li>
                                    <li><a href="{{route('gallery')}}">Gallery</a></li>


                                </ul>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <div class="footer_extra">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div
                                class="footer_extra_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-start justify-content-center">
                                <div class="footer_social">
                                    <div class="footer_social_title">Follow us on Social Media</div>
                                    <ul class="footer_social_list">
                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer_extra_right ml-lg-auto text-lg-right">
                                    <div class="footer_extra_links">
                                        <ul>
                                            <li><a href="contact.html">Contact us</a></li>
                                            <li><a href="#">Sitemap</a></li>
                                            <li><a href="#">Privacy</a></li>
                                        </ul>
                                    </div>
                                    <div class="copyright">
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script> All rights reserved | This is made with <i
                                            class="fa fa-heart-o" aria-hidden="true"></i> <a href=""
                                            target="_blank">BTECH2 BOYS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

   @stack('script')
</body>

</html>
