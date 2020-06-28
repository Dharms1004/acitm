<?php include_once("include/header.php") ?>

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Franchisee</h1>
                <ul class="breadcrumbs">
                    <li><a href="<?= base_url(); ?>">Home</a></li>
                    <li class="active">Franchisee</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="courses-section content-area">
<div class="container">
        <!-- Main title -->
        <?php if (isset($_SESSION['success'])) { ?>
                <div class="alert alert-success">
                    <?=  $_SESSION['success'] ?>
                </div>
                  <?php  }  ?>
        <div class="main-title">
            <h1><span>Become Our </span>Parteners</h1>
        </div>
    <div class="row">
                <div class="col-md-12">
                    <!-- Contact form start -->
                    <div class="contact-form">
                        <form id="contact_form" action="<? base_url() ?>pages/franchisee" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group fullname">
                                        <input type="text" name="username" class="input-text" required placeholder="Full Name">
                                    </div>
                                    <div class="form-group enter-email">
                                        <input type="email" name="email" class="input-text" required placeholder="Enter email">
                                    </div>
                                    <div class="form-group subject">
                                        <input type="text" name="subject" class="input-text" required placeholder="Subject">
                                    </div>
                                    <div class="form-group number">
                                        <input type="text" name="phone" class="input-text" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group message">
                                        <textarea class="input-text" name="message" required placeholder="Write message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group send-btn">
                                        <button type="submit" class="button-md button-theme">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Contact form end -->
                </div>
            </div>
        </div>
    </div>

<!-- Sub Banner end -->


<?php include_once("include/footer.php") ?>