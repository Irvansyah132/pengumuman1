<?php

namespace App\Models;

use Iluminate\Database\Elloquent\Factories\HasFactory
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    protected $table = 'pengumuman';

    protected $fillable = [
        'judul',
        'isi',
        'tanggal_publikasi',
        'status_publikasi',

    ];

    protected $casts = [
        'tanggal_publikasi' => 'date',
        'status_publikasi', => 'boolean',
    ];
}
