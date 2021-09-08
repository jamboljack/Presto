<?php
$meta = $this->menu_m->select_meta()->row();
?>
<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">Copyright &copy; 2021<a class="ms-25" href="https://humanika.co.id" target="_blank">Jama' Rochmad Muttaqin</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-end d-none d-md-block"><?=$meta->meta_name;?></span></p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>