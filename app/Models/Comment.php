<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $fillable = ['id', 'user_id', 'restaurant_id', 'comment', 'comment_date', 'rating', 'image_url','date', 'created_at', 'updated_at'];
    protected $visible = ['id', 'user_id', 'restaurant_id', 'comment', 'comment_date', 'rating', 'image_url','date', 'created_at', 'updated_at'];

    //relation
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id', 'id');
    }
}
