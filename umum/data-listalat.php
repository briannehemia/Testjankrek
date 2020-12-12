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
        gudang
        <small>Data Alat</small>
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
       <a href="../gudang/input-listalat.php"><i class="fa fa-edit"></i> Masukan Data Alat</span></a>
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data Alat</h3>
        </div>

        <div class="box-body" >
       
        
           <table  id="table1" class="display table table-border table-hover">
                <thead>
                <tr>
                  <th>ID List Alat</th>
                  <th>Nama Alat</th>
                  <th>Hapus</th>
                  <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                <?php
					require '../db_gudang/mdl_listalat.php';
					$conn = new mdllistalat();
					$read = $conn->read();
					while($fetch = $read->fetch_array()){ 
				?>
                <tr>

                  <td><?php echo $fetch['id_listalat']?></td>
						      <td><?php echo $fetch['nama_alat']?></td>
                  <td>
                    <a class="btn btn-danger" href="../controller_gudang/listalatcontroller.php?postid=<?php echo $fetch['id_listalat']; ?>&action=hapus-bro"><i class="fa fa-trash"></i></a>
                  </td>
                  <td>
                    <a class="btn btn-info" href="edit-listalat.php?postid=<?php echo $fetch['id_listalat']; ?>"><i class="fa fa-edit"></i></a>
                  </td>
                  
					      </tr>
                <?php
					          }
				        ?>
                </tbody>
              </table>
        
            </div>
            <input type="button" value="Download Laporan" onclick="location.href='print-listalat.php'"></input>
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
