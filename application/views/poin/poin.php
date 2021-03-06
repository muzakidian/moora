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
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>welcome/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Poin</li>
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Data Poin</h6>
                                <a href="<?php echo base_url('poin/tambah_data_poin') ?>" class="btn btn-primary btn-sm float-right"> Tambah Data</a>
                                <p class="card-description">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p>
                                <div class="table-responsive">
                                    <table id="dataTableExample" class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Alternatif</th>
                                                <th>Kriteria</th>
                                                <th>Poin</th>
                                                <th>Setting</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $id = 1;
                                            foreach ($tab_poin as $poin) : ?>
                                                <tr>
                                                    <td><?php echo $id++; ?></td>
                                                    <td><?php echo $poin->nama_alternatif ?></td>
                                                    <td><?php echo $poin->nama_kriteria ?></td>
                                                    <td><?php echo $poin->poin ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url() ?>poin/edit_data_poin/<?php echo $poin->id_point ?>" class="badge badge-primary"> <i data-feather="edit"></i> Edit</a> &nbsp;&nbsp;&nbsp;
                                                        <a href="<?php echo base_url() ?>poin/hapus_data_poin/<?php echo $poin->id_point ?>" class="badge badge-danger"> <i data-feather="delete"></i> Hapus</a>
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