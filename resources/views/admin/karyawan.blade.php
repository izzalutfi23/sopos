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
    <button type="button" class="btn btn-primary waves-effect waves-light m-r-15 my-3"><i
            class="icofont icofont-plus m-r-5"></i>Tambah</button>

    <div class="row simple-cards users-card">
        <div class="col-md-12 col-xl-4">
            <div class="card user-card">
                <div class="card-header-img">
                    <img class="img-fluid img-radius" src="{{url('/assets/images/user-card/img-round2.jpg')}}"
                        alt="card-img">
                    <h4>Michelle House</h4>
                    <h5><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__"
                            data-cfemail="9afbf8f9aba8a9dafef5f7fbf3f4b4f9f5f7">[email&#160;protected]</a>
                    </h5>
                    <h6>Systems Administrator</h6>
                </div>



                <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do
                    eiusmod temp or incidi dunt ut labore et.</p>
                <div style="padding: 5px;">
                    <button type="button" class="btn btn-success waves-effect waves-light"><i
                            class="icofont icofont-edit m-r-5"></i>Edit</button>
                    <button type="button" class="btn btn-danger waves-effect waves-light"><i
                            class="icofont icofont-trash m-r-5"></i>Hapus</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light m-r-15"><i
                            class="icofont icofont-edit m-r-5"></i>Edit User/Pass</button>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-xl-4">
            <div class="card user-card">
                <div class="card-header-img">
                    <img class="img-fluid img-radius" src="{{url('/assets/images/user-card/img-round4.jpg')}}"
                        alt="card-img">
                    <h4>Cara Stevens</h4>
                    <h5><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__"
                            data-cfemail="6c0d0e0f5d5e5f2c0803010d0502420f0301">[email&#160;protected]</a>
                    </h5>
                    <h6>Sales Assistant</h6>
                </div>

                <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do
                    eiusmod temp or incidi dunt ut labore et.</p>
                <div>
                    <button type="button" class="btn btn-primary waves-effect waves-light m-r-15"><i
                            class="icofont icofont-plus m-r-5"></i>Follow</button>
                    <button type="button" class="btn btn-success waves-effect waves-light"><i
                            class="icofont icofont-user m-r-5"></i>Profile</button>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-xl-4">
            <div class="card user-card">
                <div class="card-header-img">
                    <img class="img-fluid img-radius" src="{{url('/assets/images/user-card/img-round3.jpg')}}"
                        alt="card-img">
                    <h4>Cedric Kelly</h4>
                    <h5><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__"
                            data-cfemail="59383b3a686b6a193d3634383037773a3634">[email&#160;protected]</a>
                    </h5>
                    <h6>Integration Specialist</h6>
                </div>

                <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do
                    eiusmod temp or incidi dunt ut labore et.</p>
                <div>
                    <button type="button" class="btn btn-primary waves-effect waves-light m-r-15"><i
                            class="icofont icofont-plus m-r-5"></i>Follow</button>
                    <button type="button" class="btn btn-success waves-effect waves-light"><i
                            class="icofont icofont-user m-r-5"></i>Profile</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end of row -->
    <!-- Page-body end -->
</div>
@endsection()
