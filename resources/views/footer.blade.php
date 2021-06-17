@section('footer')
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
    <div id="footer">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <h6 class="footer-column-heading">Social</h6>

                <div class="footer-social-links-container">
                    <a class="social-link" href="https://twitter.com/jxsdeve" target="blank">
                        <i class="fa fa-twitter"></i>
                    </a>
            
                    <a class="social-link" href="https://github.com/jxsanchez" target="blank">
                        <i class="fa fa-github-alt"></i>
                    </a>
                    
                    <a class="social-link" href="https://www.linkedin.com/in/jesus-sanchez-9b3874213/" target="blank">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    
                    <a class="social-link" href="https://www.facebook.com/JXS-Development-102585852037345" target="blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                </div>
            </div>
            <div class="navigation-column col-md-4 col-sm-12">
                <h6 class="footer-column-heading">Navigation</h6>
                <div class="footer-links-container row">
                    <div class="footer-column col-md-3 col-sm-6">
                        <a class="footer-link" href="/">Landing</a>
                    </div>
                    <div class="footer-column col-md-3 col-sm-6">
                        <a class="footer-link" href="{{ $linkAppend }}#about">About</a>
                    </div>
                    <div class="footer-column col-md-3 col-sm-6">
                        <a class="footer-link" href="{{ $linkAppend }}#projects">Projects</a>
                    </div>
                    <div class="footer-column col-md-3 col-sm-6">
                        <a class="footer-link" href="{{ $linkAppend }}#contact">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-container">
        <p class="copyright-text">&copy Jesus Sanchez {{ Carbon\Carbon::now()->year }}</p>
    </div>
@endsection