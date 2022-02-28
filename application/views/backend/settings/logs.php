<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>System Logs</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="<?= current_url() ?>">System Logs</a></li>
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
                                <h4>System Log</h4>
                            </div>
                            <div class="col text-right">
                                <a class="btn btn-danger clear_log">Clear Log</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="table-responsive">
                                    <table class="table table-condensed table-hover table-striped" id="table-logs">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>ID User</th>
                                                <th>Area of Activity</th>
                                                <th>Activity Log</th>
                                                <th>Created At</th>
                                                <th>Updated At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if ($activityLog){foreach ($activityLog as $row){ ?>
                                            <tr>
                                                <td class="text-center"><?= $row->id?></td>
                                                <td class="text-center"><?= $row->id_admin?></td>
                                                <td class="text-center"><?= $row->title?></td>
                                                <td class="text-center"><?= $row->log?></td>
                                                <td class="text-center"><?= $row->created_at?></td>
                                                <td class="text-center"><?= $row->updated_at?></td>
                                            </tr>
                                            <?php }} else { ?>
                                                <div class ="alert alert-info">No Log found!</div>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Clear Log -->
<div class="modal fade" id="clearLog" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="clearLoglabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-dark">
				<h4 id="clearLoglabel">Clear Log</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="submitClearLog" method="POST" action="">
				<div class="modal-body">
					<div class="row text-center">
						<div class="col">
							<h3>Apakah anda yakin ingin melakukan pembersihan system log? </h3>
						</div>
					</div>
					<div class="row text-center">
						<div class="col text-center">
							<p style="font-size:1.7rem;" class="text-center text-uppercase font-weight-bold">
                                I hope you know what you are doing!
                            </p>
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
    // Clear Log
    $('.clear_log').click(function(){
        $('#clearLog').modal('show');
    });
    // Process Clear Log
    $('#submitClearLog').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '<?=base_url('admin/logs/clear')?>',
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
                        window.location.href = "<?=base_url('admin/logs') ?>";
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
                        window.location.href = "<?=base_url('admin/logs') ?>";
                    }
                });
            }
        });
    });
</script>