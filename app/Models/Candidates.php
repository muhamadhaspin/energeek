<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidates extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function job()
    {
        return $this->belongsTO(Jobs::class, 'job_id');
    }

    public function skillSets()
    {
        return $this->hasAppended(SkillSets::class, 'candidate_id');
    }
}
