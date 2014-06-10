<?php
		$nama = $_POST["nama"];
		$TkhLahir = $_POST["TkhLahir"];	
		$jantina = $_POST["jantina"];		
		$membaca = $_POST["membaca"];
		$menulis = $_POST["menulis"];	
		$mengira = $_POST["mengira"];	
		$JenisPekerjaan = $_POST["JenisPekerjaan"];	
		$komen = $_POST["textarea"];	
		
		echo 	"Nama : $nama <br /> 
				Tarikh lahir : $TkhLahir <br />
				Jantina : $jantina <br />				
				Membaca : $membaca <br />
				Menulis : $menulis <br />				
				Mengira : $mengira <br />	
				Jenis Pekerjaan : $JenisPekerjaan <br />	
				Komen : $komen ";

?>
