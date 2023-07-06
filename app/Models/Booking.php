<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\AssignOp\Mod;

class Booking extends Model{
    use HasFactory;
    protected $table = 'booking';
    protected $fillable = [
        'id', 'user_id', 'restaurant_id', 'number_of_people', 
        'booking_date_time', 'status', 'created_at', 'updated_at'
    ];
    protected $visible = [
      'id', 'user_id', 'restaurant_id', 'number_of_people', 
      'booking_date_time', 'status', 'created_at', 'updated_at'
    ];

    public function restaurant(){
        return $this->belongsTo(Restaurant::class, 'restaurant_id', 'id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}