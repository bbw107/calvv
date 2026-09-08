<?php
$lang = 'zh';
$base = '../';
$page_slug = 'patient-portal.php';
$page_title = '患者门户 | California Vision and Visage';
$page_description = '通过 California Vision and Visage 患者门户在线查询您的病历记录，或联系我们位于南加州的两处诊所。';
include __DIR__ . '/../includes/header.php';
?>


<section class="medical-records-section bG_Blue padding_xl textColor_White">
    <div class="container">
        <div class="medical-records-page">

            <div class="medical-records-header">

            <div class="medical-logo">
                <h1>患者门户</h1>
            </div>

            <div class="doctor-details">
                <p><strong>Bonnie Woo, M.D.</strong></p>
                <p>普通眼科与青光眼</p>
                <p><strong>Adam Hsu, M.D.</strong></p>
                <p>眼部整形、美容与重建外科</p>
            </div>

            </div>

            <div class="header-line"></div>
        </div>
    </div>
</section>

<section class="medical-footer bG_LightGray padding_lg">
    <div class="container">
        <div class="medical-footer_inner">
            <div class="footer_heading textColor_Blue">
                <div class="medical-records-content">

                    <h2>
                        如需查询您的<br>
                        病历记录，<br>
                        请访问：
                    </h2>

                    <a
                        href="https://www.myeyecarerecords.com"
                        target="_blank"
                        class="medical-records-link"
                    >
                        www.myeyecarerecords.com
                    </a>

                </div>
                <div class="inner_div">
                    <h3>初始密码：<strong>1234</strong></h3>
                    <p class="medical-note textColor_Blue">
                        （请确认我们已登记您的社会安全号码，以便您登录）
                    </p>
                </div>
            </div>
            <!-- Hidden at client request. Kept for reference; the same two
                 addresses appear in the site footer on every page. -->
            <!--
            <div class="medical-records-footer">

                <p>
                    <strong><a href="https://maps.app.goo.gl/MMMuF6HBd2zUxC6eA">18575 Gale Avenue • Suite 168 • City of Industry • CA 91748</a></strong>
                    <a href="tel:6268100689">• 电话 (626) 810-0689</a>
                    <span class="contact_fax">• 传真 (626) 839-2015</span>
                </p>

                <p>
                    <strong><a href="https://maps.app.goo.gl/SbwcFPCRwshjMz8eA">7232 Rosemead Blvd • Suite 202 • San Gabriel • CA 91775</a></strong>
                    <a href="tel:6266566550">• 电话 (626) 656-6550</a>
                    <span class="contact_fax">• 传真 (626) 656-6430</span>
                </p>

            </div>
            -->
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
