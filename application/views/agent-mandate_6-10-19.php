<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 mt-3">
<?php //echo "<pre>"; print_r($accepted); echo "</pre>";
if(!empty($this->session->flashdata('user_msg'))){
?>
   <div class="alert alert-success">
     <strong>Success!</strong> <?php echo $this->session->flashdata('user_msg'); ?>
   </div>
<?php } ?>
 
      <!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Mandate Offer </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Mandate History</a>
        </li>
      </ul> -->
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="mandatetab">
                	
                  <ul class="nav nav-tabs" id="agentandclubmandatetab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="agenttabmandat" data-toggle="tab" href="#clubtab" role="tab" aria-controls="clubtab" aria-selected="true">Agent</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="clubtabmandate" data-toggle="tab" href="#agenttab" role="tab" aria-controls="agenttab" aria-selected="false">Club</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="clubtab" role="tabpanel" aria-labelledby="agenttabmandat">
                      <div class="container-fluid">
                      	<a id="negotiateback" href=""  style="display:none;">Back</a>
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="element-wrapper">
                              <div class="element-box">
                                <?php if(isset($mandate_check) ){ $readonly = 'disabled'; }else{ $readonly = ''; } ?>

                                <form id="mandate_form" method="post" action="<?php echo base_url('Myprofile/add_mandate'); ?>" class="needs-validation">
                                
                                <input type="hidden" name="mandateid" value="<?php echo isset($mandate_check)?$mandate_check->_Mandate_ID:''; ?>">
                                <input type="hidden" name="histryid" value="<?php echo isset($mandate_histry_agent)?$mandate_histry_agent->_Histry_ID:''; ?>" />
		                        <input type="hidden" name="playerid" value="<?php echo isset($mandate_check)?$mandate_check->_Player_ID:''; ?>">
		                        <input type="hidden" name="agentid" value="<?php echo isset($mandate_check)?$mandate_check->_Agent_ID:''; ?>">

                                <input type="hidden" name="player_id" value="<?php echo isset($playerid)?$playerid:''; ?>" />
                                <input type="hidden" name="mandate_editid" value="<?php echo isset($mandate_check)?$mandate_check->_Mandate_ID:''; ?>" />
                                
                                  <div class="row">
                                  	<div class="col-sm-6 col-md-4">
                                  		 <script type="text/javascript">
                                  		 	jQuery(function(){
                                  		 		jQuery("#selectplayer").change(function(){
                                  		 			window.location.href = "<?php echo base_url('agent-mandate/') ?>"+jQuery(this).val();
                                  		 		})
                                  		 	})
                                  		 </script>
                      		 <?php
                      		 //if(isset($mandate_histry_agent) AND $mandate_check->_Status== '0'){
                                 
                                if(isset($mandate_histry_agent) AND $mandate_check->_Status== '0' AND $mandate_histry_agent->_Territory_sportclub!='' ){
									
									$teritorysportclub = '<p class="nagotiationsmessage">Need to negotiation with- '.$mandate_histry_agent->_Territory_sportclub.'</p>';

									$m_teritorysportclub = '<p>Your previous request is - '.$mandate_check->_Territory_sportclub.'</p>';
								
								}
								else{

									$teritorysportclub='';
									$m_teritorysportclub='';
								}
								if(isset($mandate_histry_agent) AND $mandate_check->_Status== '0' AND $mandate_histry_agent->_Territory!='' ){

									$h_trarr=explode(', ', $mandate_histry_agent->_Territory);
									$territory= '<p class="nagotiationsmessage">Need to negotiation with- '.$mandate_histry_agent->_Territory.'</p>';
									$m_territory = '<p class="nagotiationsmessage">Your previous request is - '.$mandate_check->_Territory.'</p>';
								}else{
									$territory='';
									$m_territory='';
								}
								if(isset($mandate_histry_agent) AND $mandate_check->_Status== '0' AND $mandate_histry_agent->_Selectclub!='' ){

									$selectclub= '<p class="nagotiationsmessage">Need to negotiation with- '.$mandate_histry_agent->_Selectclub.'</p>';
									$m_selectclub = '<p class="nagotiationsmessage">Your previous request is - '.$mandate_check->_Territory_sportclub.'</p>';

								}else{
									$selectclub='';
									$m_selectclub ='';
								}
								if(isset($mandate_histry_agent) AND $mandate_check->_Status== '0' AND $mandate_histry_agent->_Term_athlete!='' ){

									$termathlet= '<p class="nagotiationsmessage">Need to negotiation with- '.$mandate_histry_agent->_Term_athlete.'</p>';
									$m_termathlet = '<p class="nagotiationsmessage">Your previous request is - '.$mandate_check->_Term_athlete.'</p>';

								}else{
									$termathlet='';
									$m_termathlet ='';
								}
								if(isset($mandate_histry_agent) AND $mandate_check->_Status== '0' AND $mandate_histry_agent->_Agency_fee!='' ){
									
									$agencyfee= '<p class="nagotiationsmessage">Need to negotiation with- '.$mandate_histry_agent->_Agency_fee.'</p>';
									$m_agencyfee = '<p class="nagotiationsmessage">Your previous request is - '.$mandate_check->_Agency_fee.'</p>';
								}
								else{
									$agencyfee='';
									$m_agencyfee ='';
								}
								if(isset($mandate_histry_agent) AND $mandate_check->_Status== '0' AND $mandate_histry_agent->_Extension_fee!='' ){

									$extensionfee= '<p class="nagotiationsmessage">Need to negotiation with- '.$mandate_histry_agent->_Extension_fee.'</p>';
									$m_extensionfee = '<p class="nagotiationsmessage">Your previous request is - '.$mandate_check->_Extension_fee.'</p>';
								}else{
									$extensionfee='';
									$m_extensionfee ='';
								}
								if(isset($mandate_histry_agent) AND $mandate_check->_Status== '0' AND $mandate_histry_agent->_Type!='' ){
									
									$type='<p class="nagotiationsmessage">Need to negotiation with- '.$mandate_histry_agent->_Type.'</p>';
									$m_type = '<p class="nagotiationsmessage">Your previous request is - '.$mandate_check->_Type.'</p>';

								}else{
									$type='';
									$m_type ='';
								}
								if(isset($mandate_histry_agent) AND $mandate_check->_Status== '0' AND $mandate_histry_agent->_Athlete_termination!='' ){
									
									$athletetermination='<p class="nagotiationsmessage">Need to negotiation with- '.$mandate_histry_agent->_Athlete_termination.'</p>';
									$m_athletetermination = '<p class="nagotiationsmessage">Your previous request is - '.$mandate_check->_Athlete_termination.'</p>';

								}else{
									$athletetermination='';
									$m_athletetermination ='';
								} 

								if(isset($mandate_histry_agent) AND $mandate_check->_Status== '0' AND $mandate_histry_agent->_Additional_terms!='' ){
									
									$additionalterms='<p class="nagotiationsmessage">Need to negotiation with- '.$mandate_histry_agent->_Additional_terms.'</p>';
									$m_additionalterms = '<p class="nagotiationsmessage">Your previous request is - '.$mandate_check->_Additional_terms.'</p>';

								}else{
									$additionalterms='';
									$m_additionalterms = '';
								} 
								?>



	                                    <div class="form-group">
	                                        <label for="">Select Player</label>
	                                        <?php //print_r($myplayers); ?>
	                                        <select id="selectplayer" name="selectplayer" class="custom-select form-control" required  >
	                                        <option value="">Select Player </option>
		                                       <?php 
		                                       	if($myplayers){
		                                       		foreach ($myplayers as $player) {
		                                       		?>
		                                       			<option value="<?php echo $player->_PlayerID;  ?>"
		                                       			<?php if(isset($mandate_check) AND $mandate_check->_Player_ID == $player->_PlayerID)
		                                       				 { 
		                                       				 	echo "SELECTED"; 
		                                       				 }
		                                       				 else if($this->uri->segment(2) == $player->_PlayerID)
		                                       				 { echo "SELECTED";
		                                       				 } ?>
		                                       			><?php echo $player->_Firstname.' '.$player->_Lastname; ?></option>
		                                       			<?php
		                                       		}
		                                       	}
		                                        ?>
											</select> 
										</div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Territory or sports clubs</label>  
                                        <select id="territoryorsport" name="territoryorsport" class="custom-select form-control" required <?php echo $readonly; ?>>
                                        <!-- <option value="AF">Worldwide </option> -->
                                        <option value="territory" <?php if(isset($mandate_check) AND $mandate_check->_Territory_sportclub == 'territory' ){ echo "SELECTED"; } ?>>Territory </option>
                                         <option value="club" <?php if(isset($mandate_check) AND $mandate_check->_Territory_sportclub == 'club' ){ echo "SELECTED"; } ?>>Club/clubs </option>
                                          <option value="Worldwide" <?php if(isset($mandate_check) AND $mandate_check->_Territory_sportclub == 'Worldwide' ){ echo "SELECTED"; } ?>>Worldwide </option>
                                                     </select>
										<?php echo $teritorysportclub; ?>                                                                      
                                      </div>
                                    </div>

                                        <?php  
                                        if(isset($mandate_check) AND $mandate_check->_Territory_sportclub=='territory')
                                    			{  $tarr = explode(', ', $mandate_check->_Territory);  }else{  $tarr=array(); }
                                    	   	if(isset($mandate_check) AND $mandate_check->_Territory_sportclub!='territory'){$d='display:none'; }else{$d='';}
                                    	 ?>
                                    <div class="col-sm-6 col-md-4 selectterritorydiv" style="<?php echo $d; ?>" >
                                      <div class="form-group ">
                                        <label for="">Select Territory</label> 
                                        <select name="territoryselect[]" class="form-control select2" multiple="true" <?php echo $readonly; ?>>
                                        	<option value="">Select</option>
                                        	<?php
                                        	if($countries){  
                                        		foreach ($countries as $country) { 
                                        			 ?>
                                        			<option <?php 

                                        				if(!empty($territory)){

	                                        				if(in_array($country->countryname, $h_trarr) )
	                                        			    {
	                                        			    	echo "SELECTED";
	                                        			    } 
	                                        			}
	                                        			else{

	                                        				if(in_array($country->countryname, $tarr) )
	                                        			    {
	                                        			    	echo "SELECTED";
	                                        			    } 
	                                        			}
                                        			 ?> value="<?php echo $country->countryname; ?>"><?php echo $country->countryname; ?></option>
                                        		<?php
                                        		}
                                        	}  ?> 
                                        </select>
                                        <?php echo  $territory; ?>
                                      </div>
                                    </div>
                                    <?php 
                                          if(isset($mandate_check) AND $mandate_check->_Territory_sportclub=='club' )
                                    	 	{   $dn=''; }else{ $dn='display:none;'; }
                                    	  if(isset($mandate_check) AND $mandate_check->_Territory_sportclub=='Worldwide'){$dn='display:none;'; }  
 
                                    ?>
                                    <div class="col-sm-6 col-md-4 selectclubdiv"  style="<?php echo $dn; ?>" >
                                      <div class="form-group ">
                                        <label for="">Select clubs</label>
                                        <?php
                                        if(isset($mandate_check)){ 
	                                        if(!empty($selectclub)){
	                                        	$checksportclub = $mandate_histry_agent->_Selectclub;
	                                        }else{
	                                        	$checksportclub = $mandate_check->_Selectclub;
	                                        } 
                                    	}else{
                                    		$checksportclub ='';
                                    	}
                                         ?>
                                        <select id="selectclub" name="selectclub" class="form-control custom-select form-control" required <?php echo $readonly; ?>>
                                            <option value="">Select </option>
                                            <option value="Manchester United" <?php if( $checksportclub == 'Manchester United'){echo "SELECTED"; } ?>>Manchester United </option>
                                            <option value="Arsenal" <?php if($checksportclub == 'Arsenal'){echo "SELECTED"; } ?>>Arsenal </option>
                                            <option value="Chelsea"<?php if($checksportclub == 'Chelsea'){echo "SELECTED"; } ?>>Chelsea </option>
                                            <option value="Liverpool"<?php if($checksportclub == 'Liverpool'){echo "SELECTED"; } ?>>Liverpool </option>
                                            <option value="Olympique Lyonnais" <?php if($checksportclub == 'Olympique Lyonnais'){echo "SELECTED"; } ?>>Olympique Lyonnais </option>
                                            <option value="Olympique de Marseille" <?php if($checksportclub == 'Olympique de Marseille'){echo "SELECTED"; } ?>>Olympique de Marseille </option>
                                            <option value="AS Monaco" <?php if($checksportclub == 'AS Monaco'){echo "SELECTED"; } ?>>AS Monaco </option>
                                            <option value="Paris Saint-Germain" <?php if($checksportclub == 'Paris Saint-Germain'){echo "SELECTED"; } ?>>Paris Saint-Germain </option>
                                          </select>
                                        <?php echo $selectclub;	?>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Term of Mandate</label>
                                        <div class="input-group">
			                            <?php
			                            if(isset($mandate_check)){ $atharr=explode(' ',  $mandate_check->_Term_athlete); }else{$atharr=array();  }
			                            if(isset($mandate_histry_agent) AND $mandate_check->_Status== '0' AND $mandate_histry_agent->_Term_athlete!='' )
		                             	{
		                             		$h_atharr=explode(' ',  $mandate_histry_agent->_Term_athlete);  
		                             	}
			                             ?>
                                        <select id="term_athlete" class="custom-select form-control" required=""  name="term_athlete" <?php echo $readonly; ?> />
										<?php
			                                      for($i=1;  $i<30;  $i++) {

			                                      	if(isset($mandate_check)){ 		
				                                      	if(!empty($termathlet)){
				                                      		$checkday = $h_atharr[1];
				                                     		if($h_atharr[0] == $i){
					                                            $selectm = "SELECTED";
					                                        }else{
					                                           $selectm = "";
					                                        }  		
				                                      	
				                                      	}
				                                      	else{

				                                      		$checkday = $atharr[1];
					                                        if($atharr[0] == $i){
					                                             $selectm = "SELECTED";
					                                        }else{
					                                           $selectm = "";
					                                        }
				                                      	}
			                                    	}else{
			                                    		$selectm='';
			                                    		$checkday='';
			                                    	}
			                                        
			                                        ?><option value="<?php echo $i; ?>" <?php echo $selectm; ?>><?php echo $i; ?></option><?php
			                                      }
		                                    ?>
									   </select>
									   <span class="input-group-addon currency-addon dropdowon-box">
									 <?php   ?>
											<select id="termmandateday" name="termmandateday" class="custom-select form-control" <?php echo $readonly; ?>> 
											<option value="0" <?php if(isset($mandate_check) AND $checkday=='Day'){echo "SELECTED"; } ?>>Day</option>
											<option value="1" <?php if(isset($mandate_check) AND $checkday=='Month'){echo "SELECTED"; } ?>>Month</option>
										   </select>
										</span>
                                          </div>
                                          <?php echo $termathlet; ?>
                                        </div>
                                      </div>
                                      
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Agency Fee</label>
                                        <div class="input-group">
                                        	<?php
                                        	if(isset($mandate_check)){ 
	                                        	if(!empty($agencyfee)){
	                                        		$agencyfeecheck = $mandate_histry_agent->_Agency_fee;
		                                      	}
		                                      	else
		                                      	{
		                                      		$agencyfeecheck = $mandate_check->_Agency_fee;
		                                      	}
		                                      }else{
		                                      		$agencyfeecheck='';
		                                      }
                                        	?>
                                          <select id="Agency_fee" name="agency_fee" class="custom-select form-control" required <?php echo $readonly; ?>>
											<?php
	                                          for($i=0;  $i<25;  $i++) {
	                                            if( $agencyfeecheck == $i){
	                                                     $select = "SELECTED";
	                                            }else{
	                                               $select = "";
	                                            }
	                                            
	                                            ?><option value="<?php echo $i; ?>" <?php echo $select; ?>><?php echo $i; ?></option><?php
	                                          }
	                                        ?>
														   </select>
                                          <div class="input-group-prepend input-group-prepend-right">
                                            <div class="input-group-text">%</div>
                                          </div>
                                          <!-- <input  placeholder="Twitter Username" type="text"> -->

                                        </div>
                                          <?php echo $agencyfee; ?>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Extension Fee</label>
                                        <div class="input-group">
                                        	<?php
                                        	if(isset($mandate_check)){ 
	                                        	if(!empty($extensionfee)){
	                                        		$extensionfeecheck = $mandate_histry_agent->_Extension_fee;
		                                      	}
		                                      	else
		                                      	{
		                                      		$extensionfeecheck = $mandate_check->_Extension_fee;
		                                      	}
		                                    }else{
		                                    	$extensionfeecheck='';
		                                    }
                                        	?>
                                          <select name="extension_fee" id="extension_fee" class="custom-select form-control" required <?php echo $readonly; ?>>
											<?php
	                                          for($i=0;  $i<25;  $i++) {
	                                            if($extensionfeecheck == $i){
	                                                     $selectfee = "SELECTED";
	                                            }else{
	                                               $selectfee = "";
	                                            } 
	                                            ?><option value="<?php echo $i; ?>" <?php echo $selectfee; ?>><?php echo $i; ?></option><?php
	                                          }
	                                        ?>
											</select>
                                          <div class="input-group-prepend input-group-prepend-right">
                                            <div class="input-group-text">%</div>
                                          </div>
                                        </div>
                                        <?php echo $extensionfee; ?>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                      	<?php
                                      	if(isset($mandate_check)){
                                        	if(!empty($type)){
                                        		$typecheck = $mandate_histry_agent->_Type;
	                                      	}
	                                      	else
	                                      	{
	                                      		$typecheck = $mandate_check->_Type;
	                                      	}
	                                    }
	                                    else{
	                                    	$typecheck = '';
	                                    }
                                        	?>
                                        <label for="">Type</label>
                                        <select name="type" class="custom-select form-control" required <?php echo $readonly; ?>>
											  <option value="Revocable" <?php if($typecheck == "Revocable"){ echo "SELECTED"; } ?>>Revocable </option>
											  <option value="Irrevocable" <?php if($typecheck == "Irrevocable"){ echo "SELECTED"; } ?>>Irrevocable</option>
										   </select>
                                        
                                        <?php echo $type; ?>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Athlete Termination</label>
                                         	<?php
                                         	if(isset($mandate_check)){
	                                        	if(!empty($athletetermination)){
	                                        		$athtermcheck = $mandate_histry_agent->_Athlete_termination;
		                                      	}
		                                      	else
		                                      	{
		                                      		$athtermcheck = $mandate_check->_Athlete_termination;
		                                      	}
		                                    }
		                                    else{
		                                    	$athtermcheck='';
		                                    }

                                        	?>
                                          <select name="athlete_termination" class="custom-select form-control" required <?php echo $readonly; ?>>
                                             <option value="Yes" <?php if($athtermcheck == 'Yes' ){ echo "selected"; } ?>>Yes </option>
                                             <option value="No" <?php if($athtermcheck == 'No' ){ echo "selected"; } ?>>No</option>
                                          </select>
                                        <?php echo $athletetermination; ?>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Additional Terms</label>
                                        <?php
                                        if(isset($mandate_check)){
                                        	if(!empty($additionalterms)){
                                        		$additioancheck = $mandate_histry_agent->_Additional_terms;
	                                      	}
	                                      	else
	                                      	{
	                                      		$additioancheck = $mandate_check->_Additional_terms;
	                                      	}
	                                    }
	                                    else{
	                                    	$additioancheck='';
	                                    }
                                        	?>
                                        <input type="text" name="additional_terms" class="form-control" id="" required <?php echo $readonly; ?> value="<?php echo $additioancheck; ?>">
                                        <?php echo $additionalterms; ?>
                                      </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                      <div class="form-buttons-w formmandatbtn">
                                        <?php

                                         $upby = '';
                                         //print_r($mandate_check); 
                                          if(isset($mandate_check) AND $mandate_check->_Update_by=='0' AND $this->session->userdata("usertype") == '1' ){


                                             $upby = 'waitplayer';

                                          }
                                          elseif(isset($mandate_check) AND $mandate_check->_Update_by=='1' AND $this->session->userdata("usertype") == '2')
                                          {

                                                $upby = 'waitagent';
                                          } 
                                         //echo "<h1>".$this->session->userdata("usertype");

                                          ?>
                                       <input type="hidden" name="upby" id="upby" value="<?php echo $upby; ?>">
                                       <?php /*if($editmode == 'yes' AND (isset($mandate_check)?$mandate_check->_Status != '1':$editmode != 'no') AND (isset($mandate_check)?$mandate_check->_Status != '2':$editmode != 'no')){*/
                                       	?>
                                       	<div class="mainsubmitbtn">
                                       	<?php
                                          if(!isset($mandate_check)){
                                             ?>

                                          <input type="submit" name="btn_mandate" class="btn btn-primary submitbtn" value="submit" />
        
                                       <?php } ?>
                                       </div> 
  	</form>
 <!-- ---------------------------------------------start second buttons------------------------------------------------ -->
