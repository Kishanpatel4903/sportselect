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
class Register extends CI_Controller {

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

		/**
		 * Load all the views
		 */
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function check(){
		$passkey = $this->input->post('passkey');
		if(isset($passkey) && !empty($passkey)){
			$returnlink = $this->register_model->passkey_check(sha1($passkey));	
			if($returnlink){
				$data = array(
				"firstname"=>$this->input->post('firstname'),
				"lastname"=>$this->input->post('lastname'),
				"email"=>$this->input->post('email'),
				"password"=>$this->input->post('password'),
				);
				$query = $this->register_model->register($data);
				$this->session->set_flashdata('mess', array('message' => 'Your data has been added successfully.','class' => 'alert alert-success'));
				$this->load->view('index');
				//redirect('/');
			}else{
				$this->session->set_flashdata('mess', array('message' => 'Your passkey is not match with original.','class' => 'alert alert-danger'));
				$this->load->view('index');
				//redirect('/?passkey=	'.$this->input->post('oldpasskey'));
			}
		}
		else{
			$data = array(
				"firstname"=>$this->input->post('firstname'),
				"lastname"=>$this->input->post('lastname'),
				"email"=>$this->input->post('email'),
				"password"=>$this->input->post('password'),
			);
			$query = $this->register_model->register($data);
			if($query){
				$this->session->set_flashdata('mess', array('message' => 'Your data has been added successfully.','class' => 'alert alert-success'));
				$this->load->view('index');
				//redirect('/');
			}
		}
	}

}