<?php
include "../controllers/userAgent.php";
$useragent = new UserAgent();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
  $useragent = new UserAgent();
  $useragent->setParams($_POST);
  $useragent->delete();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['change_status'])) {
  $useragent = new UserAgent();
  $useragent->setParams($_POST);
  $useragent->enable();
}
?>
<!-- Content Header (Page header) -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">用户代理</h1>
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="index.php">仪表盘</a></li>
      <li class="breadcrumb-item active">用户代理</li>
    </ol>
  </div>

  <div>
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">用户代理列表</h6>
        <a href="?page=useragent_add" class="btn btn-success btn-icon-split btn-sm">
          <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
          </span>
          <span class="text">添加</span>
        </a>
      </div>
      <!-- Card Body -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>标题</th>
              <th style="width: 150px;">状态</th>
              <th style="width: 110px;">启用</th>
              <th style="width: 210px;">操作</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($useragent->getAll() as $u) {
            ?>
              <tr>
                <td><?= $u['title'] ?></td>
                <td>
                  <span class="badge <?= $u['status'] ? 'badge-success' : 'badge-secondary' ?>"><?= $u['status'] ? "启用" : "禁用" ?></span>
                </td>
                <td>
                  <form id="change_status<?= $u['id'] ?>" name="change_status" method="post">
                    <input type="hidden" name="id" value="<?= $u['id'] ?>" />
                    <input type="hidden" name="change_status" value="change_status" />
                    <a href="#" onclick="document.getElementById('change_status<?= $u['id'] ?>').submit()" role="button" class="btn btn-success btn-icon-split btn-sm  <?= $u['status'] ? 'disabled' : '' ?>">
                      <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                      </span>
                      <span class="text">启用</span>
                    </a>
                  </form>
                </td>
                <td>
                  <a href="?page=useragent_edit&id=<?= $u['id'] ?>" class="btn btn-info btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                      <i class="fas fa-pencil-alt"></i>
                    </span>
                    <span class="text">编辑</span>
                  </a>
                  <a href="#" data-toggle="modal" data-target="#responsive-modal<?= $u['id'] ?>" class="btn btn-danger btn-icon-split btn-sm  <?= $u['status'] ? 'disabled' : '' ?>">
                    <span class="icon text-white-50">
                      <i class="fas fa-trash"></i>
                    </span>
                    <span class="text">删除</span>
                  </a>
                  <!-- /.modal -->
                  <div class="modal fade" id="responsive-modal<?= $u['id'] ?>">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">删除</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>你确定要删除此代理吗 <b><?= $u['title'] ?></b>
                        </div>
                        <form id="form-responsive-modal<?= $u['id'] ?>" name="delete" method="post">
                          <div class="modal-footer justify-content-between">
                            <input type="hidden" name="id" value="<?= $u['id'] ?>" />
                            <input type="hidden" name="delete" value="delete" />
                            <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                            <button type="submit" class="btn btn-danger waves-effect waves-light">删除</button>
                        </form>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
      </div>
      <!-- End Modal -->
      </td>
      </tr>
    <?php } ?>
    </tbody>
    <tfoot>
      <tr>
        <th>标题</th>
        <th>状态</th>
        <th>启用</th>
        <th>操作</th>
      </tr>
    </tfoot>
    </table>
    </div>
  </div>
</div>