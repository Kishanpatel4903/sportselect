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
class Admin extends CI_Controller {

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
		$this->session->keep_flashdata('mess');
		$this->session->keep_flashdata('message');
	}

	/**
	 * Index of the create page
	 *
	 * @param  null  Do not have a param
	 * @return null  Do not have a return
	 */
	public function index()
	{
		  
		/*$this->load->view('header');*/
		$this->load->view('adminlogin');
		/*$this->load->view('footer');*/
	}

	public function dashbaord(){
		$this->load->view('admin');	
	}

	public function generatelink(){
		if(!empty($this->input->post('code')) ){
			$data = array(
				"code" => $this->input->post('code'),
				"passkey" => sha1($this->input->post('code')),
				"useremail" => $this->input->post('useremail'),
				"type" => $this->input->post('common'),
			);
			$query = $this->register_model->register_generate($data);
			if($query){
		    	$this->session->set_flashdata('mess', array('passkey' => sha1($this->input->post('code')),'useremail'=>$this->input->post('useremail'),'class' => 'alert alert-danger'));
		    	 $this -> session -> set_flashdata('message', 'Your information was successfully updated.');
		    	 $this->session->keep_flashdata('message');
		    	 $this->load->view('admin');
				//redirect(base_url().'admin');
			}
		}else{
			$this->session->set_flashdata('mess', array('message' => 'Something went wrong.','class' => 'alert alert-danger'));
			redirect(base_url().'admin');
		}
	}
}