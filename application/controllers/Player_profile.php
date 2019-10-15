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
class Player_profile extends CI_Controller {

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
		$this->load->model('main_model','model');
	}

	/**
	 * Index of the create page
	 *
	 * @param  null  Do not have a param
	 * @return null  Do not have a return
	 */
	public function index()
	{
		$sess = $this->session->userdata("verified");
		if(empty($sess)){
			redirect('/login');
		}
		// $data['data'] = $this->myprof->fetch_record($sess);
		// $data['refdata'] = $this->myprof->fetch_record($data['data']->reference);
		// $data['userdata'] = $this->myprof->getAllUserData();
		$data['class']='player-profile-main';
		$this->load->view('common/header',$data);
		$this->load->view('player_profile');
		$this->load->view('common/footer');
	}

	public function add_mandate()
	{ 
		//print_r($_POST); exit;

		$this->form_validation->set_rules('territory','territory','required');//|exact_length[10]
    	$this->form_validation->set_rules('term_athlete', 'term_athlete', 'required');
		$this->form_validation->set_rules('contract_type','contract_type','required');
  
	    $mandate = array(
	        '_Player_ID'=>2,
	        '_Agent_ID'=>2,
	        '_Term_athlete'=>$this->input->post('term_athlete'),
	        '_Contract_type'=>$this->input->post('contract_type'),
	        '_Term_contract'=>$this->input->post('term_contract'),
	        '_Expected_salary'=>$this->input->post('expected_salary'),
	        '_Transfer_fee'=>$this->input->post('transfer_fee'),
	        '_Agency_fee'=>$this->input->post('agency_fee'),
	        '_Extension_fee	'=>$this->input->post('extension_fee'),
	        '_Flights'=>$this->input->post('flights'),
	        '_Accommodation'=>$this->input->post('accommodation'),
			'_Try_out'=>$this->input->post('try_out'),		
	        '_Try_outteam'=>$this->input->post('try_outteam'),
	        '_Signon_fee'=>$this->input->post('signon_fee'),
	        '_Athlete_termination'=>$this->input->post('athlete_termination'),
	        '_Club_termination'=>$this->input->post('club_termination'),
	        '_Created'=>date('Y-m-d H:i:s'),
	        '_Updated'=>date('Y-m-d H:i:s')

	    );
 //echo "<pre>"; print_r($mandate); echo "</pre>";  exit;
	    if($this->form_validation->run() == false)
	    {
	        $this->index();
	    }
	    else
	    { 
		    $insert = $this->model->insert('kishan_demo',$mandate);
		    if($insert){

		    	$this->session->set_flashdata('user_msg', 'User added successfully.');
				redirect(base_url('dashboard'));
		    }
		    else{
		    	$this->session->set_flashdata('user_msg', 'Opps Somthing wrong.');
				redirect(base_url('dashboard'));
		    }
		}

	}

	public function editprofile(){
		$sess = $this->session->userdata("verified");
		$data['data'] = $this->myprof->fetch_record($sess);
		$this->load->view('profile_edit',$data);
	}

	public function userDetails(){
		if(isset($_POST['signup']) && !empty($_POST['signup'])){
			$data = $this->myprof->fetchRecordByName($_POST['name']);
			echo $data->id;
		}else{
			$data['data'] = $this->myprof->fetchRecordByName($_POST['name']);
			$data['userdata'] = $this->myprof->getAllUserData();
			$response = $this->load->view('myprofile',$data,TRUE);
	   		echo $response;	
		}
		
	}
	
	public function printcv($id){
		$data['record'] = $this->myprof->fetch_record($id);
		empty($data['record']) ? redirect(base_url()) : "";
        require_once APPPATH.'third_party/dompdf/autoload.inc.php';
        $dompdf = new Dompdf\Dompdf();
		$html = $this->load->view('print_cv_html',$data,true);
		$dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream("sample.pdf",array('Attachment'=>0));

	}

	public function profileupdate(){

		if($this->input->post('tab') == "tab1"){
			if($_FILES){
				$url = "../uploads";
				$image=basename($_FILES['profile_img']['name']);
				$image=str_replace(' ','|',$image);
				$type = explode(".",$image);
				$type = $type[count($type)-1];
				if (in_array($type,array('jpg','jpeg','png','gif')))
				{
					$tmppath="uploads/".$image.".".$type;
					if(is_uploaded_file($_FILES["profile_img"]["tmp_name"]))
					{
						move_uploaded_file($_FILES['profile_img']['tmp_name'],$tmppath);
					}
				}
			}
			else{
				$image = $this->input->post('oldimg');
			}			

			$data = array(
				"email" => $this->input->post('email'),
				"profile_img" => $image,
				"first_name" => $this->input->post('fname'),
				"last_name" => $this->input->post('lname'),
			);
		}
		elseif($this->input->post('tab') == "tab2"){
			$data = array(
				"height" => $this->input->post('height'),
				"weight" => $this->input->post('weight'),
				"date" => $this->input->post('age'),
				"service_location" => $this->input->post('service_location'),
				"user_language" => $this->input->post('user_language'),
				"family_status" => $this->input->post('family_status'),
				"outfitter" => $this->input->post('outfitter'),
				"shoesize" => $this->input->post('shoesize'),
			);
		}
		
			
		elseif($this->input->post('tab') == "tab3"){
			$data = array(
				"prefer_side" => $this->input->post('prefer_side'),
				"first_position" => $this->input->post('first_position'),
				"second_position" => $this->input->post('second_position'),
				"agentname" => $this->input->post('agentname'),
				"salary" => $this->input->post('salary'),
				"jersey_number" => $this->input->post('jersey_number'),
				"academy" => $this->input->post('academy'),
				"statisticslink" => $this->input->post('statisticslink'),
				"offeraccept" => $this->input->post('offeraccept'),
				"injuries" => $this->input->post('injuries'),
			);
		}
		elseif($this->input->post('tab') == "tab4"){
			$data = array(
				"prefer_side" => $this->input->post('prefer_side'),
				"other" => $this->input->post('other'),
			);
		}
		
		$query = $this->myprof->profile_update($data);
		if($query):
			$this->session->set_flashdata('mess', array('message' => 'Your data has been added successfully.','class' => 'alert alert-success'));
			redirect('/myprofile/editprofile');
		endif;
	}
}