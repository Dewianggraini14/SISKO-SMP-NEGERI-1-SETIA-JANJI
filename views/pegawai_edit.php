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

<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM pegawai WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Pegawai</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                     <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nip" class="col-sm-3 control-label">NIP</label>
                               <div class="col-sm-9">
                                <input type="text" name="nip" readonly value="<?=$data['nip']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Induk Pegawai" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="pegawai_nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="pegawai_nama" value="<?=$data['pegawai_nama']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Guru" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="pegawai_tempat" class="col-sm-3 control-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="pegawai_tempat" value="<?=$data['pegawai_tempat']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Tempat Lahir Guru" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="pegawai_tanggal" class="col-sm-3 control-label">Tanggal Lahir</label>
                                <div class="col-sm-3">
                                <input type="date" name="pegawai_tanggal" value="<?=$data['pegawai_tanggal']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Lahir Guru" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="pegawai_jk" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="pegawai_jk" class="form-control">
                                     <option value="Laki-laki"<?=$data['pegawai_jk']=='Laki-laki' ? 'selected' : null?>>Laki-laki</option>
                                    <option value="Perempuan"<?=$data['pegawai_jk']=='Perempuan' ? 'selected' : null?>>Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pegawai_agama" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="pegawai_agama" class="form-control">
                                     <option value="Islam"<?=$data['pegawai_agama']=='Islam' ? 'selected' : null?>>Islam</option>
                                    <option value="Kristen Protestan"<?=$data['pegawai_agama']=='Kristen Protestan' ? 'selected' : null?>>Kristen Protestan</option>
                                    <option value="Kristen Katolik"<?=$data['pegawai_agama']=='Kristen Katolik' ? 'selected' : null?>>Kristen Katolik</option>
                                    <option value="Hindu"<?=$data['pegawai_agama']=='Hindu' ? 'selected' : null?>>Hindu</option>
                                    <option value="Budha"<?=$data['pegawai_agama']=='Budha' ? 'selected' : null?>>Budha</option>
                                    <option value="Konghucu"<?=$data['pegawai_agama']=='Konghucu' ? 'selected' : null?>>Konghucu</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pegawai_alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="pegawai_alamat" value="<?=$data['pegawai_alamat']?> "class="form-control" id="inputPassword3" placeholder="Inputkan Alamat Guru" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="peg_email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="peg_email" value="<?=$data['peg_email']?> "class="form-control" id="inputPassword3" placeholder="Inputkan Email Pegawai" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                             <label for="jabatan" class="col-sm-3 control-label">Jabatan</label>
                            <div class="col-sm-3 col-xs-9">
                                <select name="jabatan" class="form-control">
                                    <option value="Administrasi Kesiswaan"<?=$data['jabatan']=='Administrasi Kesiswaan' ? 'selected' : null?>>Administrasi Kesiswaan</option>
                                    <option value="Administrasi Pegawai"<?=$data['jabatan']=='Administrasi Pegawai' ? 'selected' : null?>>Administrasi Pegawai</option>
                                    <option value="Administrasi Barang"<?=$data['jabatan']=='Administrasi Barang' ? 'selected' : null?>>Administrasi Barang</option>
                                    <option value="Operator"<?=$data['jabatan']=='Operator' ? 'selected' : null?>>Operator</option>
                                    <option value="Pegawai Perpustakaan"<?=$data['jabatan']=='Pegawai Perpustakaan' ? 'selected' : null?>>Pegawai Perpustakaan</option>
                                    <option value="Penjaga Sekolah"<?=$data['jabatan']=='Penjaga Sekolah' ? 'selected' : null?>>Penjaga Sekolah</option>
                                </select>
                            </div>
                        </div>
                        


                        <!--Simpan Data-->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span>Update Data Pegawai</button>
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
    $pegawai_tempat=$_POST['pegawai_tempat'];
    $pegawai_tanggal=$_POST['pegawai_tanggal'];
    $pegawai_jk=$_POST['pegawai_jk'];
    $pegawai_agama=$_POST['pegawai_agama'];
    $pegawai_alamat=$_POST['pegawai_alamat'];
     $peg_email=$_POST['peg_email'];
    $jabatan=$_POST['jabatan'];
    //buat sql
    $sql="UPDATE pegawai SET  pegawai_nama='$pegawai_nama',pegawai_tempat='$pegawai_tempat',pegawai_tanggal='$pegawai_tanggal',pegawai_jk='$pegawai_jk',
    pegawai_agama='$pegawai_agama',pegawai_alamat='$pegawai_alamat', peg_email='$peg_email', jabatan='$jabatan'
    WHERE nip ='$nip'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('index_admin.php?page=pegawai&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



