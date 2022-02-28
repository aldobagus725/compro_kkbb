<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Pelkat</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
					<li class="breadcrumb-item active"><a href="<?= current_url() ?>">Pelkat</a></li>
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
								<h3 class="card-title">Daftar Pelkat</h3>
							</div>
							<div class="col text-right">
								<a class="btn btn-primary" href="<?=base_url('admin/pelkat/add')?>">
									+ Tambah Pelkat
								</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-condensed" id="table_pelkat">
								<thead>
									<tr>
										<th class="text-center">ID</th>
                                        <th class="text-center">Pelkat</th>
										<th class="text-center">Judul</th>
										<th class="text-center">Created At</th>
										<th class="text-center">Updated At</th>
										<th class="text-center">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php if ($allPelkat) {
										foreach ($allPelkat as $row) { ?>
											<tr>
												<td class="text-center"><?= $row->id; ?></td>
                                                <td class="text-center"><?= $row->pelkat; ?></td>
												<td class="text-center"><?= $row->title; ?></td>
												<td class="text-center"><?= $row->created_at; ?></td>
                                                <td class="text-center"><?= $row->updated_at; ?></td>
												<td class="text-center">
													<div class="btn-group" role="group">
														<a href="<?=base_url('admin/pelkat/edit/'.$row->id)?>"
                                                            class="btn btn-warning btn-sm edit_pelkat">
															<i class='fas fa-pen'></i>
														</a>
														<a  data-id="<?= $row->id ?>" 
                                                            data-pelkat="<?= $row->pelkat ?>" 
                                                            class="btn btn-danger btn-sm delete_pelkat">
															<i class='fas fa-trash-alt'></i>
														</a>
													</div>
												</td>
											</tr>
										<?php  }
									} else { ?> <div class="alert alert-info">Belum Ada Data Pelkat!</div> <?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Delete Pelkat -->
<div class="modal fade" id="deletePelkat" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="deletePelkatlabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-dark">
				<h4 id="deletePelkatlabel">Hapus Pelkat</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="submitDeletePelkat" method="POST" action="">
				<div class="modal-body">
					<div class="row text-center">
						<div class="col">
							<h4>Apakah anda yakin ingin menghapus Pelkat </h4>
						</div>
					</div>
					<div class="row text-center">
						<div class="col text-center">
							<div class="form-group">
								<input type="hidden" name="id_delete" id="id_delete" name="id_delete" class="form-control id_delete">
							</div>
							<p style="font-size:1.7rem;" class="text-center pelkat_delete text-uppercase font-weight-bold"></p>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col text-center">
							<input type="submit" class="btn btn-lg btn-primary" value="YA">
							<button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">TIDAK</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
	// Delete Pelkat
	$('.delete_pelkat').click(function() {
		const id = $(this).data('id');
		const pelkat = $(this).data('pelkat');
		$('.id_delete').val(id);
		$('.pelkat_delete').text(pelkat);
		$('#deletePelkat').modal('show');
	});
	// Process Delete Pelkat
	$('#submitDeletePelkat').on('submit', function(event) {
		event.preventDefault();
		const id = $('.id_delete').val();
		$.ajax({
			type: 'POST',
			url: '<?= base_url('admin/pelkat/delete/') ?>' + id,
			data: {
				id: id
			},
			success: function(data) {
				var result = JSON.parse(data);
				var status = result.status;
				var title = result.title;
				var text = result.text;
				var type = result.type;
				var icon = result.icon;
				Swal.fire({
					title: title,
					text: text,
					type: type,
					icon: icon,
					showConfirmButton: true,
				}).then((result) => {
					if (result.isConfirmed) {
						window.location.href = "<?= base_url('admin/pelkat') ?>";
					}
				});
			},
			error: function(xhr, ajaxOptions, thrownError) {
				var html = xhr.responseText;
				var div = document.createElement("div");
				div.innerHTML = html;
				var text = div.textContent || div.innerText || "";
				Swal.fire({
					title: "Failure",
					text: text,
					type: "error",
					icon: "error",
					showConfirmButton: true,
				}).then((result) => {
					if (result.isConfirmed) {
						window.location.href = "<?= base_url('admin/pelkat') ?>";
					}
				});
			}
		});
	});
</script>