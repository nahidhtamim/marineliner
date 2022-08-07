<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = [
        'tracking_id',
        'company_name',
        'company_address',
        'from_country',
        'from_port',
        'destination_country',
        'destination_port',
        'container_id',
        'goods',
        'slug',
    ];
}
