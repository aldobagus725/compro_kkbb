<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>KMJ</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
					<li class="breadcrumb-item active"><a href="<?= current_url() ?>">KMJ</a></li>
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
								<h3 class="card-title">Daftar KMJ</h3>
							</div>
							<div class="col text-right">
								<a class="btn btn-primary" href="<?=base_url('admin/kmj/add')?>">
									+ Tambah KMJ
								</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-condensed" id="table_kmj">
								<thead>
									<tr>
										<th class="text-center">ID</th>
                                        <th class="text-center">Nama Lengkap</th>
										<th class="text-center">Periode</th>
										<th class="text-center">Created At</th>
										<th class="text-center">Updated At</th>
										<th class="text-center">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php if ($allKmj) {
										foreach ($allKmj as $row) { ?>
											<tr>
												<td class="text-center"><?= $row->id; ?></td>
                                                <td class="text-center"><?= $row->nama_lengkap; ?></td>
												<td class="text-center"><?= $row->periode; ?></td>
												<td class="text-center"><?= $row->created_at; ?></td>
                                                <td class="text-center"><?= $row->updated_at; ?></td>
												<td class="text-center">
													<div class="btn-group" role="group">
														<a href="<?=base_url('admin/kmj/edit/'.$row->id)?>"
                                                            class="btn btn-warning btn-sm edit_kmj">
															<i class='fas fa-pen'></i>
														</a>
														<a  data-id="<?= $row->id ?>" 
                                                            data-nama_lengkap="<?= $row->nama_lengkap ?>" 
                                                            class="btn btn-danger btn-sm delete_kmj">
															<i class='fas fa-trash-alt'></i>
														</a>
													</div>
												</td>
											</tr>
										<?php  }
									} else { ?> <div class="alert alert-info">Belum Ada Data KMJ!</div> <?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Delete KMJ -->
<div class="modal fade" id="deleteKMJ" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="deleteKMJlabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-dark">
				<h4 id="deleteKMJlabel">Hapus KMJ</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="submitDeleteKMJ" method="POST" action="">
				<div class="modal-body">
					<div class="row text-center">
						<div class="col">
							<h4>Apakah anda yakin ingin menghapus KMJ </h4>
						</div>
					</div>
					<div class="row text-center">
						<div class="col text-center">
							<div class="form-group">
								<input type="hidden" name="id_delete" id="id_delete" name="id_delete" class="form-control id_delete">
							</div>
							<p style="font-size:1.7rem;" class="text-center nama_lengkap_delete text-uppercase font-weight-bold"></p>
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
	// Delete KMJ
	$('.delete_kmj').click(function() {
		const id = $(this).data('id');
		const nama_lengkap = $(this).data('nama_lengkap');
		$('.id_delete').val(id);
		$('.nama_lengkap_delete').text(nama_lengkap);
		$('#deleteKMJ').modal('show');
	});
	// Process Delete KMJ
	$('#submitDeleteKMJ').on('submit', function(event) {
		event.preventDefault();
		const id = $('.id_delete').val();
		$.ajax({
			type: 'POST',
			url: '<?= base_url('admin/kmj/delete/') ?>' + id,
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
						window.location.href = "<?= base_url('admin/kmj') ?>";
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
						window.location.href = "<?= base_url('admin/kmj') ?>";
					}
				});
			}
		});
	});
</script>