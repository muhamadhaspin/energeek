<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jobs extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function candidates()
    {
        return $this->hasMany(Candidates::class, 'job_id');
    }
}
