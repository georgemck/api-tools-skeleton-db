<?php
namespace linket_service\V1\Rest\Status;

use StatusLib\Mapper;

class StatusResourceFactory
{
    public function __invoke($services)
    {
        return new StatusResource($services->get(Mapper::class));
        // return new StatusResource();
    }
}
