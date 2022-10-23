<?php

namespace App\Models\Undangan;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 'customers';
    const tableName = 'customers';
    const image_folder = '/undangan/customer';

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function undangans()
    {
        return $this->hasMany(Undangan::class, 'customer_id', 'id');
    }
}
