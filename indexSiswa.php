<?php
require 'functions.php';

$siswa = query("SELECT * FROM siswa  ORDER BY nama ASC");
$nilai = query("SELECT * FROM vnilaisiswa");
$mapel = query("SELECT * FROM mapel  ");
$guru = query("SELECT * FROM guru  ");

?>
<!DOCTYPE html>
<html lang="en" class="smoth-scroll">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>XI-RPL</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="sweetalert2.min.css">


</head>
<body>
    <?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']!="siswa"){
		header("location:index.php?pesan=gagal");
	}

	?>
    <section class="">
    <nav class="navbar navbar-expand-lg bg-primary nav-light shadow" data-aos="fade-down" data-aos-duration="800" data-aos-delay="400">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">XI-RPL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item" data-aos="fade-left" data-aos-delay="700">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item active" data-aos="fade-left" data-aos-delay="750">
            <a class="nav-link" href="#siswa">Daftar Siwa</a>
            </li>
            <li class="nav-item active"data-aos="fade-left" data-aos-delay="800">
            <a class="nav-link" href="#nilai">Daftar Nilai</a>
            </li>
            <li class="nav-item active"data-aos="fade-left" data-aos-delay="850">
            <a class="nav-link" href="#mapel">Daftar Mapel</a>
            </li>
            </li>
            <li class="nav-item active"data-aos="fade-left" data-aos-delay="900">
            <a class="nav-link" href="#guru">Daftar Guru</a>
            </li>
            </li>
            <li class="nav-item active"data-aos="fade-left" data-aos-delay="900">
            <a class="nav-link" href="#gallery">Galeri</a>
            </li>
            
            
        </ul>

       
        </div>
    </div>
    </nav>
</section>


<section class="jumbotron text-center mt-lg-5">
        <img src="img/Logosmkn4padalarang.png" alt="" width="200px" class="" />
        <h1 class="display-4">Selamat Datang </h1>
        <p class="lead">Website Nilai </p>
        <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
            <a href="logout.php">LOGOUT</a>
</section>

<hr>


<div class="container">
<section id="siswa" class="mb-5">
<h1 class="mt-5 mb-5">Dafar Siswa </h1>
    <div class="col-lg-8">
        <table class="table table-responsive table-bordered" id="tabel-siswa" >
                <thead>
                    <tr> 
                        <th>No.</th>
                        <th>Nisn</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Tanggal Lahir</th>
                        
                    <?php $i = 1; ?>
                    <?php foreach( $siswa as $row) :?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $i; ?></td>
                        
                        <td><?= $row["nisn"];?></td>
                        <td><?= $row["nama"];?></td>
                        <td><?= $row["kelas"];?></td>
                        <td><?= $row["tanggallahir"];?></td>
                        
                </tr>
                <?php $i++?>
                <?php endforeach;?>
                </tbody>
            </table>
            
        </div>
    </section>
    <hr>
<section id="nilai">
<h1 class="mb-5 mt-5">Daftar Nilai</h1>
    <div class="col-lg-8">
        <table class="table table-responsive table-bordered" id="tabel-siswa" >
                <thead>
                    <tr> 
                        <th>No.</th>
                        <th>Nisn</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Mapel</th>
                        <th>Nilai 1</th>
                        <th>Nilai 2</th>
                        <th>Nilai 3</th>
                        <th>Rata - Rata</th>
                        <th>Grade</th>
                    
                    
                    <?php $i = 1; ?>
                    <?php foreach( $nilai as $row) :
                    $a = $row['nilai1'];
                    $b = $row['nilai2'];
                    $c = $row['nilai3'];
                    $rt = ($a + $b + $c) /3;
                    if ($rt >= 90){
                    $grade = "A";
                  }elseif ($rt >= 70){
                    $grade = "B";
                      }else {
                    $grade = "C";
                      }?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $i; ?></td>
                        
                        <td><?= $row["nisn"];?></td>
                        <td><?= $row["nama"]?></td>
                        <td><?= $row["kelas"]?></td>
                        <td><?= $row["mapel"]?></td>
                        <td><?= $row["nilai1"];?></td>
                        <td><?= $row["nilai2"];?></td>
                        <td><?= $row["nilai3"];?></td>
                        <td><?= $rt?></td>
                        <td><?= $grade?></td>
                        
                </tr>
                <?php $i++?>
                <?php endforeach;?>
                </tbody>
            </table>
            
        </div>
    </section>
    <hr>
    <section id="mapel">
    <h1 class="mb-5 mt-5">Daftar Mapel</h1>
    <div class="col-lg-8">
        <table class="table table-responsive table-bordered" id="tabel-mapel" >
                <thead>
                    <tr> 
                        <th>No.</th>
                        <th>Nama Mapel</th>
                        <th>Guru</th>
                        <th>NIP</th>
                        >
                    <?php $i = 1; ?>
                    <?php foreach( $mapel as $row) :?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $i; ?></td>
                        
                        <td><?= $row["namamapel"];?></td>
                        <td><?= $row["guru"];?></td>
                        <td><?= $row["GURU_nip"];?></td>
                    
                </tr>
                <?php $i++?>
                <?php endforeach;?>
                </tbody>
            </table>
        
        </div>          
    </section>

