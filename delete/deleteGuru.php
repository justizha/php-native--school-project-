<?php 

require '../functions.php';

	session_start();

	// cek apakah yang mengakses halaman ini sudah login

	
function deletes($nip){
    global $conn;
    mysqli_query($conn,"DELETE FROM guru WHERE nip=$nip");
    return mysqli_affected_rows($conn);
}


$nip = $_GET["nip"];

if (deletes($nip) > 0)
{
    echo "
        <script>
            alert('deleted successfully');
            location.href='../indexAdmin.php';
        </script>
    ";
}else
{
    echo "
        <script>
            alert('deleted method failed');
            location.href='../indexAdmin.php';
        </script>
    ";
}