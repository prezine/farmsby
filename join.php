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
    $name = $user->retreiveRefID($token)['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo ($name) ? 'Join '.explode(" ", $name)[0].' on Farmsby' : 'Join Millions on Farmsby'; ?></title>
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
                                    <div class="auth-left-wrapper" style="background-image: url('../assets/images/green1.jpg')"></div>
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
                                            <input type="text" class="form-control" id="name" name="name" autocomplete="on" placeholder="Fullname">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="email" autocomplete="on" name="email" placeholder="Email" required="require">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputSelect1"> How did you hear about us?</label>
                                            <select name="how_did_you_hear" class="form-control">
                                                    <option>How did you hear about us?</option>
                                                    <option>Community Center/Library</option>
                                                    <option>Email from Farmsby</option>
                                                    <option>Radio Adverts/ Session</option>
                                                    <option>Employer</option>
                                                    <option>Event</option>
                                                    <option>Facebook/ Twitter/ Instagram</option>
                                                    <option>Family</option>
                                                    <option>Marketer</option>
                                                    <option>Friend</option>
                                                    <option>Google search</option>
                                                    <option>Brochure</option>
                                                    <option>Leaflet/ Flyer</option>
                                                    <option>Local newspaper advert</option>
                                                    <option>Newspaper/ magazine article</option>
                                                    <option>A Billboard</option>
                                                    <option>Poster</option>
                                                    <option>Prospectus</option>
                                                    <option>School teacher/ Careers advisor</option>
                                                    <option>Bus advert</option>
                                                    <option>YouTube advert</option>
                                            </select>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            On clicking signup, you agree to our <a href="terms">terms of services</a>
                                        </div>
                                        <input type="hidden" name="refID" value="<?php echo $refID ?>">
                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0">Sign up</button>
                                            <button type="button" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                                            <i class="btn-icon-prepend" data-feather="facebook"></i>
                                            Sign up with facebook
                                            </button>
                                        </div>
                                        <a href="<?php echo BASEPATH . 'login'?>" class="d-block mt-3 text-muted">Already a user? Sign in</a>
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
    <script src="<?php echo BASEPATH . 'assets/js/app/fb.js' ?>"></script>
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
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0&appId=1764963443768629&autoLogAppEvents=1"></script>
    <fb:login-button 
      scope="public_profile,email"
      onlogin="checkLoginState();">
    </fb:login-button>
</body>
</html>