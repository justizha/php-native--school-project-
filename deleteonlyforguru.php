<?php
$conn =  mysqli_connect('localhost','root','','dbnilai_alfath');


    function query($query) {
        global $conn;
        $result = mysqli_query($conn,$query);
        //logika
        // menyiapkan wadah kosong yang kemudian di isi oleh while yang menampilkan nilai dari tabel 
        $rows = [];
        while( $row = mysqli_fetch_assoc($result)) {
            $rows[] = $row; // menambahkan elemen baru di arkhir array
        }
        return $rows;
    }
    function delete($nip){
        global $conn;
        mysqli_query($conn,"DELETE FROM guru WHERE `guru`.`nip`=$nip");
        return mysqli_affected_rows($conn);
    }