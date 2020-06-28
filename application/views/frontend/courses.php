<?php include_once("include/header.php") ?>

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Courses</h1>
                <ul class="breadcrumbs">
                    <li><a href="<?= base_url(); ?>">Home</a></li>
                    <li class="active">Courses</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Courses section start -->
<div class="courses-section content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><span>Our </span>Courses</h1>
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
</div>
<!-- Courses section end -->
    

<?php include_once("include/footer.php") ?>