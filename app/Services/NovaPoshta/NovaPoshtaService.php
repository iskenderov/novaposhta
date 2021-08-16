<?php

namespace App\Services\NovaPoshta;

use App\Models\Area;
use App\Models\City;
use App\Models\Warehouse;
use App\Services\NovaPoshta\Api\NovaPoshtaApi;
use App\Services\NovaPoshta\Mapper\NovaposhtaMapper;
use Illuminate\Support\Collection;

class NovaPoshtaService
{
    private $api;

    public function __construct(NovaPoshtaApi $api)
    {
        $this->api = $api;
    }

    public function updateAreas()
    {
        $mapped = $this->api->getAreas()
            ->map(function ($item) {
                return NovaposhtaMapper::AreasMapper($item);
            });
        Area::upsert($mapped->toArray(), ['Ref']);
    }

    public function updateCities()
    {
        $this->api->getCities()
            ->chunk(1000)
            ->each(function (Collection $chunked) {
                $mapped = $chunked->map(function ($item) {
                    return NovaposhtaMapper::CitiesMapper($item);
                });
                City::upsert($mapped->toArray(), ['Ref']);
            });
    }

    public function updateWarehouses()
    {
        $this->api->getWarehouses()
            ->chunk(1000)
            ->each(function (Collection $chunked) {
                $mapped = $chunked->map(function ($item) {
                    return NovaposhtaMapper::warehousesMapper($item);
                });
                Warehouse::upsert($mapped->toArray(), ['Ref']);
            });
    }

}
