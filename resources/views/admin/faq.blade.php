@extends('dashboard')
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


<!-- Page content-->
 <!-- Page content-->
 <div class="container-fluid">

<div class="allcontents bg-white p-2 mt-2">

    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumblinks">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Questions Asked</li>
        </ol>
    </nav>


    <!-- table -->
    <div id="alldatatable" class="bg-white mt-2 pt-3">

        <p class="fw-bold">Total Questions : 30</p>

        <div class="faqitem">
            <p class="fw-bold mb-0">Question - 1</p>
            <div class="faq-prodname">
                <a href="" class="mb-1">Polycab 2.5 Sqmm Single core Fr Pvc Ins. Copper Flexible
                    Cable Red As Per Is 694</a>
            </div>
            <div class="faq-questans">
                <label for="exampleFormControlTextarea1" class="form-label">What Are the Dimensions of
                    this product ?</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                    placeholder="Write Your Answer Here..."></textarea>
            </div>
            <div class="faq-postans mt-2">
                <button class="btn btn-sm orangebg">Post Answer</button>
            </div>
        </div>
        <div class="faqitem">
            <p class="fw-bold mb-0">Question - 2</p>

            <div class="faq-prodname">
                <a href="" class="mb-1">Polycab 2.5 Sqmm Single core Fr Pvc Ins. Copper Flexible
                    Cable Red As Per Is 694</a>
            </div>
            <div class="faq-questans">
                <label for="exampleFormControlTextarea1" class="form-label">What Are the Dimensions of
                    this product ?</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                    placeholder="Write Your Answer Here..."></textarea>
            </div>
            <div class="faq-postans mt-2">
                <button class="btn btn-sm orangebg">Post Answer</button>
            </div>
        </div>
        <div class="faqitem">
            <p class="fw-bold mb-0">Question - 3</p>
            <div class="faq-prodname">
                <a href="" class="mb-1">Polycab 2.5 Sqmm Single core Fr Pvc Ins. Copper Flexible
                    Cable Red As Per Is 694</a>
            </div>
            <div class="faq-questans">
                <label for="exampleFormControlTextarea1" class="form-label">What Are the Dimensions of
                    this product ?</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                    placeholder="Write Your Answer Here..."></textarea>
            </div>
            <div class="faq-postans mt-2">
                <button class="btn btn-sm orangebg">Post Answer</button>
            </div>
        </div>
        <div class="faqitem">
            <p class="fw-bold mb-0">Question - 4</p>

            <div class="faq-prodname">
                <a href="" class="mb-1">Polycab 2.5 Sqmm Single core Fr Pvc Ins. Copper Flexible
                    Cable Red As Per Is 694</a>
            </div>
            <div class="faq-questans">
                <label for="exampleFormControlTextarea1" class="form-label">What Are the Dimensions of
                    this product ?</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                    placeholder="Write Your Answer Here..."></textarea>
            </div>
            <div class="faq-postans mt-2">
                <button class="btn btn-sm orangebg">Post Answer</button>
            </div>
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
<!-- Page content ends-->
@endsection