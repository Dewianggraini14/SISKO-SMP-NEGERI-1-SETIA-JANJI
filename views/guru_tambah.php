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

               <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                <li class="active" class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-family: cursive;">Master Data <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=siswa&actions=tampil" style="font-family: cursive;">Data Siswa</a></li>
                        <li><a href="?page=guru&actions=tampil" style="font-family: cursive;">Data Pengajar</a></li>
                        <li><a href="?page=pegawai&actions=tampil" style="font-family: cursive;">Data Pegawai</a></li>
                        <li><a href="?page=mapel&actions=tampil" style="font-family: cursive;">Data Mata Pelajaran</a></li>
                        <li><a href="?page=jadwal&actions=mapel" style="font-family: cursive;">Jadwal MAPEL</a></li>
                        <li><a href="?page=kelas&actions=tampil" style="font-family: cursive;">Data Kelas</a></li>
                        <li><a href="?page=nilai&actions=tampil" style="font-family: cursive;">Data Nilai</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-family: cursive;">Reports <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                         <li><a href="?page=laporan&actions=guru" style="font-family: cursive;">Laporan Data Guru</a></li>
                        <li><a href="?page=laporan&actions=pegawai" style="font-family: cursive;">Laporan Data Pegawai</a></li>
                        <li><a href="?page=laporan&actions=siswa" style="font-family: cursive;">Laporan Data Siswa</a></li>
                    </ul>
                </li>
                <li><a href="?page=user&actions=tampil" style="font-family: cursive;">User</a></li>


                <?php } ?>


                <li><a href="?page=about&actions=tampil" style="font-family: cursive;">About</a></li>
                <li><a href="?page=kontak&actions=tampil" style="font-family: cursive;">Contact</a></li>


                    <?php if (isset($_SESSION['user'])) { ?>
                    <li><a href="logout.php" style="font-family: cursive;">Logout</a></li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Guru</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nip" class="col-sm-3 control-label">NIP</label>
                               <div class="col-sm-9">
                                <input type="text" name="nip" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Induk Pegawai" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="guru_nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="guru_nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Guru" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="guru_pass" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input type="text" name="guru_pass" class="form-control" id="inputEmail3" placeholder="Inputkan Password " required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="guru_tempat" class="col-sm-3 control-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="guru_tempat" class="form-control" id="inputEmail3" placeholder="Inputkan Tempat Lahir Guru" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="guru_tanggal" class="col-sm-3 control-label">Tanggal Lahir</label>
                                <div class="col-sm-3">
                                <input type="date" name="guru_tanggal" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Lahir Guru" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="guru_jk" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="guru_jk" class="form-control">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="guru_agama" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="guru_agama" class="form-control">
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                    <option value="Kristen Katolik">Kristen Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="guru_alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="guru_alamat" class="form-control" id="inputPassword3" placeholder="Inputkan Alamat Guru" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="guru_email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="guru_email" class="form-control" id="inputPassword3" placeholder="Inputkan Email Guru" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="mapelku" class="col-sm-3 control-label">Mata Pelajaran</label>
                           <div class="col-sm-2 col-xs-9">
                                <select name="mapelku" class="form-control">
                                <option selected>- Pilih Mapel -</option>
                                <?php
                                    $query = mysqli_query($koneksi, "SELECT * FROM mapel");
                                    if(mysqli_num_rows($query) > 0) :
                                    while($data = mysqli_fetch_assoc($query)) :
                                ?>
                                <option value="<?=$data['mapel_nama']?>"><?=$data['kd_mapel']?></option>
                                <?php
                                    endwhile;
                                    endif;
                                ?>
                                </select>
                            </div>
                        
                        </div>
                        


                        <!--Simpan Data-->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Guru</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=guru&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Guru
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if (isset($_POST['nip'])) {
  
    //Ambil data dari form
    $nip = $_POST['nip'];
    $guru_nama=$_POST['guru_nama'];
    $guru_pass=$_POST['guru_pass'];
    $guru_tempat=$_POST['guru_tempat'];
    $guru_tanggal=$_POST['guru_tanggal'];
    $guru_jk=$_POST['guru_jk'];
    $guru_agama=$_POST['guru_agama'];
    $guru_alamat=$_POST['guru_alamat'];
    $guru_email=$_POST['guru_email'];
    $mapelku=$_POST['mapelku'];
   
    //buat sql
    $query=  mysqli_query($koneksi,"INSERT INTO guru VALUES ('','$nip','$guru_nama','$guru_pass', '$guru_tempat','$guru_tanggal','$guru_jk','$guru_agama','$guru_alamat', '$guru_email', '$mapelku')");
    $query1=  mysqli_query($koneksi, "INSERT INTO user VALUES('', '$nip', '$guru_pass', '$guru_email', '$guru_nama', '2', 'Guru')") or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=guru&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
