  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.1
    </div>
    <strong>Copyright &copy; 2019-2020<a href="#">DIGITAL DESIGN</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>

<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<!-- page script -->
<script type="text/javascript">
$(document).ready(function () {
  $.validator.setDefaults({
    submitHandler: function () {
     // alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      kategori: {
        required: true,
        kategori: true,
      },

      role: {
        required: true,
        role: true,
      },

      name:{
        required: true,
        role: true,
      },

      username:{
        required: true,
        username: true,
      },

      password: {
        required: true,
        minlength: 5
      },

      deskripsi:{
        required:true
      },

      title:{
        required:true
      },

      harga:{
        required:true
      },

      terms: {
        required: true
      },

      gambar: {
        required: true
      },
    },
    messages: {
    role:{
      required:"Masukan Role nya terlebih dahulu",
    },

    username:{
      required:"Masukan Username terlebih dahulu",
    },

      title: {
        required: "Masukan title terlebih dahulu",
    
    },

    deskripsi: {
        required: "Masukan deskripsi terlebih dahulu",
    },

    gambar: {
        required: "Masukan gambar terlebih dahulu",
    },

    harga: {
        required: "Masukan harga terlebih dahulu",
    },
      kategori: {
        required: "Masukan kategori terlebih dahulu",
        // email: "Masukan email yang valid"
      },
      password: {
        required: "Masukan password terlebih dahulu",
        minlength: "Password harus 5 karakter atau lebih"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>


<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>

<script src="<?php echo base_url();?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
</body>
</html>
