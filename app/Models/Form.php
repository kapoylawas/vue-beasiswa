<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'berkas',
    ];

    /**
     * student
     *
     * @return void
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    protected function berkas(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/storage/berkas/' . $value),
        );
    }
}
