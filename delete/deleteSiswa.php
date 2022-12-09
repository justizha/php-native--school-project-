<?php



	
require '../functions.php';
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	
$nisn = $_GET["nisn"];

if (delete($nisn) > 0){
    echo "
    <script>
    alert('data has been deleted');
         document.location.href = '../indexAdmin.php';
    </script>
    "; 
}else{
    echo 
    "<script>
        alert('data has not been deteled');
        document.location.href = '../indexAdmin.php';
     </script>"
    ;
}