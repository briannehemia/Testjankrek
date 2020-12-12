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
                     <small>'Masukan Data Alat'</small>
                </h2>
                </div>
             <!-- form start -->

             <?php
                    require '../db_gudang/mdl_alatrusak.php';
                    $conn = new mdlalatrusak();
                    $tampil = $conn->editalat($_GET['postid']);
                    while($fetch = $tampil->fetch_array()){ 
                ?>   
                
                    <form role="form" action="../controller_gudang/alatrusakcontroller.php?action=addalat" Method="POST">
                <div class="box-body">
                <input type="hidden" name="postid" value="<?php echo $fetch['id_alat'] ?>">
                     <label for="fornama">Nama Alat</label>
                     <div class="form-group input-group">
                        <!-- <span class="input-group-addon"><i class="fa fa-user"></i></span> -->
                        <input readonly name="postnama_alat" type="text" class="form-control" id="fornama_alat" value="<?php echo $fetch['nama_alat'] ?>" placeholder="Enter Nama Alat">
                    </div>

                    <div class="form-group input-group">
                        <input name="jumlahbrgudang" type="hidden" class="form-control" id="forjumlahbrgudang" value="<?php echo $fetch['jumlah'] ?>" placeholder="Enter Jumlah" >
                    </div>

                    <label for="forjumlah">Jumlah</label>
                    <div class="form-group input-group">
                        <!-- <span class="input-group-addon"><i class="fa fa-envelope"></i></span> -->
                        <input name="jumlahbrrusak" type="jumlah" class="form-control" onkeypress="coba(this.value);" id="forjumlahbrrusak" value="<?php echo $fetch['jumlah'] ?>" placeholder="Enter Jumlah" >
                    </div>

                    <div class="form-group">
                        <label>Penanggungjawab</label>
                     <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input name="postpenanggungjawab" style="resize: none;" class="form-control" rows="3" placeholder="Enter Penanggungjawab"></input>
                    </div>
                    
                    <?php
                    }
                    ?>
                   
                </div>
              <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
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


<script>
function coba(b) {
    var a = document.getElementById("forjumlahbrgudang").value;
    if (b > a) {
        alert("Gak bisa!!!");
        document.getElementById("submit").disabled = true;
    }else {
        document.getElementById("submit").disabled = false;
    }
}
</script>
<?php 
include 'footer.php';
 ?>