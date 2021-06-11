<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;

class HomeController extends Controller
{
    public function index() {
        $skillsArr = array(
            (object)[
                "category" => "Languages", 
                "skills" => array("HTML", "CSS", "SASS", "PHP", "JavaScript", "SQL", "C++")],
            (object)[
                "category" => "Technologies",
                "skills" => array("Git/Github", "REST APIs", "AJAX", "MySQL", "MongoDB", "WordPress")
            ],
            (object)[
                "category" => "Frameworks",
                "skills" => array("Laravel", "React.js")
            ],
            (object) [
                "category" => "Libraries",
                "skills" => array("jQuery", "Bootstrap", "Express.js", "Mongoose")
            ],
            (object)[
                "category" => "Skills",
                "skills" => array("MacOS Terminal", "Windows Command Line", "Object-Oriented Programming", "Agile", "Scrum")
            ]
        );

        $projects = Projects::all();

        return view('home', [
            "skillsArr" => $skillsArr,
            "projects" => $projects
        ]);
    }
}
