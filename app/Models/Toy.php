<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toy extends Model
{
    use HasFactory;

    protected $table = 'toy';
    
    protected $fillable = [
        'name',
        'description',
        'image',
        'minimum_age_id'
    ];

    public function minimumAge()
    {
        return $this->belongsTo(MinimumAge::class, 'minimum_age_id');
    }
    public function Kids()
    { 
        return $this->belongsToMany(Kid::class)->withTimestamps();
    }
}
