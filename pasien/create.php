    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="d-lg-inline">Tambah Data Pasien</h4>
                        </div>

                        <div class="card-body">
                            <form action="<?= site_url('pasien/create') ?>" method="POST" role="form">
                                <div class="form-group row">
                                    <label for="NIK" class="col-sm-2 col-form-label">NIK</label>
                                    <div class="col-10">
                                        <input type="text" name="NIK" id="NIK" class="form-control" value="<?= set_value('NIK') ?>">
                                        <?= form_error('NIK') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-10">
                                        <input type="text" name="Nama" id="Nama" class="form-control" value="<?= set_value('Nama') ?>">
                                        <?= form_error('Nama') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info btn-block">Submit</button>
                                    <a href="<?= site_url('pasien') ?>" class="btn btn-default btn-block">Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->
    </div>