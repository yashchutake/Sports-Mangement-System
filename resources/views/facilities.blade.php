@extends('layout.MainLayout',['parallax'=>true])
@section('current','Facilities')
@push('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/elements.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/elements_responsive.css')}}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d3eca41609.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/fa-hack.js')}}"> </script>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/facilities.css')}}"> </head> <body>

@endpush
    
@section('title','Facilities')

@section('content')  
        

        <!-- Elements -->

        <div class="elements">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <!-- Buttons -->

                        <!--                        <h1 style="border-bottom: 1px solid #0b0b0b;border-radius: 4px; ">Sports <i class="fal fa-running"></i> </h1>-->
                        <div class="elements_title " style=" margin-bottom: 50px">Facilities <i class="fal fa-running"></i></div>

                        <div class="facilities">
                            <ul>
                                <li><i class="fal fa-basketball-hoop"></i> Basketball </li>
                                <li><i class="fal fa-table-tennis"></i> Table Tennis</li>
                                <li><i class="fal fa-shuttlecock"></i> Badminton</li>
                                <li><i class="fal fa-volleyball-ball"></i> Volleyball</li>
                                <li><i class="fal fa-baseball-ball"></i> Handball</li>
                                <li><i class="fal fa-chess-rook-alt"></i> Chess</li>
                                <li><i class="far fa-boxing-glove"></i> Boxing</li>
                                <li><i class="far fa-cricket"></i> Cricket ground</li>
                                <li><i class="fal fa-dumbbell"></i> Fitness centre</li>

                            </ul>
                        </div>
                        <!-- Accordions & Tabs -->

                        <div class="elements_accordions_tabs">
                            <div class="elements_title" style="margin-bottom: 50px">GYM Time Table</div>
                            <div class="row">
                                <div class="time-table" style="margin-left: 100px">
                                    <h6>(for gym and fitness Centre)</h6>
                                    <div class="time_table" style="overflow-x:auto; ">
                                        <table border="1" cellpadding="1" cellspacing="1">
                                            <tr>
                                                <th>Schedule <i class="fad fa-calendar-alt"></i></th>
                                                <th>Timing <i class="fad fa-watch"></i> </th>
                                                <th>Restrictions <i class="fad fa-restroom"></i> </th>
                                            </tr>
                                            <tr>
                                                <td>Morning</td>
                                                <td>6:30 am to 2:30 pm </td>
                                                <td>daily for all</td>

                                            </tr>
                                            <tr>
                                                <td>Evening </td>
                                                <td>4:00 pm to 7:15 pm </td>
                                                <td>for Boys &amp; Girls </td>

                                            </tr>
                                            <tr>
                                                <td>Night</td>
                                                <td>7:15 pm to 8:30 pm </td>
                                                <td>for Faculty , Staff and Family.</td>
                                            </tr>
                                            <tr>
                                                <td>Fri-sat-sun </td>
                                                <td>4:00 pm to 5:15 pm <br> 5:20 pm to 7:15 pm <br>7:15 pm to 8:30 pm </td>
                                                <td>for Boys <br>for Girls <br>for Faculty/Officers/Family </td>
                                            </tr>
                                        </table>

                                        <table border="1" cellpadding="1" cellspacing="1">

                                        </table>



                                    </div>
                                </div>

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
    <script src="{{asset('assets/plugins/greensock/TweenMax.min.js')}}"></script>
    <script src="{{asset('assets/plugins/greensock/TimelineMax.min.js')}}"></script>
    <script src="{{asset('assets/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
    <script src="{{asset('assets/plugins/greensock/animation.gsap.min.js')}}"></script>
    <script src="{{asset('assets/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
    <script src="{{asset('assets/plugins/progressbar/progressbar.min.js')}}"></script>
    <script src="{{asset('assets/plugins/easing/easing.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-circle-progress-1.2.2/circle-progress.js')}}"></script>
    <script src="{{asset('assets/plugins/parallax-js-master/parallax.min.js')}}"></script>
    <script src="{{asset('assets/js/elements.js')}}"></script>

    @endpush