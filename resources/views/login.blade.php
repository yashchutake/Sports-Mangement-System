<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Login</title>

  <!-- Favicons -->
  <link href="assets/images/favicon.png" rel="icon">
  <link href="assets/images/favicon.png" rel="apple-touch-icon">
  <!-- material icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="assets/css/styles.css" rel="stylesheet" />

  <meta name="author" content="BTech-2 Boys">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1024">
  <meta property="og:image:height" content="1024">
  <!-- texteditor js cdn -->
  <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>
  <!-- image uploader css -->
  <link rel="stylesheet" href="assets/css/image-uploader.min.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>


  <div class="d-flex" id="wrapper">


    <!-- Page content wrapper-->
    <div id="page-content-wrapper">
      <!-- Top navigation-->
      <nav class="navbar navbar-expand-lg bluebg">
        <div class="container-fluid d-flex p-1 px-4">
          <div id="companylogo">
            <img src="assets/images/mainlogo1.png" alt="">
          </div>

        </div>
      </nav>


      <!-- Page content-->
      <div class="container-fluid" style="margin-top: 150px;">

        <div class="registeruserform mt-4 mb-4">
          <h4 class="mb-4 text-center">
            Admin Login
          </h4>

          <form action="">

            <div class="mb-3">
              <label for="exampleFormControlInput2" class="form-label">Username
              </label>
              <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="">
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput4" class="form-label">Password
              </label>
              <input type="password" class="form-control" id="exampleFormControlInput4" placeholder="">
            </div>

            <div class="registerloginbtn mb-2">
              <button class="btn btn-primary w-100 ">Login</button>
            </div>

            <div class="registerloginbtn mb-2">
              <a href="{{route('registration')}}">
                Click here to register
              </a>

              </a>
            </div>

          </form>
        </div>

      </div>
      <!-- Page content ends-->

    </div>
  </div>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="assets/js/image-uploader.min.js"></script>

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/calendar.js"></script>
  <script type="text/javascript" src="http://example.com/jquery.min.js"></script>
  <script type="text/javascript" src="http://example.com/image-uploader.min.js"></script>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

</body>

</html>