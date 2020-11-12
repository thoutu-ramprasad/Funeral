<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Telkom -Dashboard</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="manifest" href="site.webmanifest"> -->
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
<!-- Place favicon.ico in the root directory -->
<!-- CSS here -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/themify-icons.css">
<link rel="stylesheet" href="css/nice-select.css">
<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/gijgo.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/slick.css">
<link rel="stylesheet" href="css/slicknav.css">
<link rel="stylesheet" href="css/style.css">
<!-- <link rel="stylesheet" href="css/responsive.css"> -->
<style> 
    
.panel .front{
    position:absolute;
    top:-185px;
  left:0px;
  background: linear-gradient(324.99deg, rgba(8, 45, 108, 0.42) 0%, rgba(0, 143, 224, 0.7) 37.73%, rgba(220, 244, 255, 0.035) 102.72%), rgba(0, 143, 224, 0.7);
box-shadow: 0px 2px 4px rgba(8, 45, 108, 0.2), -6px -6px 25px rgba(0, 143, 224, 0.1), 6px 6px 16px rgba(8, 45, 108, 0.2);
    text-align: center;
    -webkit-transform: rotateX(0) rotateY(0);
    transform: rotateX(0) rotateY(0);
  -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
   -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}

.panel .back{
     position:absolute;
  top:-185px;
  left:0px;
  background:#082d6c;
box-shadow: 0px 2px 4px rgba(8, 45, 108, 0.2), -6px -6px 25px rgba(0, 143, 224, 0.1), 6px 6px 16px rgba(8, 45, 108, 0.2);
    text-align: center;
    -webkit-transform: rotateY(-179deg);
    transform: rotateY(-179deg);
  -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
   -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}

.panel.flip .front{ transform: rotateY(179deg) }
.panel.flip .back{ -webkit-transform: rotateX(0) rotateY(0); }

  .panel {
    -webkit-perspective: 800px;
            perspective: 800px;
  }
 .swing .front,
  .swing .back {
    width: 140px;
    -webkit-transition-duration: 1s;
    transition-duration: 1s;
    -webkit-transform-origin: 170px 0;
    transform-origin: 170px 0;
  }
  .swing .front {
    -webkit-transform: rotateY(0);
    transform: rotateY(0);
  }
  .swing .back {
    background-color: #555; /* hiding this side, so get darker */
    -webkit-transform: rotateY(-180deg) translateX(198px) translateZ(2px);
            transform: rotateY(-180deg) translateX(198px) translateZ(2px);
  }

  .swing.flipswing .front {
    background-color: #222; /* hiding this side, so get darker */
    -webkit-transform: rotateY(180deg);
            transform: rotateY(180deg);
  }
  .swing.flipswing .back {
    background-color: #80888f;
    -webkit-transform: rotateY(0) translateX(198px) translateZ(2px);
            transform: rotateY(0) translateX(198px) translateZ(2px);
  }


    </style>
    <style>
  .footer_widget {
    display: block !important;
}
    .btn-success{
        color: #008FE0 !important;
        background-color: transparent !important;
        border-color: transparent !important;
    }
    .stepwizard-step p {
    margin-top: 0px;
    color:#666;
    display: inline-table;
    vertical-align: middle;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}

.stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
    opacity:1 !important;
    color:#bbb;
}

.stepwizard-step {
    display: table-cell;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}

.panel .front{
    position:absolute;
    top:-185px;
  left:0px;
  background: linear-gradient(324.99deg, rgba(8, 45, 108, 0.42) 0%, rgba(0, 143, 224, 0.7) 37.73%, rgba(220, 244, 255, 0.035) 102.72%), rgba(0, 143, 224, 0.7);
box-shadow: 0px 2px 4px rgba(8, 45, 108, 0.2), -6px -6px 25px rgba(0, 143, 224, 0.1), 6px 6px 16px rgba(8, 45, 108, 0.2);
    text-align: center;
    -webkit-transform: rotateX(0) rotateY(0);
    transform: rotateX(0) rotateY(0);
  -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
   -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}

