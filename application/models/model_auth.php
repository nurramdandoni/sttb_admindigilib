<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Auth extends CI_Model {


	function m_User()
	{
		$q = $this->db->query("SELECT * FROM table_user");
		return $q;
	}
	function m_GetUserEmail($email)
	{
		$q = $this->db->query("SELECT * FROM table_user WHERE email='$email' ");
		return $q;
	}
	function m_GetUserEmailpdw($email)
	{
		$q = $this->db->query("SELECT * FROM table_user WHERE email='$email' AND status='1' ");
		return $q;
	}


	function m_RegisterInsert($data)
	{
		$q = $this->db->insert('table_user',$data);

		return $this->db->insert_id();
	}


}
