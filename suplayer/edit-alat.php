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
                 <h2 class="box-title"><b>Data Alat</b>
                     <small>'Edit Data Alat'</small>
                </h2>
                </div>
             <!-- form start --> 

                <?php
                    require '../db_suplayer/mdl_alat.php';
                    $conn = new mdlalat();
                    $tampil = $conn->edtfalat($_GET['postid']);
                    while($fetch = $tampil->fetch_array()){ 
                ?>                    
                    
                <form role="form" action="../controller_suplayer/alatcontroller.php?action=edtalat" Method="POST">
                <div class="box-body">
                    <input type="hidden" name="editid" value="<?php echo $fetch['id_alat'] ?>">
                     
                     <label for="fornama">ID List Alat</label>
                     <div class="form-group input-group">
                      <select style="width : 400px;" name="editid_listalat" class="form-control">
                        <?php
                        
                        $read = $conn->drolistalat();
                        while ($fetch = $read->fetch_array()){
                          ?>
                          <option value="<?php echo $fetch['id_listalat']?>">
                            <?php echo $fetch['id_listalat'].'  ' ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>

                     <label for="fornama">Nama Alat</label>
                     <div class="form-group input-group">
                      <select style="width : 400px;" name="editnama_alat" class="form-control">
                        <?php
                        $read = $conn->drolistalat();
                        while ($fetch = $read->fetch_array()){
                          ?>
                          <option value="<?php echo $fetch['id_listalat']?>">
                            <?php echo $fetch['nama_alat'].'  ' ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>

                    <label for="forjumlah">Jumlah</label>
                    <div class="form-group input-group">
                        <input name="editjumlah" type="jumlah" class="form-control" id="forjumlah" value="<?php echo $fetch['jumlah']?>" placeholder="Enter Jumlah" >
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input name="editharga" type="jumlah" class="form-control" id="forjumlah" value="<?php echo $fetch['harga']?>" placeholder="Enter Harga" >
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