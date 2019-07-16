
<?php
require_once "connection.php";

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="uza - Model Agency HTML5 Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Registratoin</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="css/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div>
    </div>


    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="uzaNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><img src="./img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="current-item"><a href="./index.html">Home</a></li>
                                <li><a href="./about.html">About</a></li>
                                <li><a href="./contact.html">Contact</a></li>
                            </ul>

                            <!-- Get A Quote -->
                            <div class="get-a-quote ml-4 mr-3">
                                <a href="#" class="btn uza-btn">Log In</a>
                            </div>

                            <!-- Login / Register -->
                            <div class="login-register-btn mx-3">
                                <a href="#">Register</a>
                            </div>
                        </div>
                        <!-- Nav End -->

                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <script src="js/script.js"></script>
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
      <div class="limiter">
        <div class="container-login100">
          <div class="wrap-login100 p-l-50 p-r-50 p-t-15 p-b-18">
            <form class="login100-form" name="myform"  action="reginsert.php" method="POST" onsubmit="regform_Validation()">
              <span class="login100-form-title p-b-30">
                Registration Form
              </span>

              <div class="wrap-input100 m-b-16">
                <input class="input100" type="text" name="fname" placeholder="First Name" value="">

                <span class="symbol-input100">
                  <span class="lnr lnr-user"></span>
                </span>
              </div>

              <div class="wrap-input100 m-b-16">
                <input class="input100" type="text" name="lname" placeholder="Last Name" value="">

                <span class="symbol-input100">
                  <span class="lnr lnr-user"></span>
                </span>
              </div>

              <div class="wrap-input100 m-b-16">
                <input class="input100" type="text" name="uname" placeholder="User Name" value="">

                <span class="symbol-input100">
                  <span class="lnr lnr-user"></span>
                </span>
              </div>

                   <div class="wrap-input100 validate-input m-b-16">
                <select class="input100"  name="gender">
  					<option value="">Gender</option>
  					<option value="male">Male</option>
  					<option value="female">Female</option>
  					<option value="other">Other</option>
				</select>

                <span class="symbol-input100">

                </span>
              </div>

              <div class="wrap-input100 m-b-16">
                <input class="input100" type="text" name="email" placeholder="Email" value="">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                  <span class="lnr lnr-envelope"></span>
                </span>
              </div>

              <div class="wrap-input100 m-b-16">
                <input class="input100" type="text" name="phone" placeholder="Phone" value="">

                <span class="symbol-input100">
                  <span class="lnr lnr-phone-handset"></span>
                </span>
              </div>

              <div class="wrap-input100 m-b-16">
                <input class="input100" type="text" name="address" placeholder="Address" value="">

                <span class="symbol-input100">
                  <span class="lnr lnr-home"></span>
                </span>
              </div>

              <div class="wrap-input100 m-b-16">
                <input class="input100" type="password" name="pass" placeholder="Password" value="">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                  <span class="lnr lnr-lock"></span>
                </span>
              </div>

              <div class="wrap-input100 m-b-16">
                <input class="input100" type="password" name="rpass" placeholder="Re-type Password" value="">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                  <span class="lnr lnr-lock"></span>
                </span>
              </div>

              <div class="container-login100-form-btn p-t-15">
                <input class="login100-form-btn" type="submit" name="submit" value="Submit">
              </div>

              </div>
            </form>
          </div>
        </div>
      </div>

      </div>

        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="./img/core-img/curve-5.png" alt="">
        </div>
    </div>



    <!-- ******* All JS Files ******* -->
    <!-- jQuery js -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js -->
    <script src="js/uza.bundle.js"></script>
    <!-- Active js -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>
