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
                    <h3 class="panel-title">Form Tambah Jadwal Pelajaran</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="kelas" class="col-sm-3 control-label">Kelas</label>
                           <div class="col-sm-2 col-xs-9">
                                <select name="kelas" class="form-control">
                                <option selected>- Pilih Kelas -</option>
                                <?php
                                    $query = mysqli_query($koneksi, "SELECT * FROM kelas order by kelas asc");
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

                        <div class="form-group">
                            <label for="nmapel" class="col-sm-3 control-label">Mata Pelajaran</label>
                           <div class="col-sm-2 col-xs-9">
                                <select name="nmapel" class="form-control">
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

                        <div class="form-group">
                            <label for="jam" class="col-sm-3 control-label">Jumlah Jam</label>
                            <div class="col-sm-3 col-xs-9">
                                <select name="jam" class="form-control">
                                    <option value="">- Pilih Jumlah Jam -</option> 
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="guru" class="col-sm-3 control-label">Nama Guru</label>
                           <div class="col-sm-3 col-xs-9">
                                <select name="guru" class="form-control">
                                <option selected>- Pilih Nama Guru Pengajar -</option>
                                <?php
                                    $query = mysqli_query($koneksi, "SELECT * FROM guru");
                                    if(mysqli_num_rows($query) > 0) :
                                    while($data = mysqli_fetch_assoc($query)) :
                                ?>
                                <option value="<?=$data['guru_nama']?>"><?=$data['guru_nama']?></option>
                                <?php
                                    endwhile;
                                    endif;
                                ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="hari" class="col-sm-3 control-label">Hari</label>
                            <div class="col-sm-3 col-xs-9">
                                <select name="hari" class="form-control">
                                    <option value="">- Pilih Jadwal Hari -</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                    <option value="Sabtu">Sabtu</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="waktu" class="col-sm-3 control-label">Waktu</label>
                               <div class="col-sm-9">
                                <input type="text" name="waktu" class="form-control" id="inputEmail3" placeholder="Inputkan Waktu" required>
                            </div>
                        </div>

                        <!--Simpan Data-->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Jadwal Pelajaran</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=jadwal&actions=mapel" class="btn btn-danger btn-sm">
                        Kembali Ke Jadwal Pelajaran
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $kelas=$_POST['kelas'];
    $nmapel=$_POST['nmapel'];
    $jam=$_POST['jam'];
    $guru=$_POST['guru'];
    $hari=$_POST['hari'];
    $waktu=$_POST['waktu'];
    //buat sql
    $sql="INSERT INTO jadwal VALUES ('','$kelas', '$nmapel', '$jam', '$guru', '$hari', '$waktu' )";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=jadwal&actions=mapel');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
