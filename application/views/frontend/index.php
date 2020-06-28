 <?php include_once("include/header.php") ?>

<?php include_once("include/banner.php") ?>


<!-- Services section start -->
<div class="content-area course-section">
        <div class="services-section mrg-btm-50">
            <div class="overlay">
                <div class="container">
                    <!-- Main title -->
                    <div class="main-title">
                        <h1><span>Welcome to</span> Our Website</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp delay-04s">
                            <div class="media">
                                <div class="media-body">
                                    <p class="wel">Wormly welcome you to the website of (ACIT) Adheesh Computer Institute of Technology & Managment. ACIT is a leading computer training institute having registration with UP Government offering various diploma and certificate courses in computer application, Desktop publishing, computer programming, accounting, Web Designing, Animation, Graphic Designing etc.All the courses offered here are academically inspiring & demanding.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- Services section end -->

<!-- Course section start -->
    <div class="container mrg-btm-50">
        <!-- Main title -->
        <div class="main-title">
            <h1><span>Our </span> Courses</h1>
        </div>
        <div class="row">
        <?php 

        foreach ($courses as $course) {

        ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInLeft delay-04s">
                <!-- Course box start -->
                <div class="course-box">
                    <!--header -->
                    <div class="header clearfix">
                        <img style="width: 360px; height: 203px" src="<?= base_url();?>assets/images/course/<?= $course['course_image'] ?>" alt="edu-2" class="img-responsive">
                    </div>
                    <!-- Detail -->
                    <div class="detail clearfix">
                        <div class="price">
                            ₹<?= $course['fees'] ?>
                        </div>
                        <h3>
                            <a href="#"><?= $course['name'] ?></a>
                        </h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                        <ul class="courses-info">
                            <li>
                                <h5>Course Time</h5>
                                <span><?= $course['duration'] ?> Months</span>
                            </li>
                            <li>
                                <h5>Course Student</h5>
                                <span>88</span>
                            </li>
                            <li>
                                <h5>Class Duration</h5>
                                <span>9:00-5:00</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Course box end -->
            </div>
         <?php } ?>
        </div>
    </div>

<!-- Course section end -->

<div class="clearfix"></div>
<!-- Testimonial secion start -->
<div class="testimonial-section testimonial-bg">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                    <div class="sec-title-three">
                        <h4>Happy Students</h4>
                        <h2>Students Testimonial</h2>
                        <div class="text">
                            We collect reviews from our customers so you can get an honest opinion of what an Teachers meating is really like!
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
                    <div class="testimonials">
                        <div id="carouse3-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item content clearfix">
                                    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12">
                                        <div class="avatar">
                                            <img src="<?= base_url();?>assets/frontend/img/testimonial/avatar-1.jpg" alt="avatar-1" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="text">
                                            <sup>
                                                <i class="fa fa-quote-left"></i>
                                            </sup>
                                            Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa eu porta ultricies.
                                            <sub>
                                                <i class="fa fa-quote-right"></i>
                                            </sub>
                                        </div>
                                        <div class="author-name">
                                            John Antony
                                        </div>
                                        <div class="department">
                                            Department of CSE
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-half-full"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="item content active clearfix">
                                    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12">
                                        <div class="avatar">
                                            <img src="<?= base_url();?>assets/frontend/img/testimonial/avatar-2.jpg" alt="avatar-2" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="text">
                                            <sup>
                                                <i class="fa fa-quote-left"></i>
                                            </sup>
                                            Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa eu porta ultricies.
                                            <sub>
                                                <i class="fa fa-quote-right"></i>
                                            </sub>
                                        </div>
                                        <div class="author-name">
                                            John Antony
                                        </div>
                                        <div class="department">
                                            Department of Physics
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-half-full"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="item content clearfix">
                                    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12">
                                        <div class="avatar">
                                            <img src="<?= base_url();?>assets/frontend/img/testimonial/avatar-3.jpg" alt="avatar-3" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="text">
                                            <sup>
                                                <i class="fa fa-quote-left"></i>
                                            </sup>
                                            Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa eu porta ultricies.
                                            <sub>
                                                <i class="fa fa-quote-right"></i>
                                            </sub>
                                        </div>
                                        <div class="author-name">
                                            John Antony
                                        </div>
                                        <div class="department">
                                            Department of BBA
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-half-full"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="item content clearfix">
                                    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12">
                                        <div class="avatar">
                                            <img src="<?= base_url();?>assets/frontend/img/testimonial/avatar-4.jpg" alt="avatar-4" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12 ">
                                        <div class="text">
                                            <sup>
                                                <i class="fa fa-quote-left"></i>
                                            </sup>
                                            Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa eu porta ultricies.
                                            <sup>
                                                <i class="fa fa-quote-right"></i>
                                            </sup>

                                        </div>
                                        <div class="author-name">
                                            John Antony
                                        </div>
                                        <div class="department">
                                            Department of Medicine
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-half-full"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#carouse3-example-generic" role="button" data-slide="prev">
                            <span class="slider-mover-left" aria-hidden="true">
                                <i class="fa fa-angle-left"></i>
                            </span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carouse3-example-generic" role="button" data-slide="next">
                            <span class="slider-mover-right" aria-hidden="true">
                                <i class="fa fa-angle-right"></i>
                            </span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial section end -->
