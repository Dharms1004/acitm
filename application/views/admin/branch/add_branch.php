<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Branch</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Branch Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <!-- /.col-lg-2 (nested) -->
                                <div class="col-lg-2">
                                    
                                </div>
                                <!-- /.col-lg-2 (nested) -->
                                <div class="col-lg-7">
                                    <?= form_open_multipart("admin/branch/addbranch") ?>
                                        <div class="form-group">
                                            <label>Branch Name</label>
                                            <?= form_input(['name'=>'branch_name','class' => 'form-control', 'placeholder' => 'Branch Name', 'value' => set_value('branch_name')]) ?>
                                            <span style="color: red;"><?= form_error('branch_name') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Owner Name</label>
                                            <?= form_input(['name'=>'owner_name','class' => 'form-control', 'placeholder' => 'Owner content', 'value' => set_value('owner_name')]) ?>
                                            <span style="color: red;"><?= form_error('owner_name') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Opening Date</label>
                                            <input type="text" name="odate" class="form-control datepicker" placeholder="Opening Date">
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile</label>
                                            <?= form_input(['name'=>'phone','class' => 'form-control', 'placeholder' => 'Mobile', 'value' => set_value('phone')]) ?>
                                            <span style="color: red;"><?= form_error('phone') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <?= form_input(['name'=>'email','class' => 'form-control', 'placeholder' => 'Email', 'value' => set_value('email')]) ?>
                                            <span style="color: red;"><?= form_error('email') ?></span>
                                        </div>

                                        <div class="form-group">
                                            <label>Address</label>
                                            <?= form_textarea(['name'=>'address','class' => 'form-control','rows'=> '5','cols'=> '10','value' => set_value('address')]) ?>
                                            <span style="color: red;"><?= form_error('address') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <?= form_input(['name'=>'city','class' => 'form-control', 'placeholder' => 'City', 'value' => set_value('city')]) ?>
                                            <span style="color: red;"><?= form_error('city') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>State</label>
                                            <?= form_input(['name'=>'state','class' => 'form-control', 'placeholder' => 'State', 'value' => set_value('state')]) ?>
                                            <span style="color: red;"><?= form_error('state') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                                                              
                                        <button type="submit" class="btn btn-primary">Save Branch</button>
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