<?php

class User_Model extends MY_Model
{
	private $_table_name = 'sz_user';

	public function makePasswordHash($password)
    {
        return password_hash($password, PASSWORD_DEFAULT, array("cost" => 5));
    }

    //验证用户密钥
    public function verifyPasswordHash($password,  $passwordHash)
    {
        return password_verify($password, $passwordHash);
    }

	public function checkUserAuth($username, $password)
	{
		if(!$username || !$password)
		{
			return false;
		}
	}

	public function getUserByUserName( $username)
	{
		if(!$username)
		{
			return false;
		}

		$query = $this->db->get_where($this->_table_name, array('username' => $username));
		return $query->row();
	}

	public function get()
	{
		$query = $this->db->get($this->_table_name);
		return $query->result();
	}

	public function getItem($id)
	{
		$query = $this->db->get_where($this->_table_name, array('id' => (int) $id));
		return $query->row();
	}

	public function getAll($where = array(), $offset = 0, $limit = 20, $order = 'id DSC')
	{
		$sql = "SELECT * FROM " . $this->_table_name;

		$search_where = array();

		$query = $this->db->query($sql);
		$result = $query->result();

		if($result)
		{
			return $result;
		}

		return null;
	}
}