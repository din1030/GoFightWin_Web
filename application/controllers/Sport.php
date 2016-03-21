<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sport extends CI_Controller {

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

    public function add_sport_action()
    {
        $this->form_validation->set_rules('sport', '飲食項目', 'trim|required');
        $this->form_validation->set_rules('amount', '份量', 'trim|required');
        $this->form_validation->set_rules('sport_date', '日期', 'trim|required');
        $this->form_validation->set_rules('sport_time', '時間', 'trim|required');
        if ($this->form_validation->run() == false) {
            echo validation_errors();
        } else {
        	$data = array(
		        'type' => $this->input->post('sport'),
		        'amount' => $this->input->post('amount'),
		        'date' => $this->input->post('sport_date'),
		        'time' => $this->input->post('sport_time')
			);
        	$this->db->insert('sport', $data);
        }
    }

}
