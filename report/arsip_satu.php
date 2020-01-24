<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Siswa</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM Siswa WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                         <h2>Sistem Informasi Sekolah SMP Negeri 1 Setia Janji</h2>
                        <h4>Jalan Pendidikan Desa Urung Pane Kecamatan Setia Janji Kabupaten Asahan, Sumatera Utara, 21261<br>Email : smpn1setiajanji@yahoo.co.id</h4>
                        <hr>
                        <h3><strong><u>DATA SISWA</u></strong></h3><br><br>
                    </div>
                        <table > 
                            <tbody>
								<tr>
                                    <td>1. NIS</td> <td>: <?= $data['nis'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200" height="30">2. Nama Siswa</td> <td>: <?= $data['siswa_nama'] ?></td>
                                </tr>
                                  <?php
                                        $tgl = explode('-', $data['siswa_tanggal']);
                                    ?>
                                <tr>
                                    <td >3. Tempat, Tanggal Lahir</td>  <td>: <?=$data['siswa_tempat'];?>, <?=$tgl[2].'-'.$tgl[1].'-'.$tgl[0]?></td>
                                </tr>
                                <tr>
                                    <td width="200" height="30">4. Jenis Kelamin</td> <td>: <?= $data['siswa_jk'] ?></td>
                                </tr>
								<tr>
                                    <td >5. Alamat Siswa</td> <td>: <?= $data['siswa_alamat'] ?></td>
                                </tr>
								<tr>
                                    <td width="200" height="30">6. Nama Ayah</td> <td>: <?= $data['siswa_ayah'] ?></td>
                                </tr>
								<tr>
                                    <td >7. Nama Ibu</td> <td>: <?= $data['siswa_ibu'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200" height="30">8. Pekerjaan Orangtua</td> <td>: <?= $data['ortu_kerja'] ?></td>
                                </tr>
                                <tr>
                                    <td >9. Alamat Orangtua</td> <td>: <?= $data['ortu_alamat'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200" height="30">10. No. HP</td> <td>: <?= $data['no_hp'] ?></td>
                                </tr>
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