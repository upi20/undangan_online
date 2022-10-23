<?php

namespace App\Models\Undangan;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UndanganPesan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'undangan_pesans';
    const tableName = 'undangan_pesans';
    const image_folder = '/undangan/undangan_pesan';
    protected $appends = ['tanggal_str'];

    public function undangan()
    {
        return $this->hasOne(Undangan::class, 'id', 'undangan_id');
    }

    protected function nama(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ucfirst($value),
        );
    }

    public function getTanggalStrAttribute()
    {
        return Carbon::parse($this->attributes['tanggal'])
            ->diffForHumans();
    }
}
