<?php

namespace App\Models\Undangan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UndanganAmplop extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'undangan_amplops';
    const tableName = 'undangan_amplops';
    const image_folder = '/undangan/undangan_amplop';

    public function undangan()
    {
        return $this->hasOne(Undangan::class, 'id', 'undangan_id');
    }

    public function layanan()
    {
        return $this->hasOne(UndanganAmplopLayanan::class, 'id', 'layanan_id');
    }
}
