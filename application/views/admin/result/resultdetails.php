
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Student Result</h1>
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
                            Add Result of <?= $student['name'] ?> s/o <?= $student['father_name'] ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <form action="<?= base_url() ?>admin/result/saveResult" method="post">
                        <?php 
                            $module = explode("|", $course['module']);

                         ?>
                            <table width="50%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <tbody>
                                <?php 
                                    for ($i=0; $i < count($module); $i++) { 
                                ?>
                                    <tr class="odd gradeX">
                                        <td width="40%" align="right"><strong><?= $module[$i] ?></strong></td>
                                        <td><input type="text" name="module[]" class="form-control" required id=""></td>  
                                    </tr>
                                <?php }  ?>
                                    
                                    <input type="hidden" name="student_id" value="<?= $student['id'] ?>" >

                                </tbody>
                            </table>
                            <input type="submit" class="btn btn-primary" id="result" name="submit" value="Save Result"
                            <!-- /.table-responsive -->
                            </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>