<?php  
    session_start();
    include_once 'app/connect.php';
    include_once 'app/controller/Farmsby.php';
    include_once 'app/controller/Database.php';
    include_once 'app/controller/Transaction.php';
    include_once 'app/controller/User.php';
    include_once 'app/controller/Algorithm.php';
    $user = new Users($conn);
    include_once 'app/model/userdata.php';
    $trans = new Transaction($conn);
    $algo = new Algorithm();
    $rawRef = (isset($_GET['trasaction_ref'])) ? $_GET['trasaction_ref'] : 0 ;
    @list($ref, $ext) = explode('.', $rawRef);
    $receiptData = $trans->generateReceipt($ref); 
    $receiptDecode = json_decode($receiptData, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Receipt</title>
  <!-- core:css -->
  <link rel="stylesheet" href="<?php echo BASEPATH . 'assets/vendors/core/core.css'?>">
  <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="<?php echo BASEPATH . 'assets/vendors/sweetalert2/sweetalert2.min.css'?>">
    <!-- end plugin css for this page -->
    <!-- plugin css for this page -->
  <!-- end plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo BASEPATH . 'assets/fonts/feather-font/css/iconfont.css'?>">
  <!-- endinject -->
  <!-- Layout styles -->  
  <link rel="stylesheet" href="<?php echo BASEPATH . 'assets/css/demo_1/style.css'?>">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="<?php echo BASEPATH . 'assets/images/favicon.png'?>" />
</head>
<body>
  <div class="main-wrapper">
    <div class="page-wrapper full-page">
      <div class="page-content d-flex align-items-center justify-content-center">

        <div class="row w-100 mx-0 auth-page">
          <div class="col-md-8 col-xl-6 mx-auto">
            <div class="card">
              <div class="card-body">
                <div class="container-fluid d-flex justify-content-between">
                  <div class="col-lg-4 pl-0">
                    <a href="#" class="noble-ui-logo d-block mt-3">
                      <img src="<?php echo BASEPATH . 'assets/images/logo.png'?>" style="width: 150px">
                    </a>
                    <h4 class="font-weight-medium text-uppercase text-left mt-4 mb-2">investment receipt</h4>
                    <h6 class="text-left pb-2"># INV-<?php echo sprintf('%06d', $receiptDecode['investID']); ?></h6>
                  </div>
                </div>
                <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                  <div class="table-responsive w-100">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                              <th>Investment type</th>
                              <th class="text-right">Tenure</th>
                              <th class="text-right">Investment Date</th>
                              <th class="text-right">Maturity Date</th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr class="text-right">
                            <td class="text-left"> <?php echo $receiptDecode['farm_mode'] ?> </td>
                            <td> <?php echo $receiptDecode['monthCycle'] * 30 ?> days</td>
                            <td> <?php echo $trans->addDate($receiptDecode['dateInvested'], '0') ?> </td>
                            <td> <?php echo $trans->addDate($receiptDecode['dateInvested'], $receiptDecode['monthCycle'] * 30) ?> </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>

                <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                  <div class="table-responsive w-100">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                              <th>Description</th>
                              <th>Amount (&#x20A6;)</th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr class="text-left">
                            <td> <?php echo $receiptDecode['farm_mode'] ?> </td>
                            <td><?php echo number_format($receiptDecode['amount']) ?></td>
                          </tr>
                          <tr class="text-left">
                            <td> Gross Expected Profit </td>
                            <td><?php echo $algo->receipt($receiptDecode['farm_mode'], $receiptDecode['amount'], $receiptDecode['monthCycle'], 'gross_profit') ?></td>
                          </tr>
                          <tr class="text-left">
                            <td> (5% Withholding Tax on Profit) </td>
                            <td><?php echo $algo->receipt($receiptDecode['farm_mode'], $receiptDecode['amount'], $receiptDecode['monthCycle'], 'tax_on_profit') ?></td>
                          </tr>
                          <tr class="text-left">
                            <td> Net Expected Profit </td>
                            <td><?php echo $algo->receipt($receiptDecode['farm_mode'], $receiptDecode['amount'], $receiptDecode['monthCycle'], 'net_profit') ?></td>
                          </tr>
                          <tr class="text-left">
                            <td> <strong>Total Amount</strong> </td>
                            <td><?php echo $algo->receipt($receiptDecode['farm_mode'], $receiptDecode['amount'], $receiptDecode['monthCycle'], 'total_amount') ?></td>
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
                                  <td class="text-success text-right"> &#x20a6; <?php echo number_format($receiptDecode['amount']) ?></td>
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
    </div>
  </div>

  <!-- core:js -->
  <script src="<?php echo BASEPATH . 'assets/vendors/core/core.js'?>"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="<?php echo BASEPATH . 'assets/vendors/owl.carousel/owl.carousel.min.js'?>"></script>
  <script src="<?php echo BASEPATH . 'assets/vendors/jquery-mousewheel/jquery.mousewheel.js'?>"></script>
  <!-- end plugin js for this page -->
  <!-- custom js for this page -->
  <script src="<?php echo BASEPATH . 'assets/js/carousel.js'?>"></script>
  <!-- end custom js for this page -->
  <!-- inject:js -->
  <script src="<?php echo BASEPATH . 'assets/vendors/feather-icons/feather.min.js'?>"></script>
  <script src="<?php echo BASEPATH . 'assets/js/template.js'?>"></script>
  <!-- Optional:  polyfill for ES6 Promises for IE11 and Android browser -->
  <script src="<?php echo BASEPATH . 'assets/vendors/promise-polyfill/polyfill.min.js'?>"></script> 
  <script src="<?php echo BASEPATH . 'assets/vendors/sweetalert2/sweetalert2.min.js'?>"></script>
  <!-- endinject -->
  <!-- custom js for this page -->
  <script src="<?php echo BASEPATH . 'assets/js/dashboard.js'?>"></script>
  <script src="<?php echo BASEPATH . 'assets/js/datepicker.js'?>"></script>
  <!-- end custom js for this page -->
  <script src="<?php echo BASEPATH . 'assets/js/sweet-alert.js'?>"></script>
  <script src="<?php echo BASEPATH . 'assets/js/custom.js'?>"></script>
</body>
</html>