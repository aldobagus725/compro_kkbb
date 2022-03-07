<head>
    <script src="<?=base_url('assets/ckeditor/ckeditor.js')?>"></script>
</head>
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Pages</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
					<li class="breadcrumb-item active"><a href="<?= base_url('admin/pages') ?>">Halaman</a></li>
                    <li class="breadcrumb-item active"><a href="<?= current_url() ?>">Edit Halaman</a></li>
				</ol>
			</div>
		</div>
	</div>
</section>
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header bg-dark">
						<div class="row align-items-center">
							<div class="col">
                                <!-- <a class="btn btn-danger" href="<?//=base_url('admin/pages')?>">
									< Kembali
								</a> -->
								<h3 class="card-title">Edit Halaman </h3>
							</div>
						</div>
					</div>
                    <?php if ($pages){
                        foreach ($pages as $p){
                    ?>
                    <form class="submitEditPages" action="<?= base_url('admin/pages/update/'.$p->id) ?>" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Judul Halaman</label>
                                <input type="text" required class="form-control title" value="<?=$p->title?>" name="title" id="title" placeholder="Judul, e.g. PHMJ">
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label>Tipe Halaman</label>
                                    <select class="form-control" name="type" id="type" required>
                                        <option value="">== Pilih ==</option>
                                        <option <?=$p->type=="profile"?"selected":"";?> value="profile">Profile </option>
                                        <option <?=$p->type=="info"?"selected":"";?> value="info">Informasi</option>
                                        <option <?=$p->type=="berita_duka"?"selected":"";?> value="berita_duka">Berita Duka</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Konten</label>
                                <textarea class="form-control body" name="body" id="body" required><?=$p->body?></textarea>
                                <script>
                                    CKEDITOR.replace( 'body' );
                                    CKEDITOR.config.width = '100%'; 
                                    CKEDITOR.config.height = 500;
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Gambar Post <span style="color: red;">jika tidak melakukan perubahan gambar, di abaikan*</span></label>
                                <input type="file" name="image" id="image" class="form-control image" required>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i>*current image</i>
                                    <br>
                                    <img src="<?=base_url('resource/pages/'.$p->image)?>" style="width:75%;">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right text-uppercase">
                            <button name="save" class="btn btn-primary btn-lg">POST</button>
                            <a href="<?= base_url('admin/pages') ?>"class="btn btn-danger btn-lg">Kembali</a>
                        </div>
                    </form>
                    <?php } } else { ?>
                        <div class="alert alert-warning text-center" role="alert">
                            <h4>ERROR! INVALID PARAMETER! </h4>
                            <a href="<?= base_url('admin/pages') ?>">GO BACK</a>
                        </div>
                    <?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
    $(document).ready(function() {
        $('button[name="save"]').on("click", function(e) {
            e.preventDefault();
            var form = $(this).parents('form');
            Swal.fire({
                title: 'Apakah anda yakin ?',
                text: "Pastikan data yang diinput sudah benar",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak',
            }).then(function(result) {
                if (result.value) {
                    console.log('berhasil');
                    form.submit();
                } else {
                    console.log('gagal');
                }
            })
        })
    });
</script>