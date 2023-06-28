<footer class="footer ps-40">
    <div class="footer__wrap">
        <div class="footer__block">
            <a class="logo footer__logo" href="#">
                <img src="{{ Vite::asset('resources/images/svg/logo.svg') }}" alt="лого">
            </a>

            <ul class="footer__nav">
                <li><a href="{{ route('about') }}">{{ __('footer.company') }}</a></li>
                <li><a href="{{ route('services') }}">{{ __('footer.services') }}</a></li>
                <li><a href="{{ route('projects') }}">{{ __('footer.projects') }}</a></li>
            </ul>

            <ul class="footer__nav">
                <li><a href="{{ route('calculations') }}">{{ __('footer.instruments') }}</a></li>
                <li><a href="{{ route('career') }}">{{ __('footer.career') }}</a></li>
                <li><a href="{{ route('contacts') }}">{{ __('footer.contacts') }}</a></li>
            </ul>

            <ul class="footer__info">
                <li>{{ __('footer.information') }}</li>
                <li><a href="{{ route('policy') }}">{{ __('footer.policy') }}</a></li>
                <!-- <li><a href="#">Политика использования Cookies</a></li> -->
            </ul>

            <ul class="footer__contact">
                <li><a href="mailto:info@sudo.team">info@sudo.team</a></li>
            </ul>
        </div>
        <p class="footer__copyright">{{ __('footer.copyright') }}</p>
    </div>

</footer>