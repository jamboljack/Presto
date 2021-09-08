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
                        <h2 class="content-header-title float-start mb-0">Barang</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=site_url('admin/home');?>">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#">Data Barang</a></li>
                                <li class="breadcrumb-item"><a href="<?=site_url('admin/barang');?>">Barang</a></li>
                                <li class="breadcrumb-item" active>Tambah Data</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section id="card-actions">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title"><i data-feather='plus-circle'></i> Form Tambah Data</h4>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <a class="btn btn-gradient-warning" href="<?=site_url('admin/barang');?>" role="button"><i data-feather='arrow-left'></i> Batal</a>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body mt-1">
                                <form class="form form-horizontal" id="formInput" name="formInput" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="ppn_rp" id="ppn_rp">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Nama Barang</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Input Nama Barang"autocomplete="off"  autofocus />
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Kategori</label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <select class="form-select" name="lstKategori">
                                                        <option value="">- Pilih Kategori -</option>
                                                        <?php foreach ($listKategori as $r) { ?>
                                                        <option value="<?=$r->kategori_id;?>"><?=$r->kategori_nama;?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Tipe Barang</label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <select class="form-select" name="lstTipe">
                                                        <option value="">- Pilih Tipe Barang -</option>
                                                        <option value="S">STOCK</option>
                                                        <option value="N">NON STOCK</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Harga Pokok Rp.</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control number" placeholder="0" name="harga" id="harga" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">PPN (%)</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control digit" placeholder="0.00" name="ppn" id="ppn" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Total Harga Rp.</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control number" placeholder="0" name="total" id="total" autocomplete="off" readonly>
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Upload Foto</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="file" name="foto" class="form-control" accept=".png,.jpg,.jpeg" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 offset-sm-3">
                                            <button type="submit" class="btn btn-primary me-1"><i data-feather='save'></i> Simpan</button>
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
    
    $("#harga").change(function(){
        hitungTotal();
    });

    $("#ppn").change(function(){
        hitungTotal();
    });
});

function formatNumber (num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
}

function hitungTotal() {
    var myForm              = document.formInput;
    var Harga               = myForm.harga.value;
    Harga                   = Harga.replace(/[,]/g, '');
    Harga                   = parseInt(Harga);
    var PPN                 = myForm.ppn.value;
    PPN                     = PPN.replace(/[,]/g, '');
    PPN                     = parseFloat(PPN);
    var PPN_Rp;
    if (PPN === 0 || isNaN(PPN)) {
        var Total           = Harga;
        PPN_Rp              = 0;
    } else {
        PPN_Rp              = ((PPN*Harga)/100);
        var Total           = (Harga+PPN_Rp);
    }
    myForm.ppn_rp.value = PPN_Rp;
    if (isNaN(Total)) {
        myForm.total.value     = 0;
    } else {
        myForm.total.value     = formatNumber(Total);
    }
}

$(document).ready(function() {
    $( "#formInput" ).validate({
        rules: {
            nama: {
                required: true,
                remote: {
                    url: "<?=site_url('admin/barang/register_nama_exists');?>",
                    type: "post",
                    data: {
                        nama: function() {
                            return $("#nama").val();
                        }
                    }
                }
            },
            lstKategori: { required: true },
            lstTipe: { required: true },
            harga: { required: true }
        },
        messages: {
            nama: {
                required:'Nama Barang required', remote: 'Nama Barang sudah ada, mohon Ganti'
            },
            lstKategori: { required:'Kategori required' },
            lstTipe: { required:'Level required' },
            harga: { required:'Harga Pokok required' }
        },
        submitHandler: function (form) {
            var formData = new FormData($('#formInput')[0]);
            $.ajax({
                dataType: 'json',
                data: formData,
                async: true,
                url: "<?=site_url('admin/barang/savedata');?>",
                type: "POST",
                success: function(data) {
                    if (data.status === 'success') {
                        window.location="<?=site_url('admin/barang');?>";
                    } else {
                        toastr.info('Tipe Foto tidak Sesuai', 'Info', {
                            closeButton: true,
                            tapToDismiss: false
                        });
                    }
                },
                error: function() {
                    toastr.error('Simpan Data Gagal', 'Error', {
                        closeButton: true,
                        tapToDismiss: false
                    });
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });
});
</script>