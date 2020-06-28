<?php include_once("include/header.php") ?>

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>About Us</h1>
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- About Institute start -->
<div class="about-institute">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="car-detail-slider simple-slider">
                    <div id="carousel-custom" class="carousel slide" data-ride="carousel">
                        <div class="carousel-outer">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item">
                                    <img style="width: 182px; height: 262px;" src="<?= base_url();?>assets/frontend/img/about/bb.JPG" class="img-preview img-responsive" alt="about-2">
                                </div>
                                <div class="item active left">
                                    <img style="width: 182px; height: 262px;" src="<?= base_url();?>assets/frontend/img/about/adheesh.jpeg" class="img-preview img-responsive" alt="about-3">
                                </div>
                                <div class="item next left">
                                    <img style="width: 182px; height: 262px;" src="<?= base_url();?>assets/frontend/img/about/about-1.png" class="img-preview img-responsive" alt="about-1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="about-text">
                    <!-- title -->
                    <div class="main-title" >
                        <h1><span>Welcome to </span>ACIT</h1>
                    </div>
                    <!-- paragraph -->
                    <p>Wormly welcome you to the website of (ACIT) Adheesh Computer Institute of Technology & Managment. ACIT is a leading computer training institute having registration with UP Government offering various diploma and certificate courses in computer application, Desktop publishing, computer programming, accounting, Web Designing, Animation, Graphic Designing etc.All the courses offered here are academically inspiring & demanding.</p>
                    <!-- ul -->
                    <ul class="clearfix">
                        <li>
                            <i class="fa fa-check-square-o"></i> Career Guidance
                        </li>
                        <li>
                            <i class="fa fa-check-square-o"></i> Customized Syllabus
                        </li>
                        <li>
                            <i class="fa fa-check-square-o"></i> Industry Expert Faculties
                        </li>
                        <li>
                            <i class="fa fa-check-square-o"></i> Intensive Training
                        </li>
                        <li>
                            <i class="fa fa-check-square-o"></i> 
Free Demo Class Available
                        </li>
                        <li>
                            <i class="fa fa-check-square-o"></i> Industry Expert Faculties
                        </li>
                        <li>
                            <i class="fa fa-check-square-o"></i> 
Live Project Training
                        </li>
                        <li>
                            <i class="fa fa-check-square-o"></i> 
All Payment Mode Option
                        </li>
                    </ul>
                    <!-- btn -->

                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" style="margin-top: 70px;">
            <hr>
                <div class="about-text">
                    <!-- title -->
                    <div class="main-title" >
                        <h1><span>Director's </span>Message</h1>
                    </div>
                    <!-- paragraph -->
                    <p>Students are bright future of this country. India is developing country. India has now embraced globlization. Big changes in our life style, ideas and ideal are taking places. The world become a global village. So its very necessary to know about information technology.

At ACIT courses are designed in a right balances of theoretical concept and practical skills. This institute drawn from the field ensures relevant exposure to student and gives them winning edge. 
So I am very glad at this moment and hope when you depart this institute world carry the focus of knowledge

I must desire that you would lightening whole world with your heartest efforts and greatest contribution.</p>

                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="margin-top: 70px;">
            <hr>
                <div class="car-detail-slider simple-slider">
                 <!-- Wrapper for slides -->
                    <div class="item">
                            <img style="width: 200px; float: right;" src="<?= base_url();?>assets/frontend/img/director.png" class="img-preview img-responsive" alt="about-2">
                    </div>
                </div>
                <div class="item">
                           <p style="margin-top: 280px; margin-left: 95px; color: red;">N.K Sharma (Adheesh)</p>
                    </div>
            </div>

        </div>
    </div>
</div>
<!-- About Institute end -->

<!-- Teachers section start -->
<div class="mrg-btm-70 teachers-section chevron-icon">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><span>Our</span> Partners</h1>
        </div>
        <div class="row">
            <div class="carousel our-partners slide" id="ourPartners3">
                <div class="col-lg-12 mrg-btm-30">
                    <a class="right carousel-control" href="#ourPartners3" data-slide="prev"><i class="fa fa-chevron-left icon-prev"></i></a>
                    <a class="right carousel-control" href="#ourPartners3" data-slide="next"><i class="fa fa-chevron-right icon-next"></i></a>
                </div>
               <div class="carousel-inner">
                    
                    <?php 
                    	$class = 'active';
                    	foreach ($parteners as $partener) {
                    		
                    ?>
                    <div class="item <?= $class ?>">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Teachers box start -->
                            <div class="teachers-box">
                                <!-- Teacher img -->
                                <a href="teachers.html" class="teachers-img">
                                    <img style="    width: 263px; height: 250px;" src="<?= base_url();?>assets/images/partener/<?= $partener['image'] ?>" alt="partener" class="img-responsive">
                                </a>
                                <!-- Teachers content -->
                                <div class="teachers-content">
                                    <!-- title -->
                                    <h1 class="title">
                                        <a href="teachers.html"><?= $partener['name']?></a>
                                    </h1>
                                    <!-- Subject -->
                                    <h3 class="subject"><?= $partener['description']?></h3>
                                    <!-- paragraph -->
                                    <p>lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <!-- Social list -->
                                    <ul class="social-list clearfix">
                                        <li>
                                            <a href="#" class="facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="google">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="rss">
                                                <i class="fa fa-rss"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Teachers box end -->
                        </div>
                    </div>
                    <?php $class = " "; } ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Teachers section end -->

<?php include_once("include/footer.php") ?>