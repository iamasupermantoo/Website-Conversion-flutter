<?php
$active = "";
$active_sub = "";
if (isset($_GET['page'])) {
  $action = $_GET['page'];
  $url = explode("_", $action);
  if (count($url) == 1) {
    $active = $url[0];
    $active_sub = $url[0] . "_list";
  } else {
    $active = $url[0];
    $active_sub = $url[0] . "_" . $url[1];
  }
} else {
  $active = "dashboard";
}
?>

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../views/index.php">
    <div class="sidebar-brand-icon">
      <img src="../img/logo.png" width="40" />
    </div>
    <div class="sidebar-brand-text mx-3">松果应用</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item <?= $active == 'dashboard' ? 'active' : '' ?>">
    <a class="nav-link" href="../views/index.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>仪表盘</span></a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider">
 
  <!-- Heading -->
  <div class="sidebar-heading">
    设置程序
  </div>
 
  <!-- Nav Item - Settings -->
  <li class="nav-item <?= $active == 'settings' ? 'active' : '' ?>">
    <a class="nav-link" href="../views/index.php?page=settings">
      <i class="fas fa-cogs"></i>
      <span>设置中心</span>
    </a>
  </li>

  <!-- Nav Item - Config app -->
  <li class="nav-item <?= $active == 'config' ? 'active' : '' ?>">
    <a class="nav-link" href="../views/index.php?page=config">
      <i class="fas fa-plug"></i>
      <span>配置程序</span>
    </a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider">
 
  <!-- Heading -->
  <div class="sidebar-heading">
    界面与设计
  </div>

  <!-- Nav Item - Settings -->
  <li class="nav-item <?= $active == 'splash' ? 'active' : '' ?>">
    <a class="nav-link" href="../views/index.php?page=splash">
      <i class="fas fa-clone"></i>
      <span>启动画面</span>
    </a>
  </li>

   <!-- Nav Item - Boarding Collapse  -->
   <li class="nav-item  <?= $active == 'boarding' ? 'active' : '' ?> ">
    <a class=" nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBoarding" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-images"></i>
      <span>引导列表</span>
    </a>
    <div id="collapseBoarding" class="collapse <?= $active == 'boarding' ? 'show' : '' ?> " aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">引导画面:</h6>
        <a class="collapse-item  <?= $active_sub == 'boarding_list' ? 'active' : '' ?>" href="../views/index.php?page=boarding">引导画面</a>
        <a class="collapse-item  <?= $active_sub == 'boarding_add' ? 'active' : '' ?>" href="../views/index.php?page=boarding_add">添加引导</a>
      </div>
    </div>
  </li>
 
  <!-- Nav Item - Pages Collapse Social -->
  <li class="nav-item  <?= $active == 'icon' ? 'active' : '' ?> ">
    <a class=" nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHeader" aria-expanded="true" aria-controls="collapseHeader">
      <i class="fas fa-heading"></i>
      <span>顶部导航图标</span>
    </a>
    <div id="collapseHeader" class="collapse <?= $active == 'icon' ? 'show' : '' ?> " aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">顶部导航:</h6>
        <a class="collapse-item  <?= $active_sub == 'icon_left' ? 'active' : '' ?>" href="../views/index.php?page=icon_left">
          左边图标
        </a>
        <a class="collapse-item  <?= $active_sub == 'icon_right' ? 'active' : '' ?>" href="../views/index.php?page=icon_right">
          右边图标
        </a>
      </div>
    </div>
  </li>







  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item  <?= $active == 'menu' ? 'active' : '' ?> ">
    <a class=" nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-list"></i>
      <span>菜单项目</span>
    </a>
    <div id="collapseTwo" class="collapse <?= $active == 'menu' ? 'show' : '' ?> " aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">菜单项目:</h6>
        <a class="collapse-item  <?= $active_sub == 'menu_list' ? 'active' : '' ?>" href="../views/index.php?page=menu">菜单列表</a>
        <a class="collapse-item  <?= $active_sub == 'menu_add' ? 'active' : '' ?>" href="../views/index.php?page=menu_add">添加菜单</a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Pages Collapse Pages -->
  <li class="nav-item  <?= $active == 'pages' ? 'active' : '' ?> ">
    <a class=" nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-copy"></i>
      <span>页面列表</span>
    </a>
    <div id="collapsePage" class="collapse <?= $active == 'pages' ? 'show' : '' ?> " aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">页面列表:</h6>
        <a class="collapse-item  <?= $active_sub == 'pages_list' ? 'active' : '' ?>" href="../views/index.php?page=pages">页面列表</a>
        <a class="collapse-item  <?= $active_sub == 'pages_add' ? 'active' : '' ?>" href="../views/index.php?page=pages_add">添加页面</a>
      </div>
    </div>
  </li>

  <!-- Nav Item - App color -->
  <li class="nav-item <?= $active == 'tab' ? 'active' : '' ?>">
    <a class="nav-link" href="../views/index.php?page=tab">
      <i class="fas fa-fw fa-ellipsis-h"></i>
      <span>底部菜单</span>
    </a>
  </li>


  <!-- Nav Item - Pages Collapse Pages -->
  <li class="nav-item  <?= $active == 'floating' ? 'active' : '' ?> ">
    <a class=" nav-link collapsed" href="#" data-toggle="collapse" data-target="#floatingPage" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fas fa-plus"></i>
      <span>浮动按钮</span>
    </a>
    <div id="floatingPage" class="collapse <?= $active == 'floating' ? 'show' : '' ?> " aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">浮动按钮:</h6>
        <a class="collapse-item  <?= $active_sub == 'floating' ? 'active' : '' ?>" href="../views/index.php?page=floating">浮动列表</a>
        <a class="collapse-item  <?= $active_sub == 'floating_add' ? 'active' : '' ?>" href="../views/index.php?page=floating_add">添加浮动</a>
      </div>
    </div>
  </li>
 
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    配置程序
  </div>
 
  <!-- Nav Item - App color -->
  <li class="nav-item <?= $active == 'colors' ? 'active' : '' ?>">
    <a class="nav-link" href="../views/index.php?page=colors">
      <i class="fas fa-fw fa-wrench"></i>
      <span>APP颜色</span></a>
  </li>

  <!-- Nav Item - Settings -->
  <li class="nav-item <?= $active == 'useragent' ? 'active' : '' ?>">
    <a class="nav-link" href="../views/index.php?page=useragent">
      <i class="fas fa-cogs"></i>
      <span>用户代理</span>
    </a>
  </li>
 
  <li class="nav-item <?= $active == 'application' ? 'active' : '' ?>">
    <a class="nav-link" href="../views/index.php?page=application">
      <i class="fas fa-mobile-alt"></i>
      <span>程序信息</span></a>
  </li>
 
  <li class="nav-item <?= $active == 'admob' ? 'active' : '' ?>">
    <a class="nav-link" href="../views/index.php?page=admob">
      <i class="fas fa-ad"></i>
      <span>广告AdMob</span></a>
  </li>
 
  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    App信息
  </div>

 
  <li class="nav-item <?= $active == 'about' ? 'active' : '' ?>">
    <a class="nav-link" href="../views/index.php?page=about">
      <i class="fas fa-info-circle"></i>
      <span>关于信息</span></a>
  </li>
 
  <!-- Nav Item - Pages Collapse Social -->
  
  <!-- Divider -->

  <li class="nav-item <?= $active == 'share' ? 'active' : '' ?>">
    <a class="nav-link" href="../views/index.php?page=share">
      <i class="fas fa-share-alt"></i>
      <span>分享内容</span></a>
  </li>
 
