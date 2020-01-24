<!-- Fixed navbar -->
  <div class="container">
        <div class="navbar-header-">
              <?php if (isset($_SESSION['user'])) { ?>
                  <p align="right"><strong><?=$_SESSION['nama']?></strong> Anda masuk sebagai <strong><?=$_SESSION['ket']?></strong></p>
            <?php  } else {

            }?>

        </div>
    </div>
