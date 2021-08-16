<?php

namespace Tests\Unit;


use App\Services\NovaPoshta\Api\NovaPoshtaConnector;
use Illuminate\Support\Collection;
use Tests\TestCase;

class NovaPoshtaConnectorTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function test_getAreasFromApi()
    {
        $req = [
            'apiKey' => config('novaposhta.api_key'),
            'modelName' => 'Address',
            'calledMethod' => 'getAreas',
        ];
        $expect = [
            "Ref" => "71508128-9b87-11de-822f-000c2965ae0e",
            "AreasCenter" => "db5c88b7-391c-11dd-90d9-001a92567626",
            "DescriptionRu" => "АРК",
            "Description" => "АРК",
        ];
        $connector = new NovaPoshtaConnector();
        $response = $connector->execute($req);

        $this->assertInstanceOf(Collection::class, $connector->execute($req));

        $this->assertEquals(36, strlen($response->first()->Ref));

    }

    public function test_getCitiesFromApi()
    {
        $req = [
            'apiKey' => config('novaposhta.api_key'),
            'modelName' => 'Address',
            'calledMethod' => 'getCities',
        ];
        $connector = new NovaPoshtaConnector();
        $response = $connector->execute($req);

        $this->assertInstanceOf(Collection::class, $response);

        $this->assertEquals(36, strlen($response->first()->Ref));
    }

    public function test_getWarehousesFromApi()
    {
        $req = [
            'apiKey' => config('novaposhta.api_key'),
            'modelName' => 'AddressGeneral',
            'calledMethod' => 'getWarehouses',
        ];
        $connector = new NovaPoshtaConnector();
        $response = $connector->execute($req);

        $this->assertInstanceOf(Collection::class, $response);

        $this->assertEquals(36, strlen($response->first()->Ref));
    }

}
