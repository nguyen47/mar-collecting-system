<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\RegisterProgram;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view("admin.projects.index", compact("projects"));
    }

    public function create()
    {
        return view("admin.projects.create");
    }

    public function store()
    {
        request()->validate([
            "title" => "required|max:255",
            "program_name" => "required|max:255",
        ]);

        Project::create(request()->all());

        return redirect()->route("admin.projects");
    }

    public function delete()
    {
        $project = Project::where("id", request("id"))->first();
        $register_program = RegisterProgram::where(
            "project_id",
            $project->id
        )->count();
        if ($register_program > 0) {
            return back()->with(
                "error",
                "There are some lecture is registered this project"
            );
        }
        $project->delete();
        return redirect()
            ->route("admin.projects")
            ->with("success", "Delete Project successfully");
    }
}
