<?php

namespace App\Design\Factories;

use App\Design\Connections\GrpcConnection;
use App\Design\Connections\HttpConnection;
use App\Design\Interfaces\ConnectionFactoryInterface;
use App\Design\Interfaces\ConnectionInterface;
use Exception;

class ConnectionFactory implements ConnectionFactoryInterface
{
    /**
     * @throws Exception
     */
    public function getInstance(string $connectionType): ConnectionInterface
    {
        switch ($connectionType) {
            case 'grpc':
                return new GrpcConnection();
            case 'http':
                return new HttpConnection();
            default:
                throw new Exception('undefined connection type');
        }
    }
}
