<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class memo extends CI_Controller {

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

    public function add_memo_action()
    {
        $this->form_validation->set_rules('memo', '內容', 'trim|required');
        $this->form_validation->set_rules('memo_date', '日期', 'trim|required');
        $this->form_validation->set_rules('memo_time', '時間', 'trim|required');
        if ($this->form_validation->run() == false) {
            echo validation_errors();
        } else {
        	$data = array(
		        'memo' => $this->input->post('memo'),
		        'date' => $this->input->post('memo_date'),
		        'time' => $this->input->post('memo_time')
			);
        	$this->db->insert('memo', $data);
        }
    }

}
