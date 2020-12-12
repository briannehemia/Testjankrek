<?php 
include 'header.php';
$page= 'Logdata';
include 'adminsidebar.php';
?>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
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
          <h3 class="box-title">Daftar Calon Pelamar</h3>
        </div>

        <div class="box-body" >

           <table  id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>User/Pelakau</th>
                  <th>Action</th>
                  <th>Tanggal</th>
                  <th >Keterangan</th>
                  <th></th>
                  
                </tr>
                </thead>
                <tbody>
                
                <?php
                    require_once '../db/mdl_log.php';
                    $conn = new mdllog();
					$read = $conn->readlog();
					while($fetch = $read->fetch_array()){ 
			    ?>
                
                <tr>
                <td><?php echo $fetch['user']?></td>
				        <td><?php echo $fetch['action']?></td>
				        <td><?php echo $fetch['tanggal']?></td>
                <td><?php echo $fetch['keterangan']?></td>
                <!-- <td>
                    <a class="btn btn-danger" href="../controller/jobscontroller.php?postid=<?php //echo $fetch['idpendaftar'];?>&action=delfadmin"><i class="fa fa-trash"></i></a> 
                    <a class="btn btn-info" href="editpelamar.php?postid=<?php //echo $fetch['idpendaftar']; ?>"><i style="width:12px;" class="fa fa-edit"></i></a>
                </td> -->
				</tr>

                <?php
				}
				?>

                </tbody>
              </table>
        
            </div>
        <!-- /.box-body -->
        <!-- <div class="box-footer">
        <input type="button" value="download disini bang" onclick="location.href='#'">
        </div> -->
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php 
include '../admin/footer.php';
 ?>

 <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
 <script type="text/javascript">
  $(document).ready(function(){
    $("#table1").DataTable();
  });
</script> -->

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
