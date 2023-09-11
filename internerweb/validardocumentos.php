
<?php

session_start();


if(is_null($_SESSION['nome'])){
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="pt">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="A conta digital do Banco Icard Pay" />
<meta name="author" content="Icard Pay" />
<meta name="robots" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="A conta digital do Banco Icard Pay" />
<meta property="og:title" content="Icard" />
<meta property="og:description" content="A conta digital do Banco Icard Pay" />

<meta name="format-detection" content="telephone=no">

<title>Icard Pay - Sua Conta Digital</title>

<link rel="shortcut icon" type="image/png" href="https://agils.acessarminhaconta.com/views/assets/images/favicon.png" />
<link rel="stylesheet" href="https://cdn.acessarminhaconta.com/vendor/select2/css/select2.min.css">

<link href="https://cdn.acessarminhaconta.com/vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

<link href="https://cdn.acessarminhaconta.com/vendor/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">

<link href="https://cdn.acessarminhaconta.com/vendor/jquery-asColorPicker/css/asColorPicker.min.css" rel="stylesheet">

<link href="https://cdn.acessarminhaconta.com/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.acessarminhaconta.com/vendor/pickadate/themes/default.css">
<link rel="stylesheet" href="https://cdn.acessarminhaconta.com/vendor/pickadate/themes/default.date.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.acessarminhaconta.com/vendor/chartist/css/chartist.min.css">

<link href="https://cdn.acessarminhaconta.com/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.acessarminhaconta.com/vendor/owl-carousel/owl.carousel.css">

<link href="https://agils.acessarminhaconta.com/views/assets/plugins/sweet-alert/jquery.sweet-modal.min.css" rel="stylesheet" />
<link href="https://agils.acessarminhaconta.com/views/assets/plugins/sweet-alert/sweetalert2.min.css" rel="stylesheet" />

<link rel="stylesheet" href="https://cdn.acessarminhaconta.com/vendor/owl-carousel/owl.theme.css">
<link href="https://cdn.acessarminhaconta.com/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="https://cdn.acessarminhaconta.com/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.acessarminhaconta.com/vendor/nouislider/nouislider.min.css">

<link href="https://agils.acessarminhaconta.com/views/assets/css/style.css" rel="stylesheet">
</head>
<body>

<div id="preloader">
<div class="waviy">
<span style="--i:1">C</span>
<span style="--i:2">a</span>
<span style="--i:3">r</span>
<span style="--i:4">r</span>
<span style="--i:5">e</span>
<span style="--i:6">g</span>
<span style="--i:7">a</span>
<span style="--i:8">n</span>
<span style="--i:9">d</span>
<span style="--i:10">o</span>
</div>
</div>


<div id="main-wrapper">

<div class="nav-header">
<div class="nav-control">
<div class="hamburger">
<span class="line"></span><span class="line"></span><span class="line"></span>
</div>
</div>

</div>


<div class="header">
<div class="header-content">
<nav class="navbar navbar-expand">
<div class="collapse navbar-collapse justify-content-between">
<div class="header-left">
<div class="dashboard_bar">
Icard Pay | Sua conta digital </div>
</div>
<ul class="navbar-nav header-right">
<li class="nav-item">


<div class="dropdown-menu dropdown-menu-end">
<div id="dlab_W_Notification1" class="widget-media dlab-scroll p-3">
<ul class="timeline">
</ul>
</div>
</div>
</li>
<li class="nav-item">
<a href="#" class="btn btn-primary d-sm-inline-block d-none"><?php echo $_SESSION['nome']?> | Status: <strong>Conta não validada X</strong></a>
</li>
</ul>
</div>
</nav>
</div>
</div>


<div class="dlabnav">
<div class="dlabnav-scroll">
<ul class="metismenu" id="menu">
<li class="dropdown header-profile">
<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">

<div class="header-info ms-3">
<span class="font-w600 ">Olá,<b><?php echo $_SESSION['nome']?> </b></span>

</div>
</a>

</li>
<li><a href="#" aria-expanded="false">
<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-window-sidebar" viewBox="0 0 16 16">
<path d="M2.5 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm1 .5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
<path d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v2H1V3a1 1 0 0 1 1-1h12zM1 13V6h4v8H2a1 1 0 0 1-1-1zm5 1V6h9v7a1 1 0 0 1-1 1H6z" />
</svg>
<span class="nav-text">Início</span>
</a>
</li>
<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-x-diamond-fill" viewBox="0 0 16 16">
<path d="M9.05.435c-.58-.58-1.52-.58-2.1 0L4.047 3.339 8 7.293l3.954-3.954L9.049.435zm3.61 3.611L8.708 8l3.954 3.954 2.904-2.905c.58-.58.58-1.519 0-2.098l-2.904-2.905zm-.706 8.614L8 8.708l-3.954 3.954 2.905 2.904c.58.58 1.519.58 2.098 0l2.905-2.904zm-8.614-.706L7.292 8 3.339 4.046.435 6.951c-.58.58-.58 1.519 0 2.098l2.904 2.905z" />
</svg>
<span class="nav-text">Serviços</span>
</a>
<ul aria-expanded="false">
<li><a href="#">Área Pix</a></li>

<li><a href="#">Recarga de celular</a></li>
<li><a href="#">Simular Crédito</a></li>
<li><a href="#">Telefonia</a></li>
<li><a href="#">Câmbio</a></li>
</ul>
</li>
<li><a href="#" aria-expanded="false">
<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
<path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
<path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
</svg>
<span class="nav-text">Extrato</span>
</a>
</li>
<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
<path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z" />
</svg>
<span class="nav-text">Cobrança</span>
</a>
<ul aria-expanded="false">
<li><a href="#">Minhas Cobranças</a></li>

<li><a href="#">Cobrar</a></li>

<li><a href="#">Link de  Pagamento</a></li>
</ul>
</li>
<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-upc-scan" viewBox="0 0 16 16">
<path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5zM3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z" />
</svg>
<span class="nav-text">Pagar</span>
</a>
<ul aria-expanded="false">
<li><a href="#">Boleto</a></li>

</ul>
</li>
<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-shield-fill-check" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647z" />
</svg>
<span class="nav-text">Segurança</span>
 </a>
<ul aria-expanded="false">

<li><a href="#">Cadastrar Senha Cartão</a></li>
<li><a href="#">Alterar/Cadastrar Senha Financeira</a></li>
<li><a href="#">Alterar Senha</a></li>
</ul>
</li>

<li><a href="sair.php" aria-expanded="false">
<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
<span class="nav-text">Sair</span>
</a>
</li>
</ul>
<div class="copyright">
<p>© 2023 Todos os direitos reservados <strong>ICARD PAGAMENTOS LTDA</strong></p>
</div>
</div>
</div>


<div class="content-body">

<div class="container-fluid">
<div class="row invoice-card-row">
<div class="col-xl-12 col-xxl-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Validar Conta</h4><a href=""><button type="submit" class="btn btn-block btn-primary">Voltar</button></a>
</div>
<div class="card-body">
<div id="smartwizard" class="form-wizard order-create">

<form id="formDocs" class="form" method="post" role="form" enctype="multipart/form-data">
<div class="">
<input type="hidden" id="step3Doc" name="step3Doc" value="1">
<div id="wizard_Selfie" class="tab-pane" role="tabpanel">
<div class="row">
<div class="mb-3"><h3><strong>Nos envie uma selfie contendo somente seu rosto</strong></h3></div>
<div class="col-xl-4 col-lg-12">
<div class="card overflow-hidden">
<div class="card-body text-center">
<div class="profile-photo mb-5">
<img src="https://agils.acessarminhaconta.com/views/assets/images/selfie.png" width="200" class="img-fluid" alt="">
</div>
<h6 class="mt-4 mb-1">Selfie</h6>
<h5><strong>Não utilize acessórios em sua selfie, boné, óculos por exemplo</strong></h5>
</div>
</div>
</div>
<div class="col-xl-8 col-lg-12">
<div class="card">
<div class="card-body">
<input type="hidden" id="nocam" value="1">
<div class="col-xl-12">
<div class="card coin-card">
<div class="card-body d-sm-flex d-block align-items-center">
<span class="coin-icon">
<img src="https://agils.acessarminhaconta.com/views/assets/images/info.png" width="38px" height="41px">
</span>
<div>
<h3 class="text-white"><strong>Atenção!</strong></h3>
<p>Aceitamos arquivos de extensões <strong>PNG, JPG, JPEG</strong><br> Tamanho máximo de <strong>2MB</strong></p>
</div>
</div>
</div>
</div>
<div class="basic-form">
<div class="input-group mb-3">
<button class="btn btn-primary btn-sm" type="button">Upload</button>
<div class="form-file">
<input name="fotoSelfie" type="file" class="form-file-input form-control" required="">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="mb-3 row">
<div class="col-sm-12">
<button type="submit" class="btn btn-lg btn-block btn-primary">Próximo</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<script src="https://cdn.acessarminhaconta.com/vendor/global/global.min.js"></script>
<script src="https://cdn.acessarminhaconta.com/vendor/chart.js/Chart.bundle.min.js"></script>
<script src="https://cdn.acessarminhaconta.com/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="https://cdn.acessarminhaconta.com/vendor/jquery-steps/build/jquery.steps.min.js"></script>
<script src="https://cdn.acessarminhaconta.com/vendor/jquery-validation/jquery.validate.min.js"></script>

<script src="https://agils.acessarminhaconta.com/views/assets/js/plugins-init/jquery.validate-init.js"></script>

<script src="https://cdn.acessarminhaconta.com/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js"></script>
<script src="https://cdn.acessarminhaconta.com/vendor/owl-carousel/owl.carousel.js"></script>

<script src="https://cdn.acessarminhaconta.com/vendor/chartist/js/chartist.min.js"></script>
<script src="https://cdn.acessarminhaconta.com/vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
<script src="https://cdn.acessarminhaconta.com/app-assets/js/scripts/price-format/jquery.price_format.2.0.min.js"></script>

<script src="https://cdn.acessarminhaconta.com/vendor/flot/jquery.flot.js"></script>
<script src="https://cdn.acessarminhaconta.com/vendor/flot/jquery.flot.pie.js"></script>
<script src="https://cdn.acessarminhaconta.com/vendor/flot/jquery.flot.resize.js"></script>
<script src="https://cdn.acessarminhaconta.com/vendor/flot-spline/jquery.flot.spline.min.js"></script>

<script src="https://cdn.acessarminhaconta.com/vendor/peity/jquery.peity.min.js"></script>
<script src="https://agils.acessarminhaconta.com/views/assets/js/plugins-init/piety-init.js"></script>

<script src="https://agils.acessarminhaconta.com/views/assets/js/plugins-init/widgets-script-init.js/"></script>

<script src="https://agils.acessarminhaconta.com/views/assets/js/plugins-init/jquery.validate-init.js"></script>


<script src="https://cdn.acessarminhaconta.com/vendor/moment/moment.min.js"></script>
<script src="https://cdn.acessarminhaconta.com/vendor/bootstrap-daterangepicker/daterangepicker.js"></script>

<script src="https://cdn.acessarminhaconta.com/vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>

<script src="https://cdn.acessarminhaconta.com/vendor/jquery-asColor/jquery-asColor.min.js"></script>
<script src="https://cdn.acessarminhaconta.com/vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
<script src="https://cdn.acessarminhaconta.com/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>

<script src="https://cdn.acessarminhaconta.com/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

<script src="https://cdn.acessarminhaconta.com/vendor/pickadate/picker.js"></script>
<script src="https://cdn.acessarminhaconta.com/vendor/pickadate/picker.time.js"></script>
<script src="https://cdn.acessarminhaconta.com/vendor/pickadate/picker.date.js"></script>

<script src="https://agils.acessarminhaconta.com/views/assets/js/plugins-init/bs-daterange-picker-init.js"></script>

<script src="https://agils.acessarminhaconta.com/views/assets/js/plugins-init/clock-picker-init.js"></script>

<script src="https://agils.acessarminhaconta.com/views/assets/js/plugins-init/jquery-asColorPicker.init.js"></script>

<script src="https://agils.acessarminhaconta.com/views/assets/js/plugins-init/material-date-picker-init.js"></script>

<script src="https://agils.acessarminhaconta.com/views/assets/js/plugins-init/pickadate-init.js"></script>

<script src="https://cdn.acessarminhaconta.com/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js"></script>

<script src="https://cdn.acessarminhaconta.com/vendor/apexchart/apexchart.js"></script>
<script src="https://cdn.acessarminhaconta.com/vendor/nouislider/nouislider.min.js"></script>
<script src="https://cdn.acessarminhaconta.com/vendor/wnumb/wNumb.js"></script>
<script src="https://agils.acessarminhaconta.com/views/assets/js/plugins-init/nouislider-init.js"></script>

<script src="https://agils.acessarminhaconta.com/views/assets/js/dashboard/dashboard-1.js"></script>
<script src="https://agils.acessarminhaconta.com/views/assets/js/dashboard/my-wallet.js"></script>
<script src="https://agils.acessarminhaconta.com/views/assets/js/custom.min.js"></script>
<script src="https://agils.acessarminhaconta.com/views/assets/js/dlabnav-init.js"></script>

<script src="https://cdn.acessarminhaconta.com/vendor/assets/owl-carousel/owl.carousel.js"></script>
<script src="https://cdn.acessarminhaconta.com/vendor/select2/js/select2.full.min.js"></script>
<script src="https://agils.acessarminhaconta.com/views/assets/js/plugins-init/select2-init.js"></script>
<script src="https://agils.acessarminhaconta.com/views/assets/plugins/sweet-alert/sweetalert2.min.js"></script>
<script src="https://agils.acessarminhaconta.com/views/assets/js/sweet-alert.js?"></script>
<script src="https://agils.acessarminhaconta.com/views/assets/js/scripts.js?1"></script>
<script src="https://agils.acessarminhaconta.com/views/assets/js/pages/editarcliente.js?1"></script>

</body>
</html>
