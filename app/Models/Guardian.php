<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    use HasFactory;
    protected $table = 'guardian';
    protected $fillable = ['name', 'birth_date', 'phone_number'];
}
