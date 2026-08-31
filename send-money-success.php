<?php
require __DIR__ . '/app/bootstrap.php';
Auth::requireLogin();

$transfer = $_SESSION['last_transfer'] ?? null;
if (!$transfer) {
    redirect('dashboard');
}
unset($_SESSION['last_transfer']);
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
<link rel="stylesheet" type="text/css" href="vendor/bootstrap-select/css/bootstrap-select.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/currency-flags/css/currency-flags.min.css" />
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
</head>
<body>

<!-- Preloader -->
<div id="preloader">
  <div data-loader="dual-ring"></div>
</div>
<!-- Preloader End --> 

<!-- Document Wrapper   
============================================= -->
<div id="main-wrapper"> 
  <!-- Header
  ============================================= -->
  <header id="header">
    <div class="container">
      <div class="header-row">
        <div class="header-column justify-content-start"> 
          <!-- Logo
          ============================= -->
          <div class="logo"> <a class="d-flex" href="index" title="Tea - HTML Template"><img src="images/logo.png" alt="Tea" /></a> </div>
          <!-- Logo end --> 
          <!-- Collapse Button
          ============================== -->
          <!--<buton class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav"> <span></span> <span></span> <span></span> </button>-->
          <!-- Collapse Button end --> 
          
          <!-- Primary Navigation
          ============================== -->
          <!--<nav class="primary-menu navbar navbar-expand-lg">
            <div id="header-nav" class="collapse navbar-collapse">
              <ul class="navbar-nav mr-auto">
                <li><a href="dashboard">Dashboard</a></li>
                <li><a href="transactions">Transactions</a></li>
                <li class="active"><a href="send-money">Send/Request</a></li>
                <li><a href="help">Help</a></li>
                <li class="dropdown"> <a class="dropdown-toggle" href="#">Features</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Headers</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index">Light Version (Default)</a></li>
                        <li><a class="dropdown-item" href="feature-header-dark">Dark Version</a></li>
                        <li><a class="dropdown-item" href="feature-header-primary">Primary Version</a></li>
                        <li><a class="dropdown-item" href="index-2">Transparent Version</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Navigation DropDown</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index">Light Version (Default)</a></li>
                        <li><a class="dropdown-item" href="feature-navigation-dropdown-dark">Dark Version</a></li>
                        <li><a class="dropdown-item" href="feature-navigation-dropdown-primary">Primary Version</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Second Navigation</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="send-money">Default Version</a></li>
                        <li><a class="dropdown-item" href="deposit-money">Alternate Version</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Page Headers</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="feature-page-header-left-alignment">Left Alignment</a></li>
                        <li><a class="dropdown-item" href="feature-page-header-center-alignment">Center Alignment</a></li>
                        <li><a class="dropdown-item" href="feature-page-header-light">Light Version</a></li>
                        <li><a class="dropdown-item" href="feature-page-header-dark">Dark Version</a></li>
                        <li><a class="dropdown-item" href="feature-page-header-primary">Primary Version</a></li>
                        <li><a class="dropdown-item" href="feature-page-header-custom-background">Custom Background</a></li>
                        <li><a class="dropdown-item" href="feature-page-header-custom-background-with-transparent-header">Custom Background 2</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Footer</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index">Light Version Default</a></li>
                        <li><a class="dropdown-item" href="index-2">Alternate Version</a></li>
                        <li><a class="dropdown-item" href="feature-footer-dark">Dark Version</a></li>
                        <li><a class="dropdown-item" href="feature-footer-primary">Primary Version</a></li>
                      </ul>
                    </li>
                    <li><a class="dropdown-item" href="feature-layout-boxed">Layout Boxed</a></li>
                  </ul>
                </li>
                <li class="dropdown dropdown-mega"> <a class="dropdown-toggle" href="#">Pages</a>
                  <ul class="dropdown-menu">
                    <li>
                      <div class="dropdown-mega-content">
                        <div class="row">
                          <div class="col-lg-3"> <span class="sub-title">Homepage</Span>
                            <ul class="dropdown-mega-submenu">
                              <li><a class="dropdown-item" href="index">Home Version 1</a></li>
                              <li><a class="dropdown-item" href="index-2">Home Version 2</a></li>
                              <li><a class="dropdown-item" href="landing-page-send">Landing Page - Send</a></li>
                              <li><a class="dropdown-item" href="landing-page-receive">Landing Page - Receive</a></li>
                            </ul>
                          </div>
                          <div class="col-lg-3"> <span class="sub-title">Account</Span>
                            <ul class="dropdown-mega-submenu">
                              <li><a class="dropdown-item" href="profile">My Profile</a></li>
                              <li><a class="dropdown-item" href="profile-cards-and-bank-accounts">Cards & Bank Accounts</a></li>
                              <li><a class="dropdown-item" href="profile-notifications">Notifications</a></li>
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Login</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="login">Login Page 1</a></li>
                                  <li><a class="dropdown-item" href="login-2">Login Page 2</a></li>
                                  <li><a class="dropdown-item" href="login-3">Login Page 3</a></li>
                                </ul>
                              </li>
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Signup</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="signup">Signup Page 1</a></li>
                                  <li><a class="dropdown-item" href="signup-2">Signup Page 2 </a></li>
                                  <li><a class="dropdown-item" href="signup-3">Signup Page 3 </a></li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-3"> <span class="sub-title">Dashboard</Span>
                            <ul class="dropdown-mega-submenu">
                              <li><a class="dropdown-item" href="dashboard">Dashboard</a></li>
                              <li><a class="dropdown-item" href="transactions">Transactions</a></li>
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Send Money</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="send-money">Send Money</a></li>
                                  <li><a class="dropdown-item" href="send-money-confirm">Send Money Confirm</a></li>
                                  <li><a class="dropdown-item" href="send-money-success">Send Money Success </a></li>
                                </ul>
                              </li>
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Request Money</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="request-money">Request Money</a></li>
                                  <li><a class="dropdown-item" href="request-money-confirm">Request Money Confirm</a></li>
                                  <li><a class="dropdown-item" href="request-money-success">Request Money Success </a></li>
                                </ul>
                              </li>
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Deposit Money</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="deposit-money">Deposit Money</a></li>
                                  <li><a class="dropdown-item" href="deposit-money-confirm">Deposit Money Confirm</a></li>
                                  <li><a class="dropdown-item" href="deposit-money-success">Deposit Money Success </a></li>
                                </ul>
                              </li>
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Withdraw Money</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="withdraw-money">Withdraw Money</a></li>
                                  <li><a class="dropdown-item" href="withdraw-money-confirm">Withdraw Money Confirm</a></li>
                                  <li><a class="dropdown-item" href="withdraw-money-success">Withdraw Money Success </a></li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-3"> <span class="sub-title">Others</Span>
                            <ul class="dropdown-mega-submenu">
                              <li><a class="dropdown-item" href="about-us">About Us</a></li>
                              <li><a class="dropdown-item" href="fees">Fees</a></li>
                              <li><a class="dropdown-item" href="help">Help</a></li>
                              <li><a class="dropdown-item" href="contact-us">Contact Us</a></li>
                              <li><a class="dropdown-item" href="elements">Elements</a></li>
                              <li><a class="dropdown-item" href="elements-2">Elements 2</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>-->
          <button type="button" class="btn btn-primary btn-sm" style="padding: 0.5rem 0.3rem!important" onclick="location.replace('dashboard')">Dashboard</button>
          &nbsp;&nbsp;&nbsp;&nbsp;
          <button type="button" class="btn btn-secondary btn-sm" style="padding: 0.5rem 0.3rem!important" onclick="location.replace('logout')">Sign Out</button>
          <!-- Primary Navigation end --> 
        </div>
        <div class="header-column justify-content-end"> 
          <!-- Login & Signup Link
          ============================== -->
          <nav class="login-signup navbar navbar-expand">
            <ul class="navbar-nav">
              <li><a href="#"></a> </li>
              <li class="align-items-center h-auto ml-sm-3"><a class="btn btn-outline-primary shadow-none d-none d-sm-block" onclick="location.replace('logout')">Sign out</a></li>
            </ul>
          </nav>
          <!-- Login & Signup Link end --> 
        </div>
      </div>
    </div>
  </header>
  <!-- Header End --> 
  
  <!-- Secondary menu
  ============================================= -->
  <div class="bg-primary">
    <div class="container d-flex justify-content-center">
      <ul class="nav secondary-nav">
        <li class="nav-item"> <a class="nav-link active" href="send-money">Send</a></li>
        <li class="nav-item"> <a class="nav-link" href="#">Request</a></li>
      </ul>
    </div>
  </div>
  <!-- Secondary menu end --> 
  
  <!-- Content
  ============================================= -->
  <div id="content" class="py-4">
    <div class="container">
      <h2 class="font-weight-400 text-center mt-3 mb-4">Send Money</h2>
      <div class="row">
        <div class="col-md-8 col-lg-6 col-xl-5 mx-auto">
          <!-- Send Money Success
          ============================================= -->
		  <div class="bg-light shadow-sm rounded p-3 p-sm-4 mb-4">
          <div class="text-center my-5">
          <p class="text-center text-success text-20 line-height-07"><i class="fas fa-check-circle"></i></p>
          <p class="text-center text-success text-8 line-height-07">Success!</p>
          <p class="text-center text-4">Transactions Complete</p>
          </div>
          <p class="text-center text-3 mb-4">You've Succesfully sent <span class="text-4 font-weight-500">$<?= e(number_format((float) $transfer['amount_usd'], 2)) ?></span> to <span class="font-weight-500"><?= e($transfer['recipient_email']) ?></span>, See transaction details under <a href="dashboard">Activity</a>.</p>
            <button class="btn btn-primary btn-block" onclick="location.replace('send-money')">Send Money Again</button>
            <button class="btn btn-link btn-block" onclick="print()"><i class="fas fa-print"></i> Print</button> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Content end --> 
  
  <!-- Footer
  ============================================= -->
  <!--<footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg d-lg-flex align-items-center">
          <ul class="nav justify-content-center justify-content-lg-start text-3">
            <li class="nav-item"> <a class="nav-link active" href="#">About Us</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Support</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Help</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Careers</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Affiliate</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Fees</a></li>
          </ul>
        </div>
        <div class="col-lg d-lg-flex justify-content-lg-end mt-3 mt-lg-0">
          <ul class="social-icons justify-content-center">
            <li class="social-icons-facebook"><a data-toggle="tooltip" href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
            <li class="social-icons-twitter"><a data-toggle="tooltip" href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
            <li class="social-icons-google"><a data-toggle="tooltip" href="http://www.google.com/" target="_blank" title="Google"><i class="fab fa-google"></i></a></li>
            <li class="social-icons-youtube"><a data-toggle="tooltip" href="http://www.youtube.com/" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="footer-copyright pt-3 pt-lg-2 mt-2">
        <div class="row">
          <div class="col-lg">
            <p class="text-center text-lg-left mb-2 mb-lg-0">Copyright &copy; 2019 <a href="#">Tea</a>. All Rights Reserved.</p>
          </div>
          <div class="col-lg d-lg-flex align-items-center justify-content-lg-end">
            <ul class="nav justify-content-center">
              <li class="nav-item"> <a class="nav-link active" href="#">Security</a></li>
              <li class="nav-item"> <a class="nav-link" href="#">Terms</a></li>
              <li class="nav-item"> <a class="nav-link" href="#">Privacy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>-->
  <!-- Footer end --> 
  
</div>
<!-- Document Wrapper end --> 

<!-- Back to Top
============================================= --> 
<a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a> 

<!-- Script --> 
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>  
<script src="js/theme.js"></script>
</body>
</html>