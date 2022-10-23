<?php

namespace App\Models\Undangan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UndanganAmplopLayanan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'undangan_amplop_layanans';
    const tableName = 'undangan_amplop_layanans';
    const image_folder = '/undangan/undangan_amplop_layanan';

    public function amplop()
    {
        return $this->hasMany(UndanganAmplop::class, 'layanan_id', 'id');
    }
}
