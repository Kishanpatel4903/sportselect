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

		$data['producingagent'] = $this->model->run_selectrow("SELECT * FROM ss_signup as s LEFT JOIN ss_agents as a on s._ID=a._AgentID  WHERE a._AgentID ='".$data['profile']->_AgentName."'  ");
		}else{
			$data['producingagent']='';	
		}
		if( $data['profile']->_PlacingAgent != ''){
			
			$first = explode(', ', $data['profile']->_PlacingAgent);  
			$implod = implode(',', $first);
			  
			$data['placingagent'] = $this->model->run_select("SELECT * FROM ss_signup as s LEFT JOIN ss_agents as a on s._ID=a._AgentID  WHERE a._AgentID IN(".$implod.")");
		}
		else{
			$data['placingagent'] ='';
		}
		  
		
		//echo "<pre>"; print_r($data['activities']); exit;
		$this->load->view('common/header' );
		$this->load->view('playerprofile',$data);
		$this->load->view('common/footer');
	}
	public function player_profile($id = '')
	{  
		$sess = $this->session->userdata("currentuser");
		if(empty($sess)){
			redirect('/login');
		}

		if( isset($_GET['n']) AND $_GET['n']!=''){
			$this->model->update('ss_notifications','_Notification_ID',$_GET['n'],array('_Status'=>'1'));			
		}

		$header['navbar'] = 'player';
		$header['playeridd'] = $this->uri->segment(2);  
		$cond = array('ss_signup._ID'=>$id);
		$data['profile'] = $this->myprof->customjoinrow('ss_signup','ss_players','_ID','_PlayerID',$cond);
		//print_r($data['profile']);  

		$data['activities'] = $this->model->run_select("SELECT * FROM ss_useractivity  WHERE _UserID='".$sess."' group by DATE(_Created) order by  _Created DESC");
 
		//placing producing agents

		if($data['profile']->_AgentName != ''){

		$data['producingagent'] = $this->model->run_selectrow("SELECT * FROM ss_signup as s LEFT JOIN ss_agents as a on s._ID=a._AgentID  WHERE a._AgentID ='".$data['profile']->_AgentName."'  ");
		}else{
			$data['producingagent']='';	
		}
		if( $data['profile']->_PlacingAgent != ''){
			
			$first = explode(', ', $data['profile']->_PlacingAgent);  
			$implod = implode(',', $first);
			  
			$data['placingagent'] = $this->model->run_select("SELECT * FROM ss_signup as s LEFT JOIN ss_agents as a on s._ID=a._AgentID  WHERE a._AgentID IN(".$implod.")");
		}
		else{
			$data['placingagent'] ='';
		}


		/*$data['editmode'] = 'no';
		//$data['refdata'] = $this->myprof->fetch_record($data['profile']->reference);

		//$data['refdata'] = $this->model->get_singlerecord('ss_agents', array('_AgentID'=>$data['profile']->reference));
		$data['agentdetail'] = $this->model->get_singlerecord('ss_agents', array('_AgentID'=>$data['profile']->agentname));
		
		$mcond = array('_Player_ID'=>$id,'_Is_Deleted'=>'0');
		$data['mandate_check'] = $this->model->get_singlerecord('mandate',$mcond);

		if(!empty($data['mandate_check'])){

			$data['mandate_histry_agent'] = $this->model->run_selectrow('SELECT * FROM mandate_histry WHERE _Mandate_ID = "'.$data['mandate_check']->_Mandate_ID.'" AND _Agent_ID = "'.$sess.'" AND _Updated_by="0" order by _Histry_ID DESC');
		} 

		$data['rejected'] = $this->model->run_select('SELECT * FROM mandate WHERE _Is_Deleted = "1" AND _Status="2" AND _Agent_ID = "'.$sess.'"  order by _Mandate_ID DESC');
		$data['accepted'] = $this->model->run_select('SELECT * FROM mandate WHERE _Is_Deleted = "1" AND _Status="1" AND _Agent_ID = "'.$sess.'"  order by _Mandate_ID DESC');
		$data['userdata'] = $this->model->getAllUserData();*/

		// $class['users'] = $data['userdata'];
		// $data['playerid'] = $this->uri->segment(2);
		// $class['class'] = 'player_profile_main';
		$this->load->view('common/header',$header);
		$this->load->view('playerprofile',$data);
		$this->load->view('common/footer');
	}
 
	public function player_mandate($pid = ''){

		$sess = $this->session->userdata("currentuser");
		if($sess == ''){
			redirect(base_url('login'));
		}
		$currentuser = $this->session->userdata("usertype");
		
		if( isset($_GET['n']) AND $_GET['n']!=''){
			$this->model->update('ss_notifications','_Notification_ID',$_GET['n'],array('_Status'=>'1'));
			$data['scroll'] = 'true';				
		}else{
			$data['scroll'] = 'false';				
		}
		
		$mcond = array('_Player_ID'=>$sess,'_Is_Deleted'=>'0');
		$agentids = $this->model->run_selectrow('SELECT GROUP_CONCAT(_Agent_ID) as agentids FROM ss_mandate WHERE _Player_ID="'.$sess.'" AND _Is_Deleted="0"  ');
 
		if($agentids->agentids != ''){

			$data['ismaindate'] = $this->model->run_select('SELECT * FROM ss_signup as s LEFT JOIN ss_agents as a on s._ID = a._AgentID WHERE s._ID IN('.$agentids->agentids.') ');	
		}	

		//echo "<pre>"; print_r($data['ismaindate']); exit;
		$header=array();
		if($pid == ''){
			
			$cond = array('ss_players._PlayerID'=>$sess);
			$data['userdetails'] = $this->model->customjoinrow('ss_signup','ss_players','_ID','_PlayerID',$cond);	

			 if($data['userdetails']->_AgentName == ''){
					echo ("<script LANGUAGE='JavaScript'>
				    	window.alert('Please complete your profile first.');
				    	window.location.href='".base_url('myprofile/editprofile')."';
				    	</script>");
				}

			$mcond = array('_Player_ID'=>$sess,'_Is_Deleted'=>'0');
			$data['mandate_check'] = $this->model->get_singlerecord('ss_mandate',$mcond);
			$data['multiple_mandate'] = $this->model->get_allrecord ('ss_mandate',$mcond);
		    //echo "<pre>"; print_r($data['multiple_mandate']); exit;
			
			$data['countries'] = $this->model->get_allrecord('ss_country',array('1'=>'1'));
			 
			if(!empty($data['mandate_check'])){

				$data['mandate_histry'] = $this->model->run_selectrow('SELECT * FROM ss_mandate_histry WHERE _Mandate_ID = "'.$data['mandate_check']->_Mandate_ID.'" AND _Player_ID = "'.$sess.'" AND _Updated_by="1"  order by _Histry_ID DESC');
			} 
			//print_r($data['mandate_histry']); exit;
			$data['rejected'] = $this->model->run_select('SELECT * FROM ss_mandate as m LEFT JOIN users as u on u.user_id=m._Player_ID LEFT JOIN agent_users as au on au._User_ID = m._Agent_ID LEFT JOIN notifications as n on n._Mandate_ID=m._Mandate_ID AND n._Type="5"   WHERE m._Is_Deleted = "1" AND m._Status="2" AND m._Player_ID = "'.$sess.'"  order by m._Mandate_ID DESC');
			
			$data['accepted'] = $this->model->run_select('SELECT *,(select _Firstname from agent_users where _User_ID=u.agentname) as agent FROM ss_mandate as m LEFT JOIN users as u on u.user_id=m._Player_ID LEFT JOIN agent_users as au on au._User_ID = m._Agent_ID  WHERE m._Is_Deleted = "1" AND m._Status="1" AND m._Player_ID = "'.$sess.'"  order by m._Mandate_ID DESC');
			$data['editmode'] = 'yes';
		}
		else{
			 //echo $this->uri->segment(2); exit;
			
			// $head['playerid'] = $pid;

			if($currentuser == '1'){
		    	$mcond = array('_Agent_ID'=>$pid,'_Player_ID'=>$sess,'_Is_Deleted'=>'0');
			}else{
				$mcond = array('_Player_ID'=>$pid,'_Agent_ID'=>$sess,'_Is_Deleted'=>'0');
			}
		    $data['mandate_check'] = $this->model->get_singlerecord('ss_mandate',$mcond);
		    if(!empty($data['mandate_check'])){

				$data['mandate_histry'] = $this->model->run_selectrow('SELECT * FROM ss_mandate_histry WHERE _Mandate_ID = "'.$data['mandate_check']->_Mandate_ID.'"  AND _Updated_by="1"  order by _Histry_ID DESC');
			}
		    //print_r($data['mandate_check']); exit;
			$data['countries'] = $this->model->get_allrecord ('ss_country',array('1'=>'1'));	
			$data['playerid'] = $pid;//$this->uri->segment(2);
			$header['navbar'] = 'player';
			$header['playeridd'] = $pid;//$this->uri->segment(2);
		}
		$this->load->view('common/header',$header);
		$this->load->view('player-mandate',$data);
		$this->load->view('common/footer');	
	}
	public function agent_mandate($player = ""){  

		//if($player == ''){
			$sess = $this->session->userdata("currentuser");
		// }else{
		// 	$sess = $player;
		// }
		
		if($sess == ''){
			redirect(base_url('login'));
		}
  		
  		if( isset($_GET['n']) AND $_GET['n']!=''){
			$this->model->update('ss_notifications','_Notification_ID',$_GET['n'],array('_Status'=>'1'));
			$data['scroll'] = 'true';				
		}else{
			$data['scroll'] = 'false';				
		}
		$data['countries'] = $this->model->get_allrecord ('ss_country',array('1'=>'1'));
		if($player !=''){
			$mcond = array('_Agent_ID'=>$sess,'_Is_Deleted'=>'0','_Player_ID'=>$player);
		} else{
			$mcond = array('_Agent_ID'=>$sess,'_Is_Deleted'=>'0');
		}
		$data['mandate_check'] = $this->model->get_singlerecord('ss_mandate',$mcond);
 
		if(!empty($data['mandate_check'])){

			$data['mandate_histry_agent'] = $this->model->run_selectrow('SELECT * FROM ss_mandate_histry WHERE _Mandate_ID = "'.$data['mandate_check']->_Mandate_ID.'" AND _Agent_ID = "'.$sess.'" AND _Updated_by="0" order by _Histry_ID DESC');
		} 
		//print_r($data['mandate_histry_agent']); exit;
		$data['rejected'] = $this->model->run_select('SELECT * FROM ss_mandate as m LEFT JOIN users as u on u.user_id=m._Player_ID LEFT JOIN agent_users as au on au._User_ID = m._Agent_ID LEFT JOIN notifications as n on n._Mandate_ID=m._Mandate_ID AND n._Type="5"   WHERE m._Is_Deleted = "1" AND m._Status="2" AND m._Player_ID = "'.$sess.'"  order by m._Mandate_ID DESC');
		
		$data['accepted'] = $this->model->run_select('SELECT *,(select _Firstname from agent_users where _User_ID=u.agentname) as agent FROM ss_mandate as m LEFT JOIN users as u on u.user_id=m._Player_ID LEFT JOIN agent_users as au on au._User_ID = m._Agent_ID  WHERE m._Is_Deleted = "1" AND m._Status="1" AND m._Player_ID = "'.$sess.'"  order by m._Mandate_ID DESC');

		$data['myplayers'] = $this->model->run_select('SELECT * FROM ss_players as p LEFT JOIN ss_signup as s ON p._PlayerID=s._ID WHERE s._IsActive="1" AND s._IsDelete="0" ');

		$myplayer = array();
		foreach ($data['myplayers'] as $key => $value) {
			// $paarr=explode(',', $value->_PlacingAgent);
			// if(in_array($sess, $paarr)){
			// 	$myplayer[]=$value->_PlayerID;
			// }else{
			// 	$myplayer=array();
			// }
			if($value->_AgentName == $sess){
				
			    array_push($myplayer, $value->_PlayerID);
			} 
		}
		$otherplayer = $this->model->get_allrecord('ss_mandate',array('_Agent_ID'=>$sess,'_Is_Deleted'=>'0'));
			foreach ($otherplayer as $op) {
				$playerarr[] = $op->_Player_ID;
			}  

	 	$mergeplayers = isset($playerarr)?array_unique(array_merge($playerarr,$myplayer)):$myplayer;
		if($mergeplayers){
			$data['myplayers'] = $this->model->run_select('SELECT * FROM ss_signup as s LEFT JOIN ss_players as p ON s._ID=p._PlayerID WHERE s._ID IN('.implode(',', $mergeplayers).') ');				
		}else{

			$data['myplayers'] =array();
		}
	    //echo "<pre>";	print_r($data['myplayers']); exit;
		$data['editmode'] = 'yes';
		$this->load->view('common/header');
		$this->load->view('agent-mandate',$data);
		$this->load->view('common/footer');	
	}
	public function agent_mandate2($player = ""){  
 
		$sess = $player;
  		
		if($sess == ''){
			redirect(base_url('login'));
		}
  		
  		if( isset($_GET['n']) AND $_GET['n']!=''){
			$this->model->update('ss_notifications','_Notification_ID',$_GET['n'],array('_Status'=>'1'));	
		} 
		$data['countries'] = $this->model->get_allrecord ('ss_country',array('1'=>'1'));
		
		if($player !=''){
			
			$mcond = array('_Agent_ID'=>$sess,'_Is_Deleted'=>'0','_Player_ID'=>$this->session->userdata("currentuser"));
		} 
		else{
			
			$mcond = array('_Agent_ID'=>$sess,'_Is_Deleted'=>'0');
		}
			$data['mandate_check'] = $this->model->get_singlerecord('ss_mandate',$mcond);
			//print_r($data['mandate_check']); exit;
		if(!empty($data['mandate_check'])){

			$data['mandate_histry_agent'] = $this->model->run_selectrow('SELECT * FROM ss_mandate_histry WHERE _Mandate_ID = "'.$data['mandate_check']->_Mandate_ID.'" AND _Agent_ID = "'.$sess.'" AND _Updated_by="0" order by _Histry_ID DESC');
		} 
		//print_r($data['mandate_histry_agent']); exit;
		$data['rejected'] = $this->model->run_select('SELECT * FROM ss_mandate as m LEFT JOIN users as u on u.user_id=m._Player_ID LEFT JOIN agent_users as au on au._User_ID = m._Agent_ID LEFT JOIN notifications as n on n._Mandate_ID=m._Mandate_ID AND n._Type="5"   WHERE m._Is_Deleted = "1" AND m._Status="2" AND m._Player_ID = "'.$sess.'"  order by m._Mandate_ID DESC');
		
		$data['accepted'] = $this->model->run_select('SELECT *,(select _Firstname from agent_users where _User_ID=u.agentname) as agent FROM ss_mandate as m LEFT JOIN users as u on u.user_id=m._Player_ID LEFT JOIN agent_users as au on au._User_ID = m._Agent_ID  WHERE m._Is_Deleted = "1" AND m._Status="1" AND m._Player_ID = "'.$sess.'"  order by m._Mandate_ID DESC');

		$data['myplayers'] = $this->model->run_select('SELECT * FROM ss_players as p LEFT JOIN ss_signup as s ON p._PlayerID=s._ID WHERE s._IsActive="1" AND s._IsDelete="0" ');

		$myplayer = array();
		foreach ($data['myplayers'] as $key => $value) {
			// $paarr=explode(',', $value->_PlacingAgent);
			// if(in_array($sess, $paarr)){
			// 	$myplayer[]=$value->_PlayerID;
			// }else{
			// 	$myplayer=array();
			// }
			if($value->_AgentName == $sess){
				
			    array_push($myplayer, $value->_PlayerID);
			} 
		}
		//print_r($myplayer); exit;
		if($myplayer){
			$data['myplayers'] = $this->model->run_select('SELECT * FROM ss_signup as s LEFT JOIN ss_players as p ON s._ID=p._PlayerID WHERE s._ID IN('.implode(',', $myplayer).') ');				
		}else{
			$data['myplayers'] =array();
		}

		$data['agentid'] = $player;//$this->uri->segment(2);

		$header['navbar'] = 'agent';
		$header['agentidd'] = $player;
	    //echo "<pre>";	print_r($data['myplayers']); exit;
		$data['hideplayer'] = 'hideselectplayer';
		$this->load->view('common/header',$header);
		$this->load->view('agent-mandate',$data);
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
			$this->model->update('ss_notifications','_Notification_ID',$_GET['n'],array('_Status'=>'1'));
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
			$this->model->update('ss_notifications','_Notification_ID',$_GET['n'],array('_Status'=>'1'));
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
				"_Video" => $this->input->post('video'),
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
				"_AlternatePosition" => implode(', ',$this->input->post('second_position')),
				"_AgentName" => $this->input->post('agentname'),
				"_PlacingAgent" => implode(', ', $this->input->post('placingagent')),
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
				//"_PreferedSide" => $this->input->post('prefer_side'),
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

	
	/*public function player_mandate($id = '')
	{  
		$sess = $this->session->userdata("currentuser");
		if(empty($sess)){
			redirect('/login');
		}
		//$data['profile'] = $this->myprof->fetch_record($sess);
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
	}*/
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
	    		$user = $this->model->get_singlerow('ss_players','_PlayerID', $this->session->userdata('currentuser'));

	    		$player = $user->_PlayerID;
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
	    			$agent = $user->_AgentName;
	    			$creatby = '0';
	    		}
	    		if($this->input->post('playertoagentid')>0){

	    			$agent=$this->input->post('playertoagentid');
	    		}
	    		$noti_toid = $agent;
	    		$redirect = 'player-mandate';

	    		$updateby = '0';

	    		$histryupby = '0';

	    	}elseif($type == '2'){

	    		$player = $this->input->post('selectplayer');
	    		$agent = $userid;
	    		$noti_toid = $player;
	    		$redirect = 'agent-mandate';
	    		$creatby = '1';
	    		$updateby = '1';

	    		$histryupby = '1';
	    	}
	    	//echo $agent.'    type--'.$type; exit;
