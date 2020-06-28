<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Student</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Student Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <!-- /.col-lg-2 (nested) -->
                                <div class="col-lg-2">

                                </div>
                                <!-- /.col-lg-2 (nested) -->
                                <div class="col-lg-12">
                                    <?= form_open_multipart("admin/student/updatestudent") ?>
                                    <?= form_hidden(['id' => $student['id']]) ?>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Branch</label>
                                            <select id="location" class="form-control" required name="branch_id">
                                                <?php 
                                                    $branch_name = $this->Branch_model->getBranchById($student['branch_id']);

                                                ?>
                                                <option value="<?= $branch_name['id'] ?>"><?= $branch_name['branch_name'] ?></option>
                                                <?php
                                                foreach ($branches as $branch) {
                                                ?>
                                                <option value="<?= $branch['id']?>"><?= $branch['branch_name']?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Student Name</label>
                                            <?= form_input(['name'=>'name','class' => 'form-control', 'placeholder' => 'Student name', 'value' => $student['name']]) ?>
                                            <span style="color: red;"><?= form_error('name') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Father's Name</label>
                                            <?= form_input(['name'=>'father_name','class' => 'form-control', 'placeholder' => 'Father name', 'value' => $student['father_name']]) ?>
                                            <span style="color: red;"><?= form_error('father_name') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Mother's Name</label>
                                            <?= form_input(['name'=>'mother_name','class' => 'form-control', 'placeholder' => 'Mother name', 'value' => $student['mother_name']]) ?>
                                            <span style="color: red;"><?= form_error('mother_name') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile Home</label>
                                            <?= form_input(['name'=>'mobile_home','class' => 'form-control', 'placeholder' => 'Mobile home', 'value' => $student['mobile_home']]) ?>
                                            <span style="color: red;"><?= form_error('mobile_home') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile Self</label>
                                            <?= form_input(['name'=>'mobile_self','class' => 'form-control', 'placeholder' => 'Mobile Self', 'value' => $student['mobile_self']]) ?>
                                            <span style="color: red;"><?= form_error('mobile_self') ?></span>
                                        </div>
                                        <div class="form-group">
                                        <?php 
                                            $gen = $student['gender'];
                                            
                                            if ($gen == 1) {
                                                 $female = "checked";
                                            }elseif ($gen == 2) {
                                                $male = "checked";
                                            }
                                           
                                        ?>
                                            <label>Select Gender</label>
                                            <label class="radio-inline">
                                                <input required type="radio" name="gender" id="optionsRadiosInline1" value="1" <?= $female ?>>Female
                                            </label>
                                            <label class="radio-inline">
                                                <input required type="radio" name="gender" id="optionsRadiosInline2" value="2" <?= $male ?>>Male
                                            </label>
                                            <label class="radio-inline">
                                                <input required type="radio" name="gender" id="optionsRadiosInline3" value="3">Other
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>DOB</label>
                                            <input type="text" name="dob" class="form-control" value = "<?=$student['dob'] ?>" > 
                                            <span style="color: red;"><?= form_error('dob') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label class="field select">Batch Timing</label>
                                            <select id="country" required class="form-control" name="timing">
                                                <option value="<?= $student['timing'] ?>"><?= $student['timing'] ?></option>
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
                                            <label>Roll Number</label>
                                            <?= form_input(['name'=>'roll','class' => 'form-control', 'placeholder' => 'Roll Number', 'value' => $student['roll']]) ?>
                                            <span style="color: red;"><?= form_error('roll') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="file[]" class="form-control">
                                        </div>
                                                                             
                                    </div>
                                    <div class="col-md-6"> 
                                        <div class="form-group">
                                            <label>Course</label>
                                            <select id="location" class="form-control" required name="course_id">
                                            <?php 
                                                    $course_name = $this->Course_model->getCourseById($student['course_id']);

                                                ?>
                                                <option value="<?= $course_name['id']; ?>"><?= $course_name['name'] ?></option>
                                                <?php
                                                foreach ($courses as $course) {
                                                ?>
                                                <option value="<?= $course['id']?>"><?= $course['name']?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Category</label>
                                            
                                            <select name="category" class="form-control">
                                                <option class="hidden" value="<? $student['category'] ?>">
                                                    <?php 
                                                $cat = $student['category'];
                                                switch ($cat) {
                                                    case "1":
                                                        echo "General";
                                                        break;
                                                    case "2":
                                                        echo "SC";
                                                        break;
                                                    case "3":
                                                        echo "OBC";
                                                        break;
                                                        case "3":
                                                        echo "Minority";
                                                        break;
                                                    default:
                                                        echo "Select category";
                                                }
                                            ?>
                                                </option>
                                                <option value="1">General</option>
                                                <option value="2">SC</option>
                                                <option value="3">OBC</option>
                                                <option value="4">Minority</option>
                                            </select>
                                        </div>    
                                        <div class="form-group">
                                            <label>Address</label>
                                            <?= form_textarea(['name'=>'address','class' => 'form-control','rows'=> '5','cols'=> '10','value' => $student['address']]) ?>
                                            <span style="color: red;"><?= form_error('address') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Pincode</label>
                                            <?= form_input(['name'=>'pincode','class' => 'form-control', 'placeholder' => 'Pincode', 'value' => $student['pincode']]) ?>
                                            <span style="color: red;"><?= form_error('pincode') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <?= form_input(['name'=>'city','class' => 'form-control', 'placeholder' => 'City', 'value' => $student['city']]) ?>
                                            <span style="color: red;"><?= form_error('city') ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Signature</label>
                                            <input type="hidden" name="documents" value="<?= $student['documents'] ?>">
                                            <input type="hidden" name="exam" value="<?= $student['exam'] ?>">
                                            <input type="hidden" name="pass_year" value="<?= $student['pass_year'] ?>">
                                            <input type="hidden" name="board" value="<?= $student['board'] ?>">

                                            <input type="hidden" name="grade" value="<?= $student['grade'] ?>">

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
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Update Student</button>
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