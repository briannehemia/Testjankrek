<?php  
include 'header.php';
include 'adminsidebar.php';
?>

  <!-- =================CONTENT============================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>




    <!-- Main content -->
    <section class="content">

     <!-- Default box -->
     <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Gudang</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <a href="../umum/data-alat.php"><i class="fa fa-list"></i> Data Barang</span></a>
        </div>
        <div class="box-body">
        <a href="../umum/data-riwayat-pinjaman.php"><i class="fa fa-list"></i> Data Riwayat Pinjaman</span></a>
        </div>
        <div class="box-body">
        <a href="../umum/data-alat-rusak.php"><i class="fa fa-list"></i> Data Barang Rusak</span></a>
        </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php 
include 'footer.php';
 ?>