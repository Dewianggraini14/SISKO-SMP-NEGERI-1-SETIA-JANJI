<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Guru</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Sekolah SMP Negeri 1 Setia Janji</h2>
                        <h4>Jalan Pendidikan Desa Urung Pane Kecamatan Setia Janji Kabupaten Asahan, Sumatera Utara, 21261<br>Email : smpn1setiajanji@yahoo.co.id</h4>
                        <hr>
                        <h3><strong><u>DATA SELURUH GURU</u></strong></h3><br><br>
                        <table class="table table-bordered table-striped table-hover"> 
                       
                                <thead>
                                <tr>
                                   <th scope="col">No.</th><th>NIP</th><th>Nama Guru</th><th>Tempat/Tanggal Lahir</th><th>Jenis Kelamin</th><th>Agama</th><th>Alamat</th><th>B. Study</th>
                            </tr>
                                </tr>
                                </thead>
                            <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                           <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM guru ORDER BY nip ASC";
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
                                <tr >
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['nip'] ?></td>
                                    <td><?= $data['guru_nama'] ?></td>
                                   <?php
                                        $tgl = explode('-', $data['guru_tanggal']);
                                    ?>
                                    <td><?=$data['guru_tempat'];?>, <?=$tgl[2].'-'.$tgl[1].'-'.$tgl[0]?></td>
                                    <td><?= $data['guru_jk'] ?></td>
                                    <td><?= $data['guru_agama'] ?></td>
                                    <td><?= $data['guru_alamat'] ?></td>
                                    <td><?= $data['mapel'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                            </tbody>
                       
                        </table>

                        <div style="text-align: right;">
                                        <br>
                                        Kisaran,  &nbsp <?= date("d-m-Y") ?><br>
                                        Kepala Sekolah
                                        <br><br><br><br>
                                        <strong><u>Edi Sahputra Siagian, S.Ag., M.Pd.I</u><br>
                                        NIP. 196606121988032004</strong>
                                </div>

                    </div>
                </div>
            </div>
    </body>
</html>