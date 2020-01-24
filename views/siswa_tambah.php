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
                    <h3 class="panel-title">Form Tambah Data Siswa</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nis" class="col-sm-3 control-label">NIS</label>
                               <div class="col-sm-9">
                                <input type="text" name="nis" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Induk Siswa" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="siswa_nama" class="col-sm-3 control-label">Nama Siswa</label>
                            <div class="col-sm-9">
                                <input type="text" name="siswa_nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Siswa" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="siswa_pass" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input type="text" name="siswa_pass" class="form-control" id="inputEmail3" placeholder="Inputkan Password " required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="siswa_tempat" class="col-sm-3 control-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="siswa_tempat" class="form-control" id="inputEmail3" placeholder="Inputkan Tempat Lahir Siswa" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="siswa_tanggal" class="col-sm-3 control-label">Tanggal Lahir</label>
                                <div class="col-sm-3">
                                <input type="date" name="siswa_tanggal" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Lahir Siswa" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="siswa_jk" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="siswa_jk" class="form-control">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="siswa_agama" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="siswa_agama" class="form-control">
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
                            <label for="siswa_alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="siswa_alamat" class="form-control" id="inputPassword3" placeholder="Inputkan Alamat Siswa" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="siswa_email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="siswa_email" class="form-control" id="inputPassword3" placeholder="Inputkan Email Siswa" required>
                            </div>
                        </div>
                        
						<div class="form-group">
                            <label for="siswa_ayah" class="col-sm-3 control-label">Nama Ayah</label>
                            <div class="col-sm-9">
                                <input type="text" name="siswa_ayah" class="form-control" id="inputPassword3" placeholder="Inputkan Nama Ayah" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="siswa_ibu" class="col-sm-3 control-label">Nama Ibu</label>
                            <div class="col-sm-9">
                                <input type="text" name="siswa_ibu" class="form-control" id="inputPassword3" placeholder="Inputkan Nama Ibu" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ortu_alamat" class="col-sm-3 control-label">Alamat Orangtua</label>
                            <div class="col-sm-9">
                                <input type="text" name="ortu_alamat" class="form-control" id="inputPassword3" placeholder="Inputkan Alamat Orangtua Siswa" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ortu_kerja" class="col-sm-3 control-label">Pekerjaan Orangtua</label>
                            <div class="col-sm-9">
                                <input type="text" name="ortu_kerja" class="form-control" id="inputPassword3" placeholder="Inputkan Pekerjaan Ayah/Ibu" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">No. Handphone</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_hp" class="form-control" id="inputPassword3" placeholder="Inputkan Nomor HP Orangtua" required>
                            </div>
                        </div>
                       <div class="form-group">
                            <label for="kelasku" class="col-sm-3 control-label">Kelas</label>
                           <div class="col-sm-2 col-xs-9">
                                <select name="kelasku" class="form-control">
                                <option selected>- Pilih Kelas -</option>
                                <?php
                                    $query = mysqli_query($koneksi, "SELECT * FROM kelas");
                                    if(mysqli_num_rows($query) > 0) :
                                    while($data = mysqli_fetch_assoc($query)) :
                                ?>
                                <option value="<?=$data['kelas']?>"><?=$data['kelas']?></option>
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
                                    <span class="fa fa-save"></span> Simpan Data Siswa</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=siswa&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Siswa
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $nis=$_POST['nis'];
	$siswa_nama=$_POST['siswa_nama'];
    $siswa_pass=$_POST['siswa_pass'];
	$siswa_tempat=$_POST['siswa_tempat'];
	$siswa_tanggal=$_POST['siswa_tanggal'];
    $siswa_jk=$_POST['siswa_jk'];
	$siswa_agama=$_POST['siswa_agama'];
    $siswa_alamat=$_POST['siswa_alamat'];
    $siswa_email=$_POST['siswa_email'];
    $siswa_ayah=$_POST['siswa_ayah'];
	$siswa_ibu=$_POST['siswa_ibu'];
    $ortu_kerja=$_POST['ortu_kerja'];
	$ortu_alamat=$_POST['ortu_alamat'];
    $no_hp=$_POST['no_hp'];
    $kelasku=$_POST['kelasku'];
    //buat sql
     $query=  mysqli_query($koneksi,"INSERT INTO siswa VALUES ('','$nis','$siswa_nama','$siswa_pass', '$siswa_tempat','$siswa_tanggal','$siswa_jk','$siswa_agama','$siswa_alamat', '$siswa_email', '$siswa_ayah', '$siswa_ibu', '$ortu_alamat', '$ortu_kerja', '$no_hp', '$kelasku')");
    $query1=  mysqli_query($koneksi, "INSERT INTO user VALUES('', '$nis', '$siswa_pass', '$siswa_email', '$siswa_nama', '4', 'Siswa')") or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=siswa&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
