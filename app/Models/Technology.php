<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

    // Allocate the relation with projects
    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
