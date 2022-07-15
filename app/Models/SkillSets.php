<?php

namespace App\Models;

use finfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SkillSets extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function candidates()
    {
        return $this->belongsToMany(Candidates::class, 'candidate_id');
    }

    public function skills()
    {
        return $this->belongsToMany(Skills::class, 'skill_id');
    }
}
