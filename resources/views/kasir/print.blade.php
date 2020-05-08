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
            height: 500px;
        }

        .header {
            width: 100%;
            height: 90px;
            border-bottom: 2px dashed #7f8583;
        }

        .subheader {
            width: 100%;
            height: 50px;
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
            height: 50px;
        }

    </style>
</head>

<body>
    <div class="content">
        <div class="header">
            <p style="text-align: center; font-family: Merchant Copy; font-size: 25px; font-weight: bold;">Toko Berkah
                Makmur 1</p>
            <p style="text-align: center; font-family: Merchant Copy; font-size: 23px;">Jl. Japerejo-Banyurip Km. 04
                Desa Mlagen, Kec. Pamotan, Kab. Rembang</p>
        </div>
        <div class="subheader">
            <table width="100%" class="tb-header">
                <tr>
                    <td>08/05/2020 03:57</td>
                    <td style="text-align: right;">Kasir : Lucky Arif</td>
                </tr>
                <tr>
                    <td>TRX080520200003</td>
                    <td style="text-align: right;">Customer : Umum</td>
                </tr>
            </table>
        </div>
        <div class="center">
            <table width="100%" class="tb-center">
                <tr>
                    <td>Pop Mie</td>
                    <td style="text-align: right;">1</td>
                    <td width="17%" style="text-align: right;">5000</td>
                    <td width="17%" style="text-align: right;">5000</td>
                </tr>
                <tr>
                    <td>Indomie Soto Kuah</td>
                    <td style="text-align: right;">2</td>
                    <td width="17%" style="text-align: right;">2500</td>
                    <td width="17%" style="text-align: right;">5000</td>
                </tr>
            </table>
        </div>
        <div class="subcenter">
            <table width="100%" class="tb-subcenter">
                <tr>
                    <td></td>
                    <td></td>
                    <td width="17%" style="text-align: right;">Subtotal</td>
                    <td width="17%" style="text-align: right;">95000</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td width="17%" style="text-align: right; border-bottom: 2px dashed #7f8583;">Disc</td>
                    <td width="17%" style="text-align: right; border-bottom: 2px dashed #7f8583;">500</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td width="17%" style="text-align: right; border-bottom: 2px dashed #7f8583;">Total</td>
                    <td width="17%" style="text-align: right; border-bottom: 2px dashed #7f8583;">500</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td width="17%" style="text-align: right;">Bayar</td>
                    <td width="17%" style="text-align: right;">95000</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td width="17%" style="text-align: right;">Kembali</td>
                    <td width="17%" style="text-align: right;">500</td>
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
        setTimeout(window.close, 5);

    </script>
</body>

</html>
