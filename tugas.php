<html lang="en">
<style>     
	label { 
		display: inline-block;
		width: 140px;
	}     
	
</style>
<body>
	<form style="margin: 40px;" method="post" action="tugas_output.php">
		<fieldset style="margin: 100px 390px;">	
			<legend style="text-align: center;"><h2>Data Diri Anda</h2></legend>
			<label>Nama Lengkap </label> 
			<input type="text" name="nama"><br> <br>
			<label>Tanggal Lahir </label> 
			<input type="date" name="tanggal_lahir"><br> <br>
			<label>Pekerjaan </label>
			<select name="pekerjaan">
				<option value="karyawan">Karyawan </option>
				<option value="pns">PNS </option>
				<option value="guru">Guru </option>
				<option value="petani">Petani </option>
				<option value="sopir">Sopir </option>
			</select>
			<br> <br>
			<input style="margin: 10px 200px;" type="submit" name="kirim" value="Kirim">
		</fieldset>
	</form>

</body>
</html>