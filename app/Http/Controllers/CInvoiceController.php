<?php

namespace App\Http\Controllers;

use App\Models\C_Invoice;
use Illuminate\Http\Request;

class CInvoiceController extends Controller
{
    public function index()
    {
        $c_invoices = C_Invoice::all();
        return view ('c_invoices.index')->with('c_invoices', $c_invoices);
    }


    public function create()
    {
        return view('c_invoices.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        C_Invoice::create($input);
        return redirect('c_invoice')->with('flash_message', 'Customer Invoice Addedd!');
    }


    public function show($id)
    {
        $c_invoice = C_Invoice::find($id);
        return view('c_invoices.show')->with('c_invoice', $c_invoice);
    }


    public function edit($id)
    {
        $c_invoice = C_Invoice::find($id);
        return view('c_invoices.edit')->with('c_invoice', $c_invoice);
    }


    public function update(Request $request, $id)
    {
        $c_invoice = C_Invoice::find($id);
        $input = $request->all();
        $c_invoice->update($input);
        return redirect('cinvoice')->with('flash_message', 'Customer Invoice Updated!');
    }


    public function destroy($id)
    {
        C_Invoice::destroy($id);
        return redirect('cinvoice')->with('flash_message', 'Customer Invoic deleted!');
    }
}
