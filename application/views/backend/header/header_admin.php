<?php 
  if(!isset($_SESSION['username']))
{
  redirect(site_url().'Auth');
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/summernote/summernote-bs4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
 <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
   
  </nav>
  <!-- /.navbar -->
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url(); ?>assets/index3.html" class="brand-link">
      <img src="<?php echo base_url(); ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin | Digital Design</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?php echo base_url(); ?>assets/#" class="d-block"><?php if($this->session->has_userdata("username")) { ?>
            <?php echo $this->session->userdata("username"); ?>
            <?php } ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- cek user -->
          <?php if ($this->session->userdata('level') == 1) {  ?>
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo base_url(); ?>Admin" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              
              </p>
            </a>
            
          </li>

           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Component Layout
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
           <ul class="nav nav-treeview">
              <li class="nav-item">
                 <a href="<?php echo base_url('admin/headerData');  ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Header</p>
                </a>
              </li>

              <li class="nav-item">
                 <a href="<?php echo base_url('admin/contactData');  ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>contact</p>
                </a>
              </li>

               <li class="nav-item">
                 <a href="<?php echo base_url('admin/cara_order');  ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>cara Order</p>
                </a>
              </li>
             
            </ul>
          </li>
        
          <li class="nav-item">
            <a href="<?php echo base_url('admin/data_kategori'); ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data kategori
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="<?php echo base_url('admin/Produk_data'); ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Produk
              </p>
            </a>
          </li>


           <li class="nav-item">
            <a href="<?php echo base_url('admin/UserData'); ?>" class="nav-link">
              <i class="nav-icon fa fa-user-circle-o"></i>
              <p>
                Data User
              </p>
            </a>
          </li>


          

          <li class="nav-item">
            <a href="<?php echo base_url('auth/logout'); ?>" class="nav-link">
              <i class="nav-icon fa fa-sign-out"></i>
              <p>
                Log Out
              
              </p>
            </a>
            
          </li>


        <?php } ?>

        <?php if ($this->session->userdata('level') == 2) {  ?>
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
             <a href="<?php echo base_url('admin'); ?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              
              </p>
            </a>
            
          </li>
         <li class="nav-item">
            <a href="<?php echo base_url('admin/data_kategori'); ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data kategori
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="<?php echo base_url('admin/Produk_data'); ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Produk
              </p>
            </a>
          </li>

        
        

          <li class="nav-item">
            <a href="<?php echo base_url('auth/logout'); ?>" class="nav-link">
              <i class="nav-icon fa fa-sign-out"></i>
              <p>
                Log Out
              
              </p>
            </a>
            
          </li>
        <?php } ?>
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>