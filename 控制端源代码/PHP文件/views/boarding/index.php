<?php
include "../controllers/boarding.php";
$boarding = new Boarding();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $boarding = new Boarding();
  $boarding->setParams($_POST);
  $boarding->delete();
}
?>
<!-- Content Header (Page header) -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">引导画面</h1>
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="index.php">仪表盘</a></li>
      <li class="breadcrumb-item active">引导画面</li>
    </ol>
  </div>

  <div>
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary"> 引导画面</h6>
        <a href="?page=boarding_add" class="btn btn-success btn-icon-split btn-sm">
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
              <th>图片</th>
              <th>标题</th>
              <th>描述</th>
              <th style="width: 150px;">状态</th>
              <th style="width: 210px;">操作</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($boarding->getAll() as $m) {
            ?>
              <tr>
                <td><img src="../images/boarding/<?= $m['image'] ?>?<?= time() ?>" style="width:250px" class="img-thumbnail"></td>
                <td><?= $m['title'] ?></td>
                <td><?= $m['description'] ?></td>
                <td>
                  <span class="badge <?= $m['status'] ? 'badge-success' : 'badge-secondary' ?>"><?= $m['status'] ? "启用" : "禁用" ?></span>
                </td>
                <td>
                  <a href="?page=boarding_edit&id=<?= $m['id'] ?>" class="btn btn-info btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                      <i class="fas fa-pencil-alt"></i>
                    </span>
                    <span class="text">编辑</span>
                  </a>
                  <a href="#" data-toggle="modal" data-target="#responsive-modal<?= $m['id'] ?>" class="btn btn-danger btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                      <i class="fas fa-trash"></i>
                    </span>
                    <span class="text">删除</span>
                  </a>
                  <!-- /.modal -->
                  <div class="modal fade" id="responsive-modal<?= $m['id'] ?>">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">删除</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>你确定要删除此页面吗 <b><?= $m['title'] ?></b>
                            <img src="../images/boarding/<?= $m['image'] ?>?<?= time() ?>" style="width:30px" class="img-thumbnail"> ?
                          </p>
                        </div>
                        <form id="form-responsive-modal<?= $m['id'] ?>" method="post">
                          <div class="modal-footer justify-content-between">
                            <input type="hidden" name="id" value="<?= $m['id'] ?>" />
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
        <th>图片</th>
        <th>标题</th>
        <th>描述</th>
        <th>状态</th>
        <th>操作</th>
      </tr>
    </tfoot>
    </table>
    </div>
  </div>
</div>