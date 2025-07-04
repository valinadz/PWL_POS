<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory;

    protected $table = 'm_level'; // Sesuai migrasi
    protected $primaryKey = 'level_id'; // Sesuai migrasi
    public $timestamps = false; // Kalau tabelnya nggak pakai created_at & updated_at

    protected $fillable = ['level_kode', 'level_nama']; // Kolom yang boleh diisi
}
