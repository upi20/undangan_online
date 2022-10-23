<?php

namespace App\Models\Undangan;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Undangan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $appends = ['tanggal_str', 'hitung_mundur_js'];
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

    public function getTanggalStrAttribute()
    {
        Carbon::setLocale('id');
        return Carbon::parse($this->attributes['tanggal_hitung_mundur'])
            ->isoFormat("D MMMM Y");
    }

    public function getHitungMundurJsAttribute()
    {
        Carbon::setLocale('id');
        return Carbon::parse($this->attributes['tanggal_hitung_mundur'])
            ->format("Y-m-d\TH:i:s.000+07:00");
    }
}
