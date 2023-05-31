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

                <br/>
                <div style=" margin: auto; width:80%; border: 5px outset rgba(11, 10, 11, 0.247); background-color: rgb(243, 249, 250); text-align: center;">
                    <h1 style="text-align:center;font-size:160%">مؤسسة عبدالعزيز السويدان</h1>
                    <p style="margin-left:90px;"><b>الرياض - البطحاء - شارع الغرابي</b></p>
                    <p style="margin-left:90px;"><b>رقم جوال: 0550324263</b></p>
                </div>

                <div class="card__content--header">

                    <div>
                        <p class="my-1">إسم العميل</p>
                        <select name="" id="" class="input">
                            <option value="">cust 1</option>
                        </select>
                        <br/><br/>
                        <p>الرقم الضريبي</p>
                        <input class="input" disabled type="text">
                    </div>
                    <div>
                        <p class="my-1">تاريخ الفاتورة</p>
                        <input id="date" placeholder="dd-mm-yyyy" type="date" class="input">
                        <!---->
                        <p class="my-1">تاريخ الاستحقاق</p>
                        <input id="due_date" type="date" class="input">
                    </div>
                    <div>
                        <p class="my-1">رقم الفاتورة</p>
                        <input type="text" class="input">
                        <p class="my-1">المرجع على الدفتر</p>
                        <input type="text" class="input">
                    </div>
                </div>
                <br><br>
                <div class="table">

                    <div class="table--heading2">
                        <th>#</th>
                        <th>إسم الصنف</th>
                        <th>سعر الوحدة</th>
                        <th>الكمية</th>
                        <th>جملة</th>
                        <th>اسم المورد</th>
                    </div>

                    <!-- item 1 -->
                    <div class="table--items2">
                        <p>3  </p>
                        <p>
                            <input type="text" class="input">
                        </p>
                        <p>
                            <input type="text" class="input">
                        </p>
                        <p>
                            $ 10000
                        </p>
                        <p style="color: red; font-size: 24px;cursor: pointer;">
                            &times;
                        </p>
                    </div>
                    <div style="padding: 10px 30px !important;">
                        <button class="btn btn-sm btn__open--modal">Add New Line</button>
                    </div>
                </div>

                <div class="table__footer">
                    <div class="document-footer">
                        <p>Terms and Conditions</p>
                        <textarea cols="50" rows="7" class="textarea"></textarea>
                    </div>
                    <div>
                        <div class="table__footer--subtotal">
                            <p>Sub Total</p>
                            <span>$ 1000</span>
                        </div>
                        <div class="table__footer--discount">
                            <p>Discount</p>
                            <input type="text" class="input">
                        </div>
                        <div class="table__footer--total">
                            <p>Grand Total</p>
                            <span>$ 1200</span>
                        </div>
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
