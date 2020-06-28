<?php include_once("include/header.php") ?>

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Result</h1>
                <ul class="breadcrumbs">
                    <li><a href="<?= base_url(); ?>">Home</a></li>
                    <li class="active">Reciept</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="courses-section content-area">
    <a href="#getresult"></a>
<div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><span>Get Your </span>Reciept</h1>
            <?php if (isset($_SESSION['success'])) { ?>
                <div class="alert alert-success">
                <?=  $_SESSION['success'] ?>
                </div>
                <?php  }elseif(isset($_SESSION['failure'])){  ?>
                <div class="alert alert-danger">
                <?=  $_SESSION['failure'] ?>
                </div>
                <?php  } ?>
        </div>
    <div class="row">
                <div class="col-md-12">
                    <!-- Contact form start -->
                    <div class="contact-form">
                        <form id="contact_form" action="<?= base_url() ?>pages/getReciept" method="post" enctype="multipart/form-data">
                            <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group fullname">
                                        <input type="text" name="name" autocomplete="off" class="input-text" placeholder="Students Name">
                                    </div>
                                    
                                    <div class="form-group fullname">
                                        
                                            <select id="location" required class="input-text" name="course">
                                                <option hidden>Select Course</option>
                                                <?php
                                                foreach ($courses as $course) {
                                                ?>
                                                <option value="<?= $course['name']?>"><?= $course['name']?></option>
                                                <?php } ?>
                                            </select>
                                            <i class="arrow double"></i>                    
                                        
                                    </div>
                                    <div class="form-group send-btn">
                                        <button type="submit" class="button-md button-theme">Get Reciept</button>
                                    </div>
                                    
                                       
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        
                                    
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
<script type="text/javascript">
    function printDiv() 
{

  var divToPrint=document.getElementById('DivIdToPrint');

  var newWin=window.open('','Print-Window');

  newWin.document.open();

  newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

  newWin.document.close();

  setTimeout(function(){newWin.close();},10);

}
</script>

<?php include_once("include/footer.php") ?>