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
      <div class="page-content" id="invoice">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="container-fluid d-flex justify-content-between">
                  <div class="col-lg-3 pl-0">
                    <a href="#" class="noble-ui-logo d-block mt-3"><img src="assets/images/logo.png" style="width: 150px"></a>
                    <p class="mt-1 mb-1"><b>Joint Venture Plan</b></p>
                    <p>108,<br> Great Russell St,<br>London, WC1B 3NA.</p>
                    <h5 class="mt-5 mb-2 text-muted">Invoice to :</h5>
                    <p>Joseph E Carr,<br> 102, 102  Crown Street,<br> London, W3 3PR.</p>
                  </div>
                  <div class="col-lg-5 pr-0">
                    <h4 class="font-weight-medium text-uppercase text-right mt-4 mb-2">investment certificate</h4>
                    <h6 class="text-right pb-2"># INV-002308</h6>
                    <h6 class="mb-0 text-right font-weight-normal mb-2"><span class="text-muted">Invoice Date :</span> 25rd Jan 2019</h6>
                  </div>
                </div>
                <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                  <div class="table-responsive w-100">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                              <th>#</th>
                              <th>Description</th>
                              <th class="text-right">Quantity</th>
                              <th class="text-right">Amount</th>
                              <th class="text-right">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr class="text-right">
                            <td class="text-left">1</td>
                            <td class="text-left">Invest in Farmsby (Joint venture)</td>
                            <td>01</td>
                            <td>400,000</td>
                            <td>410,000</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
                <div class="container-fluid mt-5 w-100">
                  <div class="row">
                    <div class="col-md-6 ml-auto">
                        <div class="table-responsive">
                          <table class="table">
                              <tbody>
                                <tr>
                                  <td>Payment Made</td>
                                  <td class="text-success text-right"> &#x20a6; 400,000</td>
                                </tr>
                              </tbody>
                          </table>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="container-fluid w-100">
                  <a href="#" onclick="print()" class="btn btn-outline-primary float-right mt-4"><i data-feather="printer" class="mr-2 icon-md"></i>Print</a>
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
  <!-- end custom js for this page -->
  <script src="assets/js/custom.js"></script>
</body>
</html>    