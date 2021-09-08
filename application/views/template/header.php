<?php
$username = $this->session->userdata('username');
$dataUser = $this->menu_m->select_user($username)->row();
?>
<nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center" data-nav="brand-center">
    <div class="navbar-header d-xl-block d-none">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="navbar-brand" href="#">
                    <h2 class="brand-text mb-0"><img src="<?=base_url('img/logo-app.png');?>" height="35px;"></h2>
                </a>
            </li>
        </ul>
    </div>
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
            </ul>
            <?php if ($this->session->userdata('level') == 'Admin') { ?>
            <ul class="nav navbar-nav bookmark-icons">
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="<?=site_url('admin/meta');?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Setting"><i class="ficon" data-feather='settings'></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="<?=site_url('admin/kontak');?>" data-bs-toggle="tooltip" data-bs-placement="bottom"35tle="Kontak Kami"><i class="ficon" data-feather='shield'></i></a></li>
            </ul>
            <?php } ?>
        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">
            <li class="nav-item d-none d-lg-block">
                <a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a>
            </li>
            <li class="nav-item dropdown dropdown-user">
                <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none">
                        <span class="user-name fw-bolder"><?=trim($dataUser->user_nama);?></span>
                        <span class="user-status"><?=$dataUser->user_level;?></span>
                    </div>
                    <span class="avatar">
                        <?php if ($dataUser->user_avatar != '') { ?>
                        <img class="round" src="<?=base_url('img/icon/'.$dataUser->user_avatar);?>" alt="avatar" height="40" width="40">
                        <?php } else {?>
                        <img class="round" src="<?=base_url('img/no-image.jpg');?>" alt="avatar" height="40" width="40">
                        <?php } ?>
                        <span class="avatar-status-online"></span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" href="<?=site_url('profil');?>">
                        <i class="me-50" data-feather="user"></i> Profil
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?=site_url('login/logout');?>">
                        <i class="me-50" data-feather="power"></i> Logout
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>