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
                 <h2 class="box-title"><b>Survey Masalah</b>
                     <small>'Masalah Apa Menurutmu Yang Perlu Di Digitalkan'</small>
                </h2>
                </div>
             <!-- form start -->
                    <form role="form" action="../controller/surveycontroller.php?action=addmasal" Method="POST">
                <div class="box-body">
                    
                     <label for="fornama">Nama</label>
                     <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input name="postnama" type="text" class="form-control" id="fornama" placeholder="Enter nama lengkap">
                    </div>

                    <label for="foremail">Email</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input name="postemail" type="email" class="form-control" id="foremail" placeholder="Enter email" >
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <Textarea name="postalamat" style="resize: none;" class="form-control" rows="3" placeholder="Enter Alamat"></Textarea>
                    </div>

                    <label for="fornotelp">Jenis Kelamain</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-venus-mars custom"></i></span>
                        <select style="width : 200px;" name="postjekel" class="form-control" placeholder="">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <label for="fornama">Masalah</label>
                     <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input name="postmasalah" type="text" class="form-control" id="fornama" placeholder="Enter nama Masalah">
                    </div>


                    <div class="form-group">
                        <label>Detail Masalah</label>
                        <Textarea name="postdetailmasalah" style="resize: none;" class="form-control" rows="3" placeholder="Enter Detail Masalah"></Textarea>
                    </div>


                    <div class="form-group">
                        <label>Saran Solusi</label>
                        <Textarea name="postsaran" style="resize: none;" class="form-control" rows="3" placeholder="Enter Saran Solusi"></Textarea>
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