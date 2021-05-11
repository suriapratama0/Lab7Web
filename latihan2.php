<html lang="en">
<body>
	<form method="GET" action="">
		<p>Masukan Nama : 
			<input type="text" name="nama"><br>
		</p>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
	if ($_GET)
	{
		echo 'Nama: ' . $_GET['nama'];
	}
	?>
</body>
</html>