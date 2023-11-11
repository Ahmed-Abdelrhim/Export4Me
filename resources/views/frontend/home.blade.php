@extends('frontend.layouts.app')
@section('content')
    <!--==================== MAIN ====================-->
    <main class="main">
        <!-- Page Selection Popup -->
        <div id="page-selection-popup" class="popup">
            <div class="popup-content">
                <span class="close-button" onclick="closePopup()">&times;</span>
                <h1 class="section__title center">{{__('home.welcome')}}</h1>
                <h2 class="section__subtitle center">
                    {{__('home.choose_page')}}

                </h2>
                <div class="page-links">
                    <a href="{{route('frontend.extract')}}">
                        <img src="{{asset('assets/img/5.jpg')}}" alt="صفحة 3"/>
                    </a>

                    <a href="{{route('frontend.import')}}">
                        <img src="{{asset('assets/img/4.jpg')}}" alt="صفحة 3"/>
                    </a>


                    <a href="{{route('frontend.export')}}">
                        <img src="{{asset('assets/img/3.jpg')}}" alt="صفحة 3"/>
                    </a>


                    <a href="{{route('frontend.insurance.company')}}">
                        <img src="{{asset('assets/img/1.jpg')}}" alt="صفحة 3"/>
                    </a>

                    <a href="{{route('frontend.shipping.company')}}">
                        <img src="{{asset('assets/img/2.jpg')}}" alt="صفحة 3"/>
                    </a>


                </div>
            </div>
        </div>

        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="vegas-overlay"></div>
            <div class="home__container container grid">
                <div class="home__data">
                    <h1 class="home__title">
                        {{__('home.discover')}}
                    </h1>

                    <p class="home__description">
                        {{__('home.emirates_group')}}

                    </p>


                    <div class="home__value">
                        <div>
                            <h1 class="home_value-number">9K <span>+</span></h1>
                            <span class="home__value_description">
                  {{__('home.customs')}}
                                <br/>

                  {{__('home.certificate')}}
                </span>
                        </div>
                        <div>
                            <h1 class="home_value-number">2K <span>+</span></h1>
                            <span class="home__value_description">
                  {{__('home.happy')}} <br/>
                                {{__('home.client')}}

                </span>
                        </div>
                        <div>
                            <h1 class="home_value-number">27K <span>+</span></h1>
                            <span class="home__value_description">
                   {{__('home.container')}} <br/>
                                {{__('home.shipments')}}

                </span>
                        </div>
                    </div>
                </div>

                <div class="home__images">
                    <div class="home__orbe"></div>

                    <div class="home__img">
                        <img src="{{asset('assets/img/ex4me.jpg')}}" alt="home"/>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== POPULAR ====================-->
        <section class="popular section" id="popular">
            <div class="container">
                <span class="section__subtitle">{{__('home.best')}}</span>
                <h2 class="section__title"> {{__('home.choose_type')}} <span>.</span></h2>

                <div class="popular__container swiper">
                    <div class="swiper-wrapper">
                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/1.jpg')}}" alt="" class="popular__img"/>
                            <div class="popular__date">
                  <span class="section__subtitle"
                  > {{__('home.marine_insurance')}} </span>
                                <!-- <h3 class="popular-title">form</h3> -->
                                <p class="popular__description">
                                    <a href="{{route('frontend.insurance.company')}}">{{__('home.reg_now')}}</a>
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/4.jpg')}}" alt="" class="popular__img"/>
                            <div class="popular__date">
                                <span class="section__subtitle">{{__('home.importer')}} </span>
                                <!-- <h3 class="popular-title">Minimize Manufacturing</h3> -->
                                <p class="popular__description">
                                    <a href="{{route('frontend.import')}}">{{__('home.reg_now')}}</a>
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/3.jpg')}}" alt="" class="popular__img"/>
                            <div class="popular__date">
                                <span class="section__subtitle"> {{__('home.exporter')}} </span>
                                <!-- <h3 class="popular-title">Warehouse inventory</h3> -->
                                <p class="popular__description">
                                    <a href="{{route('frontend.export')}}">{{__('home.reg_now')}}</a>
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/2.jpg')}}" alt="" class="popular__img"/>
                            <div class="popular__date">
                                <span class="section__subtitle">{{__('home.shipping_company')}} </span>
                                <!-- <h3 class="popular-title">Warehouse inventory</h3> -->
                                <p class="popular__description">
                                    <a href="{{route('frontend.shipping.company')}}">{{__('home.reg_now')}}</a>
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/5.jpg')}}" alt="" class="popular__img"/>
                            <div class="popular__date">
                                <span class="section__subtitle">{{__('home.extract')}} </span>
                                <!-- <h3 class="popular-title">Minimize Manufacturing</h3> -->
                                <p class="popular__description">
                                    <a href="{{route('frontend.extract')}}">{{__('home.reg_now')}}</a>
                                </p>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-button-next">
                        <i class="bx bx-chevron-right"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="bx bx-chevron-left"></i>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== VALUE ====================-->
        <section class="value section" id="value">
            <div class="value__container container grid">
                <div class="value__images">
                    <div class="value__orbe"></div>
                    <div class="value__img">
                        <img src="{{asset('assets/img/team.jpg')}}" alt="value"/>
                    </div>
                </div>
                <div class="value__content">
                    <div class="value__date">
                        <span class="section__subtitle">About Us</span>
                        <h2 class="section__title"> {{__('home.why')}} <span>?</span></h2>
                        <p class="value__description">
                            {{__('home.why_desc')}}
                        </p>
                    </div>
                    <div class="value__accordion">
                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class="bx bxs-check-shield value__accordion-icon"></i>
                                <h3 class="value__accordion-title">{{__('home.trusted')}}</h3>
                                <div class="value__accordion-arrow">
                                    <i class="bx bxs-down-arrow"></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <p class="value__accordion-description">
                                    {{__('home.trusted_desc')}}
                                </p>
                            </div>
                        </div>
                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class="bx bxs-lock value__accordion-icon"></i>
                                <h3 class="value__accordion-title"> {{__('home.best_security')}} </h3>
                                <div class="value__accordion-arrow">
                                    <i class="bx bxs-down-arrow"></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <p class="value__accordion-description">
                                    {{__('home.best_security_desc')}}
                                </p>
                            </div>
                        </div>
                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class="bx bxs-like value__accordion-icon"></i>
                                <h3 class="value__accordion-title">{{__('home.gur')}}</h3>
                                <div class="value__accordion-arrow">
                                    <i class="bx bxs-down-arrow"></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <p class="value__accordion-description">
                                    {{__('home.gur_desc')}}
                                </p>
                            </div>
                        </div>
                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class="bx bx-current-location value__accordion-icon"></i>
                                <h3 class="value__accordion-title">{{__('home.quick')}}</h3>
                                <div class="value__accordion-arrow">
                                    <i class="bx bxs-down-arrow"></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <p class="value__accordion-description">
                                    {{__('home.quick_desc')}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== SERVICES ====================-->
        <section class="section service" id="service">
            <div class="container ">
                <div class="value__content">
                    <div class="value__date">
                        <span class="section__subtitle">{{__('home.all_serv')}}</span>
                        <h2 class="section__title">{{__('home.all_serv_title')}} <span>?</span></h2>
                        <p class="value__description">
                            {{__('home.all_serv_desc')}}
                        </p>
                    </div>
                    <ul class="service-list grid-list">
                        <li>
                            <div class="service-card">

                                <div class="card-icon">
                                    <img src="{{asset('assets/img/feature-icon-3.png')}}" width="90" height="91" alt="">
                                </div>

                                <h3 class="h3 card-title">
                                    <span class="span">01</span> {{__('home.new_markets')}}
                                </h3>

                                <p class="card-text">
                                    {{__('home.new_markets_desc')}}
                                </p>

                                <a href="#" class="btn-link">
                                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                                    <span class="span">{{__('home.view_det')}} </span>
                                </a>

                            </div>
                        </li>

                        <li>
                            <div class="service-card">

                                <div class="card-icon">
                                    <img src="{{asset('assets/img/feature-icon-2.png')}}" width="72" height="91"
                                         loading="lazy" alt="Trolley">
                                </div>

                                <h3 class="h3 card-title">
                                    <span class="span">02</span> {{__('home.international')}}
                                </h3>

                                <p class="card-text">
                                    {{__('home.international_desc')}}
                                </p>

                                <a href="#" class="btn-link">
                                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                                    <span class="span">{{__('home.view_det')}}</span>
                                </a>

                            </div>
                        </li>

                        <li>
                            <div class="service-card">

                                <div class="card-icon">
                                    <img src="{{asset('assets/img/feature-icon-1.png')}}" width="72" height="91" alt="">
                                </div>

                                <h3 class="h3 card-title">
                                    <span class="span">03</span> {{__('home.video_mar')}}
                                </h3>

                                <p class="card-text">
                                    {{__('home.video_mar_desc')}}

                                </p>

                                <a href="#" class="btn-link">
                                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                                    <span class="span">{{__('home.view_det')}}</span>
                                </a>

                            </div>
                        </li>

                        <li>
                            <div class="service-card">

                                <div class="card-icon">
                                    <img src="{{asset('assets/img/service-icon-6.png')}}" width="72" height="91"
                                         alt="Paper">
                                </div>

                                <h3 class="h3 card-title">
                                    <span class="span">04</span> {{__('home.market')}}
                                </h3>

                                <p class="card-text">
                                    {{__('home.market_desc')}}
                                </p>

                                <a href="#" class="btn-link">
                                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                                    <span class="span">{{__('home.view_det')}}</span>
                                </a>

                            </div>
                        </li>

                        <li>
                            <div class="service-card">

                                <div class="card-icon">
                                    <img src="{{asset('assets/img/service-icon-3.png')}}" width="72" height="91"
                                         alt="Airplane">
                                </div>

                                <h3 class="h3 card-title">
                                    <span class="span">05</span> {{__('home.seamless')}}
                                </h3>

                                <p class="card-text">
                                    {{__('home.seamless_desc')}}
                                </p>

                                <a href="#" class="btn-link">
                                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                                    <span class="span">{{__('home.view_det')}}</span>
                                </a>

                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </section>

        <!--==================== Sectors  ====================-->
        <section class="popular section" id="Sectors ">
            <div class="container">
                <span class="section__subtitle">{{__('home.excel')}}:</span>
                <h2 class="section__title"> {{__('home.excel_title')}} <span>:</span></h2>

                <div class="popular__container swiper">
                    <div class="swiper-wrapper">
                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/Oil.jpg')}}" alt="" class="popular__img"/>

                            <div class="popular__date">
                                <span class="section__subtitle">{{__('home.excel_prods')}}</span>
                                <p class="popular__description">
                                    <span href="">{{__('home.excel_con')}}</span>
                                </p>
                            </div>
                        </article>

                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/Petroleum.jpg')}}" alt="" class="popular__img"/>
                            <div class="popular__date">
                                <span class="section__subtitle">{{__('home.excel_pet')}} </span>
                                <!-- <h3 class="popular-title">Minimize Manufacturing</h3> -->
                                <p class="popular__description">
                                    <span href="">{{__('home.excel_con_last')}}</span>
                                </p>
                            </div>
                        </article>

                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/Furniture.jpg')}}" alt="" class="popular__img"/>
                            <div class="popular__date">
                                <span class="section__subtitle">{{__('home.fur')}} </span>
                                <!-- <h3 class="popular-title">Warehouse inventory</h3> -->
                                <p class="popular__description">
                                    <span href="">{{__('home.home_and_school')}}</span>
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/Food.jpg')}}" alt="" class="popular__img"/>
                            <div class="popular__date">
                                <span class="section__subtitle"> {{__('home.food_ind')}} </span>
                                <!-- <h3 class="popular-title">Warehouse inventory</h3> -->
                                <p class="popular__description">
                                    <span href="">{{__('home.frozen')}}</span>
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/Chemical.jpg')}}" alt="" class="popular__img"/>
                            <div class="popular__date">
                                <span class="section__subtitle"> {{__('home.che')}} </span>
                                <!-- <h3 class="popular-title">Minimize Manufacturing</h3> -->
                                <p class="popular__description">
                                    <span href="">{{__('home.npk')}}</span>
                                </p>
                            </div>
                        </article>

                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/Housewares.jpg')}}" alt="" class="popular__img"/>
                            <div class="popular__date">
                                <span class="section__subtitle"> {{__('home.house')}}  </span>
                                <!-- <h3 class="popular-title">Minimize Manufacturing</h3> -->
                                <p class="popular__description">
                                    <span href=""> {{__('home.plastic')}}</span>
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/Medicines.jpg')}}" alt="" class="popular__img"/>
                            <div class="popular__date">
                                <span class="section__subtitle">{{__('home.medicine')}} </span>
                                <!-- <h3 class="popular-title">Minimize Manufacturing</h3> -->
                                <p class="popular__description">
                                    <span href="">{{__('home.med_desc')}}</span>
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/Agricultural.jpg')}}" alt="" class="popular__img"/>
                            <div class="popular__date">
                                <span class="section__subtitle">{{__('home.agri')}} </span>
                                <!-- <h3 class="popular-title">Minimize Manufacturing</h3> -->
                                <p class="popular__description">
                                    <span href="">{{__('home.agri_desc')}}</span>
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/leather.jpg')}}" alt="" class="popular__img"/>
                            <div class="popular__date">
                                <span class="section__subtitle"> {{__('home.leather')}} </span>
                                <!-- <h3 class="popular-title">Minimize Manufacturing</h3> -->
                                <p class="popular__description">
                                    <span href="">{{__('home.leather_desc')}}</span>
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/Construction.jpg')}}" alt="" class="popular__img"/>
                            <div class="popular__date">
                                <span class="section__subtitle">{{__('home.construction')}}  </span>
                                <!-- <h3 class="popular-title">Minimize Manufacturing</h3> -->
                                <p class="popular__description">
                                    <span href=""> {{__('home.construction_desc')}} </span>
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/Textile industries.jpg')}}" alt="" class="popular__img"/>
                            <div class="popular__date">
                                <span class="section__subtitle"> {{__('home.textile')}} </span>
                                <!-- <h3 class="popular-title">Minimize Manufacturing</h3> -->
                                <p class="popular__description">
                                    <span href="">  {{__('home.textile_desc')}}</span>
                                </p>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-button-next">
                        <i class="bx bx-chevron-right"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="bx bx-chevron-left"></i>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== SUBSCRIBE ====================-->
        <section class="subscribe section">
            <div class="subscribe__container container">
                <h2 class="section__title"> {{__('home.our_values')}} <span>.</span></h2>
                <p class="home__description">
                    {{__('home.our_values_desc')}}
                </p>

                <!-- <img src="./assets/img/newsletter-banner.png" alt="" /> -->

                <div class="value__accordion">
                    <div class="value__accordion-item">
                        <header class="value__accordion-header">
                            <i class="bx bxs-check-shield value__accordion-icon"></i>
                            <h3 class="value__accordion-title"> {{__('home.our_mission')}}  </h3>
                            <div class="value__accordion-arrow">
                                <i class="bx bxs-down-arrow"></i>
                            </div>
                        </header>

                        <div class="value__accordion-content">
                            <p class="value__accordion-description">
                                {{__('home.our_mission_desc')}}

                            </p>
                        </div>
                    </div>
                    <div class="value__accordion-item">
                        <header class="value__accordion-header">
                            <i class="bx bxs-check-shield value__accordion-icon"></i>
                            <h3 class="value__accordion-title">{{__('home.our_vision')}} </h3>
                            <div class="value__accordion-arrow">
                                <i class="bx bxs-down-arrow"></i>
                            </div>
                        </header>

                        <div class="value__accordion-content">
                            <p class="value__accordion-description">

                                {{__('home.our_vision_desc')}}
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section>


        <!--==================== TEAM ====================-->
        <section class="contact section" id="contact">
            <div class="contact__container container">
                <div class="contact__content">
                    <div class="contact_data">
                        <span class="section__subtitle">TEAM</span>
                        <h2 class="section__title">OUR TEAM <span>.</span></h2>
                    </div>
                </div>
                <section class="swiper mySwiper">

                    <div class="swiper-wrapper">

                        <div class="card swiper-slide">
                            <div class="card__image">
                                <img src="./assets/img/EXPORT 4 ME TEAM.jpg" alt="card image">
                            </div>

                            <div class="card__content">
                                <span class="card__title">Ahmed Gomaa</span>
                                <span class="card__name">Marketing and Financial Analyst</span>
                                <ul class="social">
                                    <a href="tel:+1 (514) 963-2413" class="social-link">
                                        <i class="bx bxs-phone-call"></i>
                                    </a>
                                    <a href="mailto:Ahmed@export4me.com" class="social-link">
                                        <i class="bx bxs-envelope"></i>
                                    </a>
                                </ul>
                            </div>
                        </div>

                        <div class="card swiper-slide">
                            <div class="card__image">
                                <img src="./assets/img/EXPORT 4 ME TEAM.jpg" alt="card image">
                            </div>

                            <div class="card__content">
                                <span class="card__title">Islam Gomaa </span>
                                <span class="card__name">Business Development Manager</span>
                                <ul class="social">
                                    <a href="tel:+1 (514) 651-6367" class="social-link">
                                        <i class="bx bxs-phone-call"></i>
                                    </a>
                                    <a href="mailto:Sam@export4me.com" class="social-link">
                                        <i class="bx bxs-envelope"></i>
                                    </a>
                                </ul>
                            </div>
                        </div>

                        <div class="card swiper-slide">
                            <div class="card__image">
                                <img src="./assets/img/EXPORT 4 ME TEAM.jpg" alt="card image">
                            </div>

                            <div class="card__content">
                                <span class="card__title">Osama Gomaa</span>
                                <span class="card__name">Chief Executive Officer & Founder</span>
                                <ul class="social">
                                    <a href="tel:+1 (514) 651-6367" class="social-link">
                                        <i class="bx bxs-phone-call"></i>
                                    </a>
                                    <a href="mailto:Osama@export4me.com " class="social-link">
                                        <i class="bx bxs-envelope"></i>
                                    </a>
                                </ul>
                            </div>
                        </div>

                        <div class="card swiper-slide">
                            <div class="card__image">
                                <img src="./assets/img/EXPORT 4 ME TEAM.jpg" alt="card image">
                            </div>

                            <div class="card__content">
                                <span class="card__title">Omnia Gomaa</span>
                                <span class="card__name">Technology and Software Director</span>
                                <ul class="social">
                                    <a href="tel:+1 (514) 623-1405" class="social-link">
                                        <i class="bx bxs-phone-call"></i>
                                    </a>
                                    <a href="mailto:Omnia@export4me.com " class="social-link">
                                        <i class="bx bxs-envelope"></i>
                                    </a>
                                </ul>
                            </div>
                        </div>

                        <div class="card swiper-slide">
                            <div class="card__image">
                                <img src="./assets/img/EXPORT 4 ME TEAM.jpg" alt="card image">
                            </div>

                            <div class="card__content">
                                <span class="card__title">Amal Afify</span>
                                <span class="card__name">Human Resources Manager</span>
                                <ul class="social">
                                    <a href="tel:+1 (514) 623-1995" class="social-link">
                                        <i class="bx bxs-phone-call"></i>
                                    </a>
                                </ul>
                            </div>
                        </div>

                        <div class="card swiper-slide">
                            <div class="card__image">
                                <img src="./assets/img/EXPORT 4 ME TEAM.jpg" alt="card image">
                            </div>

                            <div class="card__content">
                                <span class="card__title">Esraa Gomaa</span>
                                <span class="card__name">Market Research Analyst</span>
                                <ul class="social">
                                    <a href="tel:+1 (514) 623-1995" class="social-link">
                                        <i class="bx bxs-phone-call"></i>
                                    </a>
                                </ul>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </section>

        <!--==================== CONTACT ====================-->
        <section class="contact section" id="contact">
            <div class="contact__container container grid">
                <div class="contact__images">
                    <div class="contact__orbe"></div>
                    <div class="contact__img">
                        <img src="{{asset('assets/img/x4.jpg')}}" alt="contact"/>
                    </div>
                </div>
                <div class="contact__content">
                    <div class="contact_data">
                        <span class="section__subtitle">Contact Us</span>
                        <h2 class="section__title">Easy to Contact Us <span>.</span></h2>
                        <h3>Addres</h3>
                        <p class="contact__description">
                            H.office: 56 abbas akkad nasr city - cairo egypt <br/>
                            B. office: 1 Palestine & Al-Jabarti st Dream Tower - Port said
                        </p>
                    </div>

                    <h3>Osama Gomaa</h3>
                    <p class="contact__description">
                        Chief Executive Officer & Founder
                    </p>
                    <div class="contact__card">
                        <div class="contact__card-box">
                            <div class="contact__card-info">
                                <i class="bx bxs-phone-call"></i>
                                <div>
                                    <h3 class="contact__card-title">Mobile Phone</h3>
                                    <p class="contact__card-description">+1(514)651-6367</p>
                                </div>
                            </div>
                            <a href="tel:+1 (514) 651-6367">
                                <button class="button contact__card-button">Call Now</button>
                            </a>
                        </div>
                        <div class="contact__card-box">
                            <div class="contact__card-info">
                                <i class="bx bxs-envelope"></i>
                                <div>
                                    <h3 class="contact__card-title">Email</h3>
                                    <p class="contact__card-description">Send Email </p>
                                </div>
                            </div>
                            <a href="mailto:Osama@export4me.com">
                                <button class="button contact__card-button">
                                    Send Email
                                </button>
                            </a>
                        </div>
                        <div class="contact__card-box">
                            <div class="contact__card-info">
                                <i class="bx bxl-gmail"></i>
                                <div>
                                    <h3 class="contact__card-title">Gmail</h3>
                                    <p class="contact__card-description">Send Email </p>
                                </div>
                            </div>
                            <a href="mailto:Osama.g600@gmail.com">
                                <button class="button contact__card-button">
                                    Send Email
                                </button>
                            </a>
                        </div>
                        <div class="contact__card-box">
                            <div class="contact__card-info">
                                <i class="bx bxl-whatsapp"></i>
                                <div>
                                    <h3 class="contact__card-title">Whatsapp</h3>
                                    <p class="contact__card-description">Send Message</p>
                                </div>
                            </div>
                            <a href="https://wa.me/+201001003509">
                                <button class="button contact__card-button">
                                    Chat on Whatsapp
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <iframe
                        class="map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15076.89592087332!2d72.8319697277345!3d19.14167056419224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1641716772852!5m2!1sen!2sin"
                        allowfullscreen=""
                        loading="lazy"
                ></iframe>


                <form action="{{route('contact.us.store')}}" method="POST">
                    @csrf

                    <h3>get in touch</h3>
                    <label for="contact_name"><i class="bx bx-user"></i> Name</label>
                    <input type="text" name="contact_name" placeholder="enter your name"
                           class="box form-control @error('contact_name') is-invalid @enderror"
                           id="contact_name"/>
                    @error('contact_name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                    <label for="contact_email"><i class="bx bx-envelope"></i> Email</label>
                    <input type="email" name="contact_email" placeholder="enter your email address"
                           class="box form-control @error('contact_email') is-invalid @enderror"
                           id="contact_email"/>
                    @error('contact_email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                    <label for="contact_phone"><i class="bx bx-phone"></i> Phone</label>
                    <input type="text" name="contact_phone" placeholder="phone" class="box form-control
                    @error('contact_phone') is-invalid @enderror" id="contact_phone"/>
                    @error('contact_phone')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                    <label for="contact_message">
                        <i class="bx bx-message-rounded-dots"></i> Message</label>
                    <textarea name="contact_message" placeholder="message" id="contact_message"
                              class="box form-control  @error('contact_message') is-invalid @enderror" cols="30"
                              rows="10">
                    </textarea>
                    @error('contact_message')
                    <span class="text-danger">{{$message}}</span>
                    @enderror


                    <button class="button" type="submit">
                        send message <i class="bx bx-send"></i>
                    </button>
                </form>
            </div>
        </section>

        <!-- client logo section starts -->
        <!--
        <section class="logo-container">
            <div class="swiper logo-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide">
                        <img src="{{asset('assets/img/logo1.png')}}" alt="" />
                    </div>
                    <div class="swiper-slide slide">
                        <img src="{{asset('assets/img/logo2.png')}}" alt="" />
                    </div>
                    <div class="swiper-slide slide">
                        <img src="{{asset('assets/img/logo3.png')}}" alt="" />
                    </div>
                    <div class="swiper-slide slide">
                        <img src="{{asset('assets/img/logo4.png')}}" alt="" />
                    </div>
                </div>
            </div>
        </section> -->
    </main>

@endsection
