<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Farmsby | Our Farms</title>
  <!-- core:css -->
  <link rel="stylesheet" href="assets/vendors/core/core.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/owl.carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/vendors/owl.carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/vendors/animate.css/animate.min.css">
  <!-- end plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/fonts/feather-font/css/iconfont.css">
  <!-- endinject -->
  <!-- Layout styles -->  
  <link rel="stylesheet" href="assets/css/demo_1/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
  <!-- Global site tag (gtag.js) - Google Analytics start -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146586338-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-146586338-1');
  </script>
  <!-- Google Analytics end -->
</head>
<body>
  <div class="main-wrapper">

    <!-- partial:partials/_sidebar.html -->
    <?php  
      include_once 'widgets/sidepane.php';
    ?>
    <!-- partial -->
  
    <div class="page-wrapper">
      <!-- partial:partials/_navbar.html -->
      <?php include_once 'widgets/header.php'; ?>
      <!-- partial -->
      <div class="page-content">
        <div class="profile-page tx-13">
          
          <div class="row profile-body">
            <!-- left wrapper start -->
            <div class="col-md-8 col-xl-8 middle-wrapper">
              <div class="row">
                <div class="col-12 grid-margin">
                  <div class="profile-header">
                    <div class="cover">
                      <div class="gray-shade"></div>
                      <figure>
                        <img src="assets/images/profile-cover.jpg" class="img-fluid" alt="profile cover">
                      </figure>
                      <div class="cover-body d-flex justify-content-between align-items-center">
                        <div>
                          <img class="profile-pic" src="assets/images/faces/face1.jpg" alt="profile">
                          <span class="profile-name">Amiah Burton</span>
                        </div>
                        <div class="d-none d-md-block">
                          <button class="btn btn-primary btn-icon-text btn-edit-profile">
                            <i data-feather="edit" class="btn-icon-prepend"></i> Edit profile
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="header-links">
                      <ul class="links d-flex align-items-center mt-3 mt-md-0">
                        <li class="header-link-item d-flex align-items-center active">
                          <i class="mr-1 icon-md" data-feather="columns"></i>
                          <a class="pt-1px d-none d-md-block" href="profile.html#">Timeline</a>
                        </li>
                        <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                          <i class="mr-1 icon-md" data-feather="user"></i>
                          <a class="pt-1px d-none d-md-block" href="profile.html#">About</a>
                        </li>
                        <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                          <i class="mr-1 icon-md" data-feather="users"></i>
                          <a class="pt-1px d-none d-md-block" href="profile.html#">Friends <span class="text-muted tx-12">3,765</span></a>
                        </li>
                        <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                          <i class="mr-1 icon-md" data-feather="image"></i>
                          <a class="pt-1px d-none d-md-block" href="profile.html#">Photos</a>
                        </li>
                        <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                          <i class="mr-1 icon-md" data-feather="video"></i>
                          <a class="pt-1px d-none d-md-block" href="profile.html#">Videos</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- left wrapper end -->
            <!-- right wrapper start -->
            <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
              <div class="card rounded">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between mb-2">
                    <h6 class="card-title mb-0">About</h6>
                    <div class="dropdown">
                      <button class="btn p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item d-flex align-items-center" href="profile.html#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="profile.html#"><i data-feather="git-branch" class="icon-sm mr-2"></i> <span class="">Update</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="profile.html#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View all</span></a>
                      </div>
                    </div>
                  </div>
                  <p>Hi! I'm Amiah the Senior UI Designer at NobleUI. We hope you enjoy the design and quality of Social.</p>
                  <div class="mt-3">
                    <label class="tx-11 font-weight-bold mb-0 text-uppercase">Joined:</label>
                    <p class="text-muted">November 15, 2015</p>
                  </div>
                  <div class="mt-3">
                    <label class="tx-11 font-weight-bold mb-0 text-uppercase">Lives:</label>
                    <p class="text-muted">New York, USA</p>
                  </div>
                  <div class="mt-3">
                    <label class="tx-11 font-weight-bold mb-0 text-uppercase">Email:</label>
                    <p class="text-muted">me@nobleui.com</p>
                  </div>
                  <div class="mt-3">
                    <label class="tx-11 font-weight-bold mb-0 text-uppercase">Website:</label>
                    <p class="text-muted">www.nobleui.com</p>
                  </div>
                  <div class="mt-3 d-flex social-links">
                    <a href="javascript:;" class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon github">
                      <i data-feather="github" data-toggle="tooltip" title="github.com/nobleui"></i>
                    </a>
                    <a href="javascript:;" class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon twitter">
                      <i data-feather="twitter" data-toggle="tooltip" title="twitter.com/nobleui"></i>
                    </a>
                    <a href="javascript:;" class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon instagram">
                      <i data-feather="instagram" data-toggle="tooltip" title="instagram.com/nobleui"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- right wrapper end -->
          </div>
        </div>
      </div>

      <!-- partial:partials/_footer.html -->
      <?php include_once 'widgets/footer.php'; ?>
      <!-- partial -->
    
    </div>
  </div>

  <!-- core:js -->
  <script src="assets/vendors/core/core.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="assets/vendors/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendors/jquery-mousewheel/jquery.mousewheel.js"></script>
  <!-- end plugin js for this page -->
  <!-- custom js for this page -->
  <script src="assets/js/carousel.js"></script>
  <!-- end custom js for this page -->
  <!-- inject:js -->
  <script src="assets/vendors/feather-icons/feather.min.js"></script>
  <script src="assets/js/template.js"></script>
  <!-- endinject -->
  <!-- custom js for this page -->
  <script src="assets/js/dashboard.js"></script>
  <script src="assets/js/datepicker.js"></script>
</body>
</html>    