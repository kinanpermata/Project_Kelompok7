<?php
	include "koneksi.php";

	$username=$_POST['username'];
	$password=md5($_POST['password']);

	$query="SELECT * FROM user WHERE username='$username' and password='$password'";
	$result=mysqli_query($connect, $query);
	$row = mysqli_fetch_assoc($result);

	if($row['level'] == "admin") {
		echo "Anda berhasil login, silahkan menuju "; ?>
        <a href="homeAdmin.html">Halaman HOME</a>
        <?php
	}else if ($row['level'] == "pegawai"){
		echo "Anda berhasil login, silahkan " ;?>
        <a href="homeGuest.html">Login kembali</a>
        <?php
    }else if ($row['level'] == "customer"){
        echo "Anda berhasil login, silahkan " ;?>
        <a href="homeUser.html">login</a>
        <?php
	} else{
        echo "Anda gagal login. silahkan " ?>
        <a href="DapurSehat/home.html"></a>
        <?php
        echo mysqli_error(($connect));
    }
?>