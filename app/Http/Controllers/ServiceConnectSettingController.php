<?php

namespace App\Http\Controllers;

use App\Design\Interfaces\ConnectionFactoryInterface;
use App\Http\Requests\ServiceConnectSettingUpdateRequest;
use App\Models\ServiceConnection;
use App\Models\ServiceConnectionSetting;
use Illuminate\Http\JsonResponse;

class ServiceConnectSettingController extends Controller
{
    public function show(
        ServiceConnection          $serviceConnection,
        ConnectionFactoryInterface $connectionFactory
    ): JsonResponse
    {

        return response()->json([
            'settings' => $connectionFactory->getInstance($serviceConnection->connection->name)
                ->requestSettings($serviceConnection->service)
        ]);
    }

    public function update(
        ServiceConnectSettingUpdateRequest $request,
        ServiceConnection                  $serviceConnection,
        ServiceConnectionSetting           $setting,
        ConnectionFactoryInterface         $connectionFactory
    ): JsonResponse
    {
        return response()->json([
            'update' => $connectionFactory->getInstance($serviceConnection->connection->name)
                ->updateSettings($setting, $request->validated())
        ]);
    }
}
