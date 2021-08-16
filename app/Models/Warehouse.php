<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Warehouse extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'Ref',
        'SiteKey',
        'Description',
        'DescriptionRu',
        'ShortAddress',
        'ShortAddressRu',
        'Phone',
        'TypeOfWarehouse',
        'Number',
        'CityRef',
        'Longitude',
        'Latitude',
        'PostFinance',
        'BicycleParking',
        'PaymentAccess',
        'POSTerminal',
        'InternationalShipping',
        'SelfServiceWorkplacesCount',
        'TotalMaxWeightAllowed',
        'PlaceMaxWeightAllowed',
        'SendingLimitationsOnDimensions',
        'ReceivingLimitationsOnDimensions',
        'Reception',
        'Delivery',
        'Schedule',
        'DistrictCode',
        'WarehouseStatus',
        'WarehouseStatusDate',
        'CategoryOfWarehouse',
        'Direct',
        'RegionCity',
        'WarehouseForAgent',
        'MaxDeclaredCost',
        'PostomatFor',
    ];
    protected $casts = [
        'SendingLimitationsOnDimensions' => 'array',
        'ReceivingLimitationsOnDimensions' => 'array',
        'Reception' => 'array',
        'Delivery' => 'array',
        'Schedule' => 'array',
    ];
}
