@extends('dashboard')
@section('title','Dashboard')

@push('css')
 <link href="{{asset('assets/images/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/images/favicon.png')}}" rel="apple-touch-icon">
  <!-- material icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" />


  <link href="{{asset('assets/images/favicon.png')}}" rel="apple-touch-icon">
  <!-- material icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="{{asset('assets/css/styles.css" rel="stylesheet')}}" />
  
  <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>
  <!-- image uploader css -->
  <link rel="stylesheet" href="assets/css/image-uploader.min.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

@endpush

@push('script')
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="assets/js/image-uploader.min.js"></script>

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="{{asset('assets/js/scripts.js')}}"></script>
  <script src="{{asset('assets/js/calendar.js')}}"></script>
  <script type="text/javascript" src="http://example.com/jquery.min.js"></script>
  <script type="text/javascript" src="http://example.com/image-uploader.min.js"></script>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

@endpush


@section('content')


   <!-- Page content-->
   <div class="container-fluid">
    
    @php
  $countTournament =App\Models\Tournaments::max('id');
  $countPhotos =App\Models\album::max('id');
  $countAchievements =App\Models\achievements::max('id');
  $solo =App\Models\soloparticipants::max('id');
  $team =App\Models\Participants::max('id');
  $countParticipants =$solo+$team;
@endphp

<!-- dashboard starts -->
<div id="dashboardboxes">

  <div class="dbboxouter" onclick="location.href='{{route('adtournament')}}'">
    <div class="dbbox">
      <div class="dbboxleft">
        <div class="dbicon">
          <span class="material-icons">
            people
          </span>
        </div>
      </div>
      <div class="dbboxright">
        <div class="dbboxcount">
          <p class="mb-0">{{$countTournament}}</p>
        </div>
        <div class="dbboxname">
          <p class="mb-0">Total Tournaments</p>
        </div>
      </div>
    </div>
    <div class="dbboxbottom">

      <span class="material-icons rightarrow">
        arrow_right_alt
      </span>
    </div>
  </div>

  <div class="dbboxouter" onclick="location.href='{{route('adpart')}}'">
    <div class="dbbox">
      <div class="dbboxleft">
        <div class="dbicon">
          <span class="material-icons">
            inventory_2
          </span>

        </div>
      </div>
      <div class="dbboxright">
        <div class="dbboxcount">
          <p class="mb-0">{{$countParticipants}}</p>
        </div>
        <div class="dbboxname">
          <p class="mb-0">Total Registartion</p>
        </div>
      </div>
    </div>
    <div class="dbboxbottom">

      <span class="material-icons rightarrow">
        arrow_right_alt
      </span>
    </div>
  </div>

  <div class="dbboxouter" onclick="location.href='{{route('adgallery')}}'">
    <div class="dbbox">
      <div class="dbboxleft">
        <div class="dbicon">
          <span class="material-icons">
            shopping_bag
          </span>
        </div>
      </div>
      <div class="dbboxright">
        <div class="dbboxcount">
          <p class="mb-0">{{$countPhotos}}</p>
        </div>
        <div class="dbboxname">
          <p class="mb-0">Total Photos</p>
        </div>
      </div>
    </div>
    <div class="dbboxbottom">

      <span class="material-icons rightarrow">
        arrow_right_alt
      </span>
    </div>
  </div>

  <div class="dbboxouter" onclick="location.href='{{route('adachievement')}}'">
    <div class="dbbox">
      <div class="dbboxleft">
        <div class="dbicon">
          <span class="material-icons">
            request_quote
          </span>
        </div>
      </div>
      <div class="dbboxright">
        <div class="dbboxcount">
          <p class="mb-0">{{$countAchievements}}</p>
        </div>
        <div class="dbboxname">
          <p class="mb-0">Total Achievements</p>
        </div>
      </div>
    </div>
    <div class="dbboxbottom">

      <span class="material-icons rightarrow">
        arrow_right_alt
      </span>
    </div>
  </div>

</div>
<!-- dashboard ends -->

<div id="bannercalendar" class="mb-4">
  <!-- add images/banner for home page starts-->
  <div class="addbannerimgcalendar">
    <div>
      <h5 class="mt-4 mb-4 text-center">Banners For Home Page</h5>
      <form method="">
        <div class="mb-4 mt-2">

          <input type="file" class="form-control form-control-sm">
        </div>
        <div class="bannerimgpostbtn mt-4">
          <button class="btn btn-sm orangebg">Upload Images</button>
        </div>
      </form>
    </div>

    <div>
      <!-- table -->
      <div id="alldatatable" class="bg-white mt-4">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Uploaded Banner Images</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="brandlogoimg">
                  <img src="assets/images/slider1.jpg" alt="">
                </div>
              </td>
              <td>
                <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                  data-bs-target="#deleteconfirmmodal">
                  <span class="material-icons">
                    delete
                  </span>
                </button>
              </td>
            </tr>

            <tr>
              <td>
                <div class="brandlogoimg">
                  <img src="assets/images/slider2.jpg" alt="">
                </div>
              </td>
              <td>
                <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                  data-bs-target="#deleteconfirmmodal">
                  <span class="material-icons">
                    delete
                  </span>
                </button>
              </td>
            </tr>

            <tr>
              <td>
                <div class="brandlogoimg">
                  <img src="assets/images/slider3.jpg" alt="">
                </div>
              </td>
              <td>
                <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                  data-bs-target="#deleteconfirmmodal">
                  <span class="material-icons">
                    delete
                  </span>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>


  </div>
  <!-- add images/banner for home page ends-->

  <div class="addbannerimgcalendar">
    <!-- calendar starts -->
    <div class="wrapper">
      <div class="container-calendar">
        <h5 id="monthAndYear"></h5>

        <div class="button-container-calendar">
          <button id="previous" onclick="previous()">&#8249;</button>
          <button id="next" onclick="next()">&#8250;</button>
        </div>

        <table class="table-calendar" id="calendar" data-lang="en">
          <thead id="thead-month"></thead>
          <tbody id="calendar-body"></tbody>
        </table>

        <div class="footer-container-calendar">
          <label for="month">Jump To: </label>
          <select id="month" onchange="jump()">
            <option value=0>Jan</option>
            <option value=1>Feb</option>
            <option value=2>Mar</option>
            <option value=3>Apr</option>
            <option value=4>May</option>
            <option value=5>Jun</option>
            <option value=6>Jul</option>
            <option value=7>Aug</option>
            <option value=8>Sep</option>
            <option value=9>Oct</option>
            <option value=10>Nov</option>
            <option value=11>Dec</option>
          </select>
          <select id="year" onchange="jump()"></select>
        </div>

      </div>

    </div>
    <!-- calendar ends -->
  </div>

</div>


</div>
<!-- Page content ends-->
@endsection