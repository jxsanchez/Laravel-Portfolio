<div id="about" class="section">
    <h2 class="section-title">A programmer with {{ Carbon\Carbon::now()->year - 2016}} years of coding experience.</h2>
    <p class="section-text">
        I discovered my passion for web development during a univeristy project class in 2019 and I have been improving my skills ever since. I have experience with:
    </p>

    <!-- Show Skill columns using Bootstrap -->
    <div class="row">
        @foreach($skillsArr as $category)
            <div class="category-column col-md">
                <h4 class="section-subtitle">{{ $category->category }}</h4>
                @foreach($category->skills as $skill)
                    <p class="section-text">{{ $skill }}</p>
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

<hr class="section-divider">
