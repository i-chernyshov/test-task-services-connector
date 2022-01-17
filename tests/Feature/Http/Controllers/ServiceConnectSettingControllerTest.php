<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceConnection;
use App\Models\ServiceConnectionSetting;
use Tests\TestCase;

class ServiceConnectSettingControllerTest extends TestCase
{
    public function test_show()
    {
        foreach (Service::all() as $service) {
            /** @var ServiceConnection $connection */
            $connection = $service->connections()->first();
            $response = $this->get("/service/$connection->id");
            $response->assertStatus(200);
            dump($service->name, $response->json());
            $response->assertJsonStructure(['settings']);
        }
    }

    public function test_update()
    {
        foreach (Service::all() as $key => $service) {
            /** @var ServiceConnection $connection */
            $connection = $service->connections()->first();
            /** @var ServiceConnectionSetting $setting */
            $setting = $connection->settings()->first();
            $response = $this->post("/service/$connection->id/$setting->id", [
                'name' => "changed setting $key",
                'value' => "changed value $key",
            ]);
            $response->assertStatus(200);
            dump($service->name, $connection->settings->toArray(), $response->json());
            $response->assertJson(['update' => true]);
        }
    }
}
