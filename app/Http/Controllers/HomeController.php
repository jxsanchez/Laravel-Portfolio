<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Projects;


class HomeController extends Controller
{
    public function index() {
        // Test database connection
        try {
            DB::connection()->getPdo();
        } catch (\Exception $e) {
            die("Could not connect to the database.  Please check your configuration. error:" . $e );
        }

        $skillsArr = array(
            (object)[
                "category" => "Programming Languages", 
                "skills" => array("HTML", "CSS/Sass", "JavaScript", "SQL", "PHP")],
            (object)[
                "category" => "Libraries & Frameworks",
                "skills" => array("Laravel", "jQuery", "Express.js", "Node.js", "React", "Bootstrap")
            ],
            (object)[
                "category" => "Tools & Technologies",
                "skills" => array("Git", "Heroku", "WordPress", "REST APIs", "Visual Studio Code")
            ]
        );
        
        $projects = Projects::all();

        return view('home', [
            "skillsArr" => $skillsArr,
            "projects" => $projects
        ]);
    }
}
