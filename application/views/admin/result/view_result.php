
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Result List<a href="<?= base_url() ?>admin/result/addresult" type="button"  class="btn btn-primary pull-right"><i class="fa fa-plus fa-fw" aria-hidden="true"></i> Add Result</a></h1>
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
                            Details of all Result
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>S no.</th>
                                        <th>Course</th>
                                        <th>Modules</th>
                                        <th>Fees</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php 
                                if(isset($course)){
                                $serial = 1;
                                foreach ($course as $row) { 
                                        
                                ?>
                                    <tr class="odd gradeX">
                                        <td><?= $serial ?></td>
                                        <td><?= $row['name']?></td>
                                        <td><?= $row['module']?></td>
                                        <td class="center"><?= $row['fees']?></td>
                                        <td class="center">
                                            <a  href="<?= base_url() ?>admin/course/updatecourse/<?= $row['id'] ?>" type="button"  class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
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
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>