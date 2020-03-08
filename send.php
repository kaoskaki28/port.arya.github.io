<?php
if($_POST['kirim']){
	$admin = 'arya28.id@gmail.com'; //ganti email dg email admin (email penerima pesan)
	
	$firstName	= htmlentities($_POST['first_name']);
	$lastName	= htmlentities($_POST['last_name']);
	$email		= htmlentities($_POST['email']);
	$subject	= htmlentities($_POST['subject']);
	$message	= htmlentities($_POST['message']);
	
	$sender	= 'From: '.$firstName.' '.$lastName.' <'.$email.'>';
	
	if(mail($admin, $subject, $message, $sender)){
		echo 'SUCCESS: Pesan anda berhasil di kirim. <a href="index.php">Kembali</a>';
	}else{
		echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="index.php">Kembali</a>';
	}
}else{
	header("Location: index.php");
}
?>