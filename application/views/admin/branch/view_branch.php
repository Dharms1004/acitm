
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Branches<a href="<?= base_url() ?>admin/branch/addbranch/" type="button"  class="btn btn-primary pull-right"><i class="fa fa-plus fa-fw" aria-hidden="true"></i> Add Branch</a></h1>
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
                            Details of all Branches
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>S no.</th>
                                        <th>Branch Name</th>
                                        <th>Owner</th>
                                        <th>Mobile</th>
                                        <th>ESTD.</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                        <th>Featured</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php 
                                if(isset($branch)){
                                $serial = 1;
                                foreach ($branch as $row) { 
                                        
                                ?>
                                    <tr class="odd gradeX">
                                        <td><?= $serial ?></td>
                                        <td><?= $row['branch_name']?></td>
                                        <td><?= $row['owner_name']?></td>

                                        <td><?= $row['phone']?></td>
                                        <td><?= $row['opening_date']?></td>
                                        <td><?= $row['address']?></td>
                                        <td class="center">
                                            <a  href="<?= base_url() ?>admin/branch/updatebranch/<?= $row['id'] ?>" type="button"  class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                                        </td>
                                        <td class="center">
                                            <?php

                                            if($row['featured'] == 1){
                                            ?>
                                            
                                            <a  href="<?= base_url() ?>admin/branch/branchFeatured/<?= $row['id'] ?>/0" type="button"  class="btn btn-success"><i class="fa fa-toggle-on fa-1x" aria-hidden="true"></i> Featured</a>
                                            <?php }elseif($row['featured'] == 0) {?>
                                            <a  href="<?= base_url() ?>admin/branch/branchFeatured/<?= $row['id'] ?>/1" type="button"  class="btn btn-danger"><i class="fa fa-toggle-off fa-1x" aria-hidden="true"></i> Normal</a>
                                            <?php }
                                            ?>
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