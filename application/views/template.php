<?php
$meta = $this->menu_m->select_meta()->row();
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$meta->meta_name;?></title>
    <link rel="apple-touch-icon" href="<?=base_url('img/logo-icon.png');?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url('img/logo-icon.png');?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/vendors/css/vendors.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/vendors/css/forms/select/select2.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/vendors/css/extensions/toastr.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/vendors/css/pickers/pickadate/pickadate.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/vendors/css/extensions/sweetalert2.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/css/bootstrap.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/css/bootstrap-extended.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/css/colors.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/css/components.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/css/themes/dark-layout.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/css/themes/bordered-layout.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/css/themes/semi-dark-layout.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/css/core/menu/menu-types/horizontal-menu.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/css/plugins/forms/form-validation.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/css/plugins/forms/pickers/form-flat-pickr.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/css/pages/dashboard-ecommerce.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('backend/app-assets/css/plugins/extensions/ext-component-toastr.css');?>">
    <script src="<?=base_url('backend/app-assets/vendors/js/vendors.min.js');?>"></script>
    <script src="<?=base_url('backend/app-assets/vendors/js/forms/validation/jquery.validate.min.js');?>"></script>
</head>

<body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="">

    <?=$_header;?>

    <?=$_menu;?>

    <?=$content;?>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?=$_footer;?>

    <script src="<?=base_url('backend/app-assets/vendors/js/ui/jquery.sticky.js');?>"></script>
    <script src="<?=base_url('backend/app-assets/vendors/js/extensions/toastr.min.js');?>"></script>
    <script src="<?=base_url('backend/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js');?>"></script>
    <script src="<?=base_url('backend/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js');?>"></script>
    <script src="<?=base_url('backend/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js');?>"></script>
    <script src="<?=base_url('backend/app-assets/vendors/js/tables/datatable/responsive.bootstrap4.min.js');?>"></script>
    <script src="<?=base_url('backend/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js');?>"></script>
    <script src="<?=base_url('backend/app-assets/vendors/js/pickers/pickadate/picker.js');?>"></script>
    <script src="<?=base_url('backend/app-assets/vendors/js/pickers/pickadate/picker.date.js');?>"></script>
    <script src="<?=base_url('backend/app-assets/vendors/js/pickers/pickadate/picker.time.js');?>"></script>
    <script src="<?=base_url('backend/app-assets/vendors/js/pickers/pickadate/legacy.js');?>"></script>
    <script src="<?=base_url('backend/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js');?>"></script>
    <script src="<?=base_url('backend/app-assets/js/scripts/forms/pickers/form-pickers.js');?>"></script>
    <script src="<?=base_url('backend/app-assets/vendors/js/forms/select/select2.full.min.js');?>"></script>
    <script src="<?=base_url('backend/app-assets/js/scripts/forms/form-select2.js');?>"></script>
    <script src="<?=base_url('backend/app-assets/vendors/js/extensions/sweetalert2.all.min.js');?>"></script>
    <script src="<?=base_url('backend/app-assets/vendors/js/forms/cleave/cleave.min.js');?>"></script>
    <script src="<?=base_url('backend/app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js');?>"></script>
    <script src="<?=base_url('backend/app-assets/js/scripts/forms/form-input-mask.js');?>"></script>
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