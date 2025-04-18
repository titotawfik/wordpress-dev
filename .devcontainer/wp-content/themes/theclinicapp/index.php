<?php
/**
 * The main template file
 *
 * @package TheClinicApp
 */

get_header();
?>

<main class="main-content"> 
    <!-- Hero Section -->
    <section class="min-vh-100 d-flex align-items-center fade-on-scroll hero-section" id="hero-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mb-4 order-lg-2 fade-in delay-2">
            <div class="ratio ratio-16x9 shadow-lg">
              <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video" allowfullscreen></iframe>
            </div>
            <div class="text-center mt-1">
              <p class="py-3 badge bg-dark">Trusted by 150+ clinics worldwide</p>
            </div>
          </div>
          <div class="col-lg-5 py-lg-5">
            <h1 class="fade-in delay-2">Powerful, responsive, modern and great value for money</h1>
            <p class="lead py-lg-3 text-grey-600 fade-in delay-3">A joy to use on any device, at a price that redefines this market. Try it now for FREE.</p>
            <div class="gap-3 d-grid d-sm-flex ">
              <a href="#" class="btn btn-primary me-md-2 cta-btn fade-in delay-3">Get Started
                <i class="fa-solid fa-arrow-right ms-2"></i></a>
              <a href="#" class="btn btn-outline-secondary cta-btn fade-in delay-3">Free Trail</a>
            </div>
          </div>
      </div>
    </section>

    <!-- Features Section -->
    <div  id="features-section" class="features-section py-5 bg-light">
      <div class="container ">
        <!-- Header Section -->
        <section class="header-section text-center fade-on-scroll ">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <h2 class="fw-bold mb-3 text-grey-900 fade-in delay-4">TheClinicApp is a patient and practice management software app.</h2>
                    <p class="lead text-grey-600 mb-5 fade-in delay-4">
                        Software that works 24/7 for your clinic, signing up new clients, gathering intake forms, 
                        scheduling appointments, taking payments, logging medical records, automating all 
                        types of admin tasks from reminders to retention to surveys and aftercare.
                    </p>
                </div>
            </div>
        </section>

        <!-- Features Section items -->
        <section class="features-section-items fade-on-scroll">
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <!-- Feature 1 -->
            <div class="col fade-in delay-5">
              <div class="card feature-card p-4 shadow-sm h-100">
                <div class="card-body">
                    <h4 class="card-title text-grey-900 fw-bold mb-3">Developed from 20 years of feedback</h4>
                    <p class="card-text text-grey-600">
                        Developed by a UK team with more than 60 years of combined experience in clinic management software
                    </p>
                </div>
              </div>
            </div>

            <!-- Feature 2 -->
            <div class="col fade-in delay-5">
              <div class="card feature-card p-4 shadow-sm h-100">
                <div class="card-body">
                    <h4 class="card-title text-grey-900 fw-bold mb-3">Simply intuitive</h4>
                    <p class="card-text text-grey-600">
                        Super simple - extremely intuitive, you'll be up and running in minutes, assisted by state-of-the-art AI help
                    </p>
                </div>
              </div>
            </div>

            <!-- Feature 3 -->
            <div class="col fade-in delay-5">
              <div class="card feature-card p-4 shadow-sm h-100">
                <div class="card-body">
                    <h4 class="card-title text-grey-900 fw-bold mb-3">Powerful automation</h4>
                    <p class="card-text text-grey-600">
                        Pays for itself instantly improving your retention, intake and patient relationships
                    </p>
                </div>
              </div>
            </div>

            <!-- Feature 4 -->
            <div class="col fade-in delay-5">
              <div class="card feature-card p-4 shadow-sm h-100">
                <div class="card-body">
                    <h4 class="card-title text-grey-900 fw-bold mb-3">Value for money</h4>
                    <p class="card-text text-grey-600">
                        £15/month per diary includes ALL functions and unlimited file uploads, admin staff FREE, text 8p, no contracts, could not be simpler
                    </p>
                </div>
              </div>
            </div>

            <!-- Feature 5 -->
            <div class="col fade-in delay-5">
              <div class="card feature-card p-4 shadow-sm h-100">
                <div class="card-body">
                    <h4 class="card-title text-grey-900 fw-bold mb-3">Security is paramount</h4>
                    <p class="card-text text-grey-600">
                        Ultimate security provided by Google Cloud, fully encrypted, 2FA and constantly backed up
                    </p>
                </div>
              </div>
            </div>

            <!-- Feature 6 -->
            <div class="col fade-in delay-5">
              <div class="card feature-card p-4 shadow-sm h-100">
                <div class="card-body">
                    <h4 class="card-title text-grey-900 fw-bold mb-3">Free data import/export</h4>
                    <p class="card-text text-grey-600">
                        Take your data with you at no charge, even in your trial
                    </p>
                </div>
              </div>
            </div>

          </div>
        </section>
      
        <!-- Figure Section -->
        <figure class="text-center mt-5 fade-on-scroll ">
          <img src="https://animocdn.co/images/scheduler-main.png" alt="Our platform" class="img-fluid rounded-3 shadow-lg fade-in delay-5" loading="lazy" />
          <div class="row justify-content-center mt-2 fade-in delay-5">
            <figcaption class="col-lg-6 text-grey-600 fs-6">Our platform adapts to your workflow with multiple features and intuitive navigation. All tools are accessible on both desktop and mobile devices.</figcaption>
          </div>
        </figure>

      </div>
    </div>
    <!-- appointment section -->
    <section class="appointment-section bg-light-blue min-vh-100 d-flex align-items-center py-5 fade-on-scroll" id="getstarted">
      <div class="container">
        <div class="row align-items-center">
            <!-- Content Section -->
            <div class="col-lg-6 fade-in delay-5 order-lg-2">
                <h2 class="fw-bold mb-3">Intelligent Appointment Management</h2>
                <p class="lead text-secondary mb-4 pe-lg-3">
                    Streamline your scheduling process with smart booking, automated reminders, and conflict prevention.
                </p>
                
                <!-- Feature 1 -->
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="far fa-xl fa-calendar-check"></i>
                    </div>
                    <div class="feature-content">
                        <h5 class="feature-title">Smart Calendar</h5>
                        <p class="feature-description">Intelligent scheduling with automated conflict detection</p>
                    </div>
                </div>
                
                <!-- Feature 2 -->
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="far fa-xl fa-clock"></i>
                    </div>
                    <div class="feature-content">
                        <h5 class="feature-title">Automated Reminders</h5>
                        <p class="feature-description">Reduce no-shows with SMS and email notifications</p>
                    </div>
                </div>
                
                <!-- Feature 3 -->
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-xl fa-users"></i>
                    </div>
                    <div class="feature-content">
                        <h5 class="feature-title">Multi-Provider Support</h5>
                        <p class="feature-description">Manage schedules for your entire team from one dashboard</p>
                    </div>
                </div>
            </div>
            <!-- Video Section -->
            <div class="col-lg-6 mb-4 fade-in delay-5">
              <div class="video-container">
                  <div class="ratio ratio-16x9 shadow-lg">
                      <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video" allowfullscreen></iframe>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Form Section -->
    <section class="form-section text-center fade-on-scroll" id="signup">
        <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-6 mb-4">
                  <h4 class="fs-2 fw-bold">Transform Your Clinic Operations Today</h4>
                  <p class="lead fs-5">
                      Join thousands of healthcare professionals already using TheClinicApp to streamline their practice.
                  </p>
              </div>
          </div>
          
          <!-- Form Card -->
          <div class="row">
              <div class="col-12">
                  <div class="form-card py-5">
                      <h4 class="fw-bold fs-4 mb-5">Get Started with TheClinicApp</h4>
                      <form>
                          <div class="row mb-3">
                              <div class="col-md-6 mb-3 mb-md-0">
                                  <label for="fullName" class="form-label">Full Name</label>
                                  <input type="text" class="form-control" id="fullName" placeholder="Dr. Jane Smith">
                              </div>
                              <div class="col-md-6">
                                  <label for="clinicName" class="form-label">Clinic Name</label>
                                  <input type="text" class="form-control" id="clinicName" placeholder="Smith Family Practice">
                              </div>
                          </div>
                          
                          <div class="mb-4">
                              <label for="email" class="form-label">Email Address</label>
                              <input type="email" class="form-control" id="email" placeholder="jane.smith@example.com">
                          </div>
                          
                          <div class="d-grid mb-3">
                              <button type="submit" class="btn btn-primary trial-btn fs-6">Start Your Free 14-Day Trial</button>
                          </div>
                          
                          <div class="form-text">
                              No credit card required. Cancel anytime.
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
    </section>


    <!-- FAQ Section -->
    <section id="faq" class="py-5 fade-on-scroll">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 mb-4 text-center">
            <h5 class="text-center mb-4 display-6 fw-bold">Frequently Asked Questions</h5>
            <p class="lead">Get answers to the most common questions about TheClinicApp</p>
            <div class="accordion accordion-flush" id="faqAccordion">
              <div class="accordion-item">
                <h6 class="accordion-header" id="faqHeadingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne">
                    How do I change my account email?
                  </button>
                </h6>
                <div id="faqCollapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    You can change your account email from the account settings page after logging in.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h6 class="accordion-header" id="faqHeadingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo">
                    How do I change my account email?
                  </button>
                </h6>
                <div id="faqCollapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    You can change your account email from the account settings page after logging in.
                  </div>
                </div>
              </div>
              <!-- Add more FAQ items as needed -->
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php
get_footer();
?> 