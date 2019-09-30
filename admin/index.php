    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Antrian Section -->
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4 class="font-weight-bold">Antrian</h4>
                        </div>
                        <div class="card-body text-center">
                            <?php if ($DataPasien) : ?>
                                <h1>No <?= $DataPasien[0]->Id ?></h1>
                                <p class="m-0 p-0">Atas Nama</p>
                                <h1><?= $DataPasien[0]->Nama ?></h1>
                                <form action="<?= site_url('home/antrian') ?>" method="POST">
                                    <input type="hidden" name="id" value="<?= $DataPasien[0]->Id  ?>">
                                    <button type="submit" name="status" class="btn btn-info btn-block my-1" value="1"><i class="fas fa-check-circle mr-1"></i>Datang</button>
                                    <button type="submit" name="status" class="btn btn-outline-secondary btn-block my-1" value="2"><i class="fas fa-minus-circle mr-1"></i> Tidak Datang</button>
                                </form>
                            <?php else : ?>
                                <h1>Tidak Ada Antrian</h1>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Antrian End Section -->
            <!-- Main row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="d-lg-inline">Daftar Antrian Pasien</h4>
                            <button type="button" class="btn btn-info float-lg-right" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus mr-1"></i>Tambah Antrian</button>
                        </div>

                        <div class="card-body p-0">
                            <table class="table table-condensed mb-2">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Rekam Medis</th>
                                        <th>Nama Pasien</th>
                                        <th>No Identitas</th>
                                        <th>Keluhan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($DataPasien as $item) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $item->Id ?></td>
                                            <td><?= $item->Nama ?></td>
                                            <td><?= $item->NIK ?></td>
                                            <td><?= $item->Keluhan ?></td>
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

        <!-- Modal -->
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Data Antrian Pasien</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= site_url('antrian/create') ?>" method="POST" class="mx-3 mb-5">
                            <div class="form-group mb-0">
                                <label for="NIK" class="col-form-label">No Identitas</label>
                                <input type="text" id="NIK" name="NIK" class="form-control">
                                <!-- <small class="text-danger">askofhjksahfjkhkj</small> -->
                            </div>
                            <div class="form-group mb-0">
                                <label for="Nama" class="col-form-label">Nama</label>
                                <input type="text" id="Nama" name="Nama" class="form-control">
                            </div>
                            <div class="form-group mb-0">
                                <label for="Keluhan" class="col-form-label">Keluhan</label>
                                <input type="text" id="Keluhan" name="Keluhan" class="form-control">
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-info btn-block">Submit</button>
                                <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- End Modal -->

    </section>
    <!-- /.content -->
    </div>