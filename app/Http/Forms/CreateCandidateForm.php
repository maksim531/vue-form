<?php

namespace App\Http\Forms;

use App\Models\Candidate;

class CreateCandidateForm
{
    public function create($data)
    {
        return Candidate::create($data);
    }
}

