<?php
require __DIR__ . '/app/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="images/favicon.png" rel="icon" />
<title>Tea Transfer - Money Transfer and Online Payments</title>
<meta name="description" content="This professional platform is for a Money Transfer and online payments purpose.">
<meta name="author" content="harnishdesign.net">

<!-- Web Fonts
============================================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Quicksand:300,300i,400,400i,500,500i,700,700i,900,900i' type='text/css'>

<!-- Stylesheet
============================================= -->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css" />
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="css/sweetalert.css" />
</head>
<body data-csrf-token="<?= e(Auth::csrfToken()) ?>">

<!-- Preloader -->
<div id="preloader">
  <div data-loader="dual-ring"></div>
</div>
<!-- Preloader End -->

<div id="main-wrapper" class="h-100">
  <div class="container-fluid px-0 h-100">
    <div class="row no-gutters h-100">
      <!-- Welcome Text
      ============================================= -->
      <div class="col-md-6">
        <div class="hero-wrap d-flex align-items-center h-100">
          <div class="hero-mask opacity-8 bg-primary"></div>
          <div class="hero-bg hero-bg-scroll" style="background-image:url('./images/bg/image-3.jpg');"></div>
          <div class="hero-content mx-auto w-100 h-100 d-flex flex-column">
            <div class="row no-gutters">
              <div class="col-10 col-lg-9 mx-auto">
                <div class="logo mt-5 mb-5 mb-md-0"> <a class="d-flex" href="index" title="Tea - HTML Template"><img src="images/logo-light.png" alt="Tea"></a> </div>
              </div>
            </div>
              <div class="row no-gutters my-auto">
                <div class="col-10 col-lg-9 mx-auto">
                  <h1 class="text-11 text-white mb-4">Welcome back!</h1>
                  <p class="text-4 text-white line-height-4 mb-5">We are glad to see you again! Instant deposits, withdrawals & payouts trusted by millions worldwide.</p>
                </div>
              </div>
          </div>
        </div>
      </div>
      <!-- Welcome Text End -->
      
      <!-- Login Form
      ============================================= -->
      <div class="col-md-6 d-flex align-items-center">
        <div class="container my-4">
          <div class="row">
            <div class="col-11 col-lg-9 col-xl-8 mx-auto">
              <h3 class="font-weight-400 mb-4">Log In</h3>
              <!--<form id="loginForm" method="post">-->
                <div class="form-group">
                  <label for="emailAddress">Email Address</label>
                  <input type="email" class="form-control" id="email" required placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                  <label for="loginPassword">Password</label>
                  <input type="password" class="form-control" id="password" required placeholder="Enter Password">
                </div>
                <div class="row">
                  <div class="col-sm">
                    <div class="form-check custom-control custom-checkbox">
                      <input id="remember-me" name="remember" class="custom-control-input" type="checkbox">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>
                  <div class="col-sm text-right"><a class="btn-link" href="#">Forgot Password ?</a></div>
                </div>
                <button id="submit" class="btn btn-primary btn-block my-4" type="submit">Login</button>
                <button id="processing" style="display: none" class="btn btn-primary btn-block my-4" type="submit">Processing</button>
              <!--</form>-->
              <p class="text-3 text-center text-muted">Don't have an account? <a class="btn-link" href="signup">Sign Up</a></p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login Form End -->
    </div>
  </div>
</div>

<!-- Back to Top
============================================= --> 
<a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a> 

<!-- Script -->
<script type="text/javascript" src="js/sweetalert.init.js"></script>
<script type="text/javascript" src="js/sweetalert.min.js"></script>
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="js/theme.js"></script>
<script type="text/javascript">
  $('#submit').on('click', function(){
        var email = $('#email').val();
        var password = $('#password').val();
        if (email == '') {
            swal("Oops", "Please fill all fields", "info");
            return;
        }
        else if (password == '') {
            swal("Oops", "Please fill all fields", "info");
            return;
        }
        else{
            $('#submit').hide();
            $('#processing').show();
            $.ajax({
                url: 'log-action',
                type: 'POST',
                data: {
                    'auth' : true,
                    'csrf_token' : $('body').data('csrf-token'),
                    'email' : email,
                    'password' : password
                },
                success: function(data){
                    if (data=='Authorized') {
                        swal("Good job", "Login successful", "success");
                        $('#submit').show();
                        $('#processing').hide();
                        setTimeout(function () {
                          location.replace('dashboard');
                        }, 2000);
                        
                    }
                    else{
                        swal("Oops", data, "info");
                        $('#submit').show();
                        $('#processing').hide();
                    }
                },
                error: function (data) {
                    swal("Oops", "Connection error", "info");
                    $('#submit').show();
                    $('#processing').hide();
                }
            });
        }
        
  })
</script>
</body>
</html>