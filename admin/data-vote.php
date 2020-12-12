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
        <small>Data Voting</small>
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
          <h3 class="box-title">Data Voting</h3>
        </div>

        <div class="box-body" >
        
        
           <table  id="table1" class="display table table-border table-hover">
                <thead>
                <tr>
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
					require '../db/mdl_vote.php';
					$conn = new mdlvote();
					$read = $conn->read();
					while($fetch = $read->fetch_array()){ 
				?>
                <tr>
                  <input type="hidden" name="editid" value="<?php echo $fetch['id_vote'] ?>">
                  <td><?php echo $fetch['masalah']?>
                      <input name="editmasalah" type="hidden" class="form-control" id="votemasalah" value="<?php echo $fetch['masalah']?>" >
                  </td>
                  <td><?php echo $fetch['detail_masalah']?>
                    <input name="editdetailmasalah" type="hidden" class="form-control" id="votedetailmasalah" value="<?php echo $fetch['detail_masalah']?>" >
                  </td>
                  <td><?php echo $fetch['saran']?>
                    <input name="editsaran" type="hidden" class="form-control" id="votesaran" value="<?php echo $fetch['saran']?>" >
                  </td>

                  <td>
                    <a class="btn btn-danger" href="../controller/votecontroller.php?postid=<?php echo $fetch['id_vote']; ?>&action=hapus-bro"><i class="fa fa-trash"></i></a>
                  </td>
                  <td>
                    <a class="btn btn-info" href="edit-masalah.php?postid=<?php echo $fetch['id_vote']; ?>"><i class="fa fa-edit"></i></a>
                  </td>
                  <td><?php echo $fetch['vote']?></td>
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
