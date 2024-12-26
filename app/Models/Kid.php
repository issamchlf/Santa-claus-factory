<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Kid extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name',
        'foto',
        'age',
        'gender', "boy", "girl",
        "atitude", "good", "bad",
        "country",
        'age range', ['0-3', '3-7', '7-12', '12-16', '16-18', '18+']
        
        
    ];

    public function Toy()
    {
        return $this->hasMany(Toy::class);
    }
}
