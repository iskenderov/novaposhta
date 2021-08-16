<?php

namespace App\Services\NovaPoshta\Mapper;

class NovaposhtaMapper
{
    public static function warehousesMapper(object $data): array
    {
        return [
            'Ref' => $data->Ref,
            'SiteKey' => $data->SiteKey ?? null,
            'Description' => $data->Description ?? null,
            'DescriptionRu' => $data->DescriptionRu ?? null,
            'ShortAddress' => $data->ShortAddress ?? null,
            'ShortAddressRu' => $data->ShortAddressRu ?? null,
            'Phone' => $data->Phone ?? null,
            'TypeOfWarehouse' => $data->TypeOfWarehouse ?? null,
            'Number' => $data->Number ?? null,
            'CityRef' => $data->CityRef ?? null,
            'Longitude' => $data->Longitude ?? null,
            'Latitude' => $data->Latitude ?? null,
            'PostFinance' => $data->PostFinance ?? null,
            'BicycleParking' => $data->BicycleParking ?? null,
            'PaymentAccess' => $data->PaymentAccess ?? null,
            'POSTerminal' => $data->POSTerminal ?? null,
            'InternationalShipping' => $data->InternationalShipping ?? null,
            'SelfServiceWorkplacesCount' => $data->SelfServiceWorkplacesCount ?? null,
            'TotalMaxWeightAllowed' => $data->TotalMaxWeightAllowed ?? null,
            'PlaceMaxWeightAllowed' => $data->PlaceMaxWeightAllowed ?? null,
            'SendingLimitationsOnDimensions' => json_encode($data->SendingLimitationsOnDimensions ?? null),
            'ReceivingLimitationsOnDimensions' => json_encode($data->ReceivingLimitationsOnDimensions ?? null),
            'Reception' => json_encode($data->Reception ?? null),
            'Delivery' => json_encode($data->Delivery ?? null),
            'Schedule' => json_encode($data->Schedule ?? null),
            'DistrictCode' => $data->DistrictCode ?? null,
            'WarehouseStatus' => $data->WarehouseStatus ?? null,
            'WarehouseStatusDate' => $data->WarehouseStatusDate ?? null,
            'CategoryOfWarehouse' => $data->CategoryOfWarehouse ?? null,
            'Direct' => $data->Direct ?? null,
            'RegionCity' => $data->RegionCity ?? null,
            'WarehouseForAgent' => $data->WarehouseForAgent ?? null,
            'MaxDeclaredCost' => $data->MaxDeclaredCost ?? null,
            'PostomatFor' => $data->PostomatFor ?? null,
        ];
    }

    public static function CitiesMapper(object $data): array
    {
        return [
            'Ref' => $data->Ref,
            'Description' => $data->Description ?? null,
            'DescriptionRu' => $data->DescriptionRu ?? null,
            'Delivery' => self::convertDelivery($data),
            'Area' => $data->Area ?? null,
            'SettlementType' => $data->SettlementType ?? null,
            'IsBranch' => $data->IsBranch ?? null,
            'CityID' => $data->CityID ?? null,
            'SpecialCashCheck' => $data->SpecialCashCheck ?? null,
        ];
    }

    private static function convertDelivery(object $data)
    {
        return json_encode([
            'Delivery1' => $data->Delivery1 ?? null,
            'Delivery2' => $data->Delivery2 ?? null,
            'Delivery3' => $data->Delivery3 ?? null,
            'Delivery4' => $data->Delivery4 ?? null,
            'Delivery5' => $data->Delivery5 ?? null,
            'Delivery6' => $data->Delivery6 ?? null,
            'Delivery7' => $data->Delivery7 ?? null,
        ]);
    }

    public static function AreasMapper(object $data)
    {
        return [
            'Ref' => $data->Ref,
            'AreasCenter' => $data->AreasCenter ?? null,
            'Description' => $data->Description ?? null,
            'DescriptionRu' => $data->DescriptionRu ?? null,
        ];
    }
}
