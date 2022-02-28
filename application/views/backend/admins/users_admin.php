<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Admins</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
					<li class="breadcrumb-item active"><a href="<?= current_url() ?>">Admins</a></li>
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
								<h3 class="card-title">Data Admin</h3>
							</div>
							<div class="col text-right">
								<a class="btn btn-primary add_data">
									+ Tambah Admin
								</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered table-striped" id="table">
								<thead>
									<tr>
										<th class="text-center">ID</th>
										<th class="text-center">Username</th>
										<th class="text-center">Role</th>
										<th class="text-center">Area</th>
										<!-- <th class="text-center">Status Aktif</th> -->
										<th class="text-center">Created At</th>
										<th class="text-center">Updated At</th>
										<th class="text-center">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php if ($allAdmins) {
										foreach ($allAdmins as $row) { ?>
											<tr>
												<td class="text-center"><?= $row->id; ?></td>
												<td class="text-center"><?= $row->username; ?></td>
												<td class="text-center"><?= $row->nama_role; ?></td>
												<td class="text-center"><?= $row->nama_area; ?></td>
												<!-- <td class="text-center">
													<?//= $row->is_active==0?'<span style="font-size:1rem;" class="badge bg-danger">Tidak Aktif</span>':'<span style="font-size:1rem;" class="badge bg-success">Aktif</span>';?>
												</td> -->
												<td class="text-center"><?= $row->created_at; ?></td>
												<td class="text-center"><?= $row->updated_at; ?></td>
												<td class="text-center">
													<div class="btn-group" role="group">
														<a 
															data-nama_lengkap="<?= $row->nama_lengkap ?>" 
															data-username="<?= $row->username ?>" 
															data-email="<?= $row->email ?>" 
															data-no_telp="<?= $row->no_telp ?>" 
															data-nama_role="<?= $row->nama_role ?>" 
															data-nama_area="<?= $row->nama_area ?>" 
															
															data-last_login_at="<?= $row->last_login_at ?>"
															class="btn btn-primary view_data">

															<!-- data-is_active="<?//= $row->is_active ?>"  -->
															<i class='fas fa-file-alt'></i>
														</a>
														<a 
															data-id="<?= $row->id ?>" 
															data-nama_lengkap="<?= $row->nama_lengkap ?>" 
															data-no_telp="<?= $row->no_telp ?>"
															data-username="<?= $row->username ?>" 
															data-email="<?= $row->email ?>" 
															data-id_role="<?= $row->id_role ?>" 
															data-id_area="<?= $row->id_area ?>" 

															class="btn btn-warning edit_data">

															<!-- data-is_active="<?//= $row->is_active ?>"  -->
															<i class='fas fa-pen'></i>
														</a>
														<a 
															data-id="<?= $row->id ?>" 
															data-username="<?= $row->username ?>" 
															data-nama_role="<?= $row->nama_role ?>" 
															data-nama_area="<?= $row->nama_area ?>" 
															class="btn btn-danger delete_data">
															<i class='fas fa-trash-alt'></i>
														</a>
														<a 
															data-id="<?= $row->id ?>" 
															class="btn btn-info change_pass">
															<i class='fas fa-key'></i>
														</a>
													</div>
												</td>
											</tr>
										<?php  }
									} else { ?> <div class="alert alert-info">No admin found!</div> <?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- View Detail Admin -->
<div class="modal fade" id="viewAdmin" tabindex="-1" aria-labelledby="viewAdminLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-dark">
				<h5 class="modal-title" id="viewAdminLabel">Lihat Rincian Admin</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<!-- big batch -->
				<div class="row">
					<div class="col">
						<div class="container-fluid">
							<div class="row align-items-center">
								<div class="col-sm-3" >
									<img src="<?= base_url() . "assets/images/avatar.png" ?>" width="100%" alt="">
								</div>
								<div class="col-sm-9">
									<div class="row">
										<div class="col">
											<div class="table-responsive">
												<table class="table table-striped table-hover">
													<tr>
														<th>Nama Lengkap</th>
														<td class="nama_lengkap"></td>
													</tr>
													<tr>
														<th>Username</th>
														<td class="username"></td>
													</tr>
													<tr>
														<th>Email</th>
														<td class="email"></td>
													</tr>
													<tr>
														<th>Nomor Telepon</th>
														<td class="no_telp"></td>
													</tr>
													<tr>
														<th>Last Login At</th>
														<td class="last_login_at"></td>
													</tr>
													<tr>
														<th>Role</th>
														<td class="nama_role"></td>
													</tr>
													<tr>
														<th>Area</th>
														<td class="nama_area"></td>
													</tr>
													<!-- <tr>
														<th>Status Aktif</th>
														<td class="is_active"></td>
													</tr> -->
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>
<!-- Add Admin -->
<div class="modal fade" id="addAdmin" tabindex="-1" aria-labelledby="addAdminLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form id="submitAddAdmin" method="POST">
				<div class="modal-header bg-dark">
					<h5 class="modal-title" id="addAdminLabel">Tambah Admin</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col">
							<div class="form-group">
								<label>Nama Lengkap</label>
								<input type="text" class="form-control nama_lengkap_input" name="nama_lengkap_input" id="nama_lengkap_input" placeholder="Nama Lengkap Admin" required>
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label>Nomor Telepon</label>
								<input type="text" class="form-control no_telp_input" name="no_telp_input" id="no_telp_input" placeholder="Nomor Telepon Admin" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control" name="username_input" id="username_input" placeholder="Username admin" required>
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label>Email Admin</label>
								<input type="email" class="form-control" name="email_input" id="email_input" placeholder="Email admin" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">Password</span>
								</div>
								<input type="password" class="form-control" name="password_input" id="togglePassword_input" placeholder="Password" value="" required="">
								<div class="input-group-append" id="eyeSlash">
									<button class="border-0 reveal" onclick="hidesee_pass_input()" type="button"><i class="fas fa-eye-slash" aria-hidden="true"></i></button>
								</div>
								<div class="input-group-append" id="eyeShow" style="display: none;">
									<button class="border-0 reveal" onclick="hidesee_pass_input()" type="button"><i class="fas fa-eye" aria-hidden="true"></i></button>
								</div>
							</div>
						</div>
					</div>				
					<div class="row">
						<div class="col">
							<div class="form-group">
								<label>Role Admin</label>
								<select name="id_role_input" id="id_role_input" class="form-control id_role_input" required>
									<option value="">-- Pilih Role --</option>
									<?php if (isset($allRoles)) {
										foreach ($allRoles as $r) { ?>
											<option value="<?= $r->id; ?>">
												<?= (strtoupper($r->nama_role));  ?>
											</option>
									<?php }
									} else {
									}
									?>
								</select>
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label>Area Admin</label>
								<select name="id_area_input" id="id_area_input" class="form-control id_area_input" required>
									<option value="">-- Pilih Area --</option>
									<?php if (isset($allArea)) {
										foreach ($allArea as $a) { ?>
											<option value="<?= $a->id; ?>">
												<?= (strtoupper($a->nama_area));  ?>
											</option>
									<?php }
									} else {
									}
									?>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" value=" + Tambah Admin">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Admin -->
<div class="modal fade" id="editAdmin" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="editAdminLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form id="submitEditAdmin" method="POST">
				<div class="modal-header bg-dark">
					<h5 class="modal-title" id="editAdminLabel">Edit Admin</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<input type="hidden" class="id_edit" id="id_edit" name="id_edit">
					<div class="row">
						<div class="col">
							<div class="form-group">
								<label>Nama Lengkap</label>
								<input type="text" class="form-control nama_lengkap_edit" name="nama_lengkap_edit" id="nama_lengkap_edit" placeholder="Nama Lengkap Admin" required>
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label>Nomor Telepon</label>
								<input type="text" class="form-control no_telp_edit" name="no_telp_edit" id="no_telp_edit" placeholder="Nomor Telepon Admin" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="form-group">
								<label>Username Admin</label>
								<input type="text" class="form-control username_edit" name="username_edit" id="username_edit" placeholder="Username admin" required>
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label>Email Admin</label>
								<input type="email" class="form-control email_edit" name="email_edit" id="email_edit" placeholder="Email admin" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col">
							<div class="form-group">
								<label>Role Admin</label>
								<select name="id_role_edit" id="id_role_edit" class="form-control id_role_edit" required>
									<option value="">-- Pilih Role --</option>
									<?php if (isset($allRoles)) {
										foreach ($allRoles as $r) { ?>
											<option value="<?= $r->id; ?>">
												<?= (strtoupper($r->nama_role));  ?>
											</option>
									<?php }
									} else {
									}
									?>
								</select>
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label>Area Admin</label>
								<select name="id_area_edit" id="id_area_edit" class="form-control id_area_edit" required>
									<option value="">-- Pilih Area --</option>
									<?php if (isset($allArea)) {
										foreach ($allArea as $a) { ?>
											<option value="<?= $a->id; ?>">
												<?= (strtoupper($a->nama_area));  ?>
											</option>
									<?php }
									} else {
									}
									?>
								</select>
							</div>
						</div>
					</div>
					<!-- <div class="form-check">
						<input class="form-check-input is_active_edit" name="is_active_edit" type="checkbox" id="defaultCheck2 is_active_edit">
						<label class="form-check-label" for="defaultCheck2">
							Aktif
						</label>
					</div> -->
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" value="Ubah Data">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Admin -->
<div class="modal fade" id="deleteAdmin" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="deleteAdminlabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-dark">
				<h4 id="deleteAdminlabel">Hapus Admin</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="submitDeleteAdmin" method="POST" action="">
				<div class="modal-body">
					<div class="row text-center">
						<div class="col">
							<h4>Apakah anda yakin ingin menghapus Admin </h4>
						</div>
					</div>
					<div class="row text-center">
						<div class="col text-center">
							<div class="form-group">
								<input type="hidden" name="id_delete" id="id_delete" name="id_delete" class="id_delete form-control">
							</div>
							<p style="font-size:1.7rem;" class="text-center username_delete text-uppercase font-weight-bold"></p>
							<p style="font-size:1.5rem;" class="text-center nama_role_delete text-uppercase"></p>
							<p style="font-size:1.3em;" class="text-center nama_area_delete text-uppercase"></p>
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
<!-- Change Pass Admin -->
<div class="modal fade" id="changePassAdmin" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="changePassAdminlabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form id="submitChangePassAdmin" method="POST">
				<div class="modal-header bg-dark">
					<h5 class="modal-title" id="changePassAdminlabel">Change Pass Admin</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<input type="hidden" class="id_changePass" id="id_changePass" name="id_changePass">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">Password</span>
						</div>
						<input type="password" class="form-control" name="password" id="togglePassword_edit" placeholder="Password" value="" required="">
						<div class="input-group-append" id="eyeSlash1">
							<button class="border-0 reveal" onclick="hidesee_pass_edit()" type="button"><i class="fas fa-eye-slash" aria-hidden="true"></i></button>
						</div>
						<div class="input-group-append" id="eyeShow1" style="display: none;">
							<button class="border-0 reveal" onclick="hidesee_pass_edit()" type="button"><i class="fas fa-eye" aria-hidden="true"></i></button>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" value="Ubah Password">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
	function hidesee_pass_input() {
		var x = document.getElementById('togglePassword_input');
		if (x.type === 'password') {
			x.type = "text";
			$('#eyeShow').show();
			$('#eyeSlash').hide();
		} else {
			x.type = "password";
			$('#eyeShow').hide();
			$('#eyeSlash').show();
		}
	}

	function hidesee_pass_edit() {
		var x = document.getElementById('togglePassword_edit');
		if (x.type === 'password') {
			x.type = "text";
			$('#eyeShow1').show();
			$('#eyeSlash1').hide();
		} else {
			x.type = "password";
			$('#eyeShow1').hide();
			$('#eyeSlash1').show();
		}
	}
	// Tambah Admin
	$('.view_data').click(function() {
        const nama_lengkap = $(this).data('nama_lengkap');
		const username = $(this).data('username');
		const email = $(this).data('email');
		const no_telp = $(this).data('no_telp');
		// const is_active = $(this).data('is_active');
		const nama_role = $(this).data('nama_role');
		const nama_area = $(this).data('nama_area');
		const last_login_at = $(this).data('last_login_at');
		$('.nama_lengkap').text(nama_lengkap);
		$('.username').text(username);
		$('.email').text(email);
		$('.no_telp').text(no_telp);
		$('.nama_role').text(nama_role);
		$('.nama_area').text(nama_area);
		$('.last_login_at').text(last_login_at);
        // is_active
        // if (is_active == 1){$(".is_active").prop('checked', true).text('Aktif');}
        // else{$(".is_active").prop('checked', false).text('Tidak Aktif');}
		$('#viewAdmin').modal('show');
	});
	// Tambah Admin
	$('.add_data').click(function() {
		$('#addAdmin').modal('show');
	});
	// Edit Data
	$('.edit_data').click(function() {
		const id = $(this).data('id');
		const nama_lengkap = $(this).data('nama_lengkap');
		const no_telp = $(this).data('no_telp');
		const username = $(this).data('username');
		const email = $(this).data('email');
		const id_area = $(this).data('id_area');
		const id_role = $(this).data('id_role');
		// var is_active = $(this).data('is_active');
		$('.id_edit').val(id);
		$('.nama_lengkap_edit').val(nama_lengkap);
		$('.no_telp_edit').val(no_telp);
		$('.username_edit').val(username);
		$('.email_edit').val(email);
		$('.id_area_edit').val(id_area);
		$('.id_role_edit').val(id_role);
		// is_active
        // if (is_active == 1){$(".is_active_edit").prop('checked', true).val(1);}
        // else{$(".is_active_edit").prop('checked', false).val(0);}
        // $(".is_active_edit").change(function(){
        //     if($(this).prop("checked") == true){
        //         $(".is_active_edit").prop('checked', true).val(1);
        //     }else{
        //         $(".is_active_edit").prop('checked', false).val(0);
        //     }
        // });
		$('#editAdmin').modal('show');
	});
	// Delete Data
	$('.delete_data').click(function() {
		const id = $(this).data('id');
		const username = $(this).data('username');
		const nama_area = $(this).data('nama_area');
		const nama_role = $(this).data('nama_role');
		$('.id_delete').val(id);
		$('.username_delete').text(username);
		$('.nama_area_delete').text(nama_area);
		$('.nama_role_delete').text(nama_role);
		$('#deleteAdmin').modal('show');
	});
	// Change Pass Admin
	$('.change_pass').click(function() {
		const id = $(this).data('id');
		$('.id_changePass').val(id);
		$('#changePassAdmin').modal('show');
	});
	// Process Tambah Admin
	$('#submitAddAdmin').on('submit', function(event) {
		event.preventDefault();
		const nama_lengkap = $('#nama_lengkap_input').val();
		const no_telp = $('#no_telp_input').val();
		const username = $('#username_input').val();
		const email = $('#email_input').val();
		const password = $('#togglePassword_input').val();
		const id_area = $('#id_area_input').val();
		const id_role = $('#id_role_input').val();
		$.ajax({
			type: 'POST',
			url: '<?= base_url('admin/admins/add') ?>',
			data: {
				nama_lengkap: nama_lengkap,
				no_telp: no_telp,
				username: username,
				email: email,
				password: window.btoa(password),
				id_area: id_area,
				id_role: id_role
			},
			success: function(data) {
				const result = JSON.parse(data);
				const status = result.status;
				const title = result.title;
				const text = result.text;
				const type = result.type;
				const icon = result.icon;
				Swal.fire({
					title: title,
					text: text,
					type: type,
					icon: icon,
					showConfirmButton: true,
				}).then((result) => {
					if (result.isConfirmed) {
						window.location.href = "<?= base_url('admin/admins') ?>";
					}
				});
			},
			error: function(xhr, ajaxOptions, thrownError) {
				Swal.fire({
					title: "Failure",
					text: xhr.responseText,
					type: "error",
					icon: "error",
					showConfirmButton: true,
				}).then((result) => {
					if (result.isConfirmed) {
						window.location.href = "<?= base_url('admin/admins') ?>";
					}
				});
			}
		});
	});
	// Process Edit Admin
	$('#submitEditAdmin').submit(function(event) {
		event.preventDefault();
        const id = $('#id_edit').val();
		const nama_lengkap = $('.nama_lengkap_edit').val();
		const no_telp = $('.no_telp_edit').val();
		const username = $('.username_edit').val();
		const email = $('.email_edit').val();
		const id_area = $('.id_area_edit').val();
		const id_role = $('.id_role_edit').val();
		// const is_active = $('.is_active_edit').val();
		$.ajax({
			type: 'POST',
			url: '<?= base_url('admin/admins/update/') ?>' + id,
			data: {
				nama_lengkap: nama_lengkap,
				no_telp: no_telp,
				username: username,
				email: email,
				id_area: id_area,
				id_role: id_role,
				// is_active:is_active,
			},
			success: function(data) {
				const result = JSON.parse(data);
				const status = result.status;
				const title = result.title;
				const text = result.text;
				const type = result.type;
				const icon = result.icon;
				Swal.fire({
					title: title,
					text: text,
					type: type,
					icon: icon,
					showConfirmButton: true,
				}).then((result) => {
					if (result.isConfirmed) {
						window.location.href = "<?= base_url('admin/admins') ?>";
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
						window.location.href = "<?= base_url('admin/admins') ?>";
					}
				});
			}
		});
	});
	// Process Delete Admin
	$('#submitDeleteAdmin').on('submit', function(event) {
		event.preventDefault();
		const id = $('.id_delete').val();
		$.ajax({
			type: 'POST',
			url: '<?= base_url('admin/admins/delete/') ?>' + id,
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
						window.location.href = "<?= base_url('admin/admins') ?>";
					}
				});
			},
			error: function(xhr, ajaxOptions, thrownError) {
				Swal.fire({
					title: "Failure",
					text: xhr.responseText,
					type: "error",
					icon: "error",
					showConfirmButton: true,
				}).then((result) => {
					if (result.isConfirmed) {
						window.location.href = "<?= base_url('admin/admins') ?>";
					}
				});
			}
		});
	});
	// Process Change Pass Admin 
	$('#submitChangePassAdmin').on('submit', function(event) {
		event.preventDefault();
		const id = $('.id_changePass').val();
		const password = $('#togglePassword_edit').val();
		$.ajax({
			type: 'POST',
			url: '<?= base_url('admin/admins/changepass/') ?>' + id,
			data: {
				password: window.btoa(password),
				id: id
			},
			success: function(data) {
				const result = JSON.parse(data);
				const status = result.status;
				const title = result.title;
				const text = result.text;
				const type = result.type;
				const icon = result.icon;
				Swal.fire({
					title: title,
					text: text,
					type: type,
					icon: icon,
					showConfirmButton: true,
				}).then((result) => {
					if (result.isConfirmed) {
						window.location.href = "<?= base_url('admin/admins') ?>";
					}
				});
			},
			error: function(xhr, ajaxOptions, thrownError) {
				Swal.fire({
					title: "Failure",
					text: xhr.responseText,
					type: "error",
					icon: "error",
					showConfirmButton: true,
				}).then((result) => {
					if (result.isConfirmed) {
						window.location.href = "<?= base_url('admin/admins') ?>";
					}
				});
			}
		});
	});
</script>