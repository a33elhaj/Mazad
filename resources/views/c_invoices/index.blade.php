@extends('layouts.app-master')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>كل فواتير العملاء</h3>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/cinvoice/create') }}" class="btn btn-success btn-sm" title="Add New Customer Invoice">
                            <strong>إضافة فاتورة عميل جديدة</strong>
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>invoice number</th>
                                        <th>invoice date</th>
                                        <th>recive receipt no</th>
                                        <th>customer id</th>
                                        <th>product id</th>
                                        <th>quantity</th>
                                        <th>vat</th>
                                        <th>discount</th>
                                        <th>supplier id</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($c_invoices as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->invoice_number }}</td>
                                        <td>{{ $item->invoice_date }}</td>
                                        <td>{{ $item->recive_receipt_no }}</td>
                                        <td>{{ $item->customer_id }}</td>
                                        <td>{{ $item->product_id }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->vat }}</td>
                                        <td>{{ $item->discount }}</td>
                                        <td>{{ $item->supplier_id }}</td>

                                        <td>
                                            <a href="{{ url('/cinvoice/' . $item->id) }}" title="View Customer Invoice"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/cinvoice/' . $item->id . '/edit') }}" title="Edit Customer Invoice"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/cinvoice' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
