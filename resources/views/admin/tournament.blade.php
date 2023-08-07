@extends('dashboard')
@section('title','Admin')
@section('content')
<!-- Page content-->
 <!-- Page content-->

 @push('css')
 <link href="{{asset('assets/admin/images/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/admin/images/favicon.png')}}" rel="apple-touch-icon">
    <!-- material icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{asset('assets/admin/css/styles.css')}}" rel="stylesheet" />

 @endpush

 @push('script')
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{asset('assets/admin/js/scripts.js')}}"></script>
 @endpush


<!-- Page content ends-->
<div class="d-flex" id="wrapper">
    


        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            


            <!-- Page content-->
            <div class="container-fluid">



                <div class="allcontents bg-white p-2 mt-2">

                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumblinks">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tournaments</li>
                        </ol>
                    </nav>

                    <div class="dataaddactions">
                        <div class="addcategorybtns">
                            <button class="btn bluebg btn-sm" data-bs-toggle="modal"
                                data-bs-target="#addcategorymodal">+ Add Tournament</button>
                        </div>
                        <!-- searchbar -->
                        <div id="datasearchbar" class="input-group mt-3 mb-3">
                            <input type="text" class="form-control" placeholder="Search Tournaments"
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn orangebg" type="button" id="button-addon2">
                                <span class="material-icons">
                                    search
                                </span>
                            </button>
                        </div>
                    </div>


                    <!-- table -->
                    <div id="alldatatable" class="bg-white mt-2 pt-3">
                        <div id="allcategories">
                            @forelse ($tournament as $data )
                                
                            
                            <div class="categoryitemcont">
                                <!-- <div class="categoryitem" onclick="location.href='category.html'"> -->
                                <div class="categoryitem">
                                    <div class="categoryimg">
                                        <img src="{{url('events/sports/'.$data->image)}}" alt="">
                                    </div>

                                    <div class="categoryname">
                                        <p class="mb-1">{{$data->sport_name}}</p>
                                    </div>
                                </div>
                                <div class="categoryactions">
                                    <div class="categoryaction" onclick="location.href='category.html'">
                                        <!-- <span class="material-icons text-dark">
                                            visibility
                                        </span> -->
                                    </div>
                                    <div class="categoryaction" data-bs-toggle="modal"
                                        data-bs-target="#editcategorymodal">
                                        <span class="material-icons text-dark">
                                            edit
                                        </span>
                                    </div>

                                    <form action="{{route("deletetournament")}}" method="post">
                                        @csrf
                                    <input type="hidden" name="id" value="{{ $data->id }}"/>
                                    <button type="submit" class="categoryaction" data-bs-toggle="modal"
                                        data-bs-target="#deletecategorymodal">
                                        <span class="material-icons text-danger">
                                            delete
                                        </span>
                                    </button>
                                    </form>
                                </div>
                            </div>

                            @empty
                                
                            @endforelse

                            {{-- <div class="categoryitemcont">
                                <!-- <div class="categoryitem" onclick="location.href='category.html'"> -->
                                    <div class="categoryitem" >
                                    <div class="categoryimg">
                                        <img src="/images/Main-Sports/football2.jpg" alt="">
                                    </div>

                                    <div class="categoryname">
                                        <p class="mb-1">Football</p>
                                    </div>
                                </div>
                                <div class="categoryactions">
                                    <div class="categoryaction" onclick="location.href='category.html'">
                                        <!-- <span class="material-icons text-dark">
                                            visibility
                                        </span> -->
                                    </div>
                                    <div class="categoryaction" data-bs-toggle="modal"
                                        data-bs-target="#editcategorymodal">
                                        <span class="material-icons text-dark">
                                            edit
                                        </span>
                                    </div>

                                    <div class="categoryaction" data-bs-toggle="modal"
                                        data-bs-target="#deletecategorymodal">
                                        <span class="material-icons text-danger">
                                            delete
                                        </span>
                                    </div>
                                </div>
                            </div> --}}

                        </div>

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


    <!-- add category modal starts -->
    <form action="{{route('tournament.store')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="modal fade" id="addcategorymodal" tabindex="-1" aria-labelledby="addcategorymodalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Tournaments</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Upload Tournament Banner</label>
                        <input name="image" required class="form-control form-control-sm" id="formFileSm" type="file">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tournament
                            Name</label>
                        <input type="text" required name="sport" class="form-control form-control-sm" id="exampleFormControlInput1">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Event Date</label>
                        <input type="date" name="event_date" required class="form-control form-control-sm" id="exampleFormControlInput1">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tournament
                            Description</label>
                        <input type="text" name="description" class="form-control form-control-sm" id="exampleFormControlInput1">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Sport type</label>
                        <select class="form-control" name="is_team" required="required">
                            <option value="0">Solo Sport</option>
                            <option value="1">Team Sport</option>
                        </select>
                        {{-- <input type="text" name="description" class="form-control form-control-sm" id="exampleFormControlInput1"> --}}
                    </div>
                    
                  

                    

                    <!-- <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Mark as a
                            Best Seller Category</label>
                    </div> -->
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn bluebg btn-sm">Add/Save Tournament</button>
                </div>
            </div>
        </div>
    </div>
</form>
    <!-- add category modal ends -->

    <!-- edit category modal starts -->
    {{-- <div class="modal fade" id="editcategorymodal" tabindex="-1" aria-labelledby="editcategorymodalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Tournament</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Upload Tournament Image</label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tournament
                            Name</label>
                        <input type="email" class="form-control form-control-sm" id="exampleFormControlInput1"
                            placeholder="Ex- Cricket">
                    </div>

                    <!-- <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked>
                        <label class="form-check-label" for="flexSwitchCheckDefault">Mark as a
                            Best Seller Category</label>
                    </div> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bluebg btn-sm">Update Tournament</button>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- add category modal ends -->

    <!--modal for delete product starts -->
    {{-- <div class="modal fade" id="deletecategorymodal" tabindex="-1" aria-labelledby="deletecategorLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Category Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <p>Are you sure that you want to delete this category?</p>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm">Confirm Delete</button>
                </div>

            </div>
        </div>
    </div> --}}
    <!--modal for delete product ends-->

<!-- Page content ends-->


@endsection