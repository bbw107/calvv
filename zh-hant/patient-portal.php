<?php
$lang = 'zh-Hant';
$base = '../';
$page_slug = 'patient-portal.php';
$page_title = '患者專區 | California';
$page_description = '透過 California Vision and Visage 患者專區線上查詢您的病歷資料，或聯絡我們位於南加州的兩處診所。';
include __DIR__ . '/../includes/header.php';
?>


<section class="medical-records-section bG_Blue padding_xl textColor_White">
    <div class="container">
        <div class="medical-records-page">

            <div class="medical-records-header">

            <div class="medical-logo">
                <h1>患者專區</h1>
            </div>

            <div class="doctor-details">
                <p><strong>Bonnie Woo, M.D.</strong></p>
                <p>一般眼科與青光眼</p>
                <p><strong>Adam Hsu, M.D.</strong></p>
                <p>眼整形、美容與重建外科</p>
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
                        如需查詢您的<br>
                        病歷資料，<br>
                        請前往：
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
                    <h3>初始密碼：<strong>1234</strong></h3>
                    <p class="medical-note textColor_Blue">
                        （請確認我們已登錄您的社會安全號碼，以便您登入）
                    </p>
                </div>
            </div>
            <!-- Hidden at client request. Kept for reference; the same two
                 addresses appear in the site footer on every page. -->
            <!--
            <div class="medical-records-footer">

                <p>
                    <strong><a href="https://maps.app.goo.gl/MMMuF6HBd2zUxC6eA">18575 Gale Avenue • Suite 168 • City of Industry • CA 91748</a></strong>
                    <a href="tel:6268100689">• 電話 (626) 810-0689</a>
                    <span class="contact_fax">• 傳真 (626) 839-2015</span>
                </p>

                <p>
                    <strong><a href="https://maps.app.goo.gl/SbwcFPCRwshjMz8eA">7232 Rosemead Blvd • Suite 202 • San Gabriel • CA 91775</a></strong>
                    <a href="tel:6266566550">• 電話 (626) 656-6550</a>
                    <span class="contact_fax">• 傳真 (626) 656-6430</span>
                </p>

            </div>
            -->
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
