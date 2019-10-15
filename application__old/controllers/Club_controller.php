<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Club_controller extends CI_Controller {

	public function __construct()
	{
	 
		parent::__construct();
		$this->load->database();
		$this->load->model('my_model','model');
		$this->load->library('form_validation');
		 
	}

	public function index()
	{ 
		if($this->session->userdata('currentuser') != ''){
            redirect(base_url('my-profile'));
        }
		//$this->load->view('common/header');
		$this->load->view('login');
		//$this->load->view('common/footer');
	}
	 
	public function my_profile()
	{ 
		$sess = $this->session->userdata("currentuser");
		if(!$this->session->userdata('currentuser')){
            redirect(base_url('login'));
        }
        //echo $this->session->userdata('currentuser'); 
		$cond = array('ss_signup._ID'=>$this->session->userdata('currentuser'));
		$data['users'] = $this->model->customjoinrow('ss_signup','ss_clubs','_ID','_ClubID',$cond);
		$data['activities'] = $this->model->run_select("SELECT * FROM ss_useractivity  WHERE _UserID='".$sess."' group by DATE(_Created) order by  _Created DESC");
 		//print_r($data['activities']); exit;
 		
 		//$data['userdata'] = $this->model->getAllUserData($this->session->userdata("usertype"));
 		//print_r($data); exit;

 		$this->load->view('common/header');
 		$this->load->view('club-profile',$data);
		$this->load->view('common/footer');
	}

	public function editprofile(){
		$sess = $this->session->userdata("currentuser");
		//$data['data'] = $this->myprof->fetch_record($sess);
		$cond = array('ss_signup._ID'=>$sess);
		$data['data'] = $this->model->customjoinrow('ss_signup','ss_clubs','_ID','_ClubID',$cond);
 	
 		//print_r($data['data']); exit;
		 
		$this->load->view('common/header');
		//$this->load->view('myprofile',$data);
		$this->load->view('club-edit',$data);
		$this->load->view('common/footer');
	}

	public function profileupdate(){  

		if($this->input->post('tab1') != ''){			

				// $url = "../uploads";
				// $image=basename($_FILES['profile_img']['name']);
				// $image=str_replace(' ','|',$image);
				// $type = explode(".",$image);
				// $type = $type[count($type)-1];
				// if (in_array($type,array('jpg','jpeg','png','gif')))
				// {
				// 	$tmppath="uploads/".$image.".".$type;
				// 	if(is_uploaded_file($_FILES["profile_img"]["tmp_name"]))
				// 	{
				// 		move_uploaded_file($_FILES['profile_img']['tmp_name'],$tmppath);
				// 	}
				// }

				$profile = date("dmYHis").$_FILES["profile_img"]["name"];

	            $image_path = realpath(APPPATH . "../uploads/club/user_profile/");

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
	            	$image = $this->input->post('oldimg');
	            }
 
 					//$this->model->update('ss_signup','_ID',$this->session->userdata("currentuser"),array("_Firstname" => $this->input->post('fname'), "_Lastname" => $this->input->post('lname'),"_Email" => $this->input->post('email')));

				$data = array(
					"_Club_name" => $this->input->post('clubname'),
					"_Stadium" => $this->input->post('stadiumname'),
					"_Photo" => $image,
				);
		}

		elseif($this->input->post('tab2')  ){
			$data = array(
				"_Senior" => $this->input->post('senior'),
				"_Reserved" => $this->input->post('reserves'),
				"_Youtheighteen" => $this->input->post('youtheighteen'),
				"_Youthsixteen" => $this->input->post('youthsixteen'),
				"_Address" => $this->input->post('address'),
				"_ContructionDate" =>date('Y-m-d', strtotime($this->input->post('contructiondate'))) ,
				"_Capacity" => $this->input->post('capacity'),
				"_Achievements" => $this->input->post('achievements'),
				"_Website" => $this->input->post('website'),
				"_FoundationDate" => date('Y-m-d', strtotime($this->input->post('foundationdate'))),
				"_Category" => $this->input->post('category'),
				"_Sponsors" => $this->input->post('sponsors'),
				"_RenovationDate" => date('Y-m-d', strtotime($this->input->post('renovationndate'))),
				"_Investment" => $this->input->post('investmentrs'),
				"_ClubType" => $this->input->post('clubtype'),
				"_FarmClub" => $this->input->post('farmclub'),

			);
		}
		$query = $this->model->update('ss_clubs','_ClubID',$this->session->userdata("currentuser"),$data);

		if($query):
			$this->session->set_flashdata('user_msg', 'Profile updated successfully');
			redirect('/club-profile/');
		endif; 
	}
	public function edit_profile()
	{
		if(!$this->session->userdata('currentuser')){
            redirect(base_url('sign-up'));
        }

        	if($this->input->post('form1')== ''){ 
        		$this->form_validation->set_rules('club_name','Club name','required');
        		$this->form_validation->set_rules('stadium_name','Stadium name','required');
			}else{

				$this->form_validation->set_rules('country','Country','required'); 
				$this->form_validation->set_rules('senior','Senior','required'); 
				$this->form_validation->set_rules('contruction_date','Contruction_date','required'); 
			}
	 
		    if($this->form_validation->run() == FALSE)
		    {
	    		//$data['user'] = $this->model->get_singlerow('club_users','_Club_user_id',$this->session->userdata('currentuser'));
	    		
	    		$cond = array('all_users._User_ID'=>$this->session->userdata('currentuser'));
				$data['user'] = $this->model->customjoinrow('all_users','club_users','_User_ID','_User_ID',$cond);
	    		
	    		$class['class'] = 'edit_profile_main';
		 		$data['userdata'] = $this->model->getAllUserData($this->session->userdata("usertype"));
				$class['users'] = $data['userdata'];
	    		$this->load->view('common/header',$class);
	    		$this->load->view('club_edit',$data);
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
	            	$update = $this->model->update('club_users','_User_ID',$this->session->userdata('currentuser'),$userdata);
				    if($update){

				    	$this->session->set_flashdata('user_msg', 'Profile updated successfully.');
						redirect(base_url('my-profile'));
				    }
				    else{
				    	$this->session->set_flashdata('user_msg', 'Opps Somthing wrong.');
						redirect(base_url('my-profile'));
				    }
		    }
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
		redirect(base_url());
	}

}
