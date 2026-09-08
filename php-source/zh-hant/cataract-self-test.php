<?php
$lang = 'zh-Hant';
$base = '../';
$page_slug = 'cataract-self-test.php';
$page_title = '白內障自我檢測 | California Vision and Visage';
$page_description = '一份簡短的衛教問卷，協助您辨識與白內障常見相關的症狀與風險因子 — California Vision and Visage';
include __DIR__ . '/../includes/header.php';
?>

    <section class="inner_hero bG_Blue padding_xl">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <div class="heading">
                        <span class="border-title">患者資源</span>
                        <h1 class="textColor_White">白內障自我檢測</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner_content textColor_White">
                        <p>回答幾個關於視力的問題，我們會告訴您這些症狀是否屬於白內障常見的表現，以及是否值得預約檢查。</p>
                        <p class="inner_subtitle">約需 2 分鐘</p>
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
                            <span class="border-title">重要提醒</span>
                            <h2 class="h4 textColor_White">何時不應依賴本問卷</h2>
                        </div>
                        <p>若您出現突然視力喪失、飛蚊或閃光突然增多、視野中出現簾幕狀或陰影遮擋，或眼睛疼痛，請立即就醫，而非依賴本問卷。這些可能是視網膜問題或其他與白內障無關的緊急狀況徵兆，本問卷並不評估這些狀況。若變化突然或嚴重，請撥打 911 或前往最近的急診室。</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <div class="heading block_heading">
                        <h2 class="h4 textColor_Blue">這是衛教工具，並非診斷</h2>
                    </div>
                    <p>本問卷旨在協助您辨識與白內障常見相關的症狀與風險因子。它無法診斷白內障、判斷病情進展程度，也無法決定您是否適合手術 &mdash; 這些只有經過散瞳的完整眼科檢查才能確定。請勿因本問卷的結果而延後預約檢查，無論結果如何。</p>
                    <p>請依您近幾個月的視力狀況回答下列問題。</p>

                    <form id="cataractQuiz" class="selftest" novalidate>

                        <p class="selftest_group_label">症狀</p>

                        <fieldset data-weight="2">
                            <legend>1. 即使配戴現有的眼鏡或隱形眼鏡，您的視力是否仍然模糊、混濁、霧茫茫或像隔著一層膜？</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q1" value="2"> 是</label>
                                <label><input type="radio" name="q1" value="0"> 否</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="2">
                            <legend>2. 看燈光（車燈、路燈、檯燈）時，是否出現眩光、光暈或星芒，尤其在夜間？</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q2" value="2"> 是</label>
                                <label><input type="radio" name="q2" value="0"> 否</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="2">
                            <legend>3. 夜間開車是否明顯變得更困難或更不舒服？</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q3" value="2"> 是</label>
                                <label><input type="radio" name="q3" value="0"> 否</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="2">
                            <legend>4. 顏色看起來是否比以前黯淡、偏黃或不夠鮮豔？</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q4" value="2"> 是</label>
                                <label><input type="radio" name="q4" value="0"> 否</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="2">
                            <legend>5. 您是否注意到單眼出現重影或影像疊影，遮住該眼後即消失？</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q5" value="2"> 是</label>
                                <label><input type="radio" name="q5" value="0"> 否</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="2">
                            <legend>6. 閱讀、烹飪或從事其他近距離工作時，是否需要比以前明顯更亮的光線？</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q6" value="2"> 是</label>
                                <label><input type="radio" name="q6" value="0"> 否</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="2">
                            <legend>7. 過去一兩年內，您的眼鏡或隱形眼鏡度數是否變更過不止一次？</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q7" value="2"> 是</label>
                                <label><input type="radio" name="q7" value="0"> 否</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="2">
                            <legend>8. 您是否因視力問題而迴避或難以從事閱讀、開車、辨認面孔或看電視等活動？</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q8" value="2"> 是</label>
                                <label><input type="radio" name="q8" value="0"> 否</label>
                            </div>
                        </fieldset>

                        <p class="selftest_group_label">既往病史與背景</p>

                        <fieldset data-weight="1">
                            <legend>9. 您是否年滿 60 歲？</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q9" value="1"> 是</label>
                                <label><input type="radio" name="q9" value="0"> 否</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="1">
                            <legend>10. 您是否患有糖尿病？</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q10" value="1"> 是</label>
                                <label><input type="radio" name="q10" value="0"> 否</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="1">
                            <legend>11. 您的父母或兄弟姊妹是否曾被診斷出白內障？</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q11" value="1"> 是</label>
                                <label><input type="radio" name="q11" value="0"> 否</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="1">
                            <legend>12. 您是否曾有眼部外傷、眼部發炎或眼科手術病史，或長期使用類固醇藥物（口服藥、吸入劑或眼藥水）？</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q12" value="1"> 是</label>
                                <label><input type="radio" name="q12" value="0"> 否</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="1">
                            <legend>13. 您是否吸菸，或長期在未經常配戴太陽眼鏡的情況下大量曝曬於陽光下？</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q13" value="1"> 是</label>
                                <label><input type="radio" name="q13" value="0"> 否</label>
                            </div>
                        </fieldset>

                        <div class="btn_div">
                            <button type="submit" class="btn btnGreen">查看我的結果</button>
                        </div>

                        <p class="selftest_error" id="selftestError" role="alert" hidden></p>
                    </form>

                    <div class="selftest_result" id="selftestResult" role="status" aria-live="polite" hidden></div>

                    <div class="heading block_heading">
                        <h2 class="h4 textColor_Blue">想確定答案嗎？</h2>
                    </div>
                    <p>要確認是否罹患白內障 &mdash; 以及手術是否有幫助 &mdash; 唯一的方法是接受散瞳的完整眼科檢查。我們的團隊可以評估您的視力，並為您說明各種選擇。</p>
                    <ul class="arrow_list">
                        <li><strong>City of Industry 診所：</strong> <a href="tel:6268100689">(626) 810-0689</a></li>
                        <li><strong>San Gabriel 診所：</strong> <a href="tel:6266566550">(626) 656-6550</a></li>
                    </ul>
                    <div class="btn_div">
                        <a href="contact-us.php" class="btn btnGreen">預約眼科檢查</a>
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
      heading: '目前看來不太像白內障的症狀',
      body: '您所回報的白內障常見症狀與風險因子較少。這是好消息，但並不能排除任何可能 —— 白內障進展緩慢，早期往往不易察覺。定期接受眼科檢查仍是及早發現變化的最佳方式。'
    },
    moderate: {
      heading: '或許值得做一次眼科檢查',
      body: '您回報了一些與白內障常見相關的症狀或風險因子。其中不少也可能由其他原因引起，例如度數變化或乾眼症，因此接受完整眼科檢查是查明原因的最佳下一步。'
    },
    high: {
      heading: '您的多項回答與白內障常見相關',
      body: '您回報了多項在白內障患者中常見的症狀與風險因子，其中部分可能已影響您的日常活動。建議您盡快預約完整眼科檢查，以便我們檢查您的眼睛，並討論治療是否有助於改善視力。'
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
      errorBox.textContent = '請回答所有問題後再查看結果。';
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
      '<p><strong>此結果並非診斷。</strong>只有經過散瞳的眼科檢查才能確認您是否罹患白內障。</p>' +
      '<div class="btn_div"><a href="contact-us.php" class="btn btnGreen">預約眼科檢查</a></div>';
    resultBox.hidden = false;
    resultBox.scrollIntoView({ behavior: 'smooth', block: 'start' });
  });
})();
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>
