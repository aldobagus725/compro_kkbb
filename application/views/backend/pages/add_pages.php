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
					<li class="breadcrumb-item"><a href="<?= base_url('admin/pages') ?>">Halaman</a></li>
                    <li class="breadcrumb-item active"><a href="<?= current_url() ?>">Tambah Halaman</a></li>
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
								<h3 class="card-title">Tambah Halaman </h3>
							</div>
						</div>
					</div>
                    <form class="submitAddPages" action="<?= base_url('admin/pages/set') ?>" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Judul Halaman</label>
                                <input type="text" required class="form-control title" name="title" id="title" placeholder="Judul, e.g. PHMJ">
                            </div>
                            <div class="form-group">
                                <label>Slug (link)</label>
                                <input type="text" required class="form-control slug" name="slug" id="slug" placeholder="eg. phmj">
                            </div>
                            <div class="form-group">
                                <label>Konten</label>
                                <textarea class="form-control body" name="body" id="body" required></textarea>
                                <script>
                                    // Replace the <textarea id="editor1"> with a CKEditor 4
                                    // instance, using default configuration.
                                    CKEDITOR.replace( 'body' );
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Gambar Post <span style="color: red;">*</span></label>
                                <input type="file" name="image" id="image" class="form-control image" required>
                            </div>
                        </div>
                        <div class="card-footer text-right text-uppercase">
                            <button name="save" class="btn btn-primary btn-lg">POST</button>
                            <a href="<?= base_url('admin/pages') ?>"class="btn btn-danger btn-lg">Kembali</a>
                        </div>
                    </form>
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