<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compny extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'logo',
    ];

    // public function employ()
    // {
    //     return $this->hasMany(Employee::class, 'company_id', 'id');
    // }
}
