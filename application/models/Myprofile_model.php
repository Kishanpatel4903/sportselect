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
class Myprofile_model extends CI_Model{

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

	public function fetch_record($id){
		$this->db->where('id', $id);
		return $query = $this->db->get('users')->row();

	}

	public function getAllUserData(){
		// $this->db->where('id!=', 1);
		// $this->db->select('first_name,last_name');
		// return $query = $this->db->get('users')->result();
		$query = $this->db->query('SELECT all_users.*,u.*,a.*,c.* FROM all_users LEFT JOIN agent_users as a on all_users._User_ID = a._User_ID LEFT JOIN club_users as c on all_users._User_ID = c._User_ID LEFT JOIN users as u on all_users._User_ID = u.user_id'); 
		return $query->result();
	}

	public function fetchRecordByName($name){
		$this->db->where('first_name', $name);
		return $query = $this->db->get('users')->row();
	}

	public function profile_update($data){
		//pre($data);
		return $this->db->update("users",$data,array("id" => $this->session->userdata("verified")));
		
	}

	public function customjoinrow($table1,$table2,$common1,$common2,$cond)
    {
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join("$table2", "$table1.$common1 = $table2.$common2",'inner');

        if(!empty($cond)){
            foreach ($cond as $key => $value) {
                $query = $this->db->where($key,$value);
            }
        }
        $query=$this->db->get();
        //echo $this->db->last_query();exit;
        return $query->row();
    }



}