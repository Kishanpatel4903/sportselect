<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
/** 
 * Create
 *
 * @package     Controllers
 * @subpackage  null
 * @category    Controllers
 * @author      Guilherme Gatti
 * @link        null
 */
class Login extends CI_Controller {

	/**
	 * Construct of CI_Controller
	 *
	 * @param  null  Do not have a param
	 * @return null  Do not have a return
	 */
	public function __construct()
	{
	
		/**
		 * Instead the construct of CI_Controller
		 */
		parent::__construct();
		$this->load->model('register_model');
	}

	/**
	 * Index of the create page
	 *
	 * @param  null  Do not have a param
	 * @return null  Do not have a return
	 */
	public function index()
	{
		//session_check();
		if($this->session->userdata("currentuser") !=''){
			redirect('/player-profile');
		}
		$this->load->view('loginnew');
		
	}
	public function login()
	{
		//session_check();
		if($this->session->userdata("currentuser") !=''){
			redirect('/player-profile');
		}
		$this->load->view('loginnew');
		
	}

	public function check(){
		if($this->input->post('submit'))
		{
			 $e=$this->input->post('email');
			 $p=$this->input->post('password');
			 $que=$this->db->query("select * from ss_signup where _Email='".$e."' and _Password='".md5($p)."' ")->result();
			 if(count($que) > 0)
			 {	
			 	//print_r($que[0]->_Type); exit;
			 	$this->session->set_userdata("verified", $que[0]->_ID);
			 	$this->session->set_userdata("currentuser", $que[0]->_ID);
			 	$this->session->set_userdata("usertype", $que[0]->_Type);
 
			 	$this->session->set_flashdata('mess', array('message' => 'login details are correct','class' => 'alert alert-success'));
			 	if($que[0]->_Type == '1'){
			    	redirect('/player-profile');
			 	}
			 	else if($que[0]->_Type == '2'){
			 		redirect('/agent-profile');
			 	}
			 	else if($que[0]->_Type == '3'){
			 		redirect('/club-profile');
			 	}

			 }	
			 else
			 {
			 	$this->session->set_flashdata('error','Invalid login details.');
		 		redirect('/signin');
			 } 
		}
	}
	 
}