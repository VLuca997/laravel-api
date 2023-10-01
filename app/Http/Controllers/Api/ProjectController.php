<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//Model
use App\Models\Project;
class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        // $projects = Project::paginate(5);
        return response()->json(['success' => true,'results' => $projects]);
    }
    public function show(String $title)
    {
        $projects = Project::where('title', $title)->findOrFail();
        return response()->json(['success' => true,'results' => $projects]);
    }
}
