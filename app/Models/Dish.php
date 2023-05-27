<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;
    protected $table = 'dishes';
    protected $fillable = ['id', 'name', 'image_URL', 'introduction','TypeID', 'created_at', 'updated_at'];
    protected $visible = ['id', 'name', 'image_URL', 'introduction','TypeID', 'created_at', 'updated_at'];

    public function type()
    {
        return $this->belongsTo(Type::class, 'TypeID', 'id');
    }
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class, 'RestaurantID', 'id');
    }
    
}
