<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>KMJ</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
					<li class="breadcrumb-item active"><a href="<?= base_url('admin/kmj') ?>">KMJ</a></li>
                    <li class="breadcrumb-item active"><a href="<?= current_url() ?>">Edit KMJ</a></li>
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
                                <!-- <a class="btn btn-danger" href="<?//=base_url('admin/kmj')?>">
									< Kembali
								</a> -->
								<h3 class="card-title">Edit KMJ </h3>
							</div>
						</div>
					</div>
                    <?php if ($kmj){
                        foreach ($kmj as $p){
                    ?>
                    <form class="submitEditKMJ" action="<?= base_url('admin/kmj/update/'.$p->id) ?>" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Lengkap KMJ</label>
                                <input type="text" required class="form-control nama_lengkap" value="<?=$p->nama_lengkap?>" name="nama_lengkap" id="nama_lengkap">
                            </div>
                            <div class="form-group">
                                <label>Periode Jabatan</label>
                                <input type="text" required class="form-control periode" value="<?=$p->periode?>" name="periode" id="periode">
                            </div>
                            <div class="form-group">
                                <label>FOTO KMJ <span style="color: red;">jika tidak melakukan perubahan gambar, di abaikan*</span></label>
                                <input type="file" name="image" id="image" class="form-control image" required>
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <i>*current image</i>
                                    <br>
                                    <img src="<?=base_url('resource/kmj/'.$p->image)?>" style="width:35%;">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right text-uppercase">
                            <button name="save" class="btn btn-primary btn-lg">POST</button>
                            <a href="<?= base_url('admin/kmj') ?>"class="btn btn-danger btn-lg">Kembali</a>
                        </div>
                    </form>
                    <?php } } else { ?>
                        <div class="alert alert-warning text-center" role="alert">
                            <h4>ERROR! INVALID PARAMETER! </h4>
                            <a href="<?= base_url('admin/kmj') ?>">GO BACK</a>
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