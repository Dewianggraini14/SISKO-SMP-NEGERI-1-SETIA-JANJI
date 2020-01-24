<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="?page=utama">Sistem Informasi Sekolah SMP NEGERI 1 SETIA JANJI</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li ><a href="?index_admin.php" style="font-family: cursive;">Home</a></li>

               <?php if(isset($_SESSION['level']) && $_SESSION['level']==2) { ?>
                <li class="active" class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-family: cursive;">Master Data <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=guru&actions=tampilsiswa" style="font-family: cursive;">Data Siswa</a></li>
                         <li><a href="?page=guru&actions=nilaisiswa" style="font-family: cursive;">Data Nilai</a></li>
                         <li><a href="?page=jadwal&actions=mapelguru" style="font-family: cursive;">Jadwal MAPEL</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-family: cursive;">Reports <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=laporan&actions=nilaisiswa" style="font-family: cursive;">Laporan Nilai Siswa</a></li>
                    </ul>
                </li>

                <?php } ?>


                <li><a href="?page=about&actions=tampil">About</a></li>
                <li><a href="?page=kontak&actions=tampil">Contact</a></li>


                    <?php if (isset($_SESSION['user'])) { ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>

<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Siswa</h3>
                </div>
                        
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No.</th><th>NIS</th><th>NAMA SISWA</th><th>KELAS</th><th>TEMPAT/TANGGAL LAHIR</th><th>JENIS KELAMIN</th><th>AGAMA</th><th>ALAMAT</th><th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM siswa ORDER BY nis ASC";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['nis'] ?></td>
									<td><?= $data['siswa_nama'] ?></td>
                                    <td><?= $data['siswa_kelas'] ?></td>
                                    <?php
                                        $tgl = explode('-', $data['siswa_tanggal']);
                                    ?>
                                    <td><?=$data['siswa_tempat'];?>, <?=$tgl[2].'-'.$tgl[1].'-'.$tgl[0]?></td>
									<td><?= $data['siswa_jk'] ?></td>
									<td><?= $data['siswa_agama'] ?></td>
                                    <td><?= $data['siswa_alamat'] ?></td>
                                    <td>
                                        <a href="?page=gurusiswa&actions=detail&id=<?= $data['id'] ?>" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-eye-open"></span>detail
                                        </a>
                                    </td>
                        
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

