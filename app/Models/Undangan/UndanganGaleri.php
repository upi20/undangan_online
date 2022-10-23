<?php

namespace App\Models\Undangan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UndanganGaleri extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'undangan_galeris';
    const tableName = 'undangan_galeris';
    const image_folder = '/undangan/undangan_galeri';

    public function undangan()
    {
        return $this->hasOne(Undangan::class, 'id', 'undangan_id');
    }
}
