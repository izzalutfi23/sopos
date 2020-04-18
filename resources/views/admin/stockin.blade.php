@extends('admin/layout/main')
@section('title', 'Stock In - Online Poin of Sales')
@section('container')
<div class="page-wrapper">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Stock In</h4>
                        <span>Halaman untuk menampung data stockin</span>
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
                        <li class="breadcrumb-item"><a href="#!">Stockin</a>
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
    <!-- Alert form nama_barang ksosong -->
    @error('nama_produk')
    <div class="alert alert-danger background-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="padding: 0; margin: 0;">
            <i class="icofont icofont-close-line-circled text-white"></i>
        </button>
        <strong>Error!</strong> Form nama barang harus diisi!
    </div>
    @enderror
    <!-- Alert form nama_barang ksosong end -->
    <!-- Page-body start -->
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <!-- Multi-column table start -->
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4>Data Stockin</h4>
                            </div>
                            <div class="col-lg-6">
                                <div class="btn btn-primary float-right" data-toggle="modal" data-target="#multi"><i
                                        class="feather icon-plus"></i>Tambah</div>

                                <!-- Modal Tambah Supplier -->
                                <div class="modal fade" id="multi">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Tambah Data Stock In</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{url('/dashboard/stockin')}}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <fieldset>
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <label class="block">Produk *</label>
                                                            </div>
                                                            <div class="col-sm-8 col-lg-12">
                                                                <div class="input-group">
                                                                    <input type="hidden" name="id_produk" id="item_id" required="required">
                                                                    <input type="text" readonly name="nama_produk"
                                                                        id="product_name" class="form-control" required="required">
                                                                    <span class="input-group-addon" data-toggle="modal"
                                                                        data-target="#item" style="margin-top: 0;"><i
                                                                            class="feather icon-search"
                                                                            style="color: #FFF;"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <label class="block">Nama Supplier *</label>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <select name="id_supplier" class="form-control">
                                                                    @foreach($supplier as $sup)
                                                                    <option value="{{$sup->id}}">{{$sup->nama_suplier}}
                                                                    </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <label class="block">Stok/Jumlah</label>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <input name="qty" type="number" class=" form-control"
                                                                    required="required">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <label class="block">Foto Bukti (jika ada)</label>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <input name="foto" type="file" class=" form-control">
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect "
                                                    data-dismiss="modal">Batal</button>
                                                <button type="submit"
                                                    class="btn btn-primary waves-effect waves-light ">Simpan</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal pilih item -->
                                <div class="modal fade" id="item">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Pilih Item</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                            </div>
                                            <div class="container"></div>
                                            <div class="modal-body">
                                                <div class="dt-responsive table-responsive">
                                                    <table id="simpletable"
                                                        class="table table-striped table-bordered nowrap">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Kode</th>
                                                                <th>Nama Produk</th>
                                                                <th>Kategori</th>
                                                                <th>Satuan</th>
                                                                <th>Harga</th>
                                                                <th>Stok</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($item as $ditem)
                                                            <tr>
                                                                <td>{{$loop->iteration}}</td>
                                                                <td>{{$ditem->kode_produk}}</td>
                                                                <td>{{$ditem->nama_produk}}</td>
                                                                <td>{{$ditem->kategori->nama_kategori}}</td>
                                                                <td>{{$ditem->unit->nama_unit}}</td>
                                                                <td>Rp {{number_format($ditem->harga)}}</td>
                                                                <td>{{$ditem->stok}}</td>
                                                                <td>
                                                                    <button class="btn btn-primary" id="select"
                                                                        data-id="{{$ditem->id}}"
                                                                        data-namaproduk="{{$ditem->nama_produk}}">Pilih</button>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal pilih item end -->
                                <!-- Modal Tambah Stockin end -->

                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <table id="multi-colum-dt" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Nama Supplier</th>
                                        <th>Jumlah/Qty </th>
                                        <th>Tanggal</th>
                                        <th>foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($stockin as $data)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$data->produk->nama_produk}}</td>
                                        <td>{{$data->supplier->nama_suplier}}</td>
                                        <td>{{$data->qty}}</td>
                                        <td>{{$data->tgl()}}</td>
                                        <td>
                                            @if($data->foto)
                                            <img src="{{asset('/foto/'.$data->foto)}}" width="60px" height="70px">
                                            @else
                                            @endif
                                        </td>
                                        <td align="center">
                                            <a href="{{url('/dashboard/stockin/'.$data->id)}}" class="sweet-1"><button
                                                    class="btn btn-danger"><i class="feather icon-trash"
                                                        style="padding: 0; margin: 0;"></i></button></a>
                                        </td>
                                    </tr>
                                    @endforeach
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
