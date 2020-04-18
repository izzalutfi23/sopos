@extends('admin/layout/main')
@section('title', 'Cabang Toko - Online Poin of Sales')
@section('container')
<div class="page-wrapper">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Cabang Toko</h4>
                        <span>Halaman untuk menampung data Cabang Toko</span>
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
                        <li class="breadcrumb-item"><a href="#!">Supplier</a>
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
                                <h4>Data Cabang Toko</h4>
                            </div>
                            <div class="col-lg-6">
                                <div class="btn btn-primary float-right" data-toggle="modal" data-target="#tambah"><i class="feather icon-plus"></i>Tambah</div>

                                <!-- Modal Tambah Supplier -->
                                <div class="modal fade" id="tambah" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Tambah Data Cabang Toko</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{url('/dashboard/cabangtoko')}}" method="post">
                                                    @csrf
                                                    <fieldset>
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <label class="block">Nama Cabang Toko *</label>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <input name="nama_toko" type="text" class=" form-control" required="required">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <label class="block">Alamat Cabang Toko *</label>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <textarea name="alamat" id="alamat" cols="20" rows="5" class="form-control" required="required"></textarea>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light ">Simpan</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Tambah Supplier End -->

                            </div>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <table id="multi-colum-dt" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Toko</th>
                                        <th>Alamat</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cabangtoko as $data)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$data->nama_toko}}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($data->alamat, 50, $end='...') }}</td>
                                        <td>{{$data->tgl()}}</td>
                                        <td align="center">
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#edit{{$data->id}}"><i class="feather icon-edit" style="padding: 0; margin: 0;"></i></button>
                                            <a href="{{url('/dashboard/cabangtoko/'.$data->id)}}" class="sweet-1"><button class="btn btn-danger"><i class="feather icon-trash" style="padding: 0; margin: 0;"></i></button></a>
                                        </td>
                                    </tr>

                                    <!-- Modal Edit Supplier -->
                                    <div class="modal fade" id="edit{{$data->id}}" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Data Cabang Toko<br>{{$data->nama_toko}}</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{url('/dashboard/cabangtoko/'.$data->id)}}" method="post">
                                                        @csrf
                                                        @method('patch')
                                                        <fieldset>
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <label class="block">Nama Cabang *</label>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <input name="nama_toko" type="text" class=" form-control" value="{{$data->nama_toko}}" required="required">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <label class="block">Alamat *</label>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <textarea name="alamat" id="alamat" cols="20" rows="5" class="form-control" required="required">{{$data->alamat}}</textarea>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light ">Edit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Edit Supplier End -->
                                    @endforeach()
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
