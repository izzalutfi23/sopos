@extends('admin/layout/main')
@section('title', 'Dashboard - Online Poin of Sales')
@section('container')
<div class="page-wrapper">

    <div class="page-body">
        <div class="row">
            <!-- task, page, download counter  start -->
            <div class="col-xl-3 col-md-6">
                <div class="card bg-c-yellow update-card">
                    <div class="card-block">
                        <div class="row align-items-end">
                            <div class="col-8">
                                <h4 class="text-white">$30200</h4>
                                <h6 class="text-white m-b-0">All Earnings</h6>
                            </div>
                            <div class="col-4 text-right">
                                <canvas id="update-chart-1" height="50"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update :
                            2:15 am</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-c-green update-card">
                    <div class="card-block">
                        <div class="row align-items-end">
                            <div class="col-8">
                                <h4 class="text-white">290+</h4>
                                <h6 class="text-white m-b-0">Page Views</h6>
                            </div>
                            <div class="col-4 text-right">
                                <canvas id="update-chart-2" height="50"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update :
                            2:15 am</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-c-pink update-card">
                    <div class="card-block">
                        <div class="row align-items-end">
                            <div class="col-8">
                                <h4 class="text-white">145</h4>
                                <h6 class="text-white m-b-0">Task Completed</h6>
                            </div>
                            <div class="col-4 text-right">
                                <canvas id="update-chart-3" height="50"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update :
                            2:15 am</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-c-lite-green update-card">
                    <div class="card-block">
                        <div class="row align-items-end">
                            <div class="col-8">
                                <h4 class="text-white">500</h4>
                                <h6 class="text-white m-b-0">Downloads</h6>
                            </div>
                            <div class="col-4 text-right">
                                <canvas id="update-chart-4" height="50"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update :
                            2:15 am</p>
                    </div>
                </div>
            </div>
            <!-- task, page, download counter  end -->

            <!--  sale analytics start -->
            <div class="col-xl-9 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Sales Analytics</h5>
                        <span class="text-muted">For more details about usage, please refer <a
                                href="https://www.amcharts.com/online-store/" target="_blank">amCharts</a>
                            licences.</span>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="feather icon-maximize full-card"></i></li>
                                <li><i class="feather icon-minus minimize-card"></i></li>
                                <li><i class="feather icon-trash-2 close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block">
                        <div id="sales-analytics" style="height: 265px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-12">
                <div class="card user-card2">
                    <div class="card-block text-center">
                        <h6 class="m-b-15">Project Risk</h6>
                        <div class="risk-rate">
                            <span><b>5</b></span>
                        </div>
                        <h6 class="m-b-10 m-t-10">Balanced</h6>
                        <a href="#!" class="text-c-yellow b-b-warning">Change Your Risk</a>
                        <div class="row justify-content-center m-t-10 b-t-default m-l-0 m-r-0">
                            <div class="col m-t-15 b-r-default">
                                <h6 class="text-muted">Nr</h6>
                                <h6>AWS 2455</h6>
                            </div>
                            <div class="col m-t-15">
                                <h6 class="text-muted">Created</h6>
                                <h6>30th Sep</h6>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-warning btn-block p-t-15 p-b-15">Download Overall Report</button>
                </div>
            </div>
            <!--  sale analytics end -->

        </div>
    </div>
</div>
@endsection()
