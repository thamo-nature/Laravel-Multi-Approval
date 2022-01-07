<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'body',
        'price',
        'location',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(USer::class);
    }
}
