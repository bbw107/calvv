<?php
$page_slug = 'patient-portal.php';
$page_title = 'Patient Portal | California Vision and Visage';
$page_description = 'Access your medical records online through the California Vision and Visage patient portal, or contact either of our Southern California offices.';
include __DIR__ . '/includes/header.php';
?>


<section class="medical-records-section bG_Blue padding_xl textColor_White">
    <div class="container">
        <div class="medical-records-page">

            <div class="medical-records-header">

            <div class="medical-logo">
                <h1>Patient Portal</h1>
            </div>

            <div class="doctor-details">
                <p><strong>Bonnie Woo, M.D.</strong></p>
                <p>General Ophthalmology and Glaucoma</p>
                <p><strong>Adam Hsu, M.D.</strong></p>
                <p>Oculoplastic, Cosmetic and Reconstructive Surgery</p>
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
                        For patient's inquiring their<br>
                        Medical Records,<br>
                        please visit:
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
                    <h3>Initial password: <strong>1234</strong></h3>
                    <p class="medical-note textColor_Blue">
                        (Please make sure we have your social security # on file for you to login)
                    </p>
                </div>
            </div>
            <!-- Hidden at client request. Kept for reference; the same two
                 addresses appear in the site footer on every page. -->
            <!--
            <div class="medical-records-footer">

                <p>
                    <strong><a href="https://maps.app.goo.gl/MMMuF6HBd2zUxC6eA">18575 Gale Avenue • Suite 168 • City of Industry • CA 91748</a></strong>
                    <a href="tel:6268100689">• Tel (626) 810-0689</a> 
                    <span class="contact_fax">• Fax (626) 839-2015</span>
                </p>

                <p>
                    <strong><a href="https://maps.app.goo.gl/SbwcFPCRwshjMz8eA">7232 Rosemead Blvd • Suite 202 • San Gabriel • CA 91775</a></strong>
                    <a href="tel:6266566550">• Tel (626) 656-6550</a>
                    <span class="contact_fax">• Fax (626) 656-6430</span>
                </p>

            </div>
            -->
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
