<?php require __DIR__ . '/app/bootstrap.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="images/favicon.png" rel="icon" />
<title>Tea Transfer - Money Transfer and Online Payments</title>
<meta name="description" content="This professional platform is for a Money Transfer and online payments purpose.">
<meta name="author" content="TeaTheDeveloper">

<!-- Web Fonts
============================================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i' type='text/css'>

<!-- Stylesheet
============================================= -->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/bootstrap-select/css/bootstrap-select.css" />
<link rel="stylesheet" type="text/css" href="vendor/currency-flags/css/currency-flags.min.css" />
<link rel="stylesheet" type="text/css" href="vendor/owl.carousel/assets/owl.carousel.min.css" />
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
  <header id="header" class="bg-transparent header-text-light">
    <div class="container">
      <div class="header-row">
        <div class="header-column justify-content-start"> 
          <!-- Logo
          ============================= -->
          <div class="logo"> <a class="d-flex" href="index" title="Tea - HTML Template"><img src="images/logo-light.png" alt="Tea" /></a> </div>
          <!-- Logo end --> 
          <!-- Collapse Button
          ============================== -->
          <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav"> <span></span> <span></span> <span></span> </button>-->
          <!-- Collapse Button end --> 
          
          <!-- Primary Navigation
          ============================== -->
          <!--<nav class="primary-menu navbar navbar-expand-lg">
            <div id="header-nav" class="collapse navbar-collapse">
              <ul class="navbar-nav mr-auto">
                <li><a href="landing-page-send">Send</a></li>
                <li><a href="landing-page-receive">Receive</a></li>
				<li><a href="about-us">About Us</a></li>
                <li><a href="fees">Fees</a></li>
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
          <!-- Primary Navigation end --> 
        </div>
        <div class="header-column justify-content-end"> 
          <!-- Login & Signup Link
          ============================== -->
          <nav class="login-signup navbar navbar-expand">
            <ul class="navbar-nav">
              <?php if (Auth::check()): ?>
                  <li><a href="dashboard">Dashboard</a> </li>
              <?php else: ?>
                  <li><a href="login">Login</a> </li>
              <?php endif;?>
              <li class="align-items-center h-auto ml-sm-3"><a class="btn btn-primary d-none d-sm-block" href="signup">Sign Up</a></li>
            </ul>
          </nav>
          <!-- Login & Signup Link end --> 
        </div>
      </div>
    </div>
  </header>
  <!-- Header End --> 
  
  <!-- Content
  ============================================= -->
  <div id="content">
    
    <!-- Send/Request Money
    ============================================= -->
    <section class="hero-wrap section shadow-md pb-4">
      <div class="hero-mask opacity-7 bg-dark"></div>
      <div class="hero-bg" style="background-image:url('images/bg/image-5.jpg');"></div>
      <div class="hero-content py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-xl-7 my-auto text-center text-lg-left pb-4 pb-lg-0">
            <h2 class="text-14 font-weight-400 text-white mb-4">The Secure,<br class="d-none d-xl-block">
              easiest and fastest <br class="d-none d-xl-block">
              way to transfer money.</h2>
            <p class="text-4 text-white mb-4">Send & Receive money to your loved ones in minutes with great rates and low
              fees. Over 180 countries and 30 currencies supported.</p>
            <!--<a href="#" class="btn-link text-4">See more details<i class="fas fa-chevron-right text-2 ml-2"></i></a>-->
          </div>
          <div class="col-lg-6 col-xl-5 my-auto">
            <ul class="nav nav-tabs nav-justified bg-white style-5 rounded-top" id="myTab" role="tablist">
              <li class="nav-item"> <a class="nav-link active" id="send-money-tab" data-toggle="tab" href="#send-money" role="tab" aria-controls="send-money" aria-selected="true">Send Money</a> </li>
              <li class="nav-item"> <a class="nav-link" id="request-money-tab" data-toggle="tab" href="#request-money" role="tab" aria-controls="request-money" aria-selected="false">Request Money</a> </li>
            </ul>
            <div class="tab-content p-4 bg-white rounded-bottom" id="myTabContent">
              <div class="tab-pane fade show active" id="send-money" role="tabpanel" aria-labelledby="send-money-tab">
                <form id="form-send-money" method="post" action="send-money">
                  <div class="form-group">
                    <label for="youSend">You Send</label>
                    <div class="input-group">
                      <div class="input-group-prepend"> <span class="input-group-text">$</span> </div>
                      <input type="number" step="0.01" class="form-control" data-bv-field="youSend" id="youSend" placeholder="0.00">
                      <div class="input-group-append"> <span class="input-group-text p-0">
                        <select id="youSendCurrency" data-style="custom-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                          <optgroup label="Popular Currency">
                          <option data-icon="currency-flag currency-flag-usd mr-1" data-subtext="United States dollar" selected="selected" value="">USD</option>
                          <option data-icon="currency-flag currency-flag-eur mr-1" data-subtext="Euro" value="">EUR</option>
                          <option data-icon="currency-flag currency-flag-gbp mr-1" data-subtext="Nigerian naira" value="">GBP</option>
                          </optgroup>
                          <option data-divider="true"></option>
                          <optgroup label="Other Currency">
                          <option data-icon="currency-flag currency-flag-aed mr-1" data-subtext="United Arab Emirates dirham" value="">AED</option>
                          <option data-icon="currency-flag currency-flag-ars mr-1" data-subtext="Argentine peso" value="">ARS</option>
                          <option data-icon="currency-flag currency-flag-aud mr-1" data-subtext="Australian dollar" value="">AUD</option>
                          <option data-icon="currency-flag currency-flag-bdt mr-1" data-subtext="Bangladeshi taka" value="">BDT</option>
                          <option data-icon="currency-flag currency-flag-bgn mr-1" data-subtext="Bulgarian lev" value="">BGN</option>
                          <option data-icon="currency-flag currency-flag-brl mr-1" data-subtext="Brazilian real" value="">BRL</option>
                          <option data-icon="currency-flag currency-flag-cad mr-1" data-subtext="Canadian dollar" value="">CAD</option>
                          <option data-icon="currency-flag currency-flag-chf mr-1" data-subtext="Swiss franc" value="">CHF</option>
                          <option data-icon="currency-flag currency-flag-clp mr-1" data-subtext="Chilean peso" value="">CLP</option>
                          <option data-icon="currency-flag currency-flag-cny mr-1" data-subtext="Chinese yuan" value="">CNY</option>
                          <option data-icon="currency-flag currency-flag-czk mr-1" data-subtext="Czech koruna" value="">CZK</option>
                          <option data-icon="currency-flag currency-flag-dkk mr-1" data-subtext="Danish krone" value="">DKK</option>
                          <option data-icon="currency-flag currency-flag-egp mr-1" data-subtext="Egyptian pound" value="">EGP</option>
                          <option data-icon="currency-flag currency-flag-eur mr-1" data-subtext="Euro" value="">EUR</option>
                          <option data-icon="currency-flag currency-flag-gbp mr-1" data-subtext="British pound" value="">GBP</option>
                          <option data-icon="currency-flag currency-flag-gel mr-1" data-subtext="Georgian lari" value="">GEL</option>
                          <option data-icon="currency-flag currency-flag-ghs mr-1" data-subtext="Ghanaian cedi" value="">GHS</option>
                          <option data-icon="currency-flag currency-flag-hkd mr-1" data-subtext="Hong Kong dollar" value="">HKD</option>
                          <option data-icon="currency-flag currency-flag-hrk mr-1" data-subtext="Croatian kuna" value="">HRK</option>
                          <option data-icon="currency-flag currency-flag-huf mr-1" data-subtext="Hungarian forint" value="">HUF</option>
                          <option data-icon="currency-flag currency-flag-idr mr-1" data-subtext="Indonesian rupiah" value="">IDR</option>
                          <option data-icon="currency-flag currency-flag-ils mr-1" data-subtext="Israeli shekel" value="">ILS</option>
                          <option data-icon="currency-flag currency-flag-inr mr-1" data-subtext="Indian rupee" value="">INR</option>
                          <option data-icon="currency-flag currency-flag-jpy mr-1" data-subtext="Japanese yen" value="">JPY</option>
                          <option data-icon="currency-flag currency-flag-kes mr-1" data-subtext="Kenyan shilling" value="">KES</option>
                          <option data-icon="currency-flag currency-flag-krw mr-1" data-subtext="South Korean won" value="">KRW</option>
                          <option data-icon="currency-flag currency-flag-lkr mr-1" data-subtext="Sri Lankan rupee" value="">LKR</option>
                          <option data-icon="currency-flag currency-flag-mad mr-1" data-subtext="Moroccan dirham" value="">MAD</option>
                          <option data-icon="currency-flag currency-flag-mxn mr-1" data-subtext="Mexican peso" value="">MXN</option>
                          <option data-icon="currency-flag currency-flag-myr mr-1" data-subtext="Malaysian ringgit" value="">MYR</option>
                          <option data-icon="currency-flag currency-flag-ngn mr-1" data-subtext="Nigerian naira" value="">NGN</option>
                          <option data-icon="currency-flag currency-flag-nok mr-1" data-subtext="Norwegian krone" value="">NOK</option>
                          <option data-icon="currency-flag currency-flag-npr mr-1" data-subtext="Nepalese rupee" value="">NPR</option>
                          <option data-icon="currency-flag currency-flag-nzd mr-1" data-subtext="New Zealand dollar" value="">NZD</option>
                          <option data-icon="currency-flag currency-flag-pen mr-1" data-subtext="Peruvian nuevo sol" value="">PEN</option>
                          <option data-icon="currency-flag currency-flag-php mr-1" data-subtext="Philippine peso" value="">PHP</option>
                          <option data-icon="currency-flag currency-flag-pkr mr-1" data-subtext="Pakistani rupee" value="">PKR</option>
                          <option data-icon="currency-flag currency-flag-pln mr-1" data-subtext="Polish złoty" value="">PLN</option>
                          <option data-icon="currency-flag currency-flag-ron mr-1" data-subtext="Romanian leu" value="">RON</option>
                          <option data-icon="currency-flag currency-flag-rub mr-1" data-subtext="Russian rouble" value="">RUB</option>
                          <option data-icon="currency-flag currency-flag-sek mr-1" data-subtext="Swedish krona" value="">SEK</option>
                          <option data-icon="currency-flag currency-flag-sgd mr-1" data-subtext="Singapore dollar" value="">SGD</option>
                          <option data-icon="currency-flag currency-flag-thb mr-1" data-subtext="Thai baht" value="">THB</option>
                          <option data-icon="currency-flag currency-flag-try mr-1" data-subtext="Turkish lira" value="">TRY</option>
                          <option data-icon="currency-flag currency-flag-uah mr-1" data-subtext="Ukrainian hryvnia" value="">UAH</option>
                          <option data-icon="currency-flag currency-flag-ugx mr-1" data-subtext="Ugandan shilling" value="">UGX</option>
                          <option data-icon="currency-flag currency-flag-vnd mr-1" data-subtext="Vietnamese dong" value="">VND</option>
                          <option data-icon="currency-flag currency-flag-zar mr-1" data-subtext="South African rand" value="">ZAR</option>
                          </optgroup>
                        </select>
                        </span> </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="recipientGets">Recipient Gets</label>
                    <div class="input-group">
                      <div class="input-group-prepend"> <span class="input-group-text">$</span> </div>
                      <input type="number" step="0.01" class="form-control" data-bv-field="recipientGets" id="recipientGets" placeholder="0.00">
                      <div class="input-group-append"> <span class="input-group-text p-0">
                        <select id="recipientCurrency" data-style="custom-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                          <optgroup label="Popular Currency">
                          <option data-icon="currency-flag currency-flag-gbp mr-1" data-subtext="British pound" selected="selected" value="">GBP</option>
                          <option data-icon="currency-flag currency-flag-usd mr-1" data-subtext="United States dollar" value="">USD</option>
                          <option data-icon="currency-flag currency-flag-eur mr-1" data-subtext="Euro" value="">EUR</option>
                          </optgroup>
                          <option data-divider="true"></option>
                          <optgroup label="Other Currency">
                          <option data-icon="currency-flag currency-flag-aed mr-1" data-subtext="United Arab Emirates dirham" value="">AED</option>
                          <option data-icon="currency-flag currency-flag-ars mr-1" data-subtext="Argentine peso" value="">ARS</option>
                          <option data-icon="currency-flag currency-flag-aud mr-1" data-subtext="Australian dollar" value="">AUD</option>
                          <option data-icon="currency-flag currency-flag-bdt mr-1" data-subtext="Bangladeshi taka" value="">BDT</option>
                          <option data-icon="currency-flag currency-flag-bgn mr-1" data-subtext="Bulgarian lev" value="">BGN</option>
                          <option data-icon="currency-flag currency-flag-brl mr-1" data-subtext="Brazilian real" value="">BRL</option>
                          <option data-icon="currency-flag currency-flag-cad mr-1" data-subtext="Canadian dollar" value="">CAD</option>
                          <option data-icon="currency-flag currency-flag-chf mr-1" data-subtext="Swiss franc" value="">CHF</option>
                          <option data-icon="currency-flag currency-flag-clp mr-1" data-subtext="Chilean peso" value="">CLP</option>
                          <option data-icon="currency-flag currency-flag-cny mr-1" data-subtext="Chinese yuan" value="">CNY</option>
                          <option data-icon="currency-flag currency-flag-czk mr-1" data-subtext="Czech koruna" value="">CZK</option>
                          <option data-icon="currency-flag currency-flag-dkk mr-1" data-subtext="Danish krone" value="">DKK</option>
                          <option data-icon="currency-flag currency-flag-egp mr-1" data-subtext="Egyptian pound" value="">EGP</option>
                          <option data-icon="currency-flag currency-flag-eur mr-1" data-subtext="Euro" value="">EUR</option>
                          <option data-icon="currency-flag currency-flag-gbp mr-1" data-subtext="British pound" value="">GBP</option>
                          <option data-icon="currency-flag currency-flag-gel mr-1" data-subtext="Georgian lari" value="">GEL</option>
                          <option data-icon="currency-flag currency-flag-ghs mr-1" data-subtext="Ghanaian cedi" value="">GHS</option>
                          <option data-icon="currency-flag currency-flag-hkd mr-1" data-subtext="Hong Kong dollar" value="">HKD</option>
                          <option data-icon="currency-flag currency-flag-hrk mr-1" data-subtext="Croatian kuna" value="">HRK</option>
                          <option data-icon="currency-flag currency-flag-huf mr-1" data-subtext="Hungarian forint" value="">HUF</option>
                          <option data-icon="currency-flag currency-flag-idr mr-1" data-subtext="Indonesian rupiah" value="">IDR</option>
                          <option data-icon="currency-flag currency-flag-ils mr-1" data-subtext="Israeli shekel" value="">ILS</option>
                          <option data-icon="currency-flag currency-flag-inr mr-1" data-subtext="Indian rupee" value="">INR</option>
                          <option data-icon="currency-flag currency-flag-jpy mr-1" data-subtext="Japanese yen" value="">JPY</option>
                          <option data-icon="currency-flag currency-flag-kes mr-1" data-subtext="Kenyan shilling" value="">KES</option>
                          <option data-icon="currency-flag currency-flag-krw mr-1" data-subtext="South Korean won" value="">KRW</option>
                          <option data-icon="currency-flag currency-flag-lkr mr-1" data-subtext="Sri Lankan rupee" value="">LKR</option>
                          <option data-icon="currency-flag currency-flag-mad mr-1" data-subtext="Moroccan dirham" value="">MAD</option>
                          <option data-icon="currency-flag currency-flag-mxn mr-1" data-subtext="Mexican peso" value="">MXN</option>
                          <option data-icon="currency-flag currency-flag-myr mr-1" data-subtext="Malaysian ringgit" value="">MYR</option>
                          <option data-icon="currency-flag currency-flag-ngn mr-1" data-subtext="Nigerian naira" value="">NGN</option>
                          <option data-icon="currency-flag currency-flag-nok mr-1" data-subtext="Norwegian krone" value="">NOK</option>
                          <option data-icon="currency-flag currency-flag-npr mr-1" data-subtext="Nepalese rupee" value="">NPR</option>
                          <option data-icon="currency-flag currency-flag-nzd mr-1" data-subtext="New Zealand dollar" value="">NZD</option>
                          <option data-icon="currency-flag currency-flag-pen mr-1" data-subtext="Peruvian nuevo sol" value="">PEN</option>
                          <option data-icon="currency-flag currency-flag-php mr-1" data-subtext="Philippine peso" value="">PHP</option>
                          <option data-icon="currency-flag currency-flag-pkr mr-1" data-subtext="Pakistani rupee" value="">PKR</option>
                          <option data-icon="currency-flag currency-flag-pln mr-1" data-subtext="Polish złoty" value="">PLN</option>
                          <option data-icon="currency-flag currency-flag-ron mr-1" data-subtext="Romanian leu" value="">RON</option>
                          <option data-icon="currency-flag currency-flag-rub mr-1" data-subtext="Russian rouble" value="">RUB</option>
                          <option data-icon="currency-flag currency-flag-sek mr-1" data-subtext="Swedish krona" value="">SEK</option>
                          <option data-icon="currency-flag currency-flag-sgd mr-1" data-subtext="Singapore dollar" value="">SGD</option>
                          <option data-icon="currency-flag currency-flag-thb mr-1" data-subtext="Thai baht" value="">THB</option>
                          <option data-icon="currency-flag currency-flag-try mr-1" data-subtext="Turkish lira" value="">TRY</option>
                          <option data-icon="currency-flag currency-flag-uah mr-1" data-subtext="Ukrainian hryvnia" value="">UAH</option>
                          <option data-icon="currency-flag currency-flag-ugx mr-1" data-subtext="Ugandan shilling" value="">UGX</option>
                          <option data-icon="currency-flag currency-flag-vnd mr-1" data-subtext="Vietnamese dong" value="">VND</option>
                          <option data-icon="currency-flag currency-flag-zar mr-1" data-subtext="South African rand" value="">ZAR</option>
                          </optgroup>
                        </select>
                        </span> </div>
                    </div>
                  </div>
                  <!--<p class="text-muted mb-1">Total fees  - <span class="font-weight-500">7.21 USD</span></p>-->
                  <p id="current" class="text-muted">The current exchange rate is <span class="font-weight-500">1 USD = 1.42030 AUD</span></p>
                  <button class="btn btn-primary btn-block" type="submit">Get Started</button>
                </form>
              </div>
              <div class="tab-pane fade" id="request-money" role="tabpanel" aria-labelledby="request-money-tab">
                <form id="form-request-money" method="post" action="send-money">
                  <div class="form-group">
                    <label for="myCountrie">I am in</label>
                    <select id="myCountrie" data-style="custom-select" class="selectpicker form-control" data-live-search="true">
                      <option value="244">Aaland Islands</option>
                      <option value="1">Afghanistan</option>
                      <option value="2">Albania</option>
                      <option value="3">Algeria</option>
                      <option value="4">American Samoa</option>
                      <option value="5">Andorra</option>
                      <option value="6">Angola</option>
                      <option value="7">Anguilla</option>
                      <option value="8">Antarctica</option>
                      <option value="9">Antigua and Barbuda</option>
                      <option value="10">Argentina</option>
                      <option value="11">Armenia</option>
                      <option value="12">Aruba</option>
                      <option value="252">Ascension Island (British)</option>
                      <option value="13">Australia</option>
                      <option value="14">Austria</option>
                      <option value="15">Azerbaijan</option>
                      <option value="16">Bahamas</option>
                      <option value="17">Bahrain</option>
                      <option value="18">Bangladesh</option>
                      <option value="19">Barbados</option>
                      <option value="20">Belarus</option>
                      <option value="21">Belgium</option>
                      <option value="22">Belize</option>
                      <option value="23">Benin</option>
                      <option value="24">Bermuda</option>
                      <option value="25">Bhutan</option>
                      <option value="26">Bolivia</option>
                      <option value="245">Bonaire, Sint Eustatius and Saba</option>
                      <option value="27">Bosnia and Herzegovina</option>
                      <option value="28">Botswana</option>
                      <option value="29">Bouvet Island</option>
                      <option value="30">Brazil</option>
                      <option value="31">British Indian Ocean Territory</option>
                      <option value="32">Brunei Darussalam</option>
                      <option value="33">Bulgaria</option>
                      <option value="34">Burkina Faso</option>
                      <option value="35">Burundi</option>
                      <option value="36">Cambodia</option>
                      <option value="37">Cameroon</option>
                      <option value="38">Canada</option>
                      <option value="251">Canary Islands</option>
                      <option value="39">Cape Verde</option>
                      <option value="40">Cayman Islands</option>
                      <option value="41">Central African Republic</option>
                      <option value="42">Chad</option>
                      <option value="43">Chile</option>
                      <option value="44">China</option>
                      <option value="45">Christmas Island</option>
                      <option value="46">Cocos (Keeling) Islands</option>
                      <option value="47">Colombia</option>
                      <option value="48">Comoros</option>
                      <option value="49">Congo</option>
                      <option value="50">Cook Islands</option>
                      <option value="51">Costa Rica</option>
                      <option value="52">Cote D'Ivoire</option>
                      <option value="53">Croatia</option>
                      <option value="54">Cuba</option>
                      <option value="246">Curacao</option>
                      <option value="55">Cyprus</option>
                      <option value="56">Czech Republic</option>
                      <option value="237">Democratic Republic of Congo</option>
                      <option value="57">Denmark</option>
                      <option value="58">Djibouti</option>
                      <option value="59">Dominica</option>
                      <option value="60">Dominican Republic</option>
                      <option value="61">East Timor</option>
                      <option value="62">Ecuador</option>
                      <option value="63">Egypt</option>
                      <option value="64">El Salvador</option>
                      <option value="65">Equatorial Guinea</option>
                      <option value="66">Eritrea</option>
                      <option value="67">Estonia</option>
                      <option value="68">Ethiopia</option>
                      <option value="69">Falkland Islands (Malvinas)</option>
                      <option value="70">Faroe Islands</option>
                      <option value="71">Fiji</option>
                      <option value="72">Finland</option>
                      <option value="74">France, Metropolitan</option>
                      <option value="75">French Guiana</option>
                      <option value="76">French Polynesia</option>
                      <option value="77">French Southern Territories</option>
                      <option value="126">FYROM</option>
                      <option value="78">Gabon</option>
                      <option value="79">Gambia</option>
                      <option value="80">Georgia</option>
                      <option value="81">Germany</option>
                      <option value="82">Ghana</option>
                      <option value="83">Gibraltar</option>
                      <option value="84">Greece</option>
                      <option value="85">Greenland</option>
                      <option value="86">Grenada</option>
                      <option value="87">Guadeloupe</option>
                      <option value="88">Guam</option>
                      <option value="89">Guatemala</option>
                      <option value="256">Guernsey</option>
                      <option value="90">Guinea</option>
                      <option value="91">Guinea-Bissau</option>
                      <option value="92">Guyana</option>
                      <option value="93">Haiti</option>
                      <option value="94">Heard and Mc Donald Islands</option>
                      <option value="95">Honduras</option>
                      <option value="96">Hong Kong</option>
                      <option value="97">Hungary</option>
                      <option value="98">Iceland</option>
                      <option value="99">India</option>
                      <option value="100">Indonesia</option>
                      <option value="101">Iran (Islamic Republic of)</option>
                      <option value="102">Iraq</option>
                      <option value="103">Ireland</option>
                      <option value="254">Isle of Man</option>
                      <option value="104">Israel</option>
                      <option value="105">Italy</option>
                      <option value="106">Jamaica</option>
                      <option value="107">Japan</option>
                      <option value="257">Jersey</option>
                      <option value="108">Jordan</option>
                      <option value="109">Kazakhstan</option>
                      <option value="110">Kenya</option>
                      <option value="111">Kiribati</option>
                      <option value="113">Korea, Republic of</option>
                      <option value="253">Kosovo, Republic of</option>
                      <option value="114">Kuwait</option>
                      <option value="115">Kyrgyzstan</option>
                      <option value="116">Lao People's Democratic Republic</option>
                      <option value="117">Latvia</option>
                      <option value="118">Lebanon</option>
                      <option value="119">Lesotho</option>
                      <option value="120">Liberia</option>
                      <option value="121">Libyan Arab Jamahiriya</option>
                      <option value="122">Liechtenstein</option>
                      <option value="123">Lithuania</option>
                      <option value="124">Luxembourg</option>
                      <option value="125">Macau</option>
                      <option value="127">Madagascar</option>
                      <option value="128">Malawi</option>
                      <option value="129">Malaysia</option>
                      <option value="130">Maldives</option>
                      <option value="131">Mali</option>
                      <option value="132">Malta</option>
                      <option value="133">Marshall Islands</option>
                      <option value="134">Martinique</option>
                      <option value="135">Mauritania</option>
                      <option value="136">Mauritius</option>
                      <option value="137">Mayotte</option>
                      <option value="138">Mexico</option>
                      <option value="139">Micronesia, Federated States of</option>
                      <option value="140">Moldova, Republic of</option>
                      <option value="141">Monaco</option>
                      <option value="142">Mongolia</option>
                      <option value="242">Montenegro</option>
                      <option value="143">Montserrat</option>
                      <option value="144">Morocco</option>
                      <option value="145">Mozambique</option>
                      <option value="146">Myanmar</option>
                      <option value="147">Namibia</option>
                      <option value="148">Nauru</option>
                      <option value="149">Nepal</option>
                      <option value="150">Netherlands</option>
                      <option value="151">Netherlands Antilles</option>
                      <option value="152">New Caledonia</option>
                      <option value="153">New Zealand</option>
                      <option value="154">Nicaragua</option>
                      <option value="155">Niger</option>
                      <option value="156">Nigeria</option>
                      <option value="157">Niue</option>
                      <option value="158">Norfolk Island</option>
                      <option value="112">North Korea</option>
                      <option value="159">Northern Mariana Islands</option>
                      <option value="160">Norway</option>
                      <option value="161">Oman</option>
                      <option value="162">Pakistan</option>
                      <option value="163">Palau</option>
                      <option value="247">Palestinian Territory, Occupied</option>
                      <option value="164">Panama</option>
                      <option value="165">Papua New Guinea</option>
                      <option value="166">Paraguay</option>
                      <option value="167">Peru</option>
                      <option value="168">Philippines</option>
                      <option value="169">Pitcairn</option>
                      <option value="170">Poland</option>
                      <option value="171">Portugal</option>
                      <option value="172">Puerto Rico</option>
                      <option value="173">Qatar</option>
                      <option value="174">Reunion</option>
                      <option value="175">Romania</option>
                      <option value="176">Russian Federation</option>
                      <option value="177">Rwanda</option>
                      <option value="178">Saint Kitts and Nevis</option>
                      <option value="179">Saint Lucia</option>
                      <option value="180">Saint Vincent and the Grenadines</option>
                      <option value="181">Samoa</option>
                      <option value="182">San Marino</option>
                      <option value="183">Sao Tome and Principe</option>
                      <option value="184">Saudi Arabia</option>
                      <option value="185">Senegal</option>
                      <option value="243">Serbia</option>
                      <option value="186">Seychelles</option>
                      <option value="187">Sierra Leone</option>
                      <option value="188">Singapore</option>
                      <option value="189">Slovak Republic</option>
                      <option value="190">Slovenia</option>
                      <option value="191">Solomon Islands</option>
                      <option value="192">Somalia</option>
                      <option value="193">South Africa</option>
                      <option value="194">South Georgia &amp; South Sandwich Islands</option>
                      <option value="248">South Sudan</option>
                      <option value="195">Spain</option>
                      <option value="196">Sri Lanka</option>
                      <option value="249">St. Barthelemy</option>
                      <option value="197">St. Helena</option>
                      <option value="250">St. Martin (French part)</option>
                      <option value="198">St. Pierre and Miquelon</option>
                      <option value="199">Sudan</option>
                      <option value="200">Suriname</option>
                      <option value="201">Svalbard and Jan Mayen Islands</option>
                      <option value="202">Swaziland</option>
                      <option value="203">Sweden</option>
                      <option value="204">Switzerland</option>
                      <option value="205">Syrian Arab Republic</option>
                      <option value="206">Taiwan</option>
                      <option value="207">Tajikistan</option>
                      <option value="208">Tanzania, United Republic of</option>
                      <option value="209">Thailand</option>
                      <option value="210">Togo</option>
                      <option value="211">Tokelau</option>
                      <option value="212">Tonga</option>
                      <option value="213">Trinidad and Tobago</option>
                      <option value="255">Tristan da Cunha</option>
                      <option value="214">Tunisia</option>
                      <option value="215">Turkey</option>
                      <option value="216">Turkmenistan</option>
                      <option value="217">Turks and Caicos Islands</option>
                      <option value="218">Tuvalu</option>
                      <option value="219">Uganda</option>
                      <option value="220">Ukraine</option>
                      <option value="221">United Arab Emirates</option>
                      <option value="222">United Kingdom</option>
                      <option selected="selected" value="223">United States</option>
                      <option value="224">United States Minor Outlying Islands</option>
                      <option value="225">Uruguay</option>
                      <option value="226">Uzbekistan</option>
                      <option value="227">Vanuatu</option>
                      <option value="228">Vatican City State (Holy See)</option>
                      <option value="229">Venezuela</option>
                      <option value="230">Viet Nam</option>
                      <option value="231">Virgin Islands (British)</option>
                      <option value="232">Virgin Islands (U.S.)</option>
                      <option value="233">Wallis and Futuna Islands</option>
                      <option value="234">Western Sahara</option>
                      <option value="235">Yemen</option>
                      <option value="238">Zambia</option>
                      <option value="239">Zimbabwe</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="mypayerCountrie">My payer is in</label>
                    <select id="mypayerCountrie" data-style="custom-select" class="selectpicker form-control" data-live-search="true">
                      <option value="244">Aaland Islands</option>
                      <option value="1">Afghanistan</option>
                      <option value="2">Albania</option>
                      <option value="3">Algeria</option>
                      <option value="4">American Samoa</option>
                      <option value="5">Andorra</option>
                      <option value="6">Angola</option>
                      <option value="7">Anguilla</option>
                      <option value="8">Antarctica</option>
                      <option value="9">Antigua and Barbuda</option>
                      <option value="10">Argentina</option>
                      <option value="11">Armenia</option>
                      <option value="12">Aruba</option>
                      <option value="252">Ascension Island (British)</option>
                      <option value="13">Australia</option>
                      <option value="14">Austria</option>
                      <option value="15">Azerbaijan</option>
                      <option value="16">Bahamas</option>
                      <option value="17">Bahrain</option>
                      <option value="18">Bangladesh</option>
                      <option value="19">Barbados</option>
                      <option value="20">Belarus</option>
                      <option value="21">Belgium</option>
                      <option value="22">Belize</option>
                      <option value="23">Benin</option>
                      <option value="24">Bermuda</option>
                      <option value="25">Bhutan</option>
                      <option value="26">Bolivia</option>
                      <option value="245">Bonaire, Sint Eustatius and Saba</option>
                      <option value="27">Bosnia and Herzegovina</option>
                      <option value="28">Botswana</option>
                      <option value="29">Bouvet Island</option>
                      <option value="30">Brazil</option>
                      <option value="31">British Indian Ocean Territory</option>
                      <option value="32">Brunei Darussalam</option>
                      <option value="33">Bulgaria</option>
                      <option value="34">Burkina Faso</option>
                      <option value="35">Burundi</option>
                      <option value="36">Cambodia</option>
                      <option value="37">Cameroon</option>
                      <option value="38">Canada</option>
                      <option value="251">Canary Islands</option>
                      <option value="39">Cape Verde</option>
                      <option value="40">Cayman Islands</option>
                      <option value="41">Central African Republic</option>
                      <option value="42">Chad</option>
                      <option value="43">Chile</option>
                      <option value="44">China</option>
                      <option value="45">Christmas Island</option>
                      <option value="46">Cocos (Keeling) Islands</option>
                      <option value="47">Colombia</option>
                      <option value="48">Comoros</option>
                      <option value="49">Congo</option>
                      <option value="50">Cook Islands</option>
                      <option value="51">Costa Rica</option>
                      <option value="52">Cote D'Ivoire</option>
                      <option value="53">Croatia</option>
                      <option value="54">Cuba</option>
                      <option value="246">Curacao</option>
                      <option value="55">Cyprus</option>
                      <option value="56">Czech Republic</option>
                      <option value="237">Democratic Republic of Congo</option>
                      <option value="57">Denmark</option>
                      <option value="58">Djibouti</option>
                      <option value="59">Dominica</option>
                      <option value="60">Dominican Republic</option>
                      <option value="61">East Timor</option>
                      <option value="62">Ecuador</option>
                      <option value="63">Egypt</option>
                      <option value="64">El Salvador</option>
                      <option value="65">Equatorial Guinea</option>
                      <option value="66">Eritrea</option>
                      <option value="67">Estonia</option>
                      <option value="68">Ethiopia</option>
                      <option value="69">Falkland Islands (Malvinas)</option>
                      <option value="70">Faroe Islands</option>
                      <option value="71">Fiji</option>
                      <option value="72">Finland</option>
                      <option value="74">France, Metropolitan</option>
                      <option value="75">French Guiana</option>
                      <option value="76">French Polynesia</option>
                      <option value="77">French Southern Territories</option>
                      <option value="126">FYROM</option>
                      <option value="78">Gabon</option>
                      <option value="79">Gambia</option>
                      <option value="80">Georgia</option>
                      <option value="81">Germany</option>
                      <option value="82">Ghana</option>
                      <option value="83">Gibraltar</option>
                      <option value="84">Greece</option>
                      <option value="85">Greenland</option>
                      <option value="86">Grenada</option>
                      <option value="87">Guadeloupe</option>
                      <option value="88">Guam</option>
                      <option value="89">Guatemala</option>
                      <option value="256">Guernsey</option>
                      <option value="90">Guinea</option>
                      <option value="91">Guinea-Bissau</option>
                      <option value="92">Guyana</option>
                      <option value="93">Haiti</option>
                      <option value="94">Heard and Mc Donald Islands</option>
                      <option value="95">Honduras</option>
                      <option value="96">Hong Kong</option>
                      <option value="97">Hungary</option>
                      <option value="98">Iceland</option>
                      <option value="99" selected="selected">India</option>
                      <option value="100">Indonesia</option>
                      <option value="101">Iran (Islamic Republic of)</option>
                      <option value="102">Iraq</option>
                      <option value="103">Ireland</option>
                      <option value="254">Isle of Man</option>
                      <option value="104">Israel</option>
                      <option value="105">Italy</option>
                      <option value="106">Jamaica</option>
                      <option value="107">Japan</option>
                      <option value="257">Jersey</option>
                      <option value="108">Jordan</option>
                      <option value="109">Kazakhstan</option>
                      <option value="110">Kenya</option>
                      <option value="111">Kiribati</option>
                      <option value="113">Korea, Republic of</option>
                      <option value="253">Kosovo, Republic of</option>
                      <option value="114">Kuwait</option>
                      <option value="115">Kyrgyzstan</option>
                      <option value="116">Lao People's Democratic Republic</option>
                      <option value="117">Latvia</option>
                      <option value="118">Lebanon</option>
                      <option value="119">Lesotho</option>
                      <option value="120">Liberia</option>
                      <option value="121">Libyan Arab Jamahiriya</option>
                      <option value="122">Liechtenstein</option>
                      <option value="123">Lithuania</option>
                      <option value="124">Luxembourg</option>
                      <option value="125">Macau</option>
                      <option value="127">Madagascar</option>
                      <option value="128">Malawi</option>
                      <option value="129">Malaysia</option>
                      <option value="130">Maldives</option>
                      <option value="131">Mali</option>
                      <option value="132">Malta</option>
                      <option value="133">Marshall Islands</option>
                      <option value="134">Martinique</option>
                      <option value="135">Mauritania</option>
                      <option value="136">Mauritius</option>
                      <option value="137">Mayotte</option>
                      <option value="138">Mexico</option>
                      <option value="139">Micronesia, Federated States of</option>
                      <option value="140">Moldova, Republic of</option>
                      <option value="141">Monaco</option>
                      <option value="142">Mongolia</option>
                      <option value="242">Montenegro</option>
                      <option value="143">Montserrat</option>
                      <option value="144">Morocco</option>
                      <option value="145">Mozambique</option>
                      <option value="146">Myanmar</option>
                      <option value="147">Namibia</option>
                      <option value="148">Nauru</option>
                      <option value="149">Nepal</option>
                      <option value="150">Netherlands</option>
                      <option value="151">Netherlands Antilles</option>
                      <option value="152">New Caledonia</option>
                      <option value="153">New Zealand</option>
                      <option value="154">Nicaragua</option>
                      <option value="155">Niger</option>
                      <option value="156">Nigeria</option>
                      <option value="157">Niue</option>
                      <option value="158">Norfolk Island</option>
                      <option value="112">North Korea</option>
                      <option value="159">Northern Mariana Islands</option>
                      <option value="160">Norway</option>
                      <option value="161">Oman</option>
                      <option value="162">Pakistan</option>
                      <option value="163">Palau</option>
                      <option value="247">Palestinian Territory, Occupied</option>
                      <option value="164">Panama</option>
                      <option value="165">Papua New Guinea</option>
                      <option value="166">Paraguay</option>
                      <option value="167">Peru</option>
                      <option value="168">Philippines</option>
                      <option value="169">Pitcairn</option>
                      <option value="170">Poland</option>
                      <option value="171">Portugal</option>
                      <option value="172">Puerto Rico</option>
                      <option value="173">Qatar</option>
                      <option value="174">Reunion</option>
                      <option value="175">Romania</option>
                      <option value="176">Russian Federation</option>
                      <option value="177">Rwanda</option>
                      <option value="178">Saint Kitts and Nevis</option>
                      <option value="179">Saint Lucia</option>
                      <option value="180">Saint Vincent and the Grenadines</option>
                      <option value="181">Samoa</option>
                      <option value="182">San Marino</option>
                      <option value="183">Sao Tome and Principe</option>
                      <option value="184">Saudi Arabia</option>
                      <option value="185">Senegal</option>
                      <option value="243">Serbia</option>
                      <option value="186">Seychelles</option>
                      <option value="187">Sierra Leone</option>
                      <option value="188">Singapore</option>
                      <option value="189">Slovak Republic</option>
                      <option value="190">Slovenia</option>
                      <option value="191">Solomon Islands</option>
                      <option value="192">Somalia</option>
                      <option value="193">South Africa</option>
                      <option value="194">South Georgia &amp; South Sandwich Islands</option>
                      <option value="248">South Sudan</option>
                      <option value="195">Spain</option>
                      <option value="196">Sri Lanka</option>
                      <option value="249">St. Barthelemy</option>
                      <option value="197">St. Helena</option>
                      <option value="250">St. Martin (French part)</option>
                      <option value="198">St. Pierre and Miquelon</option>
                      <option value="199">Sudan</option>
                      <option value="200">Suriname</option>
                      <option value="201">Svalbard and Jan Mayen Islands</option>
                      <option value="202">Swaziland</option>
                      <option value="203">Sweden</option>
                      <option value="204">Switzerland</option>
                      <option value="205">Syrian Arab Republic</option>
                      <option value="206">Taiwan</option>
                      <option value="207">Tajikistan</option>
                      <option value="208">Tanzania, United Republic of</option>
                      <option value="209">Thailand</option>
                      <option value="210">Togo</option>
                      <option value="211">Tokelau</option>
                      <option value="212">Tonga</option>
                      <option value="213">Trinidad and Tobago</option>
                      <option value="255">Tristan da Cunha</option>
                      <option value="214">Tunisia</option>
                      <option value="215">Turkey</option>
                      <option value="216">Turkmenistan</option>
                      <option value="217">Turks and Caicos Islands</option>
                      <option value="218">Tuvalu</option>
                      <option value="219">Uganda</option>
                      <option value="220">Ukraine</option>
                      <option value="221">United Arab Emirates</option>
                      <option value="222">United Kingdom</option>
                      <option value="223">United States</option>
                      <option value="224">United States Minor Outlying Islands</option>
                      <option value="225">Uruguay</option>
                      <option value="226">Uzbekistan</option>
                      <option value="227">Vanuatu</option>
                      <option value="228">Vatican City State (Holy See)</option>
                      <option value="229">Venezuela</option>
                      <option value="230">Viet Nam</option>
                      <option value="231">Virgin Islands (British)</option>
                      <option value="232">Virgin Islands (U.S.)</option>
                      <option value="233">Wallis and Futuna Islands</option>
                      <option value="234">Western Sahara</option>
                      <option value="235">Yemen</option>
                      <option value="238">Zambia</option>
                      <option value="239">Zimbabwe</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="wantTorequest">I want to request</label>
                    <div class="input-group">
                      <div class="input-group-prepend"> <span class="input-group-text">$</span> </div>
                      <input type="number" step="0.01" class="form-control" data-bv-field="wantTorequest" id="wantTorequest" placeholder="0.00">
                      <div class="input-group-append"> <span class="input-group-text p-0">
                        <select id="wantToCurrency" data-style="custom-select bg-transparent border-0" data-container="body" data-live-search="true" class="selectpicker form-control bg-transparent" required="">
                          <optgroup label="Popular Currency">
                          <option data-icon="currency-flag currency-flag-usd mr-1" data-subtext="United States dollar" selected="selected" value="">USD</option>
                          <option data-icon="currency-flag currency-flag-aud mr-1" data-subtext="Australian dollar" value="">AUD</option>
                          <option data-icon="currency-flag currency-flag-inr mr-1" data-subtext="Indian rupee" value="">INR</option>
                          </optgroup>
                          <option data-divider="true"></option>
                          <optgroup label="Other Currency">
                          <option data-icon="currency-flag currency-flag-aed mr-1" data-subtext="United Arab Emirates dirham" value="">AED</option>
                          <option data-icon="currency-flag currency-flag-ars mr-1" data-subtext="Argentine peso" value="">ARS</option>
                          <option data-icon="currency-flag currency-flag-aud mr-1" data-subtext="Australian dollar" value="">AUD</option>
                          <option data-icon="currency-flag currency-flag-bdt mr-1" data-subtext="Bangladeshi taka" value="">BDT</option>
                          <option data-icon="currency-flag currency-flag-bgn mr-1" data-subtext="Bulgarian lev" value="">BGN</option>
                          <option data-icon="currency-flag currency-flag-brl mr-1" data-subtext="Brazilian real" value="">BRL</option>
                          <option data-icon="currency-flag currency-flag-cad mr-1" data-subtext="Canadian dollar" value="">CAD</option>
                          <option data-icon="currency-flag currency-flag-chf mr-1" data-subtext="Swiss franc" value="">CHF</option>
                          <option data-icon="currency-flag currency-flag-clp mr-1" data-subtext="Chilean peso" value="">CLP</option>
                          <option data-icon="currency-flag currency-flag-cny mr-1" data-subtext="Chinese yuan" value="">CNY</option>
                          <option data-icon="currency-flag currency-flag-czk mr-1" data-subtext="Czech koruna" value="">CZK</option>
                          <option data-icon="currency-flag currency-flag-dkk mr-1" data-subtext="Danish krone" value="">DKK</option>
                          <option data-icon="currency-flag currency-flag-egp mr-1" data-subtext="Egyptian pound" value="">EGP</option>
                          <option data-icon="currency-flag currency-flag-eur mr-1" data-subtext="Euro" value="">EUR</option>
                          <option data-icon="currency-flag currency-flag-gbp mr-1" data-subtext="British pound" value="">GBP</option>
                          <option data-icon="currency-flag currency-flag-gel mr-1" data-subtext="Georgian lari" value="">GEL</option>
                          <option data-icon="currency-flag currency-flag-ghs mr-1" data-subtext="Ghanaian cedi" value="">GHS</option>
                          <option data-icon="currency-flag currency-flag-hkd mr-1" data-subtext="Hong Kong dollar" value="">HKD</option>
                          <option data-icon="currency-flag currency-flag-hrk mr-1" data-subtext="Croatian kuna" value="">HRK</option>
                          <option data-icon="currency-flag currency-flag-huf mr-1" data-subtext="Hungarian forint" value="">HUF</option>
                          <option data-icon="currency-flag currency-flag-idr mr-1" data-subtext="Indonesian rupiah" value="">IDR</option>
                          <option data-icon="currency-flag currency-flag-ils mr-1" data-subtext="Israeli shekel" value="">ILS</option>
                          <option data-icon="currency-flag currency-flag-inr mr-1" data-subtext="Indian rupee" value="">INR</option>
                          <option data-icon="currency-flag currency-flag-jpy mr-1" data-subtext="Japanese yen" value="">JPY</option>
                          <option data-icon="currency-flag currency-flag-kes mr-1" data-subtext="Kenyan shilling" value="">KES</option>
                          <option data-icon="currency-flag currency-flag-krw mr-1" data-subtext="South Korean won" value="">KRW</option>
                          <option data-icon="currency-flag currency-flag-lkr mr-1" data-subtext="Sri Lankan rupee" value="">LKR</option>
                          <option data-icon="currency-flag currency-flag-mad mr-1" data-subtext="Moroccan dirham" value="">MAD</option>
                          <option data-icon="currency-flag currency-flag-mxn mr-1" data-subtext="Mexican peso" value="">MXN</option>
                          <option data-icon="currency-flag currency-flag-myr mr-1" data-subtext="Malaysian ringgit" value="">MYR</option>
                          <option data-icon="currency-flag currency-flag-ngn mr-1" data-subtext="Nigerian naira" value="">NGN</option>
                          <option data-icon="currency-flag currency-flag-nok mr-1" data-subtext="Norwegian krone" value="">NOK</option>
                          <option data-icon="currency-flag currency-flag-npr mr-1" data-subtext="Nepalese rupee" value="">NPR</option>
                          <option data-icon="currency-flag currency-flag-nzd mr-1" data-subtext="New Zealand dollar" value="">NZD</option>
                          <option data-icon="currency-flag currency-flag-pen mr-1" data-subtext="Peruvian nuevo sol" value="">PEN</option>
                          <option data-icon="currency-flag currency-flag-php mr-1" data-subtext="Philippine peso" value="">PHP</option>
                          <option data-icon="currency-flag currency-flag-pkr mr-1" data-subtext="Pakistani rupee" value="">PKR</option>
                          <option data-icon="currency-flag currency-flag-pln mr-1" data-subtext="Polish złoty" value="">PLN</option>
                          <option data-icon="currency-flag currency-flag-ron mr-1" data-subtext="Romanian leu" value="">RON</option>
                          <option data-icon="currency-flag currency-flag-rub mr-1" data-subtext="Russian rouble" value="">RUB</option>
                          <option data-icon="currency-flag currency-flag-sek mr-1" data-subtext="Swedish krona" value="">SEK</option>
                          <option data-icon="currency-flag currency-flag-sgd mr-1" data-subtext="Singapore dollar" value="">SGD</option>
                          <option data-icon="currency-flag currency-flag-thb mr-1" data-subtext="Thai baht" value="">THB</option>
                          <option data-icon="currency-flag currency-flag-try mr-1" data-subtext="Turkish lira" value="">TRY</option>
                          <option data-icon="currency-flag currency-flag-uah mr-1" data-subtext="Ukrainian hryvnia" value="">UAH</option>
                          <option data-icon="currency-flag currency-flag-ugx mr-1" data-subtext="Ugandan shilling" value="">UGX</option>
                          <option data-icon="currency-flag currency-flag-vnd mr-1" data-subtext="Vietnamese dong" value="">VND</option>
                          <option data-icon="currency-flag currency-flag-zar mr-1" data-subtext="South African rand" value="">ZAR</option>
                          </optgroup>
                        </select>
                        </span> </div>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-block mt-4" type="submit" disabled>Get Started</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- Send/Request Money End --> 
    
    <!-- Why choose us
    ============================================= -->
    <!--<section class="section bg-white">
      <div class="container">
        <h2 class="text-9 text-center text-uppercase font-weight-400">Why choose us?</h2>
        <p class="text-4 text-center font-weight-300 mb-5">Here’s Top 4 reasons why using a Tea account for manage your money.</p>
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <div class="row">
              <div class="col-sm-6 mb-4">
                <div class="featured-box style-3">
                  <div class="featured-box-icon border border-primary text-primary rounded-circle"> <i class="fas fa-hand-pointer"></i> </div>
                  <h3 class="font-weight-400">Easy to use</h3>
                  <p>Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</p>
                </div>
              </div>
              <div class="col-sm-6 mb-4">
                <div class="featured-box style-3">
                  <div class="featured-box-icon border border-primary text-primary rounded-circle"> <i class="fas fa-share"></i> </div>
                  <h3 class="font-weight-400">Faster Payments</h3>
                  <p>Persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</p>
                </div>
              </div>
              <div class="col-sm-6 mb-4 mb-sm-0">
                <div class="featured-box style-3">
                  <div class="featured-box-icon border border-primary text-primary rounded-circle"> <i class="fas fa-dollar-sign"></i> </div>
                  <h3 class="font-weight-400">Lower Fees</h3>
                  <p>Essent lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="featured-box style-3">
                  <div class="featured-box-icon border border-primary text-primary rounded-circle"> <i class="fas fa-lock"></i> </div>
                  <h3 class="font-weight-400">100% secure</h3>
                  <p>Quidam lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->
    <!-- Why choose us End --> 
    
    <!-- How it works
    ============================================= -->
    <!--<section class="section">
      <div class="container">
        <h2 class="text-9 text-center text-uppercase font-weight-400">As simple as 1-2-3</h2>
        <p class="text-4 text-center font-weight-300 mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <div class="row">
          <div class="col-sm-4 mb-4">
            <div class="featured-box style-4">
              <div class="featured-box-icon text-dark shadow-none border-bottom"><span class="w-100 text-20 font-weight-500">1</span></div>
              <h3 class="mb-3">Sign Up Your Account</h3>
              <p class="text-3 font-weight-300">Sign up for your free personal/business Account in fea a minute.</p>
            </div>
          </div>
          <div class="col-sm-4 mb-4">
            <div class="featured-box style-4">
              <div class="featured-box-icon text-dark shadow-none border-bottom"><span class="w-100 text-20 font-weight-500">2</span></div>
              <h3 class="mb-3">Send & Receive Money</h3>
              <p class="text-3 font-weight-300">Receive & Send Payments from worldwide in 40 currencies.</p>
            </div>
          </div>
          <div class="col-sm-4 mb-4 mb-sm-0">
            <div class="featured-box style-4">
              <div class="featured-box-icon text-dark shadow-none border-bottom"><span class="w-100 text-20 font-weight-500">3</span></div>
              <h3 class="mb-3">Withdraw Funds</h3>
              <p class="text-3 font-weight-300">Your funds will be transferred to your local bank account.</p>
            </div>
          </div>
        </div>
        <div class="text-center mt-2"><a href="#" class="btn btn-primary">Open a Free Account</a></div>
      </div>
    </section>-->
    <!-- How it works End -->
    
    <!-- What can you do
    ============================================= -->
    <section class="section bg-white">
      <div class="container">
        <h2 class="text-9 text-center text-uppercase font-weight-400">What can you do?</h2>
        <p class="text-4 text-center font-weight-300 mb-5">Send & Receive money to your loved ones in minutes with great rates and low fees. Over 180 countries and 30 currencies supported.</p>
        <div class="row">
          <div class="col-sm-6 col-lg-3 mb-4"> <a href="#">
            <div class="featured-box style-5 rounded">
              <div class="featured-box-icon text-primary"> <i class="fas fa-share-square"></i> </div>
              <h3>Send Money</h3>
            </div>
            </a> </div>
          <div class="col-sm-6 col-lg-3 mb-4"> <a href="#">
            <div class="featured-box style-5 rounded">
              <div class="featured-box-icon text-primary"> <i class="fas fa-check-square"></i> </div>
              <h3>Receive Money</h3>
            </div>
            </a> </div>
          <div class="col-sm-6 col-lg-3 mb-4"> <a href="#">
            <div class="featured-box style-5 rounded">
              <div class="featured-box-icon text-primary"> <i class="fas fa-user-friends"></i> </div>
              <h3>Pay a Friend</h3>
            </div>
            </a> </div>
          <div class="col-sm-6 col-lg-3 mb-4"> <a href="#">
            <div class="featured-box style-5 rounded">
              <div class="featured-box-icon text-primary"> <i class="fas fa-shopping-bag"></i> </div>
              <h3>Online Shopping</h3>
            </div>
            </a> </div>
        </div>
        <!--<div class="text-center mt-4"><a href="#" class="btn-link text-4">See more can you do<i class="fas fa-chevron-right text-2 ml-2"></i></a></div>
      </div>-->
    </section>
    <!-- What can you do End -->
    
    <!-- Testimonial
    ============================================= -->
    <!--<section class="hero-wrap section shadow-md">
      <div class="hero-mask opacity-3 bg-dark"></div>
      <div class="hero-bg hero-bg-scrll" style="background-image:url('images/bg/image-4.jpg');"></div>
      <div class="hero-content py-0 py-lg-5 my-0 my-lg-5">
        <div class="container text-center">
          <h2 class="text-9 text-white font-weight-400 text-uppercase mb-5">What our customers say</h2>
          <a class="video-btn d-flex" href="#" data-src="https://www.youtube.com/embed/7e90gBu4pas" data-toggle="modal" data-target="#videoModal"> <span class="btn-video-play bg-white shadow-md rounded-circle m-auto"><i class="fas fa-play"></i></span> </a> </div>
      </div>
    </section>-->
    <!-- Testimonial end -->
    
    <!-- Mobile App
    ============================================= -->
    <!--<section class="section pt-5 pb-0">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-9 col-xl-8 mx-auto">
            <div class="row">
              <div class="col-sm-5 col-md-5 text-center align-bottom order-1 order-sm-0"> <img class="img-fluid" alt="" src="images/app-mobile.png"> </div>
              <div class="col-sm-7 col-md-7 my-auto order-0 order-sm-1 text-center text-sm-left">
                <h2 class="text-8 font-weight-400 text-uppercase mb-3">Get the app</h2>
                <p class="text-4">Download our app for the fastest, most convenient way to send & get Payment.</p>
                <div class="pt-2 mb-4 mb-sm-0"> <a class="mr-3" href=""><img class="img-fluid" alt="" src="images/app-store.png"></a><a href=""><img class="img-fluid" alt="" src="images/google-play-store.png"></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->
    <!-- Mobile App end --> 
  </div>
  <!-- Content end --> 
  
  <!-- Footer
  ============================================= -->
  <!--<footer id="footer" class="pb-4">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md mb-3 mb-md-0">
        <h4 class="text-3 text-muted text-uppercase font-weight-400 mb-3">Information</h4>
          <ul class="nav flex-column">
            <li class="nav-item"> <a class="nav-link" href="#">About Us</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Careers</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Affiliate</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Fees</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-md mb-3 mb-md-0">
        <h4 class="text-3 text-muted text-uppercase font-weight-400 mb-3">Services</h4>
          <ul class="nav flex-column">
            <li class="nav-item"> <a class="nav-link" href="#">Transfer Money</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Send Money</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Receive Money</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Online Shopping</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Pay bill</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-md mb-3 mb-md-0">
        <h4 class="text-3 text-muted text-uppercase font-weight-400 mb-3">Help Center</h4>
          <ul class="nav flex-column">
            <li class="nav-item"> <a class="nav-link" href="#">Contact Us</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Support</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Help</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-md mb-3 mb-md-0">
        <h4 class="text-3 text-muted text-uppercase font-weight-400 mb-3">Keep in touch</h4>
        <ul class="nav flex-column">
            <li class="nav-item"> <a class="nav-link" href="#">facebook</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">twitter</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">google</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">youtube</a></li>
          </ul>
        </div>
        <div class="col-12 col-lg-3">
        <h4 class="text-3 text-muted text-uppercase font-weight-400 mb-3">Subscribe</h4>
        <p>Subscribe to receive latest news and updates.</p>
        <div class="input-group newsletter">
            <input class="form-control" placeholder="Your Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
            <span class="input-group-append">
            <button class="btn btn-secondary" type="submit" data-toggle="tooltip" data-original-title="Subscribe"><i class="fas fa-paper-plane"></i></button>
            </span> </div>
        </div>
      </div>
      </div>
      <div class="footer-copyright pt-4 mt-4">
      <div class="container">
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

