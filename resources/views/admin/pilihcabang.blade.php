@extends('admin/layout/main')
@section('title', 'Laporan Penjualan - Online Poin of Sales')
@section('container')
<div class="page-wrapper">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Laporan Penjualan</h4>
                        <span>Pilih Cabang Toko Untuk Melihat Data Penjualan</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Pilih Cabang</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->
    <!-- Alert Success -->
    <div class="flash-data" data-flashdata="{{session('hapus')}}"></div>
    @if (session('status'))
    <div class="alert alert-success background-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="padding: 0; margin: 0;">
            <i class="icofont icofont-close-line-circled text-white"></i>
        </button>
        <strong>Success!</strong> {{session('status')}}
    </div>
    @endif
    <!-- Alert Success End -->
    <!-- Page-body start -->
    <div class="page-body">
        <div class="row">
            @foreach($cabang as $c)
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-block text-center">
                        <i class="feather icon-home text-c-lite-green d-block f-40"></i>
                        <h4 class="m-t-20">{{$c->nama_toko}}</h4>
                        <a href="{{url('/dashboard/penjualan/'.$c->id)}}"><button class="btn btn-primary btn-sm btn-round mt-3">Lihat Data
                            Penjualan</button></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Page-body end -->
</div>
@endsection()
