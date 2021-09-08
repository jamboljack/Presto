<?php
$uri = $this->uri->segment(2);

if ($uri == 'home') {
    $dashboard       = 'menu-item-active';
    $masterumum      = '';
    $bagian          = '';
    $indikator       = '';
    $status_kawin    = '';
    $status_keluarga = '';
    $status          = '';
    $pendidikan      = '';
    $gol_darah       = '';
    $agama           = '';
    $masterabsen     = '';
    $jenis_sangsi    = '';
    $jenis_absensi   = '';
    $jam_kerja       = '';
    $pegawai         = '';
    $absensi         = '';
    $monitoring      = '';
    $sangsi          = '';
    $users           = '';
    $log             = '';
    $lapabsensi      = '';
} elseif ($uri == 'bagian') {
    $dashboard       = '';
    $masterumum      = 'menu-item-open menu-item-here';
    $bagian          = 'menu-item-active';
    $indikator       = '';
    $status_kawin    = '';
    $status_keluarga = '';
    $status          = '';
    $pendidikan      = '';
    $gol_darah       = '';
    $agama           = '';
    $masterabsen     = '';
    $jenis_sangsi    = '';
    $jenis_absensi   = '';
    $jam_kerja       = '';
    $pegawai         = '';
    $absensi         = '';
    $monitoring      = '';
    $sangsi          = '';
    $users           = '';
    $log             = '';
    $lapabsensi      = '';
} elseif ($uri == 'indikator') {
    $dashboard       = '';
    $masterumum      = 'menu-item-open menu-item-here';
    $bagian          = '';
    $indikator       = 'menu-item-active';
    $status_kawin    = '';
    $status_keluarga = '';
    $status          = '';
    $pendidikan      = '';
    $gol_darah       = '';
    $agama           = '';
    $masterabsen     = '';
    $jenis_sangsi    = '';
    $jenis_absensi   = '';
    $jam_kerja       = '';
    $pegawai         = '';
    $absensi         = '';
    $monitoring      = '';
    $sangsi          = '';
    $users           = '';
    $log             = '';
    $lapabsensi      = '';
} elseif ($uri == 'status_kawin') {
    $dashboard       = '';
    $masterumum      = 'menu-item-open menu-item-here';
    $bagian          = '';
    $indikator       = '';
    $status_kawin    = 'menu-item-active';
    $status_keluarga = '';
    $status          = '';
    $pendidikan      = '';
    $gol_darah       = '';
    $agama           = '';
    $masterabsen     = '';
    $jenis_sangsi    = '';
    $jenis_absensi   = '';
    $jam_kerja       = '';
    $pegawai         = '';
    $absensi         = '';
    $monitoring      = '';
    $sangsi          = '';
    $users           = '';
    $log             = '';
    $lapabsensi      = '';
} elseif ($uri == 'status_keluarga') {
    $dashboard       = '';
    $masterumum      = 'menu-item-open menu-item-here';
    $bagian          = '';
    $indikator       = '';
    $status_kawin    = '';
    $status_keluarga = 'menu-item-active';
    $status          = '';
    $pendidikan      = '';
    $gol_darah       = '';
    $agama           = '';
    $masterabsen     = '';
    $jenis_sangsi    = '';
    $jenis_absensi   = '';
    $jam_kerja       = '';
    $pegawai         = '';
    $absensi         = '';
    $monitoring      = '';
    $sangsi          = '';
    $users           = '';
    $log             = '';
    $lapabsensi      = '';
} elseif ($uri == 'status') {
    $dashboard       = '';
    $masterumum      = 'menu-item-open menu-item-here';
    $bagian          = '';
    $indikator       = '';
    $status_kawin    = '';
    $status_keluarga = '';
    $status          = 'menu-item-active';
    $pendidikan      = '';
    $gol_darah       = '';
    $agama           = '';
    $masterabsen     = '';
    $jenis_sangsi    = '';
    $jenis_absensi   = '';
    $jam_kerja       = '';
    $pegawai         = '';
    $absensi         = '';
    $monitoring      = '';
    $sangsi          = '';
    $users           = '';
    $log             = '';
    $lapabsensi      = '';
} elseif ($uri == 'pendidikan') {
    $dashboard       = '';
    $masterumum      = 'menu-item-open menu-item-here';
    $bagian          = '';
    $indikator       = '';
    $status_kawin    = '';
    $status_keluarga = '';
    $status          = '';
    $pendidikan      = 'menu-item-active';
    $gol_darah       = '';
    $agama           = '';
    $masterabsen     = '';
    $jenis_sangsi    = '';
    $jenis_absensi   = '';
    $jam_kerja       = '';
    $pegawai         = '';
    $absensi         = '';
    $monitoring      = '';
    $sangsi          = '';
    $users           = '';
    $log             = '';
    $lapabsensi      = '';
} elseif ($uri == 'gol_darah') {
    $dashboard       = '';
    $masterumum      = 'menu-item-open menu-item-here';
    $bagian          = '';
    $indikator       = '';
    $status_kawin    = '';
    $status_keluarga = '';
    $status          = '';
    $pendidikan      = '';
    $gol_darah       = 'menu-item-active';
    $agama           = '';
    $masterabsen     = '';
    $jenis_sangsi    = '';
    $jenis_absensi   = '';
    $jam_kerja       = '';
    $pegawai         = '';
    $absensi         = '';
    $monitoring      = '';
    $sangsi          = '';
    $users           = '';
    $log             = '';
    $lapabsensi      = '';
} elseif ($uri == 'agama') {
    $dashboard       = '';
    $masterumum      = 'menu-item-open menu-item-here';
    $bagian          = '';
    $indikator       = '';
    $status_kawin    = '';
    $status_keluarga = '';
    $status          = '';
    $pendidikan      = '';
    $gol_darah       = '';
    $agama           = 'menu-item-active';
    $masterabsen     = '';
    $jenis_sangsi    = '';
    $jenis_absensi   = '';
    $jam_kerja       = '';
    $pegawai         = '';
    $absensi         = '';
    $monitoring      = '';
    $sangsi          = '';
    $users           = '';
    $log             = '';
    $lapabsensi      = '';
} elseif ($uri == 'jenis_sangsi') {
    $dashboard       = '';
    $masterumum      = '';
    $bagian          = '';
    $indikator       = '';
    $status_kawin    = '';
    $status_keluarga = '';
    $status          = '';
    $pendidikan      = '';
    $gol_darah       = '';
    $agama           = '';
    $masterabsen     = 'menu-item-open menu-item-here';
    $jenis_sangsi    = 'menu-item-active';
    $jenis_absensi   = '';
    $jam_kerja       = '';
    $pegawai         = '';
    $absensi         = '';
    $monitoring      = '';
    $sangsi          = '';
    $users           = '';
    $log             = '';
    $lapabsensi      = '';
} elseif ($uri == 'jenis_absensi') {
    $dashboard       = '';
    $masterumum      = '';
    $bagian          = '';
    $indikator       = '';
    $status_kawin    = '';
    $status_keluarga = '';
    $status          = '';
    $pendidikan      = '';
    $gol_darah       = '';
    $agama           = '';
    $masterabsen     = 'menu-item-open menu-item-here';
    $jenis_sangsi    = '';
    $jenis_absensi   = 'menu-item-active';
    $jam_kerja       = '';
    $pegawai         = '';
    $absensi         = '';
    $monitoring      = '';
    $sangsi          = '';
    $users           = '';
    $log             = '';
    $lapabsensi      = '';
} elseif ($uri == 'jam_kerja') {
    $dashboard       = '';
    $masterumum      = '';
    $bagian          = '';
    $indikator       = '';
    $status_kawin    = '';
    $status_keluarga = '';
    $status          = '';
    $pendidikan      = '';
    $gol_darah       = '';
    $agama           = '';
    $masterabsen     = 'menu-item-open menu-item-here';
    $jenis_sangsi    = '';
    $jenis_absensi   = '';
    $jam_kerja       = 'menu-item-active';
    $pegawai         = '';
    $absensi         = '';
    $monitoring      = '';
    $sangsi          = '';
    $users           = '';
    $log             = '';
    $lapabsensi      = '';
} elseif ($uri == 'pegawai') {
    $dashboard       = '';
    $masterumum      = '';
    $bagian          = '';
    $indikator       = '';
    $status_kawin    = '';
    $status_keluarga = '';
    $status          = '';
    $pendidikan      = '';
    $gol_darah       = '';
    $agama           = '';
    $masterabsen     = '';
    $jenis_sangsi    = '';
    $jenis_absensi   = '';
    $jam_kerja       = '';
    $pegawai         = 'menu-item-active';
    $absensi         = '';
    $monitoring      = '';
    $sangsi          = '';
    $users           = '';
    $log             = '';
    $lapabsensi      = '';
} elseif ($uri == 'absensi') {
    $dashboard       = '';
    $masterumum      = '';
    $bagian          = '';
    $indikator       = '';
    $status_kawin    = '';
    $status_keluarga = '';
    $status          = '';
    $pendidikan      = '';
    $gol_darah       = '';
    $agama           = '';
    $masterabsen     = '';
    $jenis_sangsi    = '';
    $jenis_absensi   = '';
    $jam_kerja       = '';
    $pegawai         = '';
    $absensi         = 'menu-item-active';
    $monitoring      = '';
    $sangsi          = '';
    $users           = '';
    $log             = '';
    $lapabsensi      = '';
} elseif ($uri == 'monitoring') {
    $dashboard       = '';
    $masterumum      = '';
    $bagian          = '';
    $indikator       = '';
    $status_kawin    = '';
    $status_keluarga = '';
    $status          = '';
    $pendidikan      = '';
    $gol_darah       = '';
    $agama           = '';
    $masterabsen     = '';
    $jenis_sangsi    = '';
    $jenis_absensi   = '';
    $jam_kerja       = '';
    $pegawai         = '';
    $absensi         = '';
    $monitoring      = 'menu-item-active';
    $sangsi          = '';
    $users           = '';
    $log             = '';
    $lapabsensi      = '';
} elseif ($uri == 'sangsi') {
    $dashboard       = '';
    $masterumum      = '';
    $bagian          = '';
    $indikator       = '';
    $status_kawin    = '';
    $status_keluarga = '';
    $status          = '';
    $pendidikan      = '';
    $gol_darah       = '';
    $agama           = '';
    $masterabsen     = '';
    $jenis_sangsi    = '';
    $jenis_absensi   = '';
    $jam_kerja       = '';
    $pegawai         = '';
    $absensi         = '';
    $monitoring      = '';
    $sangsi          = 'menu-item-active';
    $users           = '';
    $log             = '';
    $lapabsensi      = '';
} elseif ($uri == 'users') {
    $dashboard       = '';
    $masterumum      = '';
    $bagian          = '';
    $indikator       = '';
    $status_kawin    = '';
    $status_keluarga = '';
    $status          = '';
    $pendidikan      = '';
    $gol_darah       = '';
    $agama           = '';
    $masterabsen     = '';
    $jenis_sangsi    = '';
    $jenis_absensi   = '';
    $jam_kerja       = '';
    $pegawai         = '';
    $absensi         = '';
    $monitoring      = '';
    $sangsi          = '';
    $users           = 'menu-item-active';
    $log             = '';
    $lapabsensi      = '';
} elseif ($uri == 'log') {
    $dashboard       = '';
    $masterumum      = '';
    $bagian          = '';
    $indikator       = '';
    $status_kawin    = '';
    $status_keluarga = '';
    $status          = '';
    $pendidikan      = '';
    $gol_darah       = '';
    $agama           = '';
    $masterabsen     = '';
    $jenis_sangsi    = '';
    $jenis_absensi   = '';
    $jam_kerja       = '';
    $pegawai         = '';
    $absensi         = '';
    $monitoring      = '';
    $sangsi          = '';
    $users           = '';
    $log             = 'menu-item-active';
    $lapabsensi      = '';
} elseif ($uri == 'lapabsensi') {
    $dashboard       = '';
    $masterumum      = '';
    $bagian          = '';
    $indikator       = '';
    $status_kawin    = '';
    $status_keluarga = '';
    $status          = '';
    $pendidikan      = '';
    $gol_darah       = '';
    $agama           = '';
    $masterabsen     = '';
    $jenis_sangsi    = '';
    $jenis_absensi   = '';
    $jam_kerja       = '';
    $pegawai         = '';
    $absensi         = '';
    $monitoring      = '';
    $sangsi          = '';
    $users           = '';
    $log             = '';
    $lapabsensi      = 'menu-item-active';
} else {
    $dashboard       = '';
    $masterumum      = '';
    $bagian          = '';
    $indikator       = '';
    $status_kawin    = '';
    $status_keluarga = '';
    $status          = '';
    $pendidikan      = '';
    $gol_darah       = '';
    $agama           = '';
    $masterabsen     = '';
    $jenis_sangsi    = '';
    $jenis_absensi   = '';
    $jam_kerja       = '';
    $pegawai         = '';
    $absensi         = '';
    $monitoring      = '';
    $sangsi          = '';
    $users           = '';
    $log             = '';
    $lapabsensi      = '';
}
?>

