<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once 'scripts/headScripts.php';?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YEHEZKIEL'S BLOG</title>
</head>
<body>
    
</body>
</html>

<body data-theme="">        
    <?php require_once 'includes/appHeader.php';?>
    <?php require_once 'includes/appSidebar.php';?>

    <main id="main" class="main">

        <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php"><i class="bi bi-house-door"></i> Home</a></li>
            
            </ol>
        </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
        <div class="row">
        <?php
	require_once 'koneksi.php';
?>


<?php
    $ambil_kategori = 'SELECT kategori.id_kategori, kategori.kategori FROM kategori';
    $qry_kat = $koneksi -> query($ambil_kategori) or die($koneksi ->error);
    $trend = 'select berita.gambar_berita, kategori.kategori, berita.tanggal_berita, berita.isi_berita, berita.id_berita, berita.judul, berita.id_kategori from berita inner join kategori on berita.id_kategori = kategori.id_kategori order by dilihat desc limit 3';
    $car_trend = $koneksi -> query($trend) or die($koneksi ->error);
    $terkini = 'select berita.gambar_berita, kategori.kategori, berita.tanggal_berita, berita.isi_berita, berita.id_berita, berita.judul, berita.id_kategori from berita inner join kategori on berita.id_kategori = kategori.id_kategori order by id_berita desc limit 3';
    $tr = mysqli_query($koneksi, $terkini);
    $dunia = 'select berita.gambar_berita, kategori.kategori, berita.tanggal_berita, berita.isi_berita, berita.id_berita, berita.judul, berita.id_kategori from berita inner join kategori on berita.id_kategori = kategori.id_kategori where kategori.kategori = "dunia" order by id_berita desc limit 3';
    $du = mysqli_query($koneksi, $dunia);
    $lainnya = 'select berita.gambar_berita, kategori.kategori, berita.tanggal_berita, berita.isi_berita, berita.id_berita, berita.judul, berita.id_kategori from berita inner join kategori on berita.id_kategori = kategori.id_kategori where berita.id_kategori not like "1" order by kategori desc';
    $more = mysqli_query($koneksi, $lainnya);

?>
            <div class="container mt-3">
                <div class="row mb-5">
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <div class="col">
                            <div class="row my-4 ml-4">
                                <h3>Lainnya<hr style="height:6px;border-width:0;  ;background-color: #5EA6E5"></h3>
                            </div>
                            <?php while ($mo = mysqli_fetch_array($more)){ ?>
                            <div class="row">
                                <div class="col-3 mt-2 mb-4 ml-2 zoom-effect">
                                    <div class="kotak ml-3">
                                        <img src="img/berita/<?php echo $mo['gambar_berita'] ?>" style="height: 150px;">
                                    </div>
                                </div>
                                <div class="col-7 mt-2 ml-5">
                                    <div class="row">
                                        <p style="color:black; font-weight:bold;"> <?php echo $mo['kategori'] ?> </p><p class="ml-2" style="color:black;"> <?php echo $mo['tanggal_berita'] ?> </p>
                                    </div>
                                    <div class="row ">
                                        <a class="nav-item" href="konten.php?id_berita=<?php echo $mo['id_berita'];?>"><h3 style="font-weight: bold;"><?php echo $mo['judul'] ?></h3></a>
                                    </div>
                                    <div class="row">
                                        <p><?php echo substr($mo['isi_berita'], 0,320); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom mb-3"></div>            
                            <?php } ?>   
                        </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    </body>
</html>
         

    <?php require_once 'includes/footer.php';?>
    <?php require_once 'scripts/bodyScripts.php';?>
</body>

</html>