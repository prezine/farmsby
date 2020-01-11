<?php  
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Log in</title>
	<!-- core:css -->
	<link rel="stylesheet" href="assets/vendors/core/core.css">
	<!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/sweetalert2/sweetalert2.min.css">
    <!-- end plugin css for this page -->
  	<!-- inject:css -->
	<link rel="stylesheet" href="assets/fonts/feather-font/css/iconfont.css">
	<!-- endinject -->
  <!-- Layout styles -->  
	<link rel="stylesheet" href="assets/css/demo_1/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>
<body>
	<div class="main-wrapper">
		<div class="page-wrapper full-page" style="background-color: #ffffff">
			<div class="d-flex align-items-center justify-content-center">

				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card" style="box-shadow: none;border: none;">
							<div class="row">
                                <div class="col-md-12">
                                    <a href="./">
                                        <img src="assets/images/logo.png" style="width:150px;display:block;margin:auto;">
                                    </a>
                                    <img src="assets/images/success1.png" style="width: 100%">
                                    <a href="./" class="btn btn-primary mr-2 mb-2 mb-md-0" style="display:block;margin:auto;">Go back home</a>
                                </div>
                            </div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- core:js -->
	<script src="assets/vendors/core/core.js"></script>
	<!-- endinject -->
    <!-- plugin js for this page -->
    <script src="assets/vendors/sweetalert2/sweetalert2.min.js"></script>
    <script src="assets/vendors/promise-polyfill/polyfill.min.js"></script> <!-- Optional:  polyfill for ES6 Promises for IE11 and Android browser -->
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="assets/vendors/feather-icons/feather.min.js"></script>
	<script src="assets/js/template.js"></script>
	<!-- endinject -->
    <!-- custom js for this page -->
    <script src="assets/js/sweet-alert.js"></script>
    <script src="assets/js/auth.js"></script>
    <!-- end custom js for this page -->
</body>
</html>