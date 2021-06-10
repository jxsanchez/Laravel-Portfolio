<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;

class ProjectController extends Controller
{
    public function index(Request $req) {
        $project = Projects::find($req->id);

        return view('project', [
            "project" => $project
        ]);
    }
}
