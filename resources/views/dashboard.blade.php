@extends('layouts.layouts')
@section('content')
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-image" style="background-image: url('{{asset('media/various/bg_dashboard.jpg')}});">
            <div class="bg-white-90">
                <div class="content content-full">
                    <div class="row">
                        <div class="col-md-6 d-md-flex align-items-md-center">
                            <div class="py-4 py-md-0 text-center text-md-left invisible" data-toggle="appear">
                                <h1 class="font-size-h2 mb-2">A F W</h1>
                                <h2 class="font-size-lg font-w400 text-muted mb-0">Today is a great one!</h2>
                            </div>
                        </div>
                        <div class="col-md-6 d-md-flex align-items-md-center">
                            <div class="row w-100 text-center">
                                <div class="col-6 col-xl-4 offset-xl-4 invisible" data-toggle="appear" data-timeout="300">
                                    <p class="font-size-h3 font-w600 text-body-color-dark mb-0">
                                        67
                                    </p>
                                    <p class="font-size-sm font-w700 text-uppercase mb-0">
                                        <i class="far fa-chart-bar text-muted mr-1"></i> Users
                                    </p>
                                </div>
                                <div class="col-6 col-xl-4 invisible" data-toggle="appear" data-timeout="600">
                                    <p class="font-size-h3 font-w600 text-body-color-dark mb-0">
                                        $980
                                    </p>
                                    <p class="font-size-sm font-w700 text-uppercase mb-0">
                                        <i class="far fa-chart-bar text-muted mr-1"></i> Subscription
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Quick Stats -->
            <!-- jQuery Sparkline (.js-sparkline class is initialized in Helpers.sparkline() -->
            <!-- For more info and examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
            <div class="row">
                <div class="content">

                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="h3 font-w400 mb-0">Quick Statistics</h2>
                        <div class="dropdown">
                            <button type="button" class="btn btn-sm btn-light px-3" id="dropdown-analytics-quick-stats" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Last 30 days <i class="fa fa-fw fa-angle-down"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right font-size-sm" aria-labelledby="dropdown-analytics-quick-stats" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(135px, 31px, 0px);">
                                <a class="dropdown-item" href="javascript:void(0)">This Week</a>
                                <a class="dropdown-item" href="javascript:void(0)">Previous Week</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">This Month</a>
                                <a class="dropdown-item" href="javascript:void(0)">Previous Month</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- END Quick Stats -->
            <div class="row row-deck">
                <div class="col-sm-6 col-xl-3 js-appear-enabled animated fadeIn" data-toggle="appear">
                    <a class="block block-rounded block-fx-pop" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <div class="font-size-lg font-w700 mb-3">Total Users</div>
                            <div class="text-black font-size-h1 font-w700">1,500</div>
                            <div class="font-size-h4 font-w700 text-success">
                                <i class="fa fa-caret-up mr-1"></i>
                                25.6%
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3 js-appear-enabled animated fadeIn" data-toggle="appear" data-timeout="150">
                    <a class="block block-rounded block-fx-pop" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <div class="font-size-lg font-w700 mb-3">Android Users</div>
                            <div class="text-black font-size-h1 font-w700">910</div>
                            <div class="font-size-h4 font-w700 text-success">
                                <i class="fa fa-caret-up mr-1"></i>
                                18.6%
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3 js-appear-enabled animated fadeIn" data-toggle="appear" data-timeout="300">
                    <a class="block block-rounded block-fx-pop" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <div class="font-size-lg font-w700 mb-3">iOS Users</div>
                            <div class="text-black font-size-h1 font-w700">57.5k</div>
                            <div class="font-size-h4 font-w700 text-success">
                                <i class="fa fa-caret-up mr-1"></i>
                                14.9%
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3 js-appear-enabled animated fadeIn" data-toggle="appear" data-timeout="450">
                    <a class="block block-rounded block-fx-pop" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <div class="font-size-lg font-w700 mb-3">Others</div>
                            <div class="text-black font-size-h1 font-w700">75</div>
                            <div class="font-size-h4 font-w700 text-danger">
                                <i class="fa fa-caret-down mr-1"></i>
                                1.7%
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- END Main Chart -->

            <!-- Users and Purchases -->
            <div class="row row-deck">
                <div class="col-xl-7 js-appear-enabled animated fadeIn" data-toggle="appear">
                    <!-- Users -->
                    <div class="block block-rounded block-mode-loading-refresh">
                        <div class="block-content">
                            <div class="block block-rounded block-mode-loading-refresh js-appear-enabled animated fadeIn" data-toggle="appear">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Sign Up Activities</h3>
                                    <div class="block-options">
                                        <div class="btn-group btn-group-sm btn-group-toggle mr-2" data-toggle="buttons" role="group" aria-label="Earnings Select Date Group">
                                            <label class="btn btn-light" data-toggle="dashboard-chart-set-week">
                                                <input type="radio" name="dashboard-chart-options" id="dashboard-chart-options-week"> Week
                                            </label>
                                            <label class="btn btn-light" data-toggle="dashboard-chart-set-month">
                                                <input type="radio" name="dashboard-chart-options" id="dashboard-chart-options-month"> Month
                                            </label>
                                            <label class="btn btn-light active" data-toggle="dashboard-chart-set-year">
                                                <input type="radio" name="dashboard-chart-options" id="dashboard-chart-options-year" checked=""> Year
                                            </label>
                                        </div>
                                        <button type="button" class="btn-block-option align-middle" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content block-content-full overflow-hidden">
                                    <div class="pull-x pull-b"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                            <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">

                                                </div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                <div style="position:absolute;width:200%;height:200%;left:0; top:0">

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Chart.js Dashboard Earnings Container -->
                                        <canvas class="js-chartjs-dashboard-earnings chartjs-render-monitor" style="height: 340px; display: block; width: 629px;" width="629" height="340"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Users -->
                </div>
                <div class="col-xl-5 js-appear-enabled animated fadeIn" data-toggle="appear" data-timeout="200">
                    <!-- Purchases -->
                    <div class="block block-rounded block-mode-loading-refresh">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Top Subscription 2019</h3>

                        </div>
                        <div class="block-content">
                            <div class="block-content">
                                <label>iOS</label>
                                <div class="progress push">
                                    <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                        <span class="font-size-sm font-w600">30%</span>
                                    </div>
                                </div>
                                <label>Android</label>
                                <div class="progress push">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <span class="font-size-sm font-w600">50%</span>
                                    </div>
                                </div>
                                <label>Web</label>
                                <div class="progress push">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                        <span class="font-size-sm font-w600">70%</span>
                                    </div>
                                </div>
                                <label>Other Sources</label>

                                <div class="progress push">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        <span class="font-size-sm font-w600">90%</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- END Purchases -->
                </div>
            </div>
            <!-- END Users and Purchases -->
            <div class="row row-deck">
                <div class="col-xl-7 js-appear-enabled animated fadeIn" data-toggle="appear">
                    <!-- Users -->

                    <div class="block block-rounded block-mode-loading-refresh">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">App Users</h3>

                        </div>
                        <div class="block-content">
                            <div class="block-content">
                                <label>iOS</label>
                                <div class="progress push">
                                    <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                        <span class="font-size-sm font-w600">30%</span>
                                    </div>
                                </div>
                                <label>Android</label>
                                <div class="progress push">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <span class="font-size-sm font-w600">50%</span>
                                    </div>
                                </div>
                                <label>Web</label>
                                <div class="progress push">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                        <span class="font-size-sm font-w600">70%</span>
                                    </div>
                                </div>
                                <label>Other Sources</label>
                                <div class="progress push">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        <span class="font-size-sm font-w600">90%</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- END Users -->
                </div>
                <div class="col-xl-5 js-appear-enabled animated fadeIn" data-toggle="appear" data-timeout="200">
                    <!-- Purchases -->
                    <div class="block block-rounded block-mode-loading-refresh">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Device Usage</h3>

                        </div>
                        <div class="block-content">
                            <div class="block-content block-content-full text-center">
                                <div class="py-3"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                    <!-- Donut Chart Container -->
                                    <canvas class="js-chartjs-donut chartjs-render-monitor" width="448" height="224" style="display: block; width: 448px; height: 224px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Purchases -->
                </div>
            </div>
            <div class="row">
                <div class="content content-full">

                    <div class="d-flex justify-content-between align-items-center pb-3">
                        <h2 class="h3 font-w400 mb-0">Number Of Download</h2>
                        <div class="dropdown">
                            <button type="button" class="btn btn-sm btn-light px-3" id="dropdown-analytics-quick-stats" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Last 30 days <i class="fa fa-fw fa-angle-down"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right font-size-sm" aria-labelledby="dropdown-analytics-quick-stats" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(135px, 31px, 0px);">
                                <a class="dropdown-item" href="javascript:void(0)">This Week</a>
                                <a class="dropdown-item" href="javascript:void(0)">Previous Week</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">This Month</a>
                                <a class="dropdown-item" href="javascript:void(0)">Previous Month</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- END Quick Stats -->
            <div class="row row-deck">
                <div class="col-sm-2 col-xl-2  js-appear-enabled animated fadeIn" data-toggle="appear">
                    <a class="block block-rounded block-fx-pop bg-gd-grey" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <div class="font-size-lg font-w700 mb-3">Direct from Apple Store </div>
                            <div class="text-black font-size-h1 font-w700">1,500</div>
                            <div class="font-size-h4 font-w700 text-success">
                                <i class="fa fa-caret-up mr-1"></i>
                                25.6%
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-2 col-xl-2 js-appear-enabled animated fadeIn" data-toggle="appear" data-timeout="150">
                    <a class="block block-rounded block-fx-pop bg-gd-grey" href="javascript:void(0)">
                        <div class="block-content block-content-full ">
                            <div class="font-size-lg font-w700 mb-3">Direct from Google Store </div>
                            <div class="text-black font-size-h1 font-w700">910</div>
                            <div class="font-size-h4 font-w700 text-success">
                                <i class="fa fa-caret-up mr-1"></i>
                                18.6%
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-2 col-xl-2 js-appear-enabled animated fadeIn" data-toggle="appear" data-timeout="300">
                    <a class="block block-rounded block-fx-pop bg-gd-grey" href="javascript:void(0)">
                        <div class="block-content block-content-full ">
                            <div class="font-size-lg font-w700 mb-3">ABA Store</div>
                            <div class="text-black font-size-h1 font-w700">57.5k</div>
                            <div class="font-size-h4 font-w700 text-success">
                                <i class="fa fa-caret-up mr-1"></i>
                                14.9%
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-2 col-xl-2 js-appear-enabled animated fadeIn" data-toggle="appear" data-timeout="450">
                    <a class="block block-rounded block-fx-pop bg-gd-grey" href="javascript:void(0)">
                        <div class="block-content block-content-full ">
                            <div class="font-size-lg font-w700 mb-3">Other Client Stores</div>
                            <div class="text-black font-size-h1 font-w700">75</div>
                            <div class="font-size-h4 font-w700 text-danger">
                                <i class="fa fa-caret-down mr-1"></i>
                                1.7%
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-2 col-xl-2 js-appear-enabled animated fadeIn" data-toggle="appear" data-timeout="300">
                    <a class="block block-rounded block-fx-pop bg-gd-grey" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <div class="font-size-lg font-w700 mb-3">Direct from Apple VPP</div>
                            <div class="text-black font-size-h1 font-w700">57.5k</div>
                            <div class="font-size-h4 font-w700 text-success">
                                <i class="fa fa-caret-up mr-1"></i>
                                14.9%
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-2 col-xl-2 js-appear-enabled animated fadeIn" data-toggle="appear" data-timeout="450">
                    <a class="block block-rounded block-fx-pop" href="javascript:void(0)">
                        <div class="block-content block-content-full bg-gd-grey">
                            <div class="font-size-lg font-w700 mb-3">Direct from Google Play VPP</div>
                            <div class="text-black font-size-h1 font-w700">75</div>
                            <div class="font-size-h4 font-w700 text-danger">
                                <i class="fa fa-caret-down mr-1"></i>
                                1.7%
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="content content-full">

                    <div class="d-flex justify-content-between align-items-center pb-3">
                        <h2 class="h3 font-w400 mb-0">Payments Earned</h2>
                        <div class="dropdown">
                            <button type="button" class="btn btn-sm btn-light px-3" id="dropdown-analytics-quick-stats" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Last 30 days <i class="fa fa-fw fa-angle-down"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right font-size-sm" aria-labelledby="dropdown-analytics-quick-stats" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(135px, 31px, 0px);">
                                <a class="dropdown-item" href="javascript:void(0)">This Week</a>
                                <a class="dropdown-item" href="javascript:void(0)">Previous Week</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">This Month</a>
                                <a class="dropdown-item" href="javascript:void(0)">Previous Month</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row row-deck">
                <div class="col-sm-6 col-xl-3 js-appear-enabled animated fadeIn" data-toggle="appear">
                    <a class="block block-rounded block-fx-pop text-center" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <div class="item item-circle bg-primary-lighter mx-auto my-3">
                                <i class="fab fa-apple text-primary"></i>
                            </div>
                            <div class="text-black display-4 font-w700">35.8k</div>
                            <div class="text-muted mt-1">Apple</div>
                            <div class="py-3 font-size-h4 font-w700 text-success">
                                <i class="fa fa-caret-up mr-1"></i>
                                15.7%
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3 js-appear-enabled animated fadeIn" data-toggle="appear" data-timeout="150">
                    <a class="block block-rounded block-fx-pop text-center" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <div class="item item-circle bg-xinspire-lighter mx-auto my-3">
                                <i class="fab fa-google-play text-xinspire-dark"></i>
                            </div>
                            <div class="text-black display-4 font-w700">98.5k</div>
                            <div class="text-muted mt-1">Google</div>
                            <div class="py-3 font-size-h4 font-w700 text-danger">
                                <i class="fa fa-caret-down mr-1"></i>
                                2.4%
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3 js-appear-enabled animated fadeIn" data-toggle="appear" data-timeout="300">
                    <a class="block block-rounded block-fx-pop text-center" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <div class="item item-circle bg-xsmooth-lighter mx-auto my-3">
                                <i class="fab fa-app-store-ios text-xsmooth"></i>
                            </div>
                            <div class="text-black display-4 font-w700">25</div>
                            <div class="text-muted mt-1">Direct from Apple VPP</div>
                            <div class="py-3 font-size-h4 font-w700 text-success">
                                <i class="fa fa-caret-up mr-1"></i>
                                52.5%
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3 js-appear-enabled animated fadeIn" data-toggle="appear" data-timeout="450">
                    <a class="block block-rounded block-fx-pop text-center" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <div class="item item-circle bg-xsmooth-lighter mx-auto my-3">
                                <i class="fab fa-google-plus-g text-xsmoothr"></i>
                            </div>
                            <div class="text-black display-4 font-w700">12.5%</div>
                            <div class="text-muted mt-1">Direct from Google Play VPP</div>
                            <div class="py-3 font-size-h4 font-w700 text-danger">
                                <i class="fa fa-caret-down mr-1"></i>
                                5.7%
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row js-appear-enabled animated fadeIn" data-toggle="appear">
                <div class="col-md-6 col-xl-3">
                    <div class="block">
                        <div class="block-content block-content-full">
                            <p class="text-uppercase font-w600 text-center mt-2 mb-4">
                                Retention <br>Rate
                            </p>
                            <a class="block block-rounded block-link-rotate bg-body-dark mb-2" href="javascript:void(0)">
                                <div class="block-content block-content-sm block-content-full d-flex align-items-center justify-content-between">
                                    <div class="mr-3">
                                        <p class="font-size-h3 font-w300 mb-0">
                                            480
                                        </p>
                                        <p class="text-muted font-italic mb-0">
                                            Retention
                                        </p>
                                    </div>
                                    <div class="item">
                                        <i class="fab fa-2x si si-check text-muted"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="block">
                        <div class="block-content block-content-full">
                            <p class="text-uppercase font-w600 text-center mt-2 mb-4">
                                NO. OF DAYS/TIMES THE APP CRASHES
                            </p>
                            <a class="block block-rounded block-link-rotate bg-body-dark mb-2" href="javascript:void(0)">
                                <div class="block-content block-content-sm block-content-full d-flex align-items-center justify-content-between">
                                    <div class="mr-3">
                                        <p class="font-size-h3 font-w300 mb-0">
                                            936
                                        </p>
                                        <p class="text-muted font-italic mb-0">
                                            Crashes
                                        </p>
                                    </div>
                                    <div class="item">
                                        <i class="fa fa-2x si si-ghost text-muted"></i>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="block">
                        <div class="block-content block-content-full">
                            <p class="text-uppercase font-w600 text-center mt-2 mb-4">
                                RECONCILIATION #'a  FROM APPLE
                            </p>
                            <a class="block block-rounded block-link-rotate bg-body-dark mb-2" href="javascript:void(0)">
                                <div class="block-content block-content-sm block-content-full d-flex align-items-center justify-content-between">
                                    <div class="mr-3">
                                        <p class="font-size-h3 font-w300 mb-0">
                                            260
                                        </p>
                                        <p class="text-muted font-italic mb-0">
                                            Apple
                                        </p>
                                    </div>
                                    <div class="item">
                                        <i class="fa fa-2x si si-drawer text-muted"></i>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="block">
                        <div class="block-content block-content-full">
                            <p class="text-uppercase font-w600 text-center mt-2 mb-4">
                                RECONCILIATION #'a  FROM GOOGLE
                            </p>
                            <a class="block block-rounded block-link-rotate bg-body-dark mb-2" href="javascript:void(0)">
                                <div class="block-content block-content-sm block-content-full d-flex align-items-center justify-content-between">
                                    <div class="mr-3">
                                        <p class="font-size-h3 font-w300 mb-0">
                                            260
                                        </p>
                                        <p class="text-muted font-italic mb-0">
                                            Google
                                        </p>
                                    </div>
                                    <div class="item">
                                        <i class="fa fa-2x si si-social-google text-muted"></i>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-deck">
                <div class="col-xl-6 invisible" data-toggle="appear">
                    <!-- Users -->
                    <div class="block block-rounded block-mode-loading-refresh">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Active Users In Last 30 Days</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option">
                                    <i class="si si-cloud-download"></i>
                                </button>
                                <div class="dropdown">
                                    <button type="button" class="btn-block-option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="si si-wrench"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="far fa-fw fa-user mr-1"></i> New Users
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="far fa-fw fa-bookmark mr-1"></i> VIP Users
                                        </a>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-pencil-alt"></i> Manage
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-dark">
                            <form action="be_pages_dashboard.html" method="post" onsubmit="return false;">
                                <input type="text" class="form-control form-control-alt" placeholder="Search Users..">
                            </form>
                        </div>
                        <div class="block-content">
                            <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm">
                                <thead>
                                <tr class="text-uppercase">
                                    <th class="font-w700 text-center" style="width: 120px;">Avatar</th>
                                    <th class="font-w700">Name</th>
                                    <th class="d-none d-sm-table-cell font-w700">Access</th>
                                    <th class="font-w700 text-center" style="width: 60px;"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center">
                                        <img class="img-avatar img-avatar32 img-avatar-thumb" src="assets/media/avatars/avatar4.jpg" alt="">
                                    </td>
                                    <td>
                                        <div class="font-w600 font-size-base">Amanda Powell</div>
                                        <div class="text-muted">carol@example.com</div>
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-base">
                                        <span class="badge badge-dark">VIP</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit User">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <img class="img-avatar img-avatar32 img-avatar-thumb" src="assets/media/avatars/avatar15.jpg" alt="">
                                    </td>
                                    <td>
                                        <div class="font-w600 font-size-base">Albert Ray</div>
                                        <div class="text-muted">smith@example.com</div>
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-base">
                                        <span class="badge badge-secondary">Pro</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit User">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <img class="img-avatar img-avatar32 img-avatar-thumb" src="assets/media/avatars/avatar16.jpg" alt="">
                                    </td>
                                    <td>
                                        <div class="font-w600 font-size-base">Jeffrey Shaw</div>
                                        <div class="text-muted">john@example.com</div>
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-base">
                                        <span class="badge badge-dark">VIP</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit User">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <img class="img-avatar img-avatar32 img-avatar-thumb" src="assets/media/avatars/avatar3.jpg" alt="">
                                    </td>
                                    <td>
                                        <div class="font-w600 font-size-base">Marie Duncan</div>
                                        <div class="text-muted">lori@example.com</div>
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-base">
                                        <span class="badge badge-secondary">Pro</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit User">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <img class="img-avatar img-avatar32 img-avatar-thumb" src="assets/media/avatars/avatar13.jpg" alt="">
                                    </td>
                                    <td>
                                        <div class="font-w600 font-size-base">Scott Young</div>
                                        <div class="text-muted">jack@example.com</div>
                                    </td>
                                    <td class="d-none d-sm-table-cell font-size-base">
                                        <span class="badge badge-success">Free</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit User">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Users -->
                </div>
                <div class="col-xl-6 invisible" data-toggle="appear" data-timeout="200">
                    <!-- Purchases -->
                    <div class="block block-rounded block-mode-loading-refresh">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Dates of Fixes and Upgrades</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option">
                                    <i class="si si-cloud-download"></i>
                                </button>
                                <div class="dropdown">
                                    <button type="button" class="btn-block-option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="si si-wrench"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-sync fa-spin text-warning mr-1"></i> Pending
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="far fa-fw fa-times-circle text-danger mr-1"></i> Cancelled
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="far fa-fw fa-check-circle text-success mr-1"></i> Cancelled
                                        </a>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-eye mr-1"></i> View All
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-dark">
                            <form action="be_pages_dashboard.html" method="post" onsubmit="return false;">
                                <input type="text" class="form-control form-control-alt" placeholder="Search Purchases..">
                            </form>
                        </div>
                        <div class="block-content">
                            <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm">
                                <thead>
                                <tr class="text-uppercase">
                                    <th class="font-w700">Issue</th>
                                    <th class="d-none d-sm-table-cell font-w700">Date</th>
                                    <th class="font-w700">State</th>
                                    <th class="font-w700 text-center" style="width: 60px;"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <span class="font-w600">Login</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="font-size-sm text-muted">today</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-warning">Pending..</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">Button not Working</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="font-size-sm text-muted">today</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-warning">Pending..</span>
                                    </td>

                                    <td class="text-center">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">App Drawer collaps issue</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="font-size-sm text-muted">today</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-warning">Pending..</span>
                                    </td>

                                    <td class="text-center">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">Submit Button not working</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="font-size-sm text-muted">today</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-danger">Cancelled</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">It takes forever to load images</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="font-size-sm text-muted">yesterday</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-success">Completed</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">iPhone sign in issue</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="font-size-sm text-muted">yesterday</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-success">Completed</span>
                                    </td>

                                    <td class="text-center">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">Alerts not showing</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="font-size-sm text-muted">yesterday</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-success">Completed</span>
                                    </td>

                                    <td class="text-center">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="font-w600">Excel upload issue</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="font-size-sm text-muted">yesterday</span>
                                    </td>
                                    <td>
                                        <span class="font-w600 text-success">Completed</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!-- END Purchases -->
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    @include('layouts.footer')
    @include('layouts.foot')
@endsection