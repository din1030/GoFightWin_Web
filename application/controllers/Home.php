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
		$this->db->select('weight, time');
		$this->db->from('weight');
		$this->db->where('date = CURDATE()');
		// $query = $this->db->get();
		// $weight_array = $query->result_array();

		$data['weight'] = $this->db->get();

		$this->db->select('temperature, time');
		$this->db->from('temperature');
		$this->db->where('date = CURDATE()');
		// $query = $this->db->get();
		// $temp_array = $query->result_array();

		$data['temp'] = $this->db->get();

		$this->load->view('header');
		$this->load->view('home', $data);
		$this->load->view('footer');
	}
}
