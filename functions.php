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
    function tambah($data){

        $nisn         = htmlspecialchars( $data['nisn']);
        $nama         = htmlspecialchars( $data['nama']);
        $kelas        = htmlspecialchars( $data['kelas']);
        $tanggallahir = htmlspecialchars( $data['tanggallahir']);

       global $conn;
        $query = "INSERT INTO siswa VALUES ('$nisn','$nama','$kelas','$tanggallahir')";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }
    function tambah2($data){
        
        $nisn       = htmlspecialchars($data['nisn']);
        $mapel      = htmlspecialchars($data['mapel']);
        $nilai1     = htmlspecialchars($data['nilai1']);
        $nilai2     = htmlspecialchars($data['nilai2']);
        $nilai3     = htmlspecialchars($data['nilai3']);
        $SISWA_nisn = htmlspecialchars($data['SISWA_nisn']);

        global $conn;
        $query = "INSERT INTO nilai VALUES ('','$nisn','$mapel','$nilai1','$nilai2','$nilai3','$SISWA_nisn')";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }
    function tambah3($data){

        $kode      = htmlspecialchars($data['kode']);
        $namamapel = htmlspecialchars($data['namamapel']);
        $guru      = htmlspecialchars($data['guru']);
        $GURU_nip  = htmlspecialchars($data['GURU_nip']);
        $NILAI_id  = htmlspecialchars($data['NILAI_id']);

        global $conn;
        $query ="INSERT INTO mapel VALUES ('$kode','$namamapel','$guru','$GURU_nip','$NILAI_id')";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }
    function tambah4($data){

        $nip       = htmlspecialchars($data['nip']);
        $nama      = htmlspecialchars($data['nama']); 
        $jabatan   = htmlspecialchars($data['jabatan']);
        $kode      = htmlspecialchars($data['kode']);

        global $conn;
        $query ="INSERT INTO guru VALUES ('$nip','$nama','$jabatan','$kode')";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }
    function delete($nisn){
        global $conn;
        mysqli_query($conn,"DELETE FROM siswa WHERE nisn= $nisn ");
        return mysqli_affected_rows($conn);
    }
    function delete1($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM nilai WHERE id=$id ");
        return mysqli_affected_rows($conn);
    }
    function delete2($kode){
        global $conn;
        mysqli_query($conn,"DELETE FROM mapel WHERE kode=$kode ");
        return mysqli_affected_rows($conn);
    }
//    function delete3($nip){
//         global $conn;
//         mysqli_query($conn,"DELETE FROM guru WHERE nip=$nip ");
//         return mysqli_affected_rows($conn);
//    }
    function edit($data){
        $nisn = htmlspecialchars($data['nisn']);
        $nama = htmlspecialchars($data['nama']);
        $kelas = htmlspecialchars($data['kelas']);
        $tanggallahir = htmlspecialchars($data['tanggallahir']);

        global $conn;
        $query = "UPDATE siswa SET 
                    nisn = '$nisn', 
                    nama = '$nama', 
                    kelas = '$kelas', 
                    tanggallahir = '$tanggallahir'
                    WHERE nisn =$nisn 
                    ";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }
    function edit1($data){
        $id = $data['id'];
        $nisn = htmlspecialchars($data['nisn']);
        $mapel = htmlspecialchars($data['mapel']);
        $nilai1 = htmlspecialchars($data['nilai1']);
        $nilai2 = htmlspecialchars($data['nilai2']);
        $nilai3 = htmlspecialchars($data['nilai3']);
        $SISWA_nisn = htmlspecialchars($data['SISWA_nisn']);

        global $conn;
        $query = "UPDATE nilai SET
                    nisn = '$nisn',
                    mapel = '$mapel',
                    nilai1 = '$nilai1',
                    nilai2 = '$nilai2',
                    nilai3 = '$nilai3',
                    SISWA_nisn = '$SISWA_nisn'
                    WHERE id = $id
                    ";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }
    function edit2($data){
        $kode = htmlspecialchars($data['kode']);
        $namamapel = htmlspecialchars($data['namamapel']);
        $guru = htmlspecialchars($data['guru']);
        $GURU_nip = htmlspecialchars($data['GURU_nip']);
        $NILAI_id = htmlspecialchars($data['NILAI_id']);


        global $conn;
        $query = "UPDATE mapel SET 
                    kode        ='$kode',
                    namamapel   = '$namamapel',
                    guru        = '$guru',
                    GURU_nip    = '$GURU_nip',
                    NILAI_id    = '$NILAI_id'
                    WHERE kode =$kode
                    "
                    ;
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
    function edit3($data){
        $nip = htmlspecialchars($data['nip']);
        $nama = htmlspecialchars($data['nama']);
        $jabatan = htmlspecialchars($data['jabatan']);
        $kode = htmlspecialchars($data['kode']);

        global $conn;
        $query = "UPDATE guru SET
                    nip = '$nip',
                    nama = '$nama',
                    jabatan = '$jabatan',
                    kode = '$kode'
                    WHERE nip=$nip"
                    ;
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }









