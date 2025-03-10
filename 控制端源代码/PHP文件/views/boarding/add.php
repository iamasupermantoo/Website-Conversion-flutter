<?php
include "../controllers/boarding.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $boarding = new Boarding();
  $boarding->setParams($_POST, $_FILES);
  $boarding->insert();
}
 
?>
 
<!-- Content Header (Page header) -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">添加引导画面</h1>
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="index.php">仪表盘</a></li>
      <li class="breadcrumb-item"><a id="goToIndex" href="index.php?page=boarding">引导画面</a></li>
      <li class="breadcrumb-item active">添加引导画面</li>
    </ol>
  </div>

  <div>
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">添加引导画面</h6>
      </div>
      <!-- Card Body -->
      <form method="post" action="" id="form" enctype="multipart/form-data">
        <div class="card-body">

          <div class="card-body">

            <div class="row">
              <div class="form-group col-xl-6 col-md-6 mb-4">
                <label for="title">标题</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="输入标题" required>
              </div>

              <div class="form-group col-xl-6 col-md-6 mb-4">
              </div>

              <div class="form-group col-xl-6 col-md-6 mb-4">
                <label for="description">描述</label>
                <input type="description" class="form-control" id="description" name="description" placeholder="输入描述" required>
              </div>

              <div class="form-group col-xl-6 col-md-6 mb-4">
                <label for="image">图片</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image" onChange="readURL(this);">
                    <label class="custom-file-label" for="image">选择文件</label>
                  </div>
                </div>
              </div>

              <div class="form-group col-xl-6 col-md-6 mb-4">
                <label for="status">状态</label>
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="status" name="status" checked data-bootstrap-switch>
                  <label class="custom-control-label" for="status"></label>
                </div>
              </div>

              <div class="form-group col-xl-6 col-md-6 mb-4">
                <img src="../images/boarding/default.png?<?= time() ?>" style="width:200px" id="thumb_img" class="img-thumbnail">
              </div>


            </div>
            <button type="submit" class="btn btn-primary btn-icon-split">
              <span class="icon text-white-50">
                <i class="fas fa-save"></i>
              </span>
              <span class="text">保存</span>
            </button>
          </div>
          <!-- /.card-body -->

      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#form').validate({
      rules: {},
      messages: {
        title: {
          required: "Please enter a title",
        },
        url: {
          required: "Please enter a url",
          url: "Please enter valid url (http://www.example.com)",
        }
      },
      errorElement: 'div',
      errorPlacement: function(error, element) {
        error.addClass('invalid-feedback');


        element.closest('.form-group').append(error);
      },
      highlight: function(element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });
</script>