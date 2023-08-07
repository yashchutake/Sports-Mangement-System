<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Admin</title>

  <!-- Favicons -->


  <meta name="author" content="B.Tech-2">
  <meta name="twitter:title" content="Skyline | Admin">
  <meta name="twitter:description"
    content="designed and promoted by maharashtra industries directory, www.maharashtradirectory.com" />
  <meta property="og:title" content="Skyline | Admin">
  <meta property="og:url" content="wwww.skyline.com">
  <meta property="og:image" content="https://samvaidya961.github.io/skylineadmin/assets/images/favicon.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1024">
  <meta property="og:image:height" content="1024">
  <!-- texteditor js cdn -->


  @stack('css')
</head>

<body>


  <div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <div id="sidebar-wrapper" class="bg-dark">

      <div id="adminsidebar" class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">

          <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
              id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <!-- <i class="bi bi-person-fill"></i> -->
              <!-- <i class="bi bi-person"></i> -->
              <!-- <img src="assets/images/dp.webp" alt="" width="32" height="32" class="rounded-circle me-2"> -->
              <img src="dp.webp" alt="" width="32" height="32" class="rounded-circle me-2">
              <strong>Admin</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">

              <li><a class="dropdown-item" href="login.html">Sign out</a></li>
            </ul>
          </div>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">

          <li>
            <a href="index.html" class="nav-link">
              Dashboard
            </a>
          </li>

          <!-- <li>
            <a href="allusers.html" class="nav-link">
              Users
            </a>
          </li> -->

          <li>
            <a href="addTournament.html" class="nav-link">
              Tournament
            </a>
          </li>

          <!-- <li>
            <a href="seeParticipation.html" class="nav-link">
              See Participation
            </a>
          </li> -->

          <li>
            <a href="addGallery.html" class="nav-link">
              Gallery
            </a>
          </li>


          <li>
            <a href="Achievements.html" class="nav-link">
              Achievements
            </a>
          </li>



          <li>
            <a href="updateContact.html" class="nav-link">
              See Participation
            </a>
          </li>

         


          <li>
            <a href="faq.html" class="nav-link">
              FAQ
            </a>
          </li> 

          <!-- <li>
            <a href="orders.html" class="nav-link">
              Orders
            </a>
          </li>

          <li>
            <a href="quoterequests.html" class="nav-link">
              Quote Requests
            </a>
          </li>

          <li>
            <a href="contactinfo.html" class="nav-link">
              Contact Information
            </a>
          </li> -->

        </ul>

      </div>

    </div>


    <!-- Page content wrapper-->
    <div id="page-content-wrapper">

      <!-- Top navigation-->
      <nav class="navbar navbar-expand-lg bluebg">

        <div class="container-fluid d-flex">
         
         

          <button id="sidebarToggle">
            <span class="material-icons">
              menu
            </span>
          </button>

          <div id="companylogo">

          </div>

          <button id="navbartogglerbtn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            <span class="material-icons">
              more_vert
            </span>
          </button>

          <img src="logo.png" alt="" onclick="location.href='index.html'" style="height: 25px">
          <h4 class="ms-2">Sports Admin Panel</h4>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
              <li class="nav-item"><a class="nav-link text-white" href="index.html">Home</a></li>
            </ul>
            
          </div>
        </div>
      </nav>


      <!-- Page content-->
    @yield('content')

      <!-- Page content ends-->

    </div>
  </div>


  <!-- modal for delete confirm starts -->
  <!-- <div class="modal fade" id="deleteconfirmmodal" tabindex="-1" aria-labelledby="deleteconfirmmodalLabel"
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
  </div> -->
  <!--modal for delete confirm ends -->

@stack('script')

</body>

</html>