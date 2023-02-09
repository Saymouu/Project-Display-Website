<?php

namespace App\Http\Controllers;

use App\Models\project;

class post_controller extends Controller
{
    public function showProject(Project $project){
        return view('project',compact('project'));
    }
}
