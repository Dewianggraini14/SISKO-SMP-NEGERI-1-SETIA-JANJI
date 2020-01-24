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
                    <h3 class="panel-title">Form Tambah Data Pegawai</h3>
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
                            <label for="pegawai_nama" class="col-sm-3 control-label">Nama </label>
                            <div class="col-sm-9">
                                <input type="text" name="pegawai_nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pegawai" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="peg_pass" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input type="text" name="peg_pass" class="form-control" id="inputEmail3" placeholder="Inputkan Password " required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="pegawai_tempat" class="col-sm-3 control-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="pegawai_tempat" class="form-control" id="inputEmail3" placeholder="Inputkan Tempat Lahir Pegawai" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="pegawai_tanggal" class="col-sm-3 control-label">Tanggal Lahir</label>
                                <div class="col-sm-3">
                                <input type="date" name="pegawai_tanggal" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Lahir Pegawai" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="pegawai_jk" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="pegawai_jk" class="form-control">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pegawai_agama" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="pegawai_agama" class="form-control">
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
                            <label for="pegawai_alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="pegawai_alamat" class="form-control" id="inputPassword3" placeholder="Inputkan Alamat Pegawai" required>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label for="peg_email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="peg_email" class="form-control" id="inputPassword3" placeholder="Inputkan Email Pegawai" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jabatan" class="col-sm-3 control-label">Jabatan</label>
                           <div class="col-sm-2 col-xs-9">
                                <select name="jabatan" class="form-control">
                                    <option value="Administrasi Kesiswaan">Administrasi Kesiswaan</option>
                                    <option value="Administrasi Pegawai">Administrasi Pegawai</option>
                                    <option value="Administrasi Barang">Administrasi Barang</option>
                                    <option value="Operator">Operator</option>
                                    <option value="Pegawai Perpustakaan">Pegawai Perpustakaan</option>
                                    <option value="Penjaga Sekolah">Penjaga Sekolah</option>
                                </select>
                            </div>
                        </div>
                        


                        <!--Simpan Data-->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Pegawai</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="index_admin.php?page=pegawai&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pegawai
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $nip=$_POST['nip'];
    $pegawai_nama=$_POST['pegawai_nama'];
    $peg_pass=$_POST['peg_pass'];
    $pegawai_tempat=$_POST['pegawai_tempat'];
    $pegawai_tanggal=$_POST['pegawai_tanggal'];
    $pegawai_jk=$_POST['pegawai_jk'];
    $pegawai_agama=$_POST['pegawai_agama'];
    $pegawai_alamat=$_POST['pegawai_alamat'];
    $peg_email=$_POST['peg_email'];
    $jabatan=$_POST['jabatan'];
    //buat sql
     $query=  mysqli_query($koneksi,"INSERT INTO pegawai VALUES ('','$nip','$pegawai_nama', '$peg_pass','$pegawai_tempat','$pegawai_tanggal','$pegawai_jk','$pegawai_agama','$pegawai_alamat','$peg_email', '$jabatan')");
   $query1=  mysqli_query($koneksi, "INSERT INTO user VALUES('', '$nip' ,'$peg_pass', '$peg_email', '$pegawai_nama', '3', 'Pegawai')") or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('index_admin.php?page=pegawai&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
