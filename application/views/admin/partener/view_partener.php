
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Parteners List<a href="<?= base_url() ?>admin/partener/addpartener" type="button"  class="btn btn-primary pull-right"><i class="fa fa-plus fa-fw" aria-hidden="true"></i> Add Partener</a></h1>
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
                            List of Parteners
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>S no.</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php 
                                if(isset($parteners)){
                                $serial = 1;
                                foreach ($parteners as $partener) { 
                                        
                                ?>
                                    <tr class="odd gradeX">
                                        <td><?= $serial ?></td>
                                        <td><?= $partener['name']?></td>
                                        <td><?= $partener['description']?></td>
                                        <td class="center"><image style="width: 100px;" src="<?= base_url() ?>assets/images/partener/<?= $partener['image'] ?>" ></td>
                                        <td class="center">
                                            <a  href="<?= base_url() ?>admin/partener/updatepartener/<?= $partener['id'] ?>" type="button"  class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                                        </td>
                                    </tr>
                                   <?php $serial++; } }
                                    else{ ?>
                                        <tr class="odd gradeX">
                                        <td colspan="5" align="center">No Record found</td>
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