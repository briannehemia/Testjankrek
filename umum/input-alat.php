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
                    <form role="form" action="../controller_gudang/alatcontroller.php?action=addalat" Method="POST">
                <div class="box-body">
                    
                     <label for="fornama">Nama Alat</label>
                     <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input name="postnama_alat" type="text" class="form-control" id="fornama_alat" placeholder="Enter Nama Alat">
                    </div>

                    <label for="forjumlah">Jumlah</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input name="postjumlah" type="jumlah" class="form-control" id="forjumlah" placeholder="Enter Jumlah" >
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <Textarea name="postharga" style="resize: none;" class="form-control" rows="3" placeholder="Enter Harga"></Textarea>
                    </div>
                    
                   
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