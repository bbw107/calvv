<?php
$page_slug = '';
$page_title = 'California Vision and Visage – Ophthalmology & Oculoplastic Surgery, San Gabriel Valley';
$page_description = 'World-class ophthalmic care, including surgical and non-surgical services — California Vision and Visage';
include __DIR__ . '/includes/header.php';
?>

    <section class="hero_section bgCover" style="background-image: linear-gradient(90deg, rgba(8, 18, 36, 0.82) 0%, rgba(8, 18, 36, 0.6) 50%, rgba(8, 18, 36, 0.2) 100%),url(./assets/images/hero_image.webp);">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-8">
            <div
              class="hero_content textColor_White d-flex flex-column justify-content-center text-center"
            >
              <span class="textColor_Cyan titleText"
                >Southern California's Premier Practice</span
              >
              <h1>
                A Better Vision. <br /><span class="textColor_Cyan"
                  >Live Life Clearly.</span
                >
              </h1>
              <p class="p1">
                World-class ophthalmic care, including surgical and non-surgical services, delivered
                with genuine compassion — at two convenient Southern California
                locations.
              </p>
              <div class="btn_div">
                <a href="patient-portal.php" class="btn btnTextBorder">Patient Portal</a>
                <a href="contact-us.php" class="btn btnGreen">Request Appointment</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="quick_cards bG_Blue textColor_White">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 cards_col">
            <div class="card_div">
              <div class="icon_div">
                <a href="cataract-self-test.php" aria-label="Cataract Self-Test"
                  ><img src="./assets/images/eye_icon.svg" alt=""
                /></a>
              </div>
              <div class="icon_content">
                <h5 role="heading" aria-level="2">Cataract Self-Test</h5>
                <p>Are you a candidate?</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 cards_col">
            <div class="card_div">
              <div class="icon_div">
                <a href="contact-us.php" aria-label="Request Appointment"
                  ><img src="./assets/images//calendar_icon.svg" alt=""
                /></a>
              </div>
              <div class="icon_content">
                <h5 role="heading" aria-level="2">Request Appointment</h5>
                <p>Let's get started today</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 cards_col">
            <div class="card_div">
              <div class="icon_div">
                <a href="about-us.php" aria-label="Our Doctors"
                  ><img src="./assets/images/user-icon.svg" alt=""
                /></a>
              </div>
              <div class="icon_content">
                <h5 role="heading" aria-level="2">Our Doctors</h5>
                <p>Meet the team</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 cards_col">
            <div class="card_div">
              <div class="icon_div">
                <a href="contact-us.php" aria-label="Contact Us"
                  ><img src="./assets/images/phone-icon.svg" alt=""
                /></a>
              </div>
              <div class="icon_content">
                <h5 role="heading" aria-level="2">Contact Us</h5>
                <p>We're here to help</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="about_section padding_lg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="about_content">
              <div class="heading_content">
                <span class="border-title">Welcome</span>
                <h2 class="textColor_Blue">The Quality of Care. <br />The Quality of Caring.</h2>
                <p>
                  We are a multi-physician/eye surgeon group providing diagnosis
                  and treatment of comprehensive ophthalmic conditions including
                  subspecialty care in glaucoma and oculoplastics.  We commonly
                  treat glaucoma, diseases of the eyelid, eye socket and
                  lacrimal system, cataract, dry eye, red eye, diabetic eye
                  disease,  and macular degeneration.
                </p>

                <p>
                  It is our goal at California Vision and Visage to provide
                  professional, high quality ophthalmic care and make your visit
                  comfortable, pleasant and informative.
                </p>
              </div>
              <div class="counter">
                <div class="counter_content">
                  <h4 class="textColor_Blue" role="heading" aria-level="3">15+</h4>
                  <p>Years Serving SoCal</p>
                </div>
                <div class="counter_content">
                  <h4 class="textColor_Blue" role="heading" aria-level="3">2</h4>
                  <p>Board-Certified Physicians</p>
                </div>
                <div class="counter_content">
                  <h4 class="textColor_Blue" role="heading" aria-level="3">2</h4>
                  <p>Convenient Locations</p>
                </div>
              </div>
              <div class="btn_div">
                <a href="about-us.php" class="btn btnBlue">Find Out More <img src="./assets/images/arrow.svg" alt=""></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="about_img">
              <img
                src="./assets/images/about_img.webp"
                srcset="./assets/images/about_img_mobile.webp 800w, ./assets/images/about_img.webp 1103w"
                sizes="(max-width: 767px) 100vw, 636px"
                alt="An ophthalmologist examining a patient's eyes with a slit lamp"
                class="border-radius16"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="testimonial_section bG_LightGray">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-2">
            <div class="star_div">
              <img src="./assets/images/star_icon.svg" alt="" />
              <p>What Our Patients Say</p>
            </div>
          </div>
          <div class="col-lg-10">
            <div class="row">
              <div class="col-lg-6">
                <div class="testimonial_content">
                  <h6 class="textColor_Blue" role="heading" aria-level="3">
                    "Professional all the way — friendly, caring staff who truly
                    listen. The doctor was thorough and took the time to explain
                    everything clearly."
                  </h6>
                  <p>— Maria L. · Google Review (5 stars)</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="testimonial_content">
                  <h6 class="textColor_Blue" role="heading" aria-level="3">
                    "I was nervous about my cataract surgery, but the entire
                    team made me feel completely at ease. My vision is better
                    than it's been in years."
                  </h6>
                  <p>— James T. · Yelp Review (5 stars)</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="services_section padding_lg">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-xl-5 col-lg-5">
            <div class="services_content">
              <span class="border-title">Our Specialties</span>
              <h2 class="textColor_Blue">State-of-the-Art Eye & Aesthetic Care</h2>
              <p>
                Our physicians hold sub-specialty training and use cutting-edge
                diagnostics and surgical technologies for outstanding outcomes
                in every area of eye health and aesthetics.
              </p>
              <div class="btn_div">
                <a href="contact-us.php" class="btn btnGreen">Request Appointment</a>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="service_list">
              <a href="blepharoplasty.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="./assets/images/Asian.svg" alt="" />
                  </div>
                  <h6 class="textColor_Blue" role="heading" aria-level="3">Blepharoplasty <br>(Asian and Non-Asian)</h6>
                </div>
                <div class="list_icon">
                  <img src="./assets/images/arrow.svg" alt="" />
                </div>
              </a>
              <a href="botox.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="./assets/images/Botox.svg" alt="" />
                  </div>
                  <h6 class="textColor_Blue" role="heading" aria-level="3">Botox</h6>
                </div>
                <div class="list_icon">
                  <img src="./assets/images/arrow.svg" alt="" />
                </div>
              </a>
              <a href="cataracts.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="./assets/images/Cataract.svg" alt="" />
                  </div>
                  <h6 class="textColor_Blue" role="heading" aria-level="3">Cataract</h6>
                </div>
                <div class="list_icon">
                  <img src="./assets/images/arrow.svg" alt="" />
                </div>
              </a>
              <a href="diabetic-eye-disease.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="./assets/images/Eye Disease.svg" alt="" />
                  </div>
                  <h6 class="textColor_Blue" role="heading" aria-level="3">Diabetic Eye Disease</h6>
                </div>
                <div class="list_icon">
                  <img src="./assets/images/arrow.svg" alt="" />
                </div>
              </a>
              <a href="dry-eye.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="./assets/images/Dry Eye.svg" alt="" />
                  </div>
                  <h6 class="textColor_Blue" role="heading" aria-level="3">Dry Eye</h6>
                </div>
                <div class="list_icon">
                  <img src="./assets/images/arrow.svg" alt="" />
                </div>
              </a>
              <a href="entropion-ectropion.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="./assets/images/Entropion.svg" alt="" />
                  </div>
                  <h6 class="textColor_Blue" role="heading" aria-level="3">Entropion & Ectropion</h6>
                </div>
                <div class="list_icon">
                  <img src="./assets/images/arrow.svg" alt="" />
                </div>
              </a>
              <a href="epiphora.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="./assets/images/Epiphora.svg" alt="" />
                  </div>
                  <h6 class="textColor_Blue" role="heading" aria-level="3">Epiphora</h6>
                </div>
                <div class="list_icon">
                  <img src="./assets/images/arrow.svg" alt="" />
                </div>
              </a>
              <a href="eyelid-skin-cancer.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="./assets/images/Eyelid-Skin.svg" alt="" />
                  </div>
                  <h6 class="textColor_Blue" role="heading" aria-level="3">Eyelid Skin Cancer</h6>
                </div>
                <div class="list_icon">
                  <img src="./assets/images/arrow.svg" alt="" />
                </div>
              </a>
              <a href="flashes-floaters.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="./assets/images/Flashes.svg" alt="" />
                  </div>
                  <h6 class="textColor_Blue" role="heading" aria-level="3">Flashes & Floaters</h6>
                </div>
                <div class="list_icon">
                  <img src="./assets/images/arrow.svg" alt="" />
                </div>
              </a>
              <a href="glaucoma.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="./assets/images/Glaucoma.svg" alt="" />
                  </div>
                  <h6 class="textColor_Blue" role="heading" aria-level="3">Glaucoma</h6>
                </div>
                <div class="list_icon">
                  <img src="./assets/images/arrow.svg" alt="" />
                </div>
              </a>
              <a href="macular-degeneration.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="./assets/images/Macular.svg" alt="" />
                  </div>
                  <h6 class="textColor_Blue" role="heading" aria-level="3">Macular Degeneration</h6>
                </div>
                <div class="list_icon">
                  <img src="./assets/images/arrow.svg" alt="" />
                </div>
              </a>
              <a href="pink-eye.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="./assets/images/Pink Eye.svg" alt="" />
                  </div>
                  <h6 class="textColor_Blue" role="heading" aria-level="3">Pink Eye</h6>
                </div>
                <div class="list_icon">
                  <img src="./assets/images/arrow.svg" alt="" />
                </div>
              </a>
              <a href="droopy-eyelids.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="./assets/images/Droopy-Eyelids.svg" alt="" />
                  </div>
                  <h6 class="textColor_Blue" role="heading" aria-level="3">Droopy Eyelids</h6>
                </div>
                <div class="list_icon">
                  <img src="./assets/images/arrow.svg" alt="" />
                </div>
              </a>
              <a href="refractive-error.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="./assets/images/Refractive Error.svg" alt="" />
                  </div>
                  <h6 class="textColor_Blue" role="heading" aria-level="3">Refractive Error</h6>
                </div>
                <div class="list_icon">
                  <img src="./assets/images/arrow.svg" alt="" />
                </div>
              </a>
              <a href="torn-retina.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="./assets/images/Torn Retina.svg" alt="" />
                  </div>
                  <h6 class="textColor_Blue" role="heading" aria-level="3">Torn Retina</h6>
                </div>
                <div class="list_icon">
                  <img src="./assets/images/arrow.svg" alt="" />
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="team_section bG_LightGray padding_lg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-9 col-lg-10">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading">
                  <span class="boder-Left-Right_title">Meet the Team</span>
                  <h3 class="textColor_Blue">Meet Our Doctors</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="team_box bG_White border-radius16">
                  <img src="./assets/images/team1.webp" alt="Dr. Adam Y. Hsu, MD" />
                  <div class="team_content">
                    <h5 class="textColor_Blue">Dr. Adam Hsu, MD</h5>
                    <p>Board-Certified Ophthalmologist</p>
                    <p>
                      Ophthalmic Plastic and Reconstructive Surgery is a
                      surgical subspecialty in ophthalmology dealing with
                      abnormality and diseases of the eyelids, lacirmal (tear)
                      system, orbit (bony eye socket) and adjacent facial
                      structures. He provides non-surgical facial rejuvenation
                      treatment as well as aesthetic oculofacial surgery. Dr.
                      Hsu speaks fluent Spanish, Taiwanese and Mandarin.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="team_box bG_White border-radius16">
                  <img src="./assets/images/team2.webp" alt="Dr. Bonnie B. Woo, MD" />
                  <div class="team_content">
                    <h5 class="textColor_Blue">Dr. Bonnie Woo, MD</h5>
                    <p>Board-Certified Ophthalmologist</p>
                    <p>
                      Dr. Woo is a board-certified ophthalmologist specializing
                      in premium cataract surgery and glaucoma management. She
                      utilizes advanced diagnostic technology, blade-free laser
                      procedures, and premium lens implants to reduce dependence
                      on glasses, alongside microinvasive surgeries to protect
                      patients from sight-threatening glaucoma.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section class="resources_section padding_lg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="insurance">
              <div class="heading">
                <span class="border-title">Insurance</span>
                <h2 class="textColor_Blue">We Accept Most Major Plans</h2>
                <p>
                  Our billing team verifies your coverage and maximizes your
                  benefits. Call us to confirm your specific plan — we're here
                  to help.
                </p>
              </div>
              <div class="insurance_logo">
                <div class="logo">
                  <img src="./assets/images/medicare.svg" alt="Medicare" />
                </div>
                <div class="logo">
                  <img src="./assets/images/blue-cross.svg" alt="Blue Cross Blue Shield" />
                </div>
                <div class="logo">
                  <img src="./assets/images/Aetna.svg" alt="Aetna" />
                </div>
                <div class="logo">
                  <img src="./assets/images/cigna.svg" alt="Cigna" />
                </div>
                <div class="logo">
                  <img src="./assets/images/united.svg" alt="UnitedHealthcare" />
                </div>
                <div class="logo">
                  <img src="./assets/images/health.svg" alt="Health Net" />
                </div>
                <div class="logo">
                  <img src="./assets/images/humana.svg" alt="Humana" />
                </div>
                <div class="logo">
                  <img src="./assets/images/anthem.svg" alt="Anthem" />
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="insurance">
              <div class="heading">
                <span class="border-title">Patient Resources</span>
                <h2 class="textColor_Blue">Before You Visit</h2>
                <p>
                  Download forms, access your records, and find everything you
                  need to prepare for your appointment.
                </p>
              </div>
              <div class="patient_list">
                <a href="<?php echo $base; ?>assets/pdf/<?php echo $t['forms_pdf']; ?>" target="_blank">
                  <div class="list-content">
                    <div class="icon_img">
                      <img src="./assets/images/form.svg" alt="" />
                    </div>
                    <div class="list_heading">
                      <h6 class="textColor_Blue" role="heading" aria-level="3">New Patient Forms</h6>
                      <p>Download & complete before your visit</p>
                    </div>
                  </div>
                  <div class="list_icon">
                    <img src="./assets/images/arrow.svg" alt="" />
                  </div>
                </a>
                <a href="patient-portal.php">
                  <div class="list-content">
                    <div class="icon_img">
                      <img src="./assets/images/login.svg" alt="" />
                    </div>
                    <div class="list_heading">
                      <h6 class="textColor_Blue" role="heading" aria-level="3">Patient Portal Login</h6>
                      <p>Records, results & secure messages</p>
                    </div>
                  </div>
                  <div class="list_icon">
                    <img src="./assets/images/arrow.svg" alt="" />
                  </div>
                </a>
                <a href="contact-us.php">
                  <div class="list-content">
                    <div class="icon_img">
                      <img src="./assets/images/email1.svg" alt="" />
                    </div>
                    <div class="list_heading">
                      <h6 class="textColor_Blue" role="heading" aria-level="3">Referring Physicians</h6>
                      <p>Refer a patient to our practice</p>
                    </div>
                  </div>
                  <div class="list_icon">
                    <img src="./assets/images/arrow.svg" alt="" />
                  </div>
                </a>
                <a href="contact-us.php">
                  <div class="list-content">
                    <div class="icon_img">
                      <img src="./assets/images/phone1.svg" alt="" />
                    </div>
                    <div class="list_heading">
                      <h6 class="textColor_Blue" role="heading" aria-level="3">Ways to Pay</h6>
                      <p>Financing & payment options available</p>
                    </div>
                  </div>
                  <div class="list_icon">
                    <img src="./assets/images/arrow.svg" alt="" />
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="find-us" class="location_section bG_LightGray padding_lg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="heading">
              <span class="boder-Left-Right_title">Find Us</span>
              <h3 class="textColor_Blue">Our Locations</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="location_card">
              <div class="location_map">
                <iframe title="Map of our City of Industry office" data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3307.8932730645656!2d-117.90085862368487!3d33.99527502073521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c32a5c33921ff5%3A0x75f50ea3910ae29a!2s18575%20Gale%20Ave%20%23168%2C%20City%20of%20Industry%2C%20CA%2091748%2C%20USA!5e0!3m2!1sen!2sin!4v1786509975328!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
              </div>

              <div class="location_content_div">
                <div class="location_content">
                  <div class="location_left">
                    <h5 class="textColor_Blue" role="heading" aria-level="4"><span class="dot"></span>City of Industry</h5>
                    <p>18575 Gale Ave, Suite 168 <br>City of Industry, CA 91748</p>
                  </div>

                  <div class="location_right">
                    <div class="info_item">
                      <div class="icon">
                        <img src="./assets/images/contact.svg" alt="" />
                      </div>
                      <a href="tel:626-810-0689">(626) 810-0689</a>
                    </div>

                    <div class="info_item">
                      <div class="icon">
                        <img src="./assets/images/clock.svg" alt="" />
                      </div>
                      <span>Mon–Fri: 9:00 AM – 5:00 PM</span>
                    </div>
                    <div class="info_item">
                      <div class="icon">
                        <img src="./assets/images/clock.svg" alt="" />
                      </div>
                      <span>By Appointment Only</span>
                    </div>
                  </div>
                </div>
                <div class="location_footer">
                  <a href="https://maps.app.goo.gl/maTCmyabc9Gy89xr8" class="btn btnBlue">
                    <img src="./assets/images/location-icon.svg" alt="" />
                    Get Directions
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="location_card">
              <div class="location_map">
                <iframe title="Map of our San Gabriel office" data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3302.6886661535696!2d-118.07511202368077!3d34.12871931368708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2db0c8b863a03%3A0x3b6d985eb1a86ca!2s7232%20Rosemead%20Blvd%20Ste%20202%2C%20San%20Gabriel%2C%20CA%2091775%2C%20USA!5e0!3m2!1sen!2sin!4v1786510225816!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
              </div>

              <div class="location_content_div">
                <div class="location_content">
                  <div class="location_left">
                    <h5 class="textColor_Blue" role="heading" aria-level="4"><span class="dot"></span>San Gabriel</h5>
                    <p>7232 Rosemead Blvd, Suite 202<br> San Gabriel, CA 91775</p>
                  </div>

                  <div class="location_right">
                    <div class="info_item">
                      <div class="icon">
                        <img src="./assets/images/contact.svg" alt="" />
                      </div>
                      <a href="tel:6266566550">(626) 656-6550</a>
                    </div>

                    <div class="info_item">
                      <div class="icon">
                        <img src="./assets/images/clock.svg" alt="" />
                      </div>
                      <span>By Appointment Only</span>
                    </div>
                  </div>
                </div>
                <div class="location_footer">
                  <a href="https://maps.app.goo.gl/kSzFVrHwd5a5wSrh7" class="btn btnBlue">
                    <img src="./assets/images/location-icon.svg" alt="" />
                    Get Directions
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php include __DIR__ . '/includes/footer.php'; ?>
