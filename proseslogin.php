<?php
include "konektor.php";
$username=$_POST['username'];
$password=$_POST['password'];
$sql=mysql_query("SELECT * FROM user WHERE binary username='$username' AND binary password='$password' limit 1");

$r=mysql_fetch_array($sql);

if ($r){
	 session_start();
	 $_SESSION[username] = $r['username'];
	 $_SESSION[password] = $r['password'];
     header('location:index1.php');

}else{
?><script language="JavaScript">alert('Maaf username dan password yang Anda masukkan belum benar, Silahkan dicoba lagi'); document.location='index.php'</script><?php
}
?>