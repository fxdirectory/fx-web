<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/update/index');
	}
}
