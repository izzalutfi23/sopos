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
                        <span>Halaman untuk menampung data penjualan
                            <u><strong>{{$cabang->nama_toko}}</strong></u></span>
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
                        <li class="breadcrumb-item"><a href="#!">Penjualan</a>
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
            <div class="col-sm-12">
                <!-- Multi-column table start -->
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4>Data Penjualan</h4>
                            </div>
                            <div class="col-lg-6">

                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <table id="multi-colum-dt" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>Faktur</th>
                                        <th>Customer</th>
                                        <th>Toko</th>
                                        <th>Kasir </th>
                                        <th>Tanggal</th>
                                        <th>Total</th>
                                        <th>Diskon</th>
                                        <th>Harga Akhir</th>
                                        <th>Bayar</th>
                                        <th>Kembalian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($penjualan as $p)
                                    <tr>
                                        <td>{{$p->faktur}}</td>
                                        <td>{{$p->customer->nama_customer}}</td>
                                        <td>{{$p->cabang->nama_toko}}</td>
                                        <td>{{$p->karyawan->nama_karyawan}}</td>
                                        <td>{{$p->tgl()}}</td>
                                        <td>Rp {{$p->total}}</td>
                                        <td>Rp {{$p->diskon}}</td>
                                        <td>Rp {{$p->total_akhir}}</td>
                                        <td>Rp {{$p->bayar}}</td>
                                        <td>Rp {{$p->kembalian}}</td>
                                        <td align="center">
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#edit">Detail</button>
                                            <a href="{{url('/dashboard/supplier')}}" class="sweet-1"><button
                                                    class="btn btn-danger"><i class="feather icon-trash"
                                                        style="padding: 0; margin: 0;"></i></button></a>
                                        </td>
                                    </tr>
                                    @endforeach

                                    <!-- Modal Edit Supplier -->
                                    <div class="modal fade" id="edit" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Data Supplier</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{url('/dashboard/supplier')}}" method="post">
                                                        @csrf
                                                        @method('patch')
                                                        <fieldset>
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <label class="block">Nama Supplier *</label>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <input name="nama_suplier" type="text"
                                                                        class=" form-control" value="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <label for="email-2" class="block">No Hp *</label>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <input name="no_hp" type="number"
                                                                        class=" form-control" value="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <label class="block">Alamat *</label>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <textarea class="form-control"
                                                                        name="alamat"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <label class="block">Deskripsi</label>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <textarea class="form-control"
                                                                        name="deskripsi"></textarea>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect "
                                                        data-dismiss="modal">Batal</button>
                                                    <button type="submit"
                                                        class="btn btn-primary waves-effect waves-light ">Edit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Edit Supplier End -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Multi-column table end -->
            </div>
        </div>
    </div>
    <!-- Page-body end -->
</div>
@endsection()
