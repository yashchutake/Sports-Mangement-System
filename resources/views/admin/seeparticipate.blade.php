@extends('dashboard')
@section('title','Admin')
@section('content')
 @push('css')
 <link href="{{asset('assets/images/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/images/favicon.png')}}" rel="apple-touch-icon">
    <!-- material icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" />



 @endpush

 @push('script')
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{asset('assets/js/scripts.js')}}"></script>
 @endpush


        <!-- Page content wrapper-->
        <div id="page-content-wrapper">



            <!-- Page content-->
            <div class="container-fluid">



                <div class="allcontents bg-white p-2 mt-2">

                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumblinks">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Participation</li>
                        </ol>
                    </nav>
                    <!-- <div class="panelheading">
                        <p>Users</p>
                    </div> -->


                    <div class="dataaddactions mb-4">
                       
                       
                       
                           
                       
                            {{-- <div class="d-flex">

                            <input type="hidden" name="id" value="team">
                            <button type="submit" class="btn bluebg btn-sm" data-bs-toggle="modal" data-bs-target="#addcitymodal">
                                Team Sports</button>
                        </div></form>
                        <form action="{{route('showparticipants',['solo'])}}" method="post">
                            @csrf
                        <div class="d-flex">
                            <input type="hidden" name="id" value="solo">
                            <button type="submit" class="btn bluebg btn-sm" data-bs-toggle="modal" data-bs-target="#addcitymodal">
                                Solo Sports</button>
                        </div></form> --}}
              

                        <!-- searchbar -->
                        <div id="datasearchbar" class="input-group mt-3 mb-3">
                            <input type="text" class="form-control" placeholder="Search "
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn orangebg" type="button" id="button-addon2">
                                <span class="material-icons">
                                    search
                                </span>
                            </button>
                        </div>
                    </div>

                    <!-- table -->
                    <div id="alldatatable" class="bg-white mt-2">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Index</th>
                                    <th>Tournament Name</th>
                                    <th>Team Name</th>
                                    <th>Captain Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                       
                       

                        
                        <tbody>
                                 @forelse ($playerteam as $data )
                                 
                                    <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->sport}}</td>
                                    <td>{{$data->team_name}}</td>
                                    <td>{{$data->captain_name}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn orangebg btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#viewusermodal{{$data->id}}">
                                                <span class="material-icons">
                                                    visibility
                                                </span>
                                            </button>

                                            <form action="{{route('delete.participant.team')}}" method="post">
                                                @csrf
                                            <input type="hidden" name="id" value="{{$data->id}}">
                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#deleteconfirmmodal">
                                                <span class="material-icons">
                                                    delete
                                                </span>
                                            </button>
                                        </form>
                                        </div>

                                    </td>
                                </tr>

                                <div class="modal fade" id="viewusermodal{{$data->id}}" tabindex="-1" aria-labelledby="editcitymodalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Participation</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">
                                                        Name of Tournament
                                                    </label>
                                                    <input type="text" readonly name="" value="{{$data->sport}}" class="form-control form-control-sm" id="exampleFormControlInput1"
                                                        >
                                                </div>
                            
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">
                                                        Team Name
                                                    </label>
                                                    <input type="text" readonly name="" value="{{$data->team_name}}" class="form-control form-control-sm" id="exampleFormControlInput1">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">
                                                        Captain name
                                                    </label>
                                                    <input type="text" readonly name="" value="{{$data->captain_name}}" class="form-control form-control-sm" id="exampleFormControlInput1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">
                                                        Dapartment
                                                    </label>
                                                    <input type="text" readonly name="" value="{{$data->department}}" class="form-control form-control-sm" id="exampleFormControlInput1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">
                                                        Year
                                                    </label>
                                                    <input type="text" readonly name="" value="{{$data->year}}" class="form-control form-control-sm" id="exampleFormControlInput1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">
                                                        email
                                                    </label>
                                                    <input type="text" readonly name="" value="{{$data->email}}" class="form-control form-control-sm" id="exampleFormControlInput1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1"  class="form-label">
                                                        Mobile No
                                                    </label>
                                                    <input type="text" readonly name="" value="{{$data->mobile}}" class="form-control form-control-sm" id="exampleFormControlInput1">
                                                </div>
                                                
                   @php
                       $teammember=App\Models\Participants::where('team_id',$data->id)->get();
                   @endphp                             

                   @forelse ($teammember as $player)
                       
                   
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">
                                                        Player 1
                                                    </label>
                                                    <input type="text" readonly name="" value="{{$player->name1}}" class="form-control form-control-sm" id="exampleFormControlInput1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">
                                                        Player 2
                                                    </label>
                                                    <input type="text" readonly name="" value="{{$player->name2}}" class="form-control form-control-sm" id="exampleFormControlInput1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">
                                                        Player 3
                                                    </label>
                                                    <input type="text" readonly name="" value="{{$player->name3}}" class="form-control form-control-sm" id="exampleFormControlInput1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">
                                                        Player 4
                                                    </label>
                                                    <input type="text" readonly name="" value="{{$player->name4}}" class="form-control form-control-sm" id="exampleFormControlInput1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">
                                                        Player 5
                                                    </label>
                                                    <input type="text" readonly name="" value="{{$player->name5}}" class="form-control form-control-sm" id="exampleFormControlInput1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">
                                                        Player 6
                                                    </label>
                                                    <input type="text" readonly name="" value="{{$player->name6}}" class="form-control form-control-sm" id="exampleFormControlInput1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">
                                                        Player 7
                                                    </label>
                                                    <input type="text" readonly name="" value="{{$player->name7}}" class="form-control form-control-sm" id="exampleFormControlInput1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">
                                                        Player 8
                                                    </label>
                                                    <input type="text" readonly name="" value="{{$player->name8}}" class="form-control form-control-sm" id="exampleFormControlInput1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">
                                                        Player 9
                                                    </label>
                                                    <input type="text" readonly name="" value="{{$player->name9}}" class="form-control form-control-sm" id="exampleFormControlInput1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">
                                                        Player 10
                                                    </label>
                                                    <input type="text" readonly name="" value="{{$player->name10}}" class="form-control form-control-sm" id="exampleFormControlInput1">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">
                                                        Player 11
                                                    </label>
                                                    <input type="text" readonly name="" value="{{$player->name11}}" class="form-control form-control-sm" id="exampleFormControlInput1">
                                                </div>

                                                @empty
                       
                                                @endforelse
                                                <!-- <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">City
                                                        Name</label>
                                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                        <option selected>Aurangabad</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div> -->
                                                {{-- <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">
                                                        Sport Code
                                                    </label>
                                                    <input type="number" class="form-control form-control-sm" id="exampleFormControlInput1"
                                                       >
                                                </div> --}}
                            
                                            </div>
                                            {{-- <div class="modal-footer">
                                                <button type="button" class="btn bluebg btn-sm">Update Information</button>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                             
                                 @empty
                           
                                @endforelse



                                {{-- <tr>
                                    <td>2</td>
                                    <td>Rushikesh Dandge</td>
                                    <td>FootBall</td>
                                    <td>23</td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn bluebg btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#editcitymodal">
                                                <span class="material-icons">
                                                    edit
                                                </span>
                                            </button>

                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#deleteconfirmmodal">
                                                <span class="material-icons">
                                                    delete
                                                </span>
                                            </button>
                                        </div>

                                    </td>
                                </tr> --}}

                                @forelse ($playersolo as $data)
                                    
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->sport_name}}</td>
                                    <td>Solo</td>
                                    <td>{{$data->name}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn orangebg btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#editcitymodal{{$data->id}}">
                                                <span class="material-icons">
                                                    visibility
                                                </span>
                                            </button>


                                            <form action="{{route('delete.participant.solo')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$data->id}}">
                                            <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#deleteconfirmmodal">
                                                <span class="material-icons">
                                                    delete
                                                </span>
                                            </button>
                                            </form>
                                        </div>

                                    </td>
                                </tr>

                                <div class="modal fade" id="editcitymodal{{$data->id}}" tabindex="-1" aria-labelledby="editcitymodalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">View Details</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                            
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">
                                                        Name of Tournament
                                                    </label>
                                                    <input type="text" readonly value="{{$data->sport_name}}" class="form-control form-control-sm" id="exampleFormControlInput1"
                                                        >
                                                </div>
                            
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">
                                                     name
                                                    </label>
                                                    <input type="text" readonly value="{{$data->name}}" class="form-control form-control-sm" id="exampleFormControlInput1">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">
                                                        PRN No.
                                                    </label>
                                                    <input type="text" readonly value="{{$data->prn}}" class="form-control form-control-sm" id="exampleFormControlInput1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">
                                                        Dapartment
                                                    </label>
                                                    <input type="text" readonly  value="{{$data->department}}" class="form-control form-control-sm" id="exampleFormControlInput1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">
                                                        Year
                                                    </label>
                                                    <input type="text" readonly value="{{$data->year}}" class="form-control form-control-sm" id="exampleFormControlInput1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">
                                                        email
                                                    </label>
                                                    <input type="text" readonly value="{{$data->email}}" class="form-control form-control-sm" id="exampleFormControlInput1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">
                                                        Mobile No
                                                    </label>
                                                    <input type="text" readonly value="{{$data->mobile}}" class="form-control form-control-sm" id="exampleFormControlInput1">
                                                </div>
                                            </div>
                                            {{-- <div class="modal-footer">
                                                <button type="button" class="btn bluebg btn-sm">Update Information</button>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                @empty
                                    
                                @endforelse
                            </tbody> 
                            
                            
                        </table>




                    </div>

                    <!-- pagination -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-sm justify-content-end">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">1</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
            <!-- Page content ends-->
        </div>
    </div>



    <!-- add city modal starts -->
    {{-- <div class="modal fade" id="addcitymodal" tabindex="-1" aria-labelledby="addcitymodalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Participation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">State
                            Name</label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">City
                            Name</label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Pincode
                        </label>
                        <input type="number" class="form-control form-control-sm" id="exampleFormControlInput1">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bluebg btn-sm">Add/Save City</button>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- add city modal ends -->


    <!--modal for edit city starts -->
    {{-- <div class="modal fade" id="editcitymodal" tabindex="-1" aria-labelledby="editcitymodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Participation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Sport
                            Type</label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option value="" disabled selected>Select Sport</option>
                            <option value="1">Badminton Solo</option>
                        <option value="2">Marathon Solo</option>
                        <option value="3">Cycling</option>
                        <option value="4">Table Tennis Solo</option>
                        <option value="5">Boxing</option>
                        <option value="6">Cricket</option>
                        <option value="7">Fooball</option>
                        <option value="8">BasketBall</option>
                        <option value="9">Table Tennis</option>
                        <option value="10">Badminton</option>
                        <option value="11">Tug Of War</option>
                        <option value="12">Marathon</option>
                        <option value="13">Volleyball</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Name Of Participation
                        </label>
                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1"
                            >
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            PRN
                        </label>
                        <input type="number" class="form-control form-control-sm" id="exampleFormControlInput1"
                            >
                    </div>

                    <!-- <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">City
                            Name</label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>Aurangabad</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div> -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Sport Code
                        </label>
                        <input type="number" class="form-control form-control-sm" id="exampleFormControlInput1"
                           >
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bluebg btn-sm">Update Information</button>
                </div>
            </div>
        </div>
    </div> --}}
    <!--modal for edit city ends-->


    <!--modal for delete confirm starts -->
    {{-- <div class="modal fade" id="deleteconfirmmodal" tabindex="-1" aria-labelledby="deleteconfirmmodalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete City</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <p>Are you sure that you want to delete ?</p>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm">Confirm Delete</button>
                </div>

            </div>
        </div>
    </div> --}}
    <!--modal for delete confirm ends-->
@endsection