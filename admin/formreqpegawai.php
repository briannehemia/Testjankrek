<?php  
$page= 'hiringjob';
include 'header.php';
include 'adminsidebar.php';
?>
<link rel="stylesheet" href="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- ====================== CONTENT ============================== -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mailbox
        <small>13 new messages</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mailbox</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="mailbox.html" class="btn btn-primary btn-block margin-bottom">Back to Inbox</a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Folders</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="mailbox.html"><i class="fa fa-inbox"></i> Inbox
                  <span class="label label-primary pull-right">12</span></a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
                <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
                <li><a href="#"><i class="fa fa-filter"></i> Junk <span class="label label-warning pull-right">65</span></a>
                </li>
                <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Labels</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> Important</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Promotions</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Social</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Compose New Message</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
<form method="POST" action="../controller/request.php?aksi=pegawai">
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-group"></i></span>
                        <select style="width : 200px;" name="postdivisi" class="form-control" placeholder="">
                            <option value="">Divisi terkait :</option>
                            <option value="HRD">HRD</option>
                            <option value="Produksi">Produksi</option>
                            <option value="Pergudangan">Pergudangan</option>
                            <option value="Keuangan">Keuangan</option>
                        </select>
                    </div>

              <div style="width:220px;" class="form-group input-group">
                <input type="text" name="postjumlah" class="form-control" placeholder="Jumlah dibutuhkan:">
                <span class="input-group-addon">Orang</span>
              </div>

              <div class="form-group">
                  <label stye="padding-left:50px;" class="form-group">Alasan :</label>
                    <textarea name="postalasan" id="" class="form-control" style="height: 200px">
                    </textarea>
              </div>
              <div class="form-group">
                <div class="btn btn-default btn-file">
                  <i class="fa fa-paperclip"></i> Attachment
                  <input type="file" name="attachment">
                </div> <small><p class="help-block">Max. 32MB</p></small>
               
              </div>

              <div class="form-group">
                  <label stye="padding-left:50px;" class="form-group">Syarat :</label>
                    <textarea name="postsyarat" id="" class="form-control" style="height: 200px"></textarea>
              </div>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <input type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send
              </div>
</form>              
            </div>

            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>





<?php 
include 'footer.php';
 ?>
<script src="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Page Script -->
<script>
  $(function () {
    //Add text editor
    $("#compose-textarea").wysihtml5();
    $("#syarat-textarea").wysihtml5();
  });
</script>