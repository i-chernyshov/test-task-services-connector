<?php

namespace Database\Seeders;

use App\Models\Connection;
use Illuminate\Database\Seeder;

class ConnectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = ['grpc', 'http'];
        foreach ($items as $name) {
            Connection::updateOrCreate(compact('name'));
        }
    }
}
