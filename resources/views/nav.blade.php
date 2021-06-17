@section("nav")
    @php
        // Check if user is in the root route
        $isHome = (strlen(Route::getFacadeRoot()->current()->uri()) == 1) ? true : false ;

        // String to be appended to href
        $linkAppend = "";

        // Move up one directory for routes that are not root
        if(!$isHome) {
            $linkAppend .= "../";
        }
    @endphp

    <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ $linkAppend }}#about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ $linkAppend }}#projects">Projects</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ $linkAppend }}#contact">Contact</a>
                </li>
            </ul>
        </div>
  </nav>
@endsection