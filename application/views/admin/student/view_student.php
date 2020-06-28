
<div id="page-wrapper">
            <div class="row">
            <div class="col-lg-12">
            <div class="panel-group" style="margin-top: 10px;">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse1">Student By Branch</a>
                  </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                   <div class="panel-body">
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label>Select Branch</label>
                                <select name="category" id="branch" onchange="get_students();"  class="form-control">
                                <option hidden >---select branch---</option>
                                <?php
                                foreach ($branches as $branch) { ?>
                                <option value="<?= $branch['id'] ?>"> <?= $branch['branch_name'] ?></option>
                                <?php   }                                ?>
                                </select>
                            </div> 
                        </div>
                </div>
            </div>
                  
                </div>
              </div>
            </div>
            </div>
                <div class="col-lg-12">
                    <h1 class="page-header">Students List <a href="<?= base_url() ?>admin/student/addstudent/" type="button"  class="btn btn-primary pull-right"><i class="fa fa-plus fa-fw" aria-hidden="true"></i> Add Student</a></h1>
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
                            Details of all Students
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body" id="studentdata">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>S no.</th>
                                        <th>Student name</th>
                                        <th>Father name</th>
                                        <th>City</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php 
                                if(isset($student)){
                                $serial = 1;
                                foreach ($student as $row) { 
                                        
                                ?>
                                    <tr class="odd gradeX">
                                        <td><?= $serial ?></td>
                                        <td><?= $row['name']?></td>
                                        <td><?= $row['father_name']?></td>
                                        <td class="center"><?= $row['city']?></td>
                                        <td class="center">
                                            <?php $image = explode('|', $row['documents']) ?>
                                            <img width="100px" src="<?= base_url()."assets/images/student/".$image[0]?>" 
                                        </td>
                                        <td class="center">
                                            <a  href="<?= base_url() ?>admin/student/updatestudent/<?= $row['id'] ?>" type="button"  class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                                            <a  href="<?= base_url() ?>admin/student/student_form/<?= $row['id'] ?>" type="button"  class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
                                        </td>
                                    </tr>
                                   <?php $serial++; } }
                                    else{ ?>
                                        <tr class="odd gradeX">
                                        <td colspan="5" align="center">No course found</td>
                                        </tr>
                                   <?php }
                                    ?> 
                                </tbody>
                            </table>
                            <?= $this->pagination->create_links(); ?>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>

 <script>

        function get_students()
        {
            
            var branchid = $("#branch").val();
            

               $.ajax({

                type: "POST",

                url: "<?= base_url() ?>admin/student/getStudentFilter",
                dataType : "html",
                data : {"branchid" : branchid},
               

                cache: false,

                success: function(response)

                    {
                        //console.log(response);return false;
                        $("#studentdata").html(response);

                    },
                    error: function(xhr, status, errorThrown) {
                        console.log(xhr);
                        console.log(status);
                        console.log(errorThrown);


                    }

                    });

        }
    
</script>