@extends('frontend.layouts.app')
@section('content')
    <!--==================== MAIN ====================-->
    <main class="main">
        <!-- Page Selection Popup -->
        <div id="page-selection-popup" class="popup">
            <div class="popup-content">
                <span class="close-button" onclick="closePopup()">&times;</span>
                <h1 class="section__title center">Welcome to our website</h1>
                <h2 class="section__subtitle center">
                    Choose the type to fill out the form
                </h2>
                <div class="page-links">
                    <a href="{{route('frontend.extract')}}">
                        <img src="{{asset('assets/img/5.jpg')}}" alt="صفحة 3"/>
                    </a>

                    <a href="{{route('frontend.import')}}">
                        <img src="{{asset('assets/img/4.jpg')}}" alt="صفحة 3"/>
                    </a>


                    <a href="{{route('frontend.export')}}">
                        <img src="{{asset('assets/img/3.jpg')}}" alt="صفحة 3" />
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
                        Discover Emirates Group
                        Your Global Trade Partner
                    </h1>

                    <p class="home__description">
                        At Emirates Group, we specialize in the dynamic world of international marketing, import & export,
                        International Shipping, and Customs Clearance, primarily in the MENA region and Europe, Start Now ..
                    </p>


                    <div class="home__value">
                        <div>
                            <h1 class="home_value-number">9K <span>+</span></h1>
                            <span class="home__value_description">
                  Customs <br />
                  certificate
                </span>
                        </div>
                        <div>
                            <h1 class="home_value-number">2K <span>+</span></h1>
                            <span class="home__value_description">
                  Happy <br />
                  client
                </span>
                        </div>
                        <div>
                            <h1 class="home_value-number">27K <span>+</span></h1>
                            <span class="home__value_description">
                  container &<br />
                  Shipments
                </span>
                        </div>
                    </div>
                </div>

                <div class="home__images">
                    <div class="home__orbe"></div>

                    <div class="home__img">
                        <img src="{{asset('assets/img/ex.jpg')}}" alt="home" />
                    </div>
                </div>
            </div>
        </section>

        <!--==================== POPULAR ====================-->
        <section class="popular section" id="popular">
            <div class="container">
                <span class="section__subtitle">Best Choise</span>
                <h2 class="section__title"> Choose the type & Register now <span>.</span></h2>

                <div class="popular__container swiper">
                    <div class="swiper-wrapper">
                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/1.jpg')}}" alt="" class="popular__img" />
                            <div class="popular__date">
                  <span class="section__subtitle"
                  >Marine insurance</span
                  >
                                <!-- <h3 class="popular-title">form</h3> -->
                                <p class="popular__description">
                                    <a href="./Insurancecompanies.html">Register Now</a>
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/4.jpg')}}" alt="" class="popular__img" />
                            <div class="popular__date">
                                <span class="section__subtitle">Importer </span>
                                <!-- <h3 class="popular-title">Minimize Manufacturing</h3> -->
                                <p class="popular__description">
                                    <a href="./import.html">Register Now</a>
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/3.jpg')}}" alt="" class="popular__img" />
                            <div class="popular__date">
                                <span class="section__subtitle">Exporter </span>
                                <!-- <h3 class="popular-title">Warehouse inventory</h3> -->
                                <p class="popular__description">
                                    <a href="./export.html">Register Now</a>
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/2.jpg')}}" alt="" class="popular__img" />
                            <div class="popular__date">
                                <span class="section__subtitle">Shipping Company </span>
                                <!-- <h3 class="popular-title">Warehouse inventory</h3> -->
                                <p class="popular__description">
                                    <a href="./shippingcompany.html">Register Now</a>
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/5.jpg')}}" alt="" class="popular__img" />
                            <div class="popular__date">
                                <span class="section__subtitle">Extract </span>
                                <!-- <h3 class="popular-title">Minimize Manufacturing</h3> -->
                                <p class="popular__description">
                                    <a href="./extract.html">Register Now</a>
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
                        <img src="{{asset('assets/img/about-banner.jpg')}}" alt="value" />
                    </div>
                </div>
                <div class="value__content">
                    <div class="value__date">
                        <span class="section__subtitle">About Us</span>
                        <h2 class="section__title">WHY CHOOSE US <span>?</span></h2>
                        <p class="value__description">
                            Since 2008, we've been a driving force, and we're proud to be a sister company of
                            Emirates Group Real Estate Developments & Investments,
                            founded by our esteemed CEO & Accountant, Osama Al-Metwally.
                        </p>
                    </div>
                    <div class="value__accordion">
                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class="bx bxs-check-shield value__accordion-icon"></i>
                                <h3 class="value__accordion-title">WE ARE TRUSTED</h3>
                                <div class="value__accordion-arrow">
                                    <i class="bx bxs-down-arrow"></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <p class="value__accordion-description">
                                    Price we provides is the best for you, we guarantee no price
                                    changes on your property due to various unexpected cost that
                                    may come.
                                </p>
                            </div>
                        </div>
                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class="bx bxs-lock value__accordion-icon"></i>
                                <h3 class="value__accordion-title">THE BEST SECURITY</h3>
                                <div class="value__accordion-arrow">
                                    <i class="bx bxs-down-arrow"></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <p class="value__accordion-description">
                                    Price we provides is the best for you, we guarantee no price
                                    changes on your property due to various unexpected cost that
                                    may come.
                                </p>
                            </div>
                        </div>
                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class="bx bxs-like value__accordion-icon"></i>
                                <h3 class="value__accordion-title">100 % GUARANTEE</h3>
                                <div class="value__accordion-arrow">
                                    <i class="bx bxs-down-arrow"></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <p class="value__accordion-description">
                                    Price we provides is the best for you, we guarantee no price
                                    changes on your property due to various unexpected cost that
                                    may come.
                                </p>
                            </div>
                        </div>
                        <div class="value__accordion-item">
                            <header class="value__accordion-header">
                                <i class="bx bx-current-location value__accordion-icon"></i>
                                <h3 class="value__accordion-title">QUICK LOCATION</h3>
                                <div class="value__accordion-arrow">
                                    <i class="bx bxs-down-arrow"></i>
                                </div>
                            </header>

                            <div class="value__accordion-content">
                                <p class="value__accordion-description">
                                    Price we provides is the best for you, we guarantee no price
                                    changes on your property due to various unexpected cost that
                                    may come.
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
                        <span class="section__subtitle">ALL SERVICES</span>
                        <h2 class="section__title">Trusted For Our Services <span>?</span></h2>
                        <p class="value__description">
                            Export4me.com – Your Gateway to Quality: Explore our cutting-edge online platform, export4me.com,
                            granting you access to a handpicked selection of top-quality products from factories worldwide.
                        </p>
                    </div>
                    <ul class="service-list grid-list">
                        <li>
                            <div class="service-card">

                                <div class="card-icon">
                                    <img src="{{asset('assets/img/feature-icon-3.png')}}" width="90" height="91" alt="">
                                </div>

                                <h3 class="h3 card-title">
                                    <span class="span">01</span> New Markets Abroad
                                </h3>

                                <p class="card-text">
                                    Unleash New Markets Abroad: Let us help you expand your horizons by facilitating B2B exports to the MENA region. We streamline communication and ensure your deals go off without a hitch.
                                </p>

                                <a href="#" class="btn-link">
                                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                                    <span class="span">View Detail</span>
                                </a>

                            </div>
                        </li>

                        <li>
                            <div class="service-card">

                                <div class="card-icon">
                                    <img src="{{asset('assets/img/feature-icon-2.png')}}" width="72" height="91" loading="lazy" alt="Trolley">
                                </div>

                                <h3 class="h3 card-title">
                                    <span class="span">02</span> International Partner Hospitality
                                </h3>

                                <p class="card-text">
                                    International Partner Hospitality: For international importers visiting Egypt, we offer
                                    comprehensive services to make their trip a success and facilitate closing lucrative export deals.
                                </p>

                                <a href="#" class="btn-link">
                                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                                    <span class="span">View Detail</span>
                                </a>

                            </div>
                        </li>

                        <li>
                            <div class="service-card">

                                <div class="card-icon">
                                    <img src="{{asset('assets/img/feature-icon-1.png')}}" width="72" height="91" alt="">
                                </div>

                                <h3 class="h3 card-title">
                                    <span class="span">03</span> Video Marketing
                                </h3>

                                <p class="card-text">
                                    Market Research and Insights: Trust us to provide
                                    essential market studies to factory owners seeking to launch their products internationally.
                                </p>

                                <a href="#" class="btn-link">
                                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                                    <span class="span">View Detail</span>
                                </a>

                            </div>
                        </li>

                        <li>
                            <div class="service-card">

                                <div class="card-icon">
                                    <img src="{{asset('assets/img/service-icon-6.png')}}" width="72" height="91" alt="Paper">
                                </div>

                                <h3 class="h3 card-title">
                                    <span class="span">04</span> Market Research
                                </h3>

                                <p class="card-text">
                                    Market Research and Insights: Trust us to provide essential
                                    market studies to factory owners seeking to launch their products internationally.
                                </p>

                                <a href="#" class="btn-link">
                                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                                    <span class="span">View Detail</span>
                                </a>

                            </div>
                        </li>

                        <li>
                            <div class="service-card">

                                <div class="card-icon">
                                    <img src="{{asset('assets/img/service-icon-3.png')}}" width="72" height="91" alt="Airplane">
                                </div>

                                <h3 class="h3 card-title">
                                    <span class="span">05</span> Seamless Logistics
                                </h3>

                                <p class="card-text">
                                    Seamless Logistics: We take care of all the logistics, ensuring a hassle-free export process.
                                </p>

                                <a href="#" class="btn-link">
                                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                                    <span class="span">View Detail</span>
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
                <span class="section__subtitle">Sectors We Excel In:</span>
                <h2 class="section__title"> Our expertise spans various sectors, including <span>:</span></h2>

                <div class="popular__container swiper">
                    <div class="swiper-wrapper">
                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/Oil.jpg')}}" alt="" class="popular__img" />

                            <div class="popular__date">
                  <span class="section__subtitle"
                  >Oil, sugar, corn, and flour</span
                  >{{asset('
                      ')}}          <!-- <h3 class="popular-title">form</h3> -->
                                <p class="popular__description">
                                    <span href="">(Origin: Brazil, India, Kazakhstan, and Turkey)</span>
                                </p>
                            </div>
                        </article>

                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/Petroleum.jpg')}}" alt="" class="popular__img" />
                            <div class="popular__date">
                                <span class="section__subtitle">Petroleum materials and diesel supply </span>
                                <!-- <h3 class="popular-title">Minimize Manufacturing</h3> -->
                                <p class="popular__description">
                                    <span href="">(Origin: Kazakhstan)</span>
                                </p>
                            </div>
                        </article>

                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/Furniture.jpg')}}" alt="" class="popular__img" />
                            <div class="popular__date">
                                <span class="section__subtitle">Furniture </span>
                                <!-- <h3 class="popular-title">Warehouse inventory</h3> -->
                                <p class="popular__description">
                                    <span href="">Home, school, and hospital furniture</span>
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/Food.jpg')}}" alt="" class="popular__img" />
                            <div class="popular__date">
                                <span class="section__subtitle">Food industries </span>
                                <!-- <h3 class="popular-title">Warehouse inventory</h3> -->
                                <p class="popular__description">
                                    <span href="">frozen, canned goods, and olive oil</span>
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/Chemical.jpg')}}" alt="" class="popular__img" />
                            <div class="popular__date">
                                <span class="section__subtitle">Chemical industries </span>
                                <!-- <h3 class="popular-title">Minimize Manufacturing</h3> -->
                                <p class="popular__description">
                                    <span href="">NPK fertilizers and automobile oils</span>
                                </p>
                            </div>
                        </article>

                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/Housewares.jpg')}}" alt="" class="popular__img" />
                            <div class="popular__date">
                                <span class="section__subtitle"> Housewares  </span>
                                <!-- <h3 class="popular-title">Minimize Manufacturing</h3> -->
                                <p class="popular__description">
                                    <span href=""> plastic industries</span>
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/Medicines.jpg')}}" alt="" class="popular__img" />
                            <div class="popular__date">
                                <span class="section__subtitle">Medicines </span>
                                <!-- <h3 class="popular-title">Minimize Manufacturing</h3> -->
                                <p class="popular__description">
                                    <span href="">Medicines, medical supplies, cosmetics, and diapers</span>
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/Agricultural.jpg')}}" alt="" class="popular__img" />
                            <div class="popular__date">
                                <span class="section__subtitle">Agricultural industries </span>
                                <!-- <h3 class="popular-title">Minimize Manufacturing</h3> -->
                                <p class="popular__description">
                                    <span href="">animal feed, concentrates, and veterinary medicines</span>
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/leather.jpg')}}" alt="" class="popular__img" />
                            <div class="popular__date">
                                <span class="section__subtitle">leather industries </span>
                                <!-- <h3 class="popular-title">Minimize Manufacturing</h3> -->
                                <p class="popular__description">
                                    <span href="">Various leather industries and edible leather</span>
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/Construction.jpg')}}" alt="" class="popular__img" />
                            <div class="popular__date">
                                <span class="section__subtitle">Construction  </span>
                                <!-- <h3 class="popular-title">Minimize Manufacturing</h3> -->
                                <p class="popular__description">
                                    <span href="">Construction and building materials, including calcium carbonate</span>
                                </p>
                            </div>
                        </article>
                        <article class="popular__card swiper-slide">
                            <img src="{{asset('assets/img/Textile industries.jpg')}}" alt="" class="popular__img" />
                            <div class="popular__date">
                                <span class="section__subtitle">Textile industries </span>
                                <!-- <h3 class="popular-title">Minimize Manufacturing</h3> -->
                                <p class="popular__description">
                                    <span href="">from ready-made women's underwear to children's clothes and curtain fabrics.</span>
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
                <h2 class="section__title">Our Values <span>.</span></h2>
                <p class="home__description">
                    Discover Emirates Group today and embark on a journey of
                    limitless possibilities in the world of international trade. Your success is our business.
                </p>

                <!-- <img src="./assets/img/newsletter-banner.png" alt="" /> -->

                <div class="value__accordion">
                    <div class="value__accordion-item">
                        <header class="value__accordion-header">
                            <i class="bx bxs-check-shield value__accordion-icon"></i>
                            <h3 class="value__accordion-title">Our mission</h3>
                            <div class="value__accordion-arrow">
                                <i class="bx bxs-down-arrow"></i>
                            </div>
                        </header>

                        <div class="value__accordion-content">
                            <p class="value__accordion-description">
                                Our mission is to increase the volume of Egyptian exports,
                                instill external confidence in Egyptian products, and expand the global reach of
                                Egyptian factories. We are dedicated to delivering excellence in marketing and
                                export performance.
                            </p>
                        </div>
                    </div>
                    <div class="value__accordion-item">
                        <header class="value__accordion-header">
                            <i class="bx bxs-check-shield value__accordion-icon"></i>
                            <h3 class="value__accordion-title">Our vision</h3>
                            <div class="value__accordion-arrow">
                                <i class="bx bxs-down-arrow"></i>
                            </div>
                        </header>

                        <div class="value__accordion-content">
                            <p class="value__accordion-description">
                                Our vision is clear – we aim to foster economic relationships that elevate the status of
                                Egyptian products in the global marketplace.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!--==================== CONTACT ====================-->
        <section class="contact section" id="contact">
            <div class="contact__container container grid">
                <div class="contact__images">
                    <div class="contact__orbe"></div>
                    <div class="contact__img">
                        <img src="{{asset('assets/img/about-banner.jpg')}}" alt="contact" />
                    </div>
                </div>
                <div class="contact__content">
                    <div class="contact_data">
                        <span class="section__subtitle">Contact Us</span>
                        <h2 class="section__title">Easy to Contact Us <span>.</span></h2>
                        <h3>Addres</h3>
                        <p class="contact__description">
                            H.office: 56 abbas akkad nasr city - cairo egypt <br />
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
                                    <p class="contact__card-description">+1 (514) 651-6367</p>
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
                                    <p class="contact__card-description">Osama@export4me.com </p>
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
                                    <p class="contact__card-description">Osama.g600@gmail.com  </p>
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
                <form action="">
                    <h3>get in touch</h3>
                    <label for=""><i class="bx bx-user"></i> Name</label>
                    <input type="text" placeholder="enter your name" class="box" />
                    <label for=""><i class="bx bx-envelope"></i> Email</label>
                    <input
                        type="email"
                        placeholder="enter your email address"
                        class="box"
                    />
                    <label for=""><i class="bx bx-phone"></i> Phone</label>
                    <input type="number" placeholder="phone" class="box" />
                    <label for=""
                    ><i class="bx bx-message-rounded-dots"></i> Message</label
                    >
                    <textarea
                        name=""
                        placeholder="message"
                        class="box"
                        id=""
                        cols="30"
                        rows="10"
                    ></textarea>
                    <button class="button" type="submit">
                        send message <i class="bx bx-send"></i>
                    </button>
                </form>
            </div>
        </section>

        <!-- client logo section starts -->

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
        </section>
    </main>


@endsection
