  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Produk</h1>
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
              <a href="<?php echo base_url('Admin/tambahProduk'); ?>" class="btn btn-success" value="">Tambah Kategori</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <?php echo $this->session->flashdata('success'); ?>
              <?php echo $this->session->flashdata('delete'); ?>
              <?php echo $this->session->flashdata('edit'); ?>
               <div class="table-responsive">
                   <table id="example1" class="table table-bordered table-striped">
             
                <thead>
                <tr>
                  <th>No</th>
                  <th>gambar</th>
                  <th>title</th>
                  <th>Kategori</th>
                  
                  <th>deskripsi</th>
                  <th>harga</th>
                  <th>diskon</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    $x=1;
                    foreach($adminproduk as $key) {
                ?>
                <tr>
                  <td><?php echo $x; ?></td>
                  <td><img src="<?php echo base_url('assets/images/'); ?><?php echo $key['gambar']; ?>" class="img-responsive" style="height:100px;">
                  </td>
                  
                  <td><?php echo $key['title']; ?></td>
                  <td><?php echo $key['kategori']; ?></td>
                  <td><?php echo $key['deskripsi']; ?></td>
                  <td><?php echo $key['harga']; ?></td>
                  
                  <td><?php echo $key['diskon']; ?>%</td>
                  <td>
                    <a href="<?php echo base_url(); ?>Admin/UpdateProduk/<?php echo $key['id']; ?>" type="submit" class="btn btn-primary">Edit</a>
                    <a href="<?php echo base_url(); ?>Proses/deleteProduk/<?php echo $key['id']; ?>" type="submit" class="btn btn-danger">Delete</a>
                  </td>
                  
                </tr>
                <?php $x++;
            } ?>
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