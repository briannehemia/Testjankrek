<?php  
include 'header.php';
include 'adminsidebar.php';
?>

 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <!-- =================CONTENT============================== -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Create Produk
        <small>Technical</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Nama Produk</th>
                    <th>Nama Pekerja</th>
                    <th>Detail Progres</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="pages/examples/invoice.html"><span class="label label-info">Kreasi Malang</span></a></td>
                    <td>Aga</td>
                    <td><a href="pages/examples/invoice.html"><span class="label label-info">Open</span></a>
                      <a href="pages/examples/invoice.html"><span class="label label-info">Edit</span></a></td>
                    <td>
                      <div class="progress sm">
                      <div class="progress-bar progress-bar-blue" style="width: 50%;"></div>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td><a href="pages/examples/invoice.html"><span class="label label-info">Soqola</span></a></td>
                    <td>Brian</td>
                    <td><a href="pages/examples/invoice.html"><span class="label label-info">Open</span></a>
                      <a href="pages/examples/invoice.html"><span class="label label-info">Edit</span></a></td>
                    <td>
                      <div class="progress sm">
                      <div class="progress-bar progress-bar-blue" style="width: 90%;"></div>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td><a href="pages/examples/invoice.html"><span class="label label-info">Soqola</span></a></td>
                    <td>Barda</td>
                    <td><a href="pages/examples/invoice.html"><span class="label label-info">Open</span></a>
                      <a href="pages/examples/invoice.html"><span class="label label-info">Edit</span></a></td>
                    <td>
                      <div class="progress sm">
                      <div class="progress-bar progress-bar-blue" style="width: 20%;"></div>
                      </div>
                    </td>
                  </tr>
                 
                  </tbody>
                </table>
              </div>

              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php 
include 'footer.php';

 ?>

 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
 <script type="text/javascript">
  $(document).ready(function(){
    $("#table1").DataTable();
  });
</script>
