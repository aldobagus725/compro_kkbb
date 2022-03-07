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
												<td class="text-center"><?= $row->role; ?></td>
												<td class="text-center"><?= $row->created_at; ?></td>
												<td class="text-center"><?= $row->updated_at; ?></td>
												<td class="text-center">
													<div class="btn-group" role="group">
														<a 
															data-fullname="<?= $row->fullname ?>" 
															data-username="<?= $row->username ?>" 
															data-email="<?= $row->email ?>" 
															data-role="<?= $row->role ?>" 
															data-last_login_at="<?= $row->last_login_at ?>"
															class="btn btn-primary view_data">
															<i class='fas fa-file-alt'></i>
														</a>
														<a 
															data-id="<?= $row->id ?>" 
															data-fullname="<?= $row->fullname ?>" 
															data-username="<?= $row->username ?>" 
															data-email="<?= $row->email ?>" 
															data-id_role="<?= $row->id_role ?>" 
															class="btn btn-warning edit_data">
															<i class='fas fa-pen'></i>
														</a>
														<a 
															data-id="<?= $row->id ?>" 
															data-username="<?= $row->username ?>" 
															data-role="<?= $row->role ?>" 
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
														<td class="fullname"></td>
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
														<th>Last Login At</th>
														<td class="last_login_at"></td>
													</tr>
													<tr>
														<th>Role</th>
														<td class="role"></td>
													</tr>
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
								<input type="text" class="form-control fullname_input" name="fullname_input" id="fullname_input" placeholder="Nama Lengkap Admin" required>
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
							<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control" name="username_input" id="username_input" placeholder="Username admin" required>
							</div>
						</div>
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
												<?= (strtoupper($r->role));  ?>
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
								<input type="text" class="form-control fullname_edit" name="fullname_edit" id="fullname_edit" placeholder="Nama Lengkap Admin" required>
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
								<label>Username Admin</label>
								<input type="text" class="form-control username_edit" name="username_edit" id="username_edit" placeholder="Username admin" required>
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label>Role Admin</label>
								<select name="id_role_edit" id="id_role_edit" class="form-control id_role_edit" required>
									<option value="">-- Pilih Role --</option>
									<?php if (isset($allRoles)) {
										foreach ($allRoles as $r) { ?>
											<option value="<?= $r->id; ?>">
												<?= (strtoupper($r->role));  ?>
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
							<p style="font-size:1.5rem;" class="text-center role_delete text-uppercase"></p>
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
	// View Admin
	$('.view_data').click(function() {
        const fullname = $(this).data('fullname');
		const username = $(this).data('username');
		const email = $(this).data('email');
		const role = $(this).data('role');
		const last_login_at = $(this).data('last_login_at');
		$('.fullname').text(fullname);
		$('.username').text(username);
		$('.email').text(email);
		$('.role').text(role);
		$('.last_login_at').text(last_login_at);
		$('#viewAdmin').modal('show');
	});
	// Tambah Admin
	$('.add_data').click(function() {
		$('#addAdmin').modal('show');
	});
	// Edit Data
	$('.edit_data').click(function() {
		const id = $(this).data('id');
		const fullname = $(this).data('fullname');
		const username = $(this).data('username');
		const email = $(this).data('email');
		const id_role = $(this).data('id_role');
		$('.id_edit').val(id);
		$('.fullname_edit').val(fullname);
		$('.username_edit').val(username);
		$('.email_edit').val(email);
		$('.id_role_edit').val(id_role);
		$('#editAdmin').modal('show');
	});
	// Delete Data
	$('.delete_data').click(function() {
		const id = $(this).data('id');
		const username = $(this).data('username');
		const nama_area = $(this).data('nama_area');
		const role = $(this).data('role');
		$('.id_delete').val(id);
		$('.username_delete').text(username);
		$('.nama_area_delete').text(nama_area);
		$('.role_delete').text(role);
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
		const fullname = $('#fullname_input').val();
		const username = $('#username_input').val();
		const email = $('#email_input').val();
		const password = $('#togglePassword_input').val();
		const id_role = $('#id_role_input').val();
		$.ajax({
			type: 'POST',
			url: '<?= base_url('admin/admins/add') ?>',
			data: {
				fullname: fullname,
				username: username,
				email: email,
				password: window.btoa(password),
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
		const fullname = $('.fullname_edit').val();
		const username = $('.username_edit').val();
		const email = $('.email_edit').val();
		const id_role = $('.id_role_edit').val();
		$.ajax({
			type: 'POST',
			url: '<?= base_url('admin/admins/update/') ?>' + id,
			data: {
				fullname: fullname,
				username: username,
				email: email,
				id_role: id_role,
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