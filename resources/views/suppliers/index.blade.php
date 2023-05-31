@extends('layouts.app-master')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel 9 Supplier</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/supplier/create') }}" class="btn btn-success btn-sm" title="Add New Supplier">
                            Add New Supplier
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Supplier code</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Reg Number</th>
                                        <th>Vat Number</th>
                                        <th>Address</th>
                                        <th>quantity</th>
                                        <th>almuaref name</th>
                                        <th>almuaref phone</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($suppliers as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->supplier_code }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->reg_number }}</td>
                                        <td>{{ $item->vat_number }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->almuaref_name }}</td>
                                        <td>{{ $item->almuaref_phone }}</td>

                                        <td>
                                            <a href="{{ url('/supplier/' . $item->id) }}" title="View Supplier"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/supplier/' . $item->id . '/edit') }}" title="Edit Supplier"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/supplier' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Supplier" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
