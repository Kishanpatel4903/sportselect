<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agent_controller extends CI_Controller {

	public function __construct()
	{	 
		parent::__construct();
		$this->load->database();
		$this->load->model('my_model','model');
		$this->load->library('form_validation');
		date_default_timezone_set('Asia/Kolkata');	 
	}

	public function index()
	{ 
		if($this->session->userdata('currentuser') != ''){

			if($this->session->userdata('usertype')=='1'){
				redirect(base_url('myprofile'));
			}else if($this->session->userdata('usertype')=='2'){
				redirect(base_url('agent-profile'));
			}else{
            	redirect(base_url('my-profile'));
			}
        }
		$data['users'] = $this->model->get_all('kishan_demo');
		
		//$this->load->view('common/header');
		$this->load->view('agent_login');
		//$this->load->view('common/footer');
	}
	public function login()
	{ 
 		if($this->session->userdata('currentuser') != ''){
            redirect(base_url('my-profile'));
        }
		$this->load->view('login');
		//$this->load->view('common/footer');
	}
	public function check(){
		if($this->input->post('submit'))
		 {
			 $e=$this->input->post('email');
			 $p=$this->input->post('password');
			 //echo "select * from all_users where _Email='".$e."' and _Password='".md5($p)."'"; exit;
			 $que=$this->db->query("select * from all_users where _Email='".$e."' and _Password='".md5($p)."'")->result();
			 //print_r($que); exit;
			 if(count($que) > 0)
			 {
			 	$this->session->set_userdata("currentuser", $que[0]->_User_ID);
			 	$this->session->set_userdata("usertype", $que[0]->_Type);
			 	$this->session->set_flashdata('mess', array('message' => 'login details are correct','class' => 'alert alert-success'));
			 	if($this->input->post('flag') == '1'){
			 	 	redirect('/admin/dashbaord');
			 	}else{
			 		redirect(base_url('agent-profile'));
			 	}
			 }
			 else
			 {
			 	// $this->session->set_flashdata('mess', array('message' => 'Invalid login details','class' => 'alert alert-daner'));
			 	// redirect(base_url('login'));
			 	$this->session->set_flashdata('user_msg', 'Invalid login details.');
				redirect(base_url('login'));
			 } 
		 }
		 redirect('/login');
	}
 	
 	public function email_check()
	{
		$checkemail = $this->model->get_singlerow('ss_signup','_Email', $this->input->post('email'));		 
		if(count($checkemail)>0){
			echo 'false';
		}else{
			echo 'true';
		}
	}
 	public function sign_up()
	{ 
	// $this->session->set_userdata(
	// 	    			array("currentuser"=> 4,'useremail'=>$this->input->post('email'))
	// 	    	);  
		if($this->session->userdata('currentuser') != ''){
            redirect(base_url('agent-profile'));
        } 
		$this->form_validation->set_rules('firstname','First name','required');//|exact_length[10]
		$this->form_validation->set_rules('lastname','First name','required');//|exact_length[10]
    	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','required'); 
 
	    if($this->form_validation->run() == FALSE)
	    {	
	    	$class['class'] = 'agent_profile';
	        $this->load->view('agent_sign_up',$class);
	    }
	    else
	    { 

	    	$user = array(
			        '_Email'=>$this->input->post('email'),
              		'_Password'=>md5($this->input->post('password')),
			        '_Type'=>'2', //Agent
			        "_Created" => date('Y-m-d H:i:s'),
					"_Updated" => date('Y-m-d H:i:s'), 
				); 
			$uid = $this->model->insert('all_users',$user);

	    	$profile = date("dmYHis").$_FILES["photo"]["name"];

            $image_path = realpath(APPPATH . "../uploads/agent/user_profile/");

            $config['file_name']            = $profile;
            $config['upload_path']          = $image_path;
            $config['allowed_types']        = 'jpg|png|jpeg';
             
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('photo');
            $photo1 = $this->upload->data('file_name');

            $agencylogo = date("dmYHis").$_FILES["agency_logo"]["name"];

            $image_path2 = realpath(APPPATH . "../uploads/agent/agency_logo");

            $config2['file_name']            = $profile;
            $config2['upload_path']          = $image_path2;
            $config2['allowed_types']        = 'jpg|png|jpeg';
             
            $this->load->library('upload', $config2);
            $this->upload->initialize($config2);
            $this->upload->do_upload('agency_logo');
            $photo2 = $this->upload->data('file_name');

            $certificate = date("dmYHis").$_FILES["certificate"]["name"];

            $image_path = realpath(APPPATH . "../uploads/agent/certificate/");

            $config['file_name']            = $certificate;
            $config['upload_path']          = $image_path;
            $config['allowed_types']        = 'jpg|png|jpeg|pdf|docx';
             
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('certificate');
            $photo3 = $this->upload->data('file_name'); 
            /*if( ! $this->upload->do_upload('photo'))
            {   //echo 'Noo'.$_FILES['image']['name'];
                $data['imgerr'] = $this->upload->display_errors();

              	$userdata = array(
              		"_User_ID" => $uid,
			        '_Club_name'=>$this->input->post('club_name'),
			        '_Stadium_name'=>$this->input->post('stadium_name'),
			        '_Country'=>$this->input->post('country'),
			        '_Senior'=>$this->input->post('senior'),
			        '_Youth'=>$this->input->post('youth'),
			        '_Independent_academy'=>$this->input->post('independent_academy'),
			        '_Address'=>$this->input->post('address'),
			        '_Contruction_date'=> date('Y-m-d',strtotime($this->input->post('contruction_date'))),
			        '_Capacity'=>$this->input->post('capacity'),
			        '_Achievements'=>$this->input->post('achivement'),
			        '_Website'=>$this->input->post('website'),
			        '_Foundation_date'=>$this->input->post('foundation_date'),
			        '_Club_category'=>$this->input->post('club_category'),
			        '_Club_sponsors'=>$this->input->post('club_sponsor'),
			        '_Foundation_date2'=>$this->input->post('foundation_date2'),
			        '_Tier'=>$this->input->post('tier'),
			        '_Club_type'=>$this->input->post('club_type'),
			        '_Created_date'=>date('Y-m-d H:i:s'),
			        '_Updated_time'=>date('Y-m-d H:i:s') 
			    );
            }*/
            //else{

            	//$profile = $this->upload->data('file_name');
            	//$fullpath = $this->upload->data();
				//$this->resize_image($fullpath,141,130);
                             
            	$userdata = array(
            		"_User_ID" => $uid,
			        '_Firstname'=>$this->input->post('firstname'),
			        '_Lastname'=>$this->input->post('lastname'),
			        '_Photo' => $photo1,
			        '_Age'=>date('Y-m-d',strtotime($this->input->post('age'))),
			        '_Totaldeal'=>$this->input->post('total_deal'),
			        '_Education'=>$this->input->post('education'),
			        '_Experience'=>$this->input->post('experience'),
			        '_Spoken_language'=>$this->input->post('spoken_language'),
			        '_Status'=> $this->input->post('status'),
			        '_Agency'=>$this->input->post('agency'),
			        '_Agency_fee'=>$this->input->post('agency_fee'),
			        '_Nameof_private'=>$this->input->post('name_of_private'),
			        '_Agency_logo'=>$photo2,
			        '_Certificate'=>$photo3,
			        '_Info'=>$this->input->post('info'),
			        '_Bankname'=>$this->input->post('bank_name'),
			        '_Iban'=>$this->input->post('iban'),
			        '_Register_no'=>$this->input->post('register_no'),
			        '_Bank_address'=>$this->input->post('bank_add'),
			        '_Created_date'=>date('Y-m-d H:i:s'), 
			        '_Updated_date'=>date('Y-m-d H:i:s') 
			    );
            //}
 
	    	$insert = $this->model->insert('agent_users',$userdata);
		    if($insert){

		    	$this->session->set_userdata(
		    			array("currentuser"=> $uid,'useremail'=>$this->input->post('email'),'usertype'=>'2')
		    	);

		    	$this->session->set_flashdata('user_msg', 'Registration successfully.');
				redirect(base_url('agent-profile'));
		    }
		    else{
		    	$this->session->set_flashdata('user_msg', 'Opps Somthing wrong.');
				redirect(base_url('agent-profile'));
		    }
	    }
		
	}
	public function my_profile()
	{

		if(!$this->session->userdata('currentuser')){
            redirect(base_url('login'));
        } 
		 
  //       $header['navbar'] = 'agent';
		// $header['agentidd'] = $this->uri->segment(2); 
		$cond = array('ss_signup._ID'=>$this->session->userdata("currentuser"));
		$data['agents'] = $this->model->customjoinrow('ss_signup','ss_agents','_ID','_AgentID',$cond);

 		$this->load->view('common/header');
 		$this->load->view('agent-profile',$data);
		$this->load->view('common/footer');
	}
	public function agent_profile($id = '')
	{

		if(!$this->session->userdata('currentuser')){
            redirect(base_url('login'));
        } 
		$header['navbar'] = 'agent';
		$header['agentidd'] = $this->uri->segment(2);   

		$cond = array('ss_signup._ID'=>$id);
		$data['agents'] = $this->model->customjoinrow('ss_signup','ss_agents','_ID','_AgentID',$cond);

 		$this->load->view('common/header',$header);
 		$this->load->view('agent-profile',$data);
		$this->load->view('common/footer');
	}
	public function edit_profile()
	{
		if(!$this->session->userdata('currentuser')){
            redirect(base_url('sign-up'));
        }

        $sess = $this->session->userdata("currentuser");
		//$data['data'] = $this->myprof->fetch_record($sess);
		$cond = array('ss_signup._ID'=>$sess);
		$data['data'] = $this->model->customjoinrow('ss_signup','ss_agents','_ID','_AgentID',$cond);
		//print_r($data['data']); exit;
     	$this->load->view('common/header');
 		$this->load->view('agent-edit',$data);
		$this->load->view('common/footer');

		    /*if($this->form_validation->run() == FALSE)
		    {
	    		//$data['user'] = $this->model->get_singlerow('club_users','_Club_user_id',$this->session->userdata('currentuser'));
	    		
	    		$cond = array('all_users._User_ID'=>$this->session->userdata('currentuser'));
				$data['user'] = $this->model->customjoinrow('all_users','agent_users','_User_ID','_User_ID',$cond);
	    		
	    		$data['userdata'] = $this->model->getAllUserData($this->session->userdata("usertype"));
				$class['users'] = $data['userdata'];
	    		$class['class'] = 'edit_profile_main';
	    		$this->load->view('common/header',$class);
	    		$this->load->view('agent_edit',$data);
	    		$this->load->view('common/footer');
		    }
		    else
		    {

			    if($this->input->post('form1') == ''){
			     
			    	$profile = date("dmYHis").$_FILES["photo"]["name"];

		            $image_path = realpath(APPPATH . "../uploads/club/user_profile/");

		            $config['file_name']            = $profile;
		            $config['upload_path']          = $image_path;
		            $config['allowed_types']        = 'jpg|png|jpeg';
		             
		            $this->load->library('upload', $config);
		            $this->upload->initialize($config); 
		            if( ! $this->upload->do_upload('photo'))
		            {   //echo 'Noo'.$_FILES['image']['name'];
		                $data['imgerr'] = $this->upload->display_errors();
		               
		              	$userdata = array(
					        '_Club_name'=>$this->input->post('club_name'),
					        '_Stadium_name'=>$this->input->post('stadium_name'),
					        '_Updated_time'=>date('Y-m-d H:i:s') 
					    );

		            }
		            else{

		            	$image = $this->upload->data('file_name');
		            	$fullpath = $this->upload->data();
                            $this->resize_image($fullpath,141,130);

		            	$userdata = array(
					        '_Club_name'=>$this->input->post('club_name'),
					        '_Stadium_name'=>$this->input->post('stadium_name'),
					        '_Photo' => $image,
					        '_Updated_time'=>date('Y-m-d H:i:s') 
					    );
	            	}
	            }
	            else{
	            		$userdata = array(
					        '_Country'=>$this->input->post('country'),
					        '_Senior'=>$this->input->post('senior'),
					        '_Youth'=>$this->input->post('youth'),
					        '_Independent_academy'=>$this->input->post('independent_academy'),
					        '_Address'=>$this->input->post('address'),
					        '_Contruction_date'=> date('Y-m-d',strtotime($this->input->post('contruction_date'))),
					        '_Capacity'=>$this->input->post('capacity'),
					        '_Achievements'=>$this->input->post('achivement'),
					        '_Website'=>$this->input->post('website'),
					        '_Foundation_date'=>$this->input->post('foundation_date'),
					        '_Club_category'=>$this->input->post('club_category'),
					        '_Club_sponsors'=>$this->input->post('club_sponsor'),
					        '_Foundation_date2'=>$this->input->post('foundation_date2'),
					        '_Tier'=>$this->input->post('tier'),
					        '_Club_type'=>$this->input->post('club_type'),
					        '_Created_date'=>date('Y-m-d H:i:s'),
					        '_Updated_time'=>date('Y-m-d H:i:s') 
					    );

	            }
	            	$update = $this->model->update('club_users','_Club_user_id',$this->session->userdata('currentuser'),$userdata);
				    if($update){

				    	$this->session->set_flashdata('user_msg', 'Profile updated successfully.');
						redirect(base_url('my-profile'));
				    }
				    else{
				    	$this->session->set_flashdata('user_msg', 'Opps Somthing wrong.');
						redirect(base_url('my-profile'));
				    }
		    }*/
	}
	public function update_agent(){
		if($this->input->post('tab1')){

				$profile = date("dmYHis").$_FILES["profile"]["name"];

	            $image_path = realpath(APPPATH . "../uploads/agent/user_profile/");

	            $config['file_name']            = $profile;
	            $config['upload_path']          = $image_path;
	            $config['allowed_types']        = 'jpg|png|jpeg';
	             
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config); 
	            if($this->upload->do_upload('profile')){
	            	$image = $this->upload->data('file_name');
	            	$fullpath = $this->upload->data();
					 
	            }else{
	            	$image = $this->input->post('oldimg');
	            }

	            $this->model->update('ss_signup','_ID',$this->session->userdata("currentuser"),array("_Firstname" => $this->input->post('fname'), "_Lastname"=>$this->input->post('lname'),"_Email" => $this->input->post('email')));

				$data = array(
					"_Photo" => $image,
				); 

		}
		else if($this->input->post('tab2')){

				$agencylogo = date("dmYHis").$_FILES["agencylogo"]["name"];

	            $image_path = realpath(APPPATH . "../uploads/agent/agency_logo/");

	            $config['file_name']            = $agencylogo;
	            $config['upload_path']          = $image_path;
	            $config['allowed_types']        = 'jpg|png|jpeg';
	             
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config); 
	            if($this->upload->do_upload('agencylogo')){
	            	$alogo = $this->upload->data('file_name');
	            	$fullpath = $this->upload->data();
					 
	            }else{
	            	$alogo = $this->input->post('agencyhidden');
	            }	

	            $certificatelogo = date("dmYHis").$_FILES["certificatelogo"]["name"];

	            $image_path2 = realpath(APPPATH . "../uploads/agent/certificate/");

	            $config2['file_name']            = $certificatelogo;
	            $config2['upload_path']          = $image_path2;
	            $config2['allowed_types']        = 'jpg|png|jpeg';
	             
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config); 
	            if($this->upload->do_upload('certificatelogo')){
	            	$certlogo = $this->upload->data('file_name');
	            	//$fullpath2 = $this->upload->data();
					 
	            }else{
	            	$certlogo = $this->input->post('agencyhidden');
	            }			
			
			$data = array(
				"_Age" => date('Y-m-d', strtotime($this->input->post('age'))),
				"_Totaldeal" => $this->input->post('totaldeal'),
				"_Education" => $this->input->post('education'),
				"_Experience" => $this->input->post('experience'),
				"_Agent_type" => $this->input->post('agenttype'),
				"_Status" => $this->input->post('status'),
				"_Spoken_language" => $this->input->post('spoken_language'),
				"_Agency" => $this->input->post('agency_name'), 
				"_Agency_fee" => $this->input->post('agencyfee'), 
				"_Agency_logo" => $alogo, 
				"_Nameof_private" => $this->input->post('nameofprivate'),
				"_Certificate" => $certlogo,
				"_Certificate_name" => $this->input->post('certificatename'),
				"_Scope" => $this->input->post('scope'),
			    "_Info" => $this->input->post('agentinfo'),
  
				
			);		 				
					 				
		}
		else if($this->input->post('tab3')){
			
			$data = array(
				"_Bankname" => $this->input->post('bankname'),
				"_Iban" => $this->input->post('iban'),
				"_Register_no" => $this->input->post('registerno'),
				"_Bank_address" => $this->input->post('bankadd'),
			);					
		} 
		$query = $this->model->update('ss_agents','_AgentID',$this->session->userdata("currentuser"),$data);

		if($query):
			$this->session->set_flashdata('user_msg', 'Profile updated successfully');
			redirect('/agent-profile/');
		endif;
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
		redirect(base_url('login'));
	}

}
