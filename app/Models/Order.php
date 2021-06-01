<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id_driver', 'id_vehicle', 'status'
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'id');
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class, 'id');
    }
}