.panel .back{
    position:absolute;
    top:-185px;
    left:0px;
    background:#082d6c;
    box-shadow: 0px 2px 4px rgba(8, 45, 108, 0.2), -6px -6px 25px rgba(0, 143, 224, 0.1), 6px 6px 16px rgba(8, 45, 108, 0.2);
    text-align: center;
    -webkit-transform: rotateY(-179deg);
    transform: rotateY(-179deg);
  -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
   -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}

.panel.flip .front{ transform: rotateY(179deg) }
.panel.flip .back{ -webkit-transform: rotateX(0) rotateY(0); }

  /* .panel {
    -webkit-perspective: 800px;
            perspective: 800px;
  } */
 .swing .front,
  .swing .back {
    width: 140px;
    -webkit-transition-duration: 1s;
    transition-duration: 1s;
    -webkit-transform-origin: 170px 0;
    transform-origin: 170px 0;
  }
  .swing .front {
    -webkit-transform: rotateY(0);
    transform: rotateY(0);
  }
  .swing .back {
    background-color: #555; /* hiding this side, so get darker */
    -webkit-transform: rotateY(-180deg) translateX(198px) translateZ(2px);
            transform: rotateY(-180deg) translateX(198px) translateZ(2px);
  }

  .swing.flipswing .front {
    background-color: #222; /* hiding this side, so get darker */
    -webkit-transform: rotateY(180deg);
            transform: rotateY(180deg);
  }
  .swing.flipswing .back {
    background-color: #80888f;
    -webkit-transform: rotateY(0) translateX(198px) translateZ(2px);
            transform: rotateY(0) translateX(198px) translateZ(2px);
  }
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(images/preloader.svg) center no-repeat #fff;
}

    </style>
<script>
function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
function toggle_close() {

      
	  document.getElementById("alert").style.display = 'none';
    document.getElementById("demo1").style.display = 'none';
      
	
	}
</script>

