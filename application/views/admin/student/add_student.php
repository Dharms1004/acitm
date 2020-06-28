<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Student</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Student Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <!-- /.col-lg-2 (nested) -->
                                <div class="col-lg-2">
                                    
                                </div>
                                <!-- /.col-lg-2 (nested) -->
                                <div class="col-lg-12">
                                    <?= form_open_multipart("admin/student/addstudent") ?>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                            <label>Roll Number</label>
                                            <?= form_input(['name'=>'roll','class' => 'form-control', 'placeholder' => 'Roll Number', 'value' => set_value('roll')]) ?>
                                            <span style="color: red;"><?= form_error('roll') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Branch</label>
                                            <select id="location" class="form-control" required name="branch_id">
                                                <option value="">Select Branch</option>
                                                <?php
                                                foreach ($branches as $branch) {
                                                ?>
                                                <option value="<?= $branch['id']?>"><?= $branch['branch_name']?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Student Name</label>
                                            <?= form_input(['name'=>'name','class' => 'form-control', 'placeholder' => 'Student name', 'value' => set_value('name')]) ?>
                                            <span style="color: red;"><?= form_error('name') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Father's Name</label>
                                            <?= form_input(['name'=>'father_name','class' => 'form-control', 'placeholder' => 'Father name', 'value' => set_value('father_name')]) ?>
                                            <span style="color: red;"><?= form_error('father_name') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Mother's Name</label>
                                            <?= form_input(['name'=>'mother_name','class' => 'form-control', 'placeholder' => 'Mother name', 'value' => set_value('mother_name')]) ?>
                                            <span style="color: red;"><?= form_error('mother_name') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile Home</label>
                                            <?= form_input(['name'=>'mobile_home','class' => 'form-control', 'placeholder' => 'Mobile home', 'value' => set_value('mobile_home')]) ?>
                                            <span style="color: red;"><?= form_error('mobile_home') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile Self</label>
                                            <?= form_input(['name'=>'mobile_self','class' => 'form-control', 'placeholder' => 'Mobile Self', 'value' => set_value('mobile_self')]) ?>
                                            <span style="color: red;"><?= form_error('mobile_self') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Select Gender</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" id="optionsRadiosInline1" value="1">Female
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" id="optionsRadiosInline2" value="2">Male
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" id="optionsRadiosInline3" value="3">Other
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>DOB</label>
                                            <input type="text" name="dob" class="form-control datepicker" placeholder="Date of Birth" value = "<?=set_value('mobile_self') ?>" > 
                                            <span style="color: red;"><?= form_error('dob') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label class="field select">Batch Timing</label>
                                            <select id="country" required class="form-control" name="timing">
                                                <option hidden>Select Batch Timings</option>
                                                <option value="7-8">7 AM to 8 AM</option>
                                                <option value="8-9">8 AM to 9 AM</option>
                                                <option value="9-10">9 AM to 10 AM</option>
                                                <option value="10-11">10 AM to 11 AM</option>
                                                <option value="11-12">11 AM to 12 PM</option>
                                                <option value="12-1">12 PM to 1 PM</option>
                                                <option value="1-2">1 PM to 2 PM</option>
                                                <option value="2-3">2 PM to 3 PM</option>
                                                <option value="3-4">3 PM to 4 PM</option>
                                                <option value="4-5">4 PM to 5 PM</option>
                                                <option value="5-6">5 PM to 6 PM</option>
                                                
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="file[]" class="form-control">
                                        </div>
                                        
                                                                             
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                            <label>Date of Admission</label>
                                            <input type="text" name="admission" class="form-control datepicker" placeholder="Admission Date" value = "<?=set_value('mobile_self') ?>" > 
                                            <span style="color: red;"><?= form_error('dob') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Course</label>
                                            <select id="location" class="form-control" required name="course_id">
                                                <option value="">Select Course</option>
                                                <?php
                                                foreach ($courses as $course) {
                                                ?>
                                                <option value="<?= $course['id']?>"><?= $course['name']?></option>
                                                <?php } ?>
                                            </select>
                                        </div>  
                                        <div class="form-group">
                                            <label>Category</label>
                                            <?php $options = array(
                                                    ' '       => 'Select Category',
                                                    '1'       => 'General',
                                                    '2'       => 'SC',
                                                    '3'       => 'OBC',
                                                    '4'       => 'Minority',
                                            );
                                            echo form_dropdown('category', $options," ",'class="form-control"');
                                            ?>
                                        </div>    
                                        <div class="form-group">
                                            <label>Address</label>
                                            <?= form_textarea(['name'=>'address','class' => 'form-control','rows'=> '5','cols'=> '10','value' => set_value('address')]) ?>
                                            <span style="color: red;"><?= form_error('address') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Pincode</label>
                                            <?= form_input(['name'=>'pincode','class' => 'form-control', 'placeholder' => 'Pincode', 'value' => set_value('pincode')]) ?>
                                            <span style="color: red;"><?= form_error('pincode') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <?= form_input(['name'=>'city','class' => 'form-control', 'placeholder' => 'City', 'value' => set_value('city')]) ?>    
                                            <span style="color: red;"><?= form_error('city') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Signature</label>
                                            <input type="file" name="file[]" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Certificate</label>
                                            <input type="file" name="file[]" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Identity Proof</label>
                                            <input type="file" name="file[]" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Thumb Impression</label>
                                            <input type="file" name="file[]" class="form-control">
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    EDUCATION QUALIFICATION
                                                </div>
                                                <!-- /.panel-heading -->
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-bordered table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>S.No.</th>
                                                                    <th>Exam Passed</th>
                                                                    <th>Year</th>
                                                                    <th>Board</th>
                                                                    <th>Grade</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td><input type="text" name="exam_passed[]" class="form-control" placeholder="Enter Examination name" required></td>
                                                                    <td><input type="text" name="passing_year[]" class="form-control" placeholder="Enter Passing Year" required></td>
                                                                    <td><input type="text" name="board[]" class="form-control" placeholder = "Enter Board/University" required></td>
                                                                    <td><input type="text" name="grade[]" class="form-control" placeholder="Enter % or Grade" required></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td><input type="text" name="exam_passed[]" class="form-control" placeholder="Enter Examination name"></td>
                                                                    <td><input type="text" name="passing_year[]" class="form-control" placeholder="Enter Passing Year" ></td>
                                                                    <td><input type="text" name="board[]" class="form-control" placeholder = "Enter Board/University" ></td>
                                                                    <td><input type="text" name="grade[]" class="form-control" placeholder="Enter % or Grade" ></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td><input type="text" name="exam_passed[]" class="form-control" placeholder="Enter Examination name"></td>
                                                                    <td><input type="text" name="passing_year[]" class="form-control" placeholder="Enter Passing Year" ></td>
                                                                    <td><input type="text" name="board[]" class="form-control" placeholder = "Enter Board/University" ></td>
                                                                    <td><input type="text" name="grade[]" class="form-control" placeholder="Enter % or Grade" ></td>
                                                                </tr>
                                                                
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- /.table-responsive -->
                                                </div>
                                                <!-- /.panel-body -->
                                            </div>
                                            <!-- /.panel -->
                                        </div>
                                        <!-- /.col-lg-6 -->
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <!-- <button type="reset" class="btn btn-default">Reset Button</button>   -->
                                    </div>
                                        
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
