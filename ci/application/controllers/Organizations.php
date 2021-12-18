<?php

class Organizations extends CI_controller{
    public $table="organizations";
    public $colid = "o_id";
    public function __construct()
	{
		parent::__construct();
        $this->load->model('Organizations_model');
		// $this->load->model('Courses_model'); 
		$this->load->view('students/nav');
        // $this->load->view('students/footer');
        
	}
function home()
{
    $this->load->view('students/home');

}
    function index ()
    {
        if (!$this->session->userdata['logged_in']) {
            redirect('User/index');
        }else {
        $this->load->model('Organizations_model');
        $organizations = $this->Organizations_model->all();
         $data = array();
         $data['organizations']=$organizations;
        $this->load->view('students/list',$data);
        }
    }
    
   

    function create ()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('User/index');
        }else {
        $this->load->model('Organizations_model');
        
        $this->form_validation->set_rules('org_name','org_name','required');
      
    
        
        if($this->form_validation->run()==false)
        {
            // $errors = validation_errors();
            // echo json_encode(['error'=>$errors]);
            $this->load->view('students/list');
        }
        else
        {
            $formArray=array();
          
            $formArray['org_name']=$this->input->post('org_name');
           
            $formArray['create_at']=date('Y-m-d');
            $this->Organizations_model->create($this->table,$formArray);
            $this->session->set_flashdata('success','Record Added Successfully !');
            redirect(base_url().'index.php/Organizations/index');


        }}
    }

  
    function edit()
    {
        if (!$this->session->userdata['logged_in']) {
            redirect('User/index');
        }else {
            $Id=$this->input->get('o_id');
        $this->load->model('Organizations_model');
        $organizations = $this->Organizations_model->get($this->colid,$Id);
         $data = array();
         $data['organizations']=$organizations;
         $this->form_validation->set_rules('o_id','o_id');
              
              
              $this->form_validation->set_rules('org_name','org_name','required');
         if($this->form_validation->run()==false)
         {
            // $errors = validation_errors();
            // echo json_encode(['error'=>$errors]);
             $this->load->view('students/edit',$data);
         }
         else
         {
            $formArray=array();
            $formArray['o_id']=$this->input->post('o_id');
            
            $formArray['org_name']=$this->input->post('org_name');
            $formArray['create_at']=date('Y-m-d');
             $this->Organizations_model->Update($table,$colid,$Id,$formArray);
             $this->session->set_flashdata('success','Record Added Successfully !');
             redirect(base_url().'index.php/Organizations/index');
 
 
         }
        }



    }
        
    function delete()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('User/index');
        }else {
            $Id=$this->input->get('o_id');
        $this->load->model('Organizations_model');
    
        $organizations = $this->Organizations_model->get($this->colid,$Id);
        if(empty($organizations))
        {
            $this->session->set_flashdata('failure','Record not found in database !');
            redirect(base_url().'index.php/Student/index');

        }

        $this->Organizations_model->delete($table,$colid,$Id);

        $this->session->set_flashdata('success','Record deleted !');
        redirect(base_url().'index.php/Organizations/index');
    }

    }

    


}


?>