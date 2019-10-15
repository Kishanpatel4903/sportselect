<script type="text/javascript">
  jQuery(function() {
      
    jQuery.validator.setDefaults({
      debug: true,
      success: "valid"
    });
 jQuery("#playerreport").validate({
    // Specify validation rules
    rules: {
      reporternamer: {required:true},
      usertype: {required:true}, 
      relation: {required:true}, 
      interactiondate: {required:true},
      //comment: {required:true, },
       
        
    },
    // Specify validation error messages
    messages: {
      reportername: {required:"Please enter reporter name."},
      usertype: {required:"Please select usertype."},
      relation: {required:"Please select relation."},
 
      interactiondate: {required:"Please select interaction date."},
      //comment: {required:"Please enter comment." },
        
    },
    // errorPlacement: function(error, element) {
    //     if(element.attr("name") == 'type'){
    //         element.parent().parent().after(error);
    //     }
    //     else if(element.attr("name") == 'sporttype'){
    //         element.parent().parent().after(error); 
    //     }
    //     else if(element.attr("name") == 'position'){
    //         element.parent().parent().after(error); 
    //     }
    //     else if(element.attr("name") == 'tier'){
    //         element.parent().parent().after(error); 
    //     }
    //     else if(element.attr("name") == 'country'){
    //         element.parent().parent().parent().after(error); 
    //     }
    //     else{
    //         element.parent().after(error);
    //     }
    // },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {

       
      form.submit();
     
    }
  });
});
</script>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="container">
        <div class="row">
          
        
    <div class="col-sm-12 text-right mt-3">
      
    </div>
    <div class="col-md-12 backgroundbox">
      <?php //echo "<pre>"; print_r($accepted); echo "</pre>";
if(!empty($this->session->flashdata('user_msg'))){
?>
   <div class="alert alert-success">
     <strong>Success!</strong> <?php echo $this->session->flashdata('user_msg'); ?>
   </div>
<?php } ?>
      <div class="pageheading">
              <h5>Report</h5>
            
            <?php
            if($this->session->userdata("usertype") != '1'){

             ?>  
              <a class="btn btn-sm btn-secondary float-right" data-toggle="modal" data-target="#addreport" style="color: #fff;"><i class="ti-plus"></i> Report</a>
            <?php } ?>
      </div>
      <table class="commontable mt-3">
        <thead>
          <tr>
            <th>Name (of reporter)</th>
            <th>User type</th>
            <th>Relationships</th>
            <th>date of interraction</th>
            <th>Date of report</th>
            <th>comments</th>
          </tr>
        </thead>
        <tbody>
            <?php
            if(!empty($preport)){
              foreach ($preport as $report) {
              ?>
                <tr>
                     <td><?php echo $report->_ReporterName; ?></td>
                     <td><?php echo $report->_UserType; ?></td>
                     <td><?php echo $report->_Relation; ?></td>
                     <td><?php echo date('d/m/Y', strtotime($report->_InteractionDate)); ?></td>
                     <td><?php echo date('d/m/Y', strtotime($report->_Created)); ?></td>
                     <td><?php echo $report->_Comments; ?></td>
                </tr>
            <?php  
              }}else{
                ?>
                <tr>
                  <td colspan="6">No reports found.</td>
                </tr>
                <?php } ?>
             
        </tbody>
      </table>
    </div>
    </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade themepopup" id="addreport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="closemodel">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <div class="titledivmodel">
        <h4 class="bluetitleh4 text-center">Report</h4>
      </div>
      <div class="row">
       <div class="col-md-12">
        <?php //echo $player; exit; ?>
         <form action="<?php echo base_url('Myprofile/player_report/'.$player); ?>" id="playerreport" method="post" xnovalidate="true">
                 
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">NAME (OF REPORTER)</label>
                        <input name="reportername" class="form-control" required="required" type="text">
                        <div class="help-block form-text with-errors form-control-feedback"></div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">USER TYPE</label>
                        <select name="usertype" class="form-control">
                          <option value="">Select</option>
                          <option value="club official">club official</option>
                          <option value="Agent">Agent</option>
                          <option value="Player">Player</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">RELATIONSHIPS</label>
                        <select name="relation" class="form-control">
                          <option value="">Select</option>
                          <option value="club athlete">club athlete</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">DATE OF INTERRACTION</label>
                        <input name="interactiondate" class="form-control" required="required" type="date">
                        <div class="help-block form-text with-errors form-control-feedback"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <!-- <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">DATE OF REPORT</label>
                        <input  class="form-control" required="required" type="date">
                        <div class="help-block form-text with-errors form-control-feedback"></div>
                      </div>
                    </div> -->
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="">COMMENTS</label>
                        <textarea name="comment" class="form-control" ></textarea>
                        <div class="invalid-feedback"></div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                   
                      <button class="btn btn-primary disabled" type="submit"> Submit</button>
                    
                  </div>
                </form>
       </div>
        
      </div>
      
      </div>

    </div>
  </div>
</div>


<?php /*include('footer-link.php'); ?>
<?php include('footer.php');*/ ?>