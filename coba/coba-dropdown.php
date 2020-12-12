<?php 
include '../db/config.php';
 ?>
<form>
Pilih Barang : 
<select>
	<option>--- Pilih Barang ---</option>
	<?php
	$con = $this->conn;
	$sql = mysqli_query($con,"SELECT * FROM tblistbarang ORDER BY nama_barang ASC");
	
		while($row = mysql_fetch_assoc($sql)){
			echo '<option>'.$row['nama_barang'].'</option>';
		}
	
	?>
</select>
<input type="submit" name="submit" value="OK" />
</form>