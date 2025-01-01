<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Kid extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'foto',
        'age',
        'age_range',
        'gender',
        'country',
        'atitude',
    ];

    public function Toys()
    {
        return $this->belongsToMany(Toy::class)->withTimestamps();
    }
}
