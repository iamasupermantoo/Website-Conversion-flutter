<?php
include "../controllers/users.php";
$users = new Users();
$u = $users->getFirst();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$users->setParams($_POST, $_FILES);
	$users->update();
	$u = $users->getById($u["id"]);
}
?>

<!-- Content Header (Page header) -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">资料中心</h1>
		<ol class="breadcrumb float-sm-right">
			<li class="breadcrumb-item"><a href="index.php">仪表盘</a></li>
			<li class="breadcrumb-item active">资料中心</li>
		</ol>
	</div> 
	<div>
		<div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">资料中心</h6>
			</div>
			<!-- Card Body -->
			<form method="post" action="" id="form" enctype="multipart/form-data">
				<div class="card-body">

					<div class="row">
						<input type="hidden" id="id" name="id" value="<?= $u['id'] ?>">

						<div class="form-group  col-xl-6 col-md-6 mb-4">
							<label for="first_name">名字</label>
							<input type="text" class="form-control" id="first_name" name="first_name" placeholder="名字" value="<?= $u['first_name'] ?>" required>
						</div>
						<div class="form-group  col-xl-6 col-md-6 mb-4">
							<label for="last_name">姓名</label>
							<input type="text" class="form-control" id="last_name" name="last_name" placeholder="last_name" value="<?= $u['last_name'] ?>" required>
						</div>

						<div class="form-group  col-xl-6 col-md-6 mb-4">
							<label for="email">电子邮件</label>
							<input type="text" class="form-control" id="email" name="email" placeholder="电子邮件" value="<?= $u['email'] ?>" required>
						</div>
						<div class="form-group  col-xl-6 col-md-6 mb-4">
							<label for="image">头像</label>
							<div class="input-group">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="image" name="image" onChange="readURL(this);">
									<label class="custom-file-label" for="image">选择文件</label>
								</div>
							</div>
						</div>

						<div class="form-group  col-xl-6 col-md-6 mb-4">
						</div>

						<div class="form-group col-xl-6 col-md-6 mb-4">
							<img src="../images/users/<?= $u["picture"] ?>?<?= time() ?>" style="width:70px" id="thumb_img" class="img-thumbnail">
						</div>

						<!-- /.col -->
					</div>

					<div>

						<button type="submit" class="btn btn-primary btn-icon-split mr-3">
							<span class="icon text-white-50">
								<i class="fas fa-save"></i>
							</span>
							<span class="text">保存</span>
						</button>

						<a href="?page=profile_password" class="btn btn-info btn-icon-split">
							<span class="icon text-white-50">
								<i class="fas fa-key"></i>
							</span>
							<span class="text">修改密码</span>
						</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
 
<script type="text/javascript">
	$(document).ready(function() {

		$('#form').validate({
			rules: {
				first_name: {
					required: true,
				},
				last_name: {
					required: true,
				},
				email: {
					required: true,
					email: true
				}
			},
			messages: {
				first_name: {
					required: "Please enter a first name",
				},
				last_name: {
					required: "Please enter a first name",
				},
				email: {
					required: "Please enter a email",
					email: "Please enter valid email",
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