<?php

class Teacher extends CI_controller
{
    public $table = "nominees";
    public $colid = "n_id";
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Teacher_model');
        $this->load->model('Positions_model');
        $this->load->view('students/nav');
    }

    public function index()
    {
        if (!$this->session->userdata['logged_in']) {
            redirect('User/index');
        } else {

            $this->load->model('Teacher_model');
            $this->load->model('Positions_model');
            $n_id = $this->input->get('n_id');
            // print($n_id);
            // die('die');
            // $this->load->model('Positions_model');
            $courses = $this->Positions_model->all();
            $teacher = $this->Teacher_model->all();
            $data = array();
            $data['courses'] = $courses;
            $data['teacher'] = $teacher;
            $this->load->view('teacher/teacherList', $data);
        }

    }

    
    // public function voters()
    // {
    //     if (!$this->session->userdata['logged_in']) {
    //         redirect('User/index');
    //     } else {

    //         $this->load->model('Teacher_model');
    //         $this->load->model('Positions_model');
    //         $v_id = $this->input->get('v_id');
    //         $voters = $this->Teacher_model->allVoters();
    //         $data = array();
    //         $data['voters'] = $voters;
    //         $this->load->view('teacher/voterList', $data);
    //     }

    // }

    public function create()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('User/index');
        } else {
            $this->load->model('Teacher_model');
            // $this->load->model('Positions_model');
            $this->form_validation->set_rules('n_id', 'n_id');
            //  $this->form_validation->set_rules('organization', 'organization', 'required');
           $this->form_validation->set_rules('position', 'position', 'required');
            $this->form_validation->set_rules('nominee', 'nominee', 'required');
            $this->form_validation->set_rules('course', 'course', 'required');
            $this->form_validation->set_rules('year', 'year', 'required');

            if ($this->form_validation->run() == false) {
                // $errors = validation_errors();
                // echo json_encode(['error'=>$errors]);
                $this->load->view('teacher/teacherList');
            } else {
                $formArray = array();
                 $organization = $this->session->userdata('organization');
                $formArray['n_id'] = $this->input->post('n_id');

                $formArray['organization'] = $organization;
                //  $formArray['organization']=$this->input->post('organization');
                $formArray['position'] = $this->input->post('position');
                $formArray['nominee'] = $this->input->post('nominee');
                $formArray['course'] = $this->input->post('course');
                $formArray['year'] = $this->input->post('year');

                // $formArray['create_at']=date('Y-m-d');
                $this->Teacher_model->create($this->table, $formArray);
                $this->session->set_flashdata('success', 'Record Added Successfully !');
                redirect(base_url() . 'index.php/Teacher/index');

            }}
    }

    // public function createVoter()
    // {
    //     if (!$this->session->userdata('logged_in')) {
    //         redirect('User/index');
    //     } else {
    //         $this->load->model('Teacher_model');
    //         // $this->load->model('Positions_model');
    //         $this->form_validation->set_rules('v_id', 'v_id');
    //         $this->form_validation->set_rules('voter', 'voter', 'required');
    //         $this->form_validation->set_rules('course', 'course', 'required');
    //         $this->form_validation->set_rules('year', 'year', 'required');
    //         $this->form_validation->set_rules('voterID', 'voterID', 'required');
    //         if ($this->form_validation->run() == false) {
    //             // $errors = validation_errors();
    //             // echo json_encode(['error'=>$errors]);
    //             $this->load->view('teacher/teacherList');
    //         } else {
    //             $formArray = array();
                 
    //             $formArray['v_id'] = $this->input->post('v_id');
    //             $formArray['voter'] = $this->input->post('voter');
               
    //             $formArray['course'] = $this->input->post('course');
    //             $formArray['year'] = $this->input->post('year');
    //             $formArray['voterID'] = $this->input->post('voterID');

    //             // $formArray['create_at']=date('Y-m-d');
    //             $this->Teacher_model->createVoter($formArray);
    //             $this->session->set_flashdata('success', 'Record Added Successfully !');
    //             redirect(base_url() . 'index.php/Teacher/index');

    //         }}
    // }

    public function edit()
    {
        if (!$this->session->userdata['logged_in']) {
            redirect('User/index');
        } else {
            $Id = $this->input->get('n_id');
            $this->load->model('Teacher_model');
            $teacher = $this->Teacher_model->get($this->colid, $Id);
            $data = array();
            $data['teacher'] = $teacher;
            $this->form_validation->set_rules('n_id', 'n_id');
            $this->form_validation->set_rules('nominee', 'nominee', 'required');
            if ($this->form_validation->run() == false) {
                // $errors = validation_errors();
                // echo json_encode(['error'=>$errors]);
                $this->load->view('teacher/teacherEdit', $data);
            } else {
                $formArray = array();

                $formArray['nominee'] = $this->input->post('nominee');

                // $formArray['create_at']=date('Y-m-d');
                $this->Teacher_model->Update($table, $colid, $Id, $formArray);
                $this->session->set_flashdata('success', 'Record Added Successfully !');
                redirect(base_url() . 'index.php/Teacher/index');

            }
        }

    }

    public function delete()
    {
        if (!$this->session->userdata['logged_in']) {
            redirect('User/index');
        } else {
            $Id = $this->input->get('n_id');
            $this->load->model('Teacher_model');
            $teacher = $this->Teacher_model->get($colid, $Id);
            if (empty($teacher)) {
                $this->session->set_flashdata('failure', 'Record not found in database !');
                redirect(base_url() . 'index.php/Teacher/index');

            }

            $this->Teacher_model->delete($table, $colid, $Id);

            $this->session->set_flashdata('success', 'Record deleted !');
            redirect(base_url() . 'index.php/Teacher/index');

        }
    }

}
