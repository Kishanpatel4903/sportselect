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
class Myprofile extends CI_Controller {

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
		$this->load->model('myprofile_model','myprof');
		$this->load->model('my_model','model');
		   //India time (GMT+5:30)
 date_default_timezone_set('Asia/Kolkata');
	}

	/**
	 * Index of the create page
	 *
	 * @param  null  Do not have a param
	 * @return null  Do not have a return
	 */
	public function myprofile()
	{
		$sess = $this->session->userdata("currentuser");
		if($sess == ''){
			redirect(base_url('signin'));
		}	
		//$data['profile'] = $this->model->get_singlerecord('ss_players',array('_PlayerID'=>$sess));
		$cond = array('ss_signup._ID'=>$sess);
		$data['profile'] = $this->myprof->customjoinrow('ss_signup','ss_players','_ID','_PlayerID',$cond);
		$data['activities'] = $this->model->run_select("SELECT * FROM ss_useractivity  WHERE _UserID='".$sess."' group by DATE(_Created) order by  _Created DESC");

		
		//placing producing agents

		if($data['profile']->_AgentName != ''){

		$data['producingagent'] = $this->model->run_selectrow("SELECT * FROM ss_signup as s LEFT JOIN ss_agents as a on a._ID=s._ID  WHERE a._ID ='".$data['profile']->_AgentName."'  ");
		}else{
			$data['producingagent']='';	
		}
		if( $data['profile']->_PlacingAgent != ''){		
			$data['placingagent'] = $this->model->run_select("SELECT * FROM ss_signup as s LEFT JOIN ss_agents as a on a._ID=s._ID  WHERE a._ID IN(".$data['profile']->_PlacingAgent.")");
		}
		else{
			$data['placingagent'] ='';
		}
		//header search data
		// $data['userdata'] = $this->model->getAllUserData();
		// $class['users'] = $data['userdata'];

		
    	//echo "<pre>"; print_r($class['notifications']); exit; 

		// foreach ($activities as $date) {
			
		// 	//echo "<h2>".date('Y-m-d',strtotime($date->_Created))."<h2>";
		// 	$alldate = $this->model->get_allrecord("ss_useractivity",array("DATE(_Created)"=>date('Y-m-d',strtotime($date->_Created))));
		// 	foreach ($alldate as $all) {
		// 		//echo "<br/>-".$all->_Created;
		// 	}
		// } exit;
		//echo "<pre>"; print_r($data['activities']); exit;
		$this->load->view('common/header' );
		$this->load->view('playerprofile',$data);
		$this->load->view('common/footer');
	}
	public function mandate(){

		$sess = $this->session->userdata("currentuser");
		if($sess == ''){
			redirect(base_url('login'));
		}
		/*else{

			if($this->session->userdata('usertype') == '2'){
				redirect(base_url('agent-profile'));
			}else if($this->session->userdata('usertype') == '3'){
				redirect(base_url('club-profile'));
			} 
		}*/

		$mcond = array('_Player_ID'=>$sess,'_Is_Deleted'=>'0');
		$data['mandate_check'] = $this->model->get_singlerecord('mandate',$mcond);

		//print_r($data['mandate_check']); exit;
		if(!empty($data['mandate_check'])){

			$data['mandate_histry'] = $this->model->run_selectrow('SELECT * FROM mandate_histry WHERE _Mandate_ID = "'.$data['mandate_check']->_Mandate_ID.'" AND _Player_ID = "'.$sess.'" AND _Updated_by="1"  order by _Histry_ID DESC');
		} 
		$data['rejected'] = $this->model->run_select('SELECT * FROM mandate as m LEFT JOIN users as u on u.user_id=m._Player_ID LEFT JOIN agent_users as au on au._User_ID = m._Agent_ID LEFT JOIN notifications as n on n._Mandate_ID=m._Mandate_ID AND n._Type="5"   WHERE m._Is_Deleted = "1" AND m._Status="2" AND m._Player_ID = "'.$sess.'"  order by m._Mandate_ID DESC');
		
		$data['accepted'] = $this->model->run_select('SELECT *,(select _Firstname from agent_users where _User_ID=u.agentname) as agent FROM mandate as m LEFT JOIN users as u on u.user_id=m._Player_ID LEFT JOIN agent_users as au on au._User_ID = m._Agent_ID  WHERE m._Is_Deleted = "1" AND m._Status="1" AND m._Player_ID = "'.$sess.'"  order by m._Mandate_ID DESC');
		$data['editmode'] = 'yes';
		$this->load->view('common/header');
		$this->load->view('mandate',$data);
		$this->load->view('common/footer');	
	}
	public function index()
	{ 
		$sess = $this->session->userdata("currentuser");
		if($sess == ''){
			redirect(base_url('login'));
		}else{

			if($this->session->userdata('usertype') == '2'){
				redirect(base_url('agent-profile'));
			}else if($this->session->userdata('usertype') == '3'){
				redirect(base_url('my-profile'));
			} 
		}
		if( isset($_GET['n']) AND $_GET['n']!=''){
			$this->model->update('notifications','_Notification_ID',$_GET['n'],array('_Status'=>'1'));
			$data['scroll'] = 'true';				
		}else{
			$data['scroll'] = 'false';				
		}
		$cond = array('all_users._User_ID'=>$sess);
		$data['data'] = $this->myprof->customjoinrow('all_users','users','_User_ID','user_id',$cond);
		
		$mcond = array('_Player_ID'=>$sess,'_Is_Deleted'=>'0');
		$data['mandate_check'] = $this->model->get_singlerecord('mandate',$mcond);

		//print_r($data['mandate_check']); exit;
		if(!empty($data['mandate_check'])){

			$data['mandate_histry'] = $this->model->run_selectrow('SELECT * FROM mandate_histry WHERE _Mandate_ID = "'.$data['mandate_check']->_Mandate_ID.'" AND _Player_ID = "'.$sess.'" AND _Updated_by="1"  order by _Histry_ID DESC');
		} 
		$data['rejected'] = $this->model->run_select('SELECT * FROM mandate as m LEFT JOIN users as u on u.user_id=m._Player_ID LEFT JOIN agent_users as au on au._User_ID = m._Agent_ID LEFT JOIN notifications as n on n._Mandate_ID=m._Mandate_ID AND n._Type="5"   WHERE m._Is_Deleted = "1" AND m._Status="2" AND m._Player_ID = "'.$sess.'"  order by m._Mandate_ID DESC');
		
		$data['accepted'] = $this->model->run_select('SELECT *,(select _Firstname from agent_users where _User_ID=u.agentname) as agent FROM mandate as m LEFT JOIN users as u on u.user_id=m._Player_ID LEFT JOIN agent_users as au on au._User_ID = m._Agent_ID  WHERE m._Is_Deleted = "1" AND m._Status="1" AND m._Player_ID = "'.$sess.'"  order by m._Mandate_ID DESC');
		$data['editmode'] = 'yes';
		 
		//echo "<pre>"; print_r($data['data']); exit;
		$data['refdata'] = $this->model->get_singlerecord('agent_users', array('_User_ID'=>$data['data']->reference));

		$data['agentdetail'] = $this->model->get_singlerecord('agent_users', array('_User_ID'=>$data['data']->agentname));

		//print_r($data['data']); echo "<br/>"; print_r($data['refdata']); echo $sess;  exit;
		$data['userdata'] = $this->model->getAllUserData($this->session->userdata("usertype"));
		$class['users'] = $data['userdata'];
		//print_r($data['userdata']);
		$class['class'] = 'player_profile_main';
		$this->load->view('common/header',$class);
		$this->load->view('myprofile',$data);
		$this->load->view('common/footer');
	}
	public function n()
	{ 
		$sess = $this->session->userdata("currentuser");
		if($sess == ''){
			redirect(base_url('login'));
		}else{

			if($this->session->userdata('usertype') == '2'){
				redirect(base_url('agent-profile'));
			}else if($this->session->userdata('usertype') == '3'){
				redirect(base_url('my-profile'));
			} 
		}
		if( isset($_GET['n']) AND $_GET['n']!=''){
			$this->model->update('notifications','_Notification_ID',$_GET['n'],array('_Status'=>'1'));
			$data['scroll'] = 'true';				
		}else{
			$data['scroll'] = 'false';				
		}
		$cond = array('all_users._User_ID'=>$sess);
		$data['data'] = $this->myprof->customjoinrow('all_users','users','_User_ID','user_id',$cond);
		
		$mcond = array('_Player_ID'=>$sess,'_Is_Deleted'=>'0');
		$data['mandate_check'] = $this->model->get_singlerecord('mandate',$mcond);

		//print_r($data['mandate_check']); exit;
		if(!empty($data['mandate_check'])){

			$data['mandate_histry'] = $this->model->run_selectrow('SELECT * FROM mandate_histry WHERE _Mandate_ID = "'.$data['mandate_check']->_Mandate_ID.'" AND _Player_ID = "'.$sess.'" AND _Updated_by="1"  order by _Histry_ID DESC');
		} 
		$data['rejected'] = $this->model->run_select('SELECT * FROM mandate WHERE _Is_Deleted = "1" AND _Status="2" AND _Player_ID = "'.$sess.'"  order by _Mandate_ID DESC');
		$data['accepted'] = $this->model->run_select('SELECT * FROM mandate WHERE _Is_Deleted = "1" AND _Status="1" AND _Player_ID = "'.$sess.'"  order by _Mandate_ID DESC');
		$data['editmode'] = 'yes';
		 
		//echo "<pre>"; print_r($data['data']); exit;
		$data['refdata'] = $this->model->get_singlerecord('agent_users', array('_User_ID'=>$data['data']->reference));

		$data['agentdetail'] = $this->model->get_singlerecord('agent_users', array('_User_ID'=>$data['data']->agentname));

		//print_r($data['data']); echo "<br/>"; print_r($data['refdata']); echo $sess;  exit;
		$data['userdata'] = $this->model->getAllUserData($this->session->userdata("usertype"));
		$class['users'] = $data['userdata'];
		//print_r($data['userdata']);
		$class['class'] = 'player_profile_main';
		$this->load->view('common/header',$class);
		$this->load->view('myprofile_2-9-19',$data);
		$this->load->view('common/footer');
	}
	
	public function testpdf(){
		$this->load->view('testpdf');
	}

	public function editprofile(){
		$sess = $this->session->userdata("currentuser");
		//$data['data'] = $this->myprof->fetch_record($sess);
		$cond = array('ss_signup._ID'=>$sess);
		$data['data'] = $this->myprof->customjoinrow('ss_signup','ss_players','_ID','_PlayerID',$cond);
		 
		$data['agents'] = $this->model->get_allrecord('ss_signup',array('_Type'=>'2'));
		//$data['agents2'] = $this->model->run_select("select * from ss_agents right JOIN ss_signup ON ss_agents._AgentID = ss_signup._ID WHERE ss_signup._Type='2' ");

		 //echo "<pre>"; print_r($data['agents']);  
		// echo "<pre>"; print_r($data['agents']);

		if($data['data']->_Reference!=''){

			$refuser = $this->model->get_singlerecord('ss_signup',array('_ID'=>$data['data']->_Reference));
			//print_r($refuser); exit;
			if($refuser->_Type == '1'){
				$data['refusername']=$refuser->_Firstname.' '.$refuser->_Lastname.'-(Player)'; 
			}else if($refuser->_Type == '2'){
				//$refuser = $this->model->get_singlerecord('ss_agents',array('_AgentID'=>$data['data']->_Reference));
				$data['refusername']=$refuser->_Firstname.' '.$refuser->_Lastname .'-(Agent)'; 
			}else{
				//$refuser = $this->model->get_singlerecord('ss_clubs',array('_ClubID'=>$data['data']->_Reference));
				$data['refusername']=$refuser->_Clubname .'-(Club)'; 
			}
		}
		else{
			$data['refusername'] ='';	
		}
		$data['userdata'] = $this->model->getAllUserData();
		 
		$this->load->view('common/header');
		//$this->load->view('myprofile',$data);
		$this->load->view('player-edit',$data);
		$this->load->view('common/footer');
	}

	public function userDetails(){
		if(isset($_POST['signup']) && !empty($_POST['signup'])){
			$data = $this->myprof->fetchRecordByName($_POST['name']);
			echo $data->user_id;
		}else{
			$data['data'] = $this->myprof->fetchRecordByName($_POST['name']);
			$data['userdata'] = $this->myprof->getAllUserData();
			$response = $this->load->view('myprofile',$data,TRUE);
	   		echo $response;	
		}
		
	}

	public function username_ajax(){
 
		if(isset($_POST['name'])){

			$data = $this->model->fetchRecordByName($_POST['name']);	
			
			if($data->_Type == '1'){
				$response = json_encode(array('type'=>'player','id'=>$data->_ID));
			}
			else if($data->_Type == '2'){
				$response = json_encode(array('type'=>'agent','id'=>$data->_ID));
			}
			else{
				$response = json_encode(array('type'=>'club','id'=>$data->_ID));
			}

			echo $response;


		}
		//echo $_POST['reference']; exit;
		if(isset($_POST['reference'])){


			$data = $this->model->fetchRecordByName($_POST['reference']);	
			//echo "<pre>"; print_r($data); exit;
			if($data->_Type == '1'){
				$response = $data->_ID;
			}
			else if($data->_Type == '2'){
				$response = $data->_ID;
			}
			else{
				$response = $data->_ID;
			}

			echo $response;


		}
	}
	
	public function printcv($id){
		//$data['record'] = $this->myprof->fetch_record($id);
		$cond = array('ss_signup._ID'=>$id);
		$data['record'] = $this->myprof->customjoinrow('ss_signup','ss_players','_ID','_PlayerID',$cond);
		empty($data['record']) ? redirect(base_url()) : "";
        require_once APPPATH.'third_party/dompdf/autoload.inc.php';
        $dompdf = new Dompdf\Dompdf();
		$html = $this->load->view('print_cv_html',$data,true);
		$dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream("sample.pdf",array('Attachment'=>0));

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
	public function profileupdate(){

		if($this->input->post('tab') == "tab1"){			

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
	            	$image = $this->input->post('oldimg');
	            }
 
 					$this->model->update('ss_signup','_ID',$this->session->userdata("currentuser"),array("_Firstname" => $this->input->post('fname'), "_Lastname" => $this->input->post('lname'),"_Email" => $this->input->post('email')));

				$data = array(
					"_Photo" => $image,
				);
		}
		elseif($this->input->post('tab') == "tab2"){
			$data = array(
				"_Heigth" => $this->input->post('height'),
				"_Weight" => $this->input->post('weight'),
				"_Dob" => $this->input->post('dob'),
				"_Living" => $this->input->post('living'),
				"_User_language" => $this->input->post('user_language'),
				"_SpokenLanguage" => $this->input->post('spoken_language'),
				
				"_FamilyStatus" => $this->input->post('family_status'),
				"_Outfitter" => $this->input->post('outfitter'),
				"_ShoesSize" => $this->input->post('shoesize'),
			);
		}
		
			
		elseif($this->input->post('tab') == "tab3"){
			$data = array(
				"_PreferedSide" => $this->input->post('prefer_side'),
				"_PrimaryPosition" => $this->input->post('first_position'),
				"_AlternatePosition" => implode(',',$this->input->post('second_position')),
				"_AgentName" => $this->input->post('agentname'),
				"_PlacingAgent" => implode(',', $this->input->post('placingagent')),
				"_Salary" => $this->input->post('salary'),
				"_JerseyNumber" => $this->input->post('jersey_number'),
				"_LastContractdate"=>date('Y-m-d',strtotime($this->input->post('contractend'))),
				"_Academy" => $this->input->post('academy'),
				 
				"_Offeraccept" => $this->input->post('offeraccept'),
				"_Ijuries" => $this->input->post('injuries'),
			);
			
			$this->model->update('ss_signup','_ID',$this->session->userdata("currentuser"),array("_StatisticsLink" => $this->input->post('statisticslink')));
		}
		elseif($this->input->post('tab') == "tab4"){
			$data = array(
				"_PreferedSide" => $this->input->post('prefer_side'),
				"_Other" => $this->input->post('other'),
				"_First_availability" => $this->input->post('first_availability'),
				"_Second_availability" => $this->input->post('second_availability'),
				"_Reference" => $this->input->post('referenceid'),
			);
		}
		
		//$query = $this->myprof->profile_update($data);
		$query = $this->model->update('ss_players','_PlayerID',$this->session->userdata("currentuser"),$data);

		if($query):
			$this->session->set_flashdata('user_msg', 'Profile updated successfully');
			redirect('/player-profile/');
		endif;
	}

	public function player_profile($id = '')
	{  
		$sess = $this->session->userdata("currentuser");
		if(empty($sess)){
			redirect('/login');
		}

		if( isset($_GET['n']) AND $_GET['n']!=''){
			$this->model->update('notifications','_Notification_ID',$_GET['n'],array('_Status'=>'1'));			
		 	$data['scroll'] = 'true';				
		}else{
			$data['scroll'] = 'false';				
		}
		//$data['data'] = $this->myprof->fetch_record($sess);
		$cond = array('all_users._User_ID'=>$id);
		$data['data'] = $this->myprof->customjoinrow('all_users','users','_User_ID','user_id',$cond);
		//print_r($data['data']);

		$data['editmode'] = 'no';
		//$data['refdata'] = $this->myprof->fetch_record($data['data']->reference);

		$data['refdata'] = $this->model->get_singlerecord('agent_users', array('_User_ID'=>$data['data']->reference));
		$data['agentdetail'] = $this->model->get_singlerecord('agent_users', array('_User_ID'=>$data['data']->agentname));
		
		$mcond = array('_Player_ID'=>$id,'_Is_Deleted'=>'0');
		$data['mandate_check'] = $this->model->get_singlerecord('mandate',$mcond);

		if(!empty($data['mandate_check'])){

			$data['mandate_histry_agent'] = $this->model->run_selectrow('SELECT * FROM mandate_histry WHERE _Mandate_ID = "'.$data['mandate_check']->_Mandate_ID.'" AND _Agent_ID = "'.$sess.'" AND _Updated_by="0" order by _Histry_ID DESC');
		} 

		$data['rejected'] = $this->model->run_select('SELECT * FROM mandate WHERE _Is_Deleted = "1" AND _Status="2" AND _Agent_ID = "'.$sess.'"  order by _Mandate_ID DESC');
		$data['accepted'] = $this->model->run_select('SELECT * FROM mandate WHERE _Is_Deleted = "1" AND _Status="1" AND _Agent_ID = "'.$sess.'"  order by _Mandate_ID DESC');
		$data['userdata'] = $this->model->getAllUserData();

		$class['users'] = $data['userdata'];
		$data['playerid'] = $this->uri->segment(2);
		$class['class'] = 'player_profile_main';
		$this->load->view('common/header',$class);
		$this->load->view('myprofile',$data);
		$this->load->view('common/footer');
	}
	public function player_mandate($id = '')
	{  
		$sess = $this->session->userdata("currentuser");
		if(empty($sess)){
			redirect('/login');
		}
		//$data['data'] = $this->myprof->fetch_record($sess);
		$cond = array('all_users._User_ID'=>$sess);
		$data['data'] = $this->myprof->customjoinrow('all_users','users','_User_ID','user_id',$cond);
		//print_r($data['data']);

		$data['refdata'] = $this->myprof->fetch_record($data['data']->reference);
		$data['userdata'] = $this->myprof->getAllUserData();
		$data['playerid'] = $this->uri->segment(2);
		$class['class'] = 'player_profile_main';
		$this->load->view('common/header',$class);
		$this->load->view('myprofile',$data);
		$this->load->view('common/footer');
	}
	public function add_mandate()
	{ 
		//print_r($_POST); exit;

		//$this->form_validation->set_rules('territory','territory','required');//|exact_length[10]
    	$this->form_validation->set_rules('term_athlete', 'term_athlete', 'required');
		//$this->form_validation->set_rules('contract_type','contract_type','required');
 
 //echo "<pre>"; print_r($mandate); echo "</pre>";  exit;
	    if($this->form_validation->run() == false)
	    {
	        $this->index();
	    }
	    else
	    {   
	    	$userid = $this->session->userdata("currentuser");
	    	$type = $this->session->userdata("usertype");

	    	if($type == '1'){
	    		$user = $this->model->get_singlerow('users','user_id', $this->session->userdata('currentuser'));

	    		$player = $user->user_id;
	    		if($this->input->post('mandate_editid')!=''){
					
					$exists_mandate = $this->model->get_singlerow('mandate','_Mandate_ID', $this->input->post('mandate_editid'));

					if($exists_mandate->_Status == '2'){

						$histry = $this->model->run_selectrow('SELECT * FROM mandate_histry WHERE _Mandate_ID = "'.$this->input->post('mandate_editid').'" order by _Histry_ID DESC');

						$agent = $histry->_Agent_ID; 
					
					}else{
						
						$agent = $exists_mandate->_Agent_ID;
					}
					$creatby = $exists_mandate->_Createby;

	    		}else{
	    			$agent = $user->agentname;
	    			$creatby = '0';
	    		}
	    		$noti_toid = $agent;
	    		$redirect = 'myprofile';

	    		$updateby = '0';

	    		$histryupby = '0';

	    	}elseif($type == '2'){

	    		$player = $this->input->post('player_id');
	    		$agent = $userid;
	    		$noti_toid = $player;
	    		$redirect = 'agent-profile';
	    		$creatby = '1';
	    		$updateby = '1';

	    		$histryupby = '1';
	    	}
	    	//echo $agent.'    type--'.$type; exit;
//print_r($this->input->post('territory')); exit;
	    	$dynmth = $this->input->post('termmandateday')=='1'?'Month':'Day';
			$mandate = array(
		        '_Player_ID'=>$player,
		        '_Agent_ID'=>$agent,
		        '_Territory_sportclub'=>$this->input->post('territoryorsport'),
		        '_Selectclub'=>$this->input->post('selectclub'),
		        '_Territory'=> $this->input->post('territory')!=""?implode(', ', $this->input->post('territory')):'' ,
		        '_Term_athlete'=>$this->input->post('term_athlete').' '.$dynmth,
		        // '_Contract_type'=>$this->input->post('contract_type'),
		        // '_Term_contract'=>$this->input->post('term_contract'),
		        // '_Expected_salary'=>$this->input->post('expected_salary'),
		        // '_Transfer_fee'=>$this->input->post('transfer_fee'),
		        '_Agency_fee'=>$this->input->post('agency_fee'),
		        '_Extension_fee	'=>$this->input->post('extension_fee'),
		  //       '_Flights'=>$this->input->post('flights'),
		  //       '_Accommodation'=>$this->input->post('accommodation'),
				// '_Try_out'=>$this->input->post('try_out'),		
		  //       '_Try_outteam'=>$this->input->post('try_outteam'),
		  //       '_Signon_fee'=>$this->input->post('signon_fee'),
		        '_Athlete_termination'=>$this->input->post('athlete_termination'),
		        '_Additional_terms'=>$this->input->post('additional_terms'),
		        '_Type'=>$this->input->post('type'),
		        // '_Club_termination'=>$this->input->post('club_termination'),
		        '_Createby'=>$creatby,
		        '_Update_by'=>$updateby,
		        '_Created'=>date('Y-m-d H:i:s'),
		        '_Updated'=>date('Y-m-d H:i:s')
		    );
			
			if($this->input->post('mandate_editid')==''){
		    	$insert = $this->model->insert('mandate',$mandate);
		    	$notitype = '0';
		    	$msg = 'form submitted successfully.';
			}
		    else{

		    	$insert = $this->model->update('mandate','_Mandate_ID',$this->input->post('mandate_editid'),$mandate);
		    	$notitype = '3';
		    	$msg = 'form updated successfully.';


			    	/*$mhistry = array(
				        '_Player_ID'=>$player,
				        '_Agent_ID'=>$agent,
				        '_Mandate_ID'=> $this->input->post('mandateid'),
				        '_Term_athlete'=>$this->input->post('territory'),
				        '_Term_contract'=>$this->input->post('term_contract'),
				        '_Expected_salary'=>$this->input->post('expected_salary'),
				        '_Transfer_fee'=>$this->input->post('transfer_fee'),
				        '_Agency_fee'=>$this->input->post('agency_fee'),
				        '_Extension_fee	'=>$this->input->post('extension_fee'),
						'_Try_out'=>$this->input->post('try_out'),		
				        '_Club_termination'=>$this->input->post('club_termination'),
				        '_Additional_terms'=>$this->input->post('additional_terms'),
				        //'_Created'=>date('Y-m-d H:i:s'),
				        '_Updated_by'=>$histryupby ,
				        '_Updated'=>date('Y-m-d H:i:s')
				    );
			
			    	$this->model->insert('mandate_histry',$mhistry);*/

		    }

		    if($insert){

		    		//send notification to agent
            		$notidata = array(
	                    '_From_ID'=> $userid,
	                    '_To_ID'=> $noti_toid,
	                    '_Mandate_ID'=>$insert,
	                    '_Type'=> $notitype,
	                    "_Created"=>date("Y-m-d H:i:s"),
	                    "_Updated"=>date("Y-m-d H:i:s")
	                );
	            $this->model->insert('notifications',$notidata);

		    	$this->session->set_flashdata('user_msg', $msg );
				redirect(base_url($redirect));
		    }
		    else{
		    	$this->session->set_flashdata('user_msg', 'Opps Somthing wrong.');
				redirect(base_url($redirect));
		    }
		}

	}
	public function add_mandate_histry()
	{  

		$this->form_validation->set_rules('mandateid','mandaie id missing..','required');//|exact_length[10]
  //   	$this->form_validation->set_rules('term_athlete', 'term_athlete', 'required');
		// $this->form_validation->set_rules('contract_type','contract_type','required');
 
 //echo "<pre>"; print_r($mandate); echo "</pre>";  exit;
	    if($this->form_validation->run() == false)
	    {
	        $this->index();
	    }
	    else
	    { 
	    	$userid = $this->session->userdata("currentuser");
	    	if($this->session->userdata("usertype") == '1'){
	    	
	    	 $hupby = '0'; $red = 'myprofile';
	    	 $ntoid = $this->input->post('agentid');
	    	}
	    	else{
	    	 $hupby = '1'; $red = 'agent-profile';
	    	 $ntoid = $this->input->post('playerid');
	    	}
	    	 
	    	 
			$mandatehistry = array(
		        '_Player_ID'=>$this->input->post('playerid'),
		        '_Agent_ID'=>$this->input->post('agentid'),//$userid,
		        '_Mandate_ID'=> $this->input->post('mandateid'),
		        '_Territory'=>$this->input->post('select_territory'),
		        '_Term_athlete'=>$this->input->post('term_of_athlete'),
		        '_Agency_fee'=>$this->input->post('agency_fee'),
		        '_Extension_fee	'=>$this->input->post('contract_fee'),
		        '_Expected_salary'=>$this->input->post('expected_salary'),
		        '_Transfer_fee'=>$this->input->post('transfer_fee'),
				'_Try_outteam'=>$this->input->post('tryout_team'),		
		        '_Club_termination'=>$this->input->post('club_termination'),
		        '_Additional_terms'=>$this->input->post('additional_terms'),
		        '_Updated_by'=> $hupby,
		        '_Created'=>date('Y-m-d H:i:s'),
		        '_Updated'=>date('Y-m-d H:i:s')
		        
		        // '_Contract_type'=>$this->input->post('contract_type'),
		        // '_Flights'=>$this->input->post('flights'),
		        // '_Accommodation'=>$this->input->post('accommodation'),
		        // '_Try_outteam'=>$this->input->post('try_outteam'),
		        // '_Signon_fee'=>$this->input->post('signon_fee'),
		        // '_Athlete_termination'=>$this->input->post('athlete_termination'),
		    );
		
		    $insert = $this->model->insert('mandate_histry',$mandatehistry);

		    if($insert){

		    	$up = $this->model->update('mandate','_Mandate_ID',$this->input->post('mandateid'),array('_Update_by'=>$hupby));
		    		//send notification agent to player for negotiate 
            		$notidata = array(
	                    '_From_ID'=> $userid,
	                    '_To_ID'=> $ntoid,
	                    '_Mandate_ID'=>$this->input->post('mandateid'),
	                    '_Type'=>'1',
	                    "_Created"=>date("Y-m-d h:i:s"),
	                    "_Updated"=>date("Y-m-d h:i:s")
	                );
	            $this->model->insert('notifications',$notidata);

		    	$this->session->set_flashdata('user_msg', 'Negotiate details sent successfully.');
				redirect(base_url($red));
		    }
		    else{
		    	$this->session->set_flashdata('user_msg', 'Opps Somthing wrong.');
				redirect(base_url('agent-profile'));
		    }

		}

	}
	public function accept_mandate(){
		
		if($this->input->post('hidden_mandate')!= ''){

			$mandate = $this->model->get_singlerow('mandate','_Mandate_ID', $this->input->post('hidden_mandate'));
			
			if(isset($_POST['acceptbtn'])){
  
				$up = $this->model->update('mandate','_Mandate_ID',$this->input->post('hidden_mandate'),array('_Status'=>'1'));

				if($this->session->userdata('usertype')== '1'){
					$toid = $mandate->_Agent_ID;
					$histryupby = '0';
				}
				else if($this->session->userdata('usertype')== '2'){
					$toid = $mandate->_Player_ID;
					$histryupby = '1';
				}

			    if($up){
			    		//send notification to player 
	            		$notidata = array(
		                    '_From_ID'=> $this->session->userdata('currentuser'),
		                    '_To_ID'=> $toid,
		                    '_Mandate_ID'=>$mandate->_Mandate_ID,
		                    '_Type'=>'4',
		                    "_Created"=>date("Y-m-d H:i:s"),
		                    "_Updated"=>date("Y-m-d H:i:s")
		                );
		            $this->model->insert('notifications',$notidata);
				}

				if($this->input->post('histryid')!= ''){
					$mhistry = $this->model->get_singlerow('mandate_histry','_Histry_ID', $this->input->post('histryid'));		

					if(!empty($mhistry)){

					 
						if($mhistry->_Term_athlete != ''){
							$termath = $mhistry->_Term_athlete;
						}else{
							$termath = $mandate->_Term_athlete;
						}
						 
						if($mhistry->_Term_contract != ''){
							$tcont = $mhistry->_Term_contract;
						}else{
							$tcont = $mandate->_Term_contract;
						}
						if($mhistry->_Expected_salary != ''){
							$esalary = $mhistry->_Expected_salary;
						}else{
							$esalary = $mandate->_Expected_salary;
						}
						if($mhistry->_Transfer_fee != ''){
							$tfee = $mhistry->_Transfer_fee;
						}else{
							$tfee = $mandate->_Transfer_fee;
						}
						if($mhistry->_Agency_fee != ''){
							$afee = $mhistry->_Agency_fee;
						}else{
							$afee = $mandate->_Agency_fee;
						}
						if($mhistry->_Extension_fee != ''){
							$exfee = $mhistry->_Extension_fee;
						}else{
							$exfee = $mandate->_Extension_fee;
						}
						if($mhistry->_Try_outteam != ''){
							$tryoutteam = $mhistry->_Try_outteam;
						}else{
							$tryoutteam = $mandate->_Try_outteam;
						}
						if($mhistry->_Club_termination != ''){
							$clubt = $mhistry->_Club_termination;
						}else{
							$clubt = $mandate->_Club_termination;
						}
						if($mhistry->_Additional_terms != ''){
							$addt = $mhistry->_Additional_terms;
						}else{
							$addt = $mandate->_Additional_terms;
						}

						$histryagain = array(
					        // '_Player_ID'=>$this->input->post('playerid'),
					        // '_Agent_ID'=>$this->input->post('agentid'),//$userid,
					        // '_Mandate_ID'=> $this->input->post('mandateid'),
					        '_Term_athlete'=>$termath,
					        '_Term_contract'=>$tcont,
					        '_Expected_salary'=>$esalary,
					        '_Transfer_fee'=>$tfee,
					        '_Agency_fee'=>$afee,
					        '_Extension_fee	'=>$exfee,
							'_Try_outteam'=>$tryoutteam,		
					        '_Club_termination'=>$clubt,
					        '_Additional_terms'=>$addt,
					        '_Update_by'=> $histryupby,
					        '_Updated'=>date('Y-m-d H:i:s')
					    );

						$this->model->update('mandate','_Mandate_ID',$this->input->post('hidden_mandate'),$histryagain);
					}

				}

				$clear = $this->model->update('mandate','_Mandate_ID',$mandate->_Mandate_ID,array('_Is_Deleted'=>'1'));
				if($this->session->userdata("usertype") == '1'){
					$this->session->set_flashdata('user_msg', 'Mandate accepted successfully.');
					redirect(base_url('myprofile'));
				}elseif ($this->session->userdata("usertype") == '2') {
					$this->session->set_flashdata('user_msg', 'Mandate accepted successfully.');
					redirect(base_url('agent-profile'));
				}else{
					redirect(base_url());
				}
			}
			else{

				$up = $this->model->update('mandate','_Mandate_ID',$this->input->post('hidden_mandate'),array('_Status'=>'2'));

				if($this->session->userdata('usertype')== '1'){
					$toid = $mandate->_Agent_ID;
					$rejectby = "0";
				}
				else if($this->session->userdata('usertype')== '2'){
					$toid = $mandate->_Player_ID;
					$rejectby = "1";
				}

			    if($up){ 
			    		//send notification to player 
	            		$notidata = array(
		                    '_From_ID'=> $this->session->userdata('currentuser'),
		                    '_To_ID'=> $toid,
		                    '_Mandate_ID'=>$mandate->_Mandate_ID,
		                    '_Type'=>'5',
		                    '_Content'=> $this->input->post('rejectreason'),
		                    "_Created"=>date("Y-m-d H:i:s"),
		                    "_Updated"=>date("Y-m-d H:i:s")
		                );
		            $this->model->insert('notifications',$notidata);
				}
				$clear = $this->model->update('mandate','_Mandate_ID',$mandate->_Mandate_ID,array('_Is_Deleted'=>'1','_Update_by'=>$rejectby,'_Updated'=>date('Y-m-d h:i:s')));
				if($this->session->userdata("usertype") == '1'){
					$this->session->set_flashdata('user_msg', 'Mandate rejected successfully.');
					redirect(base_url('myprofile'));
				}elseif ($this->session->userdata("usertype") == '2') {
					$this->session->set_flashdata('user_msg', 'Mandate rejected successfully.');
					redirect(base_url('agent-profile'));
				}else{
					redirect(base_url());
				}
			}
		}
	}
	public function clear_mandate($mid=''){
		if($mid > 0){
			$up = $this->model->update('mandate','_Mandate_ID',$mid,array('_Is_Deleted'=>'1'));
			if($up){
				$this->session->set_flashdata('user_msg', 'Mandate cleared successfully.');
				redirect(base_url('myprofile'));
			}
		}
	}
}