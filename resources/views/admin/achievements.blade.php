@extends('dashboard')
@section('title','Admin')
@section('content')
    @push('css')
        <link href="{{ asset('assets/images/favicon.png') }}" rel="icon">
        <link href="{{ asset('assets/images/favicon.png') }}" rel="apple-touch-icon">
        <!-- material icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    @endpush

    @push('script')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
    @endpush


    <!-- Page content wrapper-->
    <div id="page-content-wrapper">



        <!-- Page content-->
        <div class="container-fluid">



            <div class="allcontents bg-white p-2 mt-2">

                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumblinks">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Achievement</li>
                    </ol>
                </nav>
                <!-- <div class="panelheading">
                            <p>Users</p>
                        </div> -->


                <div class="dataaddactions mb-4">

                    <div class="addcategorybtns">
                        <button class="btn bluebg btn-sm" data-bs-toggle="modal" data-bs-target="#addbrandmodal">+
                            Add Achievement</button>
                    </div>
                    <!-- searchbar -->
                    <div id="datasearchbar" class="input-group mt-3 mb-3">
                        <input type="text" class="form-control" placeholder="Search Achievement"
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
                                <th>Achievement ID</th>
                                <th>Achievement Name</th>
                                <th>Achievement Image</th>
                                <th>Date</th>
                                <th>author</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($imageData as $data)
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td class="col-md-2">
                                        <div class="tablecellwidthbq">
                                            <p class="mb-0">{{ $data->event_name }}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="brandlogoimg">
                                            <img src="{{ url('events/' . $data->image) }}" alt="">
                                        </div>
                                    </td>
                                    <td class="col-md-2">
                                        <div class="tablecellwidthbq">
                                            <p class="mb-0">{{ $data->author }}</p>
                                        </div>
                                    </td>
                                    <td class="col-md-2">
                                        <div class="tablecellwidthbq">
                                            <p class="mb-0">{{ $data->date }}</p>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex">

                                          

                                            <button class="btn bluebg btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#editbrandmodal{{ $data->id }}">
                                                <span class="material-icons">
                                                    edit
                                                </span>
                                            </button>


                                            <form action="{{ route('achievement.delete') }} " method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $data->id }}">
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
                                <!--modal for view user orders starts -->

    <!--modal for view user orders ends-->


                                {{-- model for edit --}}
                                <div class="modal fade" id="editbrandmodal{{ $data->id }}" tabindex="-1"
                                    aria-labelledby="editbrandmodalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Achievement</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            {{-- modal start here --}}
                                            <form action="{{ route('achievement.edit') }} " method="post"
                                                enctype="multipart/form-data">
                                                <div class="modal-body">

                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $data->id }}">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Achievement
                                                            Name</label>
                                                        <input type="text" value="{{ $data['event_name'] }}"
                                                            name="event_name" class="form-control form-control-sm"
                                                            id="exampleFormControlInput1">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Sub-title
                                                        </label>
                                                        <input type="text" value="{{ $data['subtitle'] }}"
                                                            name="subtitle" class="form-control form-control-sm"
                                                            id="exampleFormControlInput1">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Achievement
                                                            Description</label>
                                                        <input type="text" value="{{ $data['description'] }}"
                                                            name="description" class="form-control form-control-sm"
                                                            id="exampleFormControlInput1">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Author
                                                        </label>
                                                        <input type="text" value="{{ $data['author'] }}" name="author"
                                                            class="form-control form-control-sm"
                                                            id="exampleFormControlInput1">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Date</label>
                                                        <input type="date" value="{{ $data['date'] }}" name="date"
                                                            class="form-control form-control-sm"
                                                            id="exampleFormControlInput1" placeholder="DD/MM/YY">
                                                    </div>


                                                    <div class="mb-3">
                                                        <label for="formFileSm" class="form-label">Upload Achievement
                                                            Image</label>
                                                        <input name="image" value="{{ $data->image }}"
                                                            class="form-control form-control-sm" id="formFileSm"
                                                            type="file">
                                                    </div>


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn bluebg btn-sm">Update Brand</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                            {{-- <tr>
                                    <td>12345</td>
                                    <td class="col-md-2">
                                        <div class="tablecellwidthbq">
                                            <p class="mb-0">Win Internation Runner Record</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="brandlogoimg">
                                            <img src="assets/images/brand2.png" alt="">
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex">
                                            <button class="btn bluebg btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#editbrandmodal">
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


    <!-- add brand modal starts -->
    <div class="modal fade" id="addbrandmodal" tabindex="-1" aria-labelledby="addcategorymodalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Achievement</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('achievement.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Achievement
                                Name</label>
                            <input type="text" required name="event_name" class="form-control form-control-sm"
                                id="exampleFormControlInput1">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Sub-title
                            </label>
                            <input type="text" required name="subtitle" class="form-control form-control-sm"
                                id="exampleFormControlInput1">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Achievement
                                Description</label>
                            <input type="text" required name="description" class="form-control form-control-sm"
                                id="exampleFormControlInput1">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Author </label>
                            <input type="text" required name="author" class="form-control form-control-sm"
                                id="exampleFormControlInput1">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Date</label>
                            <input type="date" required name="date" class="form-control form-control-sm"
                                id="exampleFormControlInput1" placeholder="DD/MM/YY">
                        </div>


                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Upload Achievement
                                Image</label>
                            <input name="image" required class="form-control form-control-sm" id="formFileSm"
                                type="file">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn bluebg btn-sm">Add/Save Achievement</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
    <!-- add brand modal ends -->


    <!--modal for edit brand starts -->
    {{-- <div class="modal fade" id="editbrandmodal" tabindex="-1" aria-labelledby="editbrandmodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Achievement</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
           <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label" >Achievement
                            Name</label>
                        <input type="text" required name="event_name" class="form-control form-control-sm" id="exampleFormControlInput1">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Sub-title
                            </label>
                        <input type="text" required name="subtitle" class="form-control form-control-sm" id="exampleFormControlInput1">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Achievement
                            Description</label>
                        <input type="text" required name="description" class="form-control form-control-sm" id="exampleFormControlInput1">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Author </label>
                        <input type="text" required name="author" class="form-control form-control-sm" id="exampleFormControlInput1">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Date</label>
                        <input type="date" required name="date" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="DD/MM/YY">
                    </div>

                    
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Upload Achievement
                            Image</label>
                        <input name="image" required class="form-control form-control-sm" id="formFileSm" type="file">
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bluebg btn-sm">Update Brand</button>
                </div>
            </div>
        </div>
    </div> --}}
    <!--modal for edit brand ends-->


    <!--modal for delete confirm starts -->
    {{-- <div class="modal fade" id="deleteconfirmmodal" tabindex="-1" aria-labelledby="deleteconfirmmodalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Brand</h5>
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
