<?php

class User extends CI_controller{

    public  function __construct()
    {
        parent::__construct();
    $this->load->model('User_model');
   
    }

    function index ()
    {
    
            $this->load->model('User_model');
           
            $info = $this->User_model->all();
             $data = array();
             $data['info']=$info;
            $this->load->view('user/userCreate',$data);
            
      
    }
    
    // function dashboard ()
    // {

    //     if (!$this->session->userdata['logged_in']) {
    //         redirect('User/index');
    //     }else {
    //         $this->load->model('User_model');
    //         $this->load->view('students/dashboard');
    
    // } 
        

    // }
    function dashboard()
    {
     $this->load->view('students/dashboard');
    }

   

    function create ()
    {
        $this->load->model('User_model');
        
            $formArray=array();
            $formArray['voterID']=$this->input->post('voterID');
           
           
             $formArray['create_at']=date('Y-m-d');
           
          $this->User_model->create($formArray);

      

        	$rollno = $formArray['rollno'];
			
			
			$sessiondata = array(
				'rollno' => $rollno,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($sessiondata);

			redirect(base_url().'index.php/User/dashboard');

    
        
    }

      function  auth ()
     {  
            $name    = $this->input->post('name',TRUE);
            $email = $this->input->post('email',TRUE);
            if ($name != TRUE && $email != TRUE) {
                redirect(base_url().'index.php/User/index');
            } else{
            $val = $this->User_model->val($name,$email);
            if($val->num_rows() > 0){
                $formArray  = $val->row_array();
                $name = $formArray['name'];
                $email = $formArray['email'];
                $organization="PPLA Board";
                $sessiondata = array(
                    'name' => $name,
                    'email'     => $email,
                    'logged_in' => TRUE,
                    'organization'=>$organization
                );
                $this->session->set_userdata($sessiondata);
           
        redirect(base_url().'index.php/User/dashboard');

            } 
            else{
                
     $msg = "Record not found";
     echo $this->session->set_flashdata('msg',$msg);
     redirect(base_url().'index.php/User/index');

            }  
        }
     }



    function logout ()
 {
   $this->session->unset_userdata('name');
   $this->session->unset_userdata('email');
 $this->session->unset_userdata('logged_in');
  
    redirect(base_url().'index.php/User/index');
 }


    function edit($infoId)
    {
        if (!$this->session->userdata['logged_in']) {
            redirect('User/index');
        }else {
        $this->load->model('User_model');
        $info = $this->User_model->get($infoId);
         $data = array();
         $data['info']=$info;
         $this->form_validation->set_rules('name','name','required');
        $this->form_validation->set_rules('email','email','required');
        $formArray['create_at']=date('Y-m-d');
       
        if($this->form_validation->run()==false)
         {
            // $errors = validation_errors();
            // echo json_encode(['error'=>$errors]);
             $this->load->view('infoEdit',$data);
         }
         else
         {
             $formArray=array();
             $formArray['name']=$this->input->post('name');
            
            $formArray['email']=$this->input->post('email');
           
           
            $formArray['create_at']=date('Y-m-d');
             $this->User_model->Update($infoId);
             $this->session->set_flashdata('success','Record Added Successfully !');
             redirect(base_url().'index.php/User/index');
 
 
         }
        }



    }

    public function checkUser()
	{

		$email=$this->input->post('email','required|valid_email');
		$result=$this->User_model->email_exists($email);

        // if($result==TRUE)
        // {
        //         redirect(base_url().'index.php/User/index');
        // }
        // else{

            if($result)
            {
                echo TRUE;
               // redirect(base_url().'index.php/User/index');
            }
            else
            {
                echo  false;
            }
        // }
	
	}
    
        
    function delete($courseId)
    {
        if (!$this->session->userdata['logged_in']) {
            redirect('User/index');
        }else {
        $this->load->model('User_model');
        $info = $this->User_model->get($infoId);
        if(empty($info))
        {
            $this->session->set_flashdata('failure','Record not found in database !');
            redirect(base_url().'index.php/User/index');

        }

        $this->User_model->delete($infoId);

        $this->session->set_flashdata('success','Record deleted !');
        redirect(base_url().'index.php/User/index');

    }
    }

    


}


?>