<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Note</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Notes
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <!-- /.col-lg-2 (nested) -->
                                <div class="col-lg-2">
                                    
                                </div>
                                <!-- /.col-lg-2 (nested) -->
                                <div class="col-lg-7">
                                    <?= form_open_multipart("admin/partener/addpartener") ?>
                                        <div class="form-group">

                                            <div class="form-group">

                                                <label>Select Branch</label>

                                                <select name="branch_id" id="branch"  class="form-control">
                                                    <option hidden >---Select Branch---</option>
                                                        <?php

                                                            foreach ($branches as $branch) { ?>

                                                            <option value="<?= $branch['id'] ?>"> <?= $branch['branch_name'] ?></option>

                                                         <?php   }

                                                        ?>
                                                </select>

                                            </div> 
                                        
                                            <label>Partener Name</label>
                                            <?= form_input(['name'=>'name','class' => 'form-control', 'placeholder' => 'Name', 'value' => set_value('name')]) ?>
                                            <span style="color: red;"><?= form_error('name') ?></span>
                                        </div>
                                         <div class="form-group">
                                            <label>Description</label>
                                            <?= form_textarea(['name'=>'description','class' => 'form-control','rows'=> '5','cols'=> '10','value' => set_value('description')]) ?>
                                            <span style="color: red;"><?= form_error('description') ?></span>
                                        </div>
                                       <!-- <div class="form-group">
                                            <label>Course Content</label>
                                            <?= form_input(['name'=>'module','class' => 'form-control', 'placeholder' => 'Course content', 'value' => set_value('module')]) ?>
                                            <span style="color: red;"><?= form_error('module') ?></span>
                                        </div>

                                        <div class="form-group">
                                            <label>Duration</label>
                                            <?= form_input(['name'=>'duration','class' => 'form-control', 'placeholder' => 'Duration', 'value' => set_value('duration')]) ?>
                                            <span style="color: red;"><?= form_error('duration') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Course Fees</label>
                                            <?= form_input(['name'=>'fee','class' => 'form-control', 'placeholder' => 'Course fee', 'value' => set_value('fee')]) ?>
                                            <span style="color: red;"><?= form_error('fee') ?></span>
                                        </div> -->
                                        <div class="form-group">
                                            <label>File</label>
                                            <input type="file" name="file" class="form-control">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary">Save Note</button>
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