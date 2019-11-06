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
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Timeline</h6>
                <div id="content">
                  <ul class="timeline">
                    <li class="event" data-date="12:30 - 1:00pm">
                      <h3>Registration</h3>
                      <p>Get here on time, it's first come first serve. Be late, get turned away.</p>
                    </li>
                    <li class="event" data-date="2:30 - 4:00pm">
                      <h3>Opening Ceremony</h3>
                      <p>Get ready for an exciting event, this will kick off in amazing fashion with MOP & Busta Rhymes as an opening show.</p>    
                    </li>
                    <li class="event" data-date="5:00 - 8:00pm">
                      <h3>Main Event</h3>
                      <p>This is where it all goes down. You will compete head to head with your friends and rivals. Get ready!</p>    
                    </li>
                    <li class="event" data-date="8:30 - 9:30pm">
                      <h3>Closing Ceremony</h3>
                      <p>See how is the victor and who are the losers. The big stage is where the winners bask in their own glory.</p>    
                    </li>
                  </ul>
                </div>
              </div>
            </div>
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