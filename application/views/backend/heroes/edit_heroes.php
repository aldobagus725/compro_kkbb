<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Heroes</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('admin/heroes') ?>">Heroes</a></li>
          <li class="breadcrumb-item active">Edit Heroes</li>
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
            <h3 class="card-title">Edit Heroes</h3>
          </div>
          <form action="<?= base_url('admin/heroes/update/' . $heroes->id) ?>" id="banner_form" method="POST" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                <label>Judul Heroes <span style="color: red;">*</span></label>
                <input type="text" name="title" id="title" value="<?= $heroes->title ?>" class="form-control" placeholder="Masukkan Judul Heroes" required>
              </div>
              <div class="form-group">
                <label>Gambar Heroes <span style="color: red;">*</span></label>
                <input type="file" name="image" id="image" class="form-control">
              </div>
              <div class="form-group">
                <label>Aktif / Tidak Aktif <span style="color: red;">*</span></label>
                <select name="is_active" id="is_active" class="form-control">
                  <option <?=$heroes->is_active == "0"?"selected":"";?> value="0">Tidak Aktif</option>
                  <option <?=$heroes->is_active == "1"?"selected":"";?> value="1">Aktif</option>
                </select>
              </div>
              <div class="row">
                <div class="col">
                  <i>*current image</i>
                  <br>
                  <div class="text-center">
                    <img style="width:40%;" src="<?= base_url('resource/heroes/' . $heroes->image); ?>">
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button name="save" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  $(document).ready(function() {
    $('#banner_form').validate({
      rules: {
        judul_banner: {
          required: true,
        },
      },
      messages: {
        judul_banner: {
          required: "Kode produk harus diisi",
        },
      },
      errorElement: 'span',
      errorPlacement: function(error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function(element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });


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