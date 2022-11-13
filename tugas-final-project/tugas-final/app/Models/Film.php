<?php

namespace App\Models;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Film extends Model
{
    use HasFactory;

    protected $table = "film";
    protected $fillable = ['judul','ringkasan','tahun','poster','genres_id'];

    public function genre(){
        return $this->belongsTo(Genre::class, 'genres_id', 'id');
    }
}
