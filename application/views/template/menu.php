<?php
$uri = $this->uri->segment(2);

if ($uri == 'home') {
    $dashboard          = 'active';
    $grupmaster         = '';
    $meja               = '';
    $pelanggan          = '';
    $tipe               = '';
    $grupbarang         = '';
    $kategori           = '';
    $barang             = '';
    $penjualan          = '';
    $retur_jual         = '';
    $grupuser           = '';
    $users              = '';
    $log                = '';
    $gruplaporan        = '';
    $lap_jual_periode   = '';
    $lap_jual_pelanggan = '';
    $lap_jual_barang    = '';
    $lap_jual_rekap     = '';
    $lap_jual_kategori  = '';
    $lap_kasir          = '';
} elseif ($uri == 'meja') {
    $dashboard          = '';
    $grupmaster         = 'group-active active';
    $meja               = 'active';
    $pelanggan          = '';
    $tipe               = '';
    $grupbarang         = '';
    $kategori           = '';
    $barang             = '';
    $penjualan          = '';
    $retur_jual         = '';
    $grupuser           = '';
    $users              = '';
    $log                = '';
    $gruplaporan        = '';
    $lap_jual_periode   = '';
    $lap_jual_pelanggan = '';
    $lap_jual_barang    = '';
    $lap_jual_rekap     = '';
    $lap_jual_kategori  = '';
    $lap_kasir          = '';
} elseif ($uri == 'pelanggan') {
    $dashboard          = '';
    $grupmaster         = 'group-active active';
    $meja               = '';
    $pelanggan          = 'active';
    $tipe               = '';
    $grupbarang         = '';
    $kategori           = '';
    $barang             = '';
    $penjualan          = '';
    $retur_jual         = '';
    $grupuser           = '';
    $users              = '';
    $log                = '';
    $gruplaporan        = '';
    $lap_jual_periode   = '';
    $lap_jual_pelanggan = '';
    $lap_jual_barang    = '';
    $lap_jual_rekap     = '';
    $lap_jual_kategori  = '';
    $lap_kasir          = '';
} elseif ($uri == 'tipe') {
    $dashboard          = '';
    $grupmaster         = 'group-active active';
    $meja               = '';
    $pelanggan          = '';
    $tipe               = 'active';
    $grupbarang         = '';
    $kategori           = '';
    $barang             = '';
    $penjualan          = '';
    $retur_jual         = '';
    $grupuser           = '';
    $users              = '';
    $log                = '';
    $gruplaporan        = '';
    $lap_jual_periode   = '';
    $lap_jual_pelanggan = '';
    $lap_jual_barang    = '';
    $lap_jual_rekap     = '';
    $lap_jual_kategori  = '';
    $lap_kasir          = '';
} elseif ($uri == 'kategori') {
    $dashboard          = '';
    $grupmaster         = '';
    $meja               = '';
    $pelanggan          = '';
    $tipe               = '';
    $grupbarang         = 'group-active active';
    $kategori           = 'active';
    $barang             = '';
    $penjualan          = '';
    $retur_jual         = '';
    $grupuser           = '';
    $users              = '';
    $log                = '';
    $gruplaporan        = '';
    $lap_jual_periode   = '';
    $lap_jual_pelanggan = '';
    $lap_jual_barang    = '';
    $lap_jual_rekap     = '';
    $lap_jual_kategori  = '';
    $lap_kasir          = '';
} elseif ($uri == 'barang') {
    $dashboard          = '';
    $grupmaster         = '';
    $meja               = '';
    $pelanggan          = '';
    $tipe               = '';
    $grupbarang         = 'group-active active';
    $kategori           = '';
    $barang             = 'active';
    $penjualan          = '';
    $retur_jual         = '';
    $grupuser           = '';
    $users              = '';
    $log                = '';
    $gruplaporan        = '';
    $lap_jual_periode   = '';
    $lap_jual_pelanggan = '';
    $lap_jual_barang    = '';
    $lap_jual_rekap     = '';
    $lap_jual_kategori  = '';
    $lap_kasir          = '';
} elseif ($uri == 'penjualan') {
    $dashboard          = '';
    $grupmaster         = '';
    $meja               = '';
    $pelanggan          = '';
    $tipe               = '';
    $grupbarang         = '';
    $kategori           = '';
    $barang             = '';
    $penjualan          = 'active';
    $retur_jual         = '';
    $grupuser           = '';
    $users              = '';
    $log                = '';
    $gruplaporan        = '';
    $lap_jual_periode   = '';
    $lap_jual_pelanggan = '';
    $lap_jual_barang    = '';
    $lap_jual_rekap     = '';
    $lap_jual_kategori  = '';
    $lap_kasir          = '';
} elseif ($uri == 'retur_jual') {
    $dashboard          = '';
    $grupmaster         = '';
    $meja               = '';
    $pelanggan          = '';
    $tipe               = '';
    $grupbarang         = '';
    $kategori           = '';
    $barang             = '';
    $penjualan          = '';
    $retur_jual         = 'active';
    $grupuser           = '';
    $users              = '';
    $log                = '';
    $gruplaporan        = '';
    $lap_jual_periode   = '';
    $lap_jual_pelanggan = '';
    $lap_jual_barang    = '';
    $lap_jual_rekap     = '';
    $lap_jual_kategori  = '';
    $lap_kasir          = '';
} elseif ($uri == 'users') {
    $dashboard          = '';
    $grupmaster         = '';
    $meja               = '';
    $pelanggan          = '';
    $tipe               = '';
    $grupbarang         = '';
    $kategori           = '';
    $barang             = '';
    $penjualan          = '';
    $retur_jual         = '';
    $grupuser           = 'group-active active';
    $users              = 'active';
    $log                = '';
    $gruplaporan        = '';
    $lap_jual_periode   = '';
    $lap_jual_pelanggan = '';
    $lap_jual_barang    = '';
    $lap_jual_rekap     = '';
    $lap_jual_kategori  = '';
    $lap_kasir          = '';
} elseif ($uri == 'log') {
    $dashboard          = '';
    $grupmaster         = '';
    $meja               = '';
    $pelanggan          = '';
    $tipe               = '';
    $grupbarang         = '';
    $kategori           = '';
    $barang             = '';
    $penjualan          = '';
    $retur_jual         = '';
    $grupuser           = 'group-active active';
    $users              = '';
    $log                = 'active';
    $gruplaporan        = '';
    $lap_jual_periode   = '';
    $lap_jual_pelanggan = '';
    $lap_jual_barang    = '';
    $lap_jual_rekap     = '';
    $lap_jual_kategori  = '';
    $lap_kasir          = '';
} else {
    $dashboard          = '';
    $grupmaster         = '';
    $meja               = '';
    $pelanggan          = '';
    $tipe               = '';
    $grupbarang         = '';
    $kategori           = '';
    $barang             = '';
    $penjualan          = '';
    $retur_jual         = '';
    $grupuser           = '';
    $users              = '';
    $log                = '';
    $gruplaporan        = '';
    $lap_jual_periode   = '';
    $lap_jual_pelanggan = '';
    $lap_jual_barang    = '';
    $lap_jual_rekap     = '';
    $lap_jual_kategori  = '';
    $lap_kasir          = '';
}
?>
<div class="horizontal-menu-wrapper">
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-shadow menu-border container-xxl" role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto">
                    <a class="navbar-brand" href="#">
                        <h2 class="brand-text mb-0"><img src="<?=base_url('img/logo-app.png');?>" height="40px;"></h2>
                    </a>
                </li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?=$dashboard;?>">
                    <a class="nav-link d-flex align-items-center" href="<?=site_url('admin/home');?>">
                        <i data-feather="home"></i><span data-i18n="Dashboard">Dashboard</span>
                    </a>
                </li>
                <li class="dropdown nav-item <?=$grupmaster;?>" data-menu="dropdown">
                    <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown">
                        <i data-feather='folder'></i><span data-i18n="Data Master">Data Master</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li data-menu="" class="<?=$meja;?>">
                            <a class="dropdown-item d-flex align-items-center" href="<?=site_url('admin/meja');?>" data-bs-toggle="" data-i18n="Meja">
                                <i data-feather='book'></i><span data-i18n="Meja">Meja</span>
                            </a>
                        </li>
                        <li data-menu="" class="<?=$pelanggan;?>">
                            <a class="dropdown-item d-flex align-items-center" href="<?=site_url('admin/pelanggan');?>" data-bs-toggle="" data-i18n="Pelanggan">
                                <i data-feather='user'></i><span data-i18n="Pelanggan">Pelanggan</span>
                            </a>
                        </li>
                        <li data-menu="" class="<?=$tipe;?>">
                            <a class="dropdown-item d-flex align-items-center" href="<?=site_url('admin/tipe');?>" data-bs-toggle="" data-i18n="Tipe Bayar">
                                <i data-feather='credit-card'></i><span data-i18n="Tipe Bayar">Tipe Bayar</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item <?=$grupbarang;?>" data-menu="dropdown">
                    <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown">
                        <i data-feather='database'></i><span data-i18n="Data Barang">Data Barang</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li data-menu="" class="<?=$kategori;?>">
                            <a class="dropdown-item d-flex align-items-center" href="<?=site_url('admin/kategori');?>" data-bs-toggle="" data-i18n="Kategori">
                                <i data-feather='hard-drive'></i><span data-i18n="Kategori">Kategori</span>
                            </a>
                        </li>
                        <li data-menu="" class="<?=$barang;?>">
                            <a class="dropdown-item d-flex align-items-center" href="<?=site_url('admin/barang');?>" data-bs-toggle="" data-i18n="Barang">
                                <i data-feather='box'></i><span data-i18n="Barang">Barang</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?=$penjualan;?>">
                    <a class="nav-link d-flex align-items-center" href="<?=site_url('admin/penjualan');?>">
                        <i data-feather='shopping-bag'></i><span data-i18n="Dashboard">Penjualan</span>
                    </a>
                </li>
                <li class="<?=$retur_jual;?>">
                    <a class="nav-link d-flex align-items-center" href="<?=site_url('admin/retur_jual');?>">
                        <i data-feather='external-link'></i></i><span data-i18n="Dashboard">Retur Penjualan</span>
                    </a>
                </li>
                <li class="dropdown nav-item <?=$grupuser;?>" data-menu="dropdown">
                    <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown">
                        <i data-feather='users'></i><span data-i18n="Menu Users">Menu Users</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li data-menu="" class="<?=$users;?>">
                            <a class="dropdown-item d-flex align-items-center" href="<?=site_url('admin/users');?>" data-bs-toggle="" data-i18n="Users">
                                <i data-feather='user'></i><span data-i18n="Users">Users</span>
                            </a>
                        </li>
                        <li data-menu="" class="<?=$log;?>">
                            <a class="dropdown-item d-flex align-items-center" href="<?=site_url('admin/log');?>" data-bs-toggle="" data-i18n="Log User">
                                <i data-feather='message-square'></i><span data-i18n="Log User">Log User</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item <?=$gruplaporan;?>" data-menu="dropdown">
                    <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown">
                        <i data-feather='file-text'></i><span data-i18n="Laporan">Laporan</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li data-menu="" class="<?=$lap_jual_periode;?>">
                            <a class="dropdown-item d-flex align-items-center" href="<?=site_url('report/lap_jual_periode');?>" data-bs-toggle="" data-i18n="Penjualan per Periode">
                                <i data-feather='file'></i><span data-i18n="Penjualan per Periode">Penjualan per Periode</span>
                            </a>
                        </li>
                        <li data-menu="" class="<?=$lap_jual_pelanggan;?>">
                            <a class="dropdown-item d-flex align-items-center" href="<?=site_url('report/lap_jual_pelanggan');?>" data-bs-toggle="" data-i18n="Penjualan per Pelanggan">
                                <i data-feather='file'></i><span data-i18n="Penjualan per Pelanggan">Penjualan per Pelanggan</span>
                            </a>
                        </li>
                        <li data-menu="" class="<?=$lap_jual_barang;?>">
                            <a class="dropdown-item d-flex align-items-center" href="<?=site_url('report/lap_jual_barang');?>" data-bs-toggle="" data-i18n="Penjualan per Barang">
                                <i data-feather='file'></i><span data-i18n="Penjualan per Barang">Penjualan per Barang</span>
                            </a>
                        </li>
                        <li data-menu="" class="<?=$lap_jual_rekap;?>">
                            <a class="dropdown-item d-flex align-items-center" href="<?=site_url('report/lap_jual_rekap');?>" data-bs-toggle="" data-i18n="Rekap Penjualan">
                                <i data-feather='file'></i><span data-i18n="Rekap Penjualan">Rekap Penjualan</span>
                            </a>
                        </li>
                        <li data-menu="" class="<?=$lap_jual_kategori;?>">
                            <a class="dropdown-item d-flex align-items-center" href="<?=site_url('report/lap_jual_kategori');?>" data-bs-toggle="" data-i18n="Rekap Per Kategori">
                                <i data-feather='file'></i><span data-i18n="Rekap Per Kategori">Rekap Per Kategori</span>
                            </a>
                        </li>
                        <li data-menu="" class="<?=$lap_kasir;?>">
                            <a class="dropdown-item d-flex align-items-center" href="<?=site_url('report/lap_kasir');?>" data-bs-toggle="" data-i18n="Transaksi Kasir">
                                <i data-feather='file'></i><span data-i18n="Transaksi Kasir">Transaksi Kasir</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>