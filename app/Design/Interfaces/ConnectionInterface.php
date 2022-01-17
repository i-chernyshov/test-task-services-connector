<?php

namespace App\Design\Interfaces;

use App\Models\Service;
use App\Models\ServiceConnectionSetting;

interface ConnectionInterface
{
    public function requestSettings(Service $service): array;

    public function updateSettings(ServiceConnectionSetting $setting, array $validatedData): ?bool;
}
