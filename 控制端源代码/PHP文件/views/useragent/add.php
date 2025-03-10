<?php
include "../controllers/userAgent.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $userAgent = new UserAgent();
  $userAgent->setParams($_POST, $_FILES);
  $userAgent->insert();
}
?>

<!-- Content Header (Page header) -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">用户代理</h1>
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="index.php">仪表盘</a></li>
      <li class="breadcrumb-item"><a id="goToIndex" href="index.php?page=useragent">用户代理</a></li>
      <li class="breadcrumb-item active">添加用户代理</li>
    </ol>
  </div>

  <div>
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">添加用户代理</h6>
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
                <label for="value_android">用户代理android</label>
                <textarea class="form-control" id="value_android" name="value_android" rows="6" placeholder="用户代理android"></textarea>
              </div>

              <div class="form-group col-xl-6 col-md-6 mb-4">
                <label for="value_ios">用户代理iOS</label>
                <textarea class="form-control" id="value_ios" name="value_ios" rows="6" placeholder="用户代理iOS"></textarea>
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