<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'desc', 'id_user'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
