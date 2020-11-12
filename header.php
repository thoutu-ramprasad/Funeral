<!doctype html>
<html>
<head> 
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Telkom</title>
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
    <link rel="stylesheet" href="css/jquery-steps.css">
  <!-- Demo stylesheet -->
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>
<?php 
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<style>
.form-section {
  position: fixed;
  visibility:hidden;
  opacity:0;
  transition: opacity 1.75s ;
   -moz-transition: opacity 1.75s ;
   -webkit-transition: opacity 1.75s ;
}
.form-section.current {
 position: relative;
  visibility:visible;
  opacity:1;
  transition: opacity 1.75s ease-in-out;
   -moz-transition: opacity 1.75s ease-in-out;
   -webkit-transition: opacity 1.75s ease-in-out;
}
.btn-info, .btn-default {
  margin-top: 10px;
}

.form-navigation{
 transition: all 1.75s ease-in-out;
   -moz-transition: all 1.75s ease-in-out;
   -webkit-transition: all 1.75s ease-in-out; 
}

</style>
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
	opacity: 0.5;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(images/preloader.svg) center no-repeat #fff;
}
.se-pre-con-inner {
	position: absolute;
    left: 0px;
    top: 0px;
	opacity: 0.5;
    width: 100%;
    height: 100%;
    z-index: 1;
	border-radius:5px;
    background: url(images/preloader.svg) center no-repeat #fff;
}

    </style>
<body>
<div class="se-pre-con"></div>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
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
                                            <li><a href="./">Home</a></li>
                                            <li><a href="funeral-detail#plans">Plans</a></li>
                                            <li><a href="funeral-detail#features">Features</a></li>
                                            <li><a href="get-a-quote">Get a Quote</a></li>
                                            <?php if (empty($_SESSION) || $_SESSION['client_username'] == "") { ?>
                                            <li><a href="login">Login</a></li> <?php }else{ ?>
                                            <li><a href="#" class="f-12 l-14">Welcome<br/>
                                            <?php echo $_SESSION['client_username']; ?></a>
                                            </li>
                                            <li><a href="#"><i class="ti-angle-down"></i></a>
                                                <ul class="submenu p-2 text-center">
                                                    <!-- <li><a class="f-14 l-20 azure-blue" href="#">Profile</a></li> -->
                                                    <li><a class="f-14 l-20 azure-blue font-strong" href="dashboard">Dashboard</a></li> 
                                                    <li><a class="f-14 l-20 azure-blue font-strong" href="logout">Log out</a></li>
                                                </ul>
                                                </li>
                                            <?php } ?>
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            
                            <div class="col-12">                                   
                                <div class="mobile_search d-block d-lg-none">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.50435 13.106C3.29209 13.106 0.688147 10.5017 0.688147 7.28947C0.688147 4.07721 3.29209 1.47326 6.50435 1.47326C9.7166 1.47326 12.3205 4.07721 12.3205 7.28947C12.3205 10.5017 9.7166 13.106 6.50435 13.106ZM14.9574 15.2587L11.3311 11.6325C12.3685 10.4809 13.0048 8.96151 13.0048 7.28952C13.0048 3.69956 10.0947 0.789062 6.50437 0.789062C2.9144 0.789062 0.00390625 3.69956 0.00390625 7.28952C0.00390625 10.8798 2.9144 13.79 6.50437 13.79C8.17635 13.79 9.69575 13.1536 10.8474 12.1163L14.4736 15.7425C14.5355 15.8048 14.621 15.8428 14.7155 15.8428C14.9047 15.8428 15.0576 15.6898 15.0576 15.5006C15.0576 15.4065 15.0196 15.321 14.9574 15.2587Z" fill="white"/>
                                        </svg>                                        
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