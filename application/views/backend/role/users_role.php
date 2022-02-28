<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Users Role</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="<?= current_url() ?>">Users Role</a></li>
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
                                <h3 class="card-title">Data Role</h3>
							</div>
							<div class="col text-right">
								<a class="btn btn-primary add_role">
									+ Tambah Role
								</a>
							</div>
						</div>
                    </div>
                    <div class="card-body">
                        <?php if ($allRole) { ?>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">Role</th> 
                                            <th class="text-center">Created At</th>
                                            <th class="text-center">Updated At</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($allRole as $row){ ?>
                                            <tr>
                                                <td class="text-center"><?= $row->id; ?></td>
                                                <td class="text-center"><?= $row->nama_role; ?></td>
                                                <td class="text-center"><?= $row->created_at; ?></td>
                                                <td class="text-center"><?= $row->updated_at; ?></td>
                                                <td class="text-center">
                                                    <div class="btn-group" role="group" aria-label="aksi_role">
                                                        <a 
                                                            data-id_role="<?=$row->id?>" 
                                                            data-role="<?=$row->nama_role?>" 
                                                            class="btn btn-warning edit_role">
                                                            Edit
                                                        </a>
                                                        <a 
                                                            data-id_role="<?=$row->id?>" 
                                                            data-role="<?=$row->nama_role?>" 
                                                            class="btn btn-danger delete_role">
                                                            Delete
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php  } else { ?> <div class ="alert alert-info">No role found!</div> <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Add Role -->
<div class="modal fade" id="addRole" tabindex="-1" aria-labelledby="addRoleLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form id="submitAddRole" method="POST">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title" id="addRoleLabel">Tambah Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Role</label>
                        <input type="text" class="form-control nama_role_input " required name="nama_role_input" id="nama_role_input" placeholder="Nama Role...">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value=" + Tambah Role">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit Modal -->
<div class="modal fade" id="editRole" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="editRoleLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="submitEditRole" method="POST">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title" id="editRoleLabel">Edit Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" class="id_role_edit" id="id_role_edit">
                    <div class="form-group">
                        <label>Role</label>
                        <input type="text" class="form-control nama_role_edit" required name="nama_role_edit" id="nama_role_edit" placeholder="nama role...">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Ubah Role">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Delete Modal -->
<div class="modal fade" id="deleteRole" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="deleteRolelabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h4 id="deleteRolelabel">Hapus Role</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="submitDeleteRole" method="POST" action="">
                <div class="modal-body">
                    <div class="row text-center">
                        <div class="col">
                            <h4>Apakah anda yakin ingin menghapus Role </h4>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col text-center">
                            <div class="form-group">
                                <input type="hidden" name="id_role_delete" id="id_role_delete" class="id_role_delete form-control">
                            </div>
                            <p style="font-size:1.7rem;" class="text-center nama_role_delete text-uppercase font-weight-bold" id="nama_role_delete"></p>
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
    // Tambah Role
    $('.add_role').click(function(){
        $('#addRole').modal('show');
    });
    // Edit Role
    $('.edit_role').click(function(){
        const id_role = $(this).data('id_role');
        const nama_role = $(this).data('role');
        $('.id_role_edit').val(id_role);
        $('.nama_role_edit').val(nama_role);
        $('#editRole').modal('show');
    });
    // Delete Role
    $('.delete_role').click(function(){
        const id_role = $(this).data('id_role');
        const role = $(this).data('role');
        $('.id_role_delete').val(id_role);
        $('.nama_role_delete').text(role);
        $('#deleteRole').modal('show');
    });
    // Process Tambah Role
    $('#submitAddRole').on('submit', function(event) {
        event.preventDefault();
        const nama_role = $('#nama_role_input').val();
        $.ajax({
            type: 'POST',
            url: '<?=base_url('admin/role/add')?>',
            data:{nama_role:nama_role}, 
            success: function (data) {
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
                        window.location.href = "<?=base_url('admin/role') ?>";
                    }
                });
            },
            error: function (xhr, ajaxOptions, thrownError) {
                function stripHtml(html){
                    let tmp = document.createElement("DIV");
                    tmp.innerHTML = html;
                    return tmp.textContent || tmp.innerText || "";
                }
                Swal.fire({
                    title: "Failure",
                    text: stripHtml(xhr.responseText),
                    type: "error",
                    icon: "error",
                    showConfirmButton: true,
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "<?=base_url('admin/role') ?>";
                    }
                });
            }
        });
    });
    // Process Edit Role
    $('#submitEditRole').submit(function(event) {
        event.preventDefault();
        const id_role = $('.id_role_edit').val();
        const nama_role = $('.nama_role_edit').val();
        $.ajax({
            type: 'POST',
            url: '<?=base_url('admin/role/add/')?>' + id_role,
            data:{nama_role:nama_role},
            success: function (data) {
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
                        window.location.href = "<?=base_url('admin/role') ?>";
                    }
                });
            },
            error: function (xhr, ajaxOptions, thrownError) {
                function stripHtml(html){
                    let tmp = document.createElement("DIV");
                    tmp.innerHTML = html;
                    return tmp.textContent || tmp.innerText || "";
                }
                Swal.fire({
                    title: "Failure",
                    text: stripHtml(xhr.responseText),
                    type: "error",
                    icon: "error",
                    showConfirmButton: true,
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "<?=base_url('admin/role') ?>";
                    }
                });
            }
        });
    });
    // Process Delete Role
    $('#submitDeleteRole').on('submit', function(event) {
        event.preventDefault();
        const id_role = $('.id_role_delete').val();
        $.ajax({
            type: 'POST',
            url: '<?=base_url('admin/role/delete/')?>' + id_role,
            data:{id_role:id_role}, 
            success: function (data) {
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
                        window.location.href = "<?=base_url('admin/role') ?>";
                    }
                });
            },
            error: function (xhr, ajaxOptions, thrownError) {
                function stripHtml(html){
                    let tmp = document.createElement("DIV");
                    tmp.innerHTML = html;
                    return tmp.textContent || tmp.innerText || "";
                }
                Swal.fire({
                    title: "Failure",
                    text: stripHtml(xhr.responseText),
                    type: "error",
                    icon: "error",
                    showConfirmButton: true,
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "<?=base_url('admin/role') ?>";
                    }
                });
            }
        });
    });
</script>