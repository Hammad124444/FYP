<?php

class Positions extends CI_controller{
    public $table="positions";
    public $colid = "p_id";
    public function __construct()
	{
		parent::__construct();
        $this->load->model('Organizations_model');
		$this->load->model('Positions_model');
		$this->load->view('students/nav');
	}

    function index ()

     {
        if (!$this->session->userdata['logged_in']) {
            redirect('User/index');
        }else {
            $this->load->model('Organizations_model');
             $courses = $this->Positions_model->all();
        $this->load->model('Positions_model');
        $courses = $this->Positions_model->all();
         $data = array();
         $data['courses']=$courses;
        $this->load->view('course/coursesList',$data);
        }
    }
    
  
    function view ()
  {
	$o_id =$this->input->get('o_id');
	$p_id =$this->input->get('p_id');
	
	//  print_r($s_id);
	//  die('die');
	
	$this->load->model('Organizations_model');
	$organizations = $this->Organizations_model->get($o_id);
	
	$result = array();
	$result['data']=$organizations;
	$result['o_id']=$o_id;
	$this->load->view('course/coursesList',$result);
  

  }

    function create ()
    {
        // if (!$this->session->userdata['logged_in']) {
        //     redirect('User/index');
        // }else {
        $this->load->model('Positions_model');
     
        $this->form_validation->set_rules('position','position','required');
        if($this->form_validation->run()==false)
        {
            // $errors = validation_errors();
            // echo json_encode(['error'=>$errors]);
            $this->load->view('course/coursesCreate');
        }
        else
        {
            $formArray=array();
           $organization =$this->session->userdata('organization');
            $formArray['organization']=$organization;
          
            $formArray['position']=$this->input->post('position');
            // $this->session->set_userdata('position');
            $formArray['create_at']=date('Y-m-d');
            $this->Positions_model->create($this->table,$formArray);
            $this->session->set_flashdata('success','Record Added Successfully !');
            redirect(base_url().'index.php/Positions/index');

        // }
        }
    }
    function edit()
    {
        if (!$this->session->userdata['logged_in']) {
            redirect('User/index');
        }else {
             $Id=$this->input->get('p_id');
            // print($Id);
            // die("die");
        $this->load->model('Positions_model');
        $courses = $this->Positions_model->get($this->colid,$Id);
         $data = array();
         $data['courses']=$courses;
         
         $this->form_validation->set_rules('p_id','p_id');
        $this->form_validation->set_rules('position','position','required');
        if($this->form_validation->run()==false)
         {
        //     $errors = validation_errors();
        //     echo json_encode(['error'=>$errors]);
             $this->load->view('course/coursesEdit',$data);
         }
         else
         {
             $formArray=array();
             $formArray['p_id']=$this->input->post('p_id');
            $formArray['position']=$this->input->post('position');
            $formArray['create_at']=date('Y-m-d');
            
             $this->Positions_model->Update($this->table,$this->colid,$Id,$formArray);
             $this->session->set_flashdata('success','Record Added Successfully !');
             redirect(base_url().'index.php/Positions/index');
 
 
         }
        }


    }
        
    function delete()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('User/index');
        }else {
             $Id=$this->input->get('p_id');
        $this->load->model('Positions_model');
        $courses = $this->Positions_model->get($colid,$Id);
        if(empty($courses))
        {
            $this->session->set_flashdata('failure','Record not found in database !');
            redirect(base_url().'index.php/Positions/index');

        }

        $this->Positions_model->delete($table,$colid,$Id);

        $this->session->set_flashdata('success','Record deleted !');
        redirect(base_url().'index.php/Positions/index');
    }

    }

    


}


?>