<?php
	$konek = new mysqli("localhost","root","","api_001_008_043_052_146");

	if ($konek->connect_errno) {
		echo "Failed to connect o MySQL: " . $koneksi->coonection_error;
		exit();
	}
?>