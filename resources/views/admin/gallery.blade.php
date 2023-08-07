@extends('dashboard')
@section('title','Admin')
@section('content')
<!-- Page content-->
 <!-- Page content-->

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


 <!-- Page content-->
 <div class="container-fluid">



<div class="allcontents bg-white p-2 mt-2">

    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumblinks">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Gallary</li>
        </ol>
    </nav>
    <!-- <div class="panelheading">
        <p>Users</p>
    </div> -->


    <div class="dataaddactions mb-4">

        <div class="addcategorybtns">
            <button class="btn bluebg btn-sm" data-bs-toggle="modal" data-bs-target="#addbrandmodal">+
                Add Gallary Images</button>
        </div>
        <!-- searchbar -->
        <div id="datasearchbar" class="input-group mt-3 mb-3">
            <input type="text" class="form-control" placeholder="Search Gallary Images"
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
        
        {{-- $gallery=DB::table('galleries')->select('id','name','image_path',)->get(); --}}
      
       <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Image No</th>
                    <th>Image Name</th>
                    <th>Preview Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               
                @foreach($imageData as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td class="col-md-2">
                        <div class="tablecellwidthbq">
                            <p class="mb-0">{{ $data->name }}</p>
                        </div>
                    </td>
                    <td>
                        <div class="brandlogoimg">
                            <img src="{{ url('album/'.$data->image) }}" alt="">
                        </div>
                    </td>

                    <td>
                        <div class="d-flex">
                            <!-- <button class="btn bluebg btn-sm" data-bs-toggle="modal"
                                data-bs-target="#editbrandmodal">
                                <span class="material-icons">
                                    edit
                                </span>
                            </button> -->
                            
                             <form action="{{route("deletephoto")}}" method="post">
                                @csrf
                            <input type="hidden" name="id" value="{{ $data->id }}"/>
                            <button type="submit" class="btn btn-danger btn-sm" >
                                <span class="material-icons">
                                    delete
                                </span>
                            </button>
                        </form>
                        </div>

                    </td>
                </tr>

                {{-- <tr>
                    <td>12345</td>
                    <td class="col-md-2">
                        <div class="tablecellwidthbq">
                            <p class="mb-0">Full Brandname</p>
                        </div>
                    </td>
                    <td>
                        <div class="brandlogoimg">
                            <img src="assets/images/brand2.png" alt="">
                        </div>
                    </td>

                    <td>
                        <div class="d-flex">
                            <!-- <button class="btn bluebg btn-sm" data-bs-toggle="modal"
                                data-bs-target="#editbrandmodal">
                                <span class="material-icons">
                                    edit
                                </span>
                            </button> -->

                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#deleteconfirmmodal">
                                <span class="material-icons">
                                    delete
                                </span>
                            </button>
                        </div>

                    </td>
                </tr> --}}
                 @endforeach 
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

    <!-- add brand modal starts -->
    <div class="modal fade" id="addbrandmodal" tabindex="-1" aria-labelledby="addcategorymodalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Image
                            Name</label>
                        <input type="text" class="form-control form-control-sm" name="name" required id="exampleFormControlInput1">
                    </div>

                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Upload Image</label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file" name="image" required> 
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn bluebg btn-sm">Add/Save Image</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- add brand modal ends -->


    <!--modal for edit brand starts -->
    <!-- <div class="modal fade" id="editbrandmodal" tabindex="-1" aria-labelledby="editbrandmodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Brand</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Brand
                            Name</label>
                        <input type="email" class="form-control form-control-sm" id="exampleFormControlInput1"
                            value="Allmatic Spannsysteme">
                    </div>

                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Upload Brand
                            Logo</label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bluebg btn-sm">Update Brand</button>
                </div>
            </div>
        </div>
    </div> -->
    <!--modal for edit brand ends-->


    <!--modal for delete confirm starts -->
   <div class="modal fade" id="deleteconfirmmodal" tabindex="-1" aria-labelledby="deleteconfirmmodalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Image</h5>
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
    </div> 
    <!--modal for delete confirm ends-->


@endsection