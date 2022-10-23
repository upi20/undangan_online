<?php

namespace App\Models\Undangan;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UndanganAcara extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $appends = ['tanggal_str', 'waktu_str'];
    protected $primaryKey = 'id';
    protected $table = 'undangan_acaras';
    const tableName = 'undangan_acaras';
    const image_folder = '/undangan/undangan_acara';

    public function undangan()
    {
        return $this->hasOne(Undangan::class, 'id', 'undangan_id');
    }

    public function getTanggalStrAttribute()
    {
        Carbon::setLocale('id');
        return Carbon::parse($this->attributes['tanggal'])
            ->isoFormat("dddd, D MMMM Y");
    }

    public function getWaktuStrAttribute()
    {
        Carbon::setLocale('id');
        return Carbon::parse($this->attributes['tanggal'])
            ->format("H:i");
    }
}
