<?php //echo "<pre>"; print_r($allstarts); echo "</pre>"; ?>
<div class="container-fluid mt-3">

	<div class="row row-eq-height">
		<div class="col-sm-12 mt-3">
      <div class="tg-sectionhead">
          <div class="tg-title">
            <h2>Characterstics</h2>
          </div>
        </div>
    </div>
		<div class="col-md-3">
			<div class="charactersticsbox" data-toggle="modal" data-target="#characterstics1">
				<div class="charactersticsboxdiv">
					<div class="containboxcaracter">
						<p class="nameofcharacterstics">Personal Characteristics</p>
						<p class="totalstarcharacterstics">
							<?php
								echo ($allstarts->_Leadership+$allstarts->_Confidence+$allstarts->_Discipline+$allstarts->_Creativity)/4; 
							 ?>
						 <i class="fa fa-star fillstar" aria-hidden="true"></i>
						</p>
					</div>
					<div class="box-modern-circle-1"></div>
					<div class="box-modern-circle-2"></div>
				</div>
			</div>
		</div>
		<div class="col-md-3 ">
			<div class="charactersticsbox" data-toggle="modal" data-target="#characterstics2">
				<div class="charactersticsboxdiv">
					<div class="containboxcaracter">
						<p class="nameofcharacterstics">Skills</p>
						<p class="totalstarcharacterstics">
							<?php
								echo ($allstarts->_Passing+$allstarts->_SetPieces+$allstarts->_LongShots+$allstarts->_BallControl)/4; 
							 ?>
							<i class="fa fa-star fillstar" aria-hidden="true"></i></p>
					</div>
					<div class="box-modern-circle-1"></div>
					<div class="box-modern-circle-2"></div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="charactersticsbox" data-toggle="modal" data-target="#characterstics3">
				<div class="charactersticsboxdiv">
					<div class="containboxcaracter">
						<p class="nameofcharacterstics">Tactical</p>
						<p class="totalstarcharacterstics">
							<?php
								echo ($allstarts->_Coachability+$allstarts->_Positioning+$allstarts->_Transition+$allstarts->_FootballIQ)/4; 
							 ?>
							<i class="fa fa-star fillstar" aria-hidden="true"></i></p>
					</div>
					<div class="box-modern-circle-1"></div>
					<div class="box-modern-circle-2"></div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="charactersticsbox" data-toggle="modal" data-target="#characterstics4">
				<div class="charactersticsboxdiv">
					<div class="containboxcaracter">
						<p class="nameofcharacterstics">Physical</p>
						<p class="totalstarcharacterstics">
						<?php
							echo ($allstarts->_Strength+$allstarts->_Speed+$allstarts->_Jumping+$allstarts->_Tackling)/4; 
						 ?>
							  <i class="fa fa-star fillstar" aria-hidden="true"></i></p>
					</div>
					<div class="box-modern-circle-1"></div>
					<div class="box-modern-circle-2"></div>
				</div>
			</div>
		</div>
	</div>
</div>




