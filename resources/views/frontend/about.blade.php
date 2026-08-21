@extends('layouts.frontendLayout')

@section('title')
About us
@endsection

@section('content')
<div class="py-4 text-white" style="background: url('{{ asset('frontend/img/about-banner.png') }}') no-repeat center center/cover; background-color: #1a1a1a;">
    <div class="container ">
        <nav aria-label="breadcrumb" class="row align-item-center ">
            <ol class="breadcrumb mb-0 align-items-center">
                <li ><a href="{{ route('frontend.index') }}">
                        <iconify-icon icon="material-symbols:home-outline" width="24" height="24" ></iconify-icon> >
                    </a></li>
                <li><a href="{{ route('frontend.about') }}"> About </a></li>
            </ol>
        </nav>
    </div>
</div>

<section id="about-1" class="py-5 my-4">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="display-6 fw-bold mb-4" style="color: #1a1a1a; font-family: 'Poppins', sans-serif;">
                    100% Trusted <br>Organic Food Store
                </h2>
                <p class="text-muted lh-lg" style="font-size: 0.95rem;">
                    Morbi porttitor ligula in nunc varius sagittis. Proin dui nisi, laoreet ut tempor ac, cursus vitae eros. Cras quis ultricies elit. Proin ac lectus arcu. Maecenas aliquet vel tellus at accumsan. Donec a eros non massa vulputate ornare. Vivamus ornare commodo ante, at commodo felis congue vitae.
                </p>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('frontend/img/about-1.jpg') }}" alt="Organic Farming" class="img-fluid rounded-4 shadow-sm w-100">
            </div>
        </div>
    </div>
</section>

<section id="about-2" class="py-5" style="background-color: #fcfdfc;">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <img src="{{ asset('frontend/img/about-2.jpg') }}" alt="Farmer with harvest" class="img-fluid rounded-4 w-100">
            </div>
            <div class="col-lg-6">
                <h2 class="display-6 fw-bold mb-4" style="color: #002603; font-family: 'Poppins', sans-serif;">
                    100% Trusted <br>Organic Food Store
                </h2>
                <p class="text-muted lh-lg mb-5" style="font-size: 0.95rem;">
                    Pellentesque a ante vulputate leo porttitor luctus sed eget eros. Nulla et rhoncus neque. Duis non diam eget lectus tincidunt a a mi. Nulla eu eros consequat tortor tincidunt feugiat.
                </p>

                <div class="row g-4">
                    <div class="col-sm-6 d-flex align-items-start gap-3">
                        <div class="p-2 rounded-circle d-flex align-items-center justify-content-center" style="background-color: #e6f7e6; color: #00b207; width: 44px; height: 44px; flex-shrink: 0;">
                            <i class="bx bx-leaf fs-4"></i>
                        </div>
                        <div>
                            <h6 class="fw-semibold mb-1" style="color: #1a1a1a;">100% Organic food</h6>
                            <p class="text-muted small mb-0">100% healthy & Fresh food.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 d-flex align-items-start gap-3">
                        <div class="p-2 rounded-circle d-flex align-items-center justify-content-center" style="background-color: #e6f7e6; color: #00b207; width: 44px; height: 44px; flex-shrink: 0;">
                            <i class="bx bx-support fs-4"></i>
                        </div>
                        <div>
                            <h6 class="fw-semibold mb-1" style="color: #1a1a1a;">Great Support 24/7</h6>
                            <p class="text-muted small mb-0">Instant access to Contact.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 d-flex align-items-start gap-3">
                        <div class="p-2 rounded-circle d-flex align-items-center justify-content-center" style="background-color: #e6f7e6; color: #00b207; width: 44px; height: 44px; flex-shrink: 0;">
                            <i class="bx bx-star fs-4"></i>
                        </div>
                        <div>
                            <h6 class="fw-semibold mb-1" style="color: #1a1a1a;">Customer Feedback</h6>
                            <p class="text-muted small mb-0">Our happy customer.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 d-flex align-items-start gap-3">
                        <div class="p-2 rounded-circle d-flex align-items-center justify-content-center" style="background-color: #e6f7e6; color: #00b207; width: 44px; height: 44px; flex-shrink: 0;">
                            <i class="bx bx-shield-quarter fs-4"></i>
                        </div>
                        <div>
                            <h6 class="fw-semibold mb-1" style="color: #1a1a1a;">100% Secure Payment</h6>
                            <p class="text-muted small mb-0">We ensure your money is safe.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 d-flex align-items-start gap-3">
                        <div class="p-2 rounded-circle d-flex align-items-center justify-content-center" style="background-color: #e6f7e6; color: #00b207; width: 44px; height: 44px; flex-shrink: 0;">
                            <i class="bx bx-package fs-4"></i>
                        </div>
                        <div>
                            <h6 class="fw-semibold mb-1" style="color: #1a1a1a;">Free Shipping</h6>
                            <p class="text-muted small mb-0">Free shipping with discount.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 d-flex align-items-start gap-3">
                        <div class="p-2 rounded-circle d-flex align-items-center justify-content-center" style="background-color: #e6f7e6; color: #00b207; width: 44px; height: 44px; flex-shrink: 0;">
                            <i class="bx bx-cube fs-4"></i>
                        </div>
                        <div>
                            <h6 class="fw-semibold mb-1" style="color: #1a1a1a;">100% Organic Food</h6>
                            <p class="text-muted small mb-0">100% healthy & Fresh food.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="aboutDelivery" class="py-5 text-white" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{ asset('frontend/img/delivery-banner.jpg') }}') no-repeat center center/cover;">
    <div class="container py-4">
        <div class="row align-items-center g-4">
            <div class="col-md-8">
                <h2 class="fw-bold mb-2" style="font-family: 'Poppins', sans-serif;">We Deliver Fresh Organic Food Directly To Your Doorstep</h2>
                <p class="mb-0 text-white-50">Enjoy ultra-fresh produce selected carefully by our dedicated farmers, handling every package with absolute love and care.</p>
            </div>
            <div class="col-md-4 text-md-end">
                <a href="{{ route('frontend.shop') }}" class="btn btn-lg text-white px-4 py-2 fw-medium border-0 transition" style="background-color: #00b207; border-radius: 30px;">Shop Now <i class="bx bx-right-arrow-alt align-middle ms-1"></i></a>
            </div>
        </div>
    </div>
