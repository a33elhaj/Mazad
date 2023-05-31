<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class C_Invoice extends Model
{
    use HasFactory;
    protected $table = 'c__invoices';
    protected $primaryKey = 'id';
    protected $fillable =
    [
        'invoice_number',
        'invoice_date',
        'recive_receipt_no',
        'customer_id',
        'product_id',
        'quantity',
        'vat',
        'discount',
        'supplier_id'
    ];
}
