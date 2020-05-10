<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
    <link href="{{asset('main.css')}}" rel="stylesheet">
    <style type="text/css">
        @media print {
            body {
                visibility: hidden;
            }

            #printpage,
            #printpage * {
                visibility: visible;
            }

            #printpage {
                position: absolute;
                left: 0;
                top: 0;
            }

            #btn-print {
                display: none;
            }
        }

    </style>

    <!-- sweet alert framework -->
    <link rel="stylesheet" type="text/css" href="{{asset('bower_components/sweetalert/css/sweetalert.css')}}">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <img class="img-fluid float-left" width="65%" height="25px" style="padding-left: 4%;"
                    src="{{asset('assets\images\sps.png')}}" alt="Theme-Logo">
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button"
                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            class="p-0 btn">
                                            <img width="42" class="rounded-circle"
                                                src="{{asset('assets/images/avatars/1.jpg')}}" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right">
                                            <a href="{{url('/logout')}}"><button type="button" tabindex="0"
                                                    class="dropdown-item">Logout</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        {{auth()->user()->karyawan->nama_karyawan}}
                                    </div>
                                    <div class="widget-subheading">
                                        Kasir
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="app-main closed-sidebar app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header closed-sidebar-mobile">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Kasir</li>
                            <li>
                                <a href="{{url('/dashboard')}}" class="mm-active">
                                    <i class="metismenu-icon pe-7s-cart"></i>
                                    Transaksi
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            @yield('container')

            <script type="text/javascript" src="{{asset('/assets/js/main.js')}}"></script>
            <!-- sweet alert js -->
            <script type="text/javascript" src="{{asset('bower_components/sweetalert/js/sweetalert.min.js')}}"></script>

            <!-- DataTables -->
            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#example1').DataTable();
                    $('#example2').DataTable({
                        "searching": false,
                        "paging": false,
                        "info": false
                    });
                });

                $(document).on('click', '#select', function () {
                    var item_id = $(this).data('id');
                    var nama_produk = $(this).data('namaproduk');
                    var stok = $(this).data('stok');
                    $('#item_id').val(item_id);
                    $('#product_name').val(nama_produk);
                    $('#stok').val(stok);
                });

                $('.float-right').on('click', function (e) {
                    e.preventDefault();
                    var stok = parseInt(document.getElementById("stok").value, 10);
                    var qty = parseInt(document.getElementById("qty").value, 10);

                    if (stok<qty) {
                        swal({
                            title: "Perhatian!!!",
                            text: "Jumlah barang yang kamu masukkan melebihi stok barang",
                            type: "warning"
                        });
                    }
                    else if(isNaN(parseFloat(stok))){
                        swal({
                            title: "Perhatian!!!",
                            text: "Tidak ada item yg anda pilih",
                            type: "warning"
                        });
                    }
                    else {
                        document.chart.submit();
                    }
                });

                // Modal sukses hapus
                const flashData = $('.flash-data').data('flashdata');

                if (flashData) {
                    window.open('{{url(' / kasir / printinvoice ')}}', '_blank');
                    swal({
                        title: "Berhasil",
                        text: flashData,
                        type: "success"
                    });
                }

                const warn = $('.warn-data').data('warn');

                if (warn) {
                    swal({
                        title: "Perhatian!!!",
                        text: warn,
                        type: "warning"
                    });
                }

                // Menghitung bayar kembalian
                function startCalculate() {
                    interval = setInterval("Calculate()", 10);
                }

                function Calculate() {
                    var a = document.transaksi.total_akhir.value;
                    var b = document.transaksi.bayar.value;
                    document.transaksi.kembalian.value = (b - a);
                }

                function stopCalt() {
                    clearInterval(interval);
                }

            </script>
</body>

</html>
