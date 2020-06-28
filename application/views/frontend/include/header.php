<!DOCTYPE html>
<html lang="en">


<head>
    <title>ACIT - Computer Institute</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/frontend/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/frontend/css/bootstrap-submenu.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/frontend/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/frontend/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/frontend/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/frontend/fonts/linearicons/style.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/frontend/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/frontend/css/skins/default.css">

    <!-- smart form admission form -->

    <link rel="stylesheet" type="text/css"  href="<?= base_url();?>assets/frontend/css/smart-forms.css">

    <script src='https://www.google.com/recaptcha/api.js'></script>
    
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="<?= base_url();?>assets/frontend/img/lg.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/frontend/css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script type="text/javascript" src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script type="text/javascript" src="<?= base_url();?>assets/frontend/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5shiv.min.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114227017-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-114227017-1');
        </script>

</head>
<body>

<div class="page_loader"></div>

<!-- Top header start -->
<header class="top-header hidden-xs" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12">
                <div class="list-inline">
                    <a href="tel:1-8X0-666-8X88"><i class="fa fa-phone"></i>Need Support? 941-590-6146</a>
                    <a href="tel:info@themevessel.com"><i class="fa fa-envelope"></i>infoacitm@gmail.com</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-5 col-xs-12">
                <ul class="social-list clearfix pull-right">
                    <li>
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-rss"></i>
                        </a>
                    </li>
                    <li>
                        <a href="/admin" class="sign-in"><i class="fa fa-user"></i> Admin LogIn</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Top header end -->

<!-- Main header start -->
<header class="main-header">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navigation" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html" class="logo">
                    <img src="<?= base_url();?>assets/frontend/img/logos/acitmlogo.png" alt="logo">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-collapse collapse" role="navigation" aria-expanded="true" id="app-navigation">
                <ul class="nav navbar-nav" style=" float:right;">
                    <li class="active">
                        <a href="<?= base_url() ?>">Home</a>
                    </li>
                    <li>
                        <a href="about">About Us</a>
                    </li>
                    <li>
                        <a href="courses">Courses</a>
                        
                    </li>
                    <li>
                        <a href="registration">Admission</a>
                    </li>
                    <li>
                        <a href="branches">Branches</a>
                    </li>
                    <li class="dropdown">
                        <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                            Enquiry<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="result">Student Result</a></li>
                            <li><a href="franchisee">Franchisee</a></li>
                            <li><a href="reciept">Download Reciept</a></li>
                            <li><a href="admitcard">Download Admit Card</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="result">Result</a>
                        
                    </li>
                    <li>
                        <a href="contact">Contact</a> 
                    </li>
            </div>

            <!-- /.navbar-collapse -->
            <!-- /.container -->
        </nav>
    </div>
</header>
<!-- Main header end -->