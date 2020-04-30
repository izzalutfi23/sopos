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

        <div class="row">
            <div class="col-md-4">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <form class="">
                            <div class="position-relative form-group"><input name="tgl" value="01/05/2020" type="email"
                                    class="form-control"></div>
                            <div class="position-relative form-group"><input name="kasir" value="Lucky Arif R" readonly
                                    type="text" class="form-control"></div>
                            <div class="position-relative form-group">
                                <select name="" class="form-control">
                                    <option value="umum">Umum</option>
                                    <option value="member">Member</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <form action="">
                            <div class="position-relative form-group">
                                <div class="input-group">
                                    <input type="hidden" name="id_produk" id="item_id" required="required">
                                    <input type="text" id="product_name" class="form-control">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                            data-target="#item"><i class="pe-7s-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative form-group">
                                <input name="tgl" placeholder="Qty" type="email" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <button class="btn btn-primary float-right"><i class="pe-7s-cart">
                                    </i>&nbspTambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <p class="text-right">Invoice <strong>TRX300420200001</strong></p>
                        <strong class="float-right" style="font-size: 50px;">Rp 1.270.000</strong>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table -->
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="table-responsive">
                        <div class="container" style="margin-top: 10px; margin-bottom: 10px;">
                            <table width="100%" class="table table-striped table-bordered data">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Acara</th>
                                        <th>Deskripsi</th>
                                        <th>Tanggal</th>
                                        <th>Tempat</th>
                                        <th>Waktu</th>
                                        <th>Jml Peserta</th>
                                        <th>Keterangan</th>
                                        <th>Foto</th>
                                        <th width="13%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>yf</td>
                                        <td>yf</td>
                                        <td>yf</td>
                                        <td>yf</td>
                                        <td>yf</td>
                                        <td>yf</td>
                                        <td>yf</td>
                                        <td>yf</td>
                                        <td>yf</td>
                                        <td width="13%">
                                            <a href="{{url('/acara/edit/')}}"><button type="button"
                                                    class="btn btn-primary btn-sm">Edit</button></a>
                                            <a onclick="return confirm('Data akan dihapus!')"
                                                href="{{url('/acara/del/')}}"><button type="button"
                                                    class="btn btn-danger btn-sm">Hapus</button></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>yf</td>
                                        <td>yf</td>
                                        <td>yf</td>
                                        <td>yf</td>
                                        <td>yf</td>
                                        <td>yf</td>
                                        <td>yf</td>
                                        <td>yf</td>
                                        <td>yf</td>
                                        <td width="13%">
                                            <a href="{{url('/acara/edit/')}}"><button type="button"
                                                    class="btn btn-primary btn-sm">Edit</button></a>
                                            <a onclick="return confirm('Data akan dihapus!')"
                                                href="{{url('/acara/del/')}}"><button type="button"
                                                    class="btn btn-danger btn-sm">Hapus</button></a>
                                        </td>
                                    </tr>
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
                            <div class="position-relative form-group"><input name="tgl" value="01/05/2020" type="email"
                                    class="form-control"></div>
                            <div class="position-relative form-group"><input name="kasir" value="Lucky Arif R" readonly
                                    type="text" class="form-control"></div>
                            <div class="position-relative form-group">
                                <select name="" class="form-control">
                                    <option value="umum">Umum</option>
                                    <option value="member">Member</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <form class="">
                            <div class="position-relative form-group"><label for="exampleEmail"
                                    class="">Email</label><input name="email" id="exampleEmail"
                                    placeholder="with a placeholder" type="email" class="form-control"></div>
                            <div class="position-relative form-group"><label for="examplePassword"
                                    class="">Password</label><input name="password" id="examplePassword"
                                    placeholder="password placeholder" type="password" class="form-control"></div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <form class="">
                            <div class="position-relative form-group"><label for="exampleEmail"
                                    class="">Email</label><input name="email" id="exampleEmail"
                                    placeholder="with a placeholder" type="email" class="form-control"></div>
                            <div class="position-relative form-group"><label for="examplePassword"
                                    class="">Password</label><input name="password" id="examplePassword"
                                    placeholder="password placeholder" type="password" class="form-control"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <form class="">
                            <div class="position-relative form-group"><label for="exampleEmail"
                                    class="">Email</label><input name="email" id="exampleEmail"
                                    placeholder="with a placeholder" type="email" class="form-control"></div>
                            <div class="position-relative form-group"><label for="examplePassword"
                                    class="">Password</label><input name="password" id="examplePassword"
                                    placeholder="password placeholder" type="password" class="form-control"></div>
                        </form>
                    </div>
                </div>
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
