<body class="sidebar-dark">
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->

        <!-- partial -->

        <div class="page-wrapper">
            <!-- partial:partials/_navbar.html -->

            <!-- partial -->

            <div class="page-content">

                <nav class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Data Table</h6>
                                <a href="<?php echo base_url('welcome/tambah_data') ?>" class="btn btn-primary btn-sm float-right"> Tambah Data</a>
                                <p class="card-description">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p>
                                <div class="table-responsive">
                                    <table id="dataTableExample" class="table">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nama</th>
                                                <th>Tipe</th>
                                                <th>Bobot</th>
                                                <th>Setting</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $id = 1;
                                            foreach ($tab_kriteria as $krit) : ?>
                                                <tr>
                                                    <td><?php echo $id++; ?></td>
                                                    <td><?php echo $krit['nama_kriteria']; ?></td>
                                                    <td><?php echo $krit['type']; ?></td>
                                                    <td><?php echo $krit['bobot']; ?></td>
                                                    <td>
                                                        <a href="#" class="badge badge-primary">Edit</a>
                                                        <a href="<?php echo base_url() ?> Welcome/hapus_data/<?php echo $krit['id_kriteria'] ?>" class="badge badge-primary">Hapus</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>