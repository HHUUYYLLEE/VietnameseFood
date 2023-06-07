<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
    public function restaurants():BelongsToMany
    {
        return $this->belongsToMany(Restaurant::class, 'restaurant_menus', 'dish_id', 'restaurant_id');
    }
}