<div class="modal fade themepopup" id="characterstics1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
      	<div class="closemodel">
      		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
      	</div>
    	<div class="titledivmodel">
    		<h4 class="bluetitleh4 text-center">Personal Characteristics</h4>
    	</div>
    	<div class="row">
	    	<div class="col-md-6">
	    		<div class="singleratingbox">
		    		<div class="titleandstar">
			    		<p class="titleofstarrating">Leadership</p>
						<div class="star-rating">
						  <input type="radio" id="stars-a5" name="leader-a" value="5" <?php if($allstarts->_Leadership >= '5'){echo "CHECKED"; } ?> />
						  <label for="stars-a5" class="star">&#9733;</label>
						  <input type="radio" id="stars-a4" name="leader-b" value="4" <?php if($allstarts->_Leadership >= '4'){echo "CHECKED"; } ?> />
						  <label for="stars-a4" class="star">&#9733;</label>
						  <input type="radio" id="stars-a3" name="leader-c" value="3" <?php if($allstarts->_Leadership >= '3'){echo "CHECKED"; } ?> />
						  <label for="stars-a3" class="star">&#9733;</label>
						  <input type="radio" id="stars-a2" name="leader-d" value="2" <?php if($allstarts->_Leadership >= '2'){echo "CHECKED"; } ?> />
						  <label for="stars-a2" class="star">&#9733;</label>
						  <input type="radio" id="stars-a1" name="leader-e" value="1" <?php if($allstarts->_Leadership >= '1'){echo "CHECKED"; } ?> />
						  <label for="stars-1" class="star">&#9733;</label>
						</div>
					</div>
					<div class="currentrating">
						<div class="currentratingcircle">
							<span><?php echo $allstarts->_Leadership; ?></span>
						</div>
					</div>
				</div>
	    	</div>
	    	<div class="col-md-6">
	    		<div class="singleratingbox">
		    		<div class="titleandstar">
			    		<p class="titleofstarrating">Confidence</p>
						<div class="star-rating">
						  <input type="radio" id="stars-b5" name="confidence-a" value="5" <?php if($allstarts->_Confidence >= '5'){echo "CHECKED"; } ?> />
						  <label for="stars-b5" class="star">&#9733;</label>
						  <input type="radio" id="stars-b4" name="confidence-b" value="4" <?php if($allstarts->_Confidence >= '4'){echo "CHECKED"; } ?> />
						  <label for="stars-b4" class="star">&#9733;</label>
						  <input type="radio" id="stars-b3" name="confidence-c" value="3" <?php if($allstarts->_Confidence >= '3'){echo "CHECKED"; } ?> />
						  <label for="stars-b3" class="star">&#9733;</label>
						  <input type="radio" id="stars-b2" name="confidence-d" value="2" <?php if($allstarts->_Confidence >= '2'){echo "CHECKED"; } ?> />
						  <label for="stars-b2" class="star">&#9733;</label>
						  <input type="radio" id="stars-b1" name="confidence-e" value="1" <?php if($allstarts->_Confidence >= '1'){echo "CHECKED"; } ?> />
						  <label for="stars-b1" class="star">&#9733;</label>
						</div>
					</div>
					<div class="currentrating">
						<div class="currentratingcircle">
							<span><?php echo $allstarts->_Confidence; ?></span>
						</div>
					</div>
				</div>
	    	</div>
	    	<div class="col-md-6">
	    		<div class="singleratingbox">
		    		<div class="titleandstar">
			    		<p class="titleofstarrating">Discipline</p>
						<div class="star-rating">
						  <input type="radio" id="stars-c5" name="discipline-a" value="5" <?php if($allstarts->_Discipline >= '5'){echo "CHECKED"; } ?> />
						  <label for="stars-c5" class="star">&#9733;</label>
						  <input type="radio" id="stars-c4" name="discipline-b" value="4" <?php if($allstarts->_Discipline >= '4'){echo "CHECKED"; } ?> />
						  <label for="stars-c4" class="star">&#9733;</label>
						  <input type="radio" id="stars-c3" name="discipline-c" value="3" <?php if($allstarts->_Discipline >= '3'){echo "CHECKED"; } ?> />
						  <label for="stars-c3" class="star">&#9733;</label>
						  <input type="radio" id="stars-c2" name="discipline-d" value="2" <?php if($allstarts->_Discipline >= '2'){echo "CHECKED"; } ?> />
						  <label for="stars-c2" class="star">&#9733;</label>
						  <input type="radio" id="stars-c1" name="discipline-e" value="1" <?php if($allstarts->_Discipline >= '1'){echo "CHECKED"; } ?> />
						  <label for="stars-c1" class="star">&#9733;</label>
						</div>
					</div>
					<div class="currentrating">
						<div class="currentratingcircle">
							<span><?php echo $allstarts->_Discipline; ?></span>
						</div>
					</div>
				</div>
	    	</div>
	    	<div class="col-md-6">
	    		<div class="singleratingbox">
		    		<div class="titleandstar">
			    		<p class="titleofstarrating">Creativity</p>
						<div class="star-rating">
						  <input type="radio" id="stars-d5" name="creativity-a" value="5"  <?php if($allstarts->_Creativity >= '5'){echo "CHECKED"; } ?>/>
						  <label for="stars-d5" class="star">&#9733;</label>
						  <input type="radio" id="stars-d4" name="creativity-b" value="4"  <?php if($allstarts->_Creativity >= '4'){echo "CHECKED"; } ?>/>
						  <label for="stars-d4" class="star">&#9733;</label>
						  <input type="radio" id="stars-d3" name="creativity-c" value="3"  <?php if($allstarts->_Creativity >= '3'){echo "CHECKED"; } ?>/>
						  <label for="stars-d3" class="star">&#9733;</label>
						  <input type="radio" id="stars-d2" name="creativity-d" value="2"  <?php if($allstarts->_Creativity >= '2'){echo "CHECKED"; } ?>/>
						  <label for="stars-d2" class="star">&#9733;</label>
						  <input type="radio" id="stars-d1" name="creativity-e" value="1"  <?php if($allstarts->_Creativity >= '1'){echo "CHECKED"; } ?>/>
						  <label for="stars-d1" class="star">&#9733;</label>
						</div>
					</div>
					<div class="currentrating">
						<div class="currentratingcircle">
							<span><?php echo $allstarts->_Creativity; ?></span>
						</div>
					</div>
				</div>
	    	</div>
	    	
	    	<div class="col-md-12 text-right">
	    		<a class="btn btn-primary btn-sm mt-5" href="#">
					<span>Submit</span>
				</a>
	    	</div>
    	</div>
    	
      </div>

    </div>
  </div>
