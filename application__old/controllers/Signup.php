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
class Signup extends CI_Controller {

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
		$this->load->model('signup_model');
		$this->load->model('myprofile_model','myprof');
		$this->load->model('my_model','model');
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
		$data['userdata'] = $this->myprof->getAllUserData();
		$data['agents'] = $this->model->get_allrecord('agent_users',array('1'=>'1'));

		$this->load->view('signup',$data);
	}

public function newsignup(){
	//print_r($_FILES); print_r($_POST); exit;

			$profile = date("dmYHis").$_FILES["file-upload-field"]["name"];

            $cv_path = realpath(APPPATH . "../uploads/player/cv/");

            $config['file_name']            = $profile;
            $config['upload_path']          = $cv_path;
            $config['allowed_types']        = 'jpg|png|jpeg|pdf|docx|doc';
             
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 
            if($this->upload->do_upload('file-upload-field')){
            	$cv = $this->upload->data('file_name');
            	$fullpath = $this->upload->data();
            }else{
            	$cv = '';
            } 

			$data = array(
				"_Firstname" =>$this->input->post('firstname'),
				"_Lastname" => $this->input->post('lastname'),
				"_Email" => $this->input->post('email'),
				"_Password" => md5($this->input->post('password')),
				"_SportType" => $this->input->post('sporttype'),
				"_Type" => $this->input->post('type'),
				"_Telephone" => $this->input->post('telephone'),
				"_Country" =>  $this->input->post('country'),
				"_CountryCode" =>  $this->input->post('countrycode'),
				"_StatisticsLink" => $this->input->post('statistiklink'),
				"_Cv" => $cv,
				"_Youself" => $this->input->post('yourself'),
				"_IsActive" => '1',
				"_IsDelete" => '0',
				"_Created" => date('Y-m-d h:i:s'),
				"_Updated" => date('Y-m-d h:i:s'),
			);
			$query1 = $this->signup_model->insert('ss_signup',$data);

			if($query1>0){

					if($this->input->post('type') == '1'){

						$subdata = array(
							"_PlayerID" =>$query1,
							"_IsActive" => '1',
							"_IsDelete" => '0',
							"_Created" => date('Y-m-d h:i:s'),
							"_Updated" => date('Y-m-d h:i:s'),
						);
						$query = $this->signup_model->insert('ss_players',$subdata);
						$redirect = '/player-profile';
					}	
					else if($this->input->post('type') == '2'){
						$subdata = array(
							"_AgentID" =>$query1,
							"_IsActive" => '1',
							"_IsDelete" => '0',
							"_Created" => date('Y-m-d h:i:s'),
							"_Updated" => date('Y-m-d h:i:s'),
						);
						$query = $this->signup_model->insert('ss_agents',$subdata);
						$redirect = '/agent-profile';
					}
					else if($this->input->post('type') == '3'){
						$subdata = array(
							"_ClubID" =>$query1,
							"_Club_name" =>$this->input->post('clubname'),
							"_IsActive" => '1',
							"_IsDelete" => '0',
							"_Created" => date('Y-m-d h:i:s'),
							"_Updated" => date('Y-m-d h:i:s'),
						);
						$query = $this->signup_model->insert('ss_clubs',$subdata);
						$redirect = '/club-profile';
					}

				$this->session->set_userdata("verified", $query1);
				$this->session->set_userdata("currentuser", $query1);
				$this->session->set_userdata("usertype", $this->input->post('type'));
				redirect($redirect);
			}
}
public function insertfunction(){
		 
			$profile = date("dmYHis").$_FILES["profile_img"]["name"];

            $image_path = realpath(APPPATH . "../uploads/player/user_profile/");

            $config['file_name']            = $profile;
            $config['upload_path']          = $image_path;
            $config['allowed_types']        = 'jpg|png|jpeg';
             
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 
            if($this->upload->do_upload('profile_img')){
            	$image = $this->upload->data('file_name');
            	$fullpath = $this->upload->data();
                            $this->resize_image($fullpath,141,130);
            }else{
            	$image = '';
            }

			$userdata = array(
							"_Email" => $this->input->post('email'),
							"_Password" => md5($this->input->post('pass')),
							"_Type" => '1',	
							"_Created" => date('Y-m-d H:i:s'),
							"_Updated" => date('Y-m-d H:i:s') 
						);
			$uid = $this->signup_model->insert('all_users',$userdata);

			$data = array(
				"user_id" => $uid,
				"email" => $this->input->post('email'),
				"password" => $this->input->post('pass'),
				"first_name" => $this->input->post('fname'),
				"last_name" => $this->input->post('lname'),
				"profile_img" => $image,
				"height" => $this->input->post('height'),
				"weight" => $this->input->post('weight'),
				"country" => $this->input->post('country'),
				"date" => $this->input->post('age'),
				"service_location" => $this->input->post('service_location'),
				"user_language" => $this->input->post('user_language'),
				"injuries" => $this->input->post('injuries'),
				"outfitter" => $this->input->post('outfitter'),
				"shoesize" => $this->input->post('shoesize'),
				"agentname" => $this->input->post('agentname'),
				"academy" => $this->input->post('academy'),
				"statisticslink" => $this->input->post('statisticslink'),
				"offeraccept" => $this->input->post('offeraccept'),
				"salary" => $this->input->post('salary'),
				"prefer_side" => $this->input->post('prefer_side'),
				"family_status" => $this->input->post('family_status'),
				"jersey_number" => $this->input->post('jersey_number'),
				"first_availability" => $this->input->post('first_availability'),
				"second_availability" => $this->input->post('second_availability'),
				"other" => $this->input->post('other'),
				"first_position" => $this->input->post('first_position'),
				"second_position" => $this->input->post('second_position'),
				"reference" => $this->input->post('referenceid'),
			);
			$query = $this->signup_model->register($data);

			if($query){
				$this->session->set_userdata("verified", $uid);
				$this->session->set_userdata("currentuser", $uid);
				$this->session->set_userdata("usertype", "1");
				redirect('/myprofile');
			}
		/*}*/
	}
	public function resize_image($upload_data,$width,$height)
    {
        $this->load->library('image_lib');
        $config1 = array(
            'image_library'=>'gd2',
            'source_image' => $upload_data['full_path'],
            //'create_thumb'=>'150x150',
            'new_image' => $upload_data['raw_name']. "-".$width."x".$height.$upload_data['file_ext'],
            'maintain_ratio' => false,
            'width' => $width,
            'height' => $height
        );
        //Image Autorotating Resize Orientation Setting
        $filename = $upload_data['full_path'];
        $this->image_lib->initialize($config1);
        $this->image_lib->resize();
        $this->image_lib->clear();

        return $config1['new_image'];  
    }

	public function logout(){
		$this->session->sess_destroy();
		redirect('/signin');
	}
}