<div class="mainactionbtn">
                              <?php
                                 if(isset($mandate_check) AND $mandate_check->_Createby == '1' AND $this->session->userdata('usertype') == '1' AND $mandate_check->_Status=='0'){ ?>
                                       <form action="<?php echo base_url() ?>myprofile/accept_mandate" method="post">
                                           <input type="hidden" name="hidden_mandate" value="<?php echo $mandate_check->_Mandate_ID; ?>" />
                                           <input type="hidden" name="histryid" value="<?php echo isset($mandate_histry)?$mandate_histry->_Histry_ID:''; ?>" />
                                             <?php
                                                if($mandate_check->_Update_by=='1'){ ?>
                                                    <?php //if(!isset($mandate_histry)) {
                                                     // if(isset($mandate_histry)) {
                                                      ?>
                                                         <button type="submit" name="acceptbtn" class="attributebtn btn btn-success acceptbtn">Accept </button>
                                                   <?php //} ?>
                                             <?php } ?>
                                                         <button name="rejectbtn" data-id="<?php echo $mandate_check->_Mandate_ID; ?>" class="attributebtn rejectbtncls btn btn-danger rejectbtn">Reject </button>
                                                        <button class="attributebtn negotcls btn btn-info negotiationsbtn" name="negobtn">Negotiations</button>
                                       </form>
                                <?php } ?>

                                <?php
                                 if(isset($mandate_check) AND $mandate_check->_Createby == '0' AND $this->session->userdata('usertype') == '1' AND $mandate_check->_Status=='0'){ ?>
                                       <form action="<?php echo base_url() ?>myprofile/accept_mandate" method="post">
                                           <input type="hidden" name="hidden_mandate" value="<?php echo $mandate_check->_Mandate_ID; ?>" />
                                           <input type="hidden" name="histryid" value="<?php echo isset($mandate_histry)?$mandate_histry->_Histry_ID:''; ?>" />
                                             <?php
                                             if($mandate_check->_Update_by=='1'){ ?>
                                                    <?php //if(!isset($mandate_histry)) {
                                                      //if(isset($mandate_histry)) {
                                                      ?>
                                                         <button type="submit" name="acceptbtn" class="attributebtn btn btn-success acceptbtn">Accept </button>
                                                <?php //} ?>

                                                      <button name="rejectbtn" data-id="<?php echo $mandate_check->_Mandate_ID; ?>" class="attributebtn rejectbtncls btn btn-danger rejectbtn">Reject </button>
                                             <?php } ?>
                                                      <button class="attributebtn negotcls btn btn-info negotiationsbtn" name="negobtn">Negotiations</button>
                                       </form>
                                <?php } ?>

                                <?php if(isset($mandate_check) AND $mandate_check->_Createby == '0' AND $this->session->userdata('usertype') == '2' AND $mandate_check->_Status=='0'){ ?>

                                        <form action="<?php echo base_url() ?>myprofile/accept_mandate" method="post">

                                            <input type="hidden" name="hidden_mandate" value="<?php echo $mandate_check->_Mandate_ID; ?>" />
                                            <input type="hidden" name="histryid" value="<?php echo isset($mandate_histry_agent)?$mandate_histry_agent->_Histry_ID:''; ?>" />

                                            <button type="submit" name="acceptbtn" class="attributebtn btn btn-success acceptbtn">Accept </button>
                                            <button name="rejectbtn" data-id="<?php echo $mandate_check->_Mandate_ID; ?>" class="attributebtn rejectbtncls btn btn-danger rejectbtn">Reject </button>
                                             <button class="attributebtn negotcls btn btn-info negotiationsbtn" name="negobtn">Negotiations</button>
                                        </form>
                                <?php } ?> 

                                <?php //if(isset($mandate_check) AND $mandate_check->_Agent_ID!= $this->session->userdata('currentuser') AND $this->session->userdata('usertype') == '2'){
                                if(isset($mandate_check) AND $this->session->userdata('usertype') == '2' AND $mandate_check->_Createby == '1' AND $mandate_check->_Status=='0'){
                                       
                                       ?>
                                       <form action="<?php echo base_url() ?>myprofile/accept_mandate" method="post">
                                       <?php
                                       if($mandate_check->_Update_by=='0'){
                                       ?>
                                       
                                            <input type="hidden" name="hidden_mandate" value="<?php echo $mandate_check->_Mandate_ID; ?>" />
                                            <input type="hidden" name="histryid" value="<?php echo isset($mandate_histry_agent)?$mandate_histry_agent->_Histry_ID:''; ?>" />

                                            <button type="submit" name="acceptbtn" class="attributebtn btn btn-success acceptbtn">Accept </button>
                                            <button name="rejectbtn" data-id="<?php echo $mandate_check->_Mandate_ID; ?>" class="attributebtn rejectbtncls btn btn-danger rejectbtn">Reject </button>
                                    <?php } ?>
                                             <button class="attributebtn negotcls btn btn-info negotiationsbtn" name="negobtn">Negotiations</button>
                                        </form>
                                 <?php } ?>
                                
                                <?php if(isset($mandate_check) AND $this->session->userdata('usertype') == '1' AND ($mandate_check->_Status=='2' || $mandate_check->_Status=='1')){  ?>
                                         <button id="clear_mandate" data-id="<?php echo $mandate_check->_Mandate_ID; ?>" class="attributebtn">Clear</button> 
                                 <?php } ?>

