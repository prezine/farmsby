<?php  
  session_start();
  include_once 'app/connect.php';
  include_once 'app/controller/Farmsby.php';
  include_once 'app/controller/Database.php';
  include_once 'app/controller/Transaction.php';
  include_once 'app/controller/Algorithm.php';
  include_once 'app/controller/User.php';
  $farmsby = new Farmsby();
  $user = new Users($conn);
  $algorithm = new Algorithm($conn);
  $trans = new Transaction($conn);
  include_once 'app/model/userdata.php';
  $transactionData = $trans->getTable();
  $transactDecode = json_decode($transactionData, true);
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
  <title>Farmsby | Transactions</title>
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
<body oncontextmenu="return false;">
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
                <?php  
                  if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                  }
                ?>
                <h6 class="card-title">All Transactions</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Transaction Reference</th>
                        <th>Investment type</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Profit</th>
                        <th>Investment Date</th>
                        <th>Manage</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php  
                        if ($transactDecode !== NULL) {
                          foreach ($transactDecode as $td) {
                            echo 
                            '<tr>
                              <td><a href="./receipt/'. $td['transaction_ref'] .'" target="_blank">'. $td['transaction_ref'] .'</a></td>
                              <td>'. $td['farm_mode'] .'</td>
                              <td>'. number_format($td['amount']) .' NGN</td>
                              <td>'. $trans->transactionStatus($td['status']) .'</td>
                              <td>
                                '. $algorithm->calcProfit($td['amount'], $td['dateInvested'], $trans->typeToPercent($td['farm_mode'])) .'
                                NGN
                              </td>
                              <td>'. $farmsby->time_elapsed_string($td['dateInvested']) .'</td>
                              <td>
                                  <button type="button" '. $trans->buttonController($td['status']) .' class="btn btn-primary btn-icon-text toggleWithdraw" data-toggle="modal" data-id="'. $td['investID'] .'" data-profit="'. $algorithm->calcProfit($td['amount'], $td['dateInvested'], $trans->typeToPercent($td['farm_mode'])) .'" data-target="#withdraw">
                                    Request withdrawal
                                    <i class="btn-icon-append" data-feather="credit-card"></i>
                                  </button>
                              </td>
                            </tr>';
                          } 
                        } else {
                          echo
                          '</tbody></table>
                          <div class="align-items-center text-center">
                          <img src="assets/images/no_transaction.png" style="width: 400px">
                          <h4> :( No Transaction Record </h4>
                          <a href="./invest" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                            <i class="btn-icon-prepend" data-feather="download-cloud"></i>
                            Start a new Investment
                          </a>
                          </div>';
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="withdraw" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <input type="hidden" class="investID" value="">
              <input type="hidden" class="yourProfit" value="">
              <button type="button" class="btn btn-primary btn-block withdraw" data-state="1" data-baseurl="<?php echo BASEPATH ?>">Withdraw profit only</button>
              <button type="button" class="btn btn-success btn-block withdraw" data-state="2" data-baseurl="<?php echo BASEPATH ?>">Withdraw profit + capital</button>
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
  <script src="assets/js/app/pay.js"></script>
  <script src="assets/js/app/withdraw.js"></script>
  <script src="assets/js/app/security.js"></script>
</body>
</html>    