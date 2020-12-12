<!DOCTYPE html>
<html lang="en">
<head>
	<title>Catering | EZ TA</title>
	<meta charset="UTF-8"> 
	<meta name="postviewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../assets/image/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css"> -->
	<script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/form1.css">
	<link rel="stylesheet" type="text/css" href="assets/css/form2.css"> 
<!--===============================================================================================-->
</head>
<body>
	<div class="container-contact100">
		<div class="wrap-contact100">
			
			<form class="contact100-form" action="controller_gudang/datasuplayercontroller.php?action=adddatasuplayer" method="POST">
				<h1 align="Center"><B>Send Us A Message</B> </h1>

				<label class="label-input100" >ID Suplayer &nbsp <font color="red"> *</font> </label>
				<div class="wrap-input100">
					<input id="postid_suplayer" class="input100" type="text" name="postid_suplayer" placeholder="SP001">
					<span class="focus-input100"></span>
				</div>
				
				<label class="label-input100">Nama Pemilik&nbsp <font color="red"> *</font></label>
				<div class="wrap-input100 ">
					<input id="postnama_pemilik" class="input100" type="text" name="postnama_pemilik" placeholder="Nama Lengkap Anda">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100">Nama Toko&nbsp <font color="red"> *</font></label>
				<div class="wrap-input100 ">
					<input id="postnama_toko" class="input100" type="text" name="postnama_toko" placeholder="Nama Toko Anda">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" >Email&nbsp <font color="red"> *</font> </label>
				<div class="wrap-input100 ">
					<input id="postemail" class="input100" type="text" name="postemail" placeholder="@gmail.com">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" >NO Rekening &nbsp <font color="red"> *</font> </label>
				<div class="wrap-input100">
					<input id="postno_rekening" class="input100" type="text" name="postno_rekening" placeholder="133424243456783">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" >Alamat &nbsp <font color="red"> *</font> </label>
				<div class="wrap-input100">
					<input id="postalamat" class="input100" type="text" name="postalamat" placeholder="Masukan Alamat Lengkap">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" >Enter phone number &nbsp <font color="red"> *</font> </label>
				<div class="wrap-input100">
					<input id="postphone" class="input100" type="text" name="postphone" placeholder="+62 00000000">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" >Password&nbsp <font color="red"> *</font></label>
				<div class="wrap-input100 ">
					<input id="postpassword" class="input100" type="password" name="postpassword" placeholder="Password Anda disini"> 
					<span class="focus-input70"></span>
					</div>
					<input type="checkbox" onclick="myFunction()" style=" margin-left: 300px"> <p></p> Show Password
<script>
function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
			<div class="form-group">
                  <label for="InputFile">Foto </label>
                  <input type="file" id="postfoto" name="postfoto">
                  <p class="help-block">Masukan foto.</p>
                </div>

            <div class="form-group has-feedback">
        		<select type="level" name="postlevel" class="form-control" placeholder="level" required>
          		<option>Suplayer</option>
        		</select>
      		</div>



				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Send Message
					</button>
				</div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('assets/image/bgreg.jpg');">
				<!-- <img src="assets/image/komaldev.png"></img> -->

				<div class="flex-w size1 p-b-10 p-t-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>
					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Address
						</span>

						<span class="txt2">
							Mada Center 8th floor, 379 Hudson St, New York, NY 10018 US
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-10">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Lets Talk
						</span>

						<span class="txt3">
							+1 800 1236879
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-10">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							General Support
						</span>

						<span class="txt3">
							contact@example.com
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-10">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Ketentuan Kerjasama
						</span>

						<span class="txt3">
							Klik di sini
						</span>
					</div>
				</div>		
			</div>
		
		</div>
	</div>



	<div id="postdropDownSelect1"></div>


</body>
</html>
