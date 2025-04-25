<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory;

    protected $table = 'm_level'; // sesuaikan dengan nama tabel level kamu
    protected $primaryKey = 'level_id'; // primary key dari tabel
    public $timestamps = false; // matikan kalau tabelnya tidak punya created_at & updated_at

    protected $fillable = ['level_id', 'nama_level']; // sesuaikan kolomnya
}
