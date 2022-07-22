<body class="sidebar-dark">
    <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="page-content">
                <?php echo validation_errors(); ?>
            
                <form method="post" action="<?php echo base_url('poin/proses_tambah_data_poin') ?>">
                    <div class="form-group row">
                        <label for="type" class="col-sm-2 col-form-label">Alternatif</label>
                        <div class="col-sm-5">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="id_alternatif">
                                <option value="" selected hidden>Pilih Alternatif</option>
                                <?php foreach ($tab_alternatif as $alt) { ?>
                                    <option value="<?php echo $alt->id_alternatif; ?>"><?php echo $alt->nama_alternatif; ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="type" class="col-sm-2 col-form-label">Kriteria</label>
                        <div class="col-sm-5">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="id_kriteria">
                                <option value="" selected hidden>Pilih Kriteria</option>
                                <?php foreach ($tab_kriteria as $krit) { ?>
                                    <option value="<?php echo $krit->id_kriteria; ?>"><?php echo $krit->nama_kriteria; ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bobot" class="col-sm-2 col-form-label">Poin</label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control" name="poin" placeholder="Masukkan Poin...">
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