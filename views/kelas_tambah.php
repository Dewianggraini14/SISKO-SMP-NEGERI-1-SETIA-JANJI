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
                    <h3 class="panel-title">Form Tambah Data Kelas</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                           <div class="form-group">
                            <label for="tingkat" class="col-sm-3 control-label">Tingkat</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="tingkat" class="form-control">
                                    <option value="">- Pilih Tingkatan -</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="kelas" class="col-sm-3 control-label">Kelas </label>
                            <div class="col-sm-9">
                                <input type="text" name="kelas" class="form-control" id="inputEmail3" placeholder="Inputkan Kelas" required>
                            </div>
                        </div>

                          <div class="form-group">
                          <label for="nip" class="col-sm-3 control-label">Wali Kelas</label>
                           <div class="col-sm-5 col-xs-9">
                          <select name="nip" class="form-control">
                            <option selected>- Pilih Wali Kelas -</option>
                            <?php
                              $query = mysqli_query($koneksi, "SELECT * FROM guru");
                                            if(mysqli_num_rows($query) > 0) :
                                                while($data = mysqli_fetch_assoc($query)) :
                            ?>
                            <option value="<?=$data['nip']?>"><?=$data['guru_nama']?> - <?=$data['nip']?></option>
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
                                    <span class="fa fa-save"></span> Simpan Data Kelas</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=kelas&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Kelas
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $tingkat=$_POST['tingkat'];
    $kelas=$_POST['kelas'];
    $guru = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT guru_nama FROM guru WHERE nip='$nip'"));
    $guru_nama = $guru['guru_nama'];
    $nip = $_POST['nip'];
   
    
    //buat sql
    $sql="INSERT INTO kelas VALUES ('','$tingkat','$kelas','$guru_nama', '$nip_')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=kelas&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
