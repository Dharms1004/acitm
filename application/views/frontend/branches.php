<?php include_once("include/header.php") ?>


<!-- Sub banner start -->
<div class="sub-banner">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Branches</h1>
                <ul class="breadcrumbs">
                    <li><a href="<?= base_url(); ?>">Home</a></li>
                    <li class="active">Branches</li>
                </ul>
            </div>
        </div>
    </div>
</div>

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


<?php include_once("include/footer.php") ?>
