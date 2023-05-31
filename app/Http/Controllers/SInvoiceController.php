<?php

namespace App\Http\Controllers;

use App\Models\S_Invoice;
use Illuminate\Http\Request;

class SInvoiceController extends Controller
{
    public function index()
    {
        $s_invoices = S_Invoice::all();
        return view ('s_invoices.index')->with('s_invoices', $s_invoices);
    }


    public function create()
    {
        return view('s_invoices.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        S_Invoice::create($input);
        return redirect('sinvoice')->with('flash_message', 'Supplier Invoice Addedd!');
    }


    public function show($id)
    {
        $s_invoice = S_Invoice::find($id);
        return view('s_invoices.show')->with('s_invoice', $s_invoice);
    }


    public function edit($id)
    {
        $s_invoice = S_Invoice::find($id);
        return view('s_invoices.edit')->with('s_invoice', $s_invoice);
    }


    public function update(Request $request, $id)
    {
        $s_invoice = S_Invoice::find($id);
        $input = $request->all();
        $s_invoice->update($input);
        return redirect('sinvoice')->with('flash_message', 'Supplier Invoice Updated!');
    }


    public function destroy($id)
    {
        S_Invoice::destroy($id);
        return redirect('sinvoice')->with('flash_message', 'Supplier Invoic deleted!');
    }
}
