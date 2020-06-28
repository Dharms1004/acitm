<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Result</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Student's Result
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php if (isset($_SESSION['success'])) { ?>
                                    <div class="alert alert-success">
                                        <?=  $_SESSION['success'] ?>
                                    </div>
                                      <?php  }  ?>

                                    <div class="row">
                                        <div class="col-md-6">
                                           <div class="form-group">

                                            <label>Select Branch</label>

                                            <select name="category" id="branch"  class="form-control">
                                            <option hidden >---select branch---</option>
                                                <?php

                                                    foreach ($branches as $branch) { ?>

                                                    <option value="<?= $branch['id'] ?>"> <?= $branch['branch_name'] ?></option>

                                                 <?php   }

                                                ?>

                                            </select>

                                        </div> 
                                        </div>
                                         <div class="col-md-6">
                                           <div class="form-group">

                                            <label>Select Course</label>

                                            <select name="course" id="course" onchange="get_students();" class="form-control">
                                            <option hidden>---select course---</option>
                                            <?php

                                                    foreach ($courses as $course) { ?>

                                                    <option value="<?= $course['id'] ?>"> <?= $course['name'] ?></option>

                                                 <?php   }

                                                ?>

                                            </select>       

                                        </div> 
                                        </div>
                                    </div>
                                    <!-- /.panel-heading -->
                                    
                        <div class="panel-body" id="studentdata">
                           
                        </div>
                        <!-- /.panel-body -->
                                        <!-- <button type="submit" class="btn btn-default">Save Result</button> -->
                                        <!-- <button type="reset" class="btn btn-default">Reset Button</button> -->
                                    
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" >Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Enter Result here</p>
            <form method="post">
            <table class="table table-bordered">
                <tr>
                    <td><label for="email">Module 1</label></td>
                    <td><input type="text" name="module[]" class="form-control" required id=""></td>
                <tr>
                <tr>
                    <td><label for="email">Module 2</label></td>
                    <td><input type="text" name="module[]" class="form-control" required id=""></td>
                </tr>
                <tr>
                    <td><label for="email">Module 3</label></td>
                    <td><input type="text" name="module[]" class="form-control" required id=""></td>
                </tr>
                <tr>
                    <td><label for="email">Module 4</label></td>
                    <td><input type="text" name="module[]" class="form-control" required id=""></td>
                </tr>
                <tr>
                    <td><label for="email">Module 5</label></td>
                    <td><input type="text" name="module[]" class="form-control" required id=""></td>
                    <input type="hidden" name="student_id" id="student_id">
                </tr>
            </table>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" id="result" name="submit" value="Save Result">
          </form>
        </div>
      </div>
      
    </div>
  </div>
  

        <script>

        function get_students()
        {
            
            var branchid = $("#branch").val();
            var courseid = $("#course").val();

               $.ajax({

                type: "POST",

                url: "<?= base_url() ?>admin/result/getStudent",
                dataType : "html",
                data : {"branchid" : branchid, "courseid" : courseid},
               

                cache: false,

                success: function(response)

                    {
                        //console.log(response);return false;
                        $("#studentdata").html(response);

                    },
                    error: function(xhr, status, errorThrown) {
                        console.log(xhr);
                        console.log(status);
                        console.log(errorThrown);


                    }

                    });

        }

        // function get_single_student()
        // {
        //     var row = $(this).closest('tr.anime');
        //     var studentid = row.attr('data-id');
        //     console.log(studentid);
        //     $.ajax({

        //         type: "POST",
        //         url: "<?= base_url() ?>admin/result/getStudentById",
        //         dataType : "html",
        //         data : {"id" : studentid},
               

        //         cache: false,

        //         success: function(response)

        //             {
        //                 var obj = JSON.parse(response);
        //                 $(".modal-title").html(obj.name);
        //                 $("#student_id").val(obj.id);
        //             },
        //             error: function(xhr, status, errorThrown) {
        //                 console.log(xhr);
        //                 console.log(status);
        //                 console.log(errorThrown);
        //             }

        //             });
        // }


        $('form#result').submit(function(e) {

            var form = $(this);

            e.preventDefault();

            $.ajax({
                type: "post",
                url: "<?= base_url() ?>admin/result/saveResult",
                data: form.serialize(), // <--- THIS IS THE CHANGE
                dataType: "html",
                success: function(data){
                    alert('success');
                },
                error: function() { alert("Error posting feed."); }
           });

        });

        </script>