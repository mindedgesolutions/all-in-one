<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('client');
        $projects = $projects->join('clients', 'clients.id', '=', 'projects.client_id')
            ->orderBy('clients.name', 'asc');
        $projects = $projects->orderBy('project_name')->paginate(10);

        return view('projects.list', compact('projects'));
    }
}
