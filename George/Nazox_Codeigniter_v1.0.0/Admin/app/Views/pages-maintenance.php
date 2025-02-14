<?= $this->include('partials/main') ?>

    <head>
        
    <?= $title_meta ?>
    <?= $this->include('partials/head-css') ?>
    </head>

    <?= $this->include('partials/body') ?>
        <div class="home-btn d-none d-sm-block">
            <a href="index.php" class="text-dark"><i class="mdi mdi-home-variant h2"></i></a>
        </div>

        <div class="my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="text-center">
                            <div class="mb-5">
                                <a href="index.php">
                                    <img src="assets/images/logo-dark.png" alt="logo" height="20" />
                                </a>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-sm-4">
                                    <div class="maintenance-img">
                                        <img src="assets/images/maintenance-bg.png" alt="maintenance-bg" class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                            </div>
                            <h3 class="mt-5">Site is Under Maintenance</h3>
                            <p>Please check back in sometime.</p>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mt-4 maintenance-box">
                                        <div class="p-3">
                                            <div class="avatar-sm mx-auto">
                                                <span class="avatar-title bg-soft-primary rounded-circle">
                                                    <i class="mdi mdi-access-point-network font-size-24 text-primary"></i>
                                                </span>
                                            </div>
                                            
                                            <h5 class="font-size-15 text-uppercase mt-4">Why is the Site Down?</h5>
                                            <p class="text-muted mb-0">There are many variations of passages of
                                                Lorem Ipsum available, but the majority have suffered alteration.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mt-4 maintenance-box">
                                        <div class="p-3">
                                            <div class="avatar-sm mx-auto">
                                                <span class="avatar-title bg-soft-primary rounded-circle">
                                                    <i class="mdi mdi-clock-outline font-size-24 text-primary"></i>
                                                </span>
                                            </div>
                                            <h5 class="font-size-15 text-uppercase mt-4">
                                                What is the Downtime?</h5>
                                            <p class="text-muted mb-0">Contrary to popular belief, Lorem Ipsum is not
                                                simply random text. It has roots in a piece of classical.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mt-4 maintenance-box">
                                        <div class="p-3">
                                            <div class="avatar-sm mx-auto">
                                                <span class="avatar-title bg-soft-primary rounded-circle">
                                                    <i class="mdi mdi-email-outline font-size-24 text-primary"></i>
                                                </span>
                                            </div>
                                            <h5 class="font-size-15 text-uppercase mt-4">
                                                Do you need Support?</h5>
                                            <p class="text-muted mb-0">If you are going to use a passage of Lorem
                                                Ipsum, you need to be sure there isn't anything embar.. <a
                                                        href="mailto:no-reply@domain.com"
                                                        class="text-decoration-underline">no-reply@domain.com</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?= $this->include('partials/vendor-scripts') ?>
        
        <script src="assets/js/app.js"></script>

    </body>
</html>
