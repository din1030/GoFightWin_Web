<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$template = array(
	        'table_open' => '<table class="table table-striped table-bordered">',
	        'heading_row_start'     => '<tr class="warning">'
		);

		$this->table->set_template($template);

		$this->db->select('weight, SUBSTRING(time,1,5)');
		$this->db->from('weight');
		$this->db->where('date = CURDATE()');
		$this->db->order_by('time', 'ASC');
		$data['weight'] = $this->db->get();

		$this->db->select('temperature, SUBSTRING(time,1,5)');
		$this->db->from('temperature');
		$this->db->where('date = CURDATE()');
		$this->db->order_by('time', 'ASC');
		$data['temp'] = $this->db->get();

		$this->db->select('systolic, diastolic, heartbeat, SUBSTRING(time,1,5)');
		$this->db->from('blood_pressure');
		$this->db->where('date = CURDATE()');
		$this->db->order_by('time', 'ASC');
		$data['pressure'] = $this->db->get();

		$this->db->select('SUBSTRING(time,1,5)');
		$this->db->from('defecation');
		$this->db->where('date = CURDATE()');
		$this->db->order_by('time', 'ASC');
		$data['defecation'] = $this->db->get();

		$this->db->select('food, quantity, SUBSTRING(time,1,5)');
		$this->db->from('food');
		$this->db->where('date = CURDATE()');
		$this->db->order_by('time', 'ASC');
		$data['food'] = $this->db->get();

		$this->load->view('header');
		$this->load->view('home', $data);
		$this->load->view('footer');
	}
}
