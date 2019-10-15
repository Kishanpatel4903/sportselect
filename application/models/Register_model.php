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
class Register_model extends CI_Model{

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

	public function register($data){
		return $this->db->insert("users",$data);
	}

	

	public function register_generate($data){
		return $this->db->insert("invitation",$data);
	}

	public function passkey_check($passkey){
		$this->db->where('passkey', $passkey);
		return $query = $this->db->get('invitation')->result();

	}



}