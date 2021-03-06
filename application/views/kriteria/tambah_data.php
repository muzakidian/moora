<body class="sidebar-dark">
    <div class="main-wrapper">

        <div class="page-wrapper">

            <div class="page-content">
                
                <form method="post" action="<?php echo base_url('kriteria/proses_tambah_data') ?>">
                    <div class="form-group row">
                        <label for="nama_kriteria" class="col-sm-2 col-form-label">Nama Kriteria</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="nama_kriteria" placeholder="Masukkan Kriteria...">
                            <?php echo form_error('nama_kriteria', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="type" class="col-sm-2 col-form-label">Type</label>
                        <div class="col-sm-5">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="type">
                                <option value="" selected hidden>Pilih Tipe</option>
                                <option value="cost">Cost</option>
                                <option value="benefit">Benefit</option>
                            </select>
                            <?php echo form_error('type', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bobot" class="col-sm-2 col-form-label">Bobot</label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control" name="bobot" placeholder="Masukkan Bobot...">
                            <?php echo form_error('bobot', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tambah" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-5">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>