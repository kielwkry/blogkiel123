<?php
	require_once 'koneksi.php';
?>

<?php include 'appSidebar.php'; ?>

<?php
  $id = $_GET['id_berita'];
  $trend = mysqli_query($koneksi,"select berita.gambar_berita, kategori.kategori, berita.tanggal_berita, berita.id_berita, berita.judul, berita.id_kategori from berita inner join kategori on berita.id_kategori = kategori.id_kategori order by dilihat desc limit 3");
  $kategori = mysqli_query($koneksi, "select * from kategori order by id_kategori desc");
  $konten = mysqli_query($koneksi,"select judul, tanggal_berita, penulis, id_berita, isi_berita, gambar_berita, dilihat from berita where id_berita = $id ");
  while ($data = mysqli_fetch_array($konten)){

    if($data > 0){
      $statistik = $data['dilihat']+1;
      $tambah_dilihat = (mysqli_query($koneksi, 'UPDATE berita SET dilihat = "'.$statistik.'" WHERE id_berita = "'.$id.'"'));
    }
}
?>
    <div class="row">
        <div class="col">
            <div class="card kartu mx-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col mx-4 mx-4 my-4 tengah">  
                            <p class="judul2"><?php echo $data['judul']; ?></p>
                            <div class="border-bottom mb-3"></div>
                             <?php echo $data['dilihat']; ?>
                           
                            <div class="border-bottom mb-3"></div>
                        </div>
                    </div>
                    <?php require_once 'includes/footer.php';?>
    <?php require_once 'scripts/bodyScripts.php';?> 
