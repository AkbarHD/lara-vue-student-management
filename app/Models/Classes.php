<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function sections()
    {
        // kesalahan disni harus di definisikan class_id tidak Section::class
        return $this->hasMany(Section::class, 'class_id');
    }
}
