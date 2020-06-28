<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Note</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Partener
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <!-- /.col-lg-2 (nested) -->
                                <div class="col-lg-2">

                                </div>
                                <!-- /.col-lg-2 (nested) -->
                                <div class="col-lg-7">
                                    <?= form_open("admin/partener/updatepartener") ?>

                                    <?= form_hidden(['id' => $partener['id']]) ?>
                                        
                                        <div class="form-group">
                                            <label>Branch</label>
                                            <select id="location" class="form-control " required name="branch_id">
                                                <?php 
                                                    $branch_name = $this->Branch_model->getBranchById($partener['branch_id']);

                                                ?>
                                                <option class="hidden" value="<?php $branch_name['branch_id'] ?>"><?= $branch_name['branch_name'] ?></option>
                                                <?php
                                                foreach ($branches as $branch) {
                                                ?>
                                                <option value="<?= $branch['id']?>"><?= $branch['branch_name']?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Partener Name</label>
                                            <?= form_input(['name'=>'name','class' => 'form-control', 'placeholder' => 'Course name', 'value' => $partener['name']]) ?>
                                            <span style="color: red;"><?= form_error('name') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <?= form_textarea(['name'=>'description','class' => 'form-control','rows'=> '5','cols'=> '10','value' => $partener['description']]) ?>
                                            <span style="color: red;"><?= form_error('description') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <img width="100px" src="<?= base_url()."assets/images/partener/".$partener['image']?>"
                                             >
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update Partener</button>
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