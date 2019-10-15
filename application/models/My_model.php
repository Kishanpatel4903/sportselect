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
class My_model extends CI_Model{
 
 
	public function get_all($table){

		$this->db->order_by("_ID", "desc");
		$query = $this->db->get($table)->result();
		return $query;
	}

	public function get_singlerow($table, $field, $value){

		$row = $this->db->where($field, $value);
		return $row = $this->db->get($table)->row();
	}
	public function get_singlerecord($table, $cond){
		if(!empty($cond)){
			foreach ($cond as $key => $value) {

				$this->db->where($key, $value);
			}
			return $this->db->get($table)->row();
		}
		 
	}

	public function get_allrecord($table, $cond){

		if(!empty($cond)){
			foreach ($cond as $field => $value) {
 				$this->db->where($field, $value);
			}
		}
		return $this->db->get($table)->result();
		 
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
	public function run_select($qry){

		$query = $this->db->query($qry);

		return $query->result();

	}
	public function run_selectrow($qry){

		$query = $this->db->query($qry);

		return $query->row();

	}

	public function getAllUserData(){

			$query = $this->db->query('SELECT ss_signup.*,u.*,a.*,c.* FROM ss_signup LEFT JOIN ss_agents as a on ss_signup._ID = a._ID LEFT JOIN ss_clubs as c on ss_signup._ID = c._ID LEFT JOIN ss_players as u on ss_signup._ID = u._ID');
			
			return $query->result();
		// if($type == '1'){
 
			

		// }else if($type = '2'){
			
		// 	$query = $this->db->query('SELECT all_users.*,u.*,a.*,c.* FROM all_users LEFT JOIN agent_users as a on all_users._User_ID = a._User_ID LEFT JOIN club_users as c on all_users._User_ID = c._User_ID LEFT JOIN users as u on all_users._User_ID = u.user_id');

			
		// 	return $query->result();

		// }else{

		// 	$query = $this->db->query('SELECT all_users.*,u.*,a.*,c.* FROM all_users LEFT JOIN agent_users as a on all_users._User_ID = a._User_ID LEFT JOIN club_users as c on all_users._User_ID = c._User_ID LEFT JOIN users as u on all_users._User_ID = u.user_id');

			
		// 	return $query->result();

		// }
		// $this->db->where('id!=', 1);
		// $this->db->select('first_name,last_name');
		// return $query = $this->db->get('users')->result();		
	}

	public function fetchRecordByName($name){  
		//echo $name; exit;

		$explode = explode('-', trim($name));

		$t = explode('-',str_replace(["(", ")"], '',$explode[1]));

		$n = explode(' ',trim($explode[0]));
 
		// if($t[0] == 'Player'){

		// 	$this->db->where('_Firstname', $n[0]);
		// 	$this->db->where('_Lastname', $n[1]);
		// 	$this->db->join('ss_signup','ss_signup._ID = ss_players._PlayerID', 'left');
		// 	$query = $this->db->get('ss_players');
		// 	//print_r($query); exit;

		// }else if($t[0] == 'Agent'){

		// 	$this->db->where('_Firstname', $n[0]);
		// 	$this->db->where('_Lastname', $n[1]);
		// 	$this->db->join('ss_signup','ss_signup._ID = ss_agents._AgentID', 'left');
		// 	$query = $this->db->get('ss_agents');

		// }else{

		// 	$this->db->where('_Firstname', $n[0]);
		// 	$this->db->where('_Lastname', $n[1]);
		// 	//$this->db->where('_Lastname', $n[1]);
		// 	$this->db->join('ss_signup','ss_signup._ID = ss_clubs._ClubID', 'left');
		// 	$query = $this->db->get('ss_clubs');
		// }

			$this->db->where('_Firstname', $n[0]);
			$this->db->where('_Lastname', $n[1]);
			//$this->db->join('ss_signup','ss_signup._ID = ss_players._PlayerID', 'left');
			$query = $this->db->get('ss_signup');
		 
		 return $query->row();

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
	public function get_notification($id,$limit=''){
        $this->db->select("ss_notifications.*,ss_signup._Type as usertype");
        $this->db->from('ss_notifications');
        $this->db->join('ss_signup','ss_signup._ID = ss_notifications._From_ID', 'left');
        //$this->db->join('user', 'user.user_ID = ss_notifications.fromuser_ID', 'left');
        $this->db->where('ss_notifications._To_ID', $id);
        $this->db->where('ss_notifications._Status', '0');
        $this->db->order_by('ss_notifications._Notification_ID', "DESC");
        if($limit != ''){
            $this->db->limit($limit);
        }
        $result = $this->db->get();
        return $result->result();
    }
    public function get_notificationcount($id,$limit=''){
        $this->db->select("*");
        $this->db->from('ss_notifications');
        $this->db->where('ss_notifications._To_ID', $id);
        $this->db->where('ss_notifications._Status', '0');
        $this->db->order_by('ss_notifications._Created', "DESC");
        //echo "aaaaaa".$this->db->last_query(); exit;
        if($limit != ''){
            $this->db->limit($limit);
        }
        $result = $this->db->get();
        return $result->num_rows();
    }




}