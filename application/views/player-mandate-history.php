 
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 mt-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mandatetab">
              <ul class="nav nav-tabs" id="agentandclubmandatetab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pasttabmandat" data-toggle="tab" href="#pasttab" role="tab" aria-controls="pasttab" aria-selected="true">Past</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="presenttabmandate" data-toggle="tab" href="#presenttab" role="tab" aria-controls="presenttab" aria-selected="false">Present</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="futuretabmandate" data-toggle="tab" href="#futuretab" role="tab" aria-controls="futuretab" aria-selected="false">Future</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="pasttab" role="tabpanel" aria-labelledby="pasttabmandat">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-sm-12 backgroundbox">
                        <div class="pageheading">
                          <h5>Show rejected Offer</h5>
                        </div>
                        <div>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <div class="rejectofferlist">
                        <?php
                        //echo "<pre>"; print_r($rejected); echo "</pre>";
                            if(!empty($rejected)){ $i=0;
                                foreach ($rejected as $rej) { $i++;
                                    //if($rej->_Mandate_ID != ''){ 
                                ?>
                                    <div class="siglerejectoffer" data-toggle="modal" data-target="#rejectoffer_<?php echo $i; ?>">
                                        <div class="titleandfrom">
                                            <div class="offer-header">Offer <?php echo $i; ?></div>
                                            <div class="offer-sub-header">
                                            <?php
                                            if($rej->_Update_by == '0'){
                                                echo "By Player";
                                            }else if($rej->_Update_by == '1'){
                                                echo "By Agent";
                                            }
                                            ?></div>
                                        </div>
                                        <div class="iconarrow">
                                            <i class="ti-arrow-right"></i>
                                        </div>
                                    </div>
                                    <div class="modal fade themepopup" id="rejectoffer_<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog  modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                              <div class="modal-body">
                                                <div class="closemodel">
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="titledivmodel">
                                                  <h4 class="bluetitleh4 text-center">Offer <?php echo $i; ?></h4>
                                                </div>
                                                <div class="row">
                                                  <div class="col-sm-12">
                                                    <div class="headerofofferpopup">
                                                      <p><b>Type </b>: loan</p>
                                                      <p><b>Date of offer</b> : <?php echo date('d/m/Y',strtotime($rej->mandatecreate)); ?></p>
                                                      <p><b>Date Of rejection </b>: <?php echo date('d/m/Y',strtotime($rej->rejectdate)); ?></p>
                                                    </div>
                                                    <div class="offerdetailsmain">
                                                      <p class="offertitle">Offer Details</p>
                                                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                                      <p class="offertitle">Provide by</p>
                                                      <p>
                                                        <?php
                                                        // if($rej->_Createby == '0'){

                                                        //   echo $rej->agentname; 
                                                        // }
                                                        // else if($rej->_Createby == '1')
                                                        // {
                                                        //     echo $rej->_Firstname.' '.$rej->_Lastname; 
                                                        // }  
                                                            echo $rej->agentname; 
                                                        ?>
                                                        </p>
                                                      <p class="offertitle">Rejection region</p>
                                                      <p><?php  echo $rej->_Content; ?></p>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>     
                                <?php
                                }
                              }else{
                                echo "Rejected Offer not found.";
                              }
                            //}   ?>
                           
                          <!--<div class="siglerejectoffer"  data-toggle="modal" data-target="#offerreject">
                            <div class="titleandfrom">
                              <div class="offer-header">offer 2</div>
                              <div class="offer-sub-header">By club</div>
                            </div>
                            <div class="iconarrow">
                              <i class="ti-arrow-right"></i>
                            </div>
                          </div>
                          <div class="siglerejectoffer" data-toggle="modal" data-target="#offerreject">
                            <div class="titleandfrom">
                              <div class="offer-header">offer 3</div>
                              <div class="offer-sub-header">By club</div>
                            </div>
                            <div class="iconarrow">
                              <i class="ti-arrow-right"></i>
                            </div>
                          </div>
                          <div class="siglerejectoffer"  data-toggle="modal" data-target="#offerreject">
                            <div class="titleandfrom">
                              <div class="offer-header">offer 4</div>
                              <div class="offer-sub-header">By club</div>
                            </div>
                            <div class="iconarrow">
                              <i class="ti-arrow-right"></i>
                            </div>
                          </div>
                          <div class="siglerejectoffer" data-toggle="modal" data-target="#offerreject">
                            <div class="titleandfrom">
                              <div class="offer-header">offer 5</div>
                              <div class="offer-sub-header">By club</div>
                            </div>
                            <div class="iconarrow">
                              <i class="ti-arrow-right"></i>
                            </div>
                          </div>
                          <div class="siglerejectoffer"  data-toggle="modal" data-target="#offerreject">
                            <div class="titleandfrom">
                              <div class="offer-header">offer 6</div>
                              <div class="offer-sub-header">By club</div>
                            </div>
                            <div class="iconarrow">
                              <i class="ti-arrow-right"></i>
                            </div>
                          </div>
                          <div class="siglerejectoffer" data-toggle="modal" data-target="#offerreject">
                            <div class="titleandfrom">
                              <div class="offer-header">offer 7</div>
                              <div class="offer-sub-header">By club</div>
                            </div>
                            <div class="iconarrow">
                              <i class="ti-arrow-right"></i>
                            </div>
                          </div>
                          <div class="siglerejectoffer"  data-toggle="modal" data-target="#offerreject">
                            <div class="titleandfrom">
                              <div class="offer-header">offer 8</div>
                              <div class="offer-sub-header">By club</div>
                            </div>
                            <div class="iconarrow">
                              <i class="ti-arrow-right"></i>
                            </div>
                          </div>
                        </div> -->
                      </div>
                      <div class="col-sm-12 mt-3 backgroundbox">
                        <div class="pageheading">
                          <h5>transfer history</h5>
                        </div>
                        <div>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <div class="rejectofferlist">
                        <?php    
                           if(!empty($accepted)){ $j=0;
                                foreach ($accepted as $accept) { $j++;
                                    //if($accept->_Mandate_ID != ''){ 
                                ?>
                                    <div class="siglerejectoffer" data-toggle="modal" data-target="#acceptoffer_<?php echo $j; ?>">
                                        <div class="titleandfrom">
                                            <div class="offer-header">Offer <?php echo $j; ?></div>
                                            <div class="offer-sub-header">
                                            <?php
                                            if($accept->_Update_by == '0'){
                                                echo "By Player";
                                            }else if($accept->_Update_by == '1'){
                                                echo "By Agent";
                                            }
                                            ?></div>
                                        </div>
                                        <div class="iconarrow">
                                            <i class="ti-arrow-right"></i>
                                        </div>
                                    </div>
                                    <div class="modal fade themepopup" id="acceptoffer_<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog  modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                              <div class="modal-body">
                                                <div class="closemodel">
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="titledivmodel">
                                                  <h4 class="bluetitleh4 text-center">Transfer <?php echo $j; ?></h4>
                                                </div>
                                                <div class="row">
                                                  <div class="col-sm-12">
                                                    <div class="headerofofferpopup">
                                                      <p><b>Type </b>: loan</p>
                                                      <p><b>Date of offer</b> : <?php echo date('d/m/Y',strtotime($accept->mandatecreate)); ?></p>
                                                      <p><b>Date Of Transfer </b>: <?php echo date('d/m/Y',strtotime($accept->rejectdate)); ?></p>
                                                    </div>
                                                    <div class="offerdetailsmain">
                                                      <p class="offertitle">Offer Details</p>
                                                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                                      <p class="offertitle">Provide by</p>
                                                      <p><?php
                                                        if($accept->_Createby == '0'){

                                                          echo $accept->agentname; 
                                                        }
                                                        else if($accept->_Createby == '1')
                                                        {
                                                            echo $accept->_Firstname.' '.$accept->_Lastname; 
                                                        }
                                                       ?></p>
                                                      <!-- <p class="offertitle">Rejection region</p> -->
                                                      <!-- <p><?php echo $accept->_Content; ?></p> -->
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>


                                <?php
                                }
                            }else{
                                echo "Transfer History not found.";
                            }
                            //}   ?>
                          <!-- <div class="siglerejectoffer"  data-toggle="modal" data-target="#transferhistory">
                            <div class="titleandfrom">
                              <div class="offer-header">Transfer  2</div>
                              <div class="offer-sub-header">By club</div>
                            </div>
                            <div class="iconarrow">
                              <i class="ti-arrow-right"></i>
                            </div>
                          </div> -->
                        </div>
                      
                      </div>

                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="presenttab" role="tabpanel" aria-labelledby="presenttabmandate">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-sm-12 backgroundbox">
                        <div class="pageheading">
                          <h5>Show rejected Offer</h5>
                        </div>
                        <div>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <div class="rejectofferlist">
                          <div class="siglerejectoffer" data-toggle="modal" data-target="#offerreject">
                            <div class="titleandfrom">
                              <div class="offer-header">offer 1</div>
                              <div class="offer-sub-header">By club</div>
                            </div>
                            <div class="iconarrow">
                              <i class="ti-arrow-right"></i>
                            </div>
                          </div>
                          <div class="siglerejectoffer"  data-toggle="modal" data-target="#offerreject">
                            <div class="titleandfrom">
                              <div class="offer-header">offer 2</div>
                              <div class="offer-sub-header">By club</div>
                            </div>
                            <div class="iconarrow">
                              <i class="ti-arrow-right"></i>
                            </div>
                          </div>
                          <div class="siglerejectoffer" data-toggle="modal" data-target="#offerreject">
                            <div class="titleandfrom">
                              <div class="offer-header">offer 3</div>
                              <div class="offer-sub-header">By club</div>
                            </div>
                            <div class="iconarrow">
                              <i class="ti-arrow-right"></i>
                            </div>
                          </div>
                          <div class="siglerejectoffer"  data-toggle="modal" data-target="#offerreject">
                            <div class="titleandfrom">
                              <div class="offer-header">offer 4</div>
                              <div class="offer-sub-header">By club</div>
                            </div>
                            <div class="iconarrow">
                              <i class="ti-arrow-right"></i>
                            </div>
                          </div>
                          <div class="siglerejectoffer" data-toggle="modal" data-target="#offerreject">
                            <div class="titleandfrom">
                              <div class="offer-header">offer 5</div>
                              <div class="offer-sub-header">By club</div>
                            </div>
                            <div class="iconarrow">
                              <i class="ti-arrow-right"></i>
                            </div>
                          </div>
                          <div class="siglerejectoffer"  data-toggle="modal" data-target="#offerreject">
                            <div class="titleandfrom">
                              <div class="offer-header">offer 6</div>
                              <div class="offer-sub-header">By club</div>
                            </div>
                            <div class="iconarrow">
                              <i class="ti-arrow-right"></i>
                            </div>
                          </div>
                          <div class="siglerejectoffer" data-toggle="modal" data-target="#offerreject">
                            <div class="titleandfrom">
                              <div class="offer-header">offer 7</div>
                              <div class="offer-sub-header">By club</div>
                            </div>
                            <div class="iconarrow">
                              <i class="ti-arrow-right"></i>
                            </div>
                          </div>
                          <div class="siglerejectoffer"  data-toggle="modal" data-target="#offerreject">
                            <div class="titleandfrom">
                              <div class="offer-header">offer 8</div>
                              <div class="offer-sub-header">By club</div>
                            </div>
                            <div class="iconarrow">
                              <i class="ti-arrow-right"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12 backgroundbox">
                        <div class="pageheading">
                          <h5>Show rejected Offer</h5>
                        </div>
                        <table class="commontable" width="100%">
                          <thead>
                            <tr>
                              <th>Name</th>
                              <th>Nat</th>
                              <th>age</th>
                              <th>position</th>
                              <th>agent(placing)</th>
                              <th>agent(producing)</th>
                              <th>bids</th>
                              <th>status</th>
                              <th>expiry in</th>
                              <th>type</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Rauf Tahan</td>
                              <td><img src="images/flag.jpg" width="30px"></td>
                              <td>32</td>
                              <td>Striker</td>
                              <td>Abraham</td>
                              <td>N/A</td>
                              <td>61.11M <i class="fa fa-usd" aria-hidden="true"></i></td>
                              <td>Losing</td>
                              <td>3</td>
                              <td>Revocable </td>
                            </tr>
                            <tr>
                              <td>Rauf Tahan</td>
                              <td><img src="images/flag.jpg" width="30px"></td>
                              <td>32</td>
                              <td>Striker</td>
                              <td>Abraham</td>
                              <td>N/A</td>
                              <td>61.11M <i class="fa fa-usd" aria-hidden="true"></i></td>
                              <td>Losing</td>
                              <td>3</td>
                              <td>Revocable </td>
                            </tr>
                            <tr>
                              <td>Rauf Tahan</td>
                              <td><img src="images/flag.jpg" width="30px"></td>
                              <td>32</td>
                              <td>Striker</td>
                              <td>Abraham</td>
                              <td>N/A</td>
                              <td>61.11M <i class="fa fa-usd" aria-hidden="true"></i></td>
                              <td>Losing</td>
                              <td>3</td>
                              <td>Irrevocable </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-sm-12 backgroundbox">
                        <div class="pageheading">
                          <h5>current contract</h5>
                        </div>
                        <table class="commontable" width="100%">
                          <thead>
                            <tr>
                              <th>club name</th>
                              <th>contract type</th>
                              <th>status </th>
                              <th>expiry date</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Liver Pool </td>
                              <td>Types</td>
                              <td>transfer</td>
                              <td>1/1/2019</td>
                            </tr>
                            <tr>
                              <td>Liver Pool </td>
                              <td>Types</td>
                              <td>transfer</td>
                              <td>1/1/2019</td>
                            </tr>
                            <tr>
                              <td>Liver Pool </td>
                              <td>Types</td>
                              <td>transfer</td>
                              <td>1/1/2019</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="futuretab" role="tabpanel" aria-labelledby="futuretabmandate">
                  <div class="container-fluid">
                  	<div class="row">
                  		<div class="col-sm-12 backgroundbox">
                        <div class="pageheading">
                          <h5>Show rejected Offer</h5>
                        </div>
                        <div>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <div class="rejectofferlist">
                          <div class="siglerejectoffer" data-toggle="modal" data-target="#offerreject">
                            <div class="titleandfrom">
                              <div class="offer-header">offer 1</div>
                              <div class="offer-sub-header">By club</div>
                            </div>
                            <div class="iconarrow">
                              <i class="ti-arrow-right"></i>
                            </div>
                          </div>
                          <div class="siglerejectoffer"  data-toggle="modal" data-target="#offerreject">
                            <div class="titleandfrom">
                              <div class="offer-header">offer 2</div>
                              <div class="offer-sub-header">By club</div>
                            </div>
                            <div class="iconarrow">
                              <i class="ti-arrow-right"></i>
                            </div>
                          </div>
                          <div class="siglerejectoffer" data-toggle="modal" data-target="#offerreject">
                            <div class="titleandfrom">
                              <div class="offer-header">offer 3</div>
                              <div class="offer-sub-header">By club</div>
                            </div>
                            <div class="iconarrow">
                              <i class="ti-arrow-right"></i>
                            </div>
                          </div>
                          <div class="siglerejectoffer"  data-toggle="modal" data-target="#offerreject">
                            <div class="titleandfrom">
                              <div class="offer-header">offer 4</div>
                              <div class="offer-sub-header">By club</div>
                            </div>
                            <div class="iconarrow">
                              <i class="ti-arrow-right"></i>
                            </div>
                          </div>
                          <div class="siglerejectoffer" data-toggle="modal" data-target="#offerreject">
                            <div class="titleandfrom">
                              <div class="offer-header">offer 5</div>
                              <div class="offer-sub-header">By club</div>
                            </div>
                            <div class="iconarrow">
                              <i class="ti-arrow-right"></i>
                            </div>
                          </div>
                          <div class="siglerejectoffer"  data-toggle="modal" data-target="#offerreject">
                            <div class="titleandfrom">
                              <div class="offer-header">offer 6</div>
                              <div class="offer-sub-header">By club</div>
                            </div>
                            <div class="iconarrow">
                              <i class="ti-arrow-right"></i>
                            </div>
                          </div>
                          <div class="siglerejectoffer" data-toggle="modal" data-target="#offerreject">
                            <div class="titleandfrom">
                              <div class="offer-header">offer 7</div>
                              <div class="offer-sub-header">By club</div>
                            </div>
                            <div class="iconarrow">
                              <i class="ti-arrow-right"></i>
                            </div>
                          </div>
                          <div class="siglerejectoffer"  data-toggle="modal" data-target="#offerreject">
                            <div class="titleandfrom">
                              <div class="offer-header">offer 8</div>
                              <div class="offer-sub-header">By club</div>
                            </div>
                            <div class="iconarrow">
                              <i class="ti-arrow-right"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12 backgroundbox">
                        <div class="pageheading">
                          <h5>pending offers</h5>
                        </div>
                        <div>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <div class="rejectofferlist">
                          <div class="siglerejectoffer" data-toggle="modal" data-target="#offerreject">
                            <div class="titleandfrom">
                              <div class="offer-header">offer 1</div>
                              <div class="offer-sub-header">By club</div>
                            </div>
                            <div class="iconarrow">
                              <i class="ti-arrow-right"></i>
                            </div>
                          </div>
                          <div class="siglerejectoffer"  data-toggle="modal" data-target="#offerreject">
                            <div class="titleandfrom">
                              <div class="offer-header">offer 2</div>
                              <div class="offer-sub-header">By club</div>
                            </div>
                            <div class="iconarrow">
                              <i class="ti-arrow-right"></i>
                            </div>
                          </div>
                          <div class="siglerejectoffer" data-toggle="modal" data-target="#offerreject">
                            <div class="titleandfrom">
                              <div class="offer-header">offer 3</div>
                              <div class="offer-sub-header">By club</div>
                            </div>
                            <div class="iconarrow">
                              <i class="ti-arrow-right"></i>
                            </div>
                          </div>
                          <div class="siglerejectoffer"  data-toggle="modal" data-target="#offerreject">
                            <div class="titleandfrom">
                              <div class="offer-header">offer 4</div>
                              <div class="offer-sub-header">By club</div>
                            </div>
                            <div class="iconarrow">
                              <i class="ti-arrow-right"></i>
                            </div>
                          </div>
                          <div class="siglerejectoffer" data-toggle="modal" data-target="#offerreject">
                            <div class="titleandfrom">
                              <div class="offer-header">offer 5</div>
                              <div class="offer-sub-header">By club</div>
                            </div>
                            <div class="iconarrow">
                              <i class="ti-arrow-right"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12 backgroundbox">
                        <div class="pageheading">
                          <h5>Agents Interested</h5>
                        </div>
                        <table class="commontable" width="100%">
						  <thead>
						    <tr>
						      <th>Agents name</th>
						      <th>Country</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <td>Abraham</td>
						      <td><img src="images/flag.jpg" width="30px"></td>
						    </tr>
						    <tr>
						      <td>Abraham</td>
						      <td><img src="images/flag.jpg" width="30px"></td>
						    </tr>
						    <tr>
						      <td>Abraham</td>
						      <td><img src="images/flag.jpg" width="30px"></td>
						    </tr>
						  </tbody>
						</table>
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

<div class="modal fade themepopup" id="transferhistory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="closemodel">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="titledivmodel">
          <h4 class="bluetitleh4 text-center">Transfer 1</h4>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="offerdetailsmain">
              <p class="offertitle">Offer Details</p>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
              <p class="offertitle">Provide by</p>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 