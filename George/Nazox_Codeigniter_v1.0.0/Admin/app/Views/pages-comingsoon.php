<?= $this->include('partials/main') ?>

    <head>
        
    <?= $title_meta ?>
    <?= $this->include('partials/head-css') ?>
    </head>

    <body class="auth-body-bg">
        <div class="home-btn d-none d-sm-block">
            <a href="index.php"><i class="mdi mdi-home-variant h2 text-white"></i></a>
        </div>
        <div>
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4">
                        <div class="authentication-page-content p-4 d-flex align-items-center min-vh-100">
                            <div class="w-100 py-4">
                                <div class="row justify-content-center">
                                    <div class="col-lg-9">
                                        <div>
                                            <div class="text-center">
                                                <div>
                                                    <a href="index.php" class="logo"><img src="assets/images/logo-dark.png" height="20" alt="logo"></a>
                                                </div>
    
                                                <h4 class="font-size-18 mt-4">Let's get started with Nazox</h4>
                                                <p class="text-muted">It will be as simple as Occidental in fact it will be Occidental.</p>
                                            </div>

                                            <div class="p-2 mt-5">
                                                <div data-countdown="2021/08/04" class="counter-number"></div>
                                            </div>

                                            <div class="input-section mt-5">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="position-relative">
                                                            <input type="email" class="form-control" placeholder="Enter email address...">
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <button type="submit" class="btn btn-primary w-md waves-effect waves-light">Subscribe</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="authentication-bg comingsoon-bg">
                            <div class="bg-overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

        <?= $this->include('partials/vendor-scripts') ?>
        <!-- Plugins js-->
        <script src="assets/libs/jquery-countdown/jquery.countdown.min.js"></script>

        <!-- Countdown js -->
        <script src="assets/js/pages/coming-soon.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
