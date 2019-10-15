<?php   
defined('BASEPATH') OR exit('No direct script access allowed');
//error_reporting(0);
class User_master extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->helper(array('url','form','text'));
		$this->load->library(array('form_validation','session','upload','form_validation'));
		$this->load->model(array('admin/AdminModel','admin/MainModel'));
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>'); 
		$this->form_validation->set_message('required','%s');
		$this->form_validation->set_message('valid_email','Please enter valid email.');
		$this->form_validation->set_message('is_unique','email is already registered.');
		$this->form_validation->set_message('matches','Password does not match.');
		$this->form_validation->set_message('alpha','Please enter alphabat only.');
		$this->form_validation->set_error_delimiters('<label class="error" for="virtual_name">', '</label>');
	}
	public function index()
	{   
		//print_r($this->session->userdata); exit;
		// if($this->session->userdata['logged_in']['adminid'] == ""){
		// 	redirect(base_url('admin'));
		// }
		//$page['page_name'] = "All Users"; 
		$page['page_name'] = 'Trader Network:All Players';
		 
		$data['players'] = $this->AdminModel->fetchrows('users','isDelete','0');
		$this->load->view('admin/common/header');
		$this->load->view('admin/common/nav',$page);
		$this->load->view('admin/users/players',$data);
		$this->load->view('admin/common/footer');
		 
	} 
	public function add_user()
	{ 	  
		if($this->session->userdata['logged_in']['adminid'] == ""){
			redirect(base_url('admin'));
		}
		$page['page_name'] = 'Trader Network:Add Users';
   		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		//$this->form_validation->set_rules('virtual_name', 'Virtual Name', 'required');
		$this->form_validation->set_rules('dob', 'Date Of Birth', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('skypeid', 'Skypeid', 'required');
		//$this->form_validation->set_rules('expert[]', 'Expert Field', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		// $this->form_validation->set_rules('billing_address', 'Biling Address', 'required');
		$this->form_validation->set_rules('country', 'Country', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		// $this->form_validation->set_rules('billing_country', 'Billing Country', 'required');
		// $this->form_validation->set_rules('billing_city', 'Billing City', 'required');

		// $this->form_validation->set_rules('facebooklink', 'Facebook Link', 'required');
		// $this->form_validation->set_rules('linkedinink', 'Linkedin Link', 'required');
		// $this->form_validation->set_rules('instagramlink', 'Instagram Link', 'required');
		$this->form_validation->set_message('required', "<label class='error'>%s field is required.</label>");
 
		if ($this->form_validation->run() == FALSE) 
		{
			$data['cnt'] = $this->AdminModel->getcountry('trader_countries');
			$data['expertfield'] = $this->AdminModel->getdata('trader_expert_field');
			$this->load->view('admin/common/nav',$page);
			$this->load->view('admin/common/header');
			$this->load->view('admin/user/add_user',$data);
			$this->load->view('admin/common/footer');
			 
		}else {  
		 
                $profile = date("dmYHis").$_FILES["image"]['name'];
                $image_path = realpath(APPPATH . '../upload/profile/');
          
                $config['file_name']            = $profile;
                $config['upload_path']          = $image_path;
                $config['allowed_types']        = 'jpg|png|jpeg';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ( ! $this->upload->do_upload('image'))
                { 
                        $data['imgerr'] = $this->upload->display_errors();
                        //$this->load->view('upload_form', $error);
                        $data['cnt'] = $this->AdminModel->getcountry('trader_countries');
						$this->load->view('admin/common/nav',$page);
						$this->load->view('admin/common/header');
						$this->load->view('admin/user/add_user',$data);
						$this->load->view('admin/common/footer');
                }
                else
                {
                	$image = $this->upload->data('file_name');
                    $fullpath = $this->upload->data();
                    		$this->resize_image($fullpath,158,158);
                            $this->resize_image($fullpath,60,60);
                            $this->resize_image($fullpath,46,46);
                            $this->resize_image($fullpath,47,39);
                            $this->resize_image($fullpath,37,37);
                            $this->resize_image($fullpath,96,96);
                            $this->resize_image($fullpath,70,70);
                            $this->resize_image($fullpath,76,76);
                }

                $newpass = $this->genratepassword();
				$data = array(
					'first_name' => $this->input->post('first_name'),
					'last_name'=> $this->input->post('last_name'),
					'virtual_name' => $this->input->post('virtual_name'),
					'profile_photo'	=> $image,
					'date_of_birth' 	=> date('Y-m-d',strtotime($this->input->post('dob'))),
					'email'	=> $this->input->post('email'),
					'password' => md5($newpass),
					'skype_id'	=> $this->input->post('skypeid'),
					'expert_field'	=> implode(',',$this->input->post('expert')),
					'address_line1'	=> $this->input->post('address'),
					'billing_address_line1'     => $this->input->post('billing_address'),
					'country'=> $this->input->post('country'),
					'city'    => $this->input->post('city'),
					'billing_country'=> $this->input->post('billing_country'),
					'billing_city'    => $this->input->post('billing_city'),
					'fb_link'=> $this->input->post('facebooklink'),
					'linkedin_link'    => $this->input->post('linkedinink'),
					'insta_link'    => $this->input->post('instagramlink'),
					'createdDate'  => date("Y-m-d H:i:s"),
					'updatedDate' => date("Y-m-d H:i:s"),
					'isVerify' => '1',
					'isActive'=> '1',
					'isDelete'=> '0'
				);
			//echo "<pre>"; print_r($data); exit; echo "</pre>";
          	$insert = $this->AdminModel->insertdata("trader_user",$data);
          	//$insert = 1;//$this->AdminModel->insertdata("trader_user",$data);
          	if($insert){
          		$usersubject = "Hi ".$this->input->post('first_name').' '.$this->input->post('last_name').', Welcome to Trader Network.';
          		//$verify_link = md5($insert);
					$maildata['mailed_data'] = array(
					                    "username"=>$this->input->post('first_name').' '.$this->input->post('last_name'),
					                    'email'     => $this->input->post('email'),
					                    'password'  => $newpass,
					                    'logo'    => base_url().'assets/images/trader-logo.png'
					                    //'verify_link'     => $verify_link
					                );
				$newuser = $this->load->view("templates/adminadduser",$maildata,true);
				//echo $newuser; exit;
          		$config = Array(
			                  //'protocol' => 'smtp',
			                  //'smtp_host' => 'ssl://smtp.googlemail.com',
			                  //'smtp_port' => 465,
			                  //'smtp_user' => 'abc@gmail.com', 
			                  //'smtp_pass' => 'passwrd', 
			                  'mailtype' => 'html',
			                  //'charset' => 'iso-8859-1',
			                  'wordwrap' => TRUE
			                );

			        $this->load->library('email', $config);
			        $this->email->set_newline("\r\n");

                    $this->email->from('support@trader-network.com','Trader Network');
			        $this->email->to($this->input->post('email'));
			        $this->email->subject($usersubject);
			        $this->email->message($newuser);
			        $this->email->set_mailtype("html");
			        $this->email->send();
			$this->session->set_flashdata('success','User successfully added.');
			redirect(base_url('admin/users'));
          	}
		}
	}
	public function genratepassword(){

            $length = 10;
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randomString = '';

            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, strlen($characters) - 1)];
            }

            return $randomString;

    }

    public function status($uid,$status,$type)
	{
		if($uid>0 AND $status!='' AND $type!=''){

			if($status == '0'){$s='1'; $msg='User deactivated successfully.';}else{$s='0'; $msg='User activate successfully.';}
			if($type == 'player'){
				$update = $this->AdminModel->updatedata('users','user_id',$uid ,array('status'=>$s));			
			}else if($type == 'agent'){
				$update = $this->AdminModel->updatedata('users','_User_ID',$uid ,array('_Status'=>$s));
			}else{
				$update = $this->AdminModel->updatedata('users','_User_ID',$uid ,array('_Status'=>$s));
			}
			if($update){
				$this->session->set_flashdata('success','user successfully updated.');
				redirect(base_url('admin/players'));
			}
		}
	}
	public function edit_player($uid = "")
	{  
		// if($this->session->userdata['logged_in']['adminid'] == ""){
		// 	redirect(base_url('admin'));
		// }
		//print_r($_POST); exit();
		$page['page_name'] = 'Trader Network:Edit Users';
  		$this->form_validation->set_rules('firstname', 'First Name', 'required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('country', 'Country', 'required');
		$this->form_validation->set_message('required', "<label class='error'>%s field is required.</label>");
		if ($this->form_validation->run() == FALSE) {  

			$data['player'] = $this->AdminModel->get_singlerecord('users',array('user_id'=>$uid));
			 
			$this->load->view('admin/common/nav',$page);
			$this->load->view('admin/common/header');
			$this->load->view('admin/users/edit_player',$data);
			$this->load->view('admin/common/footer');
		}
		else
		{ 
			//$id = $this->input->post('userid');
			$profile = date("dmYHis").$_FILES["profile"]['name'];
            $profile_path = realpath(APPPATH . '../uploads/player/user_profile');

            $config['file_name']            = $profile;
            $config['upload_path']          = $profile_path;
            $config['allowed_types']        = 'jpg|png|jpeg';
			 
			$this->load->library('upload', $config);
			$this->upload->initialize($config);	
            if( ! $this->upload->do_upload('profile'))
            {	 	  
				$image =$this->input->post('hiddenimg');	
			}
                else
                {

                    $image = $this->upload->data('file_name');
                } 		      				       
					$edit_data = array(
						'first_name' => $this->input->post('firstname'),
						'last_name'=> $this->input->post('lastname'),
						'email'	=> $this->input->post('email'),
						'height'=> $this->input->post('height'),
						'weight' => $this->input->post('weight'),
						'user_language'	=> $this->input->post('language'),
						'country' => $this->input->post('country'),
					);   
					$update = $this->AdminModel->updatedata('users','user_id',$uid ,$edit_data);			
					if($update){  
	      				$this->session->set_flashdata('success','user successfully updated.');
						redirect(base_url('admin/players'));
					} 
       }
	}
	
	public function view_player($id){
		if($this->session->userdata['logged_in']['adminid'] == ""){
			redirect(base_url('admin'));
		}
		$page['page_name'] = 'Trader Network:View Users';
		$userdata = $this->AdminModel->get_singlerecord('trader_user',array('user_ID'=>$id));
		$data['viewuser'] = $userdata;
		$data['country'] = $this->AdminModel->get_singlerecord('trader_countries',array('country_ID'=>$userdata->country));
		$data['city'] = $this->AdminModel->get_singlerecord('trader_cities',array('city_ID'=>$userdata->city));

		$data['billingcountry'] = $this->AdminModel->get_singlerecord('trader_countries',array('country_ID'=>$userdata->billing_country));
		$data['billingcity'] = $this->AdminModel->get_singlerecord('trader_cities',array('city_ID'=>$userdata->billing_city));
		  
		$this->load->view('admin/common/nav',$page);
		$this->load->view('admin/common/header');
		$this->load->view('admin/user/view_user',$data);
		$this->load->view('admin/common/footer');
	}
	public function view_agent($id){
		if($this->session->userdata['logged_in']['adminid'] == ""){
			redirect(base_url('admin'));
		}
		$page['page_name'] = 'Trader Network:View Users';
		$userdata = $this->AdminModel->get_singlerecord('trader_user',array('user_ID'=>$id));
		$data['viewuser'] = $userdata;
		$data['country'] = $this->AdminModel->get_singlerecord('trader_countries',array('country_ID'=>$userdata->country));
		$data['city'] = $this->AdminModel->get_singlerecord('trader_cities',array('city_ID'=>$userdata->city));

		$data['billingcountry'] = $this->AdminModel->get_singlerecord('trader_countries',array('country_ID'=>$userdata->billing_country));
		$data['billingcity'] = $this->AdminModel->get_singlerecord('trader_cities',array('city_ID'=>$userdata->billing_city));
		  
		$this->load->view('admin/common/nav',$page);
		$this->load->view('admin/common/header');
		$this->load->view('admin/user/view_user',$data);
		$this->load->view('admin/common/footer');
	}
	public function view_club($id){
		if($this->session->userdata['logged_in']['adminid'] == ""){
			redirect(base_url('admin'));
		}
		$page['page_name'] = 'Trader Network:View Users';
		$userdata = $this->AdminModel->get_singlerecord('trader_user',array('user_ID'=>$id));
		$data['viewuser'] = $userdata;
		$data['country'] = $this->AdminModel->get_singlerecord('trader_countries',array('country_ID'=>$userdata->country));
		$data['city'] = $this->AdminModel->get_singlerecord('trader_cities',array('city_ID'=>$userdata->city));

		$data['billingcountry'] = $this->AdminModel->get_singlerecord('trader_countries',array('country_ID'=>$userdata->billing_country));
		$data['billingcity'] = $this->AdminModel->get_singlerecord('trader_cities',array('city_ID'=>$userdata->billing_city));
		  
		$this->load->view('admin/common/nav',$page);
		$this->load->view('admin/common/header');
		$this->load->view('admin/user/view_user',$data);
		$this->load->view('admin/common/footer');
	}
	public function delete_player($id)
	{  
		// if($this->session->userdata['logged_in']['adminid'] == ""){
		// 	redirect(base_url('admin'));
		// }
		$data['isDelete'] = "1";
		$del = $this->AdminModel->deleterecord('users',array("user_id"=>$id),$data);
		if($del){
			$this->session->set_flashdata('success','User Deleted successfully.');
			redirect(base_url('admin/players'));
		}
	}
	public function delete_agent($id)
	{  
		if($this->session->userdata['logged_in']['adminid'] == ""){
			redirect(base_url('admin'));
		}
		$data['isDelete'] = "1";
		$del = $this->AdminModel->deleterecord('trader_user',array("user_ID"=>$id),$data);
		if($del){
			$this->session->set_flashdata('success','User Deleted successfully...');
			redirect(base_url('admin/users'));
		}
	}
	public function delete_club($id)
	{  
		if($this->session->userdata['logged_in']['adminid'] == ""){
			redirect(base_url('admin'));
		}
		$data['isDelete'] = "1";
		$del = $this->AdminModel->deleterecord('trader_user',array("user_ID"=>$id),$data);
		if($del){
			$this->session->set_flashdata('success','User Deleted successfully...');
			redirect(base_url('admin/users'));
		}
	}
    
}
  