<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'iduser',
        'idquan',
        'review',
        'createtime'
    ];
    public $timestamps = false;
    protected $table = "reviews";
    
}
