 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Validation</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Edit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
              <?php echo $this->session->flashdata('pesan'); ?>
                
              <form role="form" id="quickForm" action="<?php echo base_url(); ?>Admin/updateUser/<?php echo $detail->user_id; ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                  <label for="sel1">Pilih Role :</label>
                  <select class="form-control" id="sel1" name="level">
                   <!-- <option value=""> ----- Pilih Role -----</option> -->
                   <?php foreach ($dataadmin as $key) {?>
                       <?php if($detail->level==$key['level']){ ?>
                      <option value="<?php echo $key['level']; ?>" selected><?php echo $key['role']; ?></option>
                    <?php }else{ ?>
                      <option value="<?php echo $key['level']; ?>"><?php echo $key['role']; ?></option>
                    <?php } 
                            }?>
                  <!--  -->
                    
                  </select>
                </div>

                <div class="form-group">
                  <label>Username</label>

                  <div class="input-group">
                    <input type="text" name="username" class="form-control" placeholder="Input username" value="<?php echo $detail->username; ?>">
                  </div>
                  <!-- /.input group -->
                </div>


                <div class="form-group">
                  <label>Password</label>

                  <div class="input-group">
                    <input type="password" name="current_password" class="form-control" placeholder="Input Password">
                  </div>

                  <?= form_error('current_password','<p class="text-danger">','</p>'); ?>
                  
                  <!-- /.input group -->
                </div>

                 <div class="form-group">
                  <label>New Password</label>

                  <div class="input-group">
                    <input type="password" name="new_password1" class="form-control" placeholder="Input Password">
                  </div>
                  <?= form_error('new_password1','<p class="text-danger">','</p>'); ?>

                  
                  <!-- /.input group -->
                </div>

                 <div class="form-group">
                  <label>Confirm Password</label>

                  <div class="input-group">
                    <input type="password" name="new_password2" class="form-control" placeholder="Input Password">
                  </div>
                   <?= form_error('new_password2','<p class="text-danger">','</p>'); ?>
                 
                  
                  <!-- /.input group -->
                </div>
               
                
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
    $(document).ready(function () {
      $("[name='quickForm']").validate({
           rules: {
            deskripsi: {
              required: true,
              deskripsi: true,
            
          },

          messages: {
              deskripsi: {
                required: "Masukan deskripsi terlebih dahulu",
            },
          }
      })
    }

    
  </script>