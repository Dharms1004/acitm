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
            <h1><span>Your </span>Result</h1>
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
                        <form id="contact_form" action="<?= base_url() ?>admin/result/getResult" method="post" enctype="multipart/form-data">
                            <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="panel panel-warning" id='DivIdToPrint'>
                                            <div class="panel-heading">
                                                Result
                                            </div>

                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover">
                                                        <tbody>
                                                        <tr>

                                                            <td colspan="4" style="">
                                                              <p style="margin-left: 100px;">ISO 9001:2015 Certified Organization Institute</p>
                                                              <h4 style="margin-left: 60px;"><b>Adheesh Computer Institute of Technology</b></h4>
                                                              <h5 style="margin-left: 30px;">Regd. By Govt. of UP, Indian Govt, and DOEACC SOCIETY and HRD</h5>
                                                          </td>
                                                        </tr>
                                                            <tr>
                                                                <th width="25%">Student Name</th>
                                                                <td colspan="2"><?= $student['name'] ?></td>
                                                                <?php $img = explode("|", $student['documents']) ?>
                                                                <td rowspan="4" width="27%"><img style="width: 115px;
                                                                " src="<?= base_url(); ?>assets/images/student/<?= $img[0]; ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <th width="25%">Dob</th>
                                                                <td colspan="2"><?= $student['dob'] ?></td>
                                                                
                                                                
                                                            </tr>
                                                            <tr>
                                                                <th width="25%">Father's Name</th>
                                                                <td colspan="2"><?= $student['father_name'] ?></td>
                                                                
                                                                
                                                            </tr>
                                                            <tr>
                                                                <th width="25%">Mother's Name</th>
                                                                <td colspan="2"><?= $student['mother_name'] ?></td>
                                                                
                                                                
                                                            </tr>
                                                            <tr>
                                                                <th width="25%">Roll No.</th>
                                                                <td colspan="3"><?= $student['roll'] ?></td>
                                                                
                                                                
                                                            </tr>
                                                            <tr>
                                                                <th>Branch</th>
                                                                <?php $branch = $this->branch_model->getBranchById($student['branch_id']); ?>
                                                                <td><?= $branch['branch_name'] ?></td>
                                                                <th width="15%">Course</th>
                                                                <?php $course = $this->course_model->getCourseById($student['course_id']); 
                                                                $module = explode("|", $course['module']);
                                                                $mark = explode("|", $result['result']);
                                                               
                                                                ?>
                                                                <td><?= $course['name'] ?></td>
                                                                
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table class="table table-striped table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th width="5%">S.No</th>
                                                                <th>Module's Name</th>
                                                                <th width="20%">Max Marks</th>
                                                                <th width="25%">Mark Obtained</th>
                                                                <th width="5%">%</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $count = 1;
                                                        for ($i=0; $i < count($module) ; $i++) { 
                                                            
                                                            ?>                 
                                                            <tr>
                                                                <td><?= $count ?></td>
                                                                <td><?= $module[$i]; ?></td>
                                                                <td>100</td>
                                                                <?php  $total += $mark[$i] ;  ?>
                                                                <td><?= $mark[$i]; ?></td>
                                                                <td><?= ($mark[$i] / 100)*100 ?>%</td>
                                                            </tr>
                                                            <?php $count++; } ?>
                                                            <tr>
                                                                <th colspan="2" style="text-align: right">TOTAL</th>
                                                                <?php 
                                                                $mm = ($count-1)*100;
                                                                ?>
                                                                <td><?= $mm ?></td>
                                                                <?php 
                                                                
                                                                    $avg = ($total / $mm) *100;
                                                                 ?>
                                                                <td><?= $total; ?></td>
                                                                <td><?= $avg; ?>%</td>
                                                            </tr>
                                                        </tbody>
                                                        <table style="width: 70%; margin: 0 auto" class="table table-bordered">
                                                           <tbody >
                                                                <tr>
                                                                    <th>Result</th>
                                                                    <th>Percentage</th>
                                                                    <th>**Grade</th>
                                                                </tr>
                                                                <tr>
                                                                <?php 
                                                                    if($avg >= 80){
                                                                        $gr = "Excellent";
                                                                    }elseif ($avg < 80 && $avg >= 60 ) {
                                                                        $gr = "Good";
                                                                    }elseif ($avg < 60 && $avg >= 50 ) {
                                                                        $gr = "Average";
                                                                    }elseif ($avg < 50 ) {
                                                                        $gr = "Fail";
                                                                    }
                                                                ?>
                                                                    <td><?= $total; ?></td>
                                                                    <td><?= $avg; ?>%</td>
                                                                    <td><?= $gr; ?></td>
                                                                </tr>
                                                            </tbody> 
                                                        </table>
                                                        
                                                    </table>
                                                    <input type='button' id='btn' value='Print' onclick='printDiv();'>
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