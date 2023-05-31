<?php

namespace Database\Seeders;

use App\Models\S_Invoice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class S_InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        S_Invoice::factory()->count(20)->create();
    }
}
