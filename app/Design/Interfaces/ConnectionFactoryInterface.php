<?php

namespace App\Design\Interfaces;

interface ConnectionFactoryInterface
{
    public function getInstance(string $connectionType): ConnectionInterface;
}
