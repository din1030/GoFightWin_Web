<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BasicData extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

    public function add_weight_action()
    {
        $this->form_validation->set_rules('weight', '體重', 'trim|required');
        $this->form_validation->set_rules('weight_date', '測量日期', 'trim|required');
        $this->form_validation->set_rules('weight_time', '測量時間', 'trim|required');
        if ($this->form_validation->run() == false) {
            echo validation_errors();
        } else {
        	// echo $this->input->post('time_in_24hr');
        	$data = array(
		        'weight' => $this->input->post('weight'),
		        'date' => $this->input->post('weight_date'),
		        'time' => $this->input->post('weight_time')
		        // 'time' => $this->input->post('time_in_24hr')
			);
        	$this->db->insert('weight', $data);
        }
    }

    public function add_temp_action()
    {
        $this->form_validation->set_rules('temperature', '體溫', 'trim|required');
        $this->form_validation->set_rules('temp_date', '測量日期', 'trim|required');
        $this->form_validation->set_rules('temp_time', '測量時間', 'trim|required');
        if ($this->form_validation->run() == false) {
            echo validation_errors();
        } else {
        	// echo $this->input->post('time_in_24hr');
        	$data = array(
		        'temperature' => $this->input->post('weight'),
		        'date' => $this->input->post('temp_date'),
		        'time' => $this->input->post('temp_time')
		        // 'time' => $this->input->post('time_in_24hr')
			);
        	$this->db->insert('temperature', $data);
        }
    }

    public function add_pressure_action()
    {
        $this->form_validation->set_rules('systolic', '收縮壓', 'trim|required');
        $this->form_validation->set_rules('diastolic', '舒張壓', 'trim|required');
        $this->form_validation->set_rules('heartbeat', '心跳', 'trim|required');
        $this->form_validation->set_rules('pressure_date', '測量日期', 'trim|required');
        $this->form_validation->set_rules('pressure_time', '測量時間', 'trim|required');
        if ($this->form_validation->run() == false) {
            echo validation_errors();
        } else {
        	// echo $this->input->post('time_in_24hr');
        	$data = array(
		        'systolic' => $this->input->post('systolic'),
		        'diastolic' => $this->input->post('diastolic'),
		        'heartbeat' => $this->input->post('heartbeat'),
		        'date' => $this->input->post('pressure_date'),
		        'time' => $this->input->post('pressure_time')
		        // 'time' => $this->input->post('time_in_24hr')
			);
        	$this->db->insert('blood_pressure', $data);
        }
    }

    public function add_defecation_action()
    {
        $this->form_validation->set_rules('defecation_date', '測量日期', 'trim|required');
        $this->form_validation->set_rules('defecation_time', '測量時間', 'trim|required');
        if ($this->form_validation->run() == false) {
            echo validation_errors();
        } else {
        	// echo $this->input->post('time_in_24hr');
        	$data = array(
		        'date' => $this->input->post('defecation_date'),
		        'time' => $this->input->post('defecation_time')
		        // 'time' => $this->input->post('time_in_24hr')
			);
        	$this->db->insert('defecation', $data);
        }
    }

}
