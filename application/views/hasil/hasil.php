<body class="sidebar-dark">
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->

        <!-- partial -->

        <div class="page-wrapper">
            <!-- partial:partials/_navbar.html -->

            <!-- partial -->


            <div class="page-content">

                <nav class="page-breadcrumb ">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Special pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Faq</li>
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body bg-primary">
                                <h6 class="card-title">Frequently Asked Questions</h6>
                                <div id="accordion" class="accordion" role="tablist">
                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingOne">
                                            <h6 class="mb-0">
                                                <p data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <?php
                                                    foreach ($query as $poin) : ?>
                                                        <tr>
                                                            <td><?php echo $poin ?></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                    
                                                    </p>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>