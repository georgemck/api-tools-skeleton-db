<?php
namespace linket_service\V1\Rpc\Ping;

class PingControllerFactory
{
    public function __invoke($controllers)
    {
        return new PingController();
    }
}
