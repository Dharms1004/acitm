<?php

/**
 * \ dharminder singh
 * 21-06-2018
 */
class Admitcard extends Ci_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array("url","form"));
		$this->load->library(array('form_validation'));
		$this->load->model(array('course_model','student_model','branch_model'));
	}

	public function index()
	{
		$id = $this->input->post('id');
				
		if ($this->input->post()) {
			$data['student'] = $this->student_model->getStudentById($id);
			$data['student']['exam_date'] = $this->input->post('exam_date');
			$data['student']['exam_time'] = $this->input->post('exam_time');
			$data['student']['exam_center'] = $this->input->post('exam_center');

			$res = $this->domGenFrromHtml($data);
			if ($res) {
				$this->session->set_flashdata('success', 'Admit Card Successfully generated.');
				redirect('admin/student/student_form/'.$data['student']['id']);
			}
			
		}else{
			echo "hello";
		}

		// $data['content'] = "admitcard/card";
		
	}

	public function viewFinalPrint($data)
	{
		// $data['student'] = $value['student'];
		// $data['content'] = "admitcard/card";
		$this->load->view('admin/card', $data);

	}

	
    public function domGenFrromHtml($data) {
    	$student = $data['student'];
    	$course = $this->course_model->getCourseById($student['course_id']);
    	$course_name = strtoupper($course['name']);
        $branch = $this->branch_model->getBranchById($student['exam_center']);
        $docs = explode("|", $student['documents']);                                               
		 $html="<!DOCTYPE html>
				<html lang='en'>
				<head>
				    <title>ACIT Admin</title>
				    <style>
					table {
					    border-collapse: collapse;
					}

					table, td, th {
					    border: 1px solid black;
					}
					</style>
				</head>

				<body>
				<div id='wrapper'>
				           
				            <!-- /.row -->
				            <div class='row'>
				                <div class='col-lg-12'>
				               				                
				                    <div class='panel panel-default'>
				                        
				                        <div class='panel-body'>
				                        
				                            <table width='100%'>
				                                <tbody>
				                                    <tr>
				                                         <td style='text-align: center; border: px !important;''>
				                                            <img style='width: 130px' src='assets/frontend/img/logos/lg.jpg' >
				                                        </td>  
				                                        <td colspan='2' style='text-align: center; border: 0px !important; margin-bottom: 0px;'>
				                                            <p style='margin-left: 20px;font-size: 19px;'>ISO 9001:2015 Certified Organization Institute</p>
				                                            <h4 style='font-size: 29px;'><b>Adheesh Computer Institute of Technology</b></h4>
				                                            <h5 style='margin-left: 18px; margin-top: 0px; font-size: 16px;'>Regd. By Govt. of UP, Indian Govt, and DOEACC SOCIETY and HRD</h5>             
				                                        </td>     
				                                                       
				                                    </tr>
				                                    <tr >
				                                        <td  colspan='3' style='text-align: center; border: 0px !important; font-size: 15px'><strong>ACIT $course_name EXAMINATION</strong></td>
				                                    </tr>-+
				                                    <tr >
				                                        <td  colspan='3' style='text-align: center; border: 0px !important; font-size: 15px'><strong>CANDIDATE ADMIT CARD</strong></td>
				                                    </tr>
				                                    <tr >
				                                        <td  colspan='3' style='text-align: center; border: 0px !important; font-size: 15px'><strong>Name of the Candidate<i>(AS FILLED BY THE CANDIDATE)</i></strong></td>
				                                    </tr>
				                                    <tr class='odd gradeX'>
				                                        <td><strong>Roll no.</strong></td>
				                                        
				                                        <td colspan='1'><strong>$student[roll]</strong></td>  
				                                        <td rowspan='5'><img align='middle' width='90px' src='assets/images/student/$docs[0]' ></td> 
				                                        
				                                    </tr>
				                                    <tr class='odd gradeX'>
				                                        <td><strong>Student Name</strong></td>
				                                        <td colspan='1'>$student[name]</td> 
				                                    </tr>
				                                    <tr class='odd gradeX'>
				                                        <td><strong>Father's Name</strong></td>
				                                        <td colspan='1'>$student[father_name]</td>   
				                                    </tr>
				                                    <tr class='odd gradeX'>
				                                        <td><strong>Mother's Name</strong></td>
				                                        <td colspan='1'>$student[mother_name]</td>
				                                    </tr>
				                                    <tr class='odd gradeX'>
				                                        <td><strong>Exam Center</strong></td>
				                                        <td colspan='1'>$branch[branch_name]</td> 
				                                                                                 
				                                    </tr>
				                                    <tr class='odd gradeX'>     
				                                        <td colspan='3' style='text-align: center;'><strong>VALID FOR $course_name EXAMINATION ONLY</strong></td>  
				                                         
				                                    </tr>
				                                    <tr class='odd gradeX'>
				                                        <td colspan='3' style='text-align: center;'><strong>BATCH SCHEDULE</strong></td>  
				                                         
				                                    </tr>
				                                    <tr class='odd gradeX'>
				                                       
				                                        <td ><strong>Exam Center Address</strong></td> 
				                                        <td colspan='2'>Examination Date: <strong>$student[exam_date]</strong></td> 
				                                                                                 
				                                    </tr>
				                                    <tr class='odd gradeX'>
				                                        
				                                        <td rowspan='5'colspan='1'>$branch[address]</td> 
				                                                                                 
				                                    </tr>
				                                    <tr class='odd gradeX'>
				                                       
				                                        <td colspan='2'>BATCH: 1</td> 
				                                                                                 
				                                    </tr>
				                                    <tr class='odd gradeX'>
				                                        <td colspan='2'><STRONG>REPORTING TIME: $student[exam_time]</STRONG></td> 
				                                                                                 
				                                    </tr>
				                                    <tr class='odd gradeX'>
				                                        <td colspan='2'>GATE CLOSING TIME: 09:00 AM<br>No candidate will be allowed to enter the examination center after the gate closing time.</td> 
				                                                                                 
				                                    </tr>
				                                    <tr class='odd gradeX'>
				                                        <td colspan='2'>EXAM DURATION : 90 MIN.</td> 
				                                                                                 
				                                    </tr>
				                                    <tr class='odd gradeX'>
				                                        <td colspan='3'>IMPORTANT: CANDIDATES ARE ADVISED TO PUT THEIR SIGNATURE ON THE ATTENDANCE SHEET. CANDIDATE MUST CARRY ORIGINAL PHOTO IDENTITY CARD ALONG WITH THE ADMIT CARD ISSUED BY THE ACIT, FAILING WHICH THE CANDIADATE SHALLNOT CONSIDERED FOR THE EXAM. </td> 
				                                                                                 
				                                    </tr>
				                                    <tr class='odd gradeX'>
				                                        <td colspan='3'>INSTRUCTION TO BE FOLLOWED BY THE CANDIDATE AT ACET EXAMINATION</td> 
				                                                                                 
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

				</body>

				</html>";
		 $this->load->library('pdf');
		 $dompdf = new dompdf\Dompdf();
		 // Set Font Style
		// $dompdf->set_option('defaultFont', 'Courier');

		 $this->student_model->cardStatus($student['id']);
		 $dompdf->loadHtml($html);
		 // To Setup the paper size and orientation
		 $dompdf->setPaper('A4', 'landscape');
		 // Render the HTML as PDF
		 $dompdf->render();
		 // Get the generated PDF file contents
		 $pdf = $dompdf->output();
		 // Output the generated PDF to Browser
		 $domPdf=$student['roll'];
		 $res = file_put_contents("assets/pdfs/".$domPdf.'.pdf', $pdf);
		 return true;
		 //$dompdf->stream("domPdf.pdf");
		 
		// $this->setemail();
		 
		
		 
	 }

	public function changeAdmitCardStatus($value='')
	{
		$data = $this->student_model->admitCardtaus($value);
		return $data;
	}
}