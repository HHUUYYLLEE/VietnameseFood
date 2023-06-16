<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = 'citys';
    protected $fillable = ['id', 'content', 'created_at', 'updated_at'];
    protected $visible = ['id', 'content', 'created_at', 'updated_at'];
}