<div class="clearfix"></div>

<!-- Blog section start -->
<div class="blog-section content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><span>Our </span>Branches</h1>
        </div>
        <div class="row">
        <?php 

            foreach ($branches as $branch) {

            $day = explode("/", $branch['opening_date']);
            $m = explode("/", $branch['opening_date']);
            switch ($m[1]) {
            case 1:
                $month = 'Jan';
                break;
            case 2:
                $month = 'Feb';
                break;

            case 3:
                $month = 'Mar';
                break;
            case 4:
                $month = 'Apr';
                break;
            case 5:
                $month = 'May';
                break;
            case 6:
                $month = 'Jun';
                break;
            case 7:
                $month = 'Jul';
                break;
            case 8:
                $month = 'Aug';
                break;
            case 9:
                $month = 'Sep';
                break;
            case 10:
                $month = 'Oct';
                break;
            case 11:
                $month = 'Nov';
                break;
            case 12:
                $month = 'Dec';
                break;
            default:
                $month = 'Month';
                break;
            }

        ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInLeft delay-04s">
                <div class="thumbnail blog-box clearfix">
                    <img style="width: 360px; height: 240px;" src="<?= base_url()."assets/images/branch/".$branch['image']?>" alt="edu-6" class="img-responsive">
                    <!-- detail -->
                    <div class="caption detail">
                        <div class="date-box">
                            <h5><?= $day[0] ?></h5>
                            <h5><?= $month ?></h5>
                            <h5><?= $day[2] ?></h5>
                        </div>
                        <!-- Main title -->
                        <div class="main-title-2">
                            <h1><a href="#"><?= $branch['branch_name'] ?></a></h1>
                        </div>
                        <!-- Post meta -->
                        <div class="post-meta">
                            <span><a href="#"><i class="fa fa-user"></i><?= strtok($branch['owner_name']," ") ?></a></span>
                            <span><a><i class="fa fa-clock-o"></i>July 20</a></span>
                            <span><a href="#"><i class="fa fa-commenting-o"></i>24 Comment</a></span>
                        </div>
                        <!-- paragraph -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna  Ut enim ad minim veniam, quis nostrud</p>
                        <div class="clearfix"></div>
                        <!-- Btn -->
                        <a href="#" class="btn button-sm button-theme">Read More</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Blog section end -->

<!-- Counters strat -->
<div class="counters">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 bordered-right">
                    <div class="counter-box">
                        <i class="fa fa-4x fa-users"></i>
                        <h1 class="counter">450</h1>
                        <p>Students</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 bordered-right">
                    <div class="counter-box">
                        <i class="fa fa-4x fa-calendar"></i>
                        <h1 class="counter">15</h1>
                        <p>Branches</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 bordered-right">
                    <div class="counter-box">
                        <i class="fa fa-4x fa-male"></i>
                        <h1 class="counter">98</h1>
                        <p>Teachers</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter-box counter-box-2">
                        <i class="fa fa-4x fa-trophy"></i>
                        <h1 class="counter">100</h1>
                        <p>Placements</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counters end -->

<!-- Partners block start -->
<div class="partners-block">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="carousel our-partners slide" id="ourPartners">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a href="#">
                                    <img src="<?= base_url();?>assets/frontend/img/brand/neilet.png" alt="audiojungle">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a href="#">
                                    <img src="<?= base_url();?>assets/frontend/img/brand/c.png" alt="themeforest">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a href="#">
                                    <img src="<?= base_url();?>assets/frontend/img/brand/tally.png" alt="tuts">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a href="#">
                                    <img src="<?= base_url();?>assets/frontend/img/brand/ccc.png" alt="graphicriver">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a href="#">
                                    <img src="<?= base_url();?>assets/frontend/img/brand/office.png" alt="codecanyon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#ourPartners" data-slide="prev"><i class="fa fa-chevron-left icon-prev"></i></a>
                    <a class="right carousel-control" href="#ourPartners" data-slide="next"><i class="fa fa-chevron-right icon-next"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partners block end -->


<?php include_once("include/footer.php") ?>
