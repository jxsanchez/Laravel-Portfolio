<div id="contact" class="section">
    <h2 class="section-title">Don't hesitate to reach out!</h2>
    <p class="section-text">
        Send me a message and I'll get back to you as soon as possible.
    </p>

    <form class="contact-form" action="/contact" method="POST">
        <input class="contact-input" name="name" type="text" placeholder="Your Name" value="{{ old("name") }}" required>
        <input class="contact-input" name="email" type="email" placeholder="E-mail Address" value="{{ old("email") }}" required>
        <input class="contact-input" name="subject" type="text" placeholder="Subject" value="{{ old("subject") }}" required>
        <textarea class="contact-message" name="message" id="" cols="30" rows="5" placeholder="Your message" value="{{ old("message") }}" required></textarea>

        @if(session()->has("success-msg"))
            <p class="section-text success-msg">{{ session()->get('success-msg') }}</p>
        @endif

        {{ csrf_field() }}

        <button class="submit-btn">
            <i class="fa fa-envelope"></i>
        </button>
    </form>

    <div class="continue-container">
        <a class="continue-link" href="#landing">
            <i class="continue-caret fa fa-caret-up"></i>
            <span class="continue-text">That's all! Start over?</span>
        </a>
    </div>
</div>
