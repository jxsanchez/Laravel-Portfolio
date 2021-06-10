@extends('master')

@section('title', $project->title.' | Jesus Sanchez Web Development Portfolio')

@section('content')
    <h1>{{ $project->title }}</h1>
    <p>{{ $project->description }}</p>

    <a href="{{ $project->url }}">visit</a>

    @if($project->githubUrl != 'none')
        <a href="{{ $project->githubUrl }}">github repository</a>
    @endif

    <a href="/#projects">back</a>
@endsection