<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;



    protected $fillable = [
        'songName',
        'artist',
        'duration',
        'year',
        'img',
        'album_id',
    ];
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