<!--<li class="nav-item  <?= $active == 'notification' ? 'active' : '' ?> ">
    <a class=" nav-link collapsed" href="#" data-toggle="collapse" data-target="#notification" aria-expanded="true" aria-controls="notification">
      <i class="fas fa-bell"></i>
      <span>Send notification</span>
    </a>
    <div id="notification" class="collapse <?= $active == 'notification' ? 'show' : '' ?> " aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Menu Items:</h6>
        <a class="collapse-item  <?= $active_sub == 'notification_list' ? 'active' : '' ?>" href="../views/index.php?page=notification">OneSignal Config</a>
        <a class="collapse-item  <?= $active_sub == 'notification_send' ? 'active' : '' ?>" href="../views/index.php?page=notification_send">Send notification</a>
      </div>
    </div>
  </li>-->

  <!--
  <li class="nav-item <?= $active == 'update' ? 'active' : '' ?>">
    <a class="nav-link" href="../views/index.php?page=update">
      <i class="fas fa-fw fa-sync"></i>
      <span>Update version</span></a>
  </li>
  -->
 
  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    资料中心
  </div>

  <!-- Nav Item - Logout -->
  <li class="nav-item <?= $active == 'profile' ? 'active' : '' ?>">
    <a class="nav-link" href="../views/index.php?page=profile">
      <i class="fas fa-user"></i>
      <span>个人资料</span></a>
  </li>
 
  <!-- Nav Item - Logout -->
  <li class="nav-item">
    <a class="nav-link" href="../logout.php">
      <i class="fas fa-sign-out-alt"></i>
      <span>退出登录</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>