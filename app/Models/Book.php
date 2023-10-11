<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'isbn',
        'judul',
        'halaman',
        'kategori',
        'penerbit',
    ];

    protected $primaryKey = 'isbn';

    public function getRouteKeyName(): string{
        return 'isbn';
    }
}
