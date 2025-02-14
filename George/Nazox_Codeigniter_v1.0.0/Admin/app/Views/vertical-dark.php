<?= $this->include('partials/main') ?>

<head>

    <?= $title_meta ?>

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap-dark.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app-dark.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark">



<!-- Begin page -->
<div id="layout-wrapper">

    <?= $this->include('partials/topbar') ?>

    <?= $this->include('partials/sidebar') ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            <div class="header-bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 mb-4 pt-5">
                            <div id="morris-bar-example" class="morris-charts morris-chart-height"></div>

                            <div class="mt-4 text-center">
                                <button type="button" class="btn btn-outline-primary ms-1 waves-effect waves-light">Year
                                    2017</button>
                                <button type="button" class="btn btn-outline-info ms-1 waves-effect waves-light">Year
                                    2018</button>
                                <button type="button" class="btn btn-outline-primary ms-1 waves-effect waves-light">Year
                                    2019</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-info mt-2">15,852</h3> Monthly Statistics
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-purple mt-2">9,514</h3> New Orders
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-primary mt-2">289</h3> New Users
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-danger mt-2">5,220</h3> Unique Visitors
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Monthly Earnings</h4>

                                <div class="row text-center mt-4">
                                    <div class="col-6">
                                        <h5 class="mb-2 font-size-18">56241</h5>
                                        <p class="text-muted text-truncate">Marketplace</p>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="mb-2 font-size-18">23651</h5>
                                        <p class="text-muted text-truncate">Total Income</p>
                                    </div>
                                </div>

                                <div id="morris-donut-example" class="morris-charts morris-chart-height"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Email Sent</h4>

                                <div class="row text-center mt-4">
                                    <div class="col-4">
                                        <h5 class="mb-2 font-size-18">56241</h5>
                                        <p class="text-muted text-truncate">Marketplace</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="mb-2 font-size-18">23651</h5>
                                        <p class="text-muted text-truncate">Total Income</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="mb-2 font-size-18">23651</h5>
                                        <p class="text-muted text-truncate">Total Month</p>
                                    </div>
                                </div>

                                <div id="morris-area-example" class="morris-charts morris-chart-height"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Latest Transactions</h4>

                                <div class="table-responsive">
                                    <table class="table mt-4 mb-0 table-centered table-nowrap">

                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/users/avatar-2.jpg" alt="user-image" class="avatar-sm rounded-circle me-2" /> Herbert C. Patton
                                                </td>
                                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                    Confirm</td>
                                                <td>
                                                    $14,584
                                                    <p class="m-0 text-muted">Amount</p>
                                                </td>
                                                <td>
                                                    5/12/2016
                                                    <p class="m-0 text-muted">Date</p>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="assets/images/users/avatar-3.jpg" alt="user-image" class="avatar-sm rounded-circle me-2" /> Mathias N. Klausen
                                                </td>
                                                <td><i class="mdi mdi-checkbox-blank-circle text-warning"></i>
                                                    Waiting payment</td>
                                                <td>
                                                    $8,541
                                                    <p class="m-0 text-muted">Amount</p>
                                                </td>
                                                <td>
                                                    10/11/2016
                                                    <p class="m-0 text-muted">Date</p>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="assets/images/users/avatar-4.jpg" alt="user-image" class="avatar-sm rounded-circle me-2" /> Nikolaj S.
                                                    Henriksen
                                                </td>
                                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                    Confirm</td>
                                                <td>
                                                    $954
                                                    <p class="m-0 text-muted">Amount</p>
                                                </td>
                                                <td>
                                                    8/11/2016
                                                    <p class="m-0 text-muted">Date</p>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="assets/images/users/avatar-5.jpg" alt="user-image" class="avatar-sm rounded-circle me-2" /> Lasse C. Overgaard
                                                </td>
                                                <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i>
                                                    Payment expired</td>
                                                <td>
                                                    $44,584
                                                    <p class="m-0 text-muted">Amount</p>
                                                </td>
                                                <td>
                                                    7/11/2016
                                                    <p class="m-0 text-muted">Date</p>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="assets/images/users/avatar-6.jpg" alt="user-image" class="avatar-sm rounded-circle me-2" /> Kasper S. Jessen
                                                </td>
                                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                    Confirm</td>
                                                <td>
                                                    $8,844
                                                    <p class="m-0 text-muted">Amount</p>
                                                </td>
                                                <td>
                                                    1/11/2016
                                                    <p class="m-0 text-muted">Date</p>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Recent Activity Feed</h4>

                                <ol class="activity-feed mb-0">
                                    <li class="feed-item">
                                        <span class="date">Sep 25</span>
                                        <span class="activity-text">Responded to need “Volunteer Activities”</span>
                                    </li>

                                    <li class="feed-item">
                                        <span class="date">Sep 24</span>
                                        <span class="activity-text">Added an interest “Volunteer Activities”</span>
                                    </li>
                                    <li class="feed-item">
                                        <span class="date">Sep 23</span>
                                        <span class="activity-text">Joined the group “Boardsmanship Forum”</span>
                                    </li>
                                    <li class="feed-item">
                                        <span class="date">Sep 21</span>
                                        <span class="activity-text">Responded to need “In-Kind Opportunity”</span>
                                    </li>
                                    <li class="feed-item">
                                        <span class="date">Sep 18</span>
                                        <span class="activity-text">Created need “Volunteer Activities”</span>
                                    </li>
                                    <li class="feed-item">
                                        <span class="date">Sep 17</span>
                                        <span class="activity-text">Attending the event “Some New Event”. Responded
                                            to needed.</span>
                                    </li>
                                    <li class="feed-item pb-0">
                                        <span class="activity-text">
                                            <a href="" class="text-primary">More Activities</a>
                                        </span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?= $this->include('partials/footer') ?>

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?= $this->include('partials/right-sidebar') ?>

<?= $this->include('partials/vendor-scripts') ?>

<!--Morris Chart-->
<script src="assets/libs/morris.js/morris.min.js"></script>
<script src="assets/libs/raphael/raphael.min.js"></script>

<script src="assets/js/pages/dashboard.init.js"></script>

<script src="assets/js/app-dark.js"></script>

</body>

</html>