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
                <li class="active" class="dropdown" >
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
                        <li><a href="?page=laporan&actions=niali" style="font-family: cursive;">Laporan Nilai Siswa</a></li>
                        <li><a href="?page=laporan&actions=niali" style="font-family: cursive;">Laporan Data Guru</a></li>
                        <li><a href="?page=laporan&actions=niali" style="font-family: cursive;">Laporan Data Pegawai</a></li>
                        <li><a href="?page=laporan&actions=niali" style="font-family: cursive;">Laporan Data Siswa</a></li>
                                    
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
                    <h3 class="panel-title">Form Tambah Data Nilai</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nis" class="col-sm-3 control-label">Nama Siswa</label>
                            <div class="col-sm-4 col-xs-9">
                              <select name="nis" class="form-control">
                                <option selected>- Pilih Siswa -</option>
                                <?php
                                  $query = mysqli_query($koneksi, "SELECT * FROM siswa");
                                    if(mysqli_num_rows($query) > 0) :
                                    while($data = mysqli_fetch_assoc($query)) :
                                ?>
                                <option value="<?=$data['nis']?>"><?=$data['siswa_nama']?> - <?=$data['nis']?> (<?=$data['siswa_kelas']?>)</option>
                                <?php
                                    endwhile;
                                  endif;
                                ?>
                              </select>
                          </div>
                            </div>
                            <div class="form-group">
                             <label for="mapelku" class="col-sm-3 control-label">Mata Pelajaran</label>
                            <div class="col-sm-4 col-xs-9">
                              <select name="mapelku" class="form-control">
                                <option selected>- Pilih Mapel -</option>
                                <?php
                                  $query = mysqli_query($koneksi, "SELECT * FROM mapel");
                                    if(mysqli_num_rows($query) > 0) :
                                    while($data = mysqli_fetch_assoc($query)) :
                                ?>
                                <option value="<?=$data['mapel_nama']?>"><?=$data['kd_mapel']?> - <?=$data['mapel_nama']?></option>
                                <?php
                                    endwhile;
                                  endif;
                                ?>
                              </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="nip" class="col-sm-3 control-label">Nama Guru</label>
                           <div class="col-sm-4 col-xs-9">
                          <select name="nip" class="form-control">
                            <option selected>- Pilih Guru -</option>
                            <?php
                              $query = mysqli_query($koneksi, "SELECT * FROM guru");
                                            if(mysqli_num_rows($query) > 0) :
                                                while($data = mysqli_fetch_assoc($query)) :
                            ?>
                            <option value="<?=$data['nip']?>"><?=$data['guru_nama']?> - <?=$data['nip']?> (<?=$data['mapel']?>)</option>
                            <?php
                                endwhile;
                              endif;
                            ?>
                          </select>
                      </div>
                        </div>
                         <div class="form-group">
                            <label for="nilai" class="col-sm-3 control-label">Nilai</label>
                                <div class="col-sm-3">
                                <input type="text" name="nilai" class="form-control" id="inputEmail3" placeholder="Inputkan Nilai Siswa" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="predikat" class="col-sm-3 control-label">Predikat</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="predikat" class="form-control">
                                    <option value="">- Pilih Predikat -</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                </select>
                            </div>
                        </div>

                 <!--Simpan Data-->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Nilai</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=nilai&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Nilai
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $nis = $_POST['nis'];
    $siswa = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT siswa_nama FROM siswa WHERE nis='$nis'"));
    $siswa_nama = $siswa['siswa_nama'];
    $n_kelas = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT siswa_kelas FROM siswa WHERE nis='$nis'"));
    $siswa_kelas = $n_kelas['siswa_kelas'];
    $mapelku=$_POST['mapelku'];
    $nip = $_POST['nip'];
    $guru = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT guru_nama FROM guru WHERE nip='$nip'"));
    $guru_nama = $guru['guru_nama'];
    $nilai = $_POST['nilai'];
    $predikat = $_POST['predikat'];
 
      
    
    //buat sql
    $sql="INSERT INTO nilai VALUES ('','$nis','$siswa_nama','$siswa_kelas', '$mapelku', '$nip' , '$guru_nama','$nilai','$predikat')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=nilai&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>


                         