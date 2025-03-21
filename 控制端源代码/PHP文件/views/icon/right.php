<?php
include "../controllers/RightNavigationIcon.php";
$rightNavigationIcon = new RightNavigationIcon();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['change_status'])) {
  $rightNavigationIcon = new RightNavigationIcon();
  $rightNavigationIcon->setParams($_POST);
  $rightNavigationIcon->enable();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['change_url'])) {
  $rightNavigationIcon = new RightNavigationIcon();
  $rightNavigationIcon->setParams($_POST);
  $rightNavigationIcon->change_url();
}

?>

<!-- Content Header (Page header) -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">顶部右边图标</h1>
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="index.php">仪表盘</a></li>
      <li class="breadcrumb-item active">右边图标</li>
    </ol>
  </div>

  <div>
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">顶部右边图标</h6>

      </div>
      <!-- Card Body -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th style="width: 80px;">图标</th>
              <th>标题</th>
              <th>链接</th>
              <th style="width: 150px;">状态</th>
              <th style="width: 150px;">操作</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $listEnable = $rightNavigationIcon->getAllEnableList() ;
            $list = $rightNavigationIcon->getAll() ;
            foreach ( $list as $i) {
            ?>
              <tr>
                <td><img src="../images/right_navigation_icon/<?= $i['icon'] ?>?<?= time() ?>" style="width:40px" class="img-thumbnail"></td>
                <td><?= $i['title'] ?></td>
                <td>
                  <?php
                  if ($i['type'] == "url") { 
                  ?> 
                    <form id="change_url<?= $i['id'] ?>" name="change_url" method="post">
                      <input type="hidden" name="id" value="<?= $i['id'] ?>" />

                      <input type="hidden" name="change_url" value="change_url" /> 
                      
                      <a href="<?= $i['url'] ?>" id="show_url<?= $i['id'] ?>" target="_blank"><?= $i['url'] ?></a>

                      <div class="form-group" style="display:none" id="url<?= $i['id'] ?>">
                        <input type="text" class="form-control" name="url" placeholder="链接" value="<?= $i['url'] ?>" required>
                      </div>
                      <br>
                      <button id="btn_save<?= $i['id'] ?>" style="display:none" onclick="document.getElementById('show_url<?= $i['id'] ?>').style.display = 'none';
                            document.getElementById('url<?= $i['id'] ?>').style.display = 'inline';" role="button" class="btn btn-success btn-icon-split btn-sm">
                        <span class="icon text-white-50">
                          <i class="fas fa-pencil-alt"></i>
                        </span>
                        <span class="text">保存链接</span>
                      </button>
                    </form>

                    <button id="btn_edit<?= $i['id'] ?>" onclick="
                            document.getElementById('btn_edit<?= $i['id'] ?>').style.display = 'none';
                            document.getElementById('show_url<?= $i['id'] ?>').style.display = 'none';
                            document.getElementById('url<?= $i['id'] ?>').style.display = 'inline';
                            document.getElementById('btn_save<?= $i['id'] ?>').style.display = 'inline';" role="button" class="btn btn-success btn-icon-split btn-sm">
                      <span class="icon text-white-50">
                        <i class="fas fa-pencil-alt"></i>
                      </span>
                      <span class="text">编辑链接</span>
                    </button>
                  <?php  } ?>
                </td>
                <td>
                  <span class="badge <?= $i['status'] ? 'badge-success' : 'badge-secondary' ?>"><?= $i['status'] ? "启用" : "禁用" ?></span>
                </td>
                <td>
                  <form id="change_status<?= $i['id'] ?>" name="change_status" method="post">
                    <input type="hidden" name="id" value="<?= $i['id'] ?>" />

                    <input type="hidden" name="change_status" value="change_status" /> 

                    <a href="#" onclick="document.getElementById('change_status<?= $i['id'] ?>').submit()" role="button" class="btn  btn-icon-split btn-sm <?= $i['status'] ? 'btn-danger' : 'btn-success' ?>  <?= (count($listEnable)==3 && $i['status'] =='0') ? 'disabled' : '' ?>">
                      <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                      </span>
                      <span class="text"> <?= $i['status'] ? '禁用' : '启用' ?> </span>
                    </a>

                  </form>
                </td>


              </tr>

            <?php } ?>
          </tbody>
          <tfoot>
            <tr>
              <th>图标</th>
              <th>标题</th>
              <th>类型</th>
              <th>状态</th>
              <th>操作</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>

  </div>