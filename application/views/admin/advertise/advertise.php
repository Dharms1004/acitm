<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Send Message</h1>
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
                            Send Notification
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <!-- /.col-lg-2 (nested) -->
                                <div class="col-lg-2">
                                    
                                </div>
                                <!-- /.col-lg-2 (nested) -->
                                <div class="col-lg-7">
                                    <?= form_open("admin/advertise/sendmessage") ?>
                                        <div class="form-group">
                                            <label>Select Route</label>
                                            <select name="route" required class="form-control">
                                                <option hidden>---select route---</option>
                                                <option value="1">Promotional</option>
                                                <option value="4">Transactional</option>

                                            </select>
                                            <span style="color: red;"><?= form_error('phone') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile Number</label>
                                            <?= form_input(['name'=>'mobile','class' => 'form-control', 'placeholder' => 'Mobile', 'value' => set_value('phone')]) ?>
                                            <span style="color: red;">* Comma seprated phone numbers</span>
                                            <span style="color: red;"><?= form_error('phone') ?></span>
                                        </div>

                                        <div class="form-group">
                                            <label>Message</label>
                                            <?= form_textarea(['name'=>'message','class' => 'form-control','rows'=> '5','cols'=> '10','value' => set_value('address')]) ?>
                                            <span style="color: red;">* Message length should be maximum 160 character.</span>
                                            <span style="color: red;"><?= form_error('address') ?></span>
                                        </div>
                                                                              
                                        <button type="submit" class="btn btn-success">Send</button>
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