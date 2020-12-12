<?php  
include 'header.php';
include 'adminsidebar.php';

include ('../db_gudang/mdl_requestalat.php');
 $conn = new mdlrequestalat();
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
                    <form role="form" action="../controller_gudang/requestalatcontroller.php?action=addrequestalat" Method="POST">
                <div class="box-body">
                    
                     <label for="fornama">ID List Alat</label>
                     <div class="form-group input-group">
                      <select style="width : 400px;" name="postid_listalat" class="form-control">
                        <?php
                        
                        $read = $conn->drolistalat();
                        while ($fetch = $read->fetch_array()){
                          ?>
                          <option value="<?php echo $fetch['nama_alat']?>">
                            <?php echo $fetch['id_listalat'].'  ' ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>

                     <label for="fornama">Nama Alat</label>
                     <div class="form-group input-group">
                      <select style="width : 400px;" name="postnama_alat" class="form-control">
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
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input name="postjumlah" type="jumlah" class="form-control" id="forjumlah" placeholder="Enter Jumlah" >
                    </div>

                    <label for="fortgl_max">Tgl Max</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                        <input name="posttgl_max" type="date" class="form-control" id="fortgl_max" >
                    </div>

                    <label for="forjam_max">Jam Max</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                        <input name="postjam_max" type="time" class="form-control" id="forjam_max" >
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

 <!-- <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script> -->