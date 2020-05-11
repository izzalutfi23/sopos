<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printt</title>
    <link href="//db.onlinewebfonts.com/c/4145587a822071d1d66f5201f5233f42?family=Merchant+Copy" rel="stylesheet"
        type="text/css" />
    <style type="text/css">
        .content {
            width: 50%;
            height: auto;
        }

        .header {
            width: 100%;
            height: auto;
            border-bottom: 2px dashed #7f8583;
        }

        .subheader {
            width: 100%;
            height: auto;
            border-bottom: 2px solid#79807e;
        }

        .tb-header {
            font-family: Merchant Copy;
            font-size: 25px;
            margin-top: 5px;
        }

        .tb-center {
            font-family: Merchant Copy;
            font-size: 20px;
            margin-top: 5px;
            margin-bottom: 5px;
        }

        .center {
            width: 100%;
            height: auto;
            border-bottom: 2px dashed #7f8583;
        }

        .subcenter {
            width: 100%;
            height: auto;
            border-bottom: 2px dashed #7f8583;
        }

        .tb-subcenter {
            font-family: Merchant Copy;
            font-size: 20px;
            margin-top: 5px;
            margin-bottom: 5px;
        }

        .tb-subcenter td {
            padding-bottom: 7px;
            padding-top: 7px;
        }

        .footer {
            width: 100%;
            height: auto;
        }

    </style>
</head>

<body>
    <div class="content">
        <div class="header">
            <p style="text-align: center; font-family: Merchant Copy; font-size: 25px; font-weight: bold;">{{$print->cabang->nama_toko}}</p>
            <p style="text-align: center; font-family: Merchant Copy; font-size: 23px;">{{$print->cabang->alamat}}</p>
        </div>
        <div class="subheader">
            <table width="100%" class="tb-header">
                <tr>
                    <td>{{$print->tgl()}}</td>
                    <td style="text-align: right;">Kasir : {{$print->karyawan->nama_karyawan}}</td>
                </tr>
                <tr>
                    <td>{{$print->faktur}}</td>
                    <td style="text-align: right;">Customer : {{$print->customer}}</td>
                </tr>
            </table>
        </div>
        <div class="center">
            <table width="100%" class="tb-center">
                @php
                    $json = json_decode($print->item);
                @endphp
                @foreach($json as $data)
                <tr>
                    <td>{{$data->nama_produk}}</td>
                    <td style="text-align: right;">{{$data->qty}}</td>
                    <td width="17%" style="text-align: right;">{{$data->harga}}</td>
                    <td width="17%" style="text-align: right;">{{$data->qty*$data->harga}}</td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="subcenter">
            <table width="100%" class="tb-subcenter">
                <tr>
                    <td></td>
                    <td></td>
                    <td width="17%" style="text-align: right;">Subtotal</td>
                    <td width="17%" style="text-align: right;">{{$print->total}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td width="17%" style="text-align: right; border-bottom: 2px dashed #7f8583;">Disc</td>
                    <td width="17%" style="text-align: right; border-bottom: 2px dashed #7f8583;">{{$print->diskon}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td width="17%" style="text-align: right; border-bottom: 2px dashed #7f8583;">Total</td>
                    <td width="17%" style="text-align: right; border-bottom: 2px dashed #7f8583;">{{$print->total_akhir}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td width="17%" style="text-align: right;">Bayar</td>
                    <td width="17%" style="text-align: right;">{{$print->bayar}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td width="17%" style="text-align: right;">Kembali</td>
                    <td width="17%" style="text-align: right;">{{$print->kembalian}}</td>
                </tr>
            </table>
        </div>
        <div class="footer">
            <p style="text-align: center; font-family: Merchant Copy; font-size: 23px;">--- Terima Kasih ---<br><br>
            www.sopos.com
            </p>
        </div>
    </div>

    <script type="text/javascript">
        window.print();
        setTimeout(window.close, 5000);
    </script>
</body>

</html>
