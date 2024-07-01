<?php

namespace App\Models;

use App\Models\Scopes\compnyScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;


class Compny extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'email',
        'logo',
    ];

    protected static function booted()
    {
        static::addGlobalScope(new compnyScope());
    }




}
