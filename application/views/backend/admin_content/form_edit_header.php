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
             <form action="<?php echo base_url(); ?>Proses/editHeaderSubmit/<?php echo $detail->id; ?>" method="post" enctype="multipart/form-data">
             <input type="hidden" name="id" id="id" value="<?php echo $detail->id; ?>">
                <div class="card-body">
                

                <div class="form-group">
                  <label>Title</label>

                  <div class="input-group">
                    <input type="text" name="title" class="form-control"  placeholder="Input Title" value="<?php echo $detail->title; ?>">
                  </div>
                  <!-- /.input group -->
                </div>

                

                 <div class="form-group">
                  <label>subject</label>

                  <div class="input-group">
                    <input type="text" name="subject" class="form-control"  placeholder="Input Subject" value="<?php echo $detail->subject; ?>">
                  </div>
                  <p>* Isi nomor telephone atau email ya..</p>
                </div>

               

                
                 <div class="form-group">
                   <img src="<?php echo base_url(); ?>assets/images/<?php echo $detail->gambar; ?>" class="img-responsive" style="height:100px;"><br>
                    <input name="gambar_old" type="hidden" class="form-control-file" id="exampleFormControlFile1" value="<?php echo $detail->gambar; ?>"><br>
                    
                    <label for="exampleFormControlFile1">Klik untuk memilih gambar</label>
                    <input name="gambar" type="file" class="form-control-file" id="exampleFormControlFile1">
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