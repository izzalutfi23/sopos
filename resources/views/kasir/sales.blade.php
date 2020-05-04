@extends('kasir/layout/main')
@section('title', 'Kasir | Transaksi')
@section('container')

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-cart icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Kasir
                        <div class="page-title-subheading">Penjualan
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> {{session('status')}}.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <form action="{{url('/kasir/addcart')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <div class="position-relative form-group"><input name="tgl" value="01/05/2020" type="text"
                                    class="form-control"></div>
                            <div class="position-relative form-group">
                                <input type="hidden" name="id_karyawan" value="{{auth()->user()->karyawan->id}}">
                                <input name="kasir" value="{{auth()->user()->karyawan->nama_karyawan}}" readonly
                                    type="text" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <select name="customer" class="form-control">
                                    <option value="umum">Umum</option>
                                    @foreach($custom as $c)
                                    <option value="{{$c->nama_customer}}">{{$c->nama_customer}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <div class="position-relative form-group">
                                <div class="input-group">
                                    <input type="hidden" name="id_produk" id="item_id" required="required">
                                    <input type="text" required id="product_name" class="form-control">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                            data-target="#item"><i class="pe-7s-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative form-group">
                                <input name="qty" value="1" type="number" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <button type="submit" class="btn btn-primary float-right"><i class="pe-7s-cart">
                                    </i>&nbspTambah</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <p class="text-right">Invoice <strong>TRX{{date('dmY').'000'.$id}}</strong></p>
                            <strong class="float-right" style="font-size: 40px;">Rp {{number_format($total)}}</strong>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- Table -->
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="table-responsive">
                        <div class="" style="margin: 13px 13px 13px 13px;">
                            <table id="example2" style="margin-right: 0px; border: none;"
                                class="table table-striped table-bordered data">
                                <thead>
                                    <tr>
                                        <th style="border-bottom: none;">#</th>
                                        <th style="border-bottom: none;">Kode</th>
                                        <th style="border-bottom: none;">Nama</th>
                                        <th style="border-bottom: none;">Harga</th>
                                        <th style="border-bottom: none;">Qty</th>
                                        <th style="border-bottom: none;">Diskon</th>
                                        <th style="border-bottom: none;">Total</th>
                                        <th style="border-bottom: none;" width="13%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cart as $c)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$c->produk->kode_produk}}</td>
                                        <td>{{$c->produk->nama_produk}}</td>
                                        <td>Rp {{number_format($c->produk->harga)}}</td>
                                        <td>{{$c->qty}}</td>
                                        <td>0</td>
                                        <td>
                                            @php
                                            $sub = $c->produk->harga*$c->qty;
                                            @endphp
                                            Rp {{number_format($sub)}}
                                        </td>
                                        <td width="17%">
                                            <button type="button" data-toggle="modal" data-target="#cart{{$c->id}}"
                                                class="btn btn-primary btn-sm"><i class="pe-7s-pen"></i>
                                                Update</button>
                                            <a href="{{url('/kasir/delcart/'.$c->id)}}"><button type="button"
                                                    class="btn btn-danger btn-sm"><i class="pe-7s-trash"></i>
                                                    Hapus</button></a>
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

        <div class="row">
            <div class="col-md-3">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <form class="">
                            <div class="position-relative form-group">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <label class=""><strong>Subtotal</strong></label>
                                    </div>
                                    <div class="col-lg-7">
                                        <input name="tgl" value="01/05/2020" type="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative form-group">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <label class=""><strong>Diskon</strong></label>
                                    </div>
                                    <div class="col-lg-7">
                                        <input name="tgl" value="01/05/2020" type="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative form-group">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <label class=""><strong>Harga Akhir</strong></label>
                                    </div>
                                    <div class="col-lg-7">
                                        <input name="tgl" value="01/05/2020" type="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <form class="">
                            <div class="position-relative form-group">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <label class=""><strong>Bayar</strong></label>
                                    </div>
                                    <div class="col-lg-7">
                                        <input name="tgl" value="01/05/2020" type="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative form-group">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <label class=""><strong>Kembalian</strong></label>
                                    </div>
                                    <div class="col-lg-7">
                                        <input name="tgl" value="01/05/2020" type="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <form class="">
                            <div class="position-relative form-group">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <label class=""><strong>Note</strong></label>
                                    </div>
                                    <div class="col-lg-10">
                                        <textarea name="note" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <form class="">
                    <div class="position-relative form-group">
                        <button class="btn btn-danger" style="border-radius: 0;"><i class="pe-7s-repeat"></i>
                            Batal</button>
                    </div>
                    <div class="position-relative form-group">
                        <button class="btn btn-success" style="border-radius: 0;"><i class="pe-7s-paper-plane"></i>
                            Proses Pembayaran</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Footer -->
    <div class="app-wrapper-footer">
        <div class="app-footer">
            <div class="app-footer__inner">
                <div class="app-footer-left">
                </div>
                <div class="app-footer-right">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                &copy 2019 E-data PTK
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End footer -->

</div>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
</div>
</div>
@endsection()

<!-- Modal pilih item -->
<div class="modal fade" id="item">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Pilih Item</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="container"></div>
            <div class="modal-body">
                <div class="dt-responsive table-responsive">
                    <table id="example1" class="table table-striped table-bordered nowrap" style="border: none;">
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
                                    <button class="btn btn-primary" id="select" data-id="{{$ditem->id}}"
                                        data-namaproduk="{{$ditem->nama_produk}}" data-dismiss="modal"
                                        aria-hidden="true">Pilih</button>
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

<!-- Modal Update Cart -->
@foreach($cart as $ca)
<div class="modal fade" id="cart{{$ca->id}}">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Keranjang</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="container"></div>
            <div class="modal-body">
                <form action="{{url('/kasir/editcart/'.$ca->id)}}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="position-relative form-group">
                        <div class="row">
                            <div class="col-lg-2">
                                <label class=""><strong>Qty</strong></label>
                            </div>
                            <div class="col-lg-10">
                                <input value="{{$ca->qty}}"
                                    style="width: 100%; font-size: 18px; padding-left:3%; border-radius: 3px; border: 1px solid#aaa; height: 35px;"
                                    type="text" name="qty">
                                <button type="submit" class="btn btn-primary my-2"><i class="pe-7s-pen">
                                    </i> Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
