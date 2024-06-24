<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    protected $fillable = ['fist_name', 'last_name', 'email', 'phone', 'company_id',
    ];
    public function company()
    {
        return $this->belongsTo(Compny::class);
    }

    // public function post(): BelongsTo
    // {
    //     return $this->belongsTo(Compny::class);
    // }


//     public function compny(): BelongsTo
// {
//     return $this->belongsTo(Compny::class, 'company_id');
// }

    // public function employ()
    // {
    //     return $this->hasMany(Employee::class, 'company_id', 'id');
    // }
}
