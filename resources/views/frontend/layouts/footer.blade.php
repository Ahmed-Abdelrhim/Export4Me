<!--==================== FOOTER ====================-->
<footer class="footer section">
    <div class="footer__container container grid">
        <div>
            <a href="#" class="footer__logo">
                <img src="assets/img/zexport4me-logo.png" alt="logo" />
            </a>
            <p class="footer__description">
                {{ __('home.address_first') }}<br />
                {{ __('home.address_second') }}
            </p>
        </div>

        <div class="footer__content">
            <div>
                <h3 class="footer__title">  {{ __('home.about_footer') }} </h3>
                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">{{ __('home.about') }}</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">{{ __('home.fea') }}</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">{{ __('home.new_and_blog') }}</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="footer__title">{{ __('home.company') }}</h3>
                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">{{ __('home.how_we_work') }}</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">{{ __('home.cap') }}</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">{{ __('home.sec') }}</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="footer__title">{{ __('home.support') }}</h3>
                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">{{ __('home.faq') }}</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">{{ __('home.support_center') }}</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">{{ __('home.contact_us') }}</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="footer__title">{{ __('home.follow') }}</h3>
                <ul class="footer__social">
                    <a href="" class="footer__social-link">
                        <i class="bx bxl-facebook-circle"></i>
                    </a>
                    <a href="" class="footer__social-link">
                        <i class="bx bxl-instagram-alt"></i>
                    </a>
                    <a href="" class="footer__social-link">
                        <i class="bx bxl-youtube"></i>
                    </a>
                    <a href="" class="footer__social-link">
                        <i class="bx bxl-linkedin-square"></i>
                    </a>
                    <a href="" class="footer__social-link">
                        <i class="bx bxl-whatsapp-square"></i>
                    </a>
                    <a href="" class="footer__social-link">
                        <i class="bx bxl-twitter"></i>
                    </a>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer__info container">
        <span class="footer__copy">
          &#169;
          @if (app()->getLocale() == 'ar')
                Export 4 Me
                كل الحقوق محفوظة لصالح
              @else
              Export 4 Me. All rights reserved

          @endif


        </span>
        <div class="footer__privacy">
            <a href="#"> {{ __('home.terms') }} </a>
            <a href="#">{{ __('home.privacy_and_policy') }}</a>
        </div>
    </div>
</footer>
