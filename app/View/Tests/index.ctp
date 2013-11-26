<link rel="stylesheet" type="text/css" href="/css/jquery.bxslider.css" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html"/>
<script src="/js/jquery-latest.min.js" type="text/javascript" charset="utf-8"></script>
<div class="content content_guia">
    <div class="slider slider_test">
        <ul class="bxslider">
        <?php if($pregunta == 1) {?>
            <li>
                <div class="box_slider box_test">
                    <h6>Procesos del ciclo anual</h6>
                    <div class="left_box">
                        <div class="title_pregunta">
                            <h3>
                                <img src="images/l1.png" alt="test">
                            </h3>
                        </div>
                    </div>
                    <div class="right_box">
                        <?= $this->Form->create('Respuesta', array(
                            'id' => 'form_test',
                            'class' => 'da-form',
                            'name' => 'form_test',
                            'inputDefaults' => array(
                                'label' => false,
                                'div' => false
                            )
                        ));?>
                            <input type="hidden" name="pregunta" value="<?= $pregunta?>">
                            <div class="preguntas">
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="1" id="p1" checked>
                                        <label for="p1">&nbsp;</label>
                                    </div>
                                    <p>Un grupo de Actividades para guiar a los <br> empleados hacia objetivos de largo plazo.</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="2" id="p2">
                                        <label for="p2">&nbsp;</label>
                                    </div>
                                    <p>Un formulario que envía RRHH donde los <br/> empleados tienen un rol pasivo</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="3" id="p3">
                                        <label for="p3">&nbsp;</label>
                                    </div>
                                    <p>Una Herramienta donde se establecen los <br/> objetivos a corto plazo para mostrar el avance <br/> dentro de tu puesto actual, incluídos  los <br/> objetivos de competencia.</p>
                                </div>
                                <a href="#" class="btn_azul" id="submit">OK</a>
                            </div>
                        </form>
                    </div>
                </div>
            </li>
        <?php } elseif($pregunta == 2) {?>
            <li>
                <div class="box_slider box_test">
                    <h6>Procesos del ciclo anual</h6>
                    <div class="left_box">
                        <div class="title_pregunta">
                            <h3>
                                <img src="images/l2.png" alt="test">
                            </h3>
                        </div>
                    </div>
                    <div class="right_box">
                        <?= $this->Form->create('Respuesta', array(
                            'id' => 'form_test',
                            'class' => 'da-form',
                            'name' => 'form_test',
                            'inputDefaults' => array(
                                'label' => false,
                                'div' => false
                            )
                        ));?>
                            <input type="hidden" name="pregunta" value="<?= $pregunta?>">
                            <div class="preguntas preguntas2">
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="1" id="p1" checked>
                                        <label for="p1">&nbsp;</label>
                                    </div>
                                    <p>Una herramienta donde se establecen actividades <br/> para guiarlas hacia los objetivos de desarrollo de <br/> carrera a mediano/largo plazo.</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="2" id="p2">
                                        <label for="p2">&nbsp;</label>
                                    </div>
                                    <p>Un formulario de visita dual</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="3" id="p3">
                                        <label for="p3">&nbsp;</label>
                                    </div>
                                    <p>Un formulario de RRHH que se actualiza dos <br/> veces al a&#241;o</p>
                                </div>
                                <a href="#" class="btn_azul" id="submit">OK</a>
                            </div>
                        </form>
                    </div>
                </div>
            </li>
        <?php } elseif($pregunta == 3) {?>
            <li>
                <div class="box_slider box_test">
                    <h6>Procesos del ciclo anual</h6>
                    <div class="left_box">
                        <div class="title_pregunta">
                            <h3>
                                <img src="images/l3.png" alt="test">
                            </h3>
                        </div>
                    </div>
                    <div class="right_box">
                        <?= $this->Form->create('Respuesta', array(
                            'id' => 'form_test',
                            'class' => 'da-form',
                            'name' => 'form_test',
                            'inputDefaults' => array(
                                'label' => false,
                                'div' => false
                            )
                        ));?>
                            <input type="hidden" name="pregunta" value="<?= $pregunta?>">
                            <div class="preguntas">
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="1" id="p1" checked>
                                        <label for="p1">&nbsp;</label>
                                    </div>
                                    <p>Un momento b&#225;sicamente, que es el de fijaci&#243;n <br/> de objetivos</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="2" id="p2">
                                        <label for="p2">&nbsp;</label>
                                    </div>
                                    <p>Dos momentos b&#225;sicamente, que son el de fijaci&#243;n de objetivos y el de cierre y evaluaci&#243;n</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio" id="nueve">
                                        <input type="radio" name="respuesta" value="3" id="p3">
                                        <label for="p3">&nbsp;</label>
                                    </div>
                                    <p>Tres momentos b&#225;sicamente, que son el de fijaci&#243;n de objetivos a principio de a&#241;o, el de revisi&#243;n de objetivos a mediados del a&#241;o y el de cierre y evaluaci&#243;n a fines del a&#241;o</p>
                                </div>
                                <a href="#" class="btn_azul" id="submit">OK</a>
                            </div>
                        </form>
                    </div>
                </div>
            </li>
        <?php } elseif($pregunta == 4) {?>
            <li>
                <div class="box_slider box_test">
                    <h6>Las competencias y la carrera profesional <br/> (Perfiles competenciales - Criterios de progresi&#243;n)</h6>
                    <div class="left_box">
                        <div class="title_pregunta title_pregunta4">
                            <h3>
                                <img src="images/l4.png" alt="test">
                            </h3>
                        </div>
                    </div>
                    <div class="right_box">
                        <?= $this->Form->create('Respuesta', array(
                            'id' => 'form_test',
                            'class' => 'da-form',
                            'name' => 'form_test',
                            'inputDefaults' => array(
                                'label' => false,
                                'div' => false
                            )
                        ));?>
                            <input type="hidden" name="pregunta" value="<?= $pregunta?>">
                            <div class="preguntas preguntas4">
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="1" id="p1" checked>
                                        <label for="p1">&nbsp;</label>
                                    </div>
                                    <p>El nivel alcanzado en cada una de las competencias</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="2" id="p2">
                                        <label for="p2">&nbsp;</label>
                                    </div>
                                    <p>Los distintos niveles de competencia esperados para cada puesto</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="3" id="p3">
                                        <label for="p3">&nbsp;</label>
                                    </div>
                                    <p>El conjunto de competencias independientemente <br/> del puesto de trabajo</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio" id="nueve">
                                        <input type="radio" name="respuesta" value="4" id="p4">
                                        <label for="p4">&nbsp;</label>
                                    </div>
                                    <p>Una competencias visualizada de costado</p>
                                </div>
                                <a href="#" class="btn_azul" id="submit">OK</a>
                            </div>
                        </form>
                    </div>
                </div>
            </li>
        <?php } elseif($pregunta == 5) {?>
            <li>
                <div class="box_slider box_test">
                    <h6>Las competencias y la carrera profesional <br/> (Perfiles competenciales - Criterios de progresi&#243;n)</h6>
                    <div class="left_box">
                        <div class="title_pregunta title_pregunta5">
                            <h3>
                                <img src="images/l5.png" alt="test">
                            </h3>
                        </div>
                    </div>
                    <div class="right_box">
                        <?= $this->Form->create('Respuesta', array(
                            'id' => 'form_test',
                            'class' => 'da-form',
                            'name' => 'form_test',
                            'inputDefaults' => array(
                                'label' => false,
                                'div' => false
                            )
                        ));?>
                            <input type="hidden" name="pregunta" value="<?= $pregunta?>">
                            <div class="preguntas preguntas5">
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="1" checked id="p1">
                                        <label for="p1">&nbsp;</label>
                                    </div>
                                    <p>B&#225;sico, Experto, Contribuidor estrat&#233;gico</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="2" id="p2">
                                        <label for="p2">&nbsp;</label>
                                    </div>
                                    <p>B&#225;sico, Avanzado, Experto</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="3" id="p3">
                                        <label for="p3">&nbsp;</label>
                                    </div>
                                    <p>B&#225;sico, Avanzado, Experto <br/> Contribuidor estrat&#233;gico</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio" id="nueve">
                                        <input type="radio" name="respuesta" value="4" id="p4">
                                        <label for="p4">&nbsp;</label>
                                    </div>
                                    <p>Todas las anteriores</p>
                                </div>
                                <a href="#" class="btn_azul" id="submit">OK</a>
                            </div>
                        </form>
                    </div>
                </div>
            </li>
        <?php } elseif($pregunta == 6) {?>
            <li>
                <div class="box_slider box_test">
                    <h6>Las competencias y la carrera profesional <br/> (Perfiles competenciales - Criterios de progresi&#243;n)</h6>
                    <div class="left_box">
                        <div class="title_pregunta title_pregunta6">
                            <h3>
                                <img src="images/l6.png" alt="test">
                            </h3>
                        </div>
                    </div>
                    <div class="right_box">
                        <?= $this->Form->create('Respuesta', array(
                            'id' => 'form_test',
                            'class' => 'da-form',
                            'name' => 'form_test',
                            'inputDefaults' => array(
                                'label' => false,
                                'div' => false
                            )
                        ));?>
                            <input type="hidden" name="pregunta" value="<?= $pregunta?>">
                            <div class="preguntas preguntas6">
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="1" id="p1" checked>
                                        <label for="p1">&nbsp;</label>
                                    </div>
                                    <p>Calificaci&#243;n del 3P</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="2" id="p2">
                                        <label for="p2">&nbsp;</label>
                                    </div>
                                    <p>Requisitos competenciales</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="3" id="p3">
                                        <label for="p3">&nbsp;</label>
                                    </div>
                                    <p>N&#250;mero recomendado de a&#241;os en  el<br/> puesto de trabajo</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio" id="nueve">
                                        <input type="radio" name="respuesta" value="4" id="p4">
                                        <label for="p4">&nbsp;</label>
                                    </div>
                                    <p>Todas las anteriores</p>
                                </div>
                                <a href="#" class="btn_azul" id="submit">OK</a>
                            </div>
                        </form>
                    </div>
                </div>
            </li>
        <?php } elseif($pregunta == 7) {?>
            <li>
                <div class="box_slider box_test">
                    <h6>Las competencias y la carrera profesional <br/> (Perfiles competenciales - Criterios de progresi&#243;n)</h6>
                    <div class="left_box">
                        <div class="title_pregunta title_pregunta7">
                            <h3>
                                <img src="images/l7.png" alt="test">
                            </h3>
                        </div>
                    </div>
                    <div class="right_box">
                        <?= $this->Form->create('Respuesta', array(
                            'id' => 'form_test',
                            'class' => 'da-form',
                            'name' => 'form_test',
                            'inputDefaults' => array(
                                'label' => false,
                                'div' => false
                            )
                        ));?>
                            <input type="hidden" name="pregunta" value="<?= $pregunta?>">
                            <div class="preguntas preguntas7">
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="1" id="p1" checked>
                                        <label for="p1">&nbsp;</label>
                                    </div>
                                    <p>Obtener en el 3P 2EE u O en los ultimos 3 a&#241;os</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="2" id="p2">
                                        <label for="p2">&nbsp;</label>
                                    </div>
                                    <p>2 a&#241;os en la posici&#243;n  actual</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="3" id="p3">
                                        <label for="p3">&nbsp;</label>
                                    </div>
                                    <p>Requisitos competenciales</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="4" id="p4">
                                        <label for="p4">&nbsp;</label>
                                    </div>
                                    <p>Entrenamiento y desarrollo en NNWoS</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="5" id="p5">
                                        <label for="p5">&nbsp;</label>
                                    </div>
                                    <p>Todas las anteriores</p>
                                </div>
                                <a href="#" class="btn_azul" id="submit">OK</a>
                            </div>
                        </form>
                    </div>
                </div>
            </li>
        <?php } elseif($pregunta == 8) {?>
            <li>
                <div class="box_slider box_test">
                    <h6>Diccionario de competencias</h6>
                    <div class="left_box">
                        <div class="title_pregunta title_pregunta8">
                            <h3>
                                <img src="images/l8.png" alt="test">
                            </h3>
                        </div>
                    </div>
                    <div class="right_box">
                        <?= $this->Form->create('Respuesta', array(
                            'id' => 'form_test',
                            'class' => 'da-form',
                            'name' => 'form_test',
                            'inputDefaults' => array(
                                'label' => false,
                                'div' => false
                            )
                        ));?>
                            <input type="hidden" name="pregunta" value="<?= $pregunta?>">
                            <div class="preguntas preguntas8">
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="1" id="p1" checked>
                                        <label for="p1">&nbsp;</label>
                                    </div>
                                    <p>Para disponer de versiones ling&#252;&#237;sticas diferentes</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="2" id="p2">
                                        <label for="p2">&nbsp;</label>
                                    </div>
                                    <p>Para disponer de una visi&#243;n general de todas <br/> las competencias y sus conductas asociadas</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="3" id="p3">
                                        <label for="p3">&nbsp;</label>
                                    </div>
                                    <p>Para cumplir normativas</p>
                                </div>
                                <a href="#" class="btn_azul" id="submit">OK</a>
                            </div>
                        </form>
                    </div>
                </div>
            </li>
        <?php } elseif($pregunta == 9) {?>
            <li>
                <div class="box_slider box_test">
                    <h6>Diccionario de competencias</h6>
                    <div class="left_box">
                        <div class="title_pregunta title_pregunta8">
                            <h3>
                                <img src="images/l9.png" alt="test">
                            </h3>
                        </div>
                    </div>
                    <div class="right_box">
                        <?= $this->Form->create('Respuesta', array(
                            'id' => 'form_test',
                            'class' => 'da-form',
                            'name' => 'form_test',
                            'inputDefaults' => array(
                                'label' => false,
                                'div' => false
                            )
                        ));?>
                            <input type="hidden" name="pregunta" value="<?= $pregunta?>">
                            <div class="preguntas preguntas8">
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="1" id="p1" checked>
                                        <label for="p1">&nbsp;</label>
                                    </div>
                                    <p>Todos en Novo Nordisk</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="2" id="p2">
                                        <label for="p2">&nbsp;</label>
                                    </div>
                                    <p>Todos en la regi&#243;n</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="3" id="p3">
                                        <label for="p3">&nbsp;</label>
                                    </div>
                                    <p>Todos en ventas en la regi&#243;n</p>
                                </div>
                                <a href="#" class="btn_azul" id="submit">OK</a>
                            </div>
                        </form>
                    </div>
                </div>
            </li>
        <?php } elseif($pregunta == 10) {?>
            <li>
                <div class="box_slider box_test">
                    <h6>Diccionario de competencias</h6>
                    <div class="left_box">
                        <div class="title_pregunta title_pregunta12">
                            <h3>
                                <img src="images/l10.png" alt="test">
                            </h3>
                        </div>
                    </div>
                    <div class="right_box">
                        <?= $this->Form->create('Respuesta', array(
                            'id' => 'form_test',
                            'class' => 'da-form',
                            'name' => 'form_test',
                            'inputDefaults' => array(
                                'label' => false,
                                'div' => false
                            )
                        ));?>
                            <input type="hidden" name="pregunta" value="<?= $pregunta?>">
                            <div class="preguntas preguntas9">
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="1" id="p1" checked>
                                        <label for="p1">&nbsp;</label>
                                    </div>
                                    <p>Se centra en lo importante</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="2" id="p2">
                                        <label for="p2">&nbsp;</label>
                                    </div>
                                    <p>El liderazgo personal</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="3" id="p3">
                                        <label for="p3">&nbsp;</label>
                                    </div>
                                    <p>Conocimiento de la industria <br/> y del negocio</p>
                                </div>

                                <a href="#" class="btn_azul" id="submit">OK</a>
                            </div>
                        </form>
                    </div>
                </div>
            </li>
        <?php } elseif($pregunta == 11) {?>
            <li>
                <div class="box_slider box_test">
                    <h6>Diccionario de competencias</h6>
                    <div class="left_box">
                        <div class="title_pregunta title_pregunta13">
                            <h3>
                                <img src="images/l11.png" alt="test">
                            </h3>
                        </div>
                    </div>
                    <div class="right_box">
                        <?= $this->Form->create('Respuesta', array(
                            'id' => 'form_test',
                            'class' => 'da-form',
                            'name' => 'form_test',
                            'inputDefaults' => array(
                                'label' => false,
                                'div' => false
                            )
                        ));?>
                            <input type="hidden" name="pregunta" value="<?= $pregunta?>">
                            <div class="preguntas">
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="1" id="p1" checked>
                                        <label for="p1">&nbsp;</label>
                                    </div>
                                    <p>Todas las competencias en el diccionario</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="2" id="p2">
                                        <label for="p2">&nbsp;</label>
                                    </div>
                                    <p>Las competencias seleccionadas para el puesto</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="3" id="p3">
                                        <label for="p3">&nbsp;</label>
                                    </div>
                                    <p>Eso depende de cuantos a&#241;os haya Ud. estado <br/> en la Empresa</p>
                                </div>
                                <a href="#" class="btn_azul" id="submit">OK</a>
                            </div>
                        </form>
                    </div>
                </div>
            </li>
        <?php } elseif($pregunta == 12) {?>
            <li>
                <div class="box_slider box_test">
                    <h6>Diccionario de competencias</h6>
                    <div class="left_box">
                        <div class="title_pregunta title_pregunta10">
                            <h3>
                                <img src="images/l12.png" alt="test">
                            </h3>
                        </div>
                    </div>
                    <div class="right_box">
                        <?= $this->Form->create('Respuesta', array(
                            'id' => 'form_test',
                            'class' => 'da-form',
                            'name' => 'form_test',
                            'inputDefaults' => array(
                                'label' => false,
                                'div' => false
                            )
                        ));?>
                            <input type="hidden" name="pregunta" value="<?= $pregunta?>">
                            <div class="preguntas">
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="1" id="p1" checked>
                                        <label for="p1">&nbsp;</label>
                                    </div>
                                    <p>La descripci&#243;n general de una competencia</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="2" id="p2">
                                        <label for="p2">&nbsp;</label>
                                    </div>
                                    <p>Resumen de los elementos claves <br/> de cada competencia</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="3" id="p3">
                                        <label for="p3">&nbsp;</label>
                                    </div>
                                    <p>La traducci&#243;n de una competencia</p>
                                </div>
                                <a href="#" class="btn_azul" id="submit">OK</a>
                            </div>
                        </form>
                    </div>
                </div>
            </li>
        <?php } elseif($pregunta == 13) {?>
            <li>
                <div class="box_slider box_test">
                    <h6>Diccionario de competencias</h6>
                    <div class="left_box">
                        <div class="title_pregunta title_pregunta11">
                            <h3>
                                <img src="images/l13.png" alt="test">
                            </h3>
                        </div>
                    </div>
                    <div class="right_box">
                        <?= $this->Form->create('Respuesta', array(
                            'id' => 'form_test',
                            'class' => 'da-form',
                            'name' => 'form_test',
                            'inputDefaults' => array(
                                'label' => false,
                                'div' => false
                            )
                        ));?>
                            <input type="hidden" name="pregunta" value="<?= $pregunta?>">
                            <div class="preguntas">
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="1" id="p1" checked>
                                        <label for="p1">&nbsp;</label>
                                    </div>
                                    <p>Ventas</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="2" id="p2">
                                        <label for="p2">&nbsp;</label>
                                    </div>
                                    <p>Centrado en el cliente</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="3" id="p3">
                                        <label for="p3">&nbsp;</label>
                                    </div>
                                    <p>Se centra en lo importante</p>
                                </div>

                                <a href="#" class="btn_azul" id="submit">OK</a>
                            </div>
                        </form>
                    </div>
                </div>
            </li>
        <?php } elseif($pregunta == 50) {?>
            <li>
                <div class="box_slider box_test">
                    <div class="respuesta_correcta">
                        <div class="box_respuesta">
                            <h1>RESPUESTA CORRECTA!</h1>
                        </div>
                        <a href="<?= $this->Html->url(array('controller' => 'tests', 'action' => 'index'))?>" class="btn_azul">SIGUIENTE</a>
                    </div>
                </div>
            </li>
        <?php } elseif($pregunta == 60) {?>
            <li>
                <div class="box_slider box_test">
                    <div class="respuesta_incorrecta">
                        <div class="box_respuesta">
                            <h1>RESPUESTA INCORRECTA!</h1>
                        </div>
                        <a href="<?= $this->Html->url(array('controller' => 'tests', 'action' => 'index'))?>" class="btn_azul">VUELVA A INTENTARLO</a>
                    </div>
                </div>
            </li>
        <?php } elseif($pregunta == 100) {?>
            <li>
                <div class="box_slider box_test">
                    <div class="felicitaciones">
                        <h3>&#161;Felicitaciones&#33;</h3>
                        <p>
                            Ud. ha finalizado satisfactoriamente <br/>
                            este e-learning sobre el <br/>
                            Nuevo Modelo de Competencias <br/>
                            y el Plan de Carrera <br/>
                            aplicable a la Fuerza de Ventas
                        </p>
                        <img src="/images/hoja.png" alt="Felicitaciones">
                    </div>
                </div>
            </li>
        <?php } ?>
        </ul>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#submit").click(function(e) {
            e.preventDefault();
            $("#form_test").submit();
        });
    });
</script>