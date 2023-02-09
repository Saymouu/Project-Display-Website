<?php

namespace App\Http\Controllers;

use App\Models\category as ModelsCategory;
use App\Models\project as ModelsProject;

class project_controller extends Controller
{
    public function getData()
    {
        $Categories=ModelsCategory::all();
        $Projects=ModelsProject::when(request('category_id'), function($query) {
            $query->where('category_id', request('category_id'));
        })
        ->latest()->get();

        return view('projects', compact('Categories','Projects'));
    }
}