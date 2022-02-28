<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Banner</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('admin/products') ?>">Banner</a></li>
          <li class="breadcrumb-item active">Add</li>
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
            <h3 class="card-title">Tambah Banners</h3>
          </div>
          <form action="<?= base_url('banner/addbanner') ?>" id="banner_form" method="POST" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                <label>Judul Banner <span style="color: red;">*</span></label>
                <input type="text" name="judul_banner" id="judul_banner" class="form-control" placeholder="Masukkan Judul Banner" required>
              </div>
              <?php if ($_SESSION['admin']->nama_role == "superadmin") { ?>
                <div class="form-group">
                    <label>Settings Untuk Area</label>
                    <select class="form-control id_area" id="id_area" name="id_area">
                        <?php foreach ($allArea as $a){ ?>
                            <option value="<?=$a->id?>"><?=$a->nama_area?></option>
                        <?php } ?>
                    </select>
                </div>
                <?php } else { ?>
                  <div class="form-group">
                    <input type="hidden" name="id_area" id="id_area" value="<?= $_SESSION['admin']->id_area ?>" class="form-control" >
                  </div>
                <?php } ?>

              <div class="form-group">
                <label>Gambar Banner <span style="color: red;">*</span></label>
                <input type="file" name="file_banner" id="file_banner" class="form-control" required> 
              </div>
            </div>
            <!-- /.card-body -->
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
    $('#banner_form').validate({
      rules: {
        judul_banner: {
          required: true,
        },
        file_banner: {
          required: true,
        }
      },
      messages: {
        judul_banner: {
          required: "Kode produk harus diisi",
        },
        file_banner: {
          required: "Gambar produk harus diisi",
        }
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