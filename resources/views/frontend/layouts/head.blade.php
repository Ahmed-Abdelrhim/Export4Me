<!--==================== HEADER ====================-->
<header class="header" id="header">
    <nav class="nav container">
        <a href="{{route('frontend.home')}}" class="nav__logo">
            <img  src="{{asset('assets/img/zexport4me-logo.png')}}" alt="logo" />
        </a>

        <div class="nav__menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="#home" class="nav__link active-link">
                        <i class="bx bx-home-alt-2"></i>
                        <span> {{ __('home.nav_home') }} </span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="#popular" class="nav__link">
                        <i class="bx bx-building-house"></i>
                        <span> {{ __('home.serv') }} </span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="#value" class="nav__link">
                        <i class="bx bx-award"></i>
                        <span>{{ __('home.about') }}</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="#contact" class="nav__link">
                        <i class="bx bx-phone"></i>
                        <span> {{ __('home.nav_contact') }} </span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="https://wa.me/+201001003509 " class="nav__link">
                        <i class="bx bxl-whatsapp"></i>
                        <span> {{ __('home.nav_contact') }} </span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Theme change button -->
        <i class="bx bx-moon change-theme" id="theme-button"></i>

        <a href="https://wa.me/+201001003509 " class="button nav__button">
            <i class="bx bxl-whatsapp"></i>
            {{ __('home.whatsapp') }}
        </a>
    </nav>
</header>
