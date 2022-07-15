<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use App\Models\Skills;
use App\Models\SkillSets;
use App\Models\Candidates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EnergeekController extends Controller
{
    public function index()
    {
        $jobs = Jobs::all();
        $skills = Skills::all();

        return [
            'jobs' => $jobs,
            'skills' => $skills
        ];
    }

    public function store(Request $request)
    {
        return $request;
        $validator = Validator::make($request->all(), [
            'job' => 'required|exists:jobs,id',
            'phone' => 'required|numeric|unique:candidates,phone',
            'email' => 'required|string|email|unique:candidates,email',
            'birthdate' => 'nullable|date',
            'skills' => 'required|string|exists:skills,id'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()
            ], 400);
        }

        $candidate = Candidates::create($request->except('birthdate', 'skills'));

        if ($candidate) {
            return response()->json([
                'success' => 'Candidate created successfully'
            ], 200);

            foreach ($request->skills as $skill) {
                SkillSets::create([
                    'candidate_id' => $candidate->id,
                    'skill_id' => $skill
                ]);
            }
        }
    }
}
