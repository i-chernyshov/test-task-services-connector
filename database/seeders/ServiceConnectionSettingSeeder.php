<?php

namespace Database\Seeders;

use App\Models\Connection;
use App\Models\Service;
use App\Models\ServiceConnection;
use Illuminate\Database\Seeder;

class ServiceConnectionSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $connections = Connection::pluck('id')->toArray();
        foreach (Service::all() as $key => $service) {
            /** @var ServiceConnection $serviceConnection */
            $serviceConnection = $service->connections()->create([
                'connection_id' => $connections[$key],
            ]);
            $serviceConnection->settings()->create([
                'name' => "setting $key",
                'value' => "value $key"
            ]);
        }
    }
}