</div>
<div class="modal fade themepopup" id="characterstics2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
      	<div class="closemodel">
      		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
      	</div>
    	<div class="titledivmodel">
    		<h4 class="bluetitleh4 text-center">Skills</h4>
    	</div>
    	<div class="row">
	    	<div class="col-md-6">
	    		<div class="singleratingbox">
		    		<div class="titleandstar">
			    		<p class="titleofstarrating">Passing</p>
						<div class="star-rating">
						  <input type="radio" id="stars-a5" name="passing-a" value="5"  <?php if($allstarts->_Passing >= '5'){echo "CHECKED"; } ?>/>
						  <label for="stars-a5" class="star">&#9733;</label>
						  <input type="radio" id="stars-a4" name="passing-b" value="4"  <?php if($allstarts->_Passing >= '4'){echo "CHECKED"; } ?>/>
						  <label for="stars-a4" class="star">&#9733;</label>
						  <input type="radio" id="stars-a3" name="passing-c" value="3"  <?php if($allstarts->_Passing >= '3'){echo "CHECKED"; } ?>/>
						  <label for="stars-a3" class="star">&#9733;</label>
						  <input type="radio" id="stars-a2" name="passing-d" value="2"  <?php if($allstarts->_Passing >= '2'){echo "CHECKED"; } ?>/>
						  <label for="stars-a2" class="star">&#9733;</label>
						  <input type="radio" id="stars-a1" name="passing-e" value="1"  <?php if($allstarts->_Passing >= '1'){echo "CHECKED"; } ?>/>
						  <label for="stars-1" class="star">&#9733;</label>
						</div>
					</div>
					<div class="currentrating">
						<div class="currentratingcircle">
							<span><?php echo $allstarts->_Passing; ?></span>
						</div>
					</div>
				</div>
	    	</div>
	    	<div class="col-md-6">
	    		<div class="singleratingbox">
		    		<div class="titleandstar">
			    		<p class="titleofstarrating">Set Pieces</p>
						<div class="star-rating">
						  <input type="radio" id="stars-b5" name="setpieces-a" value="5" <?php if($allstarts->_SetPieces >= '5'){echo "CHECKED"; } ?>  />
						  <label for="stars-b5" class="star">&#9733;</label>
						  <input type="radio" id="stars-b4" name="setpieces-b" value="4" <?php if($allstarts->_SetPieces >= '4'){echo "CHECKED"; } ?> />
						  <label for="stars-b4" class="star">&#9733;</label>
						  <input type="radio" id="stars-b3" name="setpieces-c" value="3" <?php if($allstarts->_SetPieces >= '3'){echo "CHECKED"; } ?> />
						  <label for="stars-b3" class="star">&#9733;</label>
						  <input type="radio" id="stars-b2" name="setpieces-d" value="2" <?php if($allstarts->_SetPieces >= '2'){echo "CHECKED"; } ?> />
						  <label for="stars-b2" class="star">&#9733;</label>
						  <input type="radio" id="stars-b1" name="setpieces-e" value="1" <?php if($allstarts->_SetPieces >= '1'){echo "CHECKED"; } ?> />
						  <label for="stars-b1" class="star">&#9733;</label>
						</div>
					</div>
					<div class="currentrating">
						<div class="currentratingcircle">
							<span><?php echo $allstarts->_SetPieces; ?></span>
						</div>
					</div>
				</div>
	    	</div>
	    	<div class="col-md-6">
	    		<div class="singleratingbox">
		    		<div class="titleandstar">
			    		<p class="titleofstarrating">Long Shots</p>
						<div class="star-rating">
						  <input type="radio" id="stars-c5" name="longshots-a" value="5" <?php if($allstarts->_LongShots >= '5'){echo "CHECKED"; } ?> />
						  <label for="stars-c5" class="star">&#9733;</label>
						  <input type="radio" id="stars-c4" name="longshots-b" value="4" <?php if($allstarts->_LongShots >= '4'){echo "CHECKED"; } ?> />
						  <label for="stars-c4" class="star">&#9733;</label>
						  <input type="radio" id="stars-c3" name="longshots-c" value="3" <?php if($allstarts->_LongShots >= '3'){echo "CHECKED"; } ?> />
						  <label for="stars-c3" class="star">&#9733;</label>
						  <input type="radio" id="stars-c2" name="longshots-d" value="2" <?php if($allstarts->_LongShots >= '2'){echo "CHECKED"; } ?> />
						  <label for="stars-c2" class="star">&#9733;</label>
						  <input type="radio" id="stars-c1" name="longshots-e" value="1" <?php if($allstarts->_LongShots >= '1'){echo "CHECKED"; } ?> />
						  <label for="stars-c1" class="star">&#9733;</label>
						</div>
					</div>
					<div class="currentrating">
						<div class="currentratingcircle">
							<span><?php echo $allstarts->_LongShots; ?></span>
						</div>
					</div>
				</div>
	    	</div>
	    	<div class="col-md-6">
	    		<div class="singleratingbox">
		    		<div class="titleandstar">
			    		<p class="titleofstarrating">Ball Control</p>
						<div class="star-rating">
						  <input type="radio" id="stars-d5" name="ball-a" value="5" <?php if($allstarts->_BallControl >= '5'){echo "CHECKED"; } ?> />
						  <label for="stars-d5" class="star">&#9733;</label>
						  <input type="radio" id="stars-d4" name="ball-b" value="4" <?php if($allstarts->_BallControl >= '4'){echo "CHECKED"; } ?> />
						  <label for="stars-d4" class="star">&#9733;</label>
						  <input type="radio" id="stars-d3" name="ball-c" value="3" <?php if($allstarts->_BallControl >= '3'){echo "CHECKED"; } ?> />
						  <label for="stars-d3" class="star">&#9733;</label>
						  <input type="radio" id="stars-d2" name="ball-d" value="2" <?php if($allstarts->_BallControl >= '2'){echo "CHECKED"; } ?> />
						  <label for="stars-d2" class="star">&#9733;</label>
						  <input type="radio" id="stars-d1" name="ball-e" value="1" <?php if($allstarts->_BallControl >= '1'){echo "CHECKED"; } ?> />
						  <label for="stars-d1" class="star">&#9733;</label>
						</div>
					</div>
					<div class="currentrating">
						<div class="currentratingcircle">
							<span><?php echo $allstarts->_BallControl; ?></span>
						</div>
					</div>
				</div>
	    	</div>
	    	
	    	<div class="col-md-12 text-right">
	    		<a class="btn btn-primary btn-sm mt-5" href="#">
					<span>Submit</span>
				</a>
	    	</div>
    	</div>
    	
      </div>

    </div>
  </div>
