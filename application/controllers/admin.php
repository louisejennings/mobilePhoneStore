
<?php

class admin extends CI_Controller{

	function index()
	{
		$data = array();


		if($query = $this->admin_model->get_records())
		{
			$data['records'] = $query;

		}
		$this->load->view('admin', $data);
	}

}