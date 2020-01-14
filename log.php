<?php  
  session_start();
  include_once 'app/connect.php';
  include_once 'app/controller/Farmsby.php';
  include_once 'app/controller/Database.php';
  include_once 'app/controller/User.php';
  include_once 'app/controller/Transaction.php';
  include_once 'app/controller/Algorithm.php';
  include_once 'app/controller/User.php';
  include_once 'app/controller/Log.php';
  $farmsby = new Farmsby();
  $user = new Users($conn);
  $database = new Database($conn);
  $algorithm = new Algorithm($conn);
  $trans = new Transaction($conn);
  $logger = new LogActivities($conn);
  include_once 'app/model/userdata.php';
  $transactionData = $trans->getTable();
  $transactDecode = json_decode($transactionData, true);
  $refData = $user->allRef($farmsby->getSession('userID'));
  $allRef = json_decode($refData, true);
  $getLogs = $logger->grabLogs();
  $decodeLogs = json_decode($getLogs, true);
  if ($farmsby->getSession('userID') == NULL) {
    header("Location: login");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Farmsby | Audit log</title>
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
                <h6 class="card-title">Audit Log</h6>
                <div id="content">
                  <ul class="timeline">
                    <?php  
                      if ($decodeLogs !== NULL) {
                        foreach ($decodeLogs as $dcl) {
                         echo 
                         '<li class="event" data-date="'. $farmsby->time_elapsed_string($dcl['dateNoted']) .'">
                          <h3>'. $dcl['action'] .'</h3>
                          <p>'. $dcl['activity'] .'</p>
                        </li>'; 
                        }
                      }
                    ?>
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