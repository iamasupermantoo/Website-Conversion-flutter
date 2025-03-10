<?php
include "../controllers/settings.php";
$settings = new Settings();
$s = $settings->getFirst();
$navigatin_option = array(
	array(
		'value' => 'left',
		'title' => '左侧导航'
	),

	array(
		'value' => 'center',
		'title' => '居中导航'
	),

	array(
		'value' => 'right',
		'title' => '右侧导航'
	),

	array(
		'value' => 'empty',
		'title' => '没有导航'
	)
);

$loader_option = array(
	array(
		'value' => 'RotatingPlain',
		'title' => 'Rotating Plain'
	),
	array(
		'value' => 'DoubleBounce',
		'title' => 'Double Bounce'
	),
	array(
		'value' => 'Wave',
		'title' => 'Wave'
	),
	array(
		'value' => 'WanderingCubes',
		'title' => 'Wandering Cubes'
	),
	array(
		'value' => 'FadingFour',
		'title' => 'Fading Four'
	),
	array(
		'value' => 'FadingCube',
		'title' => 'Fading Cube'
	),

	array(
		'value' => 'Pulse',
		'title' => 'Pulse'
	),
	array(
		'value' => 'ChasingDots',
		'title' => 'Chasing Dots'
	),
	array(
		'value' => 'ThreeBounce',
		'title' => 'Three Bounce'
	),
	array(
		'value' => 'Circle',
		'title' => 'Circle'
	),
	array(
		'value' => 'CubeGrid',
		'title' => 'Cube Grid'
	),
	array(
		'value' => 'FadingCircle',
		'title' => 'Fading Circle'
	),

	array(
		'value' => 'RotatingCircle',
		'title' => 'Rotating Circle'
	),
	array(
		'value' => 'FoldingCube',
		'title' => 'Folding Cube'
	),
	array(
		'value' => 'PumpingHeart',
		'title' => 'Pumping Heart'
	),
	array(
		'value' => 'DualRing',
		'title' => 'Dual Ring'
	),
	array(
		'value' => 'HourGlass',
		'title' => 'Hour Glass'
	),
	array(
		'value' => 'PouringHourGlass',
		'title' => 'Pouring Hour Glass'
	),

	array(
		'value' => 'FadingGrid',
		'title' => 'Fading Grid'
	),
	array(
		'value' => 'Ring',
		'title' => 'Ring'
	),
	array(
		'value' => 'Ripple',
		'title' => 'Ripple'
	),
	array(
		'value' => 'SpinningCircle',
		'title' => 'Spinning Circle'
	),
	array(
		'value' => 'SquareCircle',
		'title' => 'Square Circle'
	),
	array(
		'value' => 'empty',
		'title' => 'No Loading'
	),
);

$title_option = array(
	array(
		'value' => 'text',
		'title' => '文字'
	),
	array(
		'value' => 'image',
		'title' => '图片'
	),
	array(
		'value' => 'empty',
		'title' => '空的'
	)
);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$settings->setParams($_POST, $_FILES);
	$settings->update();
	$s = $settings->getById($s["id"]);
}
?>