<!-- Video Modal
============================================= -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content bg-transparent border-0">
      <button type="button" class="close text-white opacity-10 ml-auto mr-n3 font-weight-400" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <div class="modal-body p-0">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" id="video" allow="autoplay"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Video Modal end --> 

<!-- Script --> 
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script> 
<script src="vendor/owl.carousel/owl.carousel.min.js"></script> 
<script src="js/theme.js"></script>
<script type="text/javascript">
  setTimeout(function () {
    $('button[data-id="youSendCurrency"]').on('click', function(){
        //jhhj
        $('.optgroup-1').on('click', function(){
          setTimeout(function(){
            var base = $('button[data-id="youSendCurrency"]').attr('title');
            var exchange = $('button[data-id="recipientCurrency"]').attr('title');
            var settings = {
              "async": true,
              "crossDomain": true,
              "url": "exchange-rates?base="+base,
              "method": "GET"
            };
            $.ajax(settings).done(function (response) {
              // console.log(response);
              data = response;
              conversion_rate= data["conversion_rates"];
              // console.log(conversion_rate);
              // console.log(conversion_rate[exchange]);

              var power = Math.pow(10, 2);
              $('#current').html('The current exchange rate is <span class="font-weight-500">1 '+base+' = <span id="rate">'+conversion_rate[exchange]+'</span> '+exchange+'</span>');
            });
            setTimeout(function(){var amount = $('#youSend').val();
              var rate = parseFloat($('#rate').html());
              var power = Math.pow(10, 2);
              $('#recipientGets').val(parseFloat(Math.round((amount*rate) * power)/power).toFixed(2))}, 1000);
            $('.optgroup-1').off();
          }, 1000);
        });
        $('.optgroup-2').on('click', function(){
          setTimeout(function(){
              var base = $('button[data-id="youSendCurrency"]').attr('title');
              var exchange = $('button[data-id="recipientCurrency"]').attr('title');
              var settings = {
                "async": true,
                "crossDomain": true,
                "url": "exchange-rates?base="+base,
                "method": "GET"
              };
              $.ajax(settings).done(function (response) {
                // console.log(response);
                data = response;
                conversion_rate= data["conversion_rates"];
                // console.log(conversion_rate);
                // console.log(conversion_rate[exchange]);

                conversion = conversion_rate[exchange];

                var power = Math.pow(10, 2);
                $('#current').html('The current exchange rate is <span class="font-weight-500">1 '+base+' = <span id="rate">'+parseFloat(conversion).toFixed(2)+'</span> '+exchange+'</span>');
              });
              setTimeout(function(){var amount = $('#youSend').val();
              var rate = parseFloat($('#rate').html());
              var power = Math.pow(10, 2);
              $('#recipientGets').val(parseFloat(conversion*amount).toFixed(2))}, 1000);
              $('.optgroup-2').off();
            }, 1000);
          });
      });
      $('button[data-id="recipientCurrency"]').on('click', function(){
        //jhhj
        $('.optgroup-1').on('click', function(){
          setTimeout(function(){
            var base = $('button[data-id="youSendCurrency"]').attr('title');
            var exchange = $('button[data-id="recipientCurrency"]').attr('title');
            var settings = {
              "async": true,
              "crossDomain": true,
              "url": "exchange-rates?base="+base,
              "method": "GET"
            };
            $.ajax(settings).done(function (response) {
              // console.log(response);
              data = response;
              conversion_rate= data["conversion_rates"];
              // console.log(conversion_rate);
              // console.log(conversion_rate[exchange]);

              conversion = conversion_rate[exchange];

              var power = Math.pow(10, 2);
              $('#current').html('The current exchange rate is <span class="font-weight-500">1 '+base+' = <span id="rate">'+parseFloat(conversion).toFixed(2)+'</span> '+exchange+'</span>');
            });
            setTimeout(function(){var amount = $('#recipientGets').val();
            var rate = parseFloat($('#rate').html());
            var power = Math.pow(10, 2);
            $('#youSend').val(parseFloat(conversion*amount).toFixed(2))}, 1000);
            $('.optgroup-1').off();
          }, 1000);
        });
        $('.optgroup-2').on('click', function(){
          setTimeout(function(){
            var base = $('button[data-id="youSendCurrency"]').attr('title');
            var exchange = $('button[data-id="recipientCurrency"]').attr('title');
            var settings = {
              "async": true,
              "crossDomain": true,
              "url": "exchange-rates?base="+base,
              "method": "GET"
            };
            $.ajax(settings).done(function (response) {
              // console.log(response);
              data = response;
              conversion_rate= data["conversion_rates"];
              // console.log(conversion_rate);
              // console.log(conversion_rate[exchange]);

              conversion = conversion_rate[exchange];
              
              var power = Math.pow(10, 2);
              $('#current').html('The current exchange rate is <span class="font-weight-500">1 '+base+' = <span id="rate">'+parseFloat(conversion).toFixed(2)+'</span> '+exchange+'</span>');
            });
            setTimeout(function(){var amount = $('#recipientGets').val();
            var rate = parseFloat($('#rate').html());
            var power = Math.pow(10, 2);
            $('#youSend').val(parseFloat(conversion*amount).toFixed(2))}, 1000);
            $('.optgroup-2').off();
          }, 1000);
        });
      });
  }, 1000);
