<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $fillable = [
        'album_id',
        'album_type',
    ];

    public function users() {
        return $this->belongsTo(User::class);
    }
}
