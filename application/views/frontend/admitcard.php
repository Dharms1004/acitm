<?php include_once("include/header.php") ?>

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Admit Card</h1>
                <ul class="breadcrumbs">
                    <li><a href="<?= base_url(); ?>">Home</a></li>
                    <li class="active">Admit Card</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="courses-section content-area">
<div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><span>Download </span>Admitcard</h1>
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
                        <form id="contact_form" action="<?= base_url() ?>pages/card" method="post" enctype="multipart/form-data">
                            <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group fullname">
                                        <input type="text" name="roll" autocomplete="off" class="input-text" placeholder="Your Registraion Number">
                                        <p style="color: red; margin-left: 3px;">e.g. "acit37786000093" </p>
                                    </div>
                                                                        
                                    <div class="form-group send-btn">
                                        <button type="submit" class="button-md button-theme">Get Result</button>
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