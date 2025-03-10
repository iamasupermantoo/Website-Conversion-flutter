<?php
include "../controllers/settings.php";
include "../controllers/menus.php";
$settings = new Settings();
$menus = new Menus();
$s = $settings->getFirst();
?>

<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">仪表盘</h1>
  </div>

  <div>
    <h4>欢迎你 <strong><?= $_SESSION['user']["last_name"] ?> <?= $_SESSION['user']["first_name"] ?></strong></h4>
  </div>

  <!-- Content Row -->
  <div class="row">
    <div class="col-lg-12 mb-4">
      <!-- Approach -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">你的应用程序颜色</h6>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6 mb-4">
              <div class="card bg-primary text-white shadow" style="background-color:<?= $s["firstColor"] ?>!important;">
                <div class="card-body">
                  第一颜色
                  <div class="text-white-50 small"><?= $s["firstColor"] ?></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="card bg-success text-white shadow" style="background-color:<?= $s["secondColor"] ?>!important;">
                <div class="card-body">
                  第二颜色
                  <div class="text-white-50 small"><?= $s["secondColor"] ?></div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>



  <div class="row">

    <!-- Area Chart -->
    <div class="col-lg-12 mb-4">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">最新5菜单</h6>
          <div class="dropdown no-arrow">

          </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <?php
          foreach ($menus->getLast() as $m) {
          ?>
            <strong>
              <img src="../images/menu/<?= $m['icon'] ?>?<?= time() ?>" style="width:16px;padding-right: 4px;" alt="" /> <?= $m['title'] ?>
            </strong>
            <p class="text-muted">
              <a href="<?= $m['url'] ?>" target="_blank"><?= $m['url'] ?></a>
            </p> 
            <hr> 
          <?php
          }
          ?>
          <a href="?page=menu" class="small-box-footer">查看所有 <i class="fas fa-arrow-circle-right"></i></a>

        </div>
      </div>
    </div>
  </div>
  
</div>