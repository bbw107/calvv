<?php
$page_slug = 'cataract-self-test.php';
$page_title = 'Cataract Self-Test | California';
$page_description = 'A short educational quiz to help you recognise symptoms and risk factors commonly linked to cataracts — California Vision and Visage';
include __DIR__ . '/includes/header.php';
?>

    <section class="inner_hero bG_Blue padding_xl">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <div class="heading">
                        <span class="border-title">Patient Resources</span>
                        <h1 class="textColor_White">Cataract Self-Test</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner_content textColor_White">
                        <p>Answer a few questions about your vision and we will tell you whether your symptoms are
                            among those commonly associated with cataracts, and whether it is worth booking an exam.</p>
                        <p class="inner_subtitle">Takes about 2 minutes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="condition_block condition_info legal_page padding_lg">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="info_card emergency_notice bG_Blue textColor_White darkCard_border">
                        <div class="heading">
                            <span class="border-title">Important</span>
                            <h2 class="h4 textColor_White">When Not to Use This Quiz</h2>
                        </div>
                        <p>Seek prompt medical attention rather than relying on this quiz if you experience sudden
                            vision loss, a sudden increase in floaters or flashes of light, a curtain or shadow across
                            your vision, or eye pain. These can be signs of a retinal problem or another urgent
                            condition unrelated to cataracts, and are not assessed here. Call 911 or go to the nearest
                            emergency room if the change is sudden or severe.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <div class="heading block_heading">
                        <h2 class="h4 textColor_Blue">This Is an Educational Tool, Not a Diagnosis</h2>
                    </div>
                    <p>This short quiz is meant to help you recognise symptoms and risk factors commonly associated
                        with cataracts. It cannot diagnose a cataract, tell you how advanced one is, or decide whether
                        you are a candidate for surgery &mdash; only a comprehensive, dilated eye exam by an eye doctor
                        can do that. Please do not delay booking an exam based on your result here, in either
                        direction.</p>
                    <p>Answer the questions below based on how your vision has been over the past several months.</p>

                    <form id="cataractQuiz" class="selftest" novalidate>

                        <p class="selftest_group_label">Symptoms</p>

                        <fieldset data-weight="2">
                            <legend>1. Is your vision blurry, cloudy, foggy or &ldquo;filmy&rdquo; &mdash; even with your current glasses or contacts?</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q1" value="2"> Yes</label>
                                <label><input type="radio" name="q1" value="0"> No</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="2">
                            <legend>2. Do lights &mdash; headlights, streetlights, lamps &mdash; seem to have glare, halos or starbursts around them, especially at night?</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q2" value="2"> Yes</label>
                                <label><input type="radio" name="q2" value="0"> No</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="2">
                            <legend>3. Has night driving become noticeably more difficult or uncomfortable?</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q3" value="2"> Yes</label>
                                <label><input type="radio" name="q3" value="0"> No</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="2">
                            <legend>4. Do colours look faded, yellowed or less vivid than they used to?</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q4" value="2"> Yes</label>
                                <label><input type="radio" name="q4" value="0"> No</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="2">
                            <legend>5. Have you noticed double vision or &ldquo;ghosting&rdquo; of images in one eye, which goes away when you cover that eye?</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q5" value="2"> Yes</label>
                                <label><input type="radio" name="q5" value="0"> No</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="2">
                            <legend>6. Do you need noticeably brighter light to read, cook or do other close-up tasks than you used to?</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q6" value="2"> Yes</label>
                                <label><input type="radio" name="q6" value="0"> No</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="2">
                            <legend>7. Has your glasses or contact lens prescription changed more than once in the past year or two?</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q7" value="2"> Yes</label>
                                <label><input type="radio" name="q7" value="0"> No</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="2">
                            <legend>8. Are you avoiding, or having trouble with, activities such as reading, driving, recognising faces or watching television because of your vision?</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q8" value="2"> Yes</label>
                                <label><input type="radio" name="q8" value="0"> No</label>
                            </div>
                        </fieldset>

                        <p class="selftest_group_label">Background and History</p>

                        <fieldset data-weight="1">
                            <legend>9. Are you aged 60 or older?</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q9" value="1"> Yes</label>
                                <label><input type="radio" name="q9" value="0"> No</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="1">
                            <legend>10. Do you have diabetes?</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q10" value="1"> Yes</label>
                                <label><input type="radio" name="q10" value="0"> No</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="1">
                            <legend>11. Has a parent or sibling been diagnosed with cataracts?</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q11" value="1"> Yes</label>
                                <label><input type="radio" name="q11" value="0"> No</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="1">
                            <legend>12. Have you had a previous eye injury, eye inflammation or eye surgery, or used steroid medication &mdash; tablets, inhalers or eye drops &mdash; for a prolonged period?</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q12" value="1"> Yes</label>
                                <label><input type="radio" name="q12" value="0"> No</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="1">
                            <legend>13. Do you smoke, or have you had significant lifetime sun exposure without regularly wearing sunglasses?</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q13" value="1"> Yes</label>
                                <label><input type="radio" name="q13" value="0"> No</label>
                            </div>
                        </fieldset>

                        <div class="btn_div">
                            <button type="submit" class="btn btnGreen">See My Result</button>
                        </div>

                        <p class="selftest_error" id="selftestError" role="alert" hidden></p>
                    </form>

                    <div class="selftest_result" id="selftestResult" role="status" aria-live="polite" hidden></div>

                    <div class="heading block_heading">
                        <h2 class="h4 textColor_Blue">Ready to Find Out for Certain?</h2>
                    </div>
                    <p>The only way to know whether you have a cataract &mdash; and whether surgery would help &mdash;
                        is a comprehensive eye exam with dilation. Our team can evaluate your vision and talk you
                        through the options.</p>
                    <ul class="arrow_list">
                        <li><strong>City of Industry office:</strong> <a href="tel:6268100689">(626) 810-0689</a></li>
                        <li><strong>San Gabriel office:</strong> <a href="tel:6266566550">(626) 656-6550</a></li>
                    </ul>
                    <div class="btn_div">
                        <a href="contact-us.php" class="btn btnGreen">Book an Eye Exam</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

