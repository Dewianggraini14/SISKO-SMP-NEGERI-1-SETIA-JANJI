<?php session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Nilai Per Kelas</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php 
        include '../config/koneksi.php';
        $ambilkls=$_POST['kelas'];
        $kelasnama;
        if ($ambilkls==71) {
          $kelasnama="VII-1";
        } elseif ($ambilkls==81) {
          $kelasnama="VIII-1";
        } elseif ($ambilkls==91) {
          $kelasnama="IX-1";
        }

        ?>


        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Sekolah SMP Negeri 1 Setia Janji</h2>
                        <h4>Jalan Pendidikan Desa Urung Pane Kecamatan Setia Janji Kabupaten Asahan, Sumatera Utara, 21261<br>Email : smpn1setiajanji@yahoo.co.id</h4>
                        <hr>
                        <h3><strong><u>DATA SISWA PER KELAS  <? echo "$kelasnama $ambilkelas"; ?></u></strong></h3><br><br>
                        <table class="table table-bordered table-striped table-hover">
                      
                <thead>
                                <tr>
                                 <th scope="col" style="text-align: center">No.</th><th style="text-align: center">NIS</th><th style="text-align: center">NAMA SISWA</th style="text-align: center"><th style="text-align: center">NILAI</th><th style="text-align: center">PREDIKAT</th>
                            </tr>
                                </tr>
                                </thead>
                            <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $query = mysqli_query($koneksi,"SELECT * FROM nilai WHERE substr(siswa_kelas,1,7)='$ambilkls' and nip = '".$_SESSION["user"]."'") or die("SQL Anda Salah");
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
                                    <td><?= $data['nilai'] ?>
                                    <td><?= $data['predikat'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                            </tbody>
</table>
                    
                         
                                <div style="text-align: right;">
                                        <br>
                                        Kisaran,  &nbsp <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <?php
                                    $query = mysqli_query($koneksi, "SELECT guru_mapel FROM nilai WHERE nip='".$_SESSION["user"]."'");
                                    if(mysqli_num_rows($query) > 0) :
                                    while($data = mysqli_fetch_assoc($query)) :
                                ?>
                               <u><strong><?= $data['guru_mapel'] ?></u><br>
                                <?php
                                    endwhile;
                                    endif;
                                ?>
                                <?php
                                    $query = mysqli_query($koneksi,"SELECT nip FROM nilai WHERE nip='".$_SESSION['user']."'");
                                    if(mysqli_num_rows($query) > 0) :
                                    while($data = mysqli_fetch_assoc($query)) :
                                ?>
                                NIP.<?= $data['nip'] ?> </strong>
                                <?php
                                    endwhile;
                                    endif;
                                ?> 
                                </div>
                        
                    </div>
                </div>
            </div>
    </body>
</html>
