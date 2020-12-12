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
                    <form role="form" action="../controller_gudang/listalatcontroller.php?action=addlistalat" Method="POST">
                <div class="box-body">


                    <label for="forid_listalat">ID List Alat</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input name="postid_listalat" type="id_listalat" class="form-control" id="forid_listalat" placeholder="Enter ID List Alat" >
                    </div>
                    
                     <label for="fornama">Nama Alat</label>
                     <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input name="postnama_alat" type="text" class="form-control" id="fornama_alat" placeholder="Enter Nama Alat">
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