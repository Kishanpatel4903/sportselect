<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Index_model
 *
 * @package    Models
 * @subpackage null
 * @category   Models
 * @author     Guilherme Gatti
 * @link       null
 */
class Main_model extends CI_Model{

	/**
	 * Construct of CI_Model
	 *
	 * @param  null  Do not have a param
	 * @return null  Do not have a return
	 */
	public function __construct()
	{
	
		/**
		 * Instead the construct of CI_Model
		 */
		parent::__construct();
	}

	public function get_all($table){

		$this->db->order_by("_ID", "desc");
		$query = $this->db->get($table)->result();
		return $query;
	}

	public function get_singlerow($table, $field, $value){

		$row = $this->db->where($field, $value);
		return $row = $this->db->get($table)->row();
	}

	public function get_allrecord($table, $cond){

		if(!empty($cond)){
			foreach ($cond as $field => $value) {
 				$this->db->where($field, $value);
			}
		}
		return $this->db->get($table)->result();
		 
	}

	
	public function run_select($qry){

		$query = $this->db->query($qry);

		return $query->result_array();

	}

	public function insert($table,$data){

		$this->db->insert($table, $data);
   		$insert_id = $this->db->insert_id();
   		return  $insert_id; 
	}
	
	public function update($table,$field,$value,$data){

		$this->db->where($field, $value);
		$up = $this->db->update($table, $data);
   		return  $up; 
	}

	public function update_with_cond($table,$cond,$data){

		foreach ($cond as $key => $value) {
			$this->db->where($key, $value);
		}
		$up = $this->db->update($table, $data);
   		return  $up; 
	}
	
	public function delete($table,$field,$value)
	{ 
		$this->db->where($field, $value);
		$del = $this->db->delete($table);
		return $del;
	}



}