<?php
$lang = 'es';
$base = '../';
$page_slug = 'cataract-self-test.php';
$page_title = 'Autoevaluación de Cataratas | California Vision and Visage';
$page_description = 'Un breve cuestionario educativo para ayudarle a reconocer síntomas y factores de riesgo asociados con las cataratas — California Vision and Visage';
include __DIR__ . '/../includes/header.php';
?>

    <section class="inner_hero bG_Blue padding_xl">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <div class="heading">
                        <span class="border-title">Recursos para Pacientes</span>
                        <h1 class="textColor_White">Autoevaluación de Cataratas</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner_content textColor_White">
                        <p>Responda unas preguntas sobre su visión y le indicaremos si sus síntomas están entre los
                            asociados habitualmente con las cataratas, y si conviene pedir una cita.</p>
                        <p class="inner_subtitle">Dura unos 2 minutos</p>
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
                            <span class="border-title">Importante</span>
                            <h2 class="h4 textColor_White">Cuándo No Usar Este Cuestionario</h2>
                        </div>
                        <p>Busque atención médica inmediata, en lugar de confiar en este cuestionario, si sufre pérdida
                            repentina de visión, un aumento súbito de moscas volantes o destellos de luz, una cortina o
                            sombra en su campo visual, o dolor ocular. Pueden ser señales de un problema de retina u otra
                            afección urgente no relacionada con las cataratas, que aquí no se evalúan. Llame al 911 o acuda
                            a la sala de urgencias más cercana si el cambio es repentino o grave.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <div class="heading block_heading">
                        <h2 class="h4 textColor_Blue">Esta Es una Herramienta Educativa, No un Diagnóstico</h2>
                    </div>
                    <p>Este breve cuestionario pretende ayudarle a reconocer síntomas y factores de riesgo asociados
                        habitualmente con las cataratas. No puede diagnosticar una catarata, indicar en qué grado está
                        avanzada, ni decidir si usted es candidato a cirugía &mdash; eso solo puede hacerlo un examen
                        oftalmológico completo con dilatación. No retrase la cita por el resultado que obtenga aquí, en
                        ningún sentido.</p>
                    <p>Responda las siguientes preguntas según cómo ha estado su visión en los últimos meses.</p>

                    <form id="cataractQuiz" class="selftest" novalidate>

                        <p class="selftest_group_label">Síntomas</p>

                        <fieldset data-weight="2">
                            <legend>1. ¿Ve borroso, nublado, con niebla o como con un velo, incluso con sus gafas o lentillas actuales?</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q1" value="2"> Sí</label>
                                <label><input type="radio" name="q1" value="0"> No</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="2">
                            <legend>2. ¿Las luces &mdash; faros, farolas, lámparas &mdash; le producen deslumbramiento, halos o destellos en estrella, sobre todo de noche?</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q2" value="2"> Sí</label>
                                <label><input type="radio" name="q2" value="0"> No</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="2">
                            <legend>3. ¿Conducir de noche se ha vuelto notablemente más difícil o incómodo?</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q3" value="2"> Sí</label>
                                <label><input type="radio" name="q3" value="0"> No</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="2">
                            <legend>4. ¿Los colores le parecen apagados, amarillentos o menos vivos que antes?</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q4" value="2"> Sí</label>
                                <label><input type="radio" name="q4" value="0"> No</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="2">
                            <legend>5. ¿Ha notado visión doble o imágenes fantasma en un ojo, que desaparecen al taparlo?</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q5" value="2"> Sí</label>
                                <label><input type="radio" name="q5" value="0"> No</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="2">
                            <legend>6. ¿Necesita bastante más luz que antes para leer, cocinar u otras tareas de cerca?</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q6" value="2"> Sí</label>
                                <label><input type="radio" name="q6" value="0"> No</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="2">
                            <legend>7. ¿Su graduación de gafas o lentillas ha cambiado más de una vez en el último año o dos?</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q7" value="2"> Sí</label>
                                <label><input type="radio" name="q7" value="0"> No</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="2">
                            <legend>8. ¿Evita, o le cuesta, actividades como leer, conducir, reconocer caras o ver la televisión a causa de su visión?</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q8" value="2"> Sí</label>
                                <label><input type="radio" name="q8" value="0"> No</label>
                            </div>
                        </fieldset>

                        <p class="selftest_group_label">Antecedentes e Historial</p>

                        <fieldset data-weight="1">
                            <legend>9. ¿Tiene 60 años o más?</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q9" value="1"> Sí</label>
                                <label><input type="radio" name="q9" value="0"> No</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="1">
                            <legend>10. ¿Tiene diabetes?</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q10" value="1"> Sí</label>
                                <label><input type="radio" name="q10" value="0"> No</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="1">
                            <legend>11. ¿A algún progenitor o hermano le han diagnosticado cataratas?</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q11" value="1"> Sí</label>
                                <label><input type="radio" name="q11" value="0"> No</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="1">
                            <legend>12. ¿Ha tenido una lesión ocular, inflamación ocular o cirugía ocular previas, o ha usado corticoides &mdash; pastillas, inhaladores o colirios &mdash; durante un periodo prolongado?</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q12" value="1"> Sí</label>
                                <label><input type="radio" name="q12" value="0"> No</label>
                            </div>
                        </fieldset>

                        <fieldset data-weight="1">
                            <legend>13. ¿Fuma, o ha tenido una exposición solar considerable a lo largo de su vida sin usar gafas de sol con regularidad?</legend>
                            <div class="selftest_options">
                                <label><input type="radio" name="q13" value="1"> Sí</label>
                                <label><input type="radio" name="q13" value="0"> No</label>
                            </div>
                        </fieldset>

                        <div class="btn_div">
                            <button type="submit" class="btn btnGreen">Ver Mi Resultado</button>
                        </div>

                        <p class="selftest_error" id="selftestError" role="alert" hidden></p>
                    </form>

                    <div class="selftest_result" id="selftestResult" role="status" aria-live="polite" hidden></div>

                    <div class="heading block_heading">
                        <h2 class="h4 textColor_Blue">¿Listo para Salir de Dudas?</h2>
                    </div>
                    <p>La única forma de saber si tiene una catarata &mdash; y si la cirugía le ayudaría &mdash; es un
                        examen oftalmológico completo con dilatación. Nuestro equipo puede evaluar su visión y explicarle
                        las opciones.</p>
                    <ul class="arrow_list">
                        <li><strong>Consultorio de City of Industry:</strong> <a href="tel:6268100689">(626) 810-0689</a></li>
                        <li><strong>Consultorio de San Gabriel:</strong> <a href="tel:6266566550">(626) 656-6550</a></li>
                    </ul>
                    <div class="btn_div">
                        <a href="contact-us.php" class="btn btnGreen">Pedir una Cita</a>
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
      heading: 'Por ahora los síntomas de cataratas parecen poco probables',
      body: 'Ha indicado pocos de los síntomas y factores de riesgo asociados habitualmente con las cataratas. Es una buena señal, pero no descarta nada: las cataratas se desarrollan poco a poco y al principio suelen pasar desapercibidas. Los exámenes oculares periódicos siguen siendo la mejor forma de detectar cambios a tiempo.'
    },
    moderate: {
      heading: 'Puede que convenga revisarse la vista',
      body: 'Ha indicado algunos síntomas o factores de riesgo asociados habitualmente con las cataratas. Muchos pueden deberse también a otras causas, como un cambio de graduación o el ojo seco, por lo que un examen oftalmológico completo es el mejor paso siguiente para averiguar qué ocurre.'
    },
    high: {
      heading: 'Varias de sus respuestas se asocian habitualmente con las cataratas',
      body: 'Ha indicado varios síntomas y factores de riesgo frecuentes en personas con cataratas, incluidos algunos que pueden estar afectando a sus actividades diarias. Le sugerimos pedir pronto un examen oftalmológico completo para revisar sus ojos y valorar si el tratamiento mejoraría su visión.'
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
      errorBox.textContent = 'Responda todas las preguntas antes de ver su resultado.';
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
      '<p><strong>Este resultado no es un diagnóstico.</strong> Solo un examen con dilatación puede confirmar si tiene una catarata.</p>' +
      '<div class="btn_div"><a href="contact-us.php" class="btn btnGreen">Pedir una Cita</a></div>';
    resultBox.hidden = false;
    resultBox.scrollIntoView({ behavior: 'smooth', block: 'start' });
  });
})();
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>
