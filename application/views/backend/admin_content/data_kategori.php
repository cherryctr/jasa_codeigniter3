  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Kategori</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              
              <a href="<?php echo base_url('Admin/tambahKategori'); ?>" class="btn btn-success" value="">Tambah Kategori</a>
            </div>
            <!-- /.card-header -->

            <div class="card-body">
               <?php echo $this->session->flashdata('success'); ?>
               <?php echo $this->session->flashdata('delete'); ?>
               <?php echo $this->session->flashdata('edit'); ?>
              <div class="table">
                  <table id="example1" class="table table-bordered table-striped">

                <thead>

                <tr>
                  <th>No</th>
                  <th>Kategori</th>
                  <th>Aksi</th>
                  
                </tr>
                </thead>

                <tbody>
                   <?php 
                    $x=1;
                    foreach($kategori as $key) {
                ?>
                  <tr>
                    <td><?= $x ?></td>
                    <td><?= $key['kategori']; ?></td>
                  <td>
                    <a href="<?php echo base_url(); ?>Admin/UpdateKategori/<?php echo $key['id']; ?>" type="submit" class="btn btn-primary">Edit</a>
                    <a href="<?php echo base_url(); ?>Proses/deleteKategori/<?php echo $key['id']; ?>" type="submit" class="btn btn-danger">Delete</a>
                  </td>
                    
                  </tr>
               <?php $x++;
            } ?>
              
                </tbody>
                <tfoot>
               <tr>
                  <th>No</th>
                  <th>Kategori</th>
                  <th>Aksi</th>
                  
                </tr>
                </tfoot>
              </table>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>