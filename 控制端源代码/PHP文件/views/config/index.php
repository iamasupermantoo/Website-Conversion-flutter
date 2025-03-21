<?php
include "../controllers/settings.php";
$settings = new Settings();
$s = $settings->getFirst();

$name = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">配置程序</h1>
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">仪表盘</a></li>
            <li class="breadcrumb-item active">配置程序</li>
        </ol>
    </div>
    <div>
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">配置App</h6>
            </div>
            <div class="card-body">
                <div class="mb-2 alert alert-primary d-flex align-items-center" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                    </svg>
                    <div class="ml-3">
                        请复制下面配置文件,并将它粘贴到APP源代码里面 <b>FlyWeb_Flutter/assets/cfg/configartion.json</b>
                    </div>
                </div>

                
                <h5 class="text-gray-800">配置代码:</h5>

                <pre><code ><a id="code_lines">{
    "api_base_url": "<?= str_replace("views/index.php?page=config", "", $name) ?>",
    "firstColor": "<?= $s['firstColor'] ?>",
    "secondColor": "<?= $s['secondColor'] ?>",
    "appIdOneSignal": "<?= $s['onesignal_id'] ?>",
    "defaultLanguage": "en",
    "deeplink": "<?= $s['deeplink'] ?>"
}</a></code></pre>
                <button id="btn_copy" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-copy"></i>
                    </span>
                    <span class="text">复制代码</span>
                </button>
            </div>
        </div>
    </div>
</div>


<script>
    $("#btn_copy").click(function(e) {
        var $temp = $("<textarea>");
        $("body").append($temp);
        $temp.val($("#code_lines").text()).select();
        document.execCommand("copy");
        $temp.remove();
        Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        }).fire({
            type: 'success',
            html: 'Script copied'
        });
    });
</script>