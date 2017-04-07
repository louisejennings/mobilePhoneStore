<?php
class delete extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		$data = array();
		redirect('admin');
	}
	function delete($id)
	{
		$this->admin_model->delete_row($id);
		$this->index();
	}
}