</head>
<body>
<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
<!-- header-start -->
<div class="se-pre-con"></div>
<header>
  <div class="header-area">
      <div id="sticky-header" class="main-header-area">
          <div class="container-fluid">
              <div class="header_bottom_border">
                  <div class="row align-items-center">
                      <div class="col-xl-3 col-lg-2">
                          <div class="logo">
                              <a href="./">
                                  <img src="img/logo.png" alt="">
                              </a>
                          </div>
                      </div>
                      <div class="col-xl-9 col-lg-10">
                          <div class="main-menu  d-none d-lg-block">
                              <nav>
                                  <ul id="navigation">
                                     <?php /* <li class="dropdown notifications-menu">
                                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                              <img class="bell" src="img/topupnav.png" alt="">
                                            <span class="label label-warning">10</span>
                                          </a>
                                          
                                          <ul class="dropdown-menu p-3">
                                              <li class="header f-24 l-32 l-s-m-1 blue-gray m-0 w-100">Notifications</li>
                                              <li class="header f-16 l-23 l-s-5 uppercase blue-gray mt-2 ml-0 w-100">New</li>
                                              <li class="ml-2 w-100">
                                                <!-- inner menu: contains the actual data -->
                                                <ul class="menu">
                                                  <li class="m-0">
                                                    <a href="#" class="f-14 l-14 azure-blue pb-2">
                                                      Outstanding information
                                                    </a>
                                                    <p class="f-12 l-20 l-s-m-1 color-grey">There is still some outstanding information regarding your dependents. Please ensure you visit the page and update all the necessary information.</p>
                                                    <div class="button-group-area">
                                                      <a href="#" class="genric-btn w-45 f-14 l-20 l-s-5 success-border large w-37 bg-azure-blue nextBtn uppercase color-white font-strong border-3x mb-3 py-3 px-3">Update now</a>
                                                  </div>
                                                  </li>
                                                  <li class="m-0 mt-3">
                                                      <a href="#" class="f-14 l-14 azure-blue pb-2">
                                                          Updated terms and conditions
                                                        </a>
                                                        <p class="f-12 l-20 l-s-m-1 color-grey">We have updated our terms and conditions. Please agree to the new terms & conditions.</p>
                                                        <div class="button-group-area">
                                                          <a href="#" class="genric-btn w-45 f-14 l-20 l-s-5 success-border large w-37 bg-azure-blue nextBtn uppercase color-white font-strong border-3x mb-3 py-3 px-3">Read & accept</a>
                                                      </div>
                                                  </li>
                                                  <li class="m-0 mt-3">
                                                      <a href="#" class="f-14 l-14 azure-blue pb-2">
                                                          Debit order bounced
                                                        </a>
                                                        <p class="f-12 l-20 l-s-m-1 color-grey">Your debit order bounced, please update your payment details.</p>
                                                        <div class="button-group-area">
                                                          <a href="#" class="genric-btn w-45 f-14 l-20 l-s-5 success-border large w-37 bg-azure-blue nextBtn uppercase color-white font-strong border-3x mb-3 py-3 px-3">Update now</a>
                                                      </div>
                                                  </li>
                                                  <hr class="border-top-columbia-blue">
                                                  <li class="header f-16 l-23 l-s-5 uppercase blue-gray mt-2 ml-0 w-100">Earlier</li>
                                                  <li class="m-0 mt-3">
                                                      <a href="#" class="f-14 l-14 azure-blue pb-2">
                                                          Outstanding information
                                                        </a>
                                                        <p class="f-12 l-20 l-s-m-1 color-grey">There is still some outstanding information regarding your dependents. Please ensure you visit the page and update all the necessary information.</p>
                                                  </li>
                                                  <li class="m-0 mt-3 mb-5">
                                                      <a href="#" class="f-14 l-14 azure-blue pb-2">
                                                          Welcome, <?php echo $_SESSION['username']; ?>
                                                        </a>
                                                        <p class="f-12 l-20 l-s-m-1 color-grey">Welcome to your account, <?php echo $_SESSION['username']; ?>. You can get started by filling in all your personal details.</p>
                                                  </li>
                                                </ul>
                                              </li>
                                            </ul>
                                        </li>*/ ?>
                                      
                                      <li><a href="javascript:void(0)" class="f-12 l-14">Welcome &nbsp;&nbsp;<br/><?php echo $_SESSION['client_username']; ?></a></li>
                                      <li><a href="javascript:void(0)"><i class="ti-angle-down"></i></a>
                                          <ul class="submenu p-2 text-center">
                                            <?php /*<li><a class="f-14 l-20 azure-blue" href="#">Profile</a></li>
                                            <li><a class="f-14 l-20 azure-blue" href="#">Account</a></li> */ ?>
                                            <li><a class="f-14 l-20 azure-blue font-strong" href="logout">Log out</a></li>
                                          </ul>
                                        </li>
                                      
                                  </ul>
                              </nav>
                              
                          </div>
                          
                      </div>
                      
                      <div class="col-12">
                          <div class="mobile_menu d-block d-lg-none"></div>
                      </div>
                  </div>
              </div>

          </div>
      </div>
  </div>
    
</header>

<!-- header-end -->

<!-- bradcam_area  -->
<section class="profile_tc bg-blue">
  <div class="navbar subnav navbar-static-top px-xl-5 px-lg-5 px-md-5 py-3">
      <div class="container-fluid">

         <div class="row">
             <div class="col-md-12 col-sm-12">
              <div class="topnav sub-menu">
                  <ul class="list-inline m-0 p-0">
                      <li class="list-inline-item"><a class="active f-14 l-14" href="dashboard">My Dashboard</a></li>
                      <!-- <li class="list-inline-item"><a class="f-14 l-14" href="#">My claims</a></li>
                      <li class="list-inline-item"><a class="f-14 l-14" href="#">My documents</a></li> -->
                    </ul>
              </div>
             </div>
         </div>
      </div>
  </div>
