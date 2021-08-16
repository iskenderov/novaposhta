<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'Ref',
        'Description',
        'DescriptionRu',
        'Delivery',
        'Area',
        'SettlementType',
        'IsBranch',
        'CityID',
        'SpecialCashCheck',
    ];
    protected $casts = [
        'Delivery' => 'array',
    ];

    public function area()
    {
        return $this->belongsTo(Area::class, 'Ref', 'Area');
    }
}
