@extends('partisan.main')
@section('content')
    <!--====================================
                        =            Hero Section            =
                        =====================================-->
    <section class="section gradient-banner" id="home">
        <div class="shapes-container">
            <div class="shape" data-aos="fade-down-left" data-aos-duration="1500" data-aos-delay="100"></div>
            <div class="shape" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"></div>
            <div class="shape" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200"></div>
            <div class="shape" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"></div>
            <div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
            <div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
            <div class="shape" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300"></div>
            <div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="200"></div>
            <div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="100"></div>
            <div class="shape" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="500"></div>
            <div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="200"></div>
            <div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="100"></div>
            <div class="shape" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"></div>
            <div class="shape" data-aos="fade-down" data-aos-duration="500" data-aos-delay="0"></div>
            <div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="100"></div>
            <div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="0"></div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-2 order-md-1 text-center text-md-left">
                    <h1 class="text-white title font-weight-bold mb-4">ANAGATA SEMBAGI<br><span>EDUCATION.</span></h1>
                    <p class="text-white mb-5">Welcome to PT Anagata Sembagi Education, a platform that inspires and
                        broadens horizons through the publication of journals and articles. Discover deep knowledge,
                        cutting-edge innovations, and enriching perspectives under our wing.</p>
                    <a href="https://nawalaeducation.com/" target="_blank" class="btn btn-main-md">PUBLISHING NOW</a>
                </div>
                <div class="col-md-6 text-center order-1 order-md-2">
                    <img class="img-fluid" src="{{ asset('assets/book.png') }}" alt="screenshot">
                </div>
            </div>
        </div>
    </section>
    <!--====  End of Hero Section  ====-->

    <section class="section pt-0 position-relative pull-top" id="service">
        <div class="container">
            <div class="rounded shadow p-5 bg-white">
                <h3 class="text-center">Kami menyediakan layanan publikasi jurnal dengan kualitas yang baik! <br>dengan
                    tahapan sebagai berikut:</h3>
                <div class="row mt-4">
                    <div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
                        <i class="ti-comments text-primary h1"></i>
                        <h3 class="mt-4 text-capitalize h5 ">Konsultasi</h3>
                        <p class="regular text-muted">Konsultasikan dengan staff kami apa yang Anda cari dan apa kemauan
                            Anda!</p>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
                        <i class="ti-cloud-up text-primary h1"></i>
                        <h3 class="mt-4 text-capitalize h5 ">Proses Publikasi</h3>
                        <p class="regular text-muted">Kami akan memproses publikasi jurnal Anda sesuai estimasi waktu yang
                            akan diberikan!</p>
                    </div>
                    <div class="col-lg-4 col-md-12 mt-5 mt-lg-0 text-center">
                        <i class="ti-rss-alt text-primary h1"></i>
                        <h3 class="mt-4 text-capitalize h5 ">Publikasi Selesai</h3>
                        <p class="regular text-muted">Jurnal Anda telah usai di proses dan sekarang resmi terpublikasi!</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==================================
                        =            Feature Grid            =
                        ===================================-->
    <section class="feature section pt-0"id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ml-auto justify-content-center">
                    <!-- Feature Mockup -->
                    <div class="image-content" data-aos="fade-right">
                        <img class="img-fluid" src="{{ asset('assets/book.png') }}" alt="iphone">
                    </div>
                </div>
                <div class="col-lg-6 mr-auto align-self-center">
                    <div class="feature-content">
                        <!-- Feature Title -->
                        <h2>What is <br>Anagata Sembagi Education?</h2>
                        <!-- Feature Description -->
                        <p class="desc">"At PT Anagata Sembagi Education, we believe that knowledge is the key to
                            changing the world. Since our inception, we have been committed to being a leading provider in
                            publishing journals and articles that empower learning and research across various fields. With
                            a dedicated team of experts, we strive to provide a platform that facilitates the exchange of
                            ideas, collaboration, and innovation. Join us in exploring and illuminating the path to deeper
                            knowledge and broader understanding."</p>
                    </div>
                    <!-- Testimonial Quote -->
                    <div class="testimonial">
                        <p>
                            "Explore the boundaries of knowledge, inspiration, and collaboration with PT Anagata Sembagi
                            Education. Let's together carve a path of deep understanding and bring positive change to the
                            world."
                        </p>
                        <ul class="list-inline meta">
                            <li class="list-inline-item">
                                <img src="{{ asset('apps/images/team/marketing-team-02.jpg') }}"
                                    alt="">
                            </li>
                            <li class="list-inline-item">Jonathon Andrew , Manager</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature section pt-0" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ml-auto align-self-center">
                    <div class="feature-content">
                        <!-- Feature Title -->
                        <h2>Publish your articles with <a href="https://nawalaeducation.com/" target="_blank">Nawala
                                Education</a></h2>
                        <!-- Feature Description -->
                        <p>Experience excellence in academic publishing with PT Anagata Sembagi Education's collaboration
                            with Nawala Education. Our comprehensive range of journals covers a diverse array of subjects,
                            providing a platform for scholars, researchers, and professionals to disseminate their findings,
                            theories, and insights to a global audience. With a commitment to quality and innovation, we
                            ensure that each publication meets rigorous standards of academic integrity and relevance.
                            Explore our collection and elevate your research endeavors with PT Anagata Sembagi Education.
                        </p>
                    </div>
                    <!-- Testimonial Quote -->
                    <div class="testimonial">
                        <p>
                            "Explore the boundaries of knowledge, inspiration, and collaboration with PT Anagata Sembagi
                            Education. Let's together carve a path of deep understanding and bring positive change to the
                            world."
                        </p>
                        <ul class="list-inline meta">
                            <li class="list-inline-item">
                                <img src="{{ asset('apps/images/team/design-team-01.jpg') }}"
                                    alt="">
                            </li>
                            <li class="list-inline-item">Intan Juniarmi , Chieff Editor</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 mr-auto justify-content-center">
                    <!-- Feature mockup -->
                    <div class="image-content" data-aos="fade-left">
                        <img class="img-fluid" src="{{ asset('assets/book.png') }}" alt="ipad">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====  End of Feature Grid  ====-->

    <!--=====================================
            =            Address and Map            =
            ======================================-->
    <section class="address" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-center">
                    <div class="block">
                        <div class="address-block text-center mb-5">
                            <div class="icon">
                                <i class="ti-mobile"></i>
                            </div>
                            <div class="details">
                                <h3>(+62) 789 456 7890 (USA)</h3>
                                <h3>Nawalaedu@gmail.com</h3>
                            </div>
                        </div>
                        <div class="address-block text-center">
                            <div class="icon">
                                <i class="ti-map-alt"></i>
                            </div>
                            <div class="details">
                                <h3> Jl. Raya Yamin No.88 Desa/Kelurahan Telanaipura, kec.Telanaipura, Kota Jambi, Jambi
                                </h3>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0">
                    <div class="google-map">
                        <!-- Google Map -->
                        <iframe id="map_canvas" style="border: 0;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.2354862527054!2d103.58305187404781!3d-1.6139613360701068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2588613bad5529%3A0xaffa5a9ecb6016b!2sJl.%20Raja%20Yamin%20No.88!5e0!3m2!1sen!2sid!4v1709095326885!5m2!1sen!2sid"
                            width="600" height="450" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====  End of Address and Map  ====-->
@endsection
