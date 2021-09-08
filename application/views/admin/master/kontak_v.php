<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Kontak Kami</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=site_url('admin/home');?>">Dashboard</a></li>
                                <li class="breadcrumb-item" active>Kontak Kami</li>
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
                                <h4 class="card-title"><i data-feather='shield'></i> Kontak Kami</h4>
                            </div>
                            <div class="card-body mt-1">
                                <form class="form form-horizontal" id="formInput" name="formInput" method="post">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Nama Instansi</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="name" placeholder="Input Nama APP" value="<?=$detail->contact_name;?>" autocomplete="off" placeholder="Input Nama Instansi" autofocus />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Alamat</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="address" value="<?=$detail->contact_address; ?>" autocomplete="off" placeholder="Input Alamat" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">No. Telepon</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="phone" value="<?=$detail->contact_phone;?>" placeholder="Input No. Telepon" autocomplete="off" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Email</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="email" value="<?=$detail->contact_email; ?>" placeholder="Input Email" autocomplete="off" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Website</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="web" value="<?=$detail->contact_web;?>" placeholder="Input Website" autocomplete="off" />
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
    $( "#formInput" ).validate({
        rules: { 
            name: { required: true },
            address: { required: true },
            phone: { required: true },
            email: { required: true, email: true },
            web: { required: true, url: true }
        },
        messages: {
            name: { required:'Nama Instansi required' },
            address: { required:'Alamat required' },
            phone: { required:'No. Telepon harus diisi' },
            email: { required:'Email harus diisi', email:'Email tidak Valid' },
            web: { required:'Website harus diisi', url:'Website tidak Valid (Ex. http://www.domain.com)' }
        },
        submitHandler: function (form) {
            dataString = $('#formInput').serialize();
            $.ajax({
                url: "<?=site_url('admin/kontak/updatedata');?>",
                type: "POST",
                data: dataString,
                success: function(data) {
                    toastr.success('Update Data Berhasil', 'Sukses', {
                        closeButton: true,
                        tapToDismiss: false
                    });
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('Error Update Data');
                }
            });
        }
    });
});
</script>