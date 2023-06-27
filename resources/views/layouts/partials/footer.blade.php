<footer class="footer ps-40">
    <div class="footer__wrap">
        <div class="footer__block">
            <a class="logo footer__logo" href="#">
                <img src="{{ Vite::asset('resources/images/svg/logo.svg') }}" alt="лого">
            </a>

            <ul class="footer__nav">
                <li><a href="{{ route('about') }}">{{ __('footer.company') }}</a></li>
                <li><a href="services.html">{{ __('footer.services') }}</a></li>
                <li><a href="projects.html">{{ __('footer.projects') }}</a></li>
            </ul>

            <ul class="footer__nav">
                <li><a href="calulations.html">{{ __('footer.instruments') }}</a></li>
                <li><a href="career.html#">{{ __('footer.career') }}</a></li>
                <li><a href="contacts.html">{{ __('footer.contacts') }}</a></li>
            </ul>

            <ul class="footer__info">
                <li>{{ __('footer.information') }}</li>
                <li><a href="agreement.html">{{ __('footer.policy') }}</a></li>
                <!-- <li><a href="#">Политика использования Cookies</a></li> -->
            </ul>

            <ul class="footer__contact">
                <li><a href="mailto:info@sudo.team">info@sudo.team</a></li>
            </ul>
        </div>
        <p class="footer__copyright">{{ __('footer.copyright') }}</p>
    </div>

</footer>
