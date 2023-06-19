<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
    public function dishs():BelongsToMany
    {
        return $this->belongsToMany(Dish::class, 'restaurant_menus', 'restaurant_id', 'dish_id');
    }
    public function booking()
    {
        return $this->hasMany(Booking::class, 'restaurant_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'restaurant_id', 'id');
    }
}
