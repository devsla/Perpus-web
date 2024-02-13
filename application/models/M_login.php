<?php

class M_login extends CI_MODEL
{
	public function get_where($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

}
