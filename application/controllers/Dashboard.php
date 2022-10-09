<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function index()
	{
		$data['meta'] = [
			'title' => 'Dashboard',
		];

		$this->load->view('dashboard_vw', $data);
	}

	public function brand()
	{
		$data['meta'] = [
			'title' => 'Brand',
		];
		$this->load->view('brand_vw', $data);
	}

	public function outlet()
	{
		$data['meta'] = [
			'title' => 'Outlet',
		];
		$this->load->view('outlet_vw', $data);
	}

	public function discount()
	{
		$data['meta'] = [
			'title' => 'Discount',
		];
		$this->load->view('discount_vw', $data);
	}

	public function sports()
	{
		$data['meta'] = [
			'title' => 'Sports',
		];
		$this->load->view('sports_vw', $data);
	}
}
