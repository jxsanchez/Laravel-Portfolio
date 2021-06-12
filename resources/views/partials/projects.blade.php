<div id="projects" class="section">
    <h2 class="section-title">A few of my projects.</h2>

    <p class="section-text">
        Hover over a project to see more information or visit the site.
    </p>

    {{-- <div class="container"> --}}
        <div class="projects-row row">
            @foreach($projects as $project)
                <div class="project-column col-md-4 col-sm-6 col-xs-12">
                    <div class="hovereffects">
                        <img src="{{ $project->previewImgUrl }}"
                             width="100%"
                             alt="{{ $project->title }} Preview Image">
                            
                        <div class="overlay">
                            <h2 class="project-title">{{ $project->title }}</h2>

                            <div class="overlay-link-container">
                                <a class="info" href="/project/{{ $project->id }}">
                                    <i class="fa fa-info-circle"></i>info
                                </a>
                                <a class="info" href="{{ $project->url }}">
                                    <i class="fa fa-external-link"></i>visit
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    {{-- </div> --}}
    
    <div class="continue-container">
        <a class="continue-link" href="#contact">
            <span class="continue-text">Any questions?</span>
            <i class="continue-caret fa fa-caret-down"></i>
        </a>
    </div>
</div>

<hr class="section-divider">