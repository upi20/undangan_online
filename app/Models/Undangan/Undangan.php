<?php

namespace App\Models\Undangan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Undangan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'undangans';
    const tableName = 'undangans';
    const image_folder = '/undangan/undangan';

    public function acara()
    {
        return $this->hasMany(UndanganAcara::class, 'undangan_id', 'id');
    }

    public function amplop()
    {
        return $this->hasMany(UndanganAmplop::class, 'undangan_id', 'id');
    }

    public function dikunjungi()
    {
        return $this->hasMany(UndanganDikunjungi::class, 'undangan_id', 'id');
    }

    public function galeri()
    {
        return $this->hasMany(UndanganGaleri::class, 'undangan_id', 'id');
    }

    public function mempelai()
    {
        return $this->hasMany(UndanganMempelai::class, 'undangan_id', 'id');
    }

    public function pesan()
    {
        return $this->hasMany(UndanganPesan::class, 'undangan_id', 'id');
    }
}
