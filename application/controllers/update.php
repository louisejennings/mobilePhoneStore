<?php
class update extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	function display($id)
	{
		if($query = $this->admin_model->view($id))
		{
			$data['records'] = $query;
		}
		$this->load->view('update', $data);
	}
	function update($id)
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
		$this->admin_model->update_record($id,$data);
		redirect('admin');
	}
}