<?php
require_once("../../controllers/settings.php");
$settings = new Settings();

if (isset($_POST['tab_navigation_enable'])) {
    $settings->setParams($_POST);
    $settings->updateTabEnable();
}

if (isset($_POST['colorTab'])) {
    $settings->setParams($_POST);
    $settings->updateTabColor();
}
