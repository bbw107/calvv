<?php
$lang = 'es';
$base = '../';
$page_slug = '';
$page_title = 'California Vision and Visage – Oftalmología y Cirugía Oculoplástica, San Gabriel Valley';
$page_description = 'Atención oftalmológica y servicios estéticos de primer nivel, brindados con auténtica compasión — en dos cómodas — California Vision and Visage';
include __DIR__ . '/../includes/header.php';
?>

    <section class="hero_section bgCover" style="background-image: linear-gradient(90deg, rgba(8, 18, 36, 0.82) 0%, rgba(8, 18, 36, 0.6) 50%, rgba(8, 18, 36, 0.2) 100%),url(../assets/images/hero_image.webp);">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-8">
            <div
              class="hero_content textColor_White d-flex flex-column justify-content-center text-center"
            >
              <span class="textColor_Cyan titleText"
                >La Clínica de Referencia del Sur de California</span
              >
              <h1>
                Una Mejor Visión.<br /><span class="textColor_Cyan"
                  >Viva la Vida con Claridad.</span
                >
              </h1>
              <p class="p1">
                Atención oftalmológica y servicios estéticos de primer nivel,
                brindados con auténtica compasión — en dos cómodas ubicaciones
                del sur de California.
              </p>
              <div class="btn_div">
                <a href="patient-portal.php" class="btn btnTextBorder">Portal del Paciente</a>
                <a href="contact-us.php" class="btn btnGreen">Solicitar Cita</a>
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
                <a href="cataract-self-test.php" aria-label="Autoevaluación de Cataratas"
                  ><img src="../assets/images/eye_icon.svg" alt=""
                /></a>
              </div>
              <div class="icon_content">
                <h5 role="heading" aria-level="2">Autoevaluación de Cataratas</h5>
                <p>¿Es usted candidato?</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 cards_col">
            <div class="card_div">
              <div class="icon_div">
                <a href="contact-us.php" aria-label="Solicitar Cita"
                  ><img src="../assets/images//calendar_icon.svg" alt=""
                /></a>
              </div>
              <div class="icon_content">
                <h5 role="heading" aria-level="2">Solicitar Cita</h5>
                <p>Comencemos hoy mismo</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 cards_col">
            <div class="card_div">
              <div class="icon_div">
                <a href="about-us.php" aria-label="Nuestros Médicos"
                  ><img src="../assets/images/user-icon.svg" alt=""
                /></a>
              </div>
              <div class="icon_content">
                <h5 role="heading" aria-level="2">Nuestros Médicos</h5>
                <p>Conozca al equipo</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 cards_col">
            <div class="card_div">
              <div class="icon_div">
                <a href="contact-us.php" aria-label="Contáctenos"
                  ><img src="../assets/images/phone-icon.svg" alt=""
                /></a>
              </div>
              <div class="icon_content">
                <h5 role="heading" aria-level="2">Contáctenos</h5>
                <p>Estamos para ayudarle</p>
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
                <span class="border-title">Bienvenido</span>
                <h2>La Calidad de la Atención. <br />La Calidad del Trato Humano.</h2>
                <p>
                  Somos un grupo de médicos y cirujanos oftalmólogos que ofrece
                  diagnóstico y tratamiento de afecciones oftalmológicas de todo
                  tipo, incluida la atención subespecializada en glaucoma y
                  oculoplástica. Tratamos habitualmente el glaucoma, las
                  enfermedades del párpado, la órbita y el sistema lagrimal, las
                  cataratas, el ojo seco, el ojo rojo, la enfermedad ocular
                  diabética y la degeneración macular.
                </p>

                <p>
                  En California Vision and Visage, nuestro objetivo es ofrecer
                  atención oftalmológica profesional y de alta calidad, y hacer
                  que su visita sea cómoda, agradable e informativa.
                </p>
              </div>
              <div class="counter">
                <div class="counter_content">
                  <h4 role="heading" aria-level="3">15+</h4>
                  <p>Años Atendiendo el Sur de California</p>
                </div>
                <div class="counter_content">
                  <h4 role="heading" aria-level="3">2</h4>
                  <p>Médicos Certificados</p>
                </div>
                <div class="counter_content">
                  <h4 role="heading" aria-level="3">2</h4>
                  <p>Ubicaciones Convenientes</p>
                </div>
              </div>
              <div class="btn_div">
                <a href="about-us.php" class="btn btnBlue">Conozca Más</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="about_img">
              <img
                src="../assets/images/about_img.webp"
                srcset="../assets/images/about_img_mobile.webp 800w, ../assets/images/about_img.webp 1103w"
                sizes="(max-width: 767px) 100vw, 636px"
                alt="Un oftalmólogo examina los ojos de una paciente con una lámpara de hendidura"
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
              <img src="../assets/images/star_icon.svg" alt="" />
              <p>Lo Que Dicen Nuestros Pacientes</p>
            </div>
          </div>
          <div class="col-lg-10">
            <div class="row">
              <div class="col-lg-6">
                <div class="testimonial_content">
                  <h6 role="heading" aria-level="3">
                    "Profesionales de principio a fin — personal amable y atento
                    que de verdad escucha. El médico fue minucioso y se tomó el
                    tiempo de explicarlo todo con claridad."
                  </h6>
                  <p>— Maria L. · Reseña de Google (5 estrellas)</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="testimonial_content">
                  <h6 role="heading" aria-level="3">
                    "Estaba nervioso por mi cirugía de cataratas, pero todo el
                    equipo me hizo sentir completamente tranquilo. Mi visión
                    está mejor que en muchos años."
                  </h6>
                  <p>— James T. · Reseña de Yelp (5 estrellas)</p>
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
              <span class="border-title">Nuestras Especialidades</span>
              <h2>Atención Oftalmológica y Estética de Vanguardia</h2>
              <p>
                Nuestros médicos cuentan con formación en subespecialidades y
                utilizan tecnologías diagnósticas y quirúrgicas de vanguardia
                para lograr resultados excelentes en todas las áreas de la salud
                ocular y la estética.
              </p>
              <div class="btn_div">
                <a href="contact-us.php" class="btn btnGreen">Solicitar Cita</a>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="service_list">
              <a href="blepharoplasty.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="../assets/images/Asian.svg" alt="" />
                  </div>
                  <h6 role="heading" aria-level="3">Blefaroplastia (asiática y no asiática)</h6>
                </div>
                <div class="list_icon">
                  <img src="../assets/images/arrow.svg" alt="" />
                </div>
              </a>
              <a href="botox.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="../assets/images/Botox.svg" alt="" />
                  </div>
                  <h6 role="heading" aria-level="3">Bótox</h6>
                </div>
                <div class="list_icon">
                  <img src="../assets/images/arrow.svg" alt="" />
                </div>
              </a>
              <a href="cataracts.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="../assets/images/Cataract.svg" alt="" />
                  </div>
                  <h6 role="heading" aria-level="3">Cataratas</h6>
                </div>
                <div class="list_icon">
                  <img src="../assets/images/arrow.svg" alt="" />
                </div>
              </a>
              <a href="diabetic-eye-disease.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="../assets/images/Eye Disease.svg" alt="" />
                  </div>
                  <h6 role="heading" aria-level="3">Enfermedad Ocular Diabética</h6>
                </div>
                <div class="list_icon">
                  <img src="../assets/images/arrow.svg" alt="" />
                </div>
              </a>
              <a href="dry-eye.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="../assets/images/Dry Eye.svg" alt="" />
                  </div>
                  <h6 role="heading" aria-level="3">Ojo Seco</h6>
                </div>
                <div class="list_icon">
                  <img src="../assets/images/arrow.svg" alt="" />
                </div>
              </a>
              <a href="entropion-ectropion.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="../assets/images/Entropion.svg" alt="" />
                  </div>
                  <h6 role="heading" aria-level="3">Entropión y Ectropión</h6>
                </div>
                <div class="list_icon">
                  <img src="../assets/images/arrow.svg" alt="" />
                </div>
              </a>
              <a href="epiphora.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="../assets/images/Epiphora.svg" alt="" />
                  </div>
                  <h6 role="heading" aria-level="3">Epífora</h6>
                </div>
                <div class="list_icon">
                  <img src="../assets/images/arrow.svg" alt="" />
                </div>
              </a>
              <a href="eyelid-skin-cancer.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="../assets/images/Eyelid-Skin.svg" alt="" />
                  </div>
                  <h6 role="heading" aria-level="3">Cáncer de Piel del Párpado</h6>
                </div>
                <div class="list_icon">
                  <img src="../assets/images/arrow.svg" alt="" />
                </div>
              </a>
              <a href="flashes-floaters.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="../assets/images/Flashes.svg" alt="" />
                  </div>
                  <h6 role="heading" aria-level="3">Destellos y Moscas Volantes</h6>
                </div>
                <div class="list_icon">
                  <img src="../assets/images/arrow.svg" alt="" />
                </div>
              </a>
              <a href="glaucoma.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="../assets/images/Glaucoma.svg" alt="" />
                  </div>
                  <h6 role="heading" aria-level="3">Glaucoma</h6>
                </div>
                <div class="list_icon">
                  <img src="../assets/images/arrow.svg" alt="" />
                </div>
              </a>
              <a href="macular-degeneration.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="../assets/images/Macular.svg" alt="" />
                  </div>
                  <h6 role="heading" aria-level="3">Degeneración Macular</h6>
                </div>
                <div class="list_icon">
                  <img src="../assets/images/arrow.svg" alt="" />
                </div>
              </a>
              <a href="pink-eye.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="../assets/images/Pink Eye.svg" alt="" />
                  </div>
                  <h6 role="heading" aria-level="3">Conjuntivitis</h6>
                </div>
                <div class="list_icon">
                  <img src="../assets/images/arrow.svg" alt="" />
                </div>
              </a>
              <a href="droopy-eyelids.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="../assets/images/Droopy-Eyelids.svg" alt="" />
                  </div>
                  <h6 role="heading" aria-level="3">Párpados Caídos</h6>
                </div>
                <div class="list_icon">
                  <img src="../assets/images/arrow.svg" alt="" />
                </div>
              </a>
              <a href="refractive-error.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="../assets/images/Refractive Error.svg" alt="" />
                  </div>
                  <h6 role="heading" aria-level="3">Error Refractivo</h6>
                </div>
                <div class="list_icon">
                  <img src="../assets/images/arrow.svg" alt="" />
                </div>
              </a>
              <a href="torn-retina.php">
                <div class="list-content">
                  <div class="icon_img">
                    <img src="../assets/images/Torn Retina.svg" alt="" />
                  </div>
                  <h6 role="heading" aria-level="3">Desgarro de Retina</h6>
                </div>
                <div class="list_icon">
                  <img src="../assets/images/arrow.svg" alt="" />
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
          <div class="col-xl-8 col-lg-10">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading">
                  <span class="boder-Left-Right_title">Conozca al Equipo</span>
                  <h3>Conozca a Nuestros Médicos</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="team_box bG_White border-radius16">
                  <img src="../assets/images/team1.webp" alt="Dr. Adam Y. Hsu, MD" />
                  <div class="team_content">
                    <h5 role="heading" aria-level="4">Dr. Adam Hsu, MD</h5>
                    <p>Oftalmólogo Certificado</p>
                    <p>
                      La Cirugía Plástica y Reconstructiva Oftálmica es una
                      subespecialidad quirúrgica de la oftalmología que se ocupa
                      de las anomalías y enfermedades de los párpados, el
                      sistema lagrimal, la órbita (cavidad ósea del ojo) y las
                      estructuras faciales adyacentes. Ofrece tratamientos no
                      quirúrgicos de rejuvenecimiento facial, así como cirugía
                      oculofacial estética. El Dr. Hsu habla español, taiwanés y
                      mandarín con fluidez.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="team_box bG_White border-radius16">
                  <img src="../assets/images/team2.webp" alt="Dr. Bonnie B. Woo, MD" />
                  <div class="team_content">
                    <h5 role="heading" aria-level="4">Dra. Bonnie Woo, MD</h5>
                    <p>Oftalmóloga Certificada</p>
                    <p>
                      La Dra. Woo es oftalmóloga certificada, especializada en
                      cirugía de cataratas premium y en el manejo del glaucoma.
                      Utiliza tecnología diagnóstica avanzada, procedimientos
                      láser sin bisturí e implantes de lentes premium para
                      reducir la dependencia de los lentes, junto con cirugías
                      microinvasivas para proteger a los pacientes del glaucoma
                      que amenaza la visión.
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
                <span class="border-title">Seguros</span>
                <h2>Aceptamos la Mayoría de los Planes Principales</h2>
                <p>
                  Nuestro equipo de facturación verifica su cobertura y maximiza
                  sus beneficios. Llámenos para confirmar su plan específico —
                  estamos para ayudarle.
                </p>
              </div>
              <div class="insurance_logo">
                <div class="logo">
                  <img src="../assets/images/medicare.svg" alt="Medicare" />
                </div>
                <div class="logo">
                  <img src="../assets/images/blue-cross.svg" alt="Blue Cross Blue Shield" />
                </div>
                <div class="logo">
                  <img src="../assets/images/Aetna.svg" alt="Aetna" />
                </div>
                <div class="logo">
                  <img src="../assets/images/cigna.svg" alt="Cigna" />
                </div>
                <div class="logo">
                  <img src="../assets/images/united.svg" alt="UnitedHealthcare" />
                </div>
                <div class="logo">
                  <img src="../assets/images/health.svg" alt="Health Net" />
                </div>
                <div class="logo">
                  <img src="../assets/images/humana.svg" alt="Humana" />
                </div>
                <div class="logo">
                  <img src="../assets/images/anthem.svg" alt="Anthem" />
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="insurance">
              <div class="heading">
                <span class="border-title">Recursos para Pacientes</span>
                <h2>Antes de Su Visita</h2>
                <p>
                  Descargue formularios, acceda a su expediente y encuentre todo
                  lo que necesita para prepararse para su cita.
                </p>
              </div>
              <div class="patient_list">
                <a href="<?php echo $base; ?>assets/pdf/<?php echo $t['forms_pdf']; ?>" target="_blank">
                  <div class="list-content">
                    <div class="icon_img">
                      <img src="../assets/images/form.svg" alt="" />
                    </div>
                    <div class="list_heading">
                      <h6 role="heading" aria-level="3">Formularios para Pacientes Nuevos</h6>
                      <p>Descárguelos y complételos antes de su visita</p>
                    </div>
                  </div>
                  <div class="list_icon">
                    <img src="../assets/images/arrow.svg" alt="" />
                  </div>
                </a>
                <a href="patient-portal.php">
                  <div class="list-content">
                    <div class="icon_img">
                      <img src="../assets/images/login.svg" alt="" />
                    </div>
                    <div class="list_heading">
                      <h6 role="heading" aria-level="3">Acceso al Portal del Paciente</h6>
                      <p>Expedientes, resultados y mensajes seguros</p>
                    </div>
                  </div>
                  <div class="list_icon">
                    <img src="../assets/images/arrow.svg" alt="" />
                  </div>
                </a>
                <a href="contact-us.php">
                  <div class="list-content">
                    <div class="icon_img">
                      <img src="../assets/images/email1.svg" alt="" />
                    </div>
                    <div class="list_heading">
                      <h6 role="heading" aria-level="3">Médicos Remitentes</h6>
                      <p>Derive un paciente a nuestra consulta</p>
                    </div>
                  </div>
                  <div class="list_icon">
                    <img src="../assets/images/arrow.svg" alt="" />
                  </div>
                </a>
                <a href="contact-us.php">
                  <div class="list-content">
                    <div class="icon_img">
                      <img src="../assets/images/phone1.svg" alt="" />
                    </div>
                    <div class="list_heading">
                      <h6 role="heading" aria-level="3">Formas de Pago</h6>
                      <p>Opciones de financiamiento y pago disponibles</p>
                    </div>
                  </div>
                  <div class="list_icon">
                    <img src="../assets/images/arrow.svg" alt="" />
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
              <span class="boder-Left-Right_title">Encuéntrenos</span>
              <h3>Nuestras Sedes</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="location_card">
              <div class="location_map">
                <iframe title="Mapa de nuestra consulta de City of Industry" data-src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6615.786859222942!2d-117.898284!3d33.995271!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c32a5c33921ff5%3A0x75f50ea3910ae29a!2s18575%20Gale%20Ave%20%23168%2C%20City%20of%20Industry%2C%20CA%2091748%2C%20USA!5e0!3m2!1sen!2sin!4v1786687553509!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
              </div>

              <div class="location_content_div">
                <div class="location_content">
                  <div class="location_left">
                    <h5 role="heading" aria-level="4"><span class="dot"></span>City of Industry</h5>
                    <p>18575 Gale Ave, Suite 168<br> City of Industry, CA 91748</p>
                  </div>

                  <div class="location_right">
                    <div class="info_item">
                      <div class="icon">
                        <img src="../assets/images/contact.svg" alt="" />
                      </div>
                      <a href="tel:626-810-0689">(626) 810-0689</a>
                    </div>

                    <div class="info_item">
                      <div class="icon">
                        <img src="../assets/images/clock.svg" alt="" />
                      </div>
                      <span>Lun–Vie: 9:00 AM – 5:00 PM</span>
                    </div>
                    <div class="info_item">
                      <div class="icon">
                        <img src="../assets/images/clock.svg" alt="" />
                      </div>
                      <span>Solo con Cita Previa</span>
                    </div>
                  </div>
                </div>
                <div class="location_footer">
                  <a href="https://maps.app.goo.gl/gipj5Wis3cChaxLz6" target="_blank" class="btn btnBlue">
                    <img src="../assets/images/location-icon.svg" alt="" />
                    Cómo Llegar
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="location_card">
              <div class="location_map">
               <iframe title="Mapa de nuestra consulta de San Gabriel" data-src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6605.377669372209!2d-118.072537!3d34.12871500000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2db0c8b863a03%3A0x3b6d985eb1a86ca!2s7232%20Rosemead%20Blvd%20Ste%20202%2C%20San%20Gabriel%2C%20CA%2091775%2C%20USA!5e0!3m2!1sen!2sin!4v1786687411917!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
              </div>

              <div class="location_content_div">
                <div class="location_content">
                  <div class="location_left">
                    <h5 role="heading" aria-level="4"><span class="dot"></span>San Gabriel</h5>
                    <p>7232 Rosemead Blvd, Suite 202<br> San Gabriel, CA 91775</p>
                  </div>

                  <div class="location_right">
                    <div class="info_item">
                      <div class="icon">
                        <img src="../assets/images/contact.svg" alt="" />
                      </div>
                      <a href="tel:6266566550">(626) 656-6550</a>
                    </div>

                    <div class="info_item">
                      <div class="icon">
                        <img src="../assets/images/clock.svg" alt="" />
                      </div>
                      <span>Solo con Cita Previa</span>
                    </div>
                  </div>
                </div>
                <div class="location_footer">
                  <a href="https://maps.app.goo.gl/pkkgF9NVMRjcTTa49" target="_blank" class="btn btnBlue">
                    <img src="../assets/images/location-icon.svg" alt="" />
                    Cómo Llegar
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
