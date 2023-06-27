<?php
	session_start();
	if(isset($_POST['add'])){
		
		$users = simplexml_load_file('files/mahasiswa.xml');
		$user = $users->addChild('user');
		$user->addChild('id', $_POST['id']);
		$user->addChild('nama', $_POST['nama']);
		$user->addChild('prodi', $_POST['prodi']);
		$user->addChild('jurusan', $_POST['jurusan']);
		$user->addChild('provinsi', $_POST['provinsi']);
		$user->addChild('kabupaten', $_POST['kabupaten']);
		$user->addChild('kecamatan', $_POST['kecamatan']);
		$user->addChild('desa', $_POST['desa']);
		$user->addChild('foto', $_POST['foto']);
		
		
		
		
		
		$dom = new DomDocument();
		$dom->preserveWhiteSpace = false;
		$dom->formatOutput = true;
		$dom->loadXML($users->asXML());
		$dom->save('files/mahasiswa.xml');
		// Prettify / Format XML and save
 
		$_SESSION['message'] = 'Data Mahasiswa berhasil di tambahkan';
		header('location: index.php');
	}
	else{
		$_SESSION['message'] = 'Fill up add form first';
		header('location: index.php');
	}
?>