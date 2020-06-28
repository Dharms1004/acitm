<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Course</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Course Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <!-- /.col-lg-2 (nested) -->
                                <div class="col-lg-2">

                                </div>
                                <!-- /.col-lg-2 (nested) -->
                                <div class="col-lg-7">
                                    <?= form_open("admin/branch/updatebranch") ?>

                                    <?= form_hidden(['id' => $branch['id']]) ?>
                                        <div class="form-group">
                                            <label>Branch Name</label>
                                            <?= form_input(['name'=>'branch_name','class' => 'form-control', 'placeholder' => 'Branch Name', 'value' => $branch['branch_name']]) ?>
                                            <span style="color: red;"><?= form_error('branch_name') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Owner Name</label>
                                            <?= form_input(['name'=>'owner_name','class' => 'form-control', 'placeholder' => 'Owner content', 'value' => $branch['owner_name']]) ?>
                                            <span style="color: red;"><?= form_error('owner_name') ?></span>
                                        </div>
                                       <!--  <div class="form-group">
                                            <label>Opening Date</label>
                                            <input type="date" name="odate" value="$branch['opening_date']" class="form-control">
                                        </div> -->
                                        <div class="form-group">
                                            <label>Opening Date</label>
                                            <input type="text" name="odate" class="form-control" value = "<?=$branch['opening_date'] ?>" > 
                                            <span style="color: red;"><?= form_error('dob') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile</label>
                                            <?= form_input(['name'=>'phone','class' => 'form-control', 'placeholder' => 'Mobile', 'value' => $branch['phone']]) ?>
                                            <span style="color: red;"><?= form_error('phone') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <?= form_input(['name'=>'email','class' => 'form-control', 'placeholder' => 'Email', 'value' => $branch['email']]) ?>
                                            <span style="color: red;"><?= form_error('email') ?></span>
                                        </div>

                                        <div class="form-group">
                                            <label>Address</label>
                                            <?= form_textarea(['name'=>'address','class' => 'form-control','rows'=> '5','cols'=> '10','value' => $branch['address']]) ?>
                                            <span style="color: red;"><?= form_error('address') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <?= form_input(['name'=>'city','class' => 'form-control', 'placeholder' => 'City', 'value' => $branch['city']]) ?>
                                            <span style="color: red;"><?= form_error('city') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>State</label>
                                            <?= form_input(['name'=>'state','class' => 'form-control', 'placeholder' => 'State', 'value' => $branch['state']]) ?>
                                            <span style="color: red;"><?= form_error('state') ?></span>
                                        </div>
                                               
                                        
                                        <button type="submit" class="btn btn-primary">Update Branch</button>
                                        <!-- <button type="reset" class="btn btn-default">Reset Button</button> -->
                                    <?= form_close() ?>
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-4">
                                    
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>