 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Kategori</h1>
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
                <h3 class="card-title">Form Tambah</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" action="<?php echo base_url(); ?>Proses/TambahUser" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                  <label for="sel1">Pilih Role :</label>
                  <select class="form-control" id="sel1" name="level">
                   <option value=""> ----- Pilih Role -----</option>
                    <?php foreach ($dataadmin as $key) {?>
                      <option value="<?php echo $key['level']; ?>"><?php echo $key['role']; ?></option>
                    <?php } ?>
                    
                  </select>
                </div>

                <div class="form-group">
                  <label>Username</label>

                  <div class="input-group">
                    <input type="text" name="username" class="form-control" value="" placeholder="Input username">
                  </div>
                  <!-- /.input group -->
                </div>


                <div class="form-group">
                  <label>Password</label>

                  <div class="input-group">
                    <input type="password" name="password" class="form-control" value="" placeholder="Input Password">

                  </div>
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