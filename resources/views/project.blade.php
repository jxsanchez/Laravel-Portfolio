@extends('master')

@section('title', $project->title.' | Jesus Sanchez Web Development Portfolio')

@include("nav")

@section('content')
    @php
        $skillsUsed = explode("|", $project->skills);
    @endphp

    <div class="project-container row">
        <div class="col-md-6 col-sm-12">
            <img src="../{{ $project->previewImgUrl }}" 
                 alt="{{ $project->title }} Preview"
                 width="100%" 
            />
        </div>

        <div class="col-md-6 col-sm-12">
            <h1 class="project-title">{{ $project->title }}</h1>
            <p>{{ $project->description }}</p>
    
            <!-- Display skills as styled buttons -->
            <h2 class="project-skills-title">Skills</h2>
            <div class="skills-container row">
                @foreach($skillsUsed as $skill)
                    <div class="skill-btn">
                        {{ $skill }}
                    </div>
                @endforeach
            </div>

            <div class="project-links-container">
                <a class="project-link" href="{{ $project->url }}">
                    <i class="fa fa-external-link"></i>Visit Website
                </a>
        
                @if($project->githubUrl != 'none')
                    <a class="project-link" href="{{ $project->githubUrl }}">
                        <i class="fa fa-github-alt"></i>View Source Code
                    </a>
                @endif 
            </div>

            <a class="back-btn" href="/#projects">
                <i class="fa fa-caret-left"></i>Back
            </a>   
        </div>
    </div>
@endsection

@include("footer")