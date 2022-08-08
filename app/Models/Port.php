<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Port extends Model
{
    use HasFactory;

    protected $table = 'ports';

    protected $fillable = [
        'name',
        'country_id',
        'slug',
    ];


    public function country_info()
    {
        return $this->belongsTo(Country::class,'country_id','id');
    }
}
