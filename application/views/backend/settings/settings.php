<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>System Settings</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="<?= current_url() ?>">System Settings</a></li>
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
                        <div class="row">
                            <div class="col">
                                <h4>System Settings</h4>
                            </div>
                            <?php if ($_SESSION['admin']->role == "superadmin") { ?>
                                <div class="col text-right">
                                    <a class="btn btn-primary add_setting">Tambah Setting Baru</a>
                                </div>
                            <?php } else {} ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php if ($allSettings) { ?>
                            <div class="row row-cols-2 row-cols-md-4 g-4">
                                <?php foreach($allSettings as $row){?>
                                    <form method="POST" id="submit<?= str_replace(" ","","$row->name");?>">
                                        <div class="col">
                                            <div class="card h-100">
                                                <img src="<?= base_url('assets/img/gpib_settings.png') ?>" class="card-img-top" alt="settings">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label style="font-size:1.5rem;"><?= $row->title; ?></label>
                                                        <input type="hidden" class="id<?= str_replace(" ","","$row->name");?>" value="<?= $row->id; ?>">
                                                        <input type="hidden" class="title<?= str_replace(" ","","$row->name");?>" value="<?= $row->title; ?>">
                                                        <input type="hidden" class="set_<?= str_replace(" ","","$row->name");?>" value="<?= str_replace(" ","","$row->name");?>">
                                                        <input type="text" class="form-control value<?= str_replace(" ","","$row->name");?>" required value="<?= $row->value; ?>">
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="row">
                                                        <div class="col col-6">
                                                            <input type="submit" class="btn btn-primary" value="Simpan" name="submit">
                                                        </div>
                                                        <?php if ($_SESSION['admin']->role == "superadmin") { ?>
                                                            <div class="col col-6 text-right">
                                                                <a class="btn btn-danger delete_setting" data-id="<?= $row->id ?>" data-title="<?= $row->title ?>">Hapus</a>
                                                            </div>
                                                        <?php } else {} ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                <?php } ?>
                            </div>
                        <?php } else { ?>
                            <div class ="alert alert-info">No settings found!</div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Add Settings -->
<div class="modal fade" id="addSettings" tabindex="-1" aria-labelledby="addSettingsLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form id="submitAddSettings" method="POST">
				<div class="modal-header bg-dark">
					<h5 class="modal-title" id="addSettingsLabel">Tambah Setting</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
                    <div class="form-group">
                        <label>Nama Settings</label>
                        <input type="text" class="form-control" name="title_input" id="title_input" placeholder="Judul Settings" required>
                    </div>
                    <div class="form-group">
                        <label>Value</label>
                        <input type="text" class="form-control" name="value_input" id="value_input" placeholder="Value" required>
                    </div>
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" value=" + Tambah Settings">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Settings -->
<div class="modal fade" id="deleteSettings" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="deleteSettingslabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-dark">
				<h4 id="deleteSettingslabel">Hapus Setting</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="submitDeleteSettings" method="POST" action="">
				<div class="modal-body">
					<div class="row text-center">
						<div class="col">
							<h4>Apakah anda yakin ingin menghapus Setting </h4>
						</div>
					</div>
					<div class="row text-center">
						<div class="col text-center">
							<div class="form-group">
								<input type="hidden" name="id_delete" id="id_delete" name="id_delete" class="form-control id_delete">
							</div>
							<p style="font-size:1.7rem;" class="text-center title_delete text-uppercase font-weight-bold"></p>
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
<!-- Some Scripts -->
<script>
    // Tambah Setting
    $('.add_setting').click(function(){
        $('#addSettings').modal('show');
    });
    // Delete Setting
    $('.delete_setting').click(function(){
        const id = $(this).data('id');
        const title = $(this).data('title');
        $('.id_delete').val(id);
        $('.title_delete').text(title);
        $('#deleteSettings').modal('show');
    });
    // Process Tambah Setting
    $('#submitAddSettings').on('submit', function(event) {
        event.preventDefault();
        const title = $('#title_input').val();
        const name = $('#title_input').val();
        const value= $('#value_input').val();
        $.ajax({
            type: 'POST',
            url: '<?=base_url('admin/settings/set')?>',
            data:{
                title:title,
                name:name,
                value:value,
                }, 
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
                        window.location.href = "<?=base_url('admin/settings') ?>";
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
                        window.location.href = "<?=base_url('admin/settings') ?>";
                    }
                });
            }
        });
    });
    // Process Delete Settings
    $('#submitDeleteSettings').on('submit', function(event) {
        event.preventDefault();
        const id = $('.id_delete').val();
        $.ajax({
            type: 'POST',
            url: '<?=base_url('admin/settings/delete/')?>' + id,
            data:{id:id}, 
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
                        window.location.href = "<?=base_url('admin/settings') ?>";
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
                        window.location.href = "<?=base_url('admin/settings') ?>";
                    }
                });
            }
        });
    });
</script>
<!-- submit settings -->
<?php if ($allSettings) {foreach($allSettings as $row){?>
    <script>
        // Update/Set Value
            $('#submit<?= str_replace(" ","","$row->name");?>').submit(function(event) {
                event.preventDefault();
                const id = $('.id<?= str_replace(" ","","$row->name");?>').val();
                const name = $('.set_<?= str_replace(" ","","$row->name");?>').val();
                const title = $('.title<?= str_replace(" ","","$row->name");?>').val();
                const value = $('.value<?= str_replace(" ","","$row->name");?>').val();
                $.ajax({
                    type: 'POST',
                    url: '<?= base_url('admin/settings/set/')?>' + id,
                    data:{
                            name:name,
                            title:title,
                            value:value,
                        },
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
                                window.location.href = "<?=base_url('admin/settings') ?>";
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
                                window.location.href = "<?=base_url('admin/settings') ?>";
                            }
                        });
                    }
                });
            });
    </script>
<?php }} ?>