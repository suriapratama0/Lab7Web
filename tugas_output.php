<form style="margin: 0px 40px; display: inline-block; width: 1200px; text-align: ;">
<fieldset style="margin: 90px 400px; height: 230px;">
<legend style="text-align: center;"><h2>Hasil Data Diri Anda</h2></legend>
<?php
	if ($_POST)
	{
		echo '<b>Nama : </b>' . $_POST['nama'];
		echo '<br>';
		echo '<br>';
		echo '<b>Tanggal Lahir : </b>' . $_POST['tanggal_lahir'];
		echo '<br>';
		echo '<br>';
		$tanggal_lahir = new DateTime($_POST['tanggal_lahir']);
		$sekarang = new DateTime("today");
		if ($tanggal_lahir > $sekarang) { 
		$thn = "0";
		$bln = "0";
		$tgl = "0";
	}
	$thn = $sekarang->diff($tanggal_lahir)->y;
	$bln = $sekarang->diff($tanggal_lahir)->m;
	$tgl = $sekarang->diff($tanggal_lahir)->d;
	echo "<b>Umur : </b>";
	echo $thn." tahun ".$bln." bulan ".$tgl." hari";
	echo '<br>';
	echo '<br>';
	echo '<b>Pekerjaan : </b>' . $_POST['pekerjaan'];
	echo '<br>';
	echo '<br>';
	echo '<b>Gaji :</b>';
	$gawean = $_POST["pekerjaan"];

	if ($gawean=="karyawan") {
	$gaweanku="Karyawan"; }
	else if ($gawean=="pns") {
	$gaweanku="PNS"; }
	else if ($gawean=="guru") {
	$gaweanku="Guru"; }
	else if ($gawean=="petani") {
	$gaweanku="Petani"; }
	else
		{$gaweanku="Sopir";}
	echo "";
	if ($gaweanku=="Karyawan") {
	$gajifinal="2.500.000"; }
	else if ($gaweanku=="PNS") {
	$gajifinal="4.000.000"; }
	else if ($gaweanku=="Guru") {
	$gajifinal="3.500.000"; }
	else if ($gaweanku=="Petani") {
	$gajifinal="2.100.000"; }
	else
		{$gajifinal="3.799.360";}
	echo " Rp. $gajifinal";
}
?>
</fieldset>
</form>