</div>
<!-- ---------------------------------------------end second buttons------------------------------------------------ -->


                                      </div>
                                    </div>
                                  </div>
                                 
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="agenttab" role="tabpanel" aria-labelledby="clubtabmandate">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="element-wrapper">
                              <div class="element-box">
                                <form>
                                  <div class="row">
                                  	<div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Select clubs</label>
                                        <select id="selectclub" name="selectclub" class="custom-select form-control" required>
                                            <!-- <option value="AF">Worldwide </option> -->
                                            <option value="ManchesterUnited">Manchester United </option>
                                            <option value="Arsenal">Arsenal </option>
                                            <option value="Chelsea">Chelsea </option>
                                            <option value="Liverpool">Liverpool </option>
                                            <option value="OlympiqueLyonnais">Olympique Lyonnais </option>
                                            <option value="OlympiquedeMarseille">Olympique de Marseille </option>
                                            <option value="ASMonaco">AS Monaco </option>
                                            <option value="ParisSaint-Germain">Paris Saint-Germain </option>
                                          </select>
                                         
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Contract Type</label>
                                        <select id="contracttype" class="custom-select form-control" required>
											<option value="Professional" <?php if(isset($mandate_check) AND $mandate_check->_Contract_type == 'Professional' ){ echo "selected"; } ?>>Professional </option>
											<option value="amateur" <?php if(isset($mandate_check) AND $mandate_check->_Contract_type == 'amateur' ){ echo "selected"; } ?>>amateur </option>
										</select>
                                         
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Expected Salary</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend input-group-prepend-left">
                                            <div class="input-group-text ">$</div>
                                          </div>
                                          <input type="text" class="form-control currency-amount" id="expectedsalary" placeholder="0.00" size="8" required="" value="<?php echo isset($mandate_check)?$mandate_check->_Expected_salary:""; ?>">
                                          <div class="input-group-append input-group-append-right">
                                            <select class="currency-selector">
											  <option data-symbol="$" data-placeholder="0.00" selected>USD</option>
											  <option data-symbol="€" data-placeholder="0.00">EUR</option>
											  <option data-symbol="£" data-placeholder="0.00">GBP</option>
											  <option data-symbol="¥" data-placeholder="0">JPY</option>
											  <option data-symbol="$" data-placeholder="0.00">CAD</option>
											  <option data-symbol="$" data-placeholder="0.00">AUD</option>
											</select>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 tutionfeediv" style="display: none;">
                                      <div class="form-group">
                                        <label for="">Athlets to Club</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend input-group-prepend-left">
                                            <div class="input-group-text ">$</div>
                                          </div>
                                          <input type="text" class="form-control currency-amount" id="expectedsalary" placeholder="0.00" size="8" required="" value="<?php echo isset($mandate_check)?$mandate_check->_Expected_salary:""; ?>">
                                          <div class="input-group-append input-group-append-right">
                                            <select class="currency-selector">
											  <option data-symbol="$" data-placeholder="0.00" selected>USD</option>
											  <option data-symbol="€" data-placeholder="0.00">EUR</option>
											  <option data-symbol="£" data-placeholder="0.00">GBP</option>
											  <option data-symbol="¥" data-placeholder="0">JPY</option>
											  <option data-symbol="$" data-placeholder="0.00">CAD</option>
											  <option data-symbol="$" data-placeholder="0.00">AUD</option>
											</select>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Term of Contract</label>
                                        <div class="input-group">
                                          <select class="form-control">
                                            <option selected="">Choose...</option>
                                             <option value="1">1</option>
											 <option value="2">2</option>
											 <option value="3">3</option>
											 <option value="4">4</option>
											 <option value="5">5</option>
											 <option value="6">6</option>
											 <option value="7">7</option>
											 <option value="8">8</option>
											 <option value="9">9</option>
											 <option value="10">10</option>
                                          </select>
                                          <div class="input-group-prepend input-group-prepend-right">
                                            <div class="input-group-text">Month</div>
                                          </div>
                                          <!-- <input  placeholder="Twitter Username" type="text"> -->
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for=""> Monthly Salary</label>
                                        <input class="form-control" type="text" name="" readonly="">
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Sign on Fee</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend input-group-prepend-left">
                                            <div class="input-group-text">$</div>
                                          </div>
                                          <input type="text" name="" class="form-control">
                                          <div class="input-group-append input-group-append-right">
                                            <select class="form-control" id="inputGroupSelect04" aria-label="Example select with button addon">
                                              	<option selected="">USD</option>
												<option>EUR</option>
												<option>GBP</option>
												<option>JPY</option>
												<option>CAD</option>
												<option>AUD</option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Flights</label>
                                        <select class="form-control">
                                          	<option value="one way">One way </option>
											<option value="2 ways">2 Ways </option>
											<option value="including/excluding">Including/Excluding</option>
											<option value="family members">Family Members</option>
                                        </select>
                                        <p class="nagotiationsmessage">Negotiation Message</p>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Accommodation</label>
                                        <select class="form-control">
                                          	<option value="provided">Provided </option>
											<option value="unprovided">Unprovided</option>
											<option value="Limited">Limited</option>
                                        </select>
                                        <p class="nagotiationsmessage">Negotiation Message</p>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Try Out</label>
                                        <select class="form-control">
                                          	<option value="yes">Yes</option>
											<option value="no">No</option>
                                        </select>
                                        <p class="nagotiationsmessage">Negotiation Message</p>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Try Out Term</label>
                                        <select class="form-control">
                                          	<option value="yes">Yes</option>
											<option value="no">No</option>
                                        </select>
                                        <p class="nagotiationsmessage">Negotiation Message</p>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Type</label>
                                        <select class="form-control">
                                          	<option value="Revocable">Revocable </option>
											<option value="Irrevocable">Irrevocable</option>
                                        </select>
                                        <p class="nagotiationsmessage">Negotiation Message</p>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Club Termination</label>
                                        <input class="form-control" type="text" name="">
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                      <div class="form-group">
                                        <label for="">Additional Terms</label>
                                        <input class="form-control" type="text" name="">
                                      </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                      <div class="form-buttons-w formmandatbtn">
                                        <button class="btn btn-primary submitbtn" type="submit"> Submit</button>
                                        <button class="btn btn-success acceptbtn"> Accept </button>
                                        <button class="btn btn-danger rejectbtn"> Reject </button>
                                        <button class="btn btn-info negotiationsbtn"> Negotiations </button>
                                      </div>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        	<div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="mandatetab">
                  <ul class="nav nav-tabs" id="agentandclubmandatetab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="agenttabmandat" data-toggle="tab" href="#clubtab" role="tab" aria-controls="clubtab" aria-selected="true">Past</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="clubtabmandate" data-toggle="tab" href="#agenttab" role="tab" aria-controls="agenttab" aria-selected="false">Present</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="clubtabmandate" data-toggle="tab" href="#agenttab" role="tab" aria-controls="agenttab" aria-selected="false">Future</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="clubtab" role="tabpanel" aria-labelledby="agenttabmandat">
                      <div class="container-fluid">

                      </div>
                    </div>
                    <div class="tab-pane fade" id="agenttab" role="tabpanel" aria-labelledby="clubtabmandate">
                      <div class="container-fluid">
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <table class="commontable mt-3">
      </table>
    </div>
  </div>
</div>

<script type="text/javascript">

if ($('.select2').length) {
    $('.select2').select2({placeholder: "Select Territory" });
}
 
jQuery(function() {

jQuery(".negotcls").click(function(event){ 
 
	if(jQuery('#upby').val() == 'waitagent'){

	        jQuery.alert({
	            title: "Alert!",
	            content: "Please wait to player's response",
	        });  
	}
	else if(jQuery('#upby').val() == 'waitplayer'){

	        jQuery.alert({
	            title: "Alert!",
	            content: "Please wait to agent's response",
	        }); 
	}
	else{  

		
		jQuery("#mandate_form :input").prop("disabled", false);
		jQuery("#territoryorsport").prop("disabled", true);
		
		jQuery('#negotiateback').show();
		var action = '<?php echo base_url('Myprofile/add_mandate_histry') ?>';
		jQuery("#mandate_form").attr('action',action);
		jQuery('.mainsubmitbtn').append('<input type="submit" name="btn_mandate" class="btn btn-primary submitbtn" value="submit" />');
		jQuery('.mainactionbtn').remove();
	}

	event.preventDefault();
}); 
//alert('a');
/*New mandate form jquery*/
 
   //jQuery(".tutionfeediv").hide();
   jQuery("#termmandateday").change(function(){
  
      jQuery("#term_athlete").empty();
      if(jQuery(this).val() == "0"){

         var option =  '';
         for(var i=1; i<30; i++){
            option +="<option value="+i+">"+i+"</option>";
         }
         //alert(option);
         jQuery("#term_athlete").prepend(option);         
      }
      else{
         var option =  '';
         for(var i=1; i<25; i++){
            option +="<option value="+i+">"+i+"</option>";
         }
         //alert(option);
         jQuery("#term_athlete").prepend(option);  
      }
   })

   jQuery("#contracttype").change(function(){ 
      jQuery("#monthlysalary").val('');   
      if(jQuery(this).val() == "amateur"){
         jQuery(".expsalarydiv").hide();
         jQuery(".tutionfeediv").show();
      }else{
         jQuery(".expsalarydiv").show();
         jQuery(".tutionfeediv").hide();
      }
   })

   jQuery("#territoryorsport").change(function(){  //alert('ss');

      if(jQuery(this).val() == "club"){
         jQuery(".selectterritorydiv").hide();
         jQuery(".selectclubdiv").show();
      }
      else if(jQuery(this).val() == "Worldwide"){
         jQuery(".selectterritorydiv").hide();
         jQuery(".selectclubdiv").hide();
       
      }else{
         jQuery(".selectterritorydiv").show();
         jQuery(".selectclubdiv").hide();
      }
   })

   jQuery("#termofcontract").change(function(){

      if(jQuery("#contracttype").children("option:selected").val()=="Professional") {
      
         var v = parseInt(jQuery("#expectedsalary").val())/Math.round(parseInt(jQuery(this).val()));
         jQuery("#monthlysalary").val(Math.round(v));
      }
      else{
         var v = parseInt(jQuery("#tuitionfee").val())/Math.round(parseInt(jQuery(this).val()));
         jQuery("#monthlysalary").val(Math.round(v));
      }
   })
      jQuery("#expectedsalary").change(function(){

      if(jQuery("#contracttype").children("option:selected").val()=="Professional") {
      
         var v = parseInt(jQuery("#expectedsalary").val())/Math.round(parseInt(jQuery("#termofcontract").val()));
         jQuery("#monthlysalary").val(Math.round(v));
      }
      else{
         var v = parseInt(jQuery("#tuitionfee").val())/Math.round(parseInt(jQuery("#termofcontract").val()));
         jQuery("#monthlysalary").val(Math.round(v));
      }
   })

   

   jQuery("#accommodation").change(function(){
      if(jQuery(this).val()=="Limited")  {
       
         jQuery(".limitedbudgetdiv").show();
      }
      else{
         jQuery(".limitedbudgetdiv").hide();
      }
   })
   jQuery("#tryout").change(function(){

      if(jQuery(this).val()=="No")  {
       
         jQuery(".tryouttermdiv").hide();
      }
      else{
         jQuery(".tryouttermdiv").show();
      }
   })
 
 
/*End new form*/
 

jQuery('.rejectbtncls').click(function(event){ 
          
   
   var mid = jQuery(this).attr('data-id'); 

   $.confirm({
       title: 'Reject!',
       content: '' +
       '<form method="post" id="rejectform" action="<?php echo base_url() ?>myprofile/accept_mandate" class="formName">' +
       '<div class="form-group">' +
       '<label>Enter Your Reason</label>' +
       '<input type="hidden" name="hidden_mandate" value="'+mid+'" />'+
       '<input type="text" name="rejectreason" placeholder="Reject Reason" class="name form-control" required />' +
       // '<input type="submit" name="rejectreason" style="display:none;" />' +
       '</div>' +
       '</form>',
       buttons: {
           formSubmit: {
               text: 'Submit',
               btnClass: 'btn-blue',
               action: function () {
                   var name = this.$content.find('.name').val();
                   if(!name){
                       $.alert('provide a valid reason');
                       return false;
                   }else{ 
                     //event.preventDefault(); 
 
                     jQuery("#rejectform").submit();
                     //return false;
                   }

                   //$.alert('Your name is ' + name);
               }
           },
           cancel: function () {
               //close
           },
       },
       // onContentReady: function () {
       //     // bind to events
       //     var jc = this;
       //     this.$content.find('form').on('submit', function (e) {
       //         // if the user submits the form by pressing enter in the field.
       //         e.preventDefault();
       //         jc.$$formSubmit.trigger('click'); // reference the button and click it
       //     });
       // }
   }); return false;
})

jQuery("#clear_mandate").click(function(){
   if(confirm('Are you sure you want to clear mandate form?')){
      window.location = "<?php echo base_url().'Myprofile/clear_mandate' ?>/"+jQuery(this).attr('data-id');   
   }   
});
if(jQuery('input.chl_cls:checked').length == 0){
  jQuery("#nego_submit").attr("disabled", true);
}else{
  jQuery("#nego_submit").attr("disabled", false);
} 
jQuery(".chl_cls").click(function(){

if(jQuery('input.chl_cls:checked').length == 0){
  jQuery("#nego_submit").attr("disabled", true);
}else{
  jQuery("#nego_submit").attr("disabled", false);
} 
      var show = jQuery(this).attr('id');
      jQuery('.'+show).toggle();
});
    

  jQuery("#mandate_form").validate({

    // Specify validation rules
    rules: {
    	selectplayer:{required:true},
      "territoryselect[]": { required:true },
      term_athlete: { required:true },
      contract_type: { required:true },
      term_contract: { required:true },
      expected_salary: { required:true },
      transfer_fee: { required:true },
      agency_fee: { required:true },
      extension_fee: { required:true },
      flights: { required:true},
      accommodation: { required:true },
      try_out: { required:true },
      try_outteam: { required:true },
      signon_fee: { required:true },
      athlete_termination: { required:true },
      club_termination: { required:true }, 
      additional_terms: { required:true } 

    },
    // Specify validation error messages
    messages: {
      selectplayer:{required:"Please select player."},
      "territoryselect[]": {required:"Please select territory."},
      term_athlete: {required:"Please enter term of the athlete's mandate."},
      contract_type: {required:"Please enter contract type."},
      term_contract: {required:"Please enter term of contract with club."},
      expected_salary: {required:"Please enter expected Salary/ budget available."},
      transfer_fee: {required:"Please enter transfer fee."},
      agency_fee: {required:"Please enter agency fee."},
      extension_fee: {required:"Please enter extension fee."},
      flights: {required:"Please enter flights."},
      accommodation: {required:"Please enter accommodation."},
      try_out: {required:"Please enter club try out."},
      try_outteam: {required:"Please enter try out team."},
      signon_fee: {required:"Please enter signon fee."},
      athlete_termination: {required:"Please enter athlete termination."},
      club_termination: {required:"Please enter club termination."},
      additional_terms: {required:"Please enter additional terms."},
    },
     errorPlacement: function(error, element) {
	    
	    if (element.attr("name") == "territoryselect[]" )
	        //error.insertAfter(".some-class");
	    element.next().after(error);
	    else
	     error.insertAfter(element);
	},
    submitHandler: function(form) {

         //alert(jQuery('#upby').val());
         if(jQuery('#upby').val() == 'waitplayer'){
           
           jQuery.alert({
                title: "Alert!",
                content: "Please wait for agent's response.",
            });
         }
         // else if(jQuery("#upby").val() == "waitplayer"){

         //       jQuery.alert({
         //          title: "Alert!",
         //          content: "Please wait for agent's response.",
         //       });

         // }
         else{
            form.submit();
         }
          
    }
  });
});
</script>

