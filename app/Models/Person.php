<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Person extends Model
{
    protected $fillable = [
        'name',
    ];

    public function getTable(): string
    {
        return 'persons';
    }

    public function contact(): MorphOne
    {
        return $this->morphOne(Contact::class, 'contactable');
    }
}
