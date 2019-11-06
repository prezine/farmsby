<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Farmsby | Invest</title>
  <!-- core:css -->
  <link rel="stylesheet" href="assets/vendors/core/core.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
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
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">All Transactions</h6>
                <p class="card-description">Read the <a href="#" target="_blank"> Official Transaction Documentation </a>for a full list of instructions and other options.</p>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Investment type</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Profit</th>
                        <th>Investment Date</th>
                        <th>Manage</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Tom Precious</td>
                        <td>Joint Ventures</td>
                        <td>400,000</td>
                        <td>In Progress</td>
                        <td>30,000</td>
                        <td>3 days ago</td>
                        <td>...</td>
                      </tr>
                    </tbody>
                  </table>
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
  <script src="assets/vendors/chartjs/Chart.min.js"></script>
  <script src="assets/vendors/jquery.flot/jquery.flot.js"></script>
  <script src="assets/vendors/jquery.flot/jquery.flot.resize.js"></script>
  <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
  <!-- end plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/vendors/feather-icons/feather.min.js"></script>
  <script src="assets/js/template.js"></script>
  <!-- endinject -->
  <!-- custom js for this page -->
  <script src="assets/js/dashboard.js"></script>
  <script src="assets/js/datepicker.js"></script>
  <!-- end custom js for this page -->
  <!-- Paystacks API -->
  <script src="https://js.paystack.co/v1/inline.js"></script> 
  <!-- FlutterWave API -->
  <script src="http://flw-pms-dev.eu-west-1.elasticbeanstalk.com/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
  <script src="assets/js/pay.js"></script>
</body>
</html>    