<?php

namespace App\Services\NovaPoshta\Api;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class NovaPoshtaApi
{
    private $api_key;
    private const JSON = 'json/';
    private $connector;

    public function __construct()
    {
        $this->api_key = config('novaposhta.api_key');
        $this->connector = new NovaPoshtaConnector();
    }

    public function getWarehouses(): Collection
    {
        return $this->doRequest('AddressGeneral', 'getWarehouses', ['Language' => 'ru']);
    }

    public function getSettlements(): Collection
    {
        return $this->doRequest('AddressGeneral', 'getSettlements', ['Warehouse' => 1,]);
    }

    public function getAreas(): Collection
    {
        return $this->doRequest('Address', 'getAreas');
    }

    public function getCities(): Collection
    {
        return $this->doRequest('Address', 'getCities');
    }


    private function doRequest(string $modelName, string $calledMethod, array $methodProperties = [])
    {
        $request = [];
        $request['apiKey'] = $this->api_key;
        $request['modelName'] = $modelName;
        $request['calledMethod'] = $calledMethod;
        if (count($methodProperties) > 0) {
            $request['methodProperties'] = $methodProperties;
        }
        return $this->connector->execute($request);
    }


}
