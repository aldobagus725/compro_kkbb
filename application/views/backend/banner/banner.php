<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Banner</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
					<li class="breadcrumb-item active">Banner</li>
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
					<div class="card-header bg-dark">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="card-title">Data Banner</h3>
							</div>
							<div class="col text-right">
								<a class="btn btn-primary" href="<?= base_url('admin/banner/add'); ?>">
								<i class="nav-icon fas fa-plus"></i> Tambah Banner
								</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<table id="table_banner" class="table table-bordered table-striped table-sm">
							<thead>
								<tr>
									<th class="text-center">No</th>
									<th class="text-center">Judul Banner</th>
									<th class="text-center">Created At</th>
									<th class="text-center">Updated At</th>
									<th class="text-center">Option</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($banner as $list) : ?>
								<tr>
									<td class="text-center"><?= $no++; ?></td>
									<td class="text-center"><?= $list['title']; ?></td>
									<td class="text-center"><?= $list['created_at']; ?></td>
									<td class="text-center"><?= $list['updated_at']; ?></td>
									<td class="text-center">
									<div class="btn-group" role="group" aria-label="aksi_banner">
										<a class="btn btn-sm btn-warning" href="<?= base_url('admin/banner/edit/' . $list['id']) ?>">
											Edit
										</a>
										<a 
											data-id_banner="<?= $list['id'] ?>" 
											data-judul_banner="<?= $list['title'] ?>" 
											class="btn btn-sm btn-danger delete_data">
											Delete
										</a>
									</div>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Delete Modal -->
<div class="modal fade" id="deleteBanner" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="deleteBannerLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 id="deleteBannerLabel">delete Banner</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="submitDeleteBanner" method="POST" action="">
        <div class="modal-body">
          <div class="row text-center">
            <div class="col">
              <h4>Apakah anda yakin ingin menghapus Banner </h4>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 mx-auto">
              <div class="form-group">
                <input type="hidden" name="id_banner" id="id_banner" class="id_banner form-control">
              </div>
              <div class="form-group">
                <table>
                  <tr>
                    <th>Nama Banner</th>
                    <td class="judul_banner" id="judul_banner"></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col text-center">
              <input type="submit" class="btn btn-lg btn-primary rounded-0" value="YA">
              <button type="button" class="btn btn-lg btn-danger rounded-0" data-dismiss="modal">TIDAK</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    // Modal Delete Data
    $('.delete_data').click(function() {
      const id_banner = $(this).data('id_banner');
      const judul_banner = $(this).data('judul_banner');
      $('.id_banner').val(id_banner);
      $('.judul_banner').text(judul_banner);
      $('#deleteBanner').modal('show');
    });
    // Delete Cancel Request
    $('#submitDeleteBanner').on('submit', function(event) {
      event.preventDefault();
      const id = document.getElementById("id_banner").value;
      $.ajax({
        type: 'POST',
        url: '<?= base_url('admin/banner/delete/') ?>' + id,
        data: {
          id: id,
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
              window.location.href = "<?= base_url('admin/banner') ?>";
            }
          });
        },
        error: function(xhr, ajaxOptions, thrownError) {
          function decodeEntities(encodedString) {
            var textArea = document.createElement('textarea');
            textArea.innerHTML = encodedString;
            return textArea.value;
          }
          Swal.fire({
            title: "Failure",
            text: decodeEntities(xhr.responseText),
            type: "error",
            icon: "error",
            showConfirmButton: true,
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = "<?= base_url('admin/banner') ?>";
            }
          });
        }
      });
    });
  });
</script>