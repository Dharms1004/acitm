
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User Profile</h1>
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
                            Profile of User
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td width="30%" align="right"><strong>Name</strong></td>
                                        <td>Admin</td>  
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td width="30%" align="right"><strong>Usernme</strong></td>
                                        <td>admin</td>  
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td width="30%" align="right"><strong>Password</strong></td>
                                        <td>123456</td>  
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