<div class="aside aside-left aside-fixed  d-flex flex-column flex-row-auto" id="kt_aside">
    <div class="brand flex-column-auto " id="kt_brand">
        <a href="<?=site_url('admin/home');?>" class="brand-logo">
            <img alt="Logo" src="<?=base_url('img/logo-header.png');?>"/>
        </a>
        <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
            <span class="svg-icon svg-icon svg-icon-xl">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24"/>
                        <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
                        <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
                    </g>
                </svg>
            </span>
        </button>
    </div>

    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
            <ul class="menu-nav ">
                <li class="menu-item <?=$dashboard;?>" aria-haspopup="true">
                    <a href="<?=site_url('admin/home');?>" class="menu-link ">
                        <i class="menu-icon flaticon-home"></i>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>
                <li class="menu-section">
                    <h4 class="menu-text">Menu Master</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                </li>
                <li class="menu-item menu-item-submenu <?=$masterumum;?>" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon-folder"></i>
                        <span class="menu-text">Master Umum</span><i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu" kt-hidden-height="480" style="">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link">
                                    <span class="menu-text">Master Umum</span>
                                </span>
                            </li>
                            <li class="menu-item <?=$bagian;?>" aria-haspopup="true">
                                <a href="<?=site_url('admin/bagian');?>" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Bagian</span>
                                </a>
                            </li>
                            <li class="menu-item <?=$indikator;?>" aria-haspopup="true">
                                <a href="<?=site_url('admin/indikator');?>" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Indikator</span>
                                </a>
                            </li>
                            <li class="menu-item <?=$status_kawin;?>" aria-haspopup="true">
                                <a href="<?=site_url('admin/status_kawin');?>" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Status Kawin</span>
                                </a>
                            </li>
                            <li class="menu-item <?=$status_keluarga;?>" aria-haspopup="true">
                                <a href="<?=site_url('admin/status_keluarga');?>" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Status Keluarga</span>
                                </a>
                            </li>
                            <li class="menu-item <?=$status;?>" aria-haspopup="true">
                                <a href="<?=site_url('admin/status');?>" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Status Pegawai</span>
                                </a>
                            </li>
                            <li class="menu-item <?=$pendidikan;?>" aria-haspopup="true">
                                <a href="<?=site_url('admin/pendidikan');?>" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Pendidikan</span>
                                </a>
                            </li>
                            <li class="menu-item <?=$gol_darah;?>" aria-haspopup="true">
                                <a href="<?=site_url('admin/gol_darah');?>" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Gol. Darah</span>
                                </a>
                            </li>
                            <li class="menu-item <?=$agama;?>" aria-haspopup="true">
                                <a href="<?=site_url('admin/agama');?>" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Agama</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu <?=$masterabsen;?>" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon-calendar-with-a-clock-time-tools"></i>
                        <span class="menu-text">Master Absensi</span><i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu" kt-hidden-height="480" style="">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link">
                                    <span class="menu-text">Master Absensi</span>
                                </span>
                            </li>
                            <li class="menu-item <?=$jenis_absensi;?>" aria-haspopup="true">
                                <a href="<?=site_url('admin/jenis_absensi');?>" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Jenis Absensi</span>
                                </a>
                            </li>
                            <li class="menu-item <?=$jenis_sangsi;?>" aria-haspopup="true">
                                <a href="<?=site_url('admin/jenis_sangsi');?>" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Jenis Sangsi</span>
                                </a>
                            </li>
                            <li class="menu-item <?=$jam_kerja;?>" aria-haspopup="true">
                                <a href="<?=site_url('admin/jam_kerja');?>" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Jam Kerja</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-section">
                    <h4 class="menu-text">Menu Pegawai</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                </li>
                <li class="menu-item <?=$pegawai;?>" aria-haspopup="true">
                    <a href="<?=site_url('admin/pegawai');?>" class="menu-link ">
                        <i class="menu-icon flaticon2-calendar-3"></i>
                        <span class="menu-text">Data Pegawai</span>
                    </a>
                </li>
                <li class="menu-item <?=$absensi;?>" aria-haspopup="true">
                    <a href="<?=site_url('admin/absensi');?>" class="menu-link ">
                        <i class="menu-icon flaticon-event-calendar-symbol"></i>
                        <span class="menu-text">Absensi Pegawai</span>
                    </a>
                </li>
                <li class="menu-item >" aria-haspopup="true">
                    <a href="<?=site_url('home');?>" class="menu-link " target="_blank">
                        <i class="menu-icon flaticon-clock-1"></i>
                        <span class="menu-text">Monitoring Absensi</span>
                    </a>
                </li>
                <li class="menu-item <?=$sangsi;?>" aria-haspopup="true">
                    <a href="<?=site_url('admin/sangsi');?>" class="menu-link ">
                        <i class="menu-icon flaticon-clipboard"></i>
                        <span class="menu-text">Sangsi Pegawai</span>
                    </a>
                </li>
                <li class="menu-section">
                    <h4 class="menu-text">Menu Users</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                </li>
                <li class="menu-item <?=$users;?>" aria-haspopup="true">
                    <a href="<?=site_url('admin/users');?>" class="menu-link ">
                        <i class="menu-icon flaticon-users"></i>
                        <span class="menu-text">Users</span>
                    </a>
                </li>
                <li class="menu-item <?=$log;?>" aria-haspopup="true">
                    <a href="<?=site_url('admin/log');?>" class="menu-link ">
                        <i class="menu-icon flaticon-comment"></i>
                        <span class="menu-text">Log Users</span>
                    </a>
                </li>
                <li class="menu-section">
                    <h4 class="menu-text">Menu Laporan</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                </li>
                <li class="menu-item <?=$lapabsensi;?>" aria-haspopup="true">
                    <a href="<?=site_url('report/lapabsensi');?>" class="menu-link ">
                        <i class="menu-icon flaticon-list-1"></i>
                        <span class="menu-text">Laporan Absensi</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>