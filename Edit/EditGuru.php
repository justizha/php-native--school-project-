<?php 

require '../functions.php';

$nip = $_GET['nip'];

$guru = query("SELECT * FROM guru WHERE nip=$nip")[0];

if(isset($_POST['submit'])){
    if(edit3($_POST) > 0){
        echo "
                <script>
                    alert('data has been edited');
                    location.href='../indexAdmin.php';
                </script>
        ";
    }else{
        echo "
                <script>
                    alert('data faileed to edit');
                    location.href='../indexAdmin.php';
                </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Siwa</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <?php 
	session_start();



	?>
    <section>
       <nav class="navbar navbar-expand-lg bg-primary navbar-light shadow  " data-aos="fade-down" data-aos-duration="1400" data-aos-delay="400">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">XI-RPL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item" data-aos="fade-left" data-aos-delay="700">
            <a class="nav-link active" aria-current="page" href="../indexAdmin.php">Home</a>
            </li>
            <li class="nav-item active" data-aos="fade-left" data-aos-delay="750">
            <a class="nav-link" href="indexAdmin.php">Daftar Siwa</a>
            </li>
            <li class="nav-item active"data-aos="fade-left" data-aos-delay="800">
            <a class="nav-link" href="indexAdmin.php">Daftar Nilai</a>
            </li>
            <li class="nav-item active"data-aos="fade-left" data-aos-delay="850">
            <a class="nav-link" href="indexAdmin.php">Daftar Mapel</a>
            </li>
            </li>
            <li class="nav-item active"data-aos="fade-left" data-aos-delay="900">
            <a class="nav-link" href="indexAdmin.php">Daftar Guru</a>
            </li>
        </ul>
        </div>
        </div>
    </nav><nav class="navbar navbar-expand-lg bg-primary navbar-light shadow  " data-aos="fade-down" data-aos-duration="1400" data-aos-delay="400">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">XI-RPL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item" data-aos="fade-left" data-aos-delay="700">
            <a class="nav-link active" aria-current="page" href="../indexAdmin.php?#home">Home</a>
            </li>
            <li class="nav-item active" data-aos="fade-left" data-aos-delay="750">
            <a class="nav-link" href="../indexAdmin.php>#siswa">Daftar Siwa</a>
            </li>
            <li class="nav-item active"data-aos="fade-left" data-aos-delay="800">
            <a class="nav-link" href="../indexAdmin.php?#nilai">Daftar Nilai</a>
            </li>
            <li class="nav-item active"data-aos="fade-left" data-aos-delay="850">
            <a class="nav-link" href="../indexAdmin.php>#mapel">Daftar Mapel</a>
            </li>
            </li>
            <li class="nav-item active"data-aos="fade-left" data-aos-delay="900">
            <a class="nav-link" href="../indexAdmin.php?#guru">Daftar Guru</a>
            </li>
        </ul>
        </div>
        </div>
    </nav>
</section>
<div class="container d-flex justify-content-center">
    <div class="col-lg-6 mt-lg-7">
        <form action="" method="POST">
                <h1 class="text-center mb-5">Edit Data Guru</h1>
                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" class="form-control" id="nip" name="nip" value="<?=$guru["nip"]?>">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama"value="<?= $guru["nama"]?>">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="jabatan">GURU</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan"value="<?= $guru["jabatan"]?>">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="kode">Kode</label>
                    <input type="text" class="form-control" id="kode" name="kode" value="<?= $guru["kode"]?>">
                </div>
                
                <button type="submit" class="btn btn-primary col-lg-5 d-flex justify-content-center" id="submit" name="submit">Submit</button>
        </form>
    </div>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/script.js"></script>
<script>
    AOS.init();
</script>

</body>
</html>