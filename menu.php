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
                <li class="active"><a href="?page=utama" style="font-family: cursive;">Home</a></li>

                <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                <li class="dropdown">
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

                <?php if(isset($_SESSION['level']) && $_SESSION['level']==2) { ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-family: cursive;">Master Data <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=guru&actions=tampilsiswa" style="font-family: cursive;">Data Siswa</a></li>
                         <li><a href="?page=guru&actions=nilaisiswa" style="font-family: cursive;">Data Nilai</a></li>
                         <li><a href="?page=jadwal&actions=mapelguru" style="font-family: cursive;">Jadwal MAPEL</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-family: cursive;">Reports <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=laporan&actions=nilaisiswa" style="font-family: cursive;">Laporan Nilai Siswa</a></li>
                    </ul>
                </li>

                <?php } ?>

                <?php if(isset($_SESSION['level']) && $_SESSION['level']==3) { ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-family: cursive;">Master Data <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                         <li><a href="?page=pegawa&actions=siswatampil" style="font-family: cursive;">Data Siswa</a></li>
                        <li><a href="?page=pegawai&actions=gurutampil" style="font-family: cursive;">Data Pengajar</a></li>
                         <li><a href="?page=pegawai&actions=pegtampil" style="font-family: cursive;">Data Pegawai</a></li>
                         <li><a href="?page=peg&actions=jadwal" style="font-family: cursive;">Jadwal MAPEL</a></li> 
                    </ul>
                </li>

                <?php } ?>

                <?php if(isset($_SESSION['level']) && $_SESSION['level']==4) { ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-family: cursive;">Master Data <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=siswa&actions=guru" style="font-family: cursive;">Data Pengajar</a></li>
                         <li><a href="?page=siswa&actions=pegawai" style="font-family: cursive;">Data Pegawai</a></li>
                          <li><a href="?page=siswa&actions=mapel" style="font-family: cursive;">Jadwal MAPEL</a></li>
                         <li><a href="?page=siswa&actions=niali" style="font-family: cursive;">Data Nilai</a></li>
                    </ul>
                </li>

                <?php } ?>


                <li><a href="?page=about&actions=tampil" style="font-family: cursive;">About</a></li>
                <li><a href="index_admin.php?page=kontak&actions=tampil" style="font-family: cursive;">Contact</a></li>


                    <?php if (isset($_SESSION['user'])) { ?>
                    <li><a href="logout.php" style="font-family: cursive;">Logout</a></li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>
