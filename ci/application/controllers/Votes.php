<?php

class Votes extends CI_controller
{
    public $table = "votes";
    public $colid = "id";
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Votes_model');

    }

    public function vote()
    {
        if (!$this->session->userdata('Vlogged_in')) {
            redirect('User/index');
        } else {
            $this->load->model('Votes_model');

            $this->load->model('Teacher_model');
            // $n_id = $this->input->get('n_id');
            $nominee = $this->Teacher_model->all();
            $data = array();
            $data['nominee'] = $nominee;
            // $this->load->view('students/nav');
            $this->load->view('voters/voteOrg', $data);

        }
    }
    public function voted()
    {
        if (!$this->session->userdata('Vlogged_in')) {
            redirect('User/index');
        } else {
            $this->load->model('Votes_model');
            // $this->load->model('Positions_model');
            $this->form_validation->set_rules('id', 'id');
            //  $this->form_validation->set_rules('organization', 'organization', 'required');

            
            $this->form_validation->set_rules('nominee', 'nominee', 'required');

            if ($this->form_validation->run() == false) {
                // $errors = validation_errors();
                // echo json_encode(['error'=>$errors]);
                $this->load->view('voters/voteOrg');
            } else {
                $formArray = array();
                $organization = $this->session->userdata('organization');
                $formArray['id'] = $this->input->post('id');

                $formArray['organization'] = $organization;
                $voterID = $this->session->userdata('voterID');
                $formArray['voterID'] = $voterID;
                $point = $this->session->userdata('point');
                $formArray['point'] = $point;
                $formArray['nominee'] = $this->input->post('nominee');
                $this->Votes_model->create($this->table, $formArray);
                $this->session->set_flashdata('success', 'Record Added Successfully !');
                redirect(base_url() . 'index.php/User/index');

            }}

    }

    public function votePos()
    {
        if (!$this->session->userdata('Vlogged_in')) {
            redirect('User/index');
        } else {

            // $this->load->model('Positions_model');
            $this->form_validation->set_rules('nominee', 'nominee');
            $this->load->model('Votes_model');
            $n_id = $this->input->get('n_id');
            $nominee = $this->Teacher_model->all();
            $data = array();
            $data['nominee'] = $nominee;
            $this->load->view('students/nav');
            $this->load->view('voters/votePos', $data);
            if ($this->form_validation->run() == false) {
                // $errors = validation_errors();
                // echo json_encode(['error'=>$errors]);
                $this->load->view('voters/votePos');
            } else {
                $formArray = array();

                $formArray['nominee'] = $this->input->post('nominee');
                // $formArray['voterID'] = $this->input->post('voterID');

                $this->Votes_model->create($this->table, $formArray);
                $this->session->set_flashdata('success', 'Record Added Successfully !');
                redirect(base_url() . 'index.php/User/index');

            }
        }
    }

    public function voteResult()
    {
        // if (!$this->session->userdata('Vlogged_in')) {
        //     redirect('User/index');
        // } else {
            $this->load->model('Votes_model');

            // $this->load->model('Teacher_model');
            // $n_id = $this->input->get('n_id');
            $votes = $this->Votes_model->all();
            $data = array();
            $data['votes'] = $votes;
            $this->load->view('students/nav');
            $this->load->view('voters/voteResult', $data);

        // }
    }




}
