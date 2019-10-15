<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        General Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>
<?php //echo "<pre>"; print_r($player); ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="editplayer" action="<?php echo base_url().'admin/edit-player/'.$player->user_id; ?>" method="post" 
                enctype= "multipart/form-data">
              <div class="box-body">
                <div class="col-md-6">
                <div class="form-group">
                  <label for="firstname">First Name</label>
                  <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" value="<?php echo $player->first_name; ?>">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="lastname">Last Name</label>
                  <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" value="<?php echo $player->last_name; ?>">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" name="email"  id="email" placeholder="Email" value="<?php echo $player->email; ?>">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="height">Height</label>
                  <input type="text" class="form-control" id="height" name="height" placeholder="Height" value="<?php echo $player->height; ?>">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="weight">Weight</label>
                  <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight" value="<?php echo $player->weight; ?>">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="country">Country</label>
                  <input type="text" class="form-control" id="country" name="country" placeholder="Country" value="<?php echo $player->country; ?>">
                </div>
                </div>
                <div class="col-md-3">
                <div class="form-group">
                  <label for="profile">Profile</label>
                  <input type="file" name="profile" id="profile" />
                  <input type="hidden" id="hiddenimg" name="hiddenimg" value="<?php echo $player->profile_img; ?>">
                  <p class="help-block">Example block-level help text here.</p>
                </div>
                </div>
                <div class="col-md-3">
                  <img src="<?php echo base_url().'uploads/player/user_profile/'.$player->profile_img; ?>" height="auto" width="90px;">
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="language">User's Language</label>
                  <input type="text" class="form-control" name="language" id="language" placeholder="User's Language" value="<?php echo $player->user_language; ?>">
                </div>
                </div>
                 
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          <!-- /.box -->

          <!-- /.box -->

          <!-- Input addon -->
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
       
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>