<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class Status extends CI_Controller 
    {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');  
        $this->load->model(array('student_model','payment_model'));

    }
    
    public function index() {
       $status = $this->input->post('status');
      if (empty($status)) {
            redirect('pages');
        }
       
         $firstname = $this->input->post('firstname');
        $amount = $this->input->post('amount');
        $txnid = $this->input->post('txnid');
        $posted_hash = $this->input->post('hash');
        $key = $this->input->post('key');
        $productinfo = $this->input->post('productinfo');
        $email = $this->input->post('email');
        $salt = "dxmk9SZZ9y"; //  Your salt
        $add = $this->input->post('additionalCharges');
        $payment = $this->session->userdata('payment');
        $makepayment = array(
                            'name' => $firstname,
                            'email' => $email,
                            'course' => $productinfo,
                            'txnid' => $txnid,
                            'status' => $status
                              );
        If (isset($add)) {
            $additionalCharges = $this->input->post('additionalCharges');
            $retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
        } else {

            $retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
        }
          $this->payment_model->addNewPayment($makepayment);
          $data['hash'] = hash("sha512", $retHashSeq);
          $data['amount'] = $amount;
          $data['txnid'] = $txnid;
          $data['posted_hash'] = $posted_hash;
          $data['status'] = $status;
          $data['productinfo'] = $productinfo;
          $data['name'] = $firstname;
          $data['branch'] = $payment['branch'];
            if($status == 'success'){

                $this->deleteOrder();
                $this->load->view('frontend/success', $data);   
           }
           else{
                
                if($this->student_model->deleteStudent($payment['roll'])){
                  $this->deleteOrder();
                $this->load->view('frontend/fail', $data); 
              }
           }
     
    }

      public function deleteOrder()
      {
        $this->session->unset_userdata('payment');
      }

      public function createOrder()
      {
        $this->session->unset_userdata('payment');
      }
 
    
   }
