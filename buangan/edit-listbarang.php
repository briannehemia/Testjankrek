 <?php  
 include 'header.php';
 include 'adminsidebar.php';
?>

  <!-- ====================== CONTENT ============================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Forms</a></li>
                <li class="active">General Elements</li>
            </ol>
        </section>
    
        <section class="content">
    <div class="row">
        <div class="col-lg-7">
            <div class="box box-primary">
                <div class="box-header with-border">
                 <h2 class="box-title"><b>Data Bahan</b>
                     <small>'Edit Data Bahan'</small>
                </h2>
                </div>
             <!-- form start --> 

                <?php
                    require '../db_gudang/mdl_listbarang.php';
                    $conn = new mdllistbarang();
                    $tampil = $conn->edtflistbarang($_GET['postid']);
                    while($fetch = $tampil->fetch_array()){ 
                ?>                    
                    
                <form role="form" action="../controller_gudang/listbarangcontroller.php?action=edtlistbarang" Method="POST">
                <div class="box-body">
                    <input type="hidden" name="editid" value="<?php echo $fetch['id_listbarang'] ?>">
                     

                     <label for="forid_listbarang">ID List Bahan</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input name="editid_listbarang" type="id_listbarang" class="form-control" id="forid_listbarang" value="<?php echo $fetch['id_listbarang']?>" placeholder="Enter ID List Bahan" >
                    </div>
                     

                     <label for="fornama_barang">Nama Bahan</label>
                     <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input name="editnama_barang" type="text" class="form-control" id="fornama_barang" value="<?php echo $fetch['nama_barang'] ?>" placeholder="Enter Nama Bahan">
                    </div>
                    

                    <?php
                    }
                    ?>
                   
                </div>
              <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                    </form>
        
          </div>
        </div> 
    
    
    

    <!-- /.END ROW DISINI BANGSAT -->
    </div>
    <!-- /.END Section CONTENT -->
    </section>

  </div>
  <!-- /.content-wrapper -->


<?php 
include 'footer.php';
 ?>