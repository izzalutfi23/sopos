@extends('admin/layout/main')
@section('title', 'Dashboard - Online Poin of Sales')
@section('container')
<div class="page-wrapper">

    <div class="page-body">
        <div class="row">
            <!-- task, page, download counter  start -->
            <div class="col-xl-5 col-md-6">
                <div class="card bg-c-yellow update-card">
                    <div class="card-block">
                        <div class="row align-items-end">
                            <div class="col-8">
                                <h3 class="text-white"> {{$total_pemasukan}} </h3>
                                <h6 class="text-white m-b-0">Pemasukan</h6>
                            </div>
                            <div class="col-4 text-right">
                                <span class="pcoded-micon"><i class="feather icon-bar-chart" style="font-size: 300%;"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update :
                            {{$last_update_penjualan->updated_at}}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-md-6">
                <div class="card bg-c-green update-card">
                    <div class="card-block">
                        <div class="row align-items-end">
                            <div class="col-8">
                                <h4 class="text-white"> {{$total_customer}} </h4>
                                <h6 class="text-white m-b-0">Customer</h6>
                            </div>
                            <div class="col-4 text-right">
                                <span class="pcoded-micon"><i class="feather icon-users" style="font-size: 300%;"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : {{$last_update_customer->updated_at}} </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-md-6">
                <div class="card bg-c-pink update-card">
                    <div class="card-block">
                        <div class="row align-items-end">
                            <div class="col-8">
                                <h4 class="text-white">{{$total_karyawan}}</h4>
                                <h6 class="text-white m-b-0">Karyawan</h6>
                            </div>
                            <div class="col-4 text-right">
                                <span class="pcoded-micon"><i class="feather icon-user" style="font-size: 300%;"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update :
                            {{$last_update_karyawan->updated_at}}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-md-6">
                <div class="card bg-c-lite-green update-card">
                    <div class="card-block">
                        <div class="row align-items-end">
                            <div class="col-8">
                                <h4 class="text-white">{{$total_cabangtoko}}</h4>
                                <h6 class="text-white m-b-0">Cabang Toko</h6>
                            </div>
                            <div class="col-4 text-right">
                                <span class="pcoded-micon"><i class="feather icon-map" style="font-size: 300%;"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update :
                            {{$last_update_cabangtoko->updated_at}}</p>
                    </div>
                </div>
            </div>
            <!-- task, page, download counter  end -->

            <!--  sale analytics start -->
            <div class="col-xl-12 col-md-12">
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
                            </ul>
                        </div>
                    </div>
                    <div class="card-block">
                        <div id="sales-analytics" style="height: 265px;"></div>
                    </div>
                </div>
            </div>
            <!--  sale analytics end -->

        </div>
    </div>
</div>
@endsection()

@section('footer')
    <script>
            let data = {!! json_encode($data) !!};
            console.log(data);
            let dataProvider = [];
            for(let i = 0; i < data.length; i++){
                dataProvider.push({
                    date: data[i].created_at,
                    value: data[i].total_akhir,
                });
            };
            console.log(dataProvider);

        $(function() {
        var amchart = AmCharts.makeChart("sales-analytics", {
            "type": "serial",
            "theme": "light",
            "marginTop": 0,
            "marginRight": 0,
            "dataProvider": dataProvider,
            "valueAxes": [{
                "axisAlpha": 0,
                "gridAlpha": 0,
                "position": "left"
            }],
            "graphs": [{
                "id": "g1",
                "balloonText": "[[category]]<br><b><span style='font-size:14px;'>Rp.[[value]]</span></b>", //Taruh Value dan Datenya disini
                "bullet": "round",
                "bulletSize": 8,
                "lineColor": "#fe5d70",
                "lineThickness": 2,
                "negativeLineColor": "#fe9365",
                "type": "line",
                "valueField": "value"
            }],
            "chartScrollbar": {
                "graph": "g1",
                "gridAlpha": 0,
                "color": "#888888",
                "scrollbarHeight": 55,
                "backgroundAlpha": 0,
                "selectedBackgroundAlpha": 0.1,
                "selectedBackgroundColor": "#888888",
                "graphFillAlpha": 0,
                "autoGridCount": true,
                "selectedGraphFillAlpha": 0,
                "graphLineAlpha": 0.2,
                "graphLineColor": "#c2c2c2",
                "selectedGraphLineColor": "#888888",
                "selectedGraphLineAlpha": 1

            },
            "chartCursor": {
                "categoryBalloonDateFormat": "YYYY-MM-DD", //Ketika Cursor didekatkan
                "cursorAlpha": 0,
                "valueLineEnabled": true,
                // "valueLineBalloonEnabled": true,
                "valueLineAlpha": 0.5,
                "fullWidth": true
            },
            "dataDateFormat": "YYYY-MM-DD", //Format Dasar Tanggal
            "categoryField": "date",
            "categoryAxis": {
                "minPeriod": "DD", //Untuk Melihat berdasarkan apa
                "parseDates": true,
                "gridAlpha": 0,
                "minorGridAlpha": 0,
                "minorGridEnabled": true
            },
            "export": {
                "enabled": true
            }
        });
        amchart.addListener("rendered", zoomChart);
        if (amchart.zoomChart) {
            amchart.zoomChart();
        }

        function zoomChart() {
            amchart.zoomToIndexes(Math.round(amchart.dataProvider.length * 0.4), Math.round(amchart.dataProvider.length * 0.55));
        }
    });
    </script>
@endsection
