<div id="about" class="section">
    <h2 class="section-title">
        <span class="title-wrapper">
            <span class="letters">
                About Me
            </span>
        </span>
    </h2>
    
    <p class="section-text">
        I discovered my <span class="emphasized">passion for web development</span> after following a YouTube tutorial for building a simple login interface. From there, I decided to pursue web develpment as a career with <span class="emphasized">YouTube and Udemy</span> as my teachers. I am currently a <span class="emphasized">Junior Software Developer</span> at Customer ID, and I have experience with:
    </p>

    <!-- Show Skill columns using Bootstrap -->
    <div class="row">
        @foreach($skillsArr as $category)
            <div class="category-column col-lg col-md-4">
                <h4 class="section-subtitle">{{ $category->category }}</h4>
                @foreach($category->skills as $skill)
                    <p class="skill-bullet section-text">{{ $skill }}</p>
                @endforeach
            </div>
        @endforeach
    </div>

    <div class="continue-container">
        <a class="continue-link" href="#projects">
            <span class="continue-text">Here's what I've made...</span>
            <i class="continue-caret fa fa-caret-down"></i>
        </a>
    </div>
</div>

{{-- <hr class="section-divider"> --}}
