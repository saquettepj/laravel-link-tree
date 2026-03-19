<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'name',
        'link',
        'user_id'
    ];

    /** @use HasFactory<\Database\Factories\LinkFactory> */
    use HasFactory;
}
