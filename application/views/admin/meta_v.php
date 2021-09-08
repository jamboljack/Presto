<script src="<?=base_url('backend/app-assets/js/jquery.maskMoney.min.js');?>"></script>
<style type="text/css">
    .number, .digit {
        text-align: right;
    }
</style>
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Setting App</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=site_url('admin/home');?>">Dashboard</a></li>
                                <li class="breadcrumb-item" active>Setting App</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section id="basic-horizontal-layouts">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title"><i data-feather='settings'></i> Setting App</h4>
                            </div>
                            <div class="card-body mt-1">
                                <form class="form form-horizontal" id="formInput" name="formInput" method="post">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Nama App</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="name" placeholder="Input Nama APP" value="<?=$detail->meta_name;?>" autocomplete="off"  autofocus />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Deskripsi App</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" rows="5" name="desc"><?=$detail->meta_desc;?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Keyword</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="keyword" placeholder="Input Keyword" value="<?=$detail->meta_keyword;?>" autocomplete="off"  />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Author</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="author" placeholder="Input Author" value="<?=$detail->meta_author;?>" autocomplete="off"  />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Developer</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="developer" placeholder="Input Developer" value="<?=$detail->meta_developer;?>" autocomplete="off"  />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Robots</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <select class="form-select" name="lstRobot" >
                                                        <option value="">- Pilih -</option>
                                                        <option value="index, follow" <?php if ($detail->meta_robots=='index, follow') { echo 'selected'; } ?>>index, follow</option>
                                                        <option value="index, nofollow" <?php if ($detail->meta_robots=='index, nofollow') { echo 'selected'; } ?>>index, nofollow</option>
                                                        <option value="noindex, follow" <?php if ($detail->meta_robots=='noindex, follow') { echo 'selected'; } ?>>noindex, follow</option>
                                                        <option value="noindex, nofollow" <?php if ($detail->meta_robots=='noindex, nofollow') { echo 'selected'; } ?>>noindex, nofollow</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Googlebots</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <select class="form-select" name="lstGoogle" >
                                                        <option value="">- Pilih -</option>
                                                        <option value="index, follow" <?php if ($detail->meta_googlebots=='index, follow') { echo 'selected'; } ?>>index, follow</option>
                                                        <option value="index, nofollow" <?php if ($detail->meta_googlebots=='index, nofollow') { echo 'selected'; } ?>>index, nofollow</option>
                                                        <option value="noindex, follow" <?php if ($detail->meta_googlebots=='noindex, follow') { echo 'selected'; } ?>>noindex, follow</option>
                                                        <option value="noindex, nofollow" <?php if ($detail->meta_googlebots=='noindex, nofollow') { echo 'selected'; } ?>>noindex, nofollow</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">PPN (%)</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control digit" name="ppn" placeholder="0.00" value="<?=number_format($detail->meta_ppn,2,'.','');?>" autocomplete="off"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Minimal Poin</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control number" name="poin" placeholder="0" value="<?=number_format($detail->meta_min_order,0,'',',');?>" autocomplete="off"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Tukar Poin</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control number" name="tukar_poin" placeholder="0" value="<?=number_format($detail->meta_tukar_poin,0,'',',');?>" autocomplete="off"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Footer Nota</label>
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" name="footer" placeholder="Input Footer Nota" value="<?=$detail->meta_footer;?>" autocomplete="off"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">API Key Printer</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" name="key" placeholder="Input API Key Printer" value="<?=$detail->meta_print_key;?>" autocomplete="off"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Port Printer</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" name="port" placeholder="Input Port Printer" value="<?=$detail->meta_print_port;?>" autocomplete="off"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Set Printer Nota</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <select class="form-select" name="lstSetPrinter" >
                                                        <option value="">- Pilih -</option>
                                                        <option value="1" <?=($detail->meta_print_status==1?'selected':'');?>>Off</option>
                                                        <option value="2" <?=($detail->meta_print_status==2?'selected':'');?>>On</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 offset-sm-3">
                                            <button type="submit" class="btn btn-primary me-1"><i data-feather='save'></i> Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('.number').maskMoney({thousands:',', precision:0});
    $('.digit').maskMoney({thousands:'', precision:2});
});

$(document).ready(function() {
    $( "#formInput" ).validate({
        rules: {
            name: { required: true },
            desc: { required: true },
            keyword: { required: true },
            author: { required: true },
            developer: { required: true },
            lstRobot: { required: true },
            lstGoogle: { required: true }
        },
        messages: {
            name: { required :'Nama APP required' },
            desc: { required :'Description required' },
            keyword: { required :'Keyword required' },
            author: { required :'Author required' },
            developer: { required :'Developer required' },
            lstRobot: { required :'Robots required' },
            lstGoogle: { required :'Googlebots required' }
        },
        submitHandler: function (form) {
            dataString = $('#formInput').serialize();
            $.ajax({
                url: "<?=site_url('admin/meta/updatedata');?>",
                type: "POST",
                data: dataString,
                success: function(data) {
                    toastr.success('Update Data Berhasil', 'Sukses', {
                        closeButton: true,
                        tapToDismiss: false
                    });
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    toastr.error('Update Data Gagal', 'Error', {
                        closeButton: true,
                        tapToDismiss: false
                    });
                }
            });
        }
    });
});
</script>