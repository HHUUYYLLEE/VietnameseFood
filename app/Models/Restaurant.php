<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $table = 'restaurants';
    protected $fillable = [
        'id', 'name', 'address', 'introduction', 'image_url',
        'type_id', 'number_of_tables', 'user_id', 'rating_avg', 'status', 'opening_time', 'closing_time',
        'legality', 'city_id', 'created_at', 'updated_at'
    ];
    protected $visible = [
        'id', 'name', 'address', 'introduction', 'image_url',
        'type_id', 'number_of_tables', 'user_id', 'rating_avg', 'status', 'opening_time', 'closing_time',
        'legality', 'city_id', 'created_at', 'updated_at'
    ];
    
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }
    public function dishes()
    {
        return $this->hasMany(Dish::class, 'restaurant_id', 'id');
    }
    public function booking()
    {
        return $this->hasMany(Booking::class, 'restaurant_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
