
<link rel="stylesheet" href="<?php echo base_url(); ?>adminassets/AdminLTE-master/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<script src="<?php echo base_url(); ?>adminassets/AdminLTE-master/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>adminassets/AdminLTE-master/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php 
        if($this->session->flashdata('success') != ''){ ?>
                <div class="alert-success alert alert-dismissible">
                    <?php echo $this->session->flashdata('success'); ?>
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                </div>
        <?php } ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Player's Name</th>
                  <th>Email</th>
                  <th>Country</th>
                  <th>Salary</th>
                  <th>User Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  if(!empty($players)){ $i=0;
                    foreach ($players as $player) { $i++;
                    ?>
                    <tr>
                        <td>
                            <?php echo $i; ?>
                        </td>
                        <td>
                            <?php echo $player->first_name.' '.$player->last_name; ?>
                        </td>
                        <td>
                            <?php echo $player->email; ?>
                        </td>
                        <td>
                            <?php echo $player->country; ?>
                        </td>
                        <td>
                            <?php echo $player->salary; ?>
                        </td>
                        <td>
                            <?php if($player->status == '0'){
                            ?>
                            <a href="<?php echo base_url().'admin/User_master/status/'.$player->user_id.'/'.$player->status.'/player'; ?>"><span class="label label-primary">Active</span></a>
                            <?php
                             }
                            else{
                            ?>
                                <a href="<?php echo base_url().'admin/User_master/status/'.$player->user_id.'/'.$player->status.'/player'; ?>"><span class="label label-danger">Unactive</span></a>
                            <?php
                             }
                             ?>

                        </td>
                        <td>
                            <a href="<?php echo base_url().'admin/edit-player/'.$player->user_id; ?>"><i class="fa fa-fw fa-pencil"></i></a>
                            <a href="<?php echo base_url().'admin/User_master/edit_player/'.$player->user_id; ?>"><i class="fa fa-fw fa-eye"></i></a>
                            <a href="<?php echo base_url().'admin/User_master/delete_player/'.$player->user_id; ?>"><i class="fa fa-fw fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php
                    }
                  }
                   ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  