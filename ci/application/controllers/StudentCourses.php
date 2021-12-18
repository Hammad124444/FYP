<?php

class StudentCourses extends CI_controller{
    
    public function __construct()
	{
		parent::__construct();
		$this->load->model('SC_model');

        $this->load->model('Organizations_model');
		$this->load->view('students/nav');
	}


    function add()
    {
		
       $o_id =$this->input->get('o_id');
	   $p_id =$this->input->get('p_id');
	  
        $this->load->model('Courses_model');
        $studies = $this->Courses_model->all();
         $data = array();
         $data['studies']=$studies;
		 $data['o_id']=$o_id;
        $this->load->view('course/addCourses',$data);
       

    }
    
   
  function view ()
  {
	$o_id =$this->input->get('o_id');
	$p_id =$this->input->get('p_id');
	
	//  print_r($s_id);
	//  die('die');
	$this->load->model('Organizations_model');
	// $this->load->model('SC_model');
	$organizations = $this->Organizations_model->get($o_id);
	
	$result = array();
	$result['organizations']=$organizations;
	$result['o_id']=$o_id;
	$this->load->view('course/coursesList',$result);
  

  }
 function save ()
 {

		if (!$this->session->userdata('logged_in')) {
			redirect('User/index');
		} else {

		
			$checkbox = $this->input->post('check');
			$o_id = $this->input->post('o_id');
			//$c_id = $this->input->post('c_id');
			
			if (isset($checkbox)) {
				for ($i = 0; $i < count($checkbox); $i++) {
					$p_id = $checkbox[$i];
					$this->SC_model->save($o_id, $o_id);
					
				}
				
			}
			redirect(base_url().'index.php/Student/index');
		}
		

 }    
 
 function index ()
 {
	 if (!$this->session->userdata['logged_in']) {
		 redirect('User/index');
	 }else {
	$o_id =$this->input->get('o_id');

	 $this->load->model('SC_model');
	 $studcourse = $this->SC_model->getC($o_id);
	  $result = array();
	  $result['data']=$studcourse;
	  $result['o_id']=$o_id;
	 

	 $this->load->view('StudentCourse/viewcourse',$result);
	
	 }
 }
 
 function delete ()
 {
	if (!$this->session->userdata('logged_in')) {
		redirect('User/index');
	}
	else
   {
	$o_id=$this->input->get('o_id');
	
// print($s_id);
// 	die('die');
	$p_id=$this->input->get('p_id');
	
	$this->load->model('SC_model');
	
	$studcourse = $this->SC_model->getCourse($o_id,$p_id);
	if(empty($studcourse))
	{
		$this->session->set_flashdata('failure','Record not found in database !');
		redirect(base_url().'index.php/Student/index');

	}
else{

	$this->SC_model->deletecourses($o_id,$p_id);
	$this->session->set_flashdata('success','Record deleted !');
	// $this->load->view('StudentCourse/viewcourse');
	//$this->view();
//	$this->add();
    // $this->load->view('StudentCourse/viewcourse',$studcourse);
	redirect(base_url().'index.php/Student/index');
}
		
}
}

}


?>