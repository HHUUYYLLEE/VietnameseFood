<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;
    protected $table = 'dishes';
    protected $fillable = ['id', 'name', 'image_url', 'introduction','type_id', 'created_at', 'updated_at'];
    protected $visible = ['id', 'name', 'image_url', 'introduction','type_id', 'created_at', 'updated_at'];

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id', 'id');
    }
}