//print_r($this->input->post('territory')); exit;
	    	$dynmth = $this->input->post('termmandateday')=='1'?'Month':'Day';

	    	//echo "<pre>"; print_r($_POST); exit;
			$mandate = array(
		        '_Player_ID'=>$player,
		        '_Agent_ID'=>$agent,
		        '_Territory_sportclub'=>$this->input->post('territoryorsport'),
		        '_Selectclub'=>$this->input->post('selectclub'),
		        '_Territory'=> $this->input->post('territoryselect')!=""?implode(', ', $this->input->post('territoryselect')):'' ,
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
		    	$insert = $this->model->insert('ss_mandate',$mandate);
		    	$notitype = '0';
		    	$msg = 'form submitted successfully.';
			}
		    else{

		    	$insert = $this->model->update('ss_mandate','_Mandate_ID',$this->input->post('mandate_editid'),$mandate);
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
	            $this->model->insert('ss_notifications',$notidata);

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
  		//$this->form_validation->set_rules('term_athlete', 'term_athlete', 'required');
		// $this->form_validation->set_rules('contract_type','contract_type','required');
		//  echo "<pre>"; print_r($_POST); echo "</pre>";  exit;
	    if($this->form_validation->run() == false)
	    {
	        $this->index();
	    }
	    else
	    { 
	    	$userid = $this->session->userdata("currentuser");
	    	if($this->session->userdata("usertype") == '1'){
	    	
	    	 $hupby = '0'; $red = 'player-mandate';
	    	 $ntoid = $this->input->post('agentid');
	    	}
	    	else{
	    	 $hupby = '1'; $red = 'agent-mandate';
	    	 $ntoid = $this->input->post('playerid');
	    	}
	    	 

		$dynmth = $this->input->post('termmandateday')=='1'?'Month':'Day';

		$checkdata = $this->model->get_singlerecord('ss_mandate',array('_Mandate_ID'=>$this->input->post('mandateid')));
		//echo "<pre>"; print_r($checkdata); echo "</pre>"; exit;
   	    	
   	    	if($this->session->userdata("usertype") == '1'){ 
			
					// if(trim($this->input->post('territoryorsport'))!=trim($checkdata->_Territory_sportclub)){
					// 	$h_Territory_sportclub=trim($this->input->post('territoryorsport'));
					// }else{
					// 	$h_Territory_sportclub='';
					// }
					$terimpl = implode(', ', $this->input->post('territoryselect'));

					if($terimpl != $checkdata->_Territory){
						$h_Territory =  implode(', ', $this->input->post('territoryselect'));
					}else{
						$h_Territory='';
					} //echo $h_Territory; exit;
					if(trim($this->input->post('selectclub'))!=trim($checkdata->_Selectclub)){
						$h_Selectclub=trim($this->input->post('selectclub'));
					}else{
						$h_Selectclub='';
					}
					if($this->input->post('term_athlete').' '.$dynmth!=$checkdata->_Term_athlete){
						$h_term_athlete=$this->input->post('term_athlete').' '.$dynmth;
					}else{
						$h_term_athlete='';
					}
					if(trim($this->input->post('agency_fee'))!=trim($checkdata->_Agency_fee)){
						$h_agency_fee=trim($this->input->post('agency_fee'));
					}else{
						$h_agency_fee='';
					}
					if(trim($this->input->post('extension_fee'))!=trim($checkdata->_Extension_fee)){
						$h_extension_fee=trim($this->input->post('extension_fee'));
					}else{
						$h_extension_fee='';
					}
					if(trim($this->input->post('type'))!=trim($checkdata->_Type)){
						$h_type=trim($this->input->post('type'));
					}else{
						$h_type='';
					}
					if(trim($this->input->post('athlete_termination'))!=trim($checkdata->_Athlete_termination)){
						$h_athlete_termination=trim($this->input->post('athlete_termination'));
					}else{
						$h_athlete_termination='';
					}
					if(trim($this->input->post('additional_terms'))!=trim($checkdata->_Additional_terms)){
						$h_additional_terms=trim($this->input->post('additional_terms'));
					}else{
						$h_additional_terms='';
					}
			}
			else{
				 
				if($this->input->post('histryid') != ''){
					$checkhistry = $this->model->run_selectrow('SELECT * FROM ss_mandate_histry WHERE _Mandate_ID = "'.$this->input->post('mandateid').'" AND _Updated_by="0"  order by _Histry_ID DESC');
				
					//print_r($checkhistry); exit;
					//$hh_sportcheck = $checkhistry->_Territory_sportclub;
					$hh_territory = $checkhistry->_Territory!=''?$checkhistry->_Territory:$checkdata->_Territory;
					$hh_selectclub = $checkhistry->_Selectclub!=''?$checkhistry->_Selectclub:$checkdata->_Selectclub;
					$hh_termathlet = $checkhistry->_Term_athlete!=''?$checkhistry->_Term_athlete:$checkdata->_Term_athlete;
					$hh_agencyfee = $checkhistry->_Agency_fee!=''?$checkhistry->_Agency_fee:$checkdata->_Agency_fee;
					$hh_extensionfee =$checkhistry->_Extension_fee!=''?$checkhistry->_Extension_fee:$checkdata->_Extension_fee;
					$hh_type = $checkhistry->_Type!=''?$checkhistry->_Type:$checkdata->_Type;	
					$hh_athterm = $checkhistry->_Athlete_termination!=''?$checkhistry->_Athlete_termination:$checkdata->_Athlete_termination;
					$hh_addterm = $checkhistry->_Additional_terms!=''?$checkhistry->_Additional_terms:$checkdata->_Additional_terms;				  
				}
				else{
					//$hh_sportcheck = $checkdata->_Territory_sportclub;
					$hh_territory = $checkdata->_Territory;
					$hh_selectclub = $checkdata->_Selectclub;
					$hh_termathlet = $checkdata->_Term_athlete;
					$hh_agencyfee = $checkdata->_Agency_fee;
					$hh_extensionfee =$checkdata->_Extension_fee;
					$hh_type = $checkdata->_Type;
					$hh_athterm = $checkdata->_Athlete_termination;
					$hh_addterm = $checkdata->_Additional_terms;
				}

					$getday = $this->input->post('termmandateday')=='0'?'Day':'Month';
					$termplusdaymonth = $this->input->post('term_athlete').' '.$getday;
					//echo "<br/>".$termplusdaymonth.' - '.trim($hh_termathlet); exit;

					// if(trim($this->input->post('territoryorsport'))!=trim($hh_sportcheck)){
					// 	$h_Territory_sportclub=trim($this->input->post('territoryorsport'));
					// }else{
					// 	$h_Territory_sportclub='';
					// }
					$terimpl = implode(', ', $this->input->post('territoryselect'));
					//echo $terimpl .'   -   '.$hh_territory; exit;
					if($terimpl != $hh_territory){
						$h_Territory =  implode(', ', $this->input->post('territoryselect'));
					}else{
						$h_Territory='';
					} //echo $h_Territory; exit;
					if(trim($this->input->post('selectclub'))!=trim($hh_selectclub)){
						$h_Selectclub=trim($this->input->post('selectclub'));
					}else{
						$h_Selectclub='';
					}
					if($termplusdaymonth!=trim($hh_termathlet)){
						$h_term_athlete=$this->input->post('term_athlete').' '.$getday;
					}else{
						$h_term_athlete='';
					}
					if(trim($this->input->post('agency_fee'))!=trim($hh_agencyfee)){
						$h_agency_fee=trim($this->input->post('agency_fee'));
					}else{
						$h_agency_fee='';
					}
					if(trim($this->input->post('extension_fee'))!=trim($hh_extensionfee)){
						$h_extension_fee=trim($this->input->post('extension_fee'));
					}else{
						$h_extension_fee='';
					}
					if(trim($this->input->post('type'))!=trim($hh_type)){
						$h_type=trim($this->input->post('type'));
					}else{
						$h_type='';
					}
					if(trim($this->input->post('athlete_termination'))!=trim($hh_athterm)){
						$h_athlete_termination=trim($this->input->post('athlete_termination'));
					}else{
						$h_athlete_termination='';
					}
					if(trim($this->input->post('additional_terms'))!=trim($hh_addterm)){
						$h_additional_terms=trim($this->input->post('additional_terms'));
					}else{
						$h_additional_terms='';
					}	

					//echo $h_additional_terms; exit;
			}

			$mandatehistry = array(
		        '_Player_ID'=>$this->input->post('playerid'),
		        '_Agent_ID'=>$this->input->post('agentid'),//$userid,
		        '_Mandate_ID'=> $this->input->post('mandateid'),
		        //'_Territory_sportclub'=> $h_Territory_sportclub,
		        '_Territory'=> $h_Territory, //implode(', ', $this->input->post('territoryselect')),
		        '_Selectclub'=> $h_Selectclub,
		        '_Term_athlete'=>$h_term_athlete,
		        '_Agency_fee'=>$h_agency_fee,
		        '_Extension_fee'=>$h_extension_fee,
		        '_Athlete_termination'=>$h_athlete_termination,
		        '_Type'=>$h_type,
		        '_Additional_terms'=>$h_additional_terms,
		  	//'_Expected_salary'=>$this->input->post('expected_salary'),
		  	//'_Transfer_fee'=>$this->input->post('transfer_fee'),
			//'_Try_outteam'=>$this->input->post('tryout_team'),		
		  	//'_Club_termination'=>$this->input->post('club_termination'),
		        '_Updated_by'=> $hupby,
		        '_Created'=>date('Y-m-d H:i:s'),
		        '_Updated'=>date('Y-m-d H:i:s')
		        
		        // '_Contract_type'=>$this->input->post('contract_type'),
		        // '_Flights'=>$this->input->post('flights'),
		        // '_Accommodation'=>$this->input->post('accommodation'),
		        // '_Try_outteam'=>$this->input->post('try_outteam'),
		        // '_Signon_fee'=>$this->input->post('signon_fee'),
		    );
		
		    $insert = $this->model->insert('ss_mandate_histry',$mandatehistry);

		    if($insert){

		    	$up = $this->model->update('ss_mandate','_Mandate_ID',$this->input->post('mandateid'),array('_Update_by'=>$hupby));
		    		//send notification agent to player for negotiate 
            		$notidata = array(
	                    '_From_ID'=> $userid,
	                    '_To_ID'=> $ntoid,
	                    '_Mandate_ID'=>$this->input->post('mandateid'),
	                    '_Type'=>'1',
	                    "_Created"=>date("Y-m-d h:i:s"),
	                    "_Updated"=>date("Y-m-d h:i:s")
	                );
	            $this->model->insert('ss_notifications',$notidata);

		    	$this->session->set_flashdata('user_msg', 'Negotiate details sent successfully.');
				redirect(base_url($red));
		    }
		    else{
		    	$this->session->set_flashdata('user_msg', 'Opps Somthing wrong.');
				redirect(base_url('agent-mandate'));
		    }

		}

	}
	public function accept_mandate(){
		 //print_r($_POST); exit;
		if($this->input->post('hidden_mandate')!= ''){

			$mandate = $this->model->get_singlerow('ss_mandate','_Mandate_ID', $this->input->post('hidden_mandate'));
			
			if(isset($_POST['acceptbtn'])){
  

				if($this->session->userdata('usertype')== '1'){
					$toid = $mandate->_Agent_ID;
					$histryupby = '0';
				}
				else if($this->session->userdata('usertype')== '2'){
					$toid = $mandate->_Player_ID;
					$histryupby = '1';
				}
				$up = $this->model->update('ss_mandate','_Mandate_ID',$this->input->post('hidden_mandate'),array('_Status'=>'1','_Update_by'=>$histryupby));

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
		            $this->model->insert('ss_notifications',$notidata);
				}

				if($this->input->post('histryid')!= ''){
					$mhistry = $this->model->get_singlerow('ss_mandate_histry','_Histry_ID', $this->input->post('histryid'));		

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

						if($mhistry->_Territory_sportclub != ''){
							$sportclub = $mhistry->_Territory_sportclub;
						}else{
							$sportclub = $mandate->_Territory_sportclub;
						}

						if($mhistry->_Territory != ''){
							$trtry = $mhistry->_Territory;
						}else{
							$trtry = $mandate->_Territory;
						}
						if($mhistry->_Selectclub != ''){
							$slctclub = $mhistry->_Selectclub;
						}else{
							$slctclub = $mandate->_Selectclub;
						}
						if($mhistry->_Type != ''){
							$typee = $mhistry->_Type;
						}else{
							$typee = $mandate->_Type;
						}

						$histryagain = array(
					        // '_Player_ID'=>$this->input->post('playerid'),
					        // '_Agent_ID'=>$this->input->post('agentid'),//$userid,
					        // '_Mandate_ID'=> $this->input->post('mandateid'),
					        '_Term_athlete'=>$trtry,
					        '_Territory_sportclub'=>$sportclub,
					        '_Territory'=>$termath,
					        '_Selectclub'=>$slctclub,
					        '_Term_contract'=>$tcont,
					        '_Expected_salary'=>$esalary,
					        '_Transfer_fee'=>$tfee,
					        '_Agency_fee'=>$afee,
					        '_Extension_fee	'=>$exfee,
					        '_Type'=>$typee,
							'_Try_outteam'=>$tryoutteam,		
					        '_Club_termination'=>$clubt,
					        '_Additional_terms'=>$addt,
					        '_Update_by'=> $histryupby,
					        '_Updated'=>date('Y-m-d H:i:s')
					    );

						$up= $this->model->update('ss_mandate','_Mandate_ID',$this->input->post('hidden_mandate'),$histryagain);
						//if($up){echo "dd"; exit;} else{echo "no"; exit;}
					}

				}

				$clear = $this->model->update('ss_mandate','_Mandate_ID',$mandate->_Mandate_ID,array('_Is_Deleted'=>'1'));
				if($this->session->userdata("usertype") == '1'){
					$this->session->set_flashdata('user_msg', 'Mandate accepted successfully.');
					redirect(base_url('player-mandate'));
				}elseif ($this->session->userdata("usertype") == '2') {
					$this->session->set_flashdata('user_msg', 'Mandate accepted successfully.');
					redirect(base_url('agent-mandate'));
				}else{
					redirect(base_url());
				}
			}
			else{

				$up = $this->model->update('ss_mandate','_Mandate_ID',$this->input->post('hidden_mandate'),array('_Status'=>'2'));

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
		            $this->model->insert('ss_notifications',$notidata);
				}
				$clear = $this->model->update('ss_mandate','_Mandate_ID',$mandate->_Mandate_ID,array('_Is_Deleted'=>'1','_Update_by'=>$rejectby,'_Updated'=>date('Y-m-d h:i:s')));
				if($this->session->userdata("usertype") == '1'){
					$this->session->set_flashdata('user_msg', 'Mandate rejected successfully.');
					redirect(base_url('player-mandate'));
				}elseif ($this->session->userdata("usertype") == '2') {
					$this->session->set_flashdata('user_msg', 'Mandate rejected successfully.');
					redirect(base_url('agent-mandate'));
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
	
	public function player_report($pid = ''){ 

		$this->form_validation->set_rules('reportername', 'Reporter Name', 'required');
		$this->form_validation->set_rules('usertype', 'Reporter Name', 'required');
		//$this->form_validation->set_rules('contract_type','contract_type','required');
 
 		//echo "<pre>"; print_r($mandate); echo "</pre>";  exit;
	    if($this->form_validation->run() == false)
	    {
			$header = array(); 
			if($pid != ''){
				 
			    $header['navbar'] = 'player';
			    $header['playeridd'] = $pid;
			    $data['player'] = $pid;
			}else{
				$pid = $this->session->userdata("currentuser");
			}


	    	$rcond = array('_PlayerID'=>$pid,'_IsDeleted'=>'0');
			$data['preport'] = $this->model->get_allrecord ('ss_playerreports',$rcond);


			 
			$this->load->view('common/header',$header);
			$this->load->view('player-report',$data);
			$this->load->view('common/footer');
	    }
	    else
	    {
	    	$report =array(
	    			'_PlayerID'=>$pid,
		    		'_ReporterName'=>$this->input->post('reportername'),
		    		'_UserType'=>$this->input->post('usertype'),
		    		'_Relation'=>$this->input->post('relation'),
		    		'_InteractionDate'=> date('Y-m-d',strtotime($this->input->post('interactiondate'))),
		    		'_Comments'=>$this->input->post('comment'),
		    	  	'_IsActive'=>'1',
		    	  	'_IsDeleted'=>'0',
			        '_Created'=>date('Y-m-d H:i:s'),
			        '_Updated'=>date('Y-m-d H:i:s')
 	    		);

		      
		    $insert = $this->model->insert('ss_playerreports',$report);
			if($insert){

		    	$this->session->set_flashdata('user_msg', 'Report submitted successfully.');
				
				if($this->session->userdata("usertype") == '2')
					redirect(base_url('player-report/'.$pid));		 
			}
		    else{

		    	$this->session->set_flashdata('user_msg', 'Mandate cleared successfully.');
				redirect(base_url('player-report'));
			}	
	    }
	}
	public function player_characterstics(){ 

		$data['allstarts'] = $this->model->run_selectrow('SELECT * FROM ss_characteristics WHERE _PlayerID = "'.$this->session->userdata("currentuser").'" ');			
		$this->load->view('common/header');
		$this->load->view('player-characterstics',$data);
		$this->load->view('common/footer');
	}
	public function player_financial(){ 
			
		$this->load->view('common/header');
		$this->load->view('player-financial');
		$this->load->view('common/footer');
	}

	public function accepted_rejected(){

		$sess = $this->session->userdata("currentuser");
		if($this->session->userdata('usertype')== '1'){

			$data['rejected'] = $this->model->run_select('SELECT *,m._Created as mandatecreate, n._Created as rejectdate, CONCAT(sup._Firstname ," " ,sup._Lastname) as agentname FROM ss_mandate as m LEFT JOIN ss_players as u on m._Player_ID=u._PlayerID LEFT JOIN ss_agents as au on m._Agent_ID = au._AgentID LEFT JOIN ss_notifications as n on m._Mandate_ID=n._Mandate_ID AND n._Type="5" LEFT JOIN ss_signup as sup on m._Player_ID=sup._ID  WHERE m._Is_Deleted = "1" AND m._Status="2" AND m._Player_ID = "'.$sess.'"  order by m._Mandate_ID DESC');

			$data['accepted'] = $this->model->run_select('SELECT *,m._Created as mandatecreate, n._Created as rejectdate, CONCAT(sup._Firstname ," " ,sup._Lastname) as agentname FROM ss_mandate as m LEFT JOIN ss_players as u on m._Player_ID=u._PlayerID LEFT JOIN ss_agents as au on m._Agent_ID = au._AgentID LEFT JOIN ss_notifications as n on m._Mandate_ID=n._Mandate_ID AND n._Type="4" LEFT JOIN ss_signup as sup on m._Player_ID=sup._ID  WHERE m._Is_Deleted = "1" AND m._Status="1" AND m._Player_ID = "'.$sess.'"  order by m._Mandate_ID DESC');
			//$data['accepted'] = $this->model->run_select('SELECT *,m._Created as mandatecreate, n._Created as rejectdate FROM ss_mandate as m LEFT JOIN ss_players as u on m._Player_ID=u._PlayerID LEFT JOIN ss_agents as au on m._Agent_ID = au._AgentID LEFT JOIN ss_notifications as n on m._Mandate_ID=n._Mandate_ID AND n._Type="4"   WHERE m._Is_Deleted = "1" AND m._Status="1" AND m._Player_ID = "'.$sess.'"  order by m._Mandate_ID DESC');
				
		}
		else if($this->session->userdata('usertype')== '2'){

			$data['rejected'] = $this->model->run_select('SELECT *,m._Created as mandatecreate, n._Created as rejectdate, CONCAT(sup._Firstname ," " ,sup._Lastname) as agentname FROM ss_mandate as m LEFT JOIN ss_players as u on m._Player_ID=u._PlayerID LEFT JOIN ss_agents as au on m._Agent_ID = au._AgentID LEFT JOIN ss_notifications as n on m._Mandate_ID=n._Mandate_ID AND n._Type="5" LEFT JOIN ss_signup as sup on m._Agent_ID=sup._ID  WHERE m._Is_Deleted = "1" AND m._Status="2" AND m._Agent_ID = "'.$sess.'"  order by m._Mandate_ID DESC');
 
			$data['accepted'] = $this->model->run_select('SELECT *,m._Created as mandatecreate, n._Created as rejectdate, CONCAT(sup._Firstname ," " ,sup._Lastname) as agentname FROM ss_mandate as m LEFT JOIN ss_players as u on m._Player_ID=u._PlayerID LEFT JOIN ss_agents as au on m._Agent_ID = au._AgentID LEFT JOIN ss_notifications as n on m._Mandate_ID=n._Mandate_ID AND n._Type="4" LEFT JOIN ss_signup as sup on m._Agent_ID=sup._ID  WHERE m._Is_Deleted = "1" AND m._Status="1" AND m._Agent_ID = "'.$sess.'"  order by m._Mandate_ID DESC');

			//$data['accepted'] = $this->model->run_select('SELECT *,m._Created as mandatecreate, n._Created as rejectdate FROM ss_mandate as m LEFT JOIN ss_players as u on m._Player_ID=u._PlayerID LEFT JOIN ss_agents as au on m._Agent_ID = au._AgentID LEFT JOIN ss_notifications as n on m._Mandate_ID=n._Mandate_ID AND n._Type="4"   WHERE m._Is_Deleted = "1" AND m._Status="1" AND m._Agent_ID = "'.$sess.'"  order by m._Mandate_ID DESC');
		}

		$this->load->view('common/header');
		$this->load->view('player-mandate-history',$data);
		$this->load->view('common/footer');
		 
	}

	public function Characteristics(){ 
	
		// if($this->input->post('confidencehidden') == 'yes'){
			
		// }	
		// elseif($this->input->post('disciplinehidden') == 'yes'){

		// }	
		// elseif($this->input->post('creativityhidden') == 'yes'){
			
		// }
		// elseif($this->input->post('creativityhidden') == 'yes'){
			
		// }
 
			

		// $this->load->view('common/header');
		// $this->load->view('player-characterstics',$data);
		// $this->load->view('common/footer');
	}
}