<script>
(function () {
  var form = document.getElementById('cataractQuiz');
  if (!form) return;
  var errorBox = document.getElementById('selftestError');
  var resultBox = document.getElementById('selftestResult');

  var TIERS = {
    low: {
      heading: 'Cataract symptoms seem unlikely right now',
      body: 'You reported few of the symptoms and risk factors commonly associated with cataracts. That is reassuring, but it does not rule anything out — cataracts develop gradually and often go unnoticed at first. Routine eye exams remain the best way to catch changes early.'
    },
    moderate: {
      heading: 'It may be worth getting your eyes checked',
      body: 'You reported some symptoms or risk factors commonly associated with cataracts. Many of these can also come from other causes, such as a change in your glasses prescription or dry eye, so a comprehensive eye exam is the best next step to find out what is going on.'
    },
    high: {
      heading: 'Several of your answers are commonly linked to cataracts',
      body: 'You reported a number of symptoms and risk factors often seen in people who have cataracts, including some that may be affecting your daily activities. We would suggest booking a comprehensive eye exam soon so we can examine your eyes and discuss whether treatment would improve your vision.'
    }
  };

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    var sets = form.querySelectorAll('fieldset');
    var score = 0;
    var unanswered = null;

    for (var i = 0; i < sets.length; i++) {
      var radios = sets[i].querySelectorAll('input[type="radio"]');
      var picked = null;
      for (var j = 0; j < radios.length; j++) {
        if (radios[j].checked) { picked = radios[j]; break; }
      }
      if (!picked) { if (!unanswered) unanswered = sets[i]; continue; }
      score += parseInt(picked.value, 10);
    }

    if (unanswered) {
      errorBox.textContent = 'Please answer every question before viewing your result.';
      errorBox.hidden = false;
      var first = unanswered.querySelector('input[type="radio"]');
      if (first) first.focus();
      return;
    }

    errorBox.hidden = true;

    var tier = score <= 3 ? 'low' : (score <= 9 ? 'moderate' : 'high');
    var t = TIERS[tier];

    resultBox.className = 'selftest_result is_' + tier;
    resultBox.innerHTML =
      '<h2 class="h4 textColor_Blue">' + t.heading + '</h2>' +
      '<p>' + t.body + '</p>' +
      '<p><strong>This result is not a diagnosis.</strong> Only a dilated eye exam can confirm whether you have a cataract.</p>' +
      '<div class="btn_div"><a href="contact-us.php" class="btn btnGreen">Book an Eye Exam</a></div>';
    resultBox.hidden = false;
    resultBox.scrollIntoView({ behavior: 'smooth', block: 'start' });
  });
})();
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
