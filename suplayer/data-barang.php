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
        Suplayer
        <small>Data barang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
       <a href="../suplayer/input-barang.php"><i class="fa fa-edit"></i> Masukan Data Bahan</span></a>
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data barang</h3>
        </div>

        <div class="box-body" >
       
        
           <table  id="table1" class="display table table-border table-hover">
                <thead>
                <tr>
                  <th>Nama Barang</th>
                  <th>Jumlah</th>
                  <th>Harga</th>
                  <th>Hapus</th>
                  <th>Edit</th>
                  <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                <?php
					require '../db_suplayer/mdl_barang.php';
					$conn = new mdlbarang();
					$read = $conn->read();
					while($fetch = $read->fetch_array()){ 
				?>
                <tr>
						      <td><?php echo $fetch['nama_barang']?></td>
						      <td><?php echo $fetch['jumlah']?></td>
                  <td><?php echo $fetch['harga']?></td>
                  <td>
                    <a class="btn btn-danger" href="../controller_suplayer/barangcontroller.php?postid=<?php echo $fetch['id_barangsup']; ?>&action=hapus-bro"><i class="fa fa-trash"></i></a>
                  </td>
                  <td>
                    <a class="btn btn-info" href="edit-barang.php?postid=<?php echo $fetch['id_barangsup']; ?>"><i class="fa fa-edit"></i></a>
                  </td>
                  <td>
                    <a class="btn btn-info" href="#"><i class="fa fa-list"></i></a>
                  </td>
                  
					      </tr>
                <?php
					          }
				        ?>
                </tbody>
              </table>
        
            </div>
            <input type="button" value="Download Laporan" onclick="location.href='print-barang.php'"></input>
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
