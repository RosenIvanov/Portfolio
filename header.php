<!DOCTYPE html>
<html id="standart" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="copyright" content="Rosen Ivanov 2017">
    <meta name="author" content="Rosen Ivanov">
    <meta name="description" content="<?= $pgDesc ?> " />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/fav-icon.png" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">
    <!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
    <!-- Some of the graphics on this website have been downloaded and modified from -> http://www.graphicsfuel.com/ <- check them out -->
    <title>
        <?php echo $pageTitle; ?>
    </title>
</head>

<body>
    <header id="header">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="index.php"><img src="images/lazy-load-hack.png" data-original="images/logo.png" width="235" alt="logo"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.php">HOME</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">SERVICES <b class="caret"></b></a>
                            <ul class="dropdown-menu animated fadeIn">
                                <li><a href="web-design.php"><i class="fa fa-laptop" aria-hidden="true"></i> Web Design</a></li>
                                <li><a href="cms-system.php"><i class="fa fa-wordpress" aria-hidden="true"></i> CMS System</a></li>
                                <li><a href="content-writing.php"><i class="fa fa-line-chart" aria-hidden="true"></i> Content Writing</a></li>
                                <li><a href="search-engine-optimization.php"><i class="fa fa-bar-chart" aria-hidden="true"></i> SEO</a></li>
                                <li><a href="graphic-design.php"><i class="fa fa-paint-brush" aria-hidden="true"></i> Graphic Design</a></li>
                                <li><a href="photography.php"><i class="fa fa-camera-retro" aria-hidden="true"></i> Photography</a></li>
                            </ul>
                        </li>
                        <li><a href="portfolio.php">PORTFOLIO</a></li>
                        <li><a href="http://blog.rosen-ivanov.com" target="_blank">BLOG</a></li>
                        <li class="last"><a href="contact.php">CONTACT</a></li>
                        <li class="animated social mobile-layout1"><a href="https://www.facebook.com/rosenivanov933" target="_blank"><i class="fa fa-facebook color-facebook"></i></a></li>
                        <li class="animated social mobile-layout2"><a href="https://twitter.com/rosenplamenov93" target="_blank"><i class="fa fa-twitter color-twitter"></i></a></li>
                        <li class="animated social mobile-layout3"><a href="https://www.linkedin.com/in/rosen-ivanov-b5b272116" target="_blank"><i class="fa fa-linkedin color-linkedin"></i></a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-collapse -->
        </nav>
    </header>
    <!-- SCROLL TO TOP BUTTON -->
    <a href="#" class="back-to-top" style="display: inline;"> <i class="fa fa-chevron-circle-up" aria-hidden="true" data-toggle="tooltip" title="Back To Top"></i> </a>
    <!-- END OF SCROLL TO TOP BUTTON -->