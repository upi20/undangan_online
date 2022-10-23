<?php

namespace App\Models\Undangan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UndanganGaleri extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $appends = ['file_url', 'file_attr'];
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

    public function getFileAttrAttribute()
    {
        $file = $this->attributes['file'];
        $file = $file ? ('.' . self::image_folder . '/' . $file) : null;
        $results = [
            'height' => null,
            'width' => null,
            'mime' => null,
            'bits' => null,
            'channels' => null,
        ];

        $cek = file_exists($file);


        if ($cek) {
            $result = getimagesize($file);
            $results['width'] = $result[0];
            $results['height'] = $result[1];
            $results['bits'] = $result['bits'];
            $results['channels'] = $result['channels'];
            $results['mime'] = $result['mime'];
            return (object)$results;
        } else {
            return (object)$results;
        }
    }
}
