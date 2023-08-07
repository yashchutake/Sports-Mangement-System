<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('assets/images/icons/favicon-32x32.png')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
    <!--===============================================================================================-->

    
</head>

<body>
@php
     $data=App\Models\Tournaments::where('id',$id)->get();
@endphp
@forelse ($data as $item)
    

<div class="container-contact100" >
        <div class="contact100-map" id="google_map" data-map-x="25.407384" data-map-y="68.261887"
            data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

        <div class="wrap-contact100">
            <div class="contact100-form-title" style="background-image: url(images/speakers.jpg);">
                <span class="contact100-form-title-1">
                    Register Your Team Now
                </span>

                <span class="contact100-form-title-2">
                    {{$item->sport_name}}
                </span>
            </div>

            <form class="contact100-form validate-form" action="{{route('addteam')}}" method="post" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="tournament" value="{{$item->id}}">
                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">Captain Full Name:</span>
                    <input class="input100" type="text" name="captain_name" placeholder="Enter full name" id="lastName">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="PRN is required">
                    <span class="label-input100">Captain PRN No: </span>
                    <input class="input100" type="number" name="prn" id="rollno" placeholder="EXAMPLE :: 1921321242087">

                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="email is required">
                    <span class="label-input100">Captain Email</span>
                    <input class="input100" type="email" name="email" id="email" placeholder="Example@gmail.com">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Phone is required">
                    <span class="label-input100">Captain Mobile No</span>
                    <input class="input100" type="number" name="mobile" id="mobno" placeholder="EXAMPLE ::+91 1234567890">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Phone is required" >
                    <!-- <label for="cars">Choose a sport</label> -->
                    <br>
                    
                    <span class="label-input100" >Choose Sport</span>
                    <select class="select-css" id="Sport" name="sport" value="{{$item->sport_name}}" class="sports" >
                        <option value="{{$item->sport_name}}">{{$item->sport_name}}</option>
                 
                        

                    </select>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Phone is required">
                    <!-- <label for="Depart">Choose Your Department</label> -->
                    <br>
                    <span class="label-input100">Choose Department</span>
                    <select class="select-css" id="depart" name="department" style="">
                        <option value="" disabled selected>Select Department</option>
                        <option value="cse">CSE</option>
                        <option value="it">IT</option>
                        <option value="entc">ENTC</option>
                        <option value="civil">CIVIL</option>
                        <option value="mech">MECH</option>
                        <option value="chemical">CHEM</option>


                    </select>
                </div>

                <br><br>
                <div class="wrap-input100 validate-input" data-validate="Phone is required">
                    <!-- <label for="year">Year  </label> -->
                    <br>
                    <span class="label-input100">Choose Year</span>
                    
                    <select class="select-css" id="year" name="year" style="">
                        <option value="" disabled selected >Select Year</option>
                        <option value="1st">1st</option>
                        <option value="2nd">2nd</option>
                        <option value="3rd">3rd</option>
                        <option value="4th">4th (Final)</option>
                    </select>
                </div>

                
                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">Team Name:</span>
                    <input class="input100" type="text" name="team_name" placeholder="Name Of Team" id="lastName">
                   
                </div>
            
                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Team member name:</span>

                    <input class="input100" type="text" name="name1" placeholder="Player 1 name Or NA" id="lastName">
                    
                    <span></span>
                    <input class="input100" type="text" name="name2" placeholder="Player 2 name Or NA" id="lastName">
                                
                
                    <input class="input100" type="text" name="name3" placeholder="Player 3 name Or NA" id="lastName">
                
                
                    <input class="input100" type="text" name="name4" placeholder="Player 4 name Or NA" id="lastName">
                
                
                    <input class="input100" type="text" name="name5" placeholder="Player 5 name Or NA" id="lastName">
                
                
                    <input class="input100" type="text" name="name6" placeholder="Player 6 name Or NA" id="lastName">
                
                
                    <input class="input100" type="text" name="name7" placeholder="Player 7 name Or NA" id="lastName">
                
                
                    <input class="input100" type="text" name="name8" placeholder="Player 8 name Or NA" id="lastName">
                
                
                    <input class="input100" type="text" name="name9" placeholder="Player 9 name Or NA" id="lastName">
                                
                    <input class="input100" type="text" name="name10" placeholder="Player 10 name Or NA" id="lastName">

                    <input class="input100" type="text" name="name11" placeholder="Player 11 name Or NA" id="lastName">
                   
                </div>

                
                
                
                
                {{-- <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">Information About Member:</span>
                    
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
               
                    <div class="container1" data-validate="Name is required">
                        <button class="add_form_field">Add Member &nbsp;
                            <span style="font-size:16px; font-weight:bold;">+ </span>
                        </button>
                        <div style="color: #000000;">
                            <!-- <input type="text" name="mytext[]"> -->
                            <span class="label-input100" ></span>
                            <input class="input100" type="text" name="mytext[]" placeholder="Name Of Member" id="lastName" >
                            <span class="focus-input100"></span>
                        
                        </div>
                    </div>
                </div> --}}

              



                <!-- <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">Full Name:</span>
                    <input class="input100" type="text" name="name" placeholder="Enter full name" id="lastName">
                    <span class="focus-input100"></span>
                </div> -->

                <!-- <div class="form-group">
                    <span class="label-input100">Information Of Team:</span>
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div> -->

                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn" type="submit" value="Submit">
                        <span style="color: white">
                            Submit
                            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true" style="color: white"></i>
                        </span>
                    </button>
                </div>






            </form>
        </div>
    </div>

    @empty
    
    @endforelse
  
    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="{{asset('assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('assets/vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/vendor/countdowntime/countdowntime.js')}}"></script>
    <!--===============================================================================================-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrY4cWbMf23GoTKz7DkrZ960bsKRFMne4"></script>
    <script src="{{asset('assets/js/map-custom.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/js/main.js')}}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');

        $(document).ready(function () {
            var max_fields = 10;
            var wrapper = $(".container1");
            var add_button = $(".add_form_field");

            var x = 1;
            $(add_button).click(function (e) {
                e.preventDefault();
                if (x < max_fields) {
                    x++;
                    $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="delete">Delete</a></div>'); //add input box
                } else {
                    alert('You Reached the limits')
                }
            });

            $(wrapper).on("click", ".delete", function (e) {
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            })
        });

    </script>

</body></html>
