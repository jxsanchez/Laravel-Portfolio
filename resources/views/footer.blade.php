@section('footer')
    <div id="footer">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <h6 class="footer-column-heading">Social Links</h6>

                <div class="footer-social-links-container">
                    <a class="social-link" href="https://twitter.com/jxsdeve" target="blank">
                        <i class="fa fa-twitter"></i>
                    </a>
            
                    <a class="social-link" href="https://github.com/jxsanchez" target="blank">
                        <i class="fa fa-github-alt"></i>
                    </a>
                    
                    <a class="social-link" href="" target="blank">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    
                    <a class="social-link" href="https://www.facebook.com/JXS-Development-102585852037345" target="blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <h6 class="footer-column-heading">Navigation</h6>
                <div class="footer-links-container row">
                    <div class="footer-column col-md-3 col-sm-6">
                        <a class="footer-link" href="#landing">Landing</a>
                    </div>
                    <div class="footer-column col-md-3 col-sm-6">
                        <a class="footer-link" href="#about">About</a>
                    </div>
                    <div class="footer-column col-md-3 col-sm-6">
                        <a class="footer-link" href="#projects">Projects</a>
                    </div>
                    <div class="footer-column col-md-3 col-sm-6">
                        <a class="footer-link" href="#contact">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-container">
        <p class="copyright-text">&copy Jesus Sanchez {{ Carbon\Carbon::now()->year }}</p>
    </div>
@endsection