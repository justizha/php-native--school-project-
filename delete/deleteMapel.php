<?php

require '../functions.php';

	session_start();

	// cek apakah yang mengakses halaman ini sudah login


	
$kode = $_GET['kode'];

if(delete2($kode) > 0)
{
    echo "
    <script>   
        alert('data has been deleted');
        location.href = '../indexAdmin.php'; 
    </script>
";
}else
{
    echo 
    "
    <script>
        alert('data has not been deleted');
        location.href = '../indexAdmin.php';
    </script>
    ";
}
?>

