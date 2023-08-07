@extends('layout.MainLayout',['parallax'=>true])
@section('current','Contact Us')
@push('css')
    
    <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/contact.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/contact_responsive.css')}}">

@endpush
    
@section('title','Contact')
@section('content')

        <!-- Contact -->

        <div class="contact">
            <div class="contact_map_background">

                <!-- Contact Map -->
                <div class="contact_map">

                    <!-- Google Map -->
                    <div class="map">
                        <div id="google_map" class="google_map">
                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.8928863352553!2d68.25835531448868!3d25.408395829335806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c795e86cdf11b%3A0xef1bd0f6ec31ced3!2sMehran%20University%20of%20Engineering%20and%20Technology%20MUET!5e0!3m2!1sen!2s!4v1580200414538!5m2!1sen!2s" width="1920" height="1080" frameborder="0" style="border:0;" allowfullscreen=""></iframe> -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15008.227098071633!2d75.34782226756916!3d19.879824415193134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdba296c53600ab%3A0xf93e15739fc74b8a!2sM%20G%20M%2C%20Aurangabad%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1670357754218!5m2!1sen!2sin" width="1920" height="1080" frameborder="0" style="border:0;" allowfullscreen="" ></iframe>
                            <div class="map_container">

                                <!--<div id="map"> </div>-->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact_form_container">
                            <div class="contact_form_title">Ask Any Question</div>
                            <!-- <form action="#" class="contact_form" id="contact_form"> -->
                            <form action="https://formsubmit.co/yashchutake07@gmail.com"  method="POST" class="contact_form" id="contact_form" class="yash">
                                <input type="text" class="contact_input" name="name" required  placeholder="Name">
                                <input type="email" class="contact_input" name="email" required placeholder="E-mail">
                                <textarea name="contact_textarea" id="contact_textarea" class="contact_textarea contact_input" placeholder="Message" required="required"></textarea>
                                <button class="button contact_button"><span>Submit</span></button> 
                             
                                <!-- <input type="text" class="contact_input" placeholder="Name" required="required">
                                <input type="email" class="contact_input" placeholder="E-mail" required="required">
                                <input type="text" class="contact_input" placeholder="Subject" required="required">
                                <textarea name="contact_textarea" id="contact_textarea" class="contact_textarea contact_input" placeholder="Message" required="required"></textarea>
                                <button class="button contact_button"><span>Submit</span></button> -->
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="contact_info_container">
                            <div>
                                <a href="#">
                                    <div class="logo_container d-flex flex-row align-items-start justify-content-start">
                                        <div class="logo_image">
                                            <div><img src="images/muet_logo.png" alt=""></div>
                                        </div>
                                        <div class="logo_content">
                                            <div id="logo_text" class="logo_text logo_text_not_ie">Sports Events Management</div>
                                            <div class="logo_sub">University Of Engineering And Technology</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="contact_info_list_container">
                                <ul class="contact_info_list">
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div class="contact_info_icon text-center"><img src="images/contact_1.png" alt=""></div>
                                        </div>
                                        <div class="contact_info_text">N-6, CIDCO, Aurangabad, Maharashtra </div>
                                    </li>
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div class="contact_info_icon text-center"><img src="images/contact_2.png" alt=""></div>
                                        </div>
                                        <div class="contact_info_text">+91 9876543210</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div class="contact_info_icon text-center"><img src="images/contact_3.png" alt=""></div>
                                        </div>
                                        <div class="contact_info_text">www.sportseventmangement.org</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact_info_pin">
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

  
   


    @push('script')
    <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('assets/styles/bootstrap4/popper.js')}}"></script>
    <script src="{{asset('assets/styles/bootstrap4/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
    <script src="{{asset('assets/plugins/easing/easing.js')}}"></script>
    <script src="{{asset('assets/plugins/parallax-js-master/parallax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script src="{{asset('assets/js/contact.js')}}"></script>
    @endpush
