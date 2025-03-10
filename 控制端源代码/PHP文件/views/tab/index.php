<?php
include "../controllers/tab.php";
include "../controllers/settings.php";

$tab = new Tab();

$settings = new Settings();
$s = $settings->getFirst();
?>
<!-- Content Header (Page header) -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">配置底部菜单</h1>
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="index.php">仪表盘</a></li>
      <li class="breadcrumb-item active">底部菜单</li>
    </ol>
  </div>

  <div>
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">底部菜单</h6>
      </div>
      <!-- Card Body -->
      <div class="card-body">

        <form method="post" action="" id="settings">
          <div class="col-md-6">
            <div class="form-group">
              <label for="tab_navigation_enable">启用底部菜单</label>
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input tab_navigation_enable" id="tab_navigation_enable" name="tab_navigation_enable" data-bootstrap-switch <?php echo ($s["tab_navigation_enable"] == "1") ? ' checked="checked"' : ''; ?> />
                <label class="custom-control-label" for="tab_navigation_enable"></label>
              </div>
            </div>
          </div>
          <div class="col-md-6">

            <!-- Color Picker -->
            <div class="form-group">
              <label>第一颜色:</label>

              <div class="input-group colorTab">
                <input type="text" class="form-control" id="colorTab" name="colorTab" value="<?= $s["colorTab"] ?>">

                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-square" style="color:<?= $s['colorTab'] ?>"></i></span>
                </div>
              </div>
              <!-- /.input group -->
            </div>
          </div>

        </form>

        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>图标</th>
              <th>标题</th>
              <th>链接</th>
              <th>状态</th>
              <th style="width: 110px;">操作</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($tab->getAll() as $t) {
            ?>
              <tr>
                <td><img src="../images/tab/<?= $t['icon'] ?>?<?= time() ?>" style="width:30px" class="img-thumbnail"></td>
                <td><?= $t['title'] ?></td>
                <td><a href="<?= $t['url'] ?>" target="_blank"><?= $t['url'] ?></a></td> 
                <td>
                  <span class="badge <?= $t['status'] ? 'badge-success' : 'badge-secondary' ?>"><?= $t['status'] ? "启用" : "禁用" ?></span>
                </td>
                <td>
                  <a href="?page=tab_edit&id=<?= $t['id'] ?>" class="btn btn-info btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                      <i class="fas fa-pencil-alt"></i>
                    </span>
                    <span class="text">编辑</span>
                  </a>
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

</div>

<script>
  $("input#colorTab").ColorPickerSliders({
    hsvpanel: true,
    previewformat: 'hex',
    onchange: function(container, color) {
      $('.colorTab .fa-square').css('color', color.tiny.toHexString());

      $.ajax({
        type: "POST",
        url: '../api/settings/changeTab.php',
        data: {
          "colorTab": color.tiny.toHexString()
        },
        success: function(response) {
          var jsonData = JSON.parse(response);

          console.log(jsonData.success)
        }
      });
    }
  });


  $('#tab_navigation_enable').change(function() {
    var tab_checked = $(this).is(':checked');
    $.ajax({
      type: "POST",
      url: '../api/settings/changeTab.php',
      data: {
        "tab_navigation_enable": tab_checked == true ? "1" : "0",
      },
      success: function(response) {
        var jsonData = JSON.parse(response);

        console.log(jsonData.success)
      }
    });
  });
</script>