<?php include_once("include/header.php") ?>

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Registration</h1>
                <ul class="breadcrumbs">
                    <li><a href="<?= base_url(); ?>">Home</a></li>
                    <li class="active">Student Registration</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="courses-section content-area">
<div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><span>Registration </span>Form</h1>
            <?php if (isset($_SESSION['success'])) { ?>
                <div class="alert alert-success">
                    <?=  $_SESSION['success'] ?>
                </div>
                  <?php  }  ?>
        </div>
            <div class="smart-wrap">
            <div class="smart-forms smart-container wrap">
                
                <!-- <div class="main-title">
                    <h1><span>Become Our </span>Parteners</h1>
                </div> -->
                <form method="post" action="<?= base_url() ?>pages/registration" enctype="multipart/form-data" id="form-ui">
                    <div class="form-body">
                    
                        <div class="spacer-b30">
                            <div class="tagline"><span>Student Details </span></div><!-- .tagline -->
                        </div>
                        
                        <div class="frm-row">
                        
                            <div class="colm colm6">
                            
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="name" id="firstname" class="gui-input" required placeholder="Enter Name">
                                        <span class="field-icon"><i class="fa fa-user"></i></span>  
                                    </label>
                                </div><!-- end section -->                    
                                
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="mother_name" id="firstname" class="gui-input" required placeholder="Enter Mother Name">
                                        <span class="field-icon"><i class="fa fa-user"></i></span>  
                                    </label>
                                </div><!-- end section -->
                                
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="tel" name="mobile_self" id="mobile" class="gui-input" required placeholder="Enter Mobile Self">
                                        <span class="field-icon"><i class="fa fa-phone-square"></i></span>  
                                    </label>
                                </div><!-- end section -->
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="email" name="email" class="gui-input" required placeholder="Enter Email">
                                        <span class="field-icon"><i class="fa fa-envelope-o"></i></span>  
                                    </label>
                                </div>
                                <div class="section">
                                    <label class="field select">
                                        <select id="country" required name="category">
                                            <option hidden>Select Category</option>
                                            <option value="1">General</option>
                                            <option value="2">OBC</option>
                                            <option value="3">SC/ST</option>
                                            <option value="4">Minority</option>
                                        </select>
                                        <i class="arrow"></i>                    
                                    </label>  
                                </div><!-- end section -->  
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="tel" name="city" id="mobile" class="gui-input" required placeholder="Enter City">
                                        <input type="hidden" name="roll" value="<?= mt_rand(1000,9999) ?>">
                                        <span class="field-icon"><i class="fa fa-globe"></i></span>  
                                    </label>
                                </div><!-- end section -->                         
                            
                            </div><!-- end .colm6 section -->
                                               
                            <div class="colm colm6">
                            
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="father_name" id="firstname" class="gui-input" required placeholder="Father Name">
                                        <span class="field-icon"><i class="fa fa-user"></i></span>  
                                    </label>
                                </div><!-- end section -->
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="tel" name="mobile_home" id="mobile" class="gui-input" required placeholder="Enter Mobile Home">
                                        <span class="field-icon"><i class="fa fa-phone-square"></i></span>  
                                    </label>
                                </div><!-- end section -->                         
                                
                                 <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text"  name="dob" class="gui-input datepicker" placeholder="Date of birth" required>
                                        <span class="field-icon"><i class="fa fa-calendar"></i></span>  
                                    </label>
                                </div>
                                
                                <div class="section option-group field">
                            
                                    <label for="female" class="option spacer-t10">
                                        <input type="radio" name="gender" id="female" value="1">
                                        <span class="radio"></span> Female
                                    </label>
                                    
                                    <label for="male" class="option spacer-t10">
                                        <input type="radio" name="gender" id="male" value="2">
                                        <span class="radio"></span> Male                  
                                    </label>

                                    <label for="other" class="option spacer-t10">
                                        <input type="radio" name="gender" id="other" value="3">
                                        <span class="radio"></span> Other                  
                                    </label>                            
                                    
                                </div>  
                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="tel" style="margin-top: 7px;" name="pincode" required id="mobile" class="gui-input" placeholder="Enter Pincode">
                                        <span class="field-icon"><i style="margin-top: 7px;" class="fa fa-pencil"></i></span>  
                                    </label>
                                </div><!-- end section -->
                                <div class="section">
                                    <label class="field select">
                                        <select id="country" required name="timing">
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
                                        <i class="arrow"></i>                    
                                    </label>  
                                </div><!-- end section -->                     
                            
                            </div><!-- end .colm6 section -->  
                        
                        </div><!-- end .frm-row section --> 
                        
                        <div class="section">
                            <label class="field prepend-icon">
                                <textarea class="gui-textarea" id="comment" name="address" required placeholder="Enter Address"></textarea>
                                <span class="field-icon"><i class="fa fa-comments"></i></span>   
                            </label>
                        </div><!-- end section --> 

                        <div class="spacer-t40 spacer-b40">
                            <div class="tagline"><span>Select Course </span></div><!-- .tagline -->
                        </div> 
                        <div class="frm-row">
                            <div class="section colm colm6">
                                <label class="field select">
                                    <select id="location" required name="course_id">
                                        <option hidden>Select Course</option>
                                        <?php
                                        foreach ($courses as $course) {
                                        ?>
                                        <option value="<?= $course['id']?>"><?= $course['name']?></option>
                                        <?php } ?>
                                    </select>
                                    <i class="arrow double"></i>                    
                                </label>  
                            </div><!-- end section --> 
                            <div class="section colm colm6">
                                <label class="field select">
                                    <select id="location" required name="branch_id">
                                        <option hidden>Select Branch</option>
                                        <?php
                                        foreach ($branches as $branch) {
                                        ?>
                                        <option value="<?= $branch['id']?>"><?= $branch['branch_name']?></option>
                                        <?php } ?>
                                    </select>
                                    <i class="arrow double"></i>                    
                                </label>  
                            </div><!-- end section --> 

                        </div><!-- end .frm-row section -->                  
                        
                        <div class="spacer-t40 spacer-b40">
                            <div class="tagline"><span>Education Qualification </span></div><!-- .tagline -->
                        </div>   
                        <div class="section">
                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th>S No.</th>
                                    <th>Examination Name</th>
                                    <th>Year</th>
                                    <th>Board/University</th>
                                    <th>Percent/Grade</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                  <td>1.</td>
                                    <td><input type="tel" name="exam_passed[]" id="mobile" required class="gui-input" placeholder="Enter Examination name"></td>
                                    <td><input type="tel" name="passing_year[]" id="mobile" required class="gui-input" placeholder="Enter Passing Year"></td>
                                    <td><input type="tel" name="board[]" id="mobile" required class="gui-input" placeholder="Enter Board/University"></td>
                                    <td><input type="tel" name="grade[]" id="mobile" required class="gui-input" placeholder="Enter % or Grade"></td>
                                  </tr>
                                  <tr>
                                  <td>2.</td>
                                    <td><input type="tel" name="exam_passed[]" id="mobile" class="gui-input" placeholder="Enter Examination name"></td>
                                    <td><input type="tel" name="passing_year[]" id="mobile" class="gui-input" placeholder="Enter Passing Year"></td>
                                    <td><input type="tel" name="board[]" id="mobile" class="gui-input" placeholder="Enter Board/University"></td>
                                    <td><input type="tel" name="grade[]" id="mobile" class="gui-input" placeholder="Enter % or Grade"></td>
                                  </tr>
                                  <tr>
                                  <td>3.</td>
                                    <td><input type="tel" name="exam_passed[]" id="mobile" class="gui-input" placeholder="Enter Examination name"></td>
                                    <td><input type="tel" name="passing_year[]" id="mobile" class="gui-input" placeholder="Enter Passing Year"></td>
                                    <td><input type="tel" name="board[]" id="mobile" class="gui-input" placeholder="Enter Board/University"></td>
                                    <td><input type="tel" name="grade[]" id="mobile" class="gui-input" placeholder="Enter % or Grade"></td>
                                  </tr>
                                  

                                </tbody>
                            </table>
                        </div>                 
                        
                        
                        
                        <div class="spacer-t40 spacer-b40">
                            <div class="tagline"><span>Please attach all required document (.jpg, pdf) only </span></div><!-- .tagline -->
                        </div>                                          
                        
                        <div class="section">
                            <label class="field prepend-icon file">
                                <span class="button btn-primary"> Upload Image &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                <input type="file" class="gui-file" name="file[]" id="file1"
                                onChange="document.getElementById('uploader1').value = this.value;" required>
                                <input type="text" class="gui-input" id="uploader1" placeholder="no file selected" readonly>
                                <span class="field-icon"><i class="fa fa-upload"></i></span>
                            </label>
                        </div><!-- end  section -->                     
                        
                        <div class="section">
                            <label class="field prepend-icon file">
                                <span class="button btn-primary"> Upload Certificate </span>
                                <input type="file" class="gui-file" name="file[]" id="file2"
                                onChange="document.getElementById('uploader2').value = this.value;" required>
                                <input type="text" class="gui-input" id="uploader2" placeholder="no file selected" readonly>
                                <span class="field-icon"><i class="fa fa-upload"></i></span>
                            </label>
                        </div><!-- end  section -->

                        <div class="section">
                            <label class="field prepend-icon file">
                                <span class="button btn-primary"> Upload ID proof &nbsp&nbsp&nbsp</span>
                                <input type="file" class="gui-file" name="file[]" id="file2" onChange="document.getElementById('uploader2   ').value = this.value;" required>
                                <input type="text" class="gui-input" id="uploader2" placeholder="no file selected" readonly>
                                <span class="field-icon"><i class="fa fa-upload"></i></span>
                            </label>
                        </div><!-- end  section -->

                        <div class="section">
                            <label class="field prepend-icon file">
                                <span class="button btn-primary"> Signature &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                <input type="file" class="gui-file" name="file[]" id="file2" onChange="document.getElementById('uploader2   ').value = this.value;" required>
                                <input type="text" class="gui-input" id="uploader2" placeholder="no file selected" readonly>
                                <span class="field-icon"><i class="fa fa-upload"></i></span>
                            </label>
                        </div><!-- end  section -->
                        <div class="section">
                            <label class="field prepend-icon file">
                                <span class="button btn-primary"> Thumb Impression </span>
                                <input type="file" class="gui-file" name="file[]" id="file2" onChange="document.getElementById('uploader2   ').value = this.value;" required>
                                <input type="text" class="gui-input" id="uploader2" placeholder="no file selected" readonly>
                                <span class="field-icon"><i class="fa fa-upload"></i></span>
                            </label>
                        </div><!-- end  section -->
                       
                    </div><!-- end .form-body section -->
                <div class="form-footer">
                    <button type="submit" class="button btn-primary">Proceed to Payment </button>
                </div><!-- end .form-footer section -->
            </form>
            
        </div><!-- end .smart-forms section -->
    </div><!-- end .smart-wrap section -->
    
      
    </div>
    </div>

<!-- Sub Banner end -->


<?php include_once("include/footer.php") ?>
