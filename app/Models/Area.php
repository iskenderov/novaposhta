<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Area extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'Ref',
        'AreasCenter',
        'DescriptionRu',
        'Description',
    ];

    public function center()
    {
        return $this->hasOne(City::class, 'Ref', 'AreasCenter');
    }

    public function cities()
    {
        return $this->hasMany(City::class, 'Area', 'Ref');
    }
}
