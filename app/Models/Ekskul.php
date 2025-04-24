<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekskul extends Model
{
    use HasFactory;

    protected $table = 'ekskuls';
    protected $primaryKey = 'id_ekskul';
    protected $fillable = ['nama_ekskul', 'password'];

    public function pihs()
    {
        return $this->hasMany(PIH::class, 'id_ekskul');
    }

    public function absensis()
    {
        return $this->hasMany(Absensi::class, 'id_ekskul');
    }
}
