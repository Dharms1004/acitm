<?php include_once("include/header.php") ?>

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Result</h1>
                <ul class="breadcrumbs">
                    <li><a href="<?= base_url(); ?>">Home</a></li>
                    <li class="active">Result</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="courses-section content-area">
<div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><span>Confirm </span>Details</h1>
        </div>
    <div class="row">
                <div class="col-md-12">
                    <!-- Contact form start -->
                    <div class="contact-form">
        
                            <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="panel panel-warning" id='DivIdToPrint'>
                                            <div class="panel-heading">
                                               Verify your details for Payment
                                            </div>

                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                <form action="<?= $action; ?>/_payment" method="post" id="payuForm" name="payuForm">
                                                    <input type="hidden" name="key" value="<?= $mkey ?>" />
                                                    <input type="hidden" name="hash" value="<?= $hash ?>"/>
                                                    <input type="hidden" name="txnid" value="<?= $tid ?>" />
                                                    <table class="table table-striped table-bordered table-hover">
                                                        <tbody>
                                                            <tr>
                                                                <td>Total Payable Amount</td>
                                                                <td><input class="form-control" name="amount" value="<?= $amount ?>"  readonly/></td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td>Your Name</td>
                                                                <td><input class="form-control" name="firstname" value="<?= $name ?>"  readonly/></td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td>Email</td>
                                                                <td><input class="form-control" name="email" value="<?= $mailid ?>"  readonly/></td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td>Phone</td>
                                                                <td><input class="form-control" name="phone" value="<?= $phoneno ?>"  readonly/></td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td>Course name</td>
                                                                <td><input class="form-control" name="productinfo" value="<?= $productinfo ?>"  readonly/></td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td>Address</td>
                                                                <td><input class="form-control" name="address1" value="<?= $address ?>"  readonly/></td>
                                                                
                                                            </tr>
                                                            <input name="surl" value="<?= $sucess ?>" size="64" type="hidden" />
                                                            <input name="furl" value="<?= $failure ?>" size="64" type="hidden" />                             
                                                            <input type="hidden" name="service_provider" value="payu_paisa" size="64" /> 
                                                            <input name="curl" value="<?= $cancel ?> " type="hidden" />
                                                        </tbody>
                                                        
                                                    </table>
                                                    <input type="submit" value="Pay Now" class="btn btn-success" /></td>
                                                </div>
                                               
                                            </div>
                                         
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