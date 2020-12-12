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
          <h3 class="box-title">Laporan <small>Bulan <?php echo date('F', strtotime($_GET['postid']));  ?></small></h3>
        </div>
        <form style ="margin-right:10px;" class="pull-right" method="GET"> 
          <select name="postid">
              <option value="">Bulan </option>
              <option value="jan">Januari</option>
              <option value="feb">Februari</option>
              <option value="mar">Maret</option>
              <option value="apr">April</option>
              <option value="mai">Mei</option>
              <option value="jun">Juni</option>
              <option value="jul">Juli</option>
              <option value="aug">Agustus</option>
              <option value="sep">September</option>
              <option value="oct">Oktober</option>
              <option value="nov">November</option>
              <option value="dec">Desember</option>
          </select>
              <input align="justify" style="width:75px; height:22px;" type="text" name="postyear">
        <input type="submit" value="submit">
        </form>
        <br/><br/>
        <div class="box-body">
           <table id="table1" class="display table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama Pengeluaran</th>
                  <th>Jumlah pengeluaran</th>
                  <th>tanggal</th>
                  <th>keterangan</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
        <?php
					require '../db/modellaporan.php';
					$conn = new modellaporan();
					$read = $conn->viewpemasukan($_GET['postid']);
					while($fetch = $read->fetch_array()){ 
          $decodgolongangaji= base64_decode($fetch['namapengeluaran']);
          $formatuang =  'Rp ' .number_format($fetch['jumlahpengeluaran'], '2', ',', '.');
          $formatdate = date('d F y', strtotime($fetch['tanggal']));
				?>
					<tr>
						<td><?php echo $decodgolongangaji?></td>
            <td><?php echo $formatuang?></td>
						<td><?php echo $formatdate ?></td>
            <td><?php echo $fetch['keterangan']?></td>
						<td>
          
            </td>

        	</tr>
				<?php
					}
				?>	
            </tbody>
          </table>
          <br/>
        <p style="margin-left:-100px;" class="pull-right">Total Pengeluaran Bulan ini: <?php $conn->sumpengeluaran($_GET['postid']); ?></p>
        
        <br/>
              <br/>
              <b><p style="margin-" class="">Mengetahui,</b><br>
              Ketua Divisi Keuangan</p>
              <br><br><br><br><br>
              <p class="">(..........................................)</p>
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
<!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script> -->
<!-- <script type="text/javascript">
  $(document).ready(function(){
    $("#table1").DataTable();
  });
</script> -->