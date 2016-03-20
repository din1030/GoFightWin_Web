<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food extends CI_Controller {

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

    public function add_food_action()
    {
        $this->form_validation->set_rules('food', '飲食項目', 'trim|required');
        $this->form_validation->set_rules('food_quantity', '份量', 'trim|required');
        $this->form_validation->set_rules('food_date', '日期', 'trim|required');
        $this->form_validation->set_rules('food_time', '時間', 'trim|required');
        if ($this->form_validation->run() == false) {
            echo validation_errors();
        } else {
        	$data = array(
		        'food' => $this->input->post('food'),
		        'food' => $this->input->post('food_quantity'),
		        'date' => $this->input->post('food_date'),
		        'time' => $this->input->post('food_time')
			);
        	$this->db->insert('food', $data);
        }
    }

}
