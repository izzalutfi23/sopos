@extends('kasir/layout/main')
@section('title', 'Dashboard - Online Poin of Sales')
@section('container')
<div class="page-wrapper">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>SALES</h4>
                        <span>Halaman untuk melakukan Penjualan</span>
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
                <div class="col-lg-4">
                    <div class="box box-widget">
                        <div class="box-body">
                            <table>
                                <tr>
                                    <td style="vertical-align:top">
                                        <label for="date">Date</label>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                        <input type="date" id="date" value="<?=date('Y-m-d')?>" class="form-control">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="vertucal-align:top; width: 30%">
                                        <label for="user">Kasir</label>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" id="user" value="Input Fungsi disini" class="form-control" readonly>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="vertucal-align:top;">
                                        <label for="customer">Customer</label>
                                    </td>
                                    <td>
                                        <div>
                                            <select id="customer" class="form-group">
                                                <option value="">Umum</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="box box-widget">
                        <div class="box-body">
                            <table width="100%">
                                <tr>
                                    <td style="vertical-align:top; width:30%">
                                        <label for="barcode">Barcode</label>
                                    </td>
                                    <td>
                                        <div class="form-group input-group">
                                            <input type="hidden" id="item_id">
                                            <input type="hidden" id="item_id">
                                            <input type="hidden" id="item_id">
                                            <input type="text" id="barcode" class="form-control" autofocus>
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-item">
                                                    <i class="feather feather-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align:top;">
                                        <label for="qty">Qty</label>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="number" id="qty" value="1" min="1" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div>
                                            <button type="button" id="add_cart" class="btn btn-primary">
                                                <i class="feather icon-plus"></i> Add
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="box box-widget">
                        <div class="box-body">
                            <div align="right">
                                <h4>Invoice <b><span id="invoice">MP121212121</span></b></h4>
                                <h1><b><span id="grand_total2" style="font-size:50pt">0</span></b></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="box box-widget">
                        <div class="box-body table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Barcode</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th width="10%">Discount Item</th>
                                        <th width="15%">Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="cart_table">
                                    <tr>
                                        <td colspan="9" class="text-center"> Tidak Ada Item</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="box box-widget">
                        <table width="100%">
                            <tr>
                                <td style="vertical-align:top; width:30%">
                                    <label for="sub_total">Sub Total</label>
                                </td>

                                <td>
                                    <div class="form-group">
                                        <input type="number" id="sub_total" value="" class="form-control" readonly>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td style="vertical-align:top;">
                                    <label for="discount">Diskon</label>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="number" id="discount" value="0" min="0" class="form-control">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td style="vertical-align:top;">
                                    <label for="grand_total">Grand Total</label>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="number" id="grand_total" class="form-control" readonly>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="box box-widget">
                        <div class="box-body">
                            <table width="100%">
                                <tr>
                                    <td style="vertical-align:top; width:30%">
                                        <label for="cash">Cash</label>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="number" id="cash" value="0" min="0" class="form-control">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="vertical-align:top;">
                                        <label for="change">Change</label>
                                    </td>
                                    <td>
                                        <div>
                                            <input type="number" id="change" class="form-control" readonly>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="box box-widget">
                        <div class="box-body">
                            <table width="100%">
                                <tr>
                                    <td style="vertical-align:top;">
                                        <label for="note">Note</label>
                                    </td>
                                    <td>
                                        <div>
                                            <textarea id="note" rows="3" class="form-control"></textarea>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div>
                        <button id="cancel_payment" class="btn btn-flat btn-warning">
                            <i class="feather icon-refresh"></i>Cancel
                        </button><br><br>
                        <button id="process_payment" class="btn btn-flat btn-lg btn-success">
                            <i class="feather icon-paper-plane"></i> Process Payment
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-body end -->
</div>
@endsection()
