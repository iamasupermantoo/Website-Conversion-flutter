<?php
include "../controllers/settings.php";
$settings = new Settings();
$s = $settings->getFirst();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$settings->setParams($_POST, $_FILES);
	$settings->updateAbout();
	$s = $settings->getById($s["id"]);
}
?>

<!-- Content Header (Page header) -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">关于信息</h1>
		<ol class="breadcrumb float-sm-right">
			<li class="breadcrumb-item"><a href="index.php">仪表盘</a></li>
			<li class="breadcrumb-item active">关于信息</li>
		</ol>
	</div>

	<div>
		<div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">关于我们的APP</h6>
			</div>
			<!-- Card Body -->
			<form method="post" action="" id="form" enctype="multipart/form-data">
				<div class="card-body">

					<div>
						<input type="hidden" id="id" name="id" value="<?= $s['id'] ?>">

						<div class="form-group">
							<label for="about_us">关于APP信息</label>
							<textarea class="form-control" id="about_us" name="about_us" rows="6" placeholder="关于我们"><?= $s['about_us'] ?></textarea>
						</div>
					</div>

					<button type="submit" class="btn btn-primary btn-icon-split mt-3">
						<span class="icon text-white-50">
							<i class="fas fa-save"></i>
						</span>
						<span class="text">保存</span>
					</button>

				</div>
			</form>
		</div>
	</div>
</div>