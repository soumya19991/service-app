@php
    // Define available gradient classes
    $colors = ['clorOne', 'clorTwo', 'clorThre', 'clorFour', 'clorFive'];
@endphp

@extends('frontend.layouts.app')

@push('styles')
    <!-- CSS -->
    <style>
        .popularPnel {
            background: #fff;
        }

        .trainerHed h2 {
            font-size: 2rem;
            font-weight: 700;
            text-transform: uppercase;
        }

        .popularBx {
            border-radius: 15px;
            color: #fff;
            transition: all 0.3s ease;
            height: 100%;
        }

        .popularBx:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .popularBx figure img {
            width: 80px;
            height: 80px;
            object-fit: contain;
        }

        .bookBtn {
            display: inline-block;
            padding: 6px 14px;
            background: #fff;
            color: #000;
            font-weight: 600;
            border-radius: 20px;
            text-decoration: none;
            transition: background 0.3s ease, color 0.3s ease;
        }

        .bookBtn:hover {
            background: #000;
            color: #fff;
        }

        /* Gradient Backgrounds */
        .clorOne {
            background: linear-gradient(135deg, #FFC107, #FFD740);
        }

        .clorTwo {
            background: linear-gradient(135deg, #FF8C00, #FFB300);
        }

        .clorThre {
            background: linear-gradient(135deg, #00BCD4, #4DD0E1);
        }

        .clorFour {
            background: linear-gradient(135deg, #8BC34A, #AED581);
        }

        .clorFive {
            background: linear-gradient(135deg, #E91E63, #F06292);
        }

        .mreBtn {
            background: #FFC107;
            color: #000;
            padding: 10px 25px;
            font-weight: 600;
            border-radius: 30px;
            text-decoration: none;
            transition: 0.3s;
        }

        .mreBtn:hover {
            background: #ffca28;
        }
    </style>
@endpush


@section('content')
    <!-- Hero Section -->
    {{-- <section class="hero-section py-5" style="background: linear-gradient(135deg, #FFC107, #FFD740);">
    <div class="container">
        <div class="row align-items-center">
            <!-- Text Side -->
            <div class="col-lg-6 mb-4 mb-lg-0 text-dark">
                <h1 class="display-4 fw-bold">Find Skilled Professionals Near You</h1>
                <p class="lead">AC Mechanic, Carpenter, Food Delivery, Electrician & more. Register or request a service today!</p>
                
                <!-- Buttons -->
                <div class="mt-4">
                    <a href="#" class="btn btn-dark btn-lg me-3" data-bs-toggle="modal" data-bs-target="#serviceModal">Request a Service</a>
                    <a href="{{ url('/register') }}" class="btn btn-light btn-lg">Vendor Register</a>
                </div>
            </div>

            <!-- Image Side -->
            <div class="col-lg-6 text-center">
                <img src="https://www.jamesuncle.com/backend/admin/adv_banners/banner_bridal%20makeup%202024%202.webp" class="img-fluid rounded shadow" alt="Hero Image">
            </div>
        </div>
    </div>
</section> --}}
    {{-- <section class="hero-banner position-relative"
        style="background: linear-gradient(135deg, #FFC107, #FFD740); min-height: 450px; overflow: hidden;">
        <!-- Background Image -->
        <img src="https://www.jamesuncle.com/backend/admin/banner/AC Technician 1350, 380 Dewali.webp" alt="Banner Background"
            class="w-100 h-100 position-absolute top-0 start-0 object-fit-cover opacity-75">

        <div class="container position-relative z-2 py-5">
            <div class="text-center text-dark mb-4">
                <h1 class="display-5 fw-bold">Find Skilled Professionals Near You</h1>
                <p class="lead mb-0">AC Mechanic, Carpenter, Food Delivery, Electrician & more. Register or request a service
                    today!</p>
            </div>

            <!-- Search Form -->
            <div class="bnerFormPnl bg-white shadow-lg rounded-3 p-3 mx-auto" style="max-width: 800px;">
            <form action="/search-services" method="get" id="search_record">
                <div class="row g-2 align-items-center">
                    <div class="col-md-5">
                        <input type="text" name="profsearch" id="profsearch" class="form-control form-control-lg" placeholder="Find Serviceman by profession" />
                    </div>

                    <div class="col-md-5">
                        <input type="text" name="placesearch" id="placesearch" class="form-control form-control-lg" placeholder="Locality / Pincode" />
                    </div>

                    <div class="col-md-2 d-grid">
                        <button type="submit" class="btn btn-dark btn-lg">Search</button>
                    </div>
                </div>
            </form>
        </div>

            <!-- Buttons Below Form -->
            <div class="text-center mt-4">
                <a href="#" class="btn btn-dark btn-lg me-3" data-bs-toggle="modal"
                    data-bs-target="#serviceModal">Request a Service</a>
                <a href="{{ url('/register') }}" class="btn btn-light btn-lg border">Vendor Register</a>
            </div>
        </div>
    </section> --}}
    <section class="hero-banner position-relative"
        style="background: linear-gradient(135deg, #FFC107, #FFD740); min-height: 450px; overflow: hidden;">

        <!-- Background Image -->
        <img src="https://www.jamesuncle.com/backend/admin/banner/AC Technician 1350, 380 Dewali.webp" alt="Banner Background"
            class="w-100 h-100 position-absolute top-0 start-0 object-fit-cover opacity-75">

        <div class="container position-relative z-2 d-flex flex-column justify-content-center align-items-center text-center"
            style="min-height: 450px; padding: 2rem 1rem;">

            <!-- Hero Text -->
            <h1 class="display-5 fw-bold text-dark mb-3">Find Skilled Professionals Near You</h1>
            <p class="lead text-dark mb-4">
                AC Mechanic, Carpenter, Food Delivery, Electrician & more. Register or request a service today!
            </p>

            <!-- Buttons -->
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="#" class="btn btn-dark btn-lg" data-bs-toggle="modal" data-bs-target="#serviceModal">
                    Request a Service
                </a>
                <a href="#" class="btn btn-light btn-lg border" data-bs-toggle="modal"
                    data-bs-target="#registerModal">
                    Vendor Register
                </a>
            </div>
        </div>
    </section>







    <!-- Popular Services Section -->
    <section class="popularPnel py-5">
        <div class="container">
            <div class="trainerHed text-center mb-4">
                <h2 class="fw-bold text-warning">Popular Services</h2>
            </div>

            <div class="popularPnelIner">
                <div class="row g-4 justify-content-center">

                    <!-- Service Box -->
                    @foreach ($popularServices as $index => $service)
                        @php
                            // Cycle through the colors array using modulo
                            $colorClass = $colors[$index % count($colors)];
                        @endphp
                        <div class="col-6 col-md-4 col-lg-2">
                            <div class="popularBx {{ $colorClass }} text-center p-3 shadow-sm">
                                <div class="media">
                                    <figure>
                                        <img src="{{ asset($service->image) }}" alt="{{ $service->name }}" loading="lazy"
                                            class="img-fluid rounded-3 shadow-sm">
                                    </figure>
                                    <div class="media-object mt-3">
                                        <h5 class="fw-bold text-white mb-2">{{ $service->name }}</h5>
                                        <a href="#" class="bookBtn">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            <div class="popularBtn text-center mt-5">
                <a href="#" class="mreBtn">More Services <span class="icon-Union-1">→</span></a>
            </div>
        </div>
    </section>

    


    <!-- About Us Section -->
    <section id="about-us" class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image Side -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://www.jamesuncle.com/backend/admin/banner/AC Technician 1350, 380 Dewali.webp"
                        alt="About Us Image" class="img-fluid rounded shadow">
                </div>
                <!-- Text Side -->
                <div class="col-lg-6">
                    <div class="about-content">
                        <h2 class="fw-bold text-warning mb-3">About Us</h2>
                        <p class="lead text-dark">
                            Welcome to [YourSiteName], your trusted platform to find the best professionals for all your
                            home and personal service needs. Whether it's AC repair, interior design, or daily essentials —
                            we connect you with skilled service providers near you.
                        </p>
                        <p class="text-secondary">
                            Our mission is to make life easier by simplifying service discovery. With curated professionals,
                            real reviews, and seamless booking, we aim to build trust and convenience.
                        </p>
                        <ul class="list-unstyled mt-4">
                            <li class="mb-2"><strong>✔️ Verified Professionals:</strong> Every service provider is vetted
                                for quality and credibility.</li>
                            <li class="mb-2"><strong>✔️ Seamless Booking:</strong> Search, compare, and book services in a
                                few taps.</li>
                            <li class="mb-2"><strong>✔️ Transparent Pricing:</strong> No hidden fees. You see the cost up
                                front.</li>
                        </ul>
                        <div class="mt-4">
                            <a href="/about-us" class="btn btn-warning btn-lg me-2">Read More</a>
                            <a href="/contact" class="btn btn-outline-warning btn-lg">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <section id="customers" class="py-5"
        style="background: linear-gradient(rgba(255, 193, 7, 0.05), rgba(255, 193, 7, 0.05)), url('https://www.jamesuncle.com/assets/frontend/images/customer_back.jpg') center/cover no-repeat;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-uppercase text-warning">Happy Customers</h2>
                <p class="text-muted">Real experiences shared by our valued clients</p>
            </div>

            <div id="customerCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                <div class="carousel-inner">

                    <!-- Testimonial Item 1 -->
                    <div class="carousel-item active">
                        <div class="testimonial-card mx-auto shadow-lg p-4 rounded-4 bg-white" style="max-width: 650px;">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://www.jamesuncle.com/backend/admin/success_stories/Happy Customer Kabery Bhattacharya.webp"
                                    class="rounded-circle border border-4 border-warning mb-3" width="120" height="120"
                                    alt="Kaberi Bhattacharya">
                                <p class="fst-italic text-secondary mb-3">
                                    “Prompt response with good technicians contact. Negotiated directly with the Yoga
                                    teacher.
                                    Thank you very much James Uncle.”
                                </p>
                                <h5 class="fw-bold text-dark mb-0">Kaberi Bhattacharya</h5>
                                <small class="text-muted">Verified Customer</small>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Item 2 -->
                    <div class="carousel-item">
                        <div class="testimonial-card mx-auto shadow-lg p-4 rounded-4 bg-white" style="max-width: 650px;">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://www.jamesuncle.com/backend/admin/success_stories/Happy Customer Aritra Majumder.webp"
                                    class="rounded-circle border border-4 border-warning mb-3" width="120" height="120"
                                    alt="Aritra Majumder">
                                <p class="fst-italic text-secondary mb-3">
                                    “I got a good interior designer reference from James Uncle.”
                                </p>
                                <h5 class="fw-bold text-dark mb-0">Aritra Majumder</h5>
                                <small class="text-muted">Interior Design Client</small>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Item 3 -->
                    <div class="carousel-item">
                        <div class="testimonial-card mx-auto shadow-lg p-4 rounded-4 bg-white" style="max-width: 650px;">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://www.jamesuncle.com/backend/admin/success_stories/sujit Banerjee.webp"
                                    class="rounded-circle border border-4 border-warning mb-3" width="120"
                                    height="120" alt="Sujit Banerjee">
                                <p class="fst-italic text-secondary mb-3">
                                    “I found the car rental agent from James Uncle. We had a lot of fun
                                    with my family at Purulia tour in March 24.”
                                </p>
                                <h5 class="fw-bold text-dark mb-0">Sujit Banerjee</h5>
                                <small class="text-muted">Travel Service Client</small>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Item 4 -->
                    <div class="carousel-item">
                        <div class="testimonial-card mx-auto shadow-lg p-4 rounded-4 bg-white" style="max-width: 650px;">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://www.jamesuncle.com/backend/admin/success_stories/Sid Sir Happy Customer.webp"
                                    class="rounded-circle border border-4 border-warning mb-3" width="120"
                                    height="120" alt="Siddhartha Chakraborty">
                                <p class="fst-italic text-secondary mb-3">
                                    “Prompt response with good technicians contact. Negotiated directly
                                    with the plumber. Thank you very much James Uncle.”
                                </p>
                                <h5 class="fw-bold text-dark mb-0">Siddhartha Chakraborty</h5>
                                <small class="text-muted">Plumbing Service Client</small>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Item 5 -->
                    <div class="carousel-item">
                        <div class="testimonial-card mx-auto shadow-lg p-4 rounded-4 bg-white" style="max-width: 650px;">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://www.jamesuncle.com/backend/admin/success_stories/GAUTAM ELECTRICIAN.webp"
                                    class="rounded-circle border border-4 border-warning mb-3" width="120"
                                    height="120" alt="Gautam Debnath">
                                <p class="fst-italic text-secondary mb-3">
                                    “Thanks to James Uncle for providing the contact number of customer near my locality.”
                                </p>
                                <h5 class="fw-bold text-dark mb-0">Gautam Debnath</h5>
                                <small class="text-muted">Electrician</small>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#customerCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-warning rounded-circle p-3 shadow"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#customerCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-warning rounded-circle p-3 shadow"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Success Stories Section -->
    {{-- <section class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="fw-bold mb-4 text-dark">Our Success Stories</h2>
            <p class="text-muted mb-5">
                See how Service Hub has helped professionals and customers connect successfully.
            </p>

            <div class="row g-4">
                <!-- Story 1 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 p-4 rounded-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" class="rounded-circle me-3"
                                width="60" height="60" alt="User">
                            <div class="text-start">
                                <h6 class="fw-bold mb-0">Priya Sharma</h6>
                                <small class="text-muted">Makeup Artist</small>
                            </div>
                        </div>
                        <p class="text-muted text-start">
                            “After joining Service Hub, I received 30+ new clients in the first month.
                            The platform helped me reach people in my area easily!”
                        </p>
                    </div>
                </div>

                <!-- Story 2 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 p-4 rounded-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle me-3"
                                width="60" height="60" alt="User">
                            <div class="text-start">
                                <h6 class="fw-bold mb-0">Ravi Kumar</h6>
                                <small class="text-muted">Electrician</small>
                            </div>
                        </div>
                        <p class="text-muted text-start">
                            “Service Hub gave me consistent work opportunities and
                            helped build my reputation among customers nearby.”
                        </p>
                    </div>
                </div>

                <!-- Story 3 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 p-4 rounded-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://randomuser.me/api/portraits/women/45.jpg" class="rounded-circle me-3"
                                width="60" height="60" alt="User">
                            <div class="text-start">
                                <h6 class="fw-bold mb-0">Anita Das</h6>
                                <small class="text-muted">Home Cleaner</small>
                            </div>
                        </div>
                        <p class="text-muted text-start">
                            “The platform is easy to use and customers trust verified professionals.
                            It has boosted my income significantly.”
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Success Stories Section -->
    <section class="py-5 bg-light" id="success-stories">
        <div class="container text-center">
            <h2 class="fw-bold mb-4 text-warning text-uppercase">Our Success Stories</h2>
            <p class="text-muted mb-5">
                Real people. Real growth. Discover how Service Hub is empowering skilled professionals.
            </p>

            <div id="multiCardCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="row g-4 justify-content-center">
                            <!-- Card 1 -->
                            <div class="col-md-4 col-12">
                                <div class="card border-0 shadow-sm h-100 p-4 rounded-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="https://randomuser.me/api/portraits/women/68.jpg"
                                            class="rounded-circle me-3 border border-3 border-warning" width="60"
                                            height="60" alt="Priya Sharma">
                                        <div class="text-start">
                                            <h6 class="fw-bold mb-0 text-dark">Priya Sharma</h6>
                                            <small class="text-muted">Makeup Artist</small>
                                        </div>
                                    </div>
                                    <p class="text-secondary fst-italic text-start mb-0">
                                        “After joining Service Hub, I received 30+ new clients in the first month. The
                                        platform helped me reach people in my area easily!”
                                    </p>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="col-md-4 col-12">
                                <div class="card border-0 shadow-sm h-100 p-4 rounded-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="https://randomuser.me/api/portraits/men/32.jpg"
                                            class="rounded-circle me-3 border border-3 border-warning" width="60"
                                            height="60" alt="Ravi Kumar">
                                        <div class="text-start">
                                            <h6 class="fw-bold mb-0 text-dark">Ravi Kumar</h6>
                                            <small class="text-muted">Electrician</small>
                                        </div>
                                    </div>
                                    <p class="text-secondary fst-italic text-start mb-0">
                                        “Service Hub gave me consistent work opportunities and helped build my reputation
                                        among customers nearby.”
                                    </p>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="col-md-4 col-12">
                                <div class="card border-0 shadow-sm h-100 p-4 rounded-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="https://randomuser.me/api/portraits/women/45.jpg"
                                            class="rounded-circle me-3 border border-3 border-warning" width="60"
                                            height="60" alt="Anita Das">
                                        <div class="text-start">
                                            <h6 class="fw-bold mb-0 text-dark">Anita Das</h6>
                                            <small class="text-muted">Home Cleaner</small>
                                        </div>
                                    </div>
                                    <p class="text-secondary fst-italic text-start mb-0">
                                        “The platform is easy to use and customers trust verified professionals. It has
                                        boosted my income significantly.”
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="row g-4 justify-content-center">
                            <!-- Card 4 -->
                            <div class="col-md-4 col-12">
                                <div class="card border-0 shadow-sm h-100 p-4 rounded-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="https://randomuser.me/api/portraits/men/56.jpg"
                                            class="rounded-circle me-3 border border-3 border-warning" width="60"
                                            height="60" alt="Rohan Das">
                                        <div class="text-start">
                                            <h6 class="fw-bold mb-0 text-dark">Rohan Das</h6>
                                            <small class="text-muted">Plumber</small>
                                        </div>
                                    </div>
                                    <p class="text-secondary fst-italic text-start mb-0">
                                        “Thanks to Service Hub, I got a lot of clients in my area. The platform is easy to
                                        use and trustworthy.”
                                    </p>
                                </div>
                            </div>
                            <!-- Card 5 -->
                            <div class="col-md-4 col-12">
                                <div class="card border-0 shadow-sm h-100 p-4 rounded-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="https://randomuser.me/api/portraits/women/23.jpg"
                                            class="rounded-circle me-3 border border-3 border-warning" width="60"
                                            height="60" alt="Sonia Roy">
                                        <div class="text-start">
                                            <h6 class="fw-bold mb-0 text-dark">Sonia Roy</h6>
                                            <small class="text-muted">Home Tutor</small>
                                        </div>
                                    </div>
                                    <p class="text-secondary fst-italic text-start mb-0">
                                        “I found the best clients and improved my reputation, all thanks to Service Hub.”
                                    </p>
                                </div>
                            </div>
                            <!-- Card 6 -->
                            <div class="col-md-4 col-12">
                                <div class="card border-0 shadow-sm h-100 p-4 rounded-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="https://randomuser.me/api/portraits/men/34.jpg"
                                            class="rounded-circle me-3 border border-3 border-warning" width="60"
                                            height="60" alt="Arjun Das">
                                        <div class="text-start">
                                            <h6 class="fw-bold mb-0 text-dark">Arjun Das</h6>
                                            <small class="text-muted">Carpenter</small>
                                        </div>
                                    </div>
                                    <p class="text-secondary fst-italic text-start mb-0">
                                        “Service Hub helped me reach more clients and grow my business quickly.”
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Buttons Below Carousel -->
                <div class="d-flex justify-content-center mt-4 gap-3">
                    <button class="btn btn-warning px-4" type="button" data-bs-target="#multiCardCarousel"
                        data-bs-slide="prev">Previous</button>
                    <button class="btn btn-warning px-4" type="button" data-bs-target="#multiCardCarousel"
                        data-bs-slide="next">Next</button>
                </div>
            </div>
        </div>
    </section>
@endsection
