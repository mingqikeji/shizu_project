<?php

class User extends MY_Controller
{
	private $id_user = '';
	public function __construct()
	{
		parent::__construct();
		$this->load->model("User_model");
		$this->id_user = $this->session->userdata('id_user');
	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($username && $password)
		{
			$user = $this->User_model->getUserByUserName($username);
			if(!$user)
			{
				redirect(base_url('/login'));				
			}

			if($this->User_model->verifyPasswordHash($password, $user->password))
			{
				$this->session->set_userdata('id_user', $user->id);
				redirect(base_url('/index'));
			}
		}

		redirect(base_url('/login/index'));
	}

	public function quit()
	{
		$this->session->unset_userdata('id_user');
		redirect(base_url('login'));
	}

	public function adminIndex()
	{
		$users = $this->User_model->get();
		if($users)
		{
			$this->view_data['users'] = $users;
		}
		$this->load->view('user/adminIndex', $this->view_data);
	}
}