<?php
$lang = 'zh';
$base = '../';
$page_slug = '';
$page_title = 'California Vision and Visage – 眼科与眼整形外科，圣盖博谷';
$page_description = '世界一流的眼科医疗与医学美容服务，以真诚的关怀为您呈现 — 南加州两处便利诊所，随时恭候 — California Vision and Visage';
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
                >南加州顶尖眼科诊所</span
              >
              <h1>
                更好的视力。<br /><span class="textColor_Cyan"
                  >清晰生活每一天。</span
                >
              </h1>
              <p class="p1">
                世界一流的眼科医疗与医学美容服务，以真诚的关怀为您呈现 —
                南加州两处便利诊所，随时恭候。
              </p>
              <div class="btn_div">
                <a href="patient-portal.php" class="btn btnTextBorder">患者门户</a>
                <a href="contact-us.php" class="btn btnGreen">预约就诊</a>
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
                <a href="cataract-self-test.php" aria-label="白内障自测"
                  ><img src="../assets/images/eye_icon.svg" alt=""
                /></a>
              </div>
              <div class="icon_content">
                <h5 role="heading" aria-level="2">白内障自测</h5>
                <p>您适合手术吗？</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 cards_col">
            <div class="card_div">
              <div class="icon_div">
                <a href="contact-us.php" aria-label="预约就诊"
                  ><img src="../assets/images//calendar_icon.svg" alt=""
                /></a>
              </div>
              <div class="icon_content">
                <h5 role="heading" aria-level="2">预约就诊</h5>
                <p>今天就开始</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 cards_col">
            <div class="card_div">
              <div class="icon_div">
                <a href="about-us.php" aria-label="我们的医生"
                  ><img src="../assets/images/user-icon.svg" alt=""
                /></a>
              </div>
              <div class="icon_content">
                <h5 role="heading" aria-level="2">我们的医生</h5>
                <p>认识我们的团队</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 cards_col">
            <div class="card_div">
              <div class="icon_div">
                <a href="contact-us.php" aria-label="联系我们"
                  ><img src="../assets/images/phone-icon.svg" alt=""
                /></a>
              </div>
              <div class="icon_content">
                <h5 role="heading" aria-level="2">联系我们</h5>
                <p>我们随时为您服务</p>
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
                <span class="border-title">欢迎</span>
                <h2>专业的医疗品质。 <br />用心的关怀温度。</h2>
                <p>
                  我们是一家由多位眼科医生与眼科外科医师组成的医疗团队，提供各类眼科疾病的诊断与治疗，并在青光眼与眼整形领域设有亚专科门诊。我们常见的诊疗范围包括青光眼、眼睑疾病、眼眶与泪道系统疾病、白内障、干眼症、红眼症、糖尿病眼病以及黄斑变性。
                </p>

                <p>
                  在 California Vision and Visage，我们的目标是提供专业、高品质的眼科医疗服务，让您的每一次就诊都舒适、愉快且有所收获。
                </p>
              </div>
              <div class="counter">
                <div class="counter_content">
                  <h4 role="heading" aria-level="3">15+</h4>
                  <p>年深耕南加州</p>
                </div>
                <div class="counter_content">
                  <h4 role="heading" aria-level="3">2</h4>
                  <p>位认证医师</p>
                </div>
                <div class="counter_content">
                  <h4 role="heading" aria-level="3">2</h4>
                  <p>处便利诊所</p>
                </div>
              </div>
              <div class="btn_div">
                <a href="about-us.php" class="btn btnBlue">了解更多</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="about_img">
              <img
                src="../assets/images/about_img.webp"
                srcset="../assets/images/about_img_mobile.webp 800w, ../assets/images/about_img.webp 1103w"
                sizes="(max-width: 767px) 100vw, 636px"
                alt="眼科医师在诊室内使用裂隙灯为患者检查眼睛"
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
              <p>患者评价</p>
            </div>
          </div>
          <div class="col-lg-10">
            <div class="row">
              <div class="col-lg-6">
                <div class="testimonial_content">
                  <h6 role="heading" aria-level="3">
                    “从头到尾都很专业 — 员工友善体贴，真正倾听患者的需求。医生检查细致，并耐心地把每一件事都解释清楚。”
                  </h6>
                  <p>— Maria L. · Google 评论（五星）</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="testimonial_content">
                  <h6 role="heading" aria-level="3">
                    “我原本对白内障手术很紧张，但整个团队让我完全放下心来。我的视力比过去多年都要好。”
                  </h6>
                  <p>— James T. · Yelp 评论（五星）</p>
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
              <span class="border-title">我们的专长</span>
              <h2>先进的眼科与医学美容诊疗</h2>
              <p>
                我们的医生具备亚专科培训背景，运用前沿的诊断与手术技术，在眼健康与医学美容的各个领域为患者带来卓越疗效。
              </p>
              <div class="btn_div">
                <a href="contact-us.php" class="btn btnGreen">预约就诊</a>
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
                  <h6 role="heading" aria-level="3">眼睑成形术（亚洲与非亚洲）</h6>
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
                  <h6 role="heading" aria-level="3">保妥适 (Botox)</h6>
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
                  <h6 role="heading" aria-level="3">白内障</h6>
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
                  <h6 role="heading" aria-level="3">糖尿病眼病</h6>
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
                  <h6 role="heading" aria-level="3">干眼症</h6>
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
                  <h6 role="heading" aria-level="3">睑内翻与睑外翻</h6>
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
                  <h6 role="heading" aria-level="3">溢泪症</h6>
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
                  <h6 role="heading" aria-level="3">眼睑皮肤癌</h6>
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
                  <h6 role="heading" aria-level="3">闪光与飞蚊症</h6>
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
                  <h6 role="heading" aria-level="3">青光眼</h6>
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
                  <h6 role="heading" aria-level="3">黄斑变性</h6>
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
                  <h6 role="heading" aria-level="3">结膜炎</h6>
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
                  <h6 role="heading" aria-level="3">上睑下垂</h6>
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
                  <h6 role="heading" aria-level="3">屈光不正</h6>
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
                  <h6 role="heading" aria-level="3">视网膜裂孔</h6>
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
                  <span class="boder-Left-Right_title">认识团队</span>
                  <h3>我们的医生</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="team_box bG_White border-radius16">
                  <img src="../assets/images/team1.webp" alt="Dr. Adam Y. Hsu, MD" />
                  <div class="team_content">
                    <h5 role="heading" aria-level="4">Dr. Adam Hsu, MD</h5>
                    <p>认证眼科医师</p>
                    <p>
                      眼部整形与重建外科是眼科的一个外科亚专科，专门处理眼睑、泪道系统、眼眶（眼球所在的骨性腔）以及邻近面部结构的异常与疾病。他提供非手术的面部年轻化治疗，以及眼面部美容手术。Dr. Hsu 可流利使用西班牙语、台语和普通话。
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="team_box bG_White border-radius16">
                  <img src="../assets/images/team2.webp" alt="Dr. Bonnie B. Woo, MD" />
                  <div class="team_content">
                    <h5 role="heading" aria-level="4">Dr. Bonnie Woo, MD</h5>
                    <p>认证眼科医师</p>
                    <p>
                      Dr. Woo 是一位认证眼科医师，专精于高端白内障手术与青光眼诊疗。她运用先进的诊断技术、无刀激光手术以及高端人工晶状体植入，帮助患者减少对眼镜的依赖；同时以微创手术保护患者免受可致盲青光眼的威胁。
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
                <span class="border-title">保险</span>
                <h2>我们接受大多数主流保险计划</h2>
                <p>
                  我们的账务团队会核实您的保险覆盖范围，并协助您获得最大保障权益。请致电确认您的具体保险计划 — 我们随时为您提供协助。
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
                <span class="border-title">患者资源</span>
                <h2>就诊前须知</h2>
                <p>
                  下载表格、查看您的病历记录，并获取就诊前所需的一切准备信息。
                </p>
              </div>
              <div class="patient_list">
                <a href="<?php echo $base; ?>assets/pdf/<?php echo $t['forms_pdf']; ?>" target="_blank">
                  <div class="list-content">
                    <div class="icon_img">
                      <img src="../assets/images/form.svg" alt="" />
                    </div>
                    <div class="list_heading">
                      <h6 role="heading" aria-level="3">新患者表格</h6>
                      <p>请在就诊前下载并填写</p>
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
                      <h6 role="heading" aria-level="3">患者门户登录</h6>
                      <p>病历、检查结果与安全信息</p>
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
                      <h6 role="heading" aria-level="3">转诊医师</h6>
                      <p>为患者转诊至本诊所</p>
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
                      <h6 role="heading" aria-level="3">付款方式</h6>
                      <p>提供分期与多种付款选择</p>
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
              <span class="boder-Left-Right_title">诊所位置</span>
              <h3>我们的诊所</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="location_card">
              <div class="location_map">
                <iframe title="City of Industry 诊所位置地图" data-src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6615.786859222942!2d-117.898284!3d33.995271!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c32a5c33921ff5%3A0x75f50ea3910ae29a!2s18575%20Gale%20Ave%20%23168%2C%20City%20of%20Industry%2C%20CA%2091748%2C%20USA!5e0!3m2!1sen!2sin!4v1786687553509!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
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
                      <span>周一至周五：上午 9:00 – 下午 5:00</span>
                    </div>
                    <div class="info_item">
                      <div class="icon">
                        <img src="../assets/images/clock.svg" alt="" />
                      </div>
                      <span>仅限预约</span>
                    </div>
                  </div>
                </div>
                <div class="location_footer">
                  <a href="https://maps.app.goo.gl/gipj5Wis3cChaxLz6" target="_blank" class="btn btnBlue">
                    <img src="../assets/images/location-icon.svg" alt="" />
                    查看路线
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="location_card">
              <div class="location_map">
                <iframe title="San Gabriel 诊所位置地图" data-src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6605.377669372209!2d-118.072537!3d34.12871500000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2db0c8b863a03%3A0x3b6d985eb1a86ca!2s7232%20Rosemead%20Blvd%20Ste%20202%2C%20San%20Gabriel%2C%20CA%2091775%2C%20USA!5e0!3m2!1sen!2sin!4v1786687856040!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
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
                      <span>仅限预约</span>
                    </div>
                  </div>
                </div>
                <div class="location_footer">
                  <a href="https://maps.app.goo.gl/pkkgF9NVMRjcTTa49" target="_blank" class="btn btnBlue">
                    <img src="../assets/images/location-icon.svg" alt="" />
                    查看路线
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
