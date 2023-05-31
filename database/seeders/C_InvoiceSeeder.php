<?php

namespace Database\Seeders;

use App\Models\C_Invoice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class C_InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        C_Invoice::factory()->count(20)->create();
    }
}
