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
                            <h3>El <span>3P </span>es</h3>
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
                                        <input type="radio" name="respuesta" value="1" checked>
                                        <label for="uno">&nbsp;</label>
                                    </div>
                                    <p>Un grupo de Actividades para guiar a los <br> empleados hacia objetivos de largo plazo.</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="2">
                                        <label for="dos">&nbsp;</label>
                                    </div>
                                    <p>Un formulario que envia RRHH donde los <br/> empleados tienen un rol pasivo</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="3">
                                        <label for="tres">&nbsp;</label>
                                    </div>
                                    <p>Una Herramienta donde se establecen los <br/> objetivos a corto plazo para mostrar el avance <br/> dentro de tu puesto actual. incluidos los <br/> objetivos de competencia.</p>
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
                            <h3>El <span>IDP </span>es</h3>
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
                                        <input type="radio" name="respuesta" value="1" checked>
                                    </div>
                                    <p>Una herramienta donde se establecen actividades <br/> para guiarlas hacia los objetivos de desarrollo de <br/> carrera a mediano/largo plazo.</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="2">
                                    </div>
                                    <p>Un formulario de visita dual</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="3">
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
                            <h3>El <span>3P </span>tiene</h3>
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
                                        <input type="radio" name="respuesta" value="1" checked>
                                    </div>
                                    <p>Un momento basicamente, que es el de fijacion <br/> de objetivos</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="2">
                                    </div>
                                    <p>Dos momentos basicamente, que son el de fijacion de objetivos y el de cierre y evaluacion</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio" id="nueve">
                                        <input type="radio" name="respuesta" value="3">
                                    </div>
                                    <p>Tres momentos basicamente, que son el de fijacion de objetivos a principios de a&#241;o, el de revision de objetivos a mediados del a&#241;o y el de cierre y evaluacion a fines del a&#241;o</p>
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
                    <h6>Las competencias y la carrera profesional <br/> (Perfiles competenciales - Criterios de progresion)</h6>
                    <div class="left_box">
                        <div class="title_pregunta title_pregunta4">
                            <h3>Un pe<span>rf</span>il <br/> comp<span>et</span>encial es</h3>
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
                                        <input type="radio" name="respuesta" value="1" checked>
                                    </div>
                                    <p>El nivel alcanzado en cada una de las competencias</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="2">
                                    </div>
                                    <p>Los distintos niveles de competencia esperados para cada puesto</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="3">
                                    </div>
                                    <p>El conjunto de competencias independientemente <br/> del puesto de trabajo</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio" id="nueve">
                                        <input type="radio" name="respuesta" value="4">
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
                    <h6>Las competencias y la carrera profesional <br/> (Perfiles competenciales - Criterios de progresion)</h6>
                    <div class="left_box">
                        <div class="title_pregunta title_pregunta5">
                            <h3>Los nive<span>les</span> de <br/> compe<span>tenc</span>ia para <br/> fuer<span>za</span> de <span>ve</span>ntas son</h3>
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
                                        <input type="radio" name="respuesta" value="1" checked>
                                    </div>
                                    <p>Basico, Experto, Contribuidor estrategico</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="2">
                                    </div>
                                    <p>Basico, Avanzado, Experto</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="3">
                                    </div>
                                    <p>Basico, Avanzado, Experto <br/> Contribuidor estrategico</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio" id="nueve">
                                        <input type="radio" name="respuesta" value="4">
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
                    <h6>Las competencias y la carrera profesional <br/> (Perfiles competenciales - Criterios de progresion)</h6>
                    <div class="left_box">
                        <div class="title_pregunta title_pregunta6">
                            <h3>Dent<span>ro de los</span> criterios de progresion, para la pro<span>moci</span>on de un <br/> repr<span>esent</span>ante de ventas se de<span>be</span> tener e<span>n cuent</span>ta como req<span>uisito man</span>datorio</h3>
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
                                        <input type="radio" name="respuesta" value="1" checked>
                                    </div>
                                    <p>Calificacion del 3P</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="2">
                                    </div>
                                    <p>Requisitos competenciales</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="3">
                                    </div>
                                    <p>Numero recomendado de a&#241;os en  el<br/> puesto de trabajo</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio" id="nueve">
                                        <input type="radio" name="respuesta" value="4">
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
                    <h6>Las competencias y la carrera profesional <br/> (Perfiles competenciales - Criterios de progresion)</h6>
                    <div class="left_box">
                        <div class="title_pregunta title_pregunta7">
                            <h3>Para <span>pasar d</span>e <br/> Rep a R<span>ep</span> Senior <br/> es ne<span>ces</span>ario</h3>
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
                                        <input type="radio" name="respuesta" value="1" checked>
                                    </div>
                                    <p>Obtener en el 3P 2EE u O en los ultimos 3 a&#241;os</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="2">
                                    </div>
                                    <p>2 a&#241;os en la pocicion actual</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="3">
                                    </div>
                                    <p>Requisitos competenciales</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="4">
                                    </div>
                                    <p>Entrenamiento y desarrollo en NNWoS</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="5">
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
                            <h3>Porq<span>ue te</span>nemos <br/> un di<span>ccio</span>nario de <br/> comp<span>eten</span>cias?</h3>
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
                                        <input type="radio" name="respuesta" value="1" checked>
                                    </div>
                                    <p>Para disponer de versiones ling&#252;isticas diferentes</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="2">
                                    </div>
                                    <p>Para disponer de una vision general de todas <br/> las competencias y sus conductas asociadas</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="3">
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
                            <h3>Quien<span>es es</span>tan <br/> conte<span>mplad</span>os en <br/> est<span>e dicci</span>onario?</h3>
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
                                        <input type="radio" name="respuesta" value="1" checked>
                                    </div>
                                    <p>Todos en Novo Nordisk</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="2">
                                    </div>
                                    <p>Todos en la region</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="3">
                                    </div>
                                    <p>Todos en ventas en la region</p>
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
                            <h3>que com<span>pete</span>ncia <br/> cont<span>empl</span>a l<span>a</span> etica <br/> emp<span>resar</span>ial?</h3>
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
                                        <input type="radio" name="respuesta" value="1" checked>
                                    </div>
                                    <p>Se centra en lo importante</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="2">
                                    </div>
                                    <p>El liderazgo personal</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="3">
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
                            <h3>Cuan<span>tas de</span> las <br/> comp<span>eten</span>cias son <br/> apli<span>cabl</span>es a una per<span>son</span>a</h3>
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
                                        <input type="radio" name="respuesta" value="1" checked>
                                    </div>
                                    <p>Todas las competencias en el diccionario</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="2">
                                    </div>
                                    <p>Las competencias seleccionadas para el puesto</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="3">
                                    </div>
                                    <p>Eso depende de cuantos a&#209;os haya Ud estado <br/> en la Empresa</p>
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
                            <h3>Que es u<span>n d</span>escriptor?</h3>
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
                                        <input type="radio" name="respuesta" value="1" checked>
                                    </div>
                                    <p>La descripcion general de una competencia</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="2">
                                    </div>
                                    <p>Resumen de los elementos claves <br/> de cada competencia</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="3">
                                    </div>
                                    <p>La traduccion de una competencia</p>
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
                            <h3>A que <span>competen</span>cia <br/> corres<span>ponde</span> el <br/> descriptor <br/> "o<span>fece sol</span>uciones <br/> y <span>mensaj</span>es claves <br/> a <span>los clien</span>tes"</h3>
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
                                        <input type="radio" name="respuesta" value="1" checked>
                                    </div>
                                    <p>Ventas</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="2">
                                    </div>
                                    <p>Centrado en el cliente</p>
                                </div>
                                <div class="pregunta">
                                    <div class="radio">
                                        <input type="radio" name="respuesta" value="3">
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
                            Ud. ha completado satisfactoriamente <br/>
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