<?php
include "../controllers/settings.php";
$settings = new Settings();
$s = $settings->getFirst();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$settings->setParams($_POST, $_FILES);
	$settings->updateAdMob();
	$s = $settings->getById($s["id"]);
}
?>

<!-- Content Header (Page header) -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">adMob广告</h1>
		<ol class="breadcrumb float-sm-right">
			<li class="breadcrumb-item"><a href="index.php">仪表盘</a></li>
			<li class="breadcrumb-item active">adMob广告</li>
		</ol>
	</div>

	<div>
		<div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">adMob广告</h6>
			</div>
			<!-- Card Body -->
			<form method="post" action="" id="form" enctype="multipart/form-data">
				<div class="card-body">

					<div class="row">
						<div class="col-md-6">
							<input type="hidden" id="id" name="id" value="<?= $s['id'] ?>">
							<div class="form-group">
								<label for="admob_id">设置你的adMob ID</label>
								<input type="text" class="form-control" id="admob_id" name="admob_id" placeholder="AdMob ID" value="<?= $s['admob_id'] ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="admob_id_ios">设置你的adMob ID iOS</label>
								<input type="text" class="form-control" id="admob_id_ios" name="admob_id_ios" placeholder="AdMob ID iOS" value="<?= $s['admob_id_ios'] ?>">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="ad_banner">显示横幅广告</label>
								<div class="custom-control custom-switch">
									<input type="checkbox" class="custom-control-input" id="ad_banner" name="ad_banner" data-bootstrap-switch <?php echo ($s["ad_banner"] === "1") ? ' checked="checked"' : ''; ?>>
									<label class="custom-control-label" for="ad_banner"></label>
								</div>
							</div>
						</div>
						<div class="col-md-6">
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="admob_key_ad_banner">设置横幅广告ID</label>
								<input type="text" class="form-control" id="admob_key_ad_banner" name="admob_key_ad_banner" placeholder="设置横幅广告ID" value="<?= $s['admob_key_ad_banner'] ?>">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="admob_key_ad_banner_ios">横幅广告ID iOS</label>
								<input type="text" class="form-control" id="admob_key_ad_banner_ios" name="admob_key_ad_banner_ios" placeholder="横幅广告ID iOS" value="<?= $s['admob_key_ad_banner_ios'] ?>">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="ad_interstitial">显示插屏广告</label>
								<div class="custom-control custom-switch">
									<input type="checkbox" class="custom-control-input" id="ad_interstitial" name="ad_interstitial" data-bootstrap-switch <?php echo ($s["ad_interstitial"] === "1") ? ' checked="checked"' : ''; ?>>
									<label class="custom-control-label" for="ad_interstitial"></label>
								</div>
							</div>
						</div>
						<div class="col-md-6">
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="admob_key_ad_interstitial">设置插屏广告ID</label>
								<input type="text" class="form-control" id="admob_key_ad_interstitial" name="admob_key_ad_interstitial" placeholder="插屏广告ID" value="<?= $s['admob_key_ad_interstitial'] ?>">
							</div>
						</div>



						<div class="col-md-6">
							<div class="form-group">
								<label for="admob_key_ad_interstitial_ios">插屏广告ID iOS</label>
								<input type="text" class="form-control" id="admob_key_ad_interstitial_ios" name="admob_key_ad_interstitial_ios" placeholder="AdMob Key Ad Interstitial iOS" value="<?= $s['admob_key_ad_interstitial_ios'] ?>">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="admob_dealy">设置几秒显示 </label>
								<input type="text" class="form-control" id="admob_dealy" name="admob_dealy" placeholder="设置几秒显示" value="<?= $s['admob_dealy'] ?>">
							</div>
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