@extends('layouts.app-master')
@section('content')
<html>

<head>
    <!--==================== CSS ====================-->
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" type="text/css">

    <!--==================== FONTS ====================-->
    <link href="{{ asset('assets/fonts/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <div style="direction: rtl;width: 95%; margin-left: 20px">
        <!--==================== NEW INVOICE ====================-->
        <div class="invoices">

            <div class="card__header">
                <div>
                    <h2 class="invoice__title">فاتورة عميل جديدة</h2>
                </div>
                <div>

                </div>
            </div>

            <div class="card__content">

                <br />
                <div
                    style=" margin: auto; width:80%; border: 5px outset rgba(11, 10, 11, 0.247); background-color: rgb(243, 249, 250); text-align: center;">
                    <h1 style="text-align:center;font-size:160%">مؤسسة عبدالعزيز السويدان</h1>
                    <p style="margin-left:90px;"><b>الرياض - البطحاء - شارع الغرابي</b></p>
                    <p style="margin-left:90px;"><b>رقم جوال: 0550324263</b></p>
                </div>

                <div class="card__content--header">

                    <div>
                        <strong>إسم العميل:</strong>
                        <span>الدوسري للخضر والفاكهة</span>
                        <br>
                        <strong>رقم الجوال:</strong>
                        <span>345516788666</span>
                        <br>
                        <strong>الرقم الضريبي:</strong>
                        <span>0593459777</span>
                        <br>
                        <strong>تاريخ الفاتورة:</strong>
                        <span>18/08/2023</span>
                    </div>
                    <div>
                        <p>
                        <h2>فاتورة ضريبية مبسطة</h2>
                        </p>
                        <strong>رقم الفاتورة:</strong>
                        <span>invo33277</span>
                    </div>
                    <div>
                        QR Generator
                    </div>
                </div>
                <br><br>
                <div style="margin: auto; overflow-x:auto; width:60%">
                    <table style="border-collapse: collapse;
                    border-spacing: 0;
                    width: 100%;
                    border: 1px solid #ddd;">
                        <tr>
                            <th>كود الصنف</th>
                            <th>سم الصنف</th>
                            <th>سعر الوحدة</th>
                            <th>الكمية</th>
                            <th>اإلجمالي</th>

                            <th>اسم المورد</th>
                            <th>Points</th>
                        </tr>
                        <tr>
                            <td>Jill</td>
                            <td>Smith</td>
                            <td>50</td>
                            <td>50</td>

                            <td>50</td>
                            <td>50</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>Eve</td>
                            <td>Jackson</td>
                            <td>94</td>
                            <td>94</td>

                            <td>94</td>
                            <td>94</td>
                            <td>94</td>
                        </tr>
                        <tr>
                            <td>Adam</td>
                            <td>Johnson</td>
                            <td>67</td>
                            <td>67</td>

                            <td>67</td>
                            <td>67</td>
                            <td>67</td>
                        </tr>
                    </table>
                </div>

                <div  style=" width:60%; border: 5px outset rgba(11, 10, 11, 0.247); background-color: rgb(243, 249, 250); text-align: center;">
                    <div style="text-align:right; padding: 2%">
                            <th><h1>ملخص الدفع</h1></th>
                            <br>

                            <td><strong>إجمالي غير شامل ضريبة القيمة المضافة:</strong></td>
                            <td><span>2200.00 ريال </span></td>
                            <br>


                            <td><strong>اجمالي الخصم:</strong></td>
                            <td><span>2200.00 ريال </span></td>
                            <br>


                            <td><strong>الرقم الضريبي:</strong></td>
                            <td><span>0593459777</span></td>
                            <br>


                            <td>   <strong>تاريخ الفاتورة:</strong></td>
                            <td><span>18/08/2023</span></td>
                            <br>
                    </div>
                </div>


            </div>
            <div class="card__header" style="margin-top: 40px;">
                <div>

                </div>
                <div>
                    <a class="btn btn-secondary">
                        Save
                    </a>
                </div>
            </div>

        </div>
    </div>
</body>

</html>


<script src="{{ asset('assets/js/app.js') }}"></script>
<style>
    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 1px solid #110505;
      background-color: #564b4b7b;
      color: #000000;
    }

    th, td {
      text-align: right;
      padding: 8px;
    }

    tr:nth-child(even){background-color: #eee6e6f2}
    </style>
@endsection
