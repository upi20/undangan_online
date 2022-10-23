<?php

namespace App\Models\Undangan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UndanganGaleri extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $appends = ['file_url'];
    protected $primaryKey = 'id';
    protected $table = 'undangan_galeris';
    const tableName = 'undangan_galeris';
    const image_folder = '/undangan/galeri';

    public function undangan()
    {
        return $this->hasOne(Undangan::class, 'id', 'undangan_id');
    }

    public function getFileUrlAttribute()
    {
        $file = $this->attributes['file'];
        return $file ? url(self::image_folder . '/' . $file) : asset('assets/image/anggota_default.png');
    }
}
