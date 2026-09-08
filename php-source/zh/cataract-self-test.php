<?php
$lang = 'zh';
$base = '../';
$page_slug = 'cataract-self-test.php';
$page_title = '白内障自测 | California Vision and Visage';
$page_description = '一份简短的科普问卷，帮助您识别与白内障常见相关的症状与风险因素 — California Vision and Visage';
include __DIR__ . '/../includes/header.php';
?>

    <section class="inner_hero bG_Blue padding_xl">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <div class="heading">
                        <span class="border-title">患者资源</span>
                        <h1 class="textColor_White">白内障自测</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner_content textColor_White">
                        <p>回答几个关于视力的问题，我们会告诉您这些症状是否属于白内障常见的表现，以及是否值得预约检查。</p>
                        <p class="inner_subtitle">约需 2 分钟</p>
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
                            <span class="border-title">重要提示</span>
                            <h2 class="h4 textColor_White">何时不应依赖本问卷</h2>
                        </div>
                        <p>若您出现突然视力丧失、飞蚊或闪光突然增多、视野中出现幕状或阴影遮挡，或眼睛疼痛，请立即就医，而不要依赖本问卷。这些可能是视网膜问题或其他与白内障无关的紧急情况的征兆，本问卷并不评估这些状况。若变化突然或严重，请拨打 911 或前往最近的急诊室。</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <div class="heading block_heading">
                        <h2 class="h4 textColor_Blue">这是科普工具，并非诊断</h2>
                    </div>
                    <p>本问卷旨在帮助您识别与白内障常见相关的症状与风险因素。它无法诊断白内障、判断病情进展程度，也无法决定您是否适合手术 &mdash; 这些只有经过散瞳的全面眼科检查才能确定。请不要因本问卷的结果而推迟预约检查，无论结果如何。</p>
                    <p>请根据您近几个月的视力情况回答以下问题。</p>

                    <form id="cataractQuiz" class="selftest" novalidate>

                        <p class="selftest_group_label">症状</p>

                        <fieldset data-weight="2">
                            <legend>1. 即使配戴现有的眼镜或隐形眼镜，您的视力是否仍然模糊、混浊、雾蒙蒙或像隔着一层膜？</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q1" value="2"> 是</label>
                                <label><input type="radio" name="q1" value="0"> 否</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="2">
                            <legend>2. 看灯光（车灯、路灯、台灯）时，是否出现眩光、光晕或星芒，尤其在夜间？</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q2" value="2"> 是</label>
                                <label><input type="radio" name="q2" value="0"> 否</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="2">
                            <legend>3. 夜间开车是否明显变得更困难或更不舒服？</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q3" value="2"> 是</label>
                                <label><input type="radio" name="q3" value="0"> 否</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="2">
                            <legend>4. 颜色看起来是否比以前黯淡、发黄或不够鲜艳？</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q4" value="2"> 是</label>
                                <label><input type="radio" name="q4" value="0"> 否</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="2">
                            <legend>5. 您是否注意到单眼出现重影或影像叠影，遮住该眼后即消失？</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q5" value="2"> 是</label>
                                <label><input type="radio" name="q5" value="0"> 否</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="2">
                            <legend>6. 阅读、烹饪或做其他近距离工作时，是否需要比以前明显更亮的光线？</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q6" value="2"> 是</label>
                                <label><input type="radio" name="q6" value="0"> 否</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="2">
                            <legend>7. 过去一两年内，您的眼镜或隐形眼镜度数是否变更过不止一次？</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q7" value="2"> 是</label>
                                <label><input type="radio" name="q7" value="0"> 否</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="2">
                            <legend>8. 您是否因视力问题而回避或难以进行阅读、开车、辨认面孔或看电视等活动？</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q8" value="2"> 是</label>
                                <label><input type="radio" name="q8" value="0"> 否</label>
                            </div>
                        </fieldset>

                        <p class="selftest_group_label">既往病史与背景</p>

                        <fieldset data-weight="1">
                            <legend>9. 您是否年满 60 岁？</legend>
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
                            <legend>11. 您的父母或兄弟姐妹是否曾被诊断出白内障？</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q11" value="1"> 是</label>
                                <label><input type="radio" name="q11" value="0"> 否</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="1">
                            <legend>12. 您是否曾有眼部外伤、眼部发炎或眼科手术史，或长期使用类固醇药物（口服药、吸入剂或眼药水）？</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q12" value="1"> 是</label>
                                <label><input type="radio" name="q12" value="0"> 否</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="1">
                            <legend>13. 您是否吸烟，或长期在未经常配戴太阳镜的情况下大量暴露于阳光下？</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q13" value="1"> 是</label>
                                <label><input type="radio" name="q13" value="0"> 否</label>
                            </div>
                        </fieldset>

                        <div class="btn_div">
                            <button type="submit" class="btn btnGreen">查看我的结果</button>
                        </div>

                        <p class="selftest_error" id="selftestError" role="alert" hidden></p>
                    </form>

                    <div class="selftest_result" id="selftestResult" role="status" aria-live="polite" hidden></div>

                    <div class="heading block_heading">
                        <h2 class="h4 textColor_Blue">想确定答案吗？</h2>
                    </div>
                    <p>要确认是否患有白内障 &mdash; 以及手术是否有帮助 &mdash; 唯一的方法是接受散瞳的全面眼科检查。我们的团队可以评估您的视力，并为您说明各种选择。</p>
                    <ul class="arrow_list">
                        <li><strong>City of Industry 诊所：</strong> <a href="tel:6268100689">(626) 810-0689</a></li>
                        <li><strong>San Gabriel 诊所：</strong> <a href="tel:6266566550">(626) 656-6550</a></li>
                    </ul>
                    <div class="btn_div">
                        <a href="contact-us.php" class="btn btnGreen">预约眼科检查</a>
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
      heading: '目前看来不太像白内障的症状',
      body: '您所报告的白内障常见症状与风险因素较少。这是好消息，但并不能排除任何可能 —— 白内障进展缓慢，早期往往不易察觉。定期接受眼科检查仍是及早发现变化的最佳方式。'
    },
    moderate: {
      heading: '或许值得做一次眼科检查',
      body: '您报告了一些与白内障常见相关的症状或风险因素。其中不少也可能由其他原因引起，例如度数变化或干眼症，因此接受全面眼科检查是查明原因的最佳下一步。'
    },
    high: {
      heading: '您的多项回答与白内障常见相关',
      body: '您报告了多项在白内障患者中常见的症状与风险因素，其中部分可能已影响您的日常活动。建议您尽快预约全面眼科检查，以便我们检查您的眼睛，并讨论治疗是否有助于改善视力。'
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
      errorBox.textContent = '请回答所有问题后再查看结果。';
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
      '<p><strong>此结果并非诊断。</strong>只有经过散瞳的眼科检查才能确认您是否患有白内障。</p>' +
      '<div class="btn_div"><a href="contact-us.php" class="btn btnGreen">预约眼科检查</a></div>';
    resultBox.hidden = false;
    resultBox.scrollIntoView({ behavior: 'smooth', block: 'start' });
  });
})();
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>