<hr>
<section id="guru">
<h1 class="mb-5 mt-5">Daftar Guru</h1>
    <div class="col-lg-8">
        <table class="table table-responsive table-bordered" id="tabel-mapel" >
                <thead>
                    <tr> 
                        <th>No.</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Kode</th>
                        
                    <?php $i = 1; ?>
                    <?php foreach( $guru as $row) :?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $i; ?></td>
                        
                        <td><?= $row["nip"];?></td>
                        <td><?= $row["nama"];?></td>
                        <td><?= $row["jabatan"];?></td>
                        <td><?= $row["kode"];?></td>
                    
                </tr>
                <?php $i++?>
                <?php endforeach;?>
                </tbody>
            </table>
            
        </div>          
</section>
</div>

<section id="gallery">
      <div class="row justify-content-center">
        <div class="container">
          <div class="row text-center mb-3">
            <div class="col">
              <h2>Gallery</h2>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-3">
              <img src="https://source.unsplash.com/300x300?gaming" alt="" class="img-fluid gallery-img">
            </div>
            <div class="col-md-3">
              <img src="https://source.unsplash.com/300x300?programmer" alt="" class="img-fluid gallery-img">
            </div>
            <div class="col-md-3">
              <img src="https://source.unsplash.com/300x300?web" alt="" class="img-fluid gallery-img ">
            </div>
            <div class="col-md-3">
              <img src="https://source.unsplash.com/300x300?csgo" alt="" class="img-fluid gallery-img">
            </div>
            <div class="col-md-3">
              <img src="https://source.unsplash.com/300x300?food" alt="" class="img-fluid gallery-img">
            </div>
            <div class="col-md-3">
              <img src="https://source.unsplash.com/300x300?cat" alt="" class="img-fluid gallery-img">
            </div>
            <div class="col-md-3">
              <img src="https://source.unsplash.com/300x300?laptop" alt="" class="img-fluid gallery-img">
            </div>
            <div class="col-md-3">
              <img src="https://source.unsplash.com/300x300?book" alt="" class="img-fluid gallery-img">
            </div>
            <div class="col-md-3">
              <img src="https://source.unsplash.com/300x300?css" alt="" class="img-fluid gallery-img">
            </div>
            <div class="col-md-3">
              <img src="https://source.unsplash.com/300x300?php" alt="" class="img-fluid gallery-img">
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#0099ff" fill-opacity="1" d="M0,192L26.7,202.7C53.3,213,107,235,160,218.7C213.3,203,267,149,320,117.3C373.3,85,427,75,480,90.7C533.3,107,587,149,640,176C693.3,203,747,213,800,197.3C853.3,181,907,139,960,133.3C1013.3,128,1067,160,1120,149.3C1173.3,139,1227,85,1280,69.3C1333.3,53,1387,75,1413,85.3L1440,96L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
        </svg>
    </section>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/script.js"></script>
<script>
    AOS.init();
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<script src="sweetalert2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>