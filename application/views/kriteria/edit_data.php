<body class="sidebar-dark">
    <div class="main-wrapper">

        <div class="page-wrapper">

            <div class="page-content">
                <?php echo validation_errors(); ?>
                <form method="post" action="<?php echo base_url('kriteria/proses_edit_data') ?>">
                  
                <input type="hidden" name="tab_kriteria" value="<?php echo $tab_kriteria['id_kriteria'];?>">

                <div class="form-group row">
                        <label for="nama_kriteria" class="col-sm-2 col-form-label">Nama Kriteria</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="nama_kriteria" 
                            required="" value="<?php echo $tab_kriteria['nama_kriteria'];?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="type" class="col-sm-2 col-form-label">Type</label>
                        <div class="col-sm-5">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="type">
                                <option selected>Pilih Tipe</option>
                                <option value="cost">Cost</option>
                                <option value="benefit">Benefit</option>
                                <required="" value="<?php echo $tab_kriteria['type'];?>">
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bobot" class="col-sm-2 col-form-label">Bobot</label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control" name="bobot" 
                            required="" value="<?php echo $tab_kriteria['bobot'];?>">>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tambah" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-5">
                            <button type="submit" class="btn btn-warning">Edit</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>