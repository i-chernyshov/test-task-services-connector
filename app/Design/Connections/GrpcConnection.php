<?php

namespace App\Design\Connections;

use App\Design\Interfaces\ConnectionInterface;
use App\Models\Connection;
use App\Models\Service;
use App\Models\ServiceConnection;
use App\Models\ServiceConnectionSetting;

class GrpcConnection implements ConnectionInterface
{
    public function requestSettings(Service $service): array
    {
        /** @var ServiceConnection $serviceConnection */
        $serviceConnection = $service->connections()
            ->where('connection_id', Connection::grpc())
            ->first();
        return $serviceConnection->settings->toArray();
    }

    public function updateSettings(ServiceConnectionSetting $setting, array $validatedData): ?bool
    {
        return $setting->update($validatedData);
    }
}
