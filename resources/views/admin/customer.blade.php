@extends('admin/layout/main')
@section('title', 'Customer - Online Poin of Sales')
@section('container')
<div class="page-wrapper">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Customer</h4>
                        <span>Halaman untuk menampung data customer</span>
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
                                <h4>Data Customer</h4>
                            </div>
                            <div class="col-lg-6">
                                <div class="btn btn-primary float-right" data-toggle="modal" data-target="#tambah"><i
                                        class="feather icon-plus"></i>Tambah</div>

                                <!-- Modal Tambah Supplier -->
                                <div class="modal fade" id="tambah" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Tambah Data Customer</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{url('/dashboard/customer')}}" method="post">
                                                    @csrf
                                                    <fieldset>
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <label class="block">Nama Customer *</label>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <input name="nama_customer" type="text"
                                                                    class=" form-control" required="required">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <label class="block">Jenis Kelamin *</label>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-radio">
                                                                    <div class="radio radio-inline">
                                                                        <label>
                                                                            <input type="radio" name="j_kel" value="L"
                                                                                required="required">
                                                                            <i class="helper"></i>Laki-laki
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio radio-inline">
                                                                        <label>
                                                                            <input type="radio" name="j_kel" value="P"
                                                                                required="required">
                                                                            <i class="helper"></i>Perempuan
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <label class="block">No Hp *</label>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <input name="no_hp" type="number" class=" form-control"
                                                                    required="required">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <label class="block">Alamat *</label>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <textarea class="form-control" name="alamat"
                                                                    required="required"></textarea>
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
                                        <th>Nama Customer</th>
                                        <th>Jenis Kelamin</th>
                                        <th>No HP</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($customer as $data)
                                    <tr>

                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$data->nama_customer}}</td>
                                        <td>{{$data->j_kel}}</td>
                                        <td>{{$data->no_hp}}</td>
                                        <td>{{$data->alamat}}</td>
                                        <td align="center">
                                            <button class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit{{$data->id}}"><i class="feather icon-edit"
                                                    style="padding: 0; margin: 0;"></i></button>
                                            <a href="{{url('/dashboard/customer/'.$data->id)}}" class="sweet-1"><button
                                                    class="btn btn-danger"><i class="feather icon-trash"
                                                        style="padding: 0; margin: 0;"></i></button></a>
                                        </td>
                                    </tr>
                                    <!-- Modal Edit Supplier -->
                                    <div class="modal fade" id="edit{{$data->id}}" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Data Customer</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{url('/dashboard/customer/'.$data->id)}}"
                                                        method="post">
                                                        @csrf
                                                        @method('patch')
                                                        <fieldset>
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <label class="block">Nama Customer *</label>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <input name="nama_customer" type="text"
                                                                        class=" form-control"
                                                                        value="{{$data->nama_customer}}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <label class="block">Jenis Kelamin *</label>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-radio">
                                                                        <div class="radio radio-inline">
                                                                            <label>
                                                                                <input type="radio" name="j_kel"
                                                                                    value="L" @if($data->j_kel == 'L')
                                                                                checked="checked" @endif>
                                                                                <i class="helper"></i>Laki-laki
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio radio-inline">
                                                                            <label>
                                                                                <input type="radio" name="j_kel"
                                                                                    value="P" @if($data->j_kel == 'P')
                                                                                checked="checked" @endif>
                                                                                <i class="helper"></i>Perempuan
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <label class="block">No Hp *</label>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <input name="no_hp" type="number"
                                                                        class=" form-control" value="{{$data->no_hp}}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <label class="block">Alamat *</label>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <textarea class="form-control"
                                                                        name="alamat">{{$data->alamat}}</textarea>
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
