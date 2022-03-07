<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Banner</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="<?= current_url(); ?>">Banner</a></li>
					<li class="breadcrumb-item active">Tambah Banner</li>
				</ol>
			</div>
		</div>
	</div>
</section>
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Tambah Banner</h3>
					</div>
					<form action="<?= base_url('admin/banner/set') ?>" id="banner_form" method="POST" enctype="multipart/form-data">
						<div class="card-body">
							<div class="form-group">
								<label>Judul Banner <span style="color: red;">*</span></label>
								<input type="text" name="title" id="title" class="form-control" placeholder="Masukkan Judul Banner" required>
							</div>
							<div class="form-group">
								<label>Gambar Banner <span style="color: red;">* format png, jpeg, jpg, max 4mb, 1920x1080</span></label>
								<input type="file" name="image" id="image" class="form-control" required> 
							</div>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label>Posisi Banner <span style="color: red;">*</span></label>
										<select name="position" class="form-control" id="position" required>
											<!-- max 8 position -->
											<?php for($i=1;$i<=8;$i++){ ?>
												<option value="<?=$i?>"><?=$i?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label>Visibility (Aktif/Tidak) <span style="color: red;">*</span></label>
										<select name="visibility" class="form-control" id="position" required>
											<!-- max 8 position -->
											<option value="0">Tidak</option>
											<option value="1">Ya</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<h6> Posisi yang sudah diisi banner: </h6>
									<p><i> * jika menggunakan posisi yang sama dengan banner lain, maka banner lain akan ter override & bertukar posisi </i></p>
									<div class="table-responsive">
										<table class="table table-condensed table-striped table-hover">
											<thead>
												<tr>
													<th>ID</th>
													<th>Title</th>
													<th>Position</th>
												</tr>
											</thead>
											<?php if($banner){
												foreach ($banner as $b){
											?>
												<tr>
													<td><?=$b['id']?></td>
													<td><?=$b['title']?></td>
													<td><?=$b['position']?></td>
												</tr>
											<?php 
												}
											} else{
											?>
												<div class="alert alert-warning" role="alert">
													No Banner Found!
												</div>
											<?php } ?>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer text-right">
							<button name="save" class="btn btn-primary">+ TAMBAH BANNER</button>
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
          $("#banner_form").submit();
        } else {
          console.log('gagal');
        }
      })
    })
  });
</script>