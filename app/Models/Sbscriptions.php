<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Sbscriptions extends Model
{
    use HasFactory;
    protected $fillable = ['plan', 'price'];
}