</div>
<div class="modal fade themepopup" id="characterstics3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
      	<div class="closemodel">
      		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
      	</div>
    	<div class="titledivmodel">
    		<h4 class="bluetitleh4 text-center">Tactical</h4>
    	</div>
    	<div class="row">
	    	<div class="col-md-6">
	    		<div class="singleratingbox">
		    		<div class="titleandstar">
			    		<p class="titleofstarrating">Coachability</p>
						<div class="star-rating">
						  <input type="radio" id="stars-a5" name="coachability-a" value="5" <?php if($allstarts->_Coachability >= '5'){echo "CHECKED"; } ?> />
						  <label for="stars-a5" class="star">&#9733;</label>
						  <input type="radio" id="stars-a4" name="coachability-b" value="4" <?php if($allstarts->_Coachability >= '4'){echo "CHECKED"; } ?>/>
						  <label for="stars-a4" class="star">&#9733;</label>
						  <input type="radio" id="stars-a3" name="coachability-c" value="3" <?php if($allstarts->_Coachability >= '3'){echo "CHECKED"; } ?> />
						  <label for="stars-a3" class="star">&#9733;</label>
						  <input type="radio" id="stars-a2" name="coachability-d" value="2" <?php if($allstarts->_Coachability >= '2'){echo "CHECKED"; } ?>/>
						  <label for="stars-a2" class="star">&#9733;</label>
						  <input type="radio" id="stars-a1" name="coachability-e" value="1" <?php if($allstarts->_Coachability >= '1'){echo "CHECKED"; } ?>/>
						  <label for="stars-1" class="star">&#9733;</label>
						</div>
					</div>
					<div class="currentrating">
						<div class="currentratingcircle">
							<span><?php echo $allstarts->_Coachability; ?></span>
						</div>
					</div>
				</div>
	    	</div>
	    	<div class="col-md-6">
	    		<div class="singleratingbox">
		    		<div class="titleandstar">
			    		<p class="titleofstarrating">Positioning</p>
						<div class="star-rating">
						  <input type="radio" id="stars-b5" name="positioning-a" value="5" <?php if($allstarts->_Positioning >= '5'){echo "CHECKED"; } ?> />
						  <label for="stars-b5" class="star">&#9733;</label>
						  <input type="radio" id="stars-b4" name="positioning-b" value="4" <?php if($allstarts->_Positioning >= '4'){echo "CHECKED"; } ?> />
						  <label for="stars-b4" class="star">&#9733;</label>
						  <input type="radio" id="stars-b3" name="positioning-c" value="3" <?php if($allstarts->_Positioning >= '3'){echo "CHECKED"; } ?> />
						  <label for="stars-b3" class="star">&#9733;</label>
						  <input type="radio" id="stars-b2" name="positioning-d" value="2" <?php if($allstarts->_Positioning >= '2'){echo "CHECKED"; } ?> />
						  <label for="stars-b2" class="star">&#9733;</label>
						  <input type="radio" id="stars-b1" name="positioning-e" value="1" <?php if($allstarts->_Positioning >= '1'){echo "CHECKED"; } ?> />
						  <label for="stars-b1" class="star">&#9733;</label>
						</div>
					</div>
					<div class="currentrating">
						<div class="currentratingcircle">
							<span><?php echo $allstarts->_Positioning; ?></span>
						</div>
					</div>
				</div>
	    	</div>
	    	<div class="col-md-6">
	    		<div class="singleratingbox">
		    		<div class="titleandstar">
			    		<p class="titleofstarrating">Transition</p>
						<div class="star-rating">
						  <input type="radio" id="stars-c5" name="transition-a" value="5" <?php if($allstarts->_Transition >= '5'){echo "CHECKED"; } ?> />
						  <label for="stars-c5" class="star">&#9733;</label>
						  <input type="radio" id="stars-c4" name="transition-b" value="4" <?php if($allstarts->_Transition >= '4'){echo "CHECKED"; } ?> />
						  <label for="stars-c4" class="star">&#9733;</label>
						  <input type="radio" id="stars-c3" name="transition-c" value="3" <?php if($allstarts->_Transition >= '3'){echo "CHECKED"; } ?> />
						  <label for="stars-c3" class="star">&#9733;</label>
						  <input type="radio" id="stars-c2" name="transition-d" value="2" <?php if($allstarts->_Transition >= '2'){echo "CHECKED"; } ?> />
						  <label for="stars-c2" class="star">&#9733;</label>
						  <input type="radio" id="stars-c1" name="transition-e" value="1" <?php if($allstarts->_Transition >= '1'){echo "CHECKED"; } ?> />
						  <label for="stars-c1" class="star">&#9733;</label>
						</div>
					</div>
					<div class="currentrating">
						<div class="currentratingcircle">
							<span><?php echo $allstarts->_Transition; ?></span>
						</div>
					</div>
				</div>
	    	</div>
	    	<div class="col-md-6">
	    		<div class="singleratingbox">
		    		<div class="titleandstar">
			    		<p class="titleofstarrating">Football IQ</p>
						<div class="star-rating">
						  <input type="radio" id="stars-d5" name="footballiq-a" value="5" <?php if($allstarts->_FootballIQ >= '5'){echo "CHECKED"; } ?> />
						  <label for="stars-d5" class="star">&#9733;</label>
						  <input type="radio" id="stars-d4" name="footballiq-b" value="4" <?php if($allstarts->_FootballIQ >= '4'){echo "CHECKED"; } ?> />
						  <label for="stars-d4" class="star">&#9733;</label>
						  <input type="radio" id="stars-d3" name="footballiq-c" value="3" <?php if($allstarts->_FootballIQ >= '3'){echo "CHECKED"; } ?> />
						  <label for="stars-d3" class="star">&#9733;</label>
						  <input type="radio" id="stars-d2" name="footballiq-d" value="2" <?php if($allstarts->_FootballIQ >= '2'){echo "CHECKED"; } ?> />
						  <label for="stars-d2" class="star">&#9733;</label>
						  <input type="radio" id="stars-d1" name="footballiq-e" value="1" <?php if($allstarts->_FootballIQ >= '1'){echo "CHECKED"; } ?> />
						  <label for="stars-d1" class="star">&#9733;</label>
						</div>
					</div>
					<div class="currentrating">
						<div class="currentratingcircle">
							<span><?php echo $allstarts->_FootballIQ; ?></span>
						</div>
					</div>
				</div>
	    	</div>
	    	
	    	<div class="col-md-12 text-right">
	    		<a class="btn btn-primary btn-sm mt-5" href="#">
					<span>Submit</span>
				</a>
	    	</div>
    	</div>
    	
      </div>

    </div>
  </div>
