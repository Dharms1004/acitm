<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ACIT Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?= base_url();?>assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url();?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>
<div id="wrapper">
           
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                <?php if (isset($_SESSION['success'])) { ?>
                <div class="alert alert-success">
                    <?=  $_SESSION['success'] ?>
                </div>
                  <?php  }  ?>

                
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                        
                            <table width="100%" style="border: 0px !important" class="table table-bordered" id="dataTables-example">
                                <tbody>
                                    <tr>
                                         <td style="text-align: center; border: 0px !important;">
                                            <img style="width: 130px" src="<?= base_url(); ?>assets/frontend/img/logos/lg.jpg" >
                                        </td>  
                                        <td colspan="2" style="text-align: center; border: 0px !important;">
                                            <p style="margin-left: 20px;font-size: 19px;">ISO 9001:2015 Certified Organization Institute</p>
                                            <h4 style="font-size: 29px;"><b>Adheesh Computer Institute of Technology</b></h4>
                                            <h5 style="margin-left: 18px;font-size: 16px;">Regd. By Govt. of UP, Indian Govt, and DOEACC SOCIETY and HRD</h5>             
                                        </td>     
                                                       
                                    </tr>
                                    <tr >
                                        <td  colspan="3" style="text-align: center; border: 0px !important; font-size: 15px"><strong>ACIT "CCC" EXAMINATION</strong></td>
                                    </tr>
                                    <tr >
                                        <td  colspan="3" style="text-align: center; border: 0px !important; font-size: 15px"><strong>CANDIDATE ADMIT CARD</strong></td>
                                    </tr>
                                    <tr >
                                        <td  colspan="3" style="text-align: center; border: 0px !important; font-size: 15px"><strong>Name of the Candidate<i>(AS FILLED BY THE CANDIDATE)</i></strong></td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td><strong>Roll no.</strong></td>
                                        <?php $course = $this->course_model->getCourseById($student['course_id']);
                                        $branch = $this->branch_model->getBranchById($student['branch_id']);
                                        $docs = explode("|", $student['documents']);

                                         ?>
                                        <td colspan="1"><strong><?= $student['roll']?></strong></td>  
                                        <td rowspan="5"><img width="100px" style="text-align: center;display: block; margin: 0 auto;" src="<?= base_url() ?>assets/images/student/<?= $docs[0] ?>" ></td> 
                                        
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td><strong>Student name</strong></td>
                                        <td colspan="1"><?= $student['name']?></td> 
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td><strong>Father'sName</strong></td>
                                        <td colspan="1"><?= $student['father_name']?></td>   
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td><strong>Mother'sName</strong></td>
                                        <td colspan="1"><?= $student['mother_name']?></td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td><strong>Exam Center</strong></td>
                                        <td colspan="1"><?= $branch['branch_name']?></td> 
                                                                                 
                                    </tr>
                                    <tr class="odd gradeX">     
                                        <td colspan="3" style="text-align: center;"><strong>VALID FOR "CCC" EXAMINATION ONLY</strong></td>  
                                         
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td colspan="3" style="text-align: center;"><strong>BATCH SCHEDULE</strong></td>  
                                         
                                    </tr>
                                    <tr class="odd gradeX">
                                       
                                        <td ><strong>Exam Center Address</strong></td> 
                                        <td colspan="2">Examination Date: <?= $branch['branch_name']?></td> 
                                                                                 
                                    </tr>
                                    <tr class="odd gradeX">
                                        
                                        <td rowspan="5"colspan="1"><?= $branch['branch_name']?></td> 
                                                                                 
                                    </tr>
                                    <tr class="odd gradeX">
                                       
                                        <td colspan="2">BATCH: 1</td> 
                                                                                 
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td colspan="2"><STRONG>REPORTING TIME: 08:45 AM</STRONG></td> 
                                                                                 
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td colspan="2">GATE CLOSING TIME: 09:00 AM<br>No candidate will be allowed to enter the examination center after the gate closing time.</td> 
                                                                                 
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td colspan="2">EXAM DURATION : 90 MIN.</td> 
                                                                                 
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td colspan="3">IMPORTANT: CANDIDATES ARE ADVISED TO PUT THEIR SIGNATURE ON THE ATTENDANCE SHEET. CANDIDATE MUST CARRY ORIGINAL PHOTO IDENTITY CARD ALONG WITH THE ADMIT CARD ISSUED BY THE ACIT, FAILING WHICH THE CANDIADATE SHALLNOT CONSIDERED FOR THE EXAM. </td> 
                                                                                 
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td colspan="3">INSTRUCTION TO BE FOLLOWED BY THE CANDIDATE AT ACET EXAMINATION</td> 
                                                                                 
                                    </tr>

                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>

  <!-- jQuery -->
    <script src="<?= base_url();?>assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?= base_url();?>assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url();?>assets/dist/js/sb-admin-2.js"></script>

    <!-- calender -->
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script>
    (function($) {

var $valFn = $.fn.val;
$.fn.extend({
    val: function() {
        var valCatch = $valFn.apply(this, arguments);
        var placeholder = $(this).attr("placeholder");
        
        // To check this val is called to set value and the val is for datePicker element 
        if (!arguments.length && this.hasClass('hasDatepicker')) {
            if (valCatch.indexOf(placeholder) != -1) {
                return valCatch.replace(placeholder, "");
            }
        }
        return valCatch;
    }
});
$(".datepicker").datepicker({
    dateFormat: 'dd/mm/yy',
    onSelect: function(arg) {
        $(this).val(arg);
    }
});
})(jQuery);

// Insert placeholder as prefix in the value, when user makes a change.

</script>

    <style type="text/css">
        .ui-datepicker {
            width: 210px;
        }
    </style>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/blitzer/jquery-ui.css">
    <!-- calender -->
</body>

</html>