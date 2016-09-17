<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{
	private $_current_class = '';
	private $_current_method = '';
	public $view_data = array();

	public function __construct()
	{
		parent::__construct();
		$this->valid_auth();
	}

	public function valid_auth()
	{
		$this->_current_class = $this->router->fetch_class();
		$this->_current_method = $this->router->fetch_method();
		$path = $this->_current_class . "_" . $this->_current_method;
		$this->view_data['controller_method'] = $path;
		if(in_array($path, $this->noAuthPath()))
		{
			return;
		}

		//TODO 验证用户是否此页面的权限
		$user_id = $this->session->userdata('id_user');
		if(!$user_id)
		{
			redirect(base_url("/login/index"));
		}

		//die("Auth validing!");
	}

	/**
	 * 返回不需要验证的 路径方法
	 * @return array 列表
	 */
	public function noAuthPath()
	{
		return array(
			"login_index",
			"user_login"
		);
	}
}