</script>
<script type="text/javascript">
  $('#youSend').on('input', function(){
    var amount = parseFloat($('#youSend').val());
    var rate = parseFloat($('#rate').html());
    var value = amount*rate;
    if (isNaN(value)) {value = 0} else {value = value}

    // var power = Math.pow(10, 2);
    // value = Math.round(value * power) / power;
    $('#recipientGets').val(parseFloat(value).toFixed(2));
  });
  $('#recipientGets').on('input', function(){
    var amount = parseFloat($('#recipientGets').val());
    var rate = parseFloat($('#rate').html());
    var value = amount/rate;
    if (isNaN(value)) {value = 0} else {value = value}

    // var power = Math.pow(10, 2);
    // value = Math.round(value * power) / power;
    $('#youSend').val(parseFloat(value).toFixed(2));
  });
</script>
<script type="text/javascript">
  var base = "USD";
  var exchange = "GBP";
  var settings = {
    "async": true,
    "crossDomain": true,
    "url": "exchange-rates?base="+base,
    "method": "GET"
  };
  $.ajax(settings).done(function (response) {
    // console.log(response);
    data = response;
    conversion_rate = data["conversion_rates"];
    // console.log(conversion_rate);
    // console.log(conversion_rate[exchange]);

    var power = Math.pow(10, 2);
    $('#current').html('The current exchange rate is <span class="font-weight-500">1 '+base+' = <span id="rate">'+parseFloat(conversion_rate[exchange]).toFixed(2)+'</span> '+exchange+'</span>');
  });
</script>
</body>
</html>
