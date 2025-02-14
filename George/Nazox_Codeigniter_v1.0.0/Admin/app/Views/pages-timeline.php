<?= $this->include('partials/main') ?>

    <head>
        
    <?= $title_meta ?>
    <?= $this->include('partials/head-css') ?>
    </head>

    <?= $this->include('partials/body') ?>
        <!-- Begin page -->
        <div id="layout-wrapper">

        <?= $this->include('partials/menu') ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <?= $page_title ?>
                        <!-- end page title -->

                        <div class="row justify-content-center">
                            <div class="col-xl-10">
                                <div class="timeline">
                                    <div class="timeline-item timeline-left">
                                        <div class="timeline-block">
                                            <div class="time-show-btn mt-0">
                                                <a href="#" class="btn btn-danger btn-rounded w-lg">2020</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="timeline-item">
                                        <div class="timeline-block">
                                            <div class="timeline-box card">
                                                <div class="card-body">
                                                    <span class="timeline-icon"></span>
                                                    <div class="timeline-date">
                                                        <i class="mdi mdi-circle-medium circle-dot"></i> 28 April
                                                    </div>
                                                    <h5 class="mt-3 foont-size-15"> Timeline event One</h5>
                                                    <div class="text-muted">
                                                        <p class="mb-0">It will be as simple as occidental in fact. To an english person, it will seem like simplified English, as a skeptical friend</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-item timeline-left">
                                        <div class="timeline-block">
                                            <div class="timeline-box card">
                                                <div class="card-body">
                                                    <span class="timeline-icon"></span>
                                                    <div class="timeline-date">
                                                        <i class="mdi mdi-circle-medium circle-dot"></i> 21 April
                                                    </div>
                                                    <h5 class="mt-3 foont-size-15"> Timeline event Two</h5>
                                                    <div class="text-muted">
                                                        <p class="mb-0">To achieve this, it would be necessary to have more common words.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="timeline-item">
                                        <div class="timeline-block">
                                            <div class="timeline-box card">
                                                <div class="card-body">
                                                    <span class="timeline-icon"></span>
                                                    <div class="timeline-date">
                                                        <i class="mdi mdi-circle-medium circle-dot"></i> 15 April
                                                    </div>
                                                    <h5 class="mt-3 foont-size-15"> Timeline event Three</h5>
                                                    <div class="text-muted">
                                                        <p>The new common language will be more simple and regular than the existing European languages be as simple as occidental</p>
                                                        
                                                    </div>
                                                    <div class="timeline-album">
                                                        <a href="#" class="me-1">
                                                            <img src="assets/images/small/img-2.jpg" alt="small img-2">
                                                        </a>
                                                        <a href="#" class="me-1">
                                                            <img src="assets/images/small/img-3.jpg" alt="small img-3">
                                                        </a>
                                                        <a href="#" class="me-1">
                                                            <img src="assets/images/small/img-4.jpg" alt="small img-4">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-item timeline-left">
                                        <div class="timeline-block">
                                            <div class="timeline-box card">
                                                <div class="card-body">
                                                    <span class="timeline-icon"></span>
                                                    <div class="timeline-date">
                                                        <i class="mdi mdi-circle-medium circle-dot"></i> 09 April
                                                    </div>
                                                    <h5 class="mt-3 foont-size-15"> Timeline event Four</h5>
                                                    <div class="text-muted">
                                                        <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, ab illo inventore veritatis et</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  

                                    <div class="timeline-item">
                                        <div class="timeline-block">
                                            <div class="timeline-box card">
                                                <div class="card-body">
                                                    <span class="timeline-icon"></span>
                                                    <div class="timeline-date">
                                                        <i class="mdi mdi-circle-medium circle-dot"></i> 02 April
                                                    </div>
                                                    <h5 class="mt-3 foont-size-15"> Timeline event Five</h5>
                                                    <div class="text-muted">
                                                        <p class="mb-0">Itaque earum rerum hic tenetur a sapiente delectus, ut aut doloribus asperiores.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <?= $this->include('partials/footer') ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <?= $this->include('partials/right-sidebar') ?>
        <!-- /Right-bar -->

        <?= $this->include('partials/vendor-scripts') ?>
        
        <script src="assets/js/app.js"></script>

    </body>
</html>
