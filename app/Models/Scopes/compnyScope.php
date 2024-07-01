<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class compnyScope implements Scope
{
    public function apply(Builder $builder, Model $model): void
    {
        if (!$builder->getQuery()->wheres) {
            $builder->whereNull('deleted_at');
        }
    }

    public function count(Builder $builder)
    {
        return $builder->withTrashed('deleted_at')->count();
    }
    public function countOnlyTrashed(Builder $builder)
    {
        return $builder->onlyTrashed()->count();
    }
}
