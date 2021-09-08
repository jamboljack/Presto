<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>404 Page</title>
    <link rel="apple-touch-icon" href="<?=base_url('img/logo-icon.png');?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url('img/logo-icon.png');?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/vendors/css/vendors.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/css/bootstrap.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/css/bootstrap-extended.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/css/colors.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/css/components.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/css/themes/dark-layout.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/css/themes/bordered-layout.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/css/themes/semi-dark-layout.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/css/core/menu/menu-types/horizontal-menu.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/css/pages/page-misc.css');?>">
</head>

<body class="horizontal-layout horizontal-menu blank-page navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="blank-page">
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row"></div>
            <div class="content-body">
                <div class="misc-wrapper">
                    <a class="brand-logo" href="#">
                        <h2 class="brand-text text-primary"><img src="<?=base_url('img/logo-app.png');?>" height="50px;"></h2>
                    </a>
                    <div class="misc-inner p-2 p-sm-3">
                        <div class="w-100 text-center">
                            <h2 class="mb-1">Page Not Found</h2>
                            <p class="mb-2">Halaman yang anda cari tidak ditemukan</p>
                            <a class="btn btn-primary mb-2 btn-sm-block" href="<?=base_url();?>">Kembali</a>
                            <img class="img-fluid" src="<?=base_url('backend/app-assets/images/pages/error.svg');?>" alt="Error page" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?=base_url('backend/app-assets/vendors/js/vendors.min.js');?>"></script>
    <script src="<?=base_url('backend/app-assets/vendors/js/ui/jquery.sticky.js');?>"></script>
    <script src="<?=base_url('backend/app-assets/js/core/app-menu.js');?>"></script>
    <script src="<?=base_url('backend/app-assets/js/core/app.js');?>"></script>
    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
</html>