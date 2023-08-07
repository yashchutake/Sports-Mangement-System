@extends('layout.MainLayout',['parallax'=>true])
@section('current','Achievements')
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ asset('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/events.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/events_responsive.css') }}">
@endpush
@section('title','Achievements')
@section('content')
    {{-- <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/1-0.jpg"
        data-speed="0.8"></div> --}}
    {{-- <div class="home_content_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content d-flex flex-row align-items-end justify-content-start">
                        <div class="current_page">Achievements</div>
                        <div class="breadcrumbs ml-auto">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Achievements</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


         <!-- Events -->

         <div class="events">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <!-- Event -->
                    @forelse ($events as $data)
                        
                   
                        <div class="event">
                            <div class="row row-lg-eq-height">
                                <div class="col-lg-6 event_col">
                                    <div class="event_image_container">
                                        <div class="background_image" style="background-image:url({{url('events/'.$data->image)}})"></div>
                                        <div class="date_container">
                                            <a href="#">
                                                <span class="date_content d-flex flex-column align-items-center justify-content-center">
                                                    <div class="date_day">{{$data->date}}</div>
                                                    {{-- <div class="date_month">May</div> --}}
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 event_col">
                                    <div class="event_content">
                                        <div class="event_title">{{$data->event_name}} </div>
                                        <div class="event_location">{{$data->subtitle}}</div>
                                        <div class="event_text">
                                            <p>
                                                {{$data->description}}
                                            </p>
                                        </div>
                                        <div class="event_speakers">
                                            <!-- Event Speaker -->
                                            <div class="event_speaker d-flex flex-row align-items-center justify-content-start">
                                                <div>
                                                    <div class="event_speaker_image"><img src="images/dp.png" alt=""></div>
                                                </div>
                                                <div class="event_speaker_content">
                                                    <div class="event_speaker_name">{{$data->author}}</div>
                                                    <div class="event_speaker_title">Author</div>

                                                </div>
                                            </div>
                                            <!-- Event Speaker -->
                                            {{-- <div class="event_speaker d-flex flex-row align-items-center justify-content-start">
                                                <div>
                                                    <div class="event_speaker_image"><img src="images/event_speaker_2.jpg" alt=""></div>
                                                </div>
                                                <div class="event_speaker_content">
                                                    <div class="event_speaker_name">Ma'am Mamoona</div>
                                                    <div class="event_speaker_title">Co. SUpervisor </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <!-- <div class="event_buttons">
                                            <div class="button event_button event_button_1"><a href="db-content/database.php">View Results !</a></div>
                                            <div class="button_2 event_button event_button_2"><a href="download/inter%20departmental.pdf" download>Download</a></div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        
                        @endforelse
                        {{-- <!-- Event -->
                        <div class="event">
                            <div class="row row-lg-eq-height">
                                <div class="col-lg-6 event_col">
                                    <div class="event_image_container">
                                        <div class="background_image" style="background-image:url(images/event_12.jpg)"></div>
                                        <div class="date_container">
                                            <a href="#">
                                                <span class="date_content d-flex flex-column align-items-center justify-content-center">
                                                    <div class="date_day">15</div>
                                                    <div class="date_month">May</div>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 event_col">
                                    <div class="event_content">
                                        <div class="event_title">National Scale Tournament </div>
                                        <div class="event_location">@ Islamabad</div>
                                        <div class="event_text">
                                            <p>Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce nec ante vitae lacus aliquet vulputate. Donec scelerisque accu msan molestie. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                                        </div>
                                        <div class="event_speakers">
                                            <!-- Event Speaker -->
                                            <div class="event_speaker d-flex flex-row align-items-center justify-content-start">
                                                <div>
                                                    <div class="event_speaker_image"><img src="images/event_speaker_1.jpg" alt=""></div>
                                                </div>
                                                <div class="event_speaker_content">
                                                    <div class="event_speaker_name">Sir Arslan</div>
                                                    <div class="event_speaker_title">Supervisor</div>
                                                </div>
                                            </div>
                                            <!-- Event Speaker -->
                                            <div class="event_speaker d-flex flex-row align-items-center justify-content-start">
                                                <div>
                                                    <div class="event_speaker_image"><img src="images/event_speaker_2.jpg" alt=""></div>
                                                </div>
                                                <div class="event_speaker_content">
                                                    <div class="event_speaker_name">Ma'am Shafia</div>
                                                    <div class="event_speaker_title">Co. Supervisor </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="event_buttons">
                                            <div class="button event_button event_button_1"><a href="db-content/database2.php">View Results !</a></div>
                                            <div class="button_2 event_button event_button_2"><a href="download/Natioanal%20Scale.pdf" download>Download</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Event -->
                        <div class="event">
                            <div class="row row-lg-eq-height">
                                <div class="col-lg-6 event_col">
                                    <div class="event_image_container">
                                        <div class="background_image" style="background-image:url(images/event_14.jpg)"></div>
                                        <div class="date_container">
                                            <a href="#">
                                                <span class="date_content d-flex flex-column align-items-center justify-content-center">
                                                    <div class="date_day">15</div>
                                                    <div class="date_month">May</div>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 event_col">
                                    <div class="event_content">
                                        <div class="event_title">Women Empowerment</div>
                                        <div class="event_location">@ MGMU Auditorium</div>
                                        <div class="event_text">
                                            <p>Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce nec ante vitae lacus aliquet vulputate. Donec scelerisque accu msan molestie. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                                        </div>
                                        <div class="event_speakers">
                                            <!-- Event Speaker -->
                                            <div class="event_speaker d-flex flex-row align-items-center justify-content-start">
                                                <div>
                                                    <div class="event_speaker_image"><img src="images/event_speaker_1.jpg" alt=""></div>
                                                </div>
                                                <div class="event_speaker_content">
                                                    <div class="event_speaker_name">Sir Zubair</div>
                                                    <div class="event_speaker_title">Marketing Specialist</div>
                                                </div>
                                            </div>
                                            <!-- Event Speaker -->
                                            <div class="event_speaker d-flex flex-row align-items-center justify-content-start">
                                                <div>
                                                    <div class="event_speaker_image"><img src="images/event_speaker_2.jpg" alt=""></div>
                                                </div>
                                                <div class="event_speaker_content">
                                                    <div class="event_speaker_name">Ma'am Marriyam </div>
                                                    <div class="event_speaker_title">Marketing Specialist</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="event_buttons">
                                            <div class="button event_button event_button_1"><a href="#">View Results !</a></div>
                                            <div class="button_2 event_button event_button_2"><a href="#">Download</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="pagination">
                            <ul>
                                <li class="active"><a href="#">01.</a></li>
                                <li><a href="#">02.</a></li>
                                <li><a href="#">03.</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to action -->

        <div class="cta">
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/1-0.jpg" data-speed="0.8"></div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="cta_content text-center">
                            <div class="cta_title">Get your tickets now!</div>
                            <div class="button cta_button"><a href="#">Find out more</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection


@push('script')
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="js/events.js"></script>
@endpush
