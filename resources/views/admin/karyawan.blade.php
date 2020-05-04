@extends('admin/layout/main')
@section('title', 'Karyawan - Online Poin of Sales')
@section('container')
<div class="page-wrapper">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Karyawan</h4>
                        <span>Halaman untuk menampung data stockout</span>
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
                        <li class="breadcrumb-item"><a href="#!">Kayryawan</a>
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
    <!-- Simple card start -->
    <button type="button" data-toggle="modal" data-target="#tambah"
        class="btn btn-primary waves-effect waves-light m-r-15 my-3"><i
            class="icofont icofont-plus m-r-5"></i>Tambah</button>

    <!-- Modal Tambah Karyawan -->
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
                    <form action="{{url('/dashboard/karyawan')}}" enctype="multipart/form-data" method="post">
                        @csrf
                        <fieldset>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="block">Nama *</label>
                                </div>
                                <div class="col-sm-12">
                                    <input name="nama_karyawan" type="text" class=" form-control" required="required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="block">Email *</label>
                                </div>
                                <div class="col-sm-12">
                                    <input name="email" type="email" class=" form-control" required="required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="block">Cabang Toko *</label>
                                </div>
                                <div class="col-sm-12">
                                    <select class="form-control" name="id_cabang">
                                        @foreach($cabang as $c)
                                        <option value="{{$c->id}}">{{$c->nama_toko}}</option>
                                        @endforeach
                                    </select>
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
                                                <input type="radio" name="j_kel" value="L" required="required">
                                                <i class="helper"></i>Laki-laki
                                            </label>
                                        </div>
                                        <div class="radio radio-inline">
                                            <label>
                                                <input type="radio" name="j_kel" value="P" required="required">
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
                                    <input name="no_hp" type="number" class=" form-control" required="required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="block">Alamat *</label>
                                </div>
                                <div class="col-sm-12">
                                    <textarea name="alamat" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="block">Foto</label>
                                </div>
                                <div class="col-sm-12">
                                    <input name="foto" type="file" class=" form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="block">Role *</label>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-radio">
                                        <div class="radio radio-inline">
                                            <label>
                                                <input type="radio" name="role" value="admin" required="required">
                                                <i class="helper"></i>Admin
                                            </label>
                                        </div>
                                        <div class="radio radio-inline">
                                            <label>
                                                <input type="radio" name="role" value="kasir" required="required">
                                                <i class="helper"></i>Kasir
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="block">Status *</label>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-radio">
                                        <div class="radio radio-inline">
                                            <label>
                                                <input type="radio" name="status" value="1" required="required">
                                                <i class="helper"></i>Aktif
                                            </label>
                                        </div>
                                        <div class="radio radio-inline">
                                            <label>
                                                <input type="radio" name="status" value="0" required="required">
                                                <i class="helper"></i>Tidak Aktif
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="block">Username *</label>
                                </div>
                                <div class="col-sm-12">
                                    <input name="name" type="text" class=" form-control" required="required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="block">Password *</label>
                                </div>
                                <div class="col-sm-12">
                                    <input name="password" id="password" type="password" class=" form-control"
                                        required="required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label class="block">Konfirmasi Password *</label>
                                </div>
                                <div class="col-sm-12">
                                    <input name="confirm_password" id="confirm_password" type="password"
                                        class=" form-control" required="required">
                                    <span id='message'></span>
                                </div>
                            </div>
                        </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Batal</button>
                    <button type="submit" id="simpan" class="btn btn-primary waves-effect waves-light ">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Karyawan End -->

    <div class="row simple-cards users-card">
        @foreach($karyawan as $k)
        <div class="col-md-12 col-xl-4">
            <div class="card user-card">
                <div class="card-header-img">
                    <img class="img-fluid img-radius" style="height: 200px;" src="{{url('/foto/user/'.$k->foto)}}"
                        alt="card-img">
                    <h4>{{$k->nama_karyawan}}</h4>
                    <h5><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__"
                            data-cfemail="9afbf8f9aba8a9dafef5f7fbf3f4b4f9f5f7">{{ucwords($k->pengguna->name)}}</a>
                    </h5>
                    <h6>{{ucwords($k->cabang->nama_toko)}}</h6>
                </div>



                <table class="table" style="margin: 0 auto; width: 80%; margin-top: 15px;">
                    <tbody>
                        <tr>
                            <th scope="row">
                                Alamat
                            </th>
                            <td style="text-align: right;">{{$k->alamat}}</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Email
                            </th>
                            <td style="text-align: right;">{{$k->pengguna->email}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Jenis Kel</th>
                            <td style="text-align: right;">
                                @if($k->j_kel == 'L')
                                Laki-laki
                                @else
                                Perempuan
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Alamat</th>
                            <td style="text-align: right;">{{$k->alamat}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Status</th>
                            <td style="text-align: right;">
                                @if($k->pengguna->status == 1)
                                Aktif
                                @else
                                Tidak Aktif
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>


                <div style="padding: 5px;">
                    <button type="button" data-toggle="modal" data-target="#edit{{$k->id}}"
                        class="btn btn-success waves-effect waves-light"><i
                            class="icofont icofont-edit m-r-5"></i>Edit</button>
                    <button type="button" class="btn btn-danger waves-effect waves-light"><i
                            class="icofont icofont-trash m-r-5"></i>Hapus</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light m-r-15"><i
                            class="icofont icofont-edit m-r-5"></i>Edit User/Pass</button>
                </div>
            </div>
        </div>


        <!-- Modal Edit Karyawan -->
        <div class="modal fade" id="edit{{$k->id}}" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Data Karyawan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/dashboard/karyawan/'.$k->id)}}" enctype="multipart/form-data" method="post">
                            @csrf
                            @method('patch')
                            <fieldset>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label class="block">Nama *</label>
                                    </div>
                                    <div class="col-sm-12">
                                        <input name="nama_karyawan" type="text" class=" form-control"
                                            value="{{$k->nama_karyawan}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label class="block">Cabang Toko *</label>
                                    </div>
                                    <div class="col-sm-12">
                                        <select class="form-control" name="id_cabang">
                                            @foreach($cabang as $c)
                                            <option value="{{$c->id}}" @if($k->id_cabang == $c->id)
                                                selected="selected" @endif>{{$c->nama_toko}}</option>
                                            @endforeach
                                        </select>
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
                                                    <input type="radio" @if($k->j_kel == 'L')
                                                    checked="checked" @endif name="j_kel" value="L" required="required">
                                                    <i class="helper"></i>Laki-laki
                                                </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" @if($k->j_kel == 'P')
                                                    checked="checked" @endif name="j_kel" value="P" required="required">
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
                                        <input name="no_hp" type="number" class=" form-control" value="{{$k->no_hp}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label class="block">Alamat *</label>
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea name="alamat" class="form-control">{{$k->alamat}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label class="block">Foto</label>
                                    </div>
                                    <div class="col-sm-12">
                                        <input name="foto" type="file" class=" form-control">
                                    </div>
                                </div>
                            </fieldset>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Batal</button>
                        <button type="submit" id="simpan"
                            class="btn btn-primary waves-effect waves-light ">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Edit Karyawan End -->

        @endforeach
    </div>

    <!-- Page-body end -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $('#password, #confirm_password').on('keyup', function () {
        if ($('#password').val() == $('#confirm_password').val()) {
            $('#simpan').prop('disabled', false),
                $('#message').html('Kombinasi Password Sesuai').css('color', 'green');
        } else
            $('#simpan').prop('disabled', true),
            $('#message').html('Kombinasi Password Tidak Sesuai!!!').css('color', 'red');
    });

</script>
@endsection()
