<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view ('suppliers.index')->with('suppliers', $suppliers);
    }
    /*
    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Customer::create($input);
        return redirect('customer')->with('flash_message', 'Customer Addedd!');
    }


    public function show($id)
    {
        $customer = Customer::find($id);
        return view('customers.show')->with('customers', $customer);
    }


    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customers.edit')->with('customers', $customer);
    }


    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $input = $request->all();
        $customer->update($input);
        return redirect('customer')->with('flash_message', 'Customer Updated!');
    }


    public function destroy($id)
    {
        Customer::destroy($id);
        return redirect('customer')->with('flash_message', 'Customer deleted!');
    }
    */
}
