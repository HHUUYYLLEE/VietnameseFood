<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $table = 'restaurants';
    protected $fillable = [
        'id', 'name', 'address', 'introduction', 'image_URL',
        'typeId', 'Number_of_tables', 'UserID', 'RatingAvg', 'Status', 'open_time', 'close_time',
        'legality', 'CityID', 'created_at', 'updated_at'
    ];
    protected $visible = [
        'id', 'name', 'address', 'introduction', 'image_URL',
        'typeId', 'Number_of_tables', 'UserID', 'RatingAvg', 'Status', 'open_time', 'close_time',
        'legality', 'CityID', 'created_at', 'updated_at'
    ];
    
    public function city()
    {
        return $this->belongsTo(City::class, 'CityID', 'id');
    }
    public function type()
    {
        return $this->belongsTo(Type::class, 'TypeID', 'id');
    }
    public function dishes()
    {
        return $this->hasMany(Dish::class, 'RestaurantID', 'id');
    }
    public function booking()
    {
        return $this->hasMany(Booking::class, 'RestaurantID', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'UserID', 'id');
    }
}