</section>

<section id="awesomeTeam" class="py-5 my-4">
    <div class="container text-center">
        <div class="max-w-xl mx-auto mb-5">
            <h2 class="fw-bold mb-2" style="color: #1a1a1a; font-family: 'Poppins', sans-serif;">Our Awesome Team</h2>
            <p class="text-muted small">Meet the organic pioneers dedicated to making clean eating easily accessible to everyone.</p>
        </div>
        <div class="row g-4">
            <div class="col-sm-6 col-md-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden text-center transition-all">
                    <img src="{{ asset('frontend/img/team-1.jpg') }}" alt="Team member" class="card-img-top">
                    <div class="card-body p-3">
                        <h6 class="fw-bold mb-1" style="color: #1a1a1a;">Jenny Wilson</h6>
                        <p class="text-muted small mb-0">CEO & Founder</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden text-center transition-all">
                    <img src="{{ asset('frontend/img/team-2.jpg') }}" alt="Team member" class="card-img-top">
                    <div class="card-body p-3">
                        <h6 class="fw-bold mb-1" style="color: #1a1a1a;">Jane Cooper</h6>
                        <p class="text-muted small mb-0">Head Farmer</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden text-center transition-all">
                    <img src="{{ asset('frontend/img/team-3.jpg') }}" alt="Team member" class="card-img-top">
                    <div class="card-body p-3">
                        <h6 class="fw-bold mb-1" style="color: #1a1a1a;">Cody Fisher</h6>
                        <p class="text-muted small mb-0">Security Manager</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden text-center transition-all">
                    <img src="{{ asset('frontend/img/team-4.jpg') }}" alt="Team member" class="card-img-top">
                    <div class="card-body p-3">
                        <h6 class="fw-bold mb-1" style="color: #1a1a1a;">Robert Fox</h6>
                        <p class="text-muted small mb-0">Senior Logistics</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="clientTestimonial" class="py-5" style="background-color: #f7f9f7;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-2" style="color: #1a1a1a; font-family: 'Poppins', sans-serif;">Our Client Testimonials</h2>
            <p class="text-muted small">See what our health-conscious family of customers has to say.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="bg-white p-4 rounded-4 shadow-sm h-100 d-flex flex-column justify-content-between">
                    <div>
                        <i class="bx bxs-quote-left fs-1 mb-3" style="color: #00b207; opacity: 0.3;"></i>
                        <p class="text-muted small lh-lg mb-4">"The delivery is always on time, and the quality of the vegetables beats any store out there. They stay fresh all week!"</p>
                    </div>
                    <div class="d-flex align-items-center gap-3 pt-2 border-top">
                        <img src="{{ asset('frontend/img/user-1.jpg') }}" alt="Client" class="rounded-circle" style="width: 48px; height: 48px; object-fit: cover;">
                        <div>
                            <h6 class="fw-semibold mb-0" style="font-size: 0.9rem;">Eleanor Pena</h6>
                             <p class="text-muted small lh-lg mb-4">"Customer"</p>
                            <div class="text-warning small"><i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-white p-4 rounded-4 shadow-sm h-100 d-flex flex-column justify-content-between">
                    <div>
                        <i class="bx bxs-quote-left fs-1 mb-3" style="color: #00b207; opacity: 0.3;"></i>
                        <p class="text-muted small lh-lg mb-4">"Finding clean organic eggs and fruits used to be a hassle. Now I order everything securely within minutes right here."</p>
                    </div>
                    <div class="d-flex align-items-center gap-3 pt-2 border-top">
                        <img src="{{ asset('frontend/img/user-2.jpg') }}" alt="Client" class="rounded-circle" style="width: 48px; height: 48px; object-fit: cover;">
                        <div>
                            <h6 class="fw-semibold mb-0" style="font-size: 0.9rem;">Devon Lane</h6>
                            <div class="text-warning small"><i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-white p-4 rounded-4 shadow-sm h-100 d-flex flex-column justify-content-between">
                    <div>
                        <i class="bx bxs-quote-left fs-1 mb-3" style="color: #00b207; opacity: 0.3;"></i>
                        <p class="text-muted small lh-lg mb-4">"Excellent customer support. Had a minor product damage issue from delivery and they resolved/replaced it instantly!"</p>
                    </div>
                    <div class="d-flex align-items-center gap-3 pt-2 border-top">
                        <img src="{{ asset('frontend/img/user-3.jpg') }}" alt="Client" class="rounded-circle" style="width: 48px; height: 48px; object-fit: cover;">
                        <div>
                            <h6 class="fw-semibold mb-0" style="font-size: 0.9rem;">Kathryn Murphy</h6>
                            <div class="text-warning small"><i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="partner" class="py-5" style="background-color: #ffffff;">
    <div class="container text-center">
        <div class="row align-items-center justify-content-center g-5 opacity-75">
            <div class="col-4 col-sm-2"><img src="{{ asset('frontend/img/partner-1.png') }}" alt="Brand" class="img-fluid" style="max-height: 40px; filter: grayscale(100%);"></div>
            <div class="col-4 col-sm-2"><img src="{{ asset('frontend/img/partner-2.png') }}" alt="Brand" class="img-fluid" style="max-height: 40px; filter: grayscale(100%);"></div>
            <div class="col-4 col-sm-2"><img src="{{ asset('frontend/img/partner-3.png') }}" alt="Brand" class="img-fluid" style="max-height: 40px; filter: grayscale(100%);"></div>
            <div class="col-4 col-sm-2"><img src="{{ asset('frontend/img/partner-4.png') }}" alt="Brand" class="img-fluid" style="max-height: 40px; filter: grayscale(100%);"></div>
            <div class="col-4 col-sm-2"><img src="{{ asset('frontend/img/partner-5.png') }}" alt="Brand" class="img-fluid" style="max-height: 40px; filter: grayscale(100%);"></div>
            <div class="col-4 col-sm-2"><img src="{{ asset('frontend/img/partner-6.png') }}" alt="Brand" class="img-fluid" style="max-height: 40px; filter: grayscale(100%);"></div>
        </div>
    </div>
