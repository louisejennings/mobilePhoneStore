<?php
class create extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		$data = array();
		$this->load->view('create');
	}
	function create()
	{
		$data = array(
			"phoneName"=>$this->input->post('phoneName'),
			"screenSize"=>$this->input->post('screenSize'),
			"price"=>$this->input->post('price'),
			"storageCapacity"=>$this->input->post('storageCapacity'),
			"processorSpeed"=>$this->input->post('processorSpeed'),
			"brand"=>$this->input->post('brand'),
			"imageUrl"=>$this->input->post('imageUrl'),
			"quantity"=>$this->input->post('quantity')
		);
		$this->admin_model->add_record($data);
		redirect('admin');
	}
}
