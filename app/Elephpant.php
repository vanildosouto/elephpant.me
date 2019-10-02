<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Elephpant extends Model
{
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)
            ->as('heard')
            ->withTimestamps();
    }
}