</section>

<section id="subscribe" class="py-4" style="background-color: #f2f2f2;">
    <div class="container">
        <div class="row align-items-center g-3">
            <div class="col-lg-4">
                <h5 class="fw-bold mb-1" style="color: #1a1a1a;">Subcribe our Newsletter</h5>
                <p class="text-muted small mb-0">Pellentesque a ante vulputate leo porttitor luctus sed.</p>
            </div>
            <div class="col-lg-5">
                <form action="#" method="POST" class="d-flex align-items-center gap-0 bg-white p-1 rounded-pill shadow-sm overflow-hidden border">
                    @csrf
                    <input type="email" placeholder="Your email address" class="form-control border-0 px-4 py-2 shadow-none" style="border-radius: 30px 0 0 30px; font-size: 0.9rem;" required>
                    <button type="submit" class="btn text-white px-4 py-2 fw-medium border-0" style="background-color: #00b207; border-radius: 30px; min-width: 140px; font-size: 0.9rem;">Subscribe</button>
                </form>
            </div>
            
            <div class="col-lg-3">
                <div class="aboutSocialMedia" >
                        <ul class= d-flex >
                            <li><a href="#">
                                    <iconify-icon icon="ri:facebook-fill"></iconify-icon>
                                </a></li>
                            <li><a href="#">
                                    <iconify-icon icon="mynaui:twitter"></iconify-icon>
                                </a></li>
                            <li><a href="#">
                                    <iconify-icon icon="mingcute:pinterest-line"></iconify-icon>
                                </a></li>
                            <li><a href="#">
                                    <iconify-icon icon="mdi:instagram"></iconify-icon>
                                </a></li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection