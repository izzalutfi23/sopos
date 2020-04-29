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
                            <div class="position-relative form-group"><input name="email" id="exampleEmail"
                                    placeholder="with a placeholder" type="email" class="form-control"></div>
                            <div class="position-relative form-group"><input name="password" id="examplePassword"
                                    placeholder="password placeholder" type="password" class="form-control"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
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

            <div class="col-md-4">
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

        <!-- Table -->
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="table-responsive">
                        <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
                            <table class="table table-striped table-bordered data">
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

<!-- Modal dialog tambah data sekolah -->
<div class="modal fade" id="tambahacara" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Acara</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('/acara')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="position-relative form-group">
                        <label class="">Nama Acara</label>
                        <input name="acara" type="text" placeholder="Ex : Lomba Futsal" class="form-control"
                            required="required">
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" required="required"></textarea>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Tanggal</label>
                        <input type="date" name="tanggal" required="required" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Tempat</label>
                        <input name="tempat" placeholder="Ex : GOR Jatidiri" type="text" class="form-control"
                            required="required">

                    </div>
                    <div class="position-relative form-group">
                        <label class="">Waktu</label>
                        <input name="waktu" placeholder="Ex : 08.30" type="text" class="form-control"
                            required="required">
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Jumlah Peserta</label>
                        <input name="jml_peserta" placeholder="Ex : 30" type="number" class="form-control"
                            required="required">
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Keterangan</label>
                        <input name="keterangan" placeholder="Ex : Bersepatu" type="text" class="form-control"
                            required="required">
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Foto</label>
                        <input name="foto" type="file" class="form-control" required="required">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End modal dialog -->
