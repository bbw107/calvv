<?php
$lang = 'zh-Hant';
$base = '../';

// Must run before any output -- it redirects on a successful send.
// $lang is set above it so validation messages come back translated.
include __DIR__ . '/../includes/contact-handler.php';

$page_slug = 'contact-us.php';
$page_title = '聯絡我們 | California';
$page_description = '聯絡 California Vision and Visage — 南加州 City of Industry 與 San Gabriel 兩處眼科診所。';
include __DIR__ . '/../includes/header.php';
?>

    <section class="inner_hero bG_Blue padding_xl">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">
                        <h1 class="textColor_White">聯絡我們</h1>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="contact_section condition_block padding_lg">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="contact_div">
                        <div class="heading">
                            <h2 class="textColor_Blue">California Vision and Visage</h2>
                        </div>
                        <div class="contact_info">
                            <p>18575 Gale Avenue, Suite 168 City of Industry, CA 91748</p>
                            <p>（位於 Fullerton 與 Nogales 之間，Seasons Plaza 對面）</p>
                            <p><strong>電話</strong> <a href="tel:626-810-0689">626-810-0689</a></p>
                            <p><strong>電子郵件</strong> <a href="mailto:info@calvv.com">info@calvv.com</a></p>
                            <p><strong>週一至週五</strong> 上午9:00–下午5:00</p>

                            <div class="contact_divider"></div>

                            <p>7232 Rosemead Blvd, Suite 202 San Gabriel, CA 91775</p>
                            <p>（Huntington Drive 以南）</p>
                            <p><strong>電話</strong> <a href="tel:626-656-6550">626-656-6550</a></p>
                            <p><strong>電子郵件</strong> <a href="mailto:info@calvv.com">info@calvv.com</a></p>
                            <p>僅限預約</p>
                            <!-- Hidden at client request. The screen-reader
                                 notice still appears in the site footer. -->
                            <!--
                            <p>若您使用螢幕閱讀器，在瀏覽本網站時遇到困難，請致電 <a href="tel:708-891-3330">(708) 891-3330</a></p>
                            <p><strong>電子郵件</strong> <a href="mailto:info@calvv.com">info@calvv.com</a></p>
                            -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact_form">
<?php if ($contact_sent): ?>
                        <div class="form_alert form_alert_success" role="status">
                            <?php echo e($t['form']['success']); ?>
                        </div>
<?php endif; ?>
<?php if ($contact_errors): ?>
                        <div class="form_alert form_alert_error" role="alert">
<?php foreach ($contact_errors as $error): ?>
                            <p><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></p>
<?php endforeach; ?>
                        </div>
<?php endif; ?>
                        <form action="contact-us.php" method="post">
                            <div class="form_row">
                                <div class="form_field">
                                    <input type="text" name="first_name" autocomplete="given-name" aria-required="true" placeholder="<?php echo e($t['form']['first_name']); ?>" aria-label="<?php echo e($t['form']['first_name']); ?>" value="<?php echo htmlspecialchars($contact_values['first_name'], ENT_QUOTES, 'UTF-8'); ?>" />
                                </div>
                                <div class="form_field">
                                    <input type="text" name="last_name" autocomplete="family-name" placeholder="<?php echo e($t['form']['last_name']); ?>" aria-label="<?php echo e($t['form']['last_name']); ?>" value="<?php echo htmlspecialchars($contact_values['last_name'], ENT_QUOTES, 'UTF-8'); ?>" />
                                </div>
                            </div>
                            <div class="form_row">
                                <div class="form_field">
                                    <input type="email" name="email" autocomplete="email" aria-required="true" placeholder="<?php echo e($t['form']['email']); ?>" aria-label="<?php echo e($t['form']['email']); ?>" value="<?php echo htmlspecialchars($contact_values['email'], ENT_QUOTES, 'UTF-8'); ?>" />
                                </div>
                                <div class="form_field">
                                    <input type="tel" name="phone" autocomplete="tel" placeholder="<?php echo e($t['form']['phone']); ?>" aria-label="<?php echo e($t['form']['phone']); ?>" value="<?php echo htmlspecialchars($contact_values['phone'], ENT_QUOTES, 'UTF-8'); ?>" />
                                </div>
                            </div>
                            <div class="form_row">
                                <div class="form_field">
                                    <label for="service"><?php echo e($t['form']['service']); ?></label>
                                    <select name="service" id="service" aria-required="true">
<?php foreach ($contact_services as $service): ?>
                                        <option value="<?php echo htmlspecialchars($service, ENT_QUOTES, 'UTF-8'); ?>"<?php echo $contact_values['service'] === $service ? ' selected' : ''; ?>><?php echo e($t['services'][$service] ?? $service); ?></option>
<?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form_row">
                                <div class="form_field">
                                    <textarea name="message" aria-required="true" placeholder="<?php echo e($t['form']['message']); ?>" aria-label="<?php echo e($t['form']['message']); ?>"><?php echo htmlspecialchars($contact_values['message'], ENT_QUOTES, 'UTF-8'); ?></textarea>
                                </div>
                            </div>
                            <!-- Spam trap: hidden from people, filled in by bots. Positioned
                                 offscreen rather than display:none so bots still see it. Styled
                                 inline on purpose -- if style.css fails to load this must still
                                 stay hidden, or visitors get a stray "網站" field.
                                 The name/id stay "website" -- contact-handler.php checks that key. -->
                            <div aria-hidden="true" style="position:absolute;left:-9999px;width:1px;height:1px;overflow:hidden;">
                                <label for="website">網站</label>
                                <input type="text" name="website" id="website" tabindex="-1" autocomplete="off" />
                            </div>
                            <button type="submit" class="btn btnGreen"><?php echo e($t['form']['submit']); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
