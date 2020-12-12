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
                 <h2 class="box-title"><b>Form Pengembalian</b>
                     <small>'Masukan Data Pengembalian Alat Rusak'</small>
                </h2>
                </div>

                <?php
                    require '../db_gudang/mdl_pengembalian.php';
                    $conn = new mdlalatrusak();
                    
                    $tampil = $conn->getDataPengambalian($_GET['postid']);
                    while($fetch = $tampil->fetch_array()){ 
                ?>

             <!-- form start -->
                    <form role="form" action="../controller_gudang/alatcontroller.php?action=pengembalian" Method="POST">
                <div class="box-body">
                <input type="" name="posttanggalperbaikan" value="<?php echo $fetch['tanggal_perbaikan'] ?>"></input>
                <input type="hidden" name="postidalat" value="<?php echo $fetch['id_alat']?>">
                <input type="hidden" name="postidalatrusak" value="<?php echo $fetch['id_alat_rusak']?>">
                <input type="hidden" name="postjumlahalatrusak" value="<?php echo $fetch['jumlah']?>">
                            <?php
                                $tampil2 = $conn->getDataAlat($fetch['id_alat']);
                                while($fetch2 = $tampil2->fetch_array()){ 
                            ?>   
                                <input type="hidden" name="postjumlahalat" value="<?php echo $fetch2['jumlah']?>">
                            <?php
                            }
                            ?>
                     <label for="fornama">Nama Alat</label>
                     <div class="form-group input-group">
                        <!-- <span class="input-group-addon"><i class="fa fa-user"></i></span> -->
                        <input style="width:350px;" name="postnama_alat" type="text" value="<?php echo $fetch['nama_alat'] ?>" class="form-control" id="fornama_alat" readonly placeholder="Enter Nama Alat">
                    </div>

                    <div class="form-group inline-d">
                        <label>Penanggungjawab</label>
                     <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input name="postpenanggungjawab" value="<?php echo $fetch['penanggungjawab'] ?>" style="resize: none;" class="form-control" rows="3" placeholder="Enter Penanggungjawab" readonly></input>
                    </div>

                    <label for="forjumlah">Jumlah barang yg dikembalikan</label>
                    <div class="form-group input-group">
                        <!-- <span class="input-group-addon"><i class="fa fa-envelope"></i></span> -->
                        <input name="postjumlah" type="jumlah" class="form-control" id="forjumlah" placeholder="Masukkan Jumlah" >
                    </div>

                </div>
              <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                    </form>
            <?php
            }
            ?>
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