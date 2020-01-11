<?php  
    session_start();
    include_once 'app/connect.php';
    include_once 'app/controller/Farmsby.php';
    include_once 'app/controller/Database.php';
    include_once 'app/controller/User.php';
    $user = new Users($conn);
    $rawToken = (isset($_GET['refToken'])) ? $_GET['refToken'] : 0 ;
    @list($token, $ext) = explode('.', $rawToken);
    $refID = $user->retreiveRefID($token)['userID'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Join Millions on Farmsby</title>
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
							<div class="row">
                                <div class="col-md-4 pr-md-0">
                                    <div class="auth-left-wrapper">

                                    </div>
                                </div>
                                <div class="col-md-8 pl-md-0">
                                    <div class="auth-form-wrapper px-4 py-5">
                                        <a href="index" class="noble-ui-logo d-block mb-2"><img src="<?php echo BASEPATH . 'assets/images/logo.png'?>" style="width: 150px"></a>
                                        <h5 class="text-muted font-weight-normal mb-4">Create a free account.</h5>
                                        <?php
                                            if (isset($_SESSION['msg'])) {
                                                echo $_SESSION['msg'];
                                                unset($_SESSION['msg']);
                                            }
                                        ?>
                                        <form class="forms-sample" action="<?php echo BASEPATH . 'app/model/join'?>" method="post">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Fullname</label>
                                            <input type="text" class="form-control" id="name" name="name" autocomplete="name" placeholder="Fullname">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" autocomplete="current-password" placeholder="Password">
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label">
                                            <input type="checkbox" id="remember" name="remember" class="form-check-input">
                                            Remember me
                                            </label>
                                        </div>
                                        <input type="hidden" name="refID" value="<?php echo $refID ?>">
                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0">Sign up</button>
                                            <button type="button" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                                            <i class="btn-icon-prepend" data-feather="twitter"></i>
                                            Sign up with twitter
                                            </button>
                                        </div>
                                        <a href="login" class="d-block mt-3 text-muted">Already a user? Sign in</a>
                                        </form>
                                    </div>
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
    <script src="<?php echo BASEPATH . 'assets/vendors/sweetalert2/sweetalert2.min.js'?>"></script>
    <script src="<?php echo BASEPATH . 'assets/vendors/promise-polyfill/polyfill.min.js'?>"></script> <!-- Optional:  polyfill for ES6 Promises for IE11 and Android browser -->
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="<?php echo BASEPATH . 'assets/vendors/feather-icons/feather.min.js'?>"></script>
	<script src="<?php echo BASEPATH . 'assets/js/template.js'?>"></script>
	<!-- endinject -->
    <script src="<?php echo BASEPATH . 'assets/js/sweet-alert.js'?>"></script>
    <script src="<?php echo BASEPATH . 'assets/js/app/auth.js'?>"></script>
    <script>
        $("#join").on('submit', function (event) {
            event.preventDefault();
            var url, jsonData, name, email, password, remember;
            name = $('#name').val();
            email = $('#email').val();
            password = $('#password').val();
            remember = $('#remember').val();
            url = 'app/model/join.php';
            jsonData = {
                'name' : name,
                'email' : email,
                'password' : password,
                'remember' : remember
            };
            const auth = new Auth(url, jsonData);
            //alert(JSON.stringify(jsonData));
            auth.join(JSON.stringify(jsonData));
        });
    </script>
</body>
</html>