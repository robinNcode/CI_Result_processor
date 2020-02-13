<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
    public function index()
    {
    	$data = [
    		'page_title'=>'Students Form',
            'page_type' => ['form', 'table'],
    	];

    	$this->form_validation->set_rules('name_id', 'Name', 'trim|required|text');
    	$this->form_validation->set_rules('program_id','Program', 'trim|required|numeric');
    	$this->form_validation->set_rules('phone_id','Phone Number', 'trim|required|numeric');
    	$this->form_validation->set_rules('email_id','Email ID', 'trim|required|alpha_numeric');
    	$this->form_validation->set_rules('versity_id','University Name', 'trim|required|numeric');
    	$this->form_validation->set_rules('semester_id','Semester', 'trim|required|numeric');

    	$this->load->view('cgpa',$data);
    }
}
