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
          <div class="col-md-3">&nbsp;</div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">
                  <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                      <i data-feather="corner-up-left" id="backToChatList" class="icon-lg mr-2 ml-n2 text-muted d-lg-none"></i>
                      <div>
                        [Investment Type] 
                      </div>
                    </div>
                    <div class="d-flex align-items-center mr-n1">
                    <button type="button" class="btn btn-primary mr-2">Edit Plan</button>
                  </div>
                  </div>
                </h6>
                <form class="forms-sample">
                  <div class="form-group">
                    <label for="exampleInputUsername1">Amount</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Investment Amount">
                  </div>
                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                      Email Invoice
                    </label>
                  </div>
                  <button type="button" class="btn btn-primary mr-2" onclick="payWithPaystack()">Pay with paystacks</button>
                  <button type="button" class="btn btn-light mr-2" onclick="payWithRave()">Pay with flutterwave</button>
                </form>
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