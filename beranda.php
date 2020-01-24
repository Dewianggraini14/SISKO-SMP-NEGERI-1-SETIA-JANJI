<div class="container">
    <div class="row">
        <div class ="col-xs-12">

            <div class="alert alert-danger" style="font-family: sans-serif; font-style: italic;">
                <marquee><h3>Selamat Datang di SISKO SMP NEGERI 1 SETIA JANJI</h3></marquee>
            </div>
        </div>
    </div>
    <div class="row">
        <!--colomn kedua-->
        <div class="col-sm-9 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title" align="center">PROFIL SEKOLAH</h3>
                </div>
                <div class="panel-body" >
                    <p align="center" ><img src="img/images.png" width="200px" height="200px"></img></p>
                     
                            <tr>
                                <th>
                            <div  class="col-sm-6 col-xs-12">
                            <b><p align="center">DATA SEKOLAH KITA</p></b>
                            <table class="table table-bordered table-striped table-hover" cellpadding="7" style="height: 300px">
                            <tr>
                                <td bgcolor='#ffebcd' width="120">Kepala Sekolah</td><td bgcolor='#ffebcd'>: Edi Sahputra Siagian, S.Ag., M.Pd.I</td>
                            </tr>
                            <tr>
                                <td bgcolor='#ffebcd'>Operator</td> <td bgcolor='#ffebcd'>: Fengki Darmawan</td>
                            </tr>
                            <tr>
                                <td bgcolor='#ffebcd'>Akreditas</td> <td bgcolor='#ffebcd'>: A</td>
                            </tr>
                            <tr>
                                <td bgcolor='#ffebcd'>Kurikulum</td> <td bgcolor='#ffebcd'>: Kurikulum 2013 </td>
                            </tr>
                            <tr>
                                <td bgcolor='#ffebcd'>Bentuk Pendidikan</td> <td bgcolor='#ffebcd'>: SMP</td>
                            </tr>
                            <tr>
                                <td bgcolor='#ffebcd'>Status Kepemilikan</td> <td bgcolor='#ffebcd'>: Pusat Pemerintahan</td>
                            </tr> 
                            </table>
                           </div>
                           </th>
                            </tr>

                            <tr>
                           <th>
                            <div  class="col-sm-6 col-xs-12">
                            <b><p align="center">IDENTITAS SEKOLAH</p></b>
                            <table class="table table-bordered table-striped table-hover" cellpadding="7" style="height: 300px">
                                <tr>
                                <td bgcolor='#ffebcd' width="170">NPSN</td><td bgcolor='#ffebcd'>: 10204119</td>
                            </tr>
                            <tr>
                                <td bgcolor='#ffebcd'>Status</td> <td bgcolor='#ffebcd'>: Negeri</td>
                            </tr>
                            <tr>
                                <td bgcolor='#ffebcd'>SK Pendirian Sekolah</td> <td bgcolor='#ffebcd'>: 0471 0 1983</td>
                            </tr>
                            <tr>
                                <td bgcolor='#ffebcd'>Tanggal SK Pendirian</td> <td bgcolor='#ffebcd'>: 1983-11-07</td>
                            </tr> 
                            <tr>
                                <td bgcolor='#ffebcd'>SK Isin Operasional</td> <td bgcolor='#ffebcd'>: 0471 0 1983</td>
                            </tr>
                            <tr>
                                <td bgcolor='#ffebcd'>Tanggal SK Izin Operasional</td> <td bgcolor='#ffebcd'>: 1983-11-07</td>
                            </tr> 
                        </table> <br/>
                    </div>
                </th>
            </tr>

                </div>
            </div>
        </div>
        <!--akhir colomn kedua-->
        <div class="col-sm-3 col-xs-12">
            <!--Jika terjadi login error tampilkan pesan ini-->
           <?php if(isset($_GET['error']) ) {?>
            <div class="alert alert-danger">Maaf! Login Gagal, Coba Lagi..</div>
            <?php }?>

            <?php if (isset($_SESSION['username'])) { ?>
            <div class="alert alert-info">
                <strong>Welcome <?=$_SESSION['nama']?></strong>
            </div>
            <?php
           } else { ?>

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Masuk Ke Sistem</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="proses_login.php" method="post">
                        <div class="form-group">
                            <div class="col-sm-12" >
                                <input type="text" name="user" class="form-control input-sm"
                                   placeholder="Username" required="" autocomplete="off"/>
                            </div>
                        </div>

                            <div class="form-group">
                            <div class="col-sm-12">
                                <select name="level" class="form-control" required="">
                                    <option value="1">1.Admin Sistem</option>
                                    <option value="2">2.Guru</option>
                                    <option value="3">3.Pegawai</option>
                                    <option value="4">4.Siswa</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="password" name="pwd" class="form-control input-sm"
                                   placeholder="Password" required="" autocomplete="off"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" name="login" value="login"
                                        class="btn btn-success btn-block"><span class="fa fa-unlock-alt"></span>
                                    Login Sistem
                                </button>
                            </div>
                    </form>
                </div>
            </div>

        </div>
            <?php } ?>
    </div>
</div>
