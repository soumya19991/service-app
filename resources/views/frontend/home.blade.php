@extends('frontend.layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero-section py-5" style="background: linear-gradient(135deg, #FFC107, #FFD740);">
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
</section>


<!-- Services Section -->
<section id="services" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 text-warning fw-bold">Our Services</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card service-card p-3 text-center border-warning shadow-sm h-100">
                    <img src="https://www.jamesuncle.com/backend/admin/subcategoryimage/Law.webp" class="card-img-top mb-3" alt="Lawyer">
                    <h5 class="card-title fw-bold">Lawyer</h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card service-card p-3 text-center border-warning shadow-sm h-100">
                    <img src="https://www.jamesuncle.com/backend/admin/subcategoryimage/Finalcial Advisor.webp" class="card-img-top mb-3" alt="Financial Advisor">
                    <h5 class="card-title fw-bold">Financial Advisor</h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card service-card p-3 text-center border-warning shadow-sm h-100">
                    <img src="https://www.jamesuncle.com/backend/admin/subcategoryimage/Untitled-1.webp" class="card-img-top mb-3" alt="Currency Exchange">
                    <h5 class="card-title fw-bold">Currency Exchange</h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card service-card p-3 text-center border-warning shadow-sm h-100">
                    <img src="https://www.jamesuncle.com/backend/admin/subcategoryimage/Land Registration.webp" class="card-img-top mb-3" alt="Company Registration">
                    <h5 class="card-title fw-bold">Company Registration</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials / Happy Customers Section -->
<section id="customers" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5 text-warning fw-bold">Happy Customers</h2>
        <div id="customerCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <!-- Testimonial 1 -->
                <div class="carousel-item active">
                    <div class="card customer-card mx-auto border-warning shadow-sm" style="max-width: 600px;">
                        <img src="https://www.jamesuncle.com/backend/admin/success_stories/Happy Customer Kabery Bhattacharya.webp" class="card-img-top" alt="Kaberi Bhattacharya">
                        <div class="card-body text-center">
                            <p class="card-text">Prompt response with good technicians contact. Negotiated directly with the Yoga teacher. Thank you very much James Uncle.</p>
                            <strong>Kaberi Bhattacharya</strong>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="carousel-item">
                    <div class="card customer-card mx-auto border-warning shadow-sm" style="max-width: 600px;">
                        <img src="https://www.jamesuncle.com/backend/admin/success_stories/Happy Customer Aritra Majumder.webp" class="card-img-top" alt="Aritra Majumder">
                        <div class="card-body text-center">
                            <p class="card-text">I got a good interior designer reference from James Uncle</p>
                            <strong>Aritra Majumder</strong>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="carousel-item">
                    <div class="card customer-card mx-auto border-warning shadow-sm" style="max-width: 600px;">
                        <img src="https://www.jamesuncle.com/backend/admin/success_stories/sujit Banerjee.webp" class="card-img-top" alt="Sujit Banerjee">
                        <div class="card-body text-center">
                            <p class="card-text">I found the car rental agent from James Uncle. We had a lot of fun with my family at Purulia tour in March 24.</p>
                            <strong>Sujit Banerjee</strong>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="carousel-item">
                    <div class="card customer-card mx-auto border-warning shadow-sm" style="max-width: 600px;">
                        <img src="https://www.jamesuncle.com/backend/admin/success_stories/Sid Sir Happy Customer.webp" class="card-img-top" alt="Siddhartha Chakraborty">
                        <div class="card-body text-center">
                            <p class="card-text">Prompt response with good technicians contact. Negotiated directly with the plumber. Thank you very much James Uncle.</p>
                            <strong>Siddhartha Chakraborty</strong>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 5 -->
                <div class="carousel-item">
                    <div class="card customer-card mx-auto border-warning shadow-sm" style="max-width: 600px;">
                        <img src="https://www.jamesuncle.com/backend/admin/success_stories/GAUTAM ELECTRICIAN.webp" class="card-img-top" alt="Gautam Debnath">
                        <div class="card-body text-center">
                            <p class="card-text">Thanks to James Uncle for providing the contact number of customer near my locality.</p>
                            <strong>Gautam Debnath</strong>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#customerCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-warning rounded-circle p-3"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#customerCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-warning rounded-circle p-3"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

@endsection
