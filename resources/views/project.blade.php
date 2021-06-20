@extends('master')

@section('title', $project->title.' | Jesus Sanchez Web Development Portfolio')

@include("nav")

@section('content')
    @php
        // Store skills as array
        $skillsUsed = explode("|", $project->skills);
    @endphp

    <div class="project-container row">
        <div class="col-lg-6 col-sm-12">
            <img class="project-preview-img"
                 src="../{{ $project->previewImgUrl }}" 
                 alt="{{ $project->title }} Preview"
                 width="100%" 
            />

            <div class="project-links-container">
                <a class="project-link" href="{{ $project->url }}">
                    <i class="fa fa-external-link"></i>Visit
                </a>
        
                @if($project->githubUrl != 'none')
                    <a class="project-link" href="{{ $project->githubUrl }}">
                        <i class="fa fa-github-alt"></i>View Repository
                    </a>
                @endif 
            </div>
        </div>

        <div class="col-lg-6 col-sm-12">
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

            <hr class="divider-line">

            <a class="back-btn" href="/#projects">
                <div class="back-btn-content">
                    <i class="back-arrow fa fa-caret-left"></i>Back
                </div>
                
            </a>   
        </div>
    </div>
@endsection

@include("footer")