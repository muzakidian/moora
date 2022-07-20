<body class="sidebar-dark">
    <div class="main-wrapper">

        <div class="page-wrapper">

            <div class="page-content">
                <form method="post" action="<?php echo base_url('kriteria/proses_edit_dataKriteria') ?>">
                
                <input type="hidden" name="id" value="<?php echo $kriteria['id'];?>"> 

                <div class="form-group row">
                        <label for="nama_kriteria" class="col-sm-2 col-form-label">Nama Kriteria</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="nama_kriteria" placeholder="Masukkan Kriteria..."
                            required="" value="<?php echo $kriteria['nama'];?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="type" class="col-sm-2 col-form-label">Type</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="type" placeholder="Masukkan Tipe..."
                            required="" value="<?php echo $kriteria['type'];?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bobot" class="col-sm-2 col-form-label">Bobot</label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control" name="bobot" placeholder="Masukkan Bobot..."
                            required="" value="<?php echo $kriteria['bobot'];?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tambah" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-5">
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>