<?php
include "../controllers/floatings.php";
$floatings = new Floatings();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $floatings = new Floatings();
  $floatings->setParams($_POST);
  $floatings->delete();
}
?>
<!-- Content Header (Page header) -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">浮动菜单</h1>
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="index.php">仪表盘</a></li>
      <li class="breadcrumb-item active">浮动菜单</li>
    </ol>
  </div>

  <div>
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">浮动菜单列表</h6>

        <a href="?page=floating_add" class="btn btn-success btn-icon-split btn-sm">
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
              <th>图标</th>
              <th>标题</th>
              <th>链接</th>
              <th style="width: 150px;">状态</th>
              <th style="width: 210px;">操作</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($floatings->getAll() as $f) {
            ?>
              <tr>
                <td><img src="../images/floating/<?= $f['icon'] ?>?<?= time() ?>" style="width:30px" class="img-thumbnail"></td>
                <td><?= $f['title'] ?></td>
                <td><a href="<?= $f['url'] ?>" target="_blank"><?= $f['url'] ?></a></td>
                <td>
                  <span class="badge <?= $f['status'] ? 'badge-success' : 'badge-secondary' ?>"><?= $f['status'] ? "启用" : "禁用" ?></span>
                </td>
                <td>

                  <a href="?page=floating_edit&id=<?= $f['id'] ?>" class="btn btn-info btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                      <i class="fas fa-pencil-alt"></i>
                    </span>
                    <span class="text">编辑</span>
                  </a>

                  <a href="#" data-toggle="modal" data-target="#responsive-modal<?= $f['id'] ?>" class="btn btn-danger btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                      <i class="fas fa-trash"></i>
                    </span>
                    <span class="text">删除</span>
                  </a>

                  <!-- /.modal -->
                  <div class="modal fade" id="responsive-modal<?= $f['id'] ?>">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">删除</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>你确定要删除此浮动菜单吗 <b><?= $f['title'] ?></b>
                            <img src="../images/floating/<?= $f['icon'] ?>?<?= time() ?>" style="width:30px" class="img-thumbnail"> ?</p>
                        </div>

                        <form id="form-responsive-modal<?= $f['id'] ?>" method="post">
                          <div class="modal-footer justify-content-between">
                            <input type="hidden" name="id" value="<?= $f['id'] ?>" />
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
        <th>图标</th>
        <th>标题</th>
        <th>链接</th>
        <th>状态</th>
        <th>操作</th>
      </tr>
    </tfoot>
    </table>
    </div>
  </div>
</div>
 