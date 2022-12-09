<?php

require '../functions.php';
 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	

	
$id = $_GET['id'];

if(delete1($id) > 0){
    echo 
    "
        <script>
            alert('data deleted successfully');
            location.href = '../indexAdmin.php';
        </script>
    ";
}else{
    echo
    "
        <script>
            alert('data failed to be deleted');
            location.href = '../indexAdmin.php';
        </script>
    ";
}