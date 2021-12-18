<?php

class Voter extends CI_controller
{
    public $table = "voters";
    public $colid = "v_id";
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Voter_model');

    }
    public function index()
    {
        if (!$this->session->userdata['logged_in']) {
            redirect('User/index');
        } else {

            $this->load->model('Voter_model');
            $v_id = $this->input->get('v_id');
            $voters = $this->Voter_model->all();
            $data = array();
            $data['voters'] = $voters;
            $this->load->view('students/nav');
            $this->load->view('voters/voterList', $data);
        }

    }

    public function create()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('User/index');
        } else {
            $this->load->model('Teacher_model');
            // $this->load->model('Positions_model');
            $this->form_validation->set_rules('v_id', 'v_id');
            $this->form_validation->set_rules('voter', 'voter', 'required');
            $this->form_validation->set_rules('course', 'course', 'required');
            $this->form_validation->set_rules('year', 'year', 'required');
            $this->form_validation->set_rules('voterID', 'voterID', 'required');
            if ($this->form_validation->run() == false) {
                // $errors = validation_errors();
                // echo json_encode(['error'=>$errors]);
                $this->load->view('teacher/teacherList');
            } else {
                $formArray = array();

                $formArray['v_id'] = $this->input->post('v_id');
                $formArray['voter'] = $this->input->post('voter');

                $formArray['course'] = $this->input->post('course');
                $formArray['year'] = $this->input->post('year');
                $formArray['voterID'] = $this->input->post('voterID');

                $this->Voter_model->create($this->table, $formArray);
                $this->session->set_flashdata('success', 'Record Added Successfully !');
                redirect(base_url() . 'index.php/Voter/index');

            }}
    }

    public function auth()
    {
        $voterID = $this->input->post('voterID', TRUE);

        if ($voterID != TRUE) {
            redirect(base_url() . 'index.php/User/index');
        } else {
            $val = $this->Voter_model->val($voterID);
            if ($val->num_rows() > 0) {
                $formArray = $val->row_array();
                $voterID = $formArray['voterID'];
               $point = 1;
                $sessiondata = array(
                    'voterID' => $voterID,
                    'Vlogged_in' => TRUE,
                    'point'=> $point
                );
                $this->session->set_userdata($sessiondata);

                redirect(base_url() . 'index.php/Votes/vote');

            } else {

                $msg = "Record not found";
                echo $this->session->set_flashdata('msg', $msg);
                redirect(base_url() . 'index.php/User/index');

            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('voterID');

        $this->session->unset_userdata('Vlogged_in');

        redirect(base_url() . 'index.php/User/index');
    }

    public function edit()
    {
        if (!$this->session->userdata['logged_in']) {
            redirect('User/index');
        } else {
            $Id = $this->input->get('v_id');
            $this->load->model('Voter_model');
            $voters = $this->Voter_model->get($this->colid, $Id);
            $data = array();
            $data['voters'] = $voters;
            $this->form_validation->set_rules('v_id', 'v_id');
            $this->form_validation->set_rules('voter', 'voter', 'required');
            $this->form_validation->set_rules('course', 'course', 'required');
            $this->form_validation->set_rules('year', 'year', 'required');
            $this->form_validation->set_rules('voterID', 'voterID', 'required');
            if ($this->form_validation->run() == false) {
                // $errors = validation_errors();
                // echo json_encode(['error'=>$errors]);
                $this->load->view('voters/voterEdit', $data);
            } else {
                $formArray = array();

                $formArray['voter'] = $this->input->post('voter');
                // $formArray['course'] = $this->input->post('course');
                // $formArray['year'] = $this->input->post('year');
                // $formArray['voterID'] = $this->input->post('voterID');
                $this->Voter_model->Update($table, $colid, $Id, $formArray);
                $this->session->set_flashdata('success', 'Record Added Successfully !');
                redirect(base_url() . 'index.php/Voter/index');

            }
        }

    }

    public function delete()
    {
        if (!$this->session->userdata['logged_in']) {
            redirect('User/index');
        } else {
            $Id = $this->input->get('v_id');
            $this->load->model('Voter_model');
            $voters = $this->Voter_model->get($colid, $Id);
            if (empty($voters)) {
                $this->session->set_flashdata('failure', 'Record not found in database !');
                redirect(base_url() . 'index.php/Voter/index');

            }

            $this->Voter_model->delete($table, $colid, $Id);

            $this->session->set_flashdata('success', 'Record deleted !');
            redirect(base_url() . 'index.php/Voter/index');

        }
    }

}
