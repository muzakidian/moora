<body class="sidebar-dark">
    <div class="main-wrapper">



        <div class="page-wrapper">


            <div class="page-content">
                <?php echo validation_errors();?>
                <form method="post" action="<?php echo base_url('kriteria/proses_tambah_data_alt') ?>">
                    <div class="form-group row">
                        <label for="nama_alternatif" class="col-sm-2 col-form-label">Nama Alternatif</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="nama_alternatif" placeholder="Masukkan Alternatif...">
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