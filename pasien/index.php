    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="d-lg-inline">Data Pasien</h4>
                            <a href="<?= site_url('pasien/create') ?>" class="btn btn-info float-lg-right"><i class="fas fa-plus mr-1"></i>Tambah</a>
                        </div>

                        <div class="card-body p-0">
                            <table class="table table-striped mb-2">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Rekam Medis</th>
                                        <th>Nama Pasien</th>
                                        <th style="width: 250px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($Pasien as $item) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $item->Nama ?></td>
                                            <td><?= $item->NIK ?></td>
                                            <td>
                                                <a href="<?= site_url('medis/riwayat/' . $item->Id) ?>" class="btn btn-info btn-sm m-1">Rekam Medis</a>
                                                <a href="<?= site_url('pasien/edit/' . $item->Id) ?>" class="btn btn-warning btn-sm m-1">Edit</a>
                                                <a href="<?= site_url('pasien/delete/' . $item->Id) ?>" class="btn btn-danger btn-sm m-1" onclick="return confirm('Anda yakin ingin menghapus data?')">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->
    </div>