</div>
<div class="modal fade themepopup" id="characterstics4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
      	<div class="closemodel">
      		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
      	</div>
    	<div class="titledivmodel">
    		<h4 class="bluetitleh4 text-center">Physical</h4>
    	</div>
    	<div class="row">
	    	<div class="col-md-6">
	    		<div class="singleratingbox">
		    		<div class="titleandstar">
			    		<p class="titleofstarrating">Strength</p>
						<div class="star-rating">
						  <input type="radio" id="stars-a5" name="rating-a" value="5" <?php if($allstarts->_Strength >= '5'){echo "CHECKED"; } ?>  />
						  <label for="stars-a5" class="star">&#9733;</label>
						  <input type="radio" id="stars-a4" name="strength-b" value="4" <?php if($allstarts->_Strength >= '4'){echo "CHECKED"; } ?>  />
						  <label for="stars-a4" class="star">&#9733;</label>
						  <input type="radio" id="stars-a3" name="strength-c" value="3" <?php if($allstarts->_Strength >= '3'){echo "CHECKED"; } ?>  />
						  <label for="stars-a3" class="star">&#9733;</label>
						  <input type="radio" id="stars-a2" name="strength-d" value="2" <?php if($allstarts->_Strength >= '2'){echo "CHECKED"; } ?>  />
						  <label for="stars-a2" class="star">&#9733;</label>
						  <input type="radio" id="stars-a1" name="strength-e" value="1" <?php if($allstarts->_Strength >= '1'){echo "CHECKED"; } ?>  />
						  <label for="stars-1" class="star">&#9733;</label>
						</div>
					</div>
					<div class="currentrating">
						<div class="currentratingcircle">
							<span><?php echo $allstarts->_Strength; ?></span>
						</div>
					</div>
				</div>
	    	</div>
	    	<div class="col-md-6">
	    		<div class="singleratingbox">
		    		<div class="titleandstar">
			    		<p class="titleofstarrating">Speed</p>
						<div class="star-rating">
						  <input type="radio" id="stars-b5" name="speed-a" value="5" <?php if($allstarts->_Speed >= '5'){echo "CHECKED"; } ?>  />
						  <label for="stars-b5" class="star">&#9733;</label>
						  <input type="radio" id="stars-b4" name="speed-b" value="4" <?php if($allstarts->_Speed >= '4'){echo "CHECKED"; } ?>  />
						  <label for="stars-b4" class="star">&#9733;</label>
						  <input type="radio" id="stars-b3" name="speed-c" value="3" <?php if($allstarts->_Speed >= '3'){echo "CHECKED"; } ?>  />
						  <label for="stars-b3" class="star">&#9733;</label>
						  <input type="radio" id="stars-b2" name="speed-d" value="2" <?php if($allstarts->_Speed >= '2'){echo "CHECKED"; } ?>  />
						  <label for="stars-b2" class="star">&#9733;</label>
						  <input type="radio" id="stars-b1" name="speed-e" value="1" <?php if($allstarts->_Speed >= '1'){echo "CHECKED"; } ?>  />
						  <label for="stars-b1" class="star">&#9733;</label>
						</div>
					</div>
					<div class="currentrating">
						<div class="currentratingcircle">
							<span><?php echo $allstarts->_Speed; ?></span>
						</div>
					</div>
				</div>
	    	</div>
	    	<div class="col-md-6">
	    		<div class="singleratingbox">
		    		<div class="titleandstar">
			    		<p class="titleofstarrating">Jumping</p>
						<div class="star-rating">
						  <input type="radio" id="stars-c5" name="jumping-a" value="5" <?php if($allstarts->_Jumping >= '5'){echo "CHECKED"; } ?>  />
						  <label for="stars-c5" class="star">&#9733;</label>
						  <input type="radio" id="stars-c4" name="jumping-b" value="4" <?php if($allstarts->_Jumping >= '4'){echo "CHECKED"; } ?>  />
						  <label for="stars-c4" class="star">&#9733;</label>
						  <input type="radio" id="stars-c3" name="jumping-c" value="3" <?php if($allstarts->_Jumping >= '3'){echo "CHECKED"; } ?>  />
						  <label for="stars-c3" class="star">&#9733;</label>
						  <input type="radio" id="stars-c2" name="jumping-d" value="2" <?php if($allstarts->_Jumping >= '2'){echo "CHECKED"; } ?>  />
						  <label for="stars-c2" class="star">&#9733;</label>
						  <input type="radio" id="stars-c1" name="jumping-e" value="1" <?php if($allstarts->_Jumping >= '1'){echo "CHECKED"; } ?>  />
						  <label for="stars-c1" class="star">&#9733;</label>
						</div>
					</div>
					<div class="currentrating">
						<div class="currentratingcircle">
							<span><?php echo $allstarts->_Jumping; ?></span>
						</div>
					</div>
				</div>
	    	</div>
	    	<div class="col-md-6">
	    		<div class="singleratingbox">
		    		<div class="titleandstar">
			    		<p class="titleofstarrating">Tackling</p>
						<div class="star-rating">
						  <input type="radio" id="stars-d5" name="tackling-a" value="5" <?php if($allstarts->_Tackling >= '5'){echo "CHECKED"; } ?>  />
						  <label for="stars-d5" class="star">&#9733;</label>
						  <input type="radio" id="stars-d4" name="tackling-b" value="4" <?php if($allstarts->_Tackling >= '4'){echo "CHECKED"; } ?>  />
						  <label for="stars-d4" class="star">&#9733;</label>
						  <input type="radio" id="stars-d3" name="tackling-c" value="3" <?php if($allstarts->_Tackling >= '3'){echo "CHECKED"; } ?>  />
						  <label for="stars-d3" class="star">&#9733;</label>
						  <input type="radio" id="stars-d2" name="tackling-d" value="2" <?php if($allstarts->_Tackling >= '2'){echo "CHECKED"; } ?>  />
						  <label for="stars-d2" class="star">&#9733;</label>
						  <input type="radio" id="stars-d1" name="tackling-e" value="1" <?php if($allstarts->_Tackling >= '1'){echo "CHECKED"; } ?>  />
						  <label for="stars-d1" class="star">&#9733;</label>
						</div>
					</div>
					<div class="currentrating">
						<div class="currentratingcircle">
							<span><?php echo $allstarts->_Tackling; ?></span>
						</div>
					</div>
				</div>
	    	</div>
	    	
	    	<div class="col-md-12 text-right">
	    		<a class="btn btn-primary btn-sm mt-5" href="#">
					<span>Submit</span>
				</a>
	    	</div>
    	</div>
    	
      </div>

    </div>
  </div>
</div> 