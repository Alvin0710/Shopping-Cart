<?php
class Cart_model extends CI_Model
{

	function get_all_product()
	{
		$shopping_card = $this->db->get('product');
		return $shopping_card->result();
	}
}