<!-- Content Header (Page header) -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">设置中心</h1>
		<ol class="breadcrumb float-sm-right">
			<li class="breadcrumb-item"><a href="index.php">仪表盘</a></li>
			<li class="breadcrumb-item active">设置中心</li>
		</ol>
	</div>

	<div>
		<div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">设置中心</h6>
			</div>
			<!-- Card Body -->
			<form method="post" action="" id="form" enctype="multipart/form-data">
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<input type="hidden" id="id" name="id" value="<?= $s['id'] ?>">

							<div class="form-group">
								<label for="title">顶部标题</label>
								<input type="text" class="form-control" id="title" name="title" placeholder="标题" value="<?= $s['title'] ?>" required>
							</div>
							<div class="form-group">
								<label for="url">基础链接</label>
								<input type="text" class="form-control" id="url" name="url" placeholder="链接" value="<?= $s['url'] ?>" required>
							</div>

							<!-- /.form-group -->

							<div class="form-group">
								<label for="loader">选择加载风格</label>

								<div class="d-flex justify-content-between">
									<select class="form-control loader" id="loader" name="loader" style="width: 100%;">
										<?php
										foreach ($loader_option as $option) {
										?>
											<option value="<?= $option['value'] ?>" <?php echo ($option['value'] == $s['loader']) ? ' selected="selected"' : ''; ?>><?= $option["title"] ?></option>
										<?php } ?>
									</select>
									<img src="../img/loading/<?= $s['loader'] ?>.gif" id="image_loader" style="height:40px; width: 40px; margin-left:5px" />
								</div>

							</div>
							<!-- /.form-group -->


							<!-- Color Picker -->
							<div class="form-group">
								<label>加载颜色:</label>
								<div class="input-group loaderColor">
									<input type="text" class="form-control" id="loaderColor" name="loaderColor" value="<?= $s['loaderColor'] ?>">
									<div class="input-group-append">
										<span class="input-group-text">
											<i class="fas fa-square" style="color:<?= $s['loaderColor'] ?> "></i>
										</span>
									</div>
								</div>
								<!-- /.input group -->
							</div>


							<div class="form-group">
								<label for="logo_header">顶部logo图标</label>
								<div class="input-group">
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="logo_header" name="logo_header" onChange="readURLLogo(this);">
										<label class="custom-file-label" for="logo_header">选择文件</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<img src="../images/settings/<?= $s["logo_header"] ?>?<?= time() ?>" style="width:100px; background-color: #bdbdbd" id="thumb_img_logo" class="img-thumbnail">
							</div>
							<!--
							<div class="form-group">
								<label for="image">Logo</label>
								<div class="input-group">
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="image" name="image" onChange="readURL(this);">
										<label class="custom-file-label" for="image">Choose file</label>
									</div>
								</div>
							</div> 
							<div class="form-group">
								<img src="../images/settings/<?= $s["logo"] ?>?<?= time() ?>" style="width:100px; background-color: #bdbdbd" id="thumb_img" class="img-thumbnail">
							</div> 
							-->
						</div>
						<!-- /.col -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="sub_title">副标题</label>
								<input type="text" class="form-control" id="sub_title" name="sub_title" placeholder="副标题" value="<?= $s['sub_title'] ?>" required>
							</div>
							<div class="form-group">
								<label for="navigatin_bar_style">选择导航栏风格</label>
								<select class="form-control navigatin_bar_style" id="navigatin_bar_style" name="navigatin_bar_style" style="width: 100%;">
									<?php
									foreach ($navigatin_option as $option) {
									?>
										<option value="<?= $option['value'] ?>" <?php echo ($option['value'] == $s['navigatin_bar_style']) ? ' selected="selected"' : ''; ?>><?= $option["title"] ?></option>
									<?php } ?>
								</select>
							</div>

							<div class="form-group">
								<label for="type_header">选择顶部风格 </label>
								<select class="form-control" id="type_header" name="type_header" style="width: 100%;">
									<?php
									foreach ($title_option as $option) {
									?>
										<option value="<?= $option['value'] ?>" <?php echo ($option['value'] == $s['type_header']) ? ' selected="selected"' : ''; ?>><?= $option["title"] ?></option>
									<?php } ?>
								</select>
							</div>

							<div class="form-group">
								<label for="pull_refresh">下拉刷新</label>
								<div class="custom-control custom-switch">
									<input type="checkbox" class="custom-control-input pull_refresh" id="pull_refresh" name="pull_refresh" data-bootstrap-switch <?php echo ($s["pull_refresh"] == "1") ? ' checked="checked"' : ''; ?> />
									<label class="custom-control-label" for="pull_refresh"></label>
								</div>
							</div>

							<div class="form-group">
								<label for="boarding">引导画面</label>
								<div class="custom-control custom-switch">
									<input type="checkbox" class="custom-control-input boarding" id="boarding" name="boarding" data-bootstrap-switch <?php echo ($s["boarding"] == "1") ? ' checked="checked"' : ''; ?> />
									<label class="custom-control-label" for="boarding"></label>
								</div>
							</div>

							<div class="form-group">
								<label for="title">Deeplink</label>
								<input type="text" class="form-control" id="deeplink" name="deeplink" placeholder="Deeplink" value="<?= $s['deeplink'] ?>" required>
							</div>
						</div>
						<!-- /.col -->
					</div>
					<button type="submit" class="btn btn-primary btn-icon-split">
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

<script type="text/javascript">
	$(document).ready(function() {

		$("#loader").on('change', function() {
			$('#image_loader').attr('src', '../img/loading/' + this.value + '.gif');
		});

		$("#right_button").on('change', function() {
			$('#image_right_button').attr('src', '../img/button/' + this.value + '.png');
		});

		$("#left_button").on('change', function() {
			$('#image_left_button').attr('src', '../img/button/' + this.value + '.png');
		});

		$('#form').validate({
			rules: {
				title: {
					required: true,
				},
				url: {
					url: true
				}
			},
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


<script>
	$("input#loaderColor").ColorPickerSliders({
		hsvpanel: true,
		previewformat: 'hex',
		onchange: function(container, color) {
			$('.loaderColor .fa-square').css('color', color.tiny.toHexString());
			$('.linearGradient').css('background', 'linear-gradient(135deg, ' + $("#firstColor").val() + ', ' + color.tiny.toHexString() + ' )');
		}
	});
</script>