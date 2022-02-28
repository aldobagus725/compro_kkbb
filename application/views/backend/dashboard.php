<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item acrive"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="card shadow-lg">
                                    <div class="card-body bg-blue">
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <h5 class="card-title">Jumlah Pendaftar Ibadah Jam 7</h5>
                                            </div>
                                            <div class="col">
                                                <p class="card-text">10</p>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <h5 class="card-title">Jumlah Kursi Tersedia</h5>
                                            </div>
                                            <div class="col">
                                                <p class="card-text">10</p>
                                            </div>
                                        </div>
                                        <br>
                                        <a href="<?= base_url('admin/orders') ?>" >More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body bg-blue">
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <h5 class="card-title">Jumlah Pendaftar Ibadah Jam 10</h5>
                                            </div>
                                            <div class="col">
                                                <p class="card-text">10</p>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <h5 class="card-title">Jumlah Kursi Tersedia</h5>
                                            </div>
                                            <div class="col">
                                                <p class="card-text">10</p>
                                            </div>
                                        </div>
                                        <br>
                                        <a href="<?= base_url('admin/orders') ?>" >More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body bg-green">
                                        <h5 class="card-title">Jumlah Daftar Form Katekisasi Reguler</h5>
                                        <p class="card-text">10</p>
                                        <br>
                                        <a href="<?= base_url('admin/orders') ?>" >More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body bg-green">
                                        <h5 class="card-title">Jumlah Daftar Form Katekisasi Khusus</h5>
                                        <p class="card-text">10</p>
                                        <br>
                                        <a href="<?= base_url('admin/orders') ?>" >More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body bg-yellow">
                                        <h5 class="card-title">Jumlah Daftar Form Baptisan</h5>
                                        <p class="card-text">10</p>
                                        <br>
                                        <a href="<?= base_url('admin/orders') ?>" >More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body bg-yellow">
                                        <h5 class="card-title">Jumlah Daftar Form Jemaat Baru</h5>
                                        <p class="card-text">10</p>
                                        <br>
                                        <a href="<?= base_url('admin/orders') ?>" >More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body bg-red">
                                        <h5 class="card-title">Jumlah Daftar Form Atestasi</h5>
                                        <p class="card-text">10</p>
                                        <br>
                                        <a href="<?= base_url('admin/orders') ?>" >More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body bg-red">
                                        <h5 class="card-title">Jumlah Daftar Form  Perkawinan</h5>
                                        <p class="card-text">10</p>
                                        <br>
                                        <a href="<?= base_url('admin/orders') ?>" >More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-dark">
                                    <h4>Notifikasi</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Tanggal</th>
                                                    <th>Notif</th>
                                                    <th>Detail</th>
                                                    <th>Link</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                // echo "<pre>";
                                                // var_dump($allNotifications);
                                                // die();
                                                    if (!empty($allNotifications)) {
                                                        foreach ($allNotifications as $n) {
                                                ?>
                                                    <tr>
                                                        <td><?= $n->created_at ?></td>
                                                        <td><?= $n->title ?></td>
                                                        <td><?= $n->body ?></td>
                                                        <td><a target="_blank" href="<?= $n->link; ?>">Go</a></td>
                                                    </tr>
                                                <?php } } else { ?>
                                                    <tr>
                                                        <td colspan="4">Belum ada notifikasi!</td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
            </div>
        </div>
    </div>
</section>