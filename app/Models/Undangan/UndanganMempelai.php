<?php

namespace App\Models\Undangan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UndanganMempelai extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $appends = ['foto_url'];
    protected $primaryKey = 'id';
    protected $table = 'undangan_mempelais';
    const tableName = 'undangan_mempelais';
    const image_folder = '/undangan/mempelai';

    public function undangan()
    {
        return $this->hasOne(Undangan::class, 'id', 'undangan_id');
    }

    public function getFotoUrlAttribute()
    {
        $foto = $this->attributes['foto'];
        return $foto ? url(self::image_folder . '/' . $foto) : asset('assets/image/anggota_default.png');
    }
}
