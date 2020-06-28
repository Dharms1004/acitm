
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Student Form <a href="<?= $_SERVER["HTTP_REFERER"] ?>" type="button"  class="btn btn-primary pull-right"><i class="fa fa-list" aria-hidden="true"></i> Back</a></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                <?php if (isset($_SESSION['success'])) { ?>
                <div class="alert alert-success">
                    <?=  $_SESSION['success'] ?>
                </div>
                  <?php  }  ?>

                
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Details of <?= $student['name'] ?> 
                           <p class="pull-right" ">Admission Date : <?= $student['admission'] ?><p>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td><strong>Course</strong></td>
                                        <?php $course = $this->course_model->getCourseById($student['course_id']);
                                        $branch = $this->branch_model->getBranchById($student['branch_id']);
                                        $docs = explode("|", $student['documents']);

                                         ?>
                                        <td><?= $course['name']?></td>  
                                        <td><strong>Branch</strong></td>
                                        <td><?= $branch['branch_name']?></td> 
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td><strong>Student name</strong></td>
                                        <td><?= $student['name']?></td>  
                                        <td><strong>Certificate </strong><a style="float: right;" href="<?= base_url() ?>assets/images/student/<?= $docs[1] ?>" type="button"  class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> View</a></td>
                                        <td rowspan="4"><img width="100px" src="<?= base_url() ?>assets/images/student/<?= $docs[0] ?>"></td> 
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td><strong>Father'sName</strong></td>
                                        <td><?= $student['father_name']?></td> 
                                        <td><strong>Id Proof </strong><a style="float: right;" href="<?= base_url() ?>assets/images/student/<?= $docs[2] ?>" type="button"  class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> View</a></td>
                                         
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td><strong>Mother'sName</strong></td>
                                        <td><?= $student['mother_name']?></td> 
                                        <td><strong>Signature </strong><a style="float: right;" href="<?= base_url() ?>assets/images/student/<?= $docs[3] ?>" type="button"  class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> View</a></td>
                                         
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td><strong>Mobile</strong></td>
                                        <td><?= $student['mobile_self']?>, <?= $student['mobile_home']?></td> 
                                        <td><strong>Thumb Impression </strong><a style="float: right;" href="<?= base_url() ?>assets/images/student/<?= $docs[4] ?>" type="button"  class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> View</a></td>
                                         
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td><strong>Gender</strong></td>
                                        <?php 
                                        if($student['gender'] == 1)
                                        {
                                            $gender = "Female";
                                        }elseif ($student['gender'] ==2) {
                                            $gender = "Male";
                                        }else{
                                            $gender = "Other";
                                        }

                                        ?>
                                        <td><?= $gender ?></td>  
                                        <td><strong>DOB</strong></td>
                                        <td><?= $student['dob']?></td> 
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td><strong>Category</strong></td>
                                        <?php 
                                        if($student['category'] == 1)
                                        {
                                            $category = "General";
                                        }elseif ($student['category'] ==2) {
                                            $category = "SC";
                                        }elseif ($student['category'] ==3) {
                                            $category = "OBC";
                                        }else{
                                            $category = "Minority";
                                        }

                                        ?>
                                        <td><?= $category ?></td>  
                                        <td><strong>Roll No.</strong></td>
                                        <td><?= $student['roll']?></td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td><strong>Pincode</strong></td>
                                        <td><?= $student['pincode']?></td>  
                                        <td><strong>City</strong></td>
                                        <td><?= $student['city']?></td> 
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td><strong>Address</strong></td>
                                        <td colspan="3"><?= $student['address']?></td>  
                                         
                                    </tr>

                                </tbody>
                            </table>
                            <table class="table table-striped table-bordered table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>S.No.</th>
                                                                    <th>Exam Passed</th>
                                                                    <th>Year</th>
                                                                    <th>Board</th>
                                                                    <th>Grade</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php 
                                                                $exam = explode("|", $student['exam']);
                                                                $board = explode("|", $student['board']);
                                                                $year = explode("|", $student['pass_year']);
                                                                $grade = explode("|", $student['grade']);
                                                                for ($i=0; $i < count($exam) ; $i++) { 
                                                                    
                                                            ?>
                                                                <tr>
                                                                    <td><?= $i+1 ?></td>
                                                                    <td><?= $exam[$i] ?></td>
                                                                    <td><?= $year[$i] ?></td>
                                                                    <td><?= $board[$i] ?></td>
                                                                    <td><?= $grade[$i] ?>%</td>
                                                                </tr>
                                                                <?php } ?>
                                                               
                                                            </tbody>

                                                        </table>
                                                        <?php
                                                            if ($student['admit_card_status'] == 0) {
                                                               

                                                        ?>
                                                        <a style="float: right;" href="#" data-toggle="modal" data-target="#myModal" type="button"  class="btn btn-warning"><i class="fa fa-upload" aria-hidden="true"></i> Generate Admit Card</a>
                                                        <?php 
                                                            }else{
                                                                ?>
                                                                <a style="float: right;" href="<?= base_url() ?>assets/pdfs/<?= $student[roll] ?>.pdf" type="button"  class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> View Admit Card</a>
                                                                <?php
                                                            } ?>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
         <!-- Trigger the modal with a button -->
 

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Generate Admit Card</h4>
        </div>
        <div class="modal-body">
          <form action="<?= base_url(); ?>admin/admitcard/" method="post">
              <div class="form-group">
                <label>Select Exam Date:</label>
                <input type="hidden" name="id" value="<?= $student['id']?>">
                <input type="text" autocomplete="off" name="exam_date" class="form-control datepicker">
              </div>
              <div class="form-group">
                <label>Select Exam Time:</label>
                <input type="time" autocomplete="off" name="exam_time" class="form-control">
              </div>
              <div class="form-group">
                    <label>Select Exam Center:</label>
                    <select  class="form-control" required name="exam_center">
                        <option value="">Select Branch</option>
                        <?php
                        foreach ($branches as $branch) {
                        ?>
                        <option value="<?= $branch['id']?>"><?= $branch['branch_name']?></option>
                        <?php } ?>
                    </select>
              </div>
              <input type="submit" class="btn btn-success" name="Submit" value="Generate">
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>