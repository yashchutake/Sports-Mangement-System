@extends('layout.MainLayout',['parallax'=>true])
@section('current','Gallery')

@push('css')
    


    <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/contact.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/contact_responsive.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
@endpush

@section('title','Gallery')
@section('content')
<style>
    .portfolio-item .item {
    /* width: 303px; */
    float: left;
    margin-bottom: 10px;
    }
</style>


   
    <style>
        .fancylight img {
            height: 200px;
            width: 100%;
            object-fit: cover;
            object-position: center;
            border-radius: 5px;
        }
    </style>

    <!-- photo gallery starts -->
        <div class="container mt-4 mb-4">
        <div class="text-center">
                <h3><b>Sports Gallery</b></h3> <br>
            </div>

        <!-- <div class="portfolio-menu mt-2 mb-4">
                                    <ul>
                                        <li class="btn btn-outline-dark active" data-filter="*">All</li>
                                        <li class="btn btn-outline-dark" data-filter=".gts">Girls T-shirt</li>
                                        <li class="btn btn-outline-dark" data-filter=".lap">Laptops</li>
                                        <li class="btn btn-outline-dark text" data-filter=".selfie">selfie</li>
                                    </ul>
                                </div> -->


 
        <div class="portfolio-item row">
            @forelse ($imageData as $image)
            
           
                
            
         
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="{{ url('album/'.$image->image) }}" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="{{ url('album/'.$image->image) }}" alt="">
                    </a>
                </div>
              
                @empty
                
         @endforelse


        </div>

        </div>
        
        
                            {{-- <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/F3MKOcZ3HJEwYd30dHMpcTCQVU2UNNpGf0Y5VQgu.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/F3MKOcZ3HJEwYd30dHMpcTCQVU2UNNpGf0Y5VQgu.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/4EgbjX8YLWDDPsEM7fVk949rcrSnn49T5G6jkdyf.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/4EgbjX8YLWDDPsEM7fVk949rcrSnn49T5G6jkdyf.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/o41eNDkGPnrViYl41gt20cbeE7AnmeMynvJScdtR.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/o41eNDkGPnrViYl41gt20cbeE7AnmeMynvJScdtR.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/1g69jWDLiHNjCLKPRfbsYZL4m6msQFLQk14jeb9g.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/1g69jWDLiHNjCLKPRfbsYZL4m6msQFLQk14jeb9g.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/oo3x9QUufdcYf0zJDA39Ltecn0XCgpN2JGbBrTb7.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/oo3x9QUufdcYf0zJDA39Ltecn0XCgpN2JGbBrTb7.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/lkZdnyU1In4zVHY0KEgHwS4g0TUfCmHWdRC69oEB.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/lkZdnyU1In4zVHY0KEgHwS4g0TUfCmHWdRC69oEB.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/bgWqttZohkUCJfcm01DFd40Oob3qNyDRFO0XJeMx.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/bgWqttZohkUCJfcm01DFd40Oob3qNyDRFO0XJeMx.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/j3EoMTBzHXVhHfPh6w9rsZ0mZ201tVz4B021pvQL.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/j3EoMTBzHXVhHfPh6w9rsZ0mZ201tVz4B021pvQL.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/qRlg83KkssSM836HDdZ5rrtdPOaFb5zxAvdnl4Ze.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/qRlg83KkssSM836HDdZ5rrtdPOaFb5zxAvdnl4Ze.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/N4HTXpGh0CUs46Lxu5Z0Rpi5afsReSWP2xVc9yRd.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/N4HTXpGh0CUs46Lxu5Z0Rpi5afsReSWP2xVc9yRd.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/weHufJNdz2DYGzUrnW4KTzctoSGOpgkIkutzEKDs.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/weHufJNdz2DYGzUrnW4KTzctoSGOpgkIkutzEKDs.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/3VGPCTEg7lHu5FzlUEfAxM1CduncwTTChhmuKJyO.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/3VGPCTEg7lHu5FzlUEfAxM1CduncwTTChhmuKJyO.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/1f9x2RLeIFVnQcQm6n0Ik33DWgTmupqtuAplntMr.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/1f9x2RLeIFVnQcQm6n0Ik33DWgTmupqtuAplntMr.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/Sf6sRzqHa5XSLuIYWam3MY8CGkdVJtM7jqD5Shmg.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/Sf6sRzqHa5XSLuIYWam3MY8CGkdVJtM7jqD5Shmg.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/NWD9Gpjdfh2lJUavFMebmgmXldaflEk9i6oGO765.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/NWD9Gpjdfh2lJUavFMebmgmXldaflEk9i6oGO765.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/4E884fdkM42IwxfIgzTc5YPQire3YMOfgoRZDR2l.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/4E884fdkM42IwxfIgzTc5YPQire3YMOfgoRZDR2l.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/QE1pLTeesLdye2dAnRzYyclUovBsvJfeGEf3COJ2.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/QE1pLTeesLdye2dAnRzYyclUovBsvJfeGEf3COJ2.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/3IOf11sHggWl5NQvcjsiSGxrFPNUHWCMY20NosVP.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/3IOf11sHggWl5NQvcjsiSGxrFPNUHWCMY20NosVP.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/rcdWNSPShYnhnmug2QPydTHC31iw1GSWrxsXhBdl.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/rcdWNSPShYnhnmug2QPydTHC31iw1GSWrxsXhBdl.jpg" alt="">
                    </a>
                </div> 
                    </div>--}}
    
    <!-- photo gallery ends -->

    <script>
        $(document).ready(function() {
            var popup_btn = $('.popup-btn');
            popup_btn.magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    </script>





  
    

@endsection


@push('script')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://alumni.jnec.org//assets/js/main.js"></script>
    <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('assets/styles/bootstrap4/popper.js')}}"></script>
    <script src="{{asset('assets/styles/bootstrap4/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
    <script src="{{asset('assets/plugins/easing/easing.js')}}"></script>
    <script src="{{asset('assets/plugins/parallax-js-master/parallax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script src="{{asset('assets/js/contact.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>


@endpush