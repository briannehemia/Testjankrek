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
        Analisa
        <small>Data Permasalahan</small>
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
          <h3 class="box-title">Data Masalah</h3>
        </div>

        <div class="box-body" >
       
        
           <table  id="table1" class="display table table-border table-hover">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  <th>Jenis Kelamin</th>
                  <th>Masalah</th>
                  <th>Detail Masalah</th>
                  <th>Saran Solusi</th>
                  <th>Hapus</th>
                  <th>Edit</th>
                  <th>Vote</th>
                </tr>
                </thead>
                <tbody>
                <?php
					require '../db/mdl_masalah.php';
					$conn = new mdlmasalah();
					$read = $conn->read();
					while($fetch = $read->fetch_array()){ 
				?>
                <tr>
						      <td><?php echo $fetch['nama']?></td>
						      <td><?php echo $fetch['email']?></td>
                  <td><?php echo $fetch['alamat']?></td>
                  <td><?php echo $fetch['jenis_kelamin']?></td>
                  <td><?php echo $fetch['masalah']?></td>
                  <td><?php echo $fetch['detail_masalah']?></td>
                  <td><?php echo $fetch['saran']?></td>
                  <td>
                    <a class="btn btn-danger" href="../controller/surveycontroller.php?postid=<?php echo $fetch['id_masalah']; ?>&action=hapus-bro"><i class="fa fa-trash"></i></a>
                  </td>
                  <td>
                    <a class="btn btn-info" href="edit-masalah.php?postid=<?php echo $fetch['id_masalah']; ?>"><i class="fa fa-edit"></i></a>
                  </td>
                  <td><div class="btn-group">
                    <a class="btn btn-success" href="edit-masalah.php?postid=<?php echo $fetch['id_masalah']; ?>"><i class="fa  fa-check"></i></a>
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                    </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="data-vote.php?postid=<?php echo $fetch['id_masalah']; ?>">PRODUK 1</a></li>
                        <li class="divider"></li>
                        <li><a href="data-vote.php?postid=<?php echo $fetch['id_masalah']; ?>">PRODUK 2</a></li>
                        <li class="divider"></li>
                        <li><a href="data-vote.php?postid=<?php echo $fetch['id_masalah']; ?>">PRODUK 3</a></li>
                     </ul></div>
                  </td>
					      </tr>
                <?php
					          }
				        ?>
                </tbody>
              </table>
        
            </div>
            <input type="button" value="Download Laporan" onclick="location.href='laporan-masalah.php'"></input>
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
