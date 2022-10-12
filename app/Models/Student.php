<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'kecamatan_id',
        'nik',
        'name',
        'password',
        'gender',
        'alamat',
        'email',
    ];  

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }


    protected $hidden = [
        //'password',
    ];
}
