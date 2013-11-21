<link rel="stylesheet" type="text/css" href="/css/jquery.bxslider.css" />
<link rel="stylesheet" type="text/css" href="/css/responsive.css" />
<link rel="stylesheet" type="text/css" href="/css/jquery-ui-1.css"  media="all">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0">
<script src="/js/jquery-latest.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/js/jquery.bxslider.min.js" type="text/javascript"></script>
<script>
    $( document ).ready( function(){
        var slider = $('.bxslider').bxSlider({
            pager: false,
            moveSlides: 1,
            infiniteLoop: false,
            onSlideAfter: function() {
                var count = slider.getCurrentSlide();
                count++;
                if(count >= 1 && count <= 6) {
                    inicio = 0;
                    division = 7-1;
                    paso = 20 / division;
                    avance = (count-1) * paso;
                    $('#puntero').css('left', '0%');
                    $('#recorrido').css('width', (inicio+avance)+'%');
                } else if(count >= 7 && count <= 10) {
                    inicio = 20;
                    division = 11-7;
                    paso = 20 / division;
                    avance = (count-7) * paso;
                    $('#puntero').css('left', '20%');
                    $('#recorrido').css('width', (inicio+avance)+'%');
                } else if(count >= 11 && count <= 24) {
                    inicio = 40;
                    division = 25-11;
                    paso = 20 / division;
                    avance = (count-11) * paso;
                    $('#puntero').css('left', '40%');
                    $('#recorrido').css('width', (inicio+avance)+'%');
                } else if(count >= 25 && count <= 33) {
                    inicio = 60;
                    division = 34-25;
                    paso = 20 / division;
                    avance = (count-25) * paso;
                    $('#puntero').css('left', '60%');
                    $('#recorrido').css('width', (inicio+avance)+'%');
                } else if(count >= 34 && count <= 67) {
                    inicio = 80;
                    division = 68-34;
                    paso = 20 / division;
                    avance = (count-34) * paso;
                    $('#puntero').css('left', '80%');
                    $('#recorrido').css('width', (inicio+avance)+'%');
                } else {
                    $('#puntero').css('left', '100%');
                    $('#recorrido').css('width', '100%');
                }
            }
        });

        $('#slider_0').click(function(){
            slider.goToSlide(0);
            return false;
        });

        $('#slider_1').click(function(){
            slider.goToSlide(6);
            return false;
        });

        $('#slider_2').click(function(){
            slider.goToSlide(10);
            return false;
        });

        $('#slider_3').click(function(){
            slider.goToSlide(24);
            return false;
        });

        $('#slider_4').click(function(){
            slider.goToSlide(33);
            return false;
        });
    });
</script>
<div class="content content_guia">
    <div class="slider  slider_test">
        <ul class="bxslider">
            <li>
                <div class="box_slider box_test">
                    <div class="video_title_1">
                        <img src="/images/chang7.png" alt="Video"/>
                    </div>
                    <a target="_blank" href="/video/index/1" class="sample_video"><img src="/images/sample_video3.png" alt="guia de planes"></a>
                    <div class="btnv">
                        <a target="_blank" href="<?= $this->Html->url(array('controller' => 'video', 'action' => '/index/1'));?>" class="btn_azul btn_azul_center">VER VIDEO</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/02.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/03.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/04.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/05.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <div class="video_title_1">
                        <img src="/images/chang6.png" alt="Video"/>
                    </div>
                    <a target="_blank" href="/video/index/2" class="sample_video"><img src="/images/sample_video1.png" alt="guia de planes"></a>
                    <div class="btnv">
                        <a target="_blank" href="<?= $this->Html->url(array('controller' => 'video', 'action' => '/index/2'));?>" class="btn_azul btn_azul_center">VER VIDEO</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/07.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/08.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/09.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/10.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/11.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/12.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/13.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/14.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/15.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/16.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/17.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/18.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/19.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/20.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/21.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/22.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/23.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/24.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/25.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/26.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/27.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/28.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/29.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/30.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/31.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/32.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/33.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/34.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/35.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/36.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/37.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/38.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/39.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/40.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/41.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/42a.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/42b.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/43a.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/43b.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/44a.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/44b.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/45a.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/45b.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/46a.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/46b.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/47a.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/47b.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/48a.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/49a.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/49b.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/50a.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/50b.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/51a.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/51b.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/52a.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/52b.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/53a.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/53b.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/54a.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/54b.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/55a.jpg" alt="guia de planes">
                </div>
            </li>
            <li>
                <div class="box_slider box_test">
                    <img src="/resource/guias/55b.jpg" alt="guia de planes">
                </div>
            </li>
        </ul>
        <br/>
        <div id="wrapper">
            <div class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" id="scrollbar">
                <div id="recorrido" style="background-color: #6699cc; height: 0.8em; width: 0%"></div>
                <a id="puntero" style="left: 0%;" class="ui-slider-handle ui-state-default ui-corner-all" href="#"></a>
                <a href="" id="slider_0">
                    <span style="top: 20px; position: absolute; font-size: 13px; left: 0%">Slides ></span>
                </a>
                <a href="" id="slider_1">
                    <span style="top: 20px; position: absolute; font-size: 13px; left: 19%;">1.</span>
                    <span style="top: 20px; position: absolute; font-size: 13px; left: 21%; max-width: 17%">Principios de la guia de planes de carrera</span>
                </a>
                <a href="" id="slider_2">
                    <span style="top: 20px; position: absolute; font-size: 13px; left: 39%;">2.</span>
                    <span style="top: 20px; position: absolute; font-size: 13px; left: 41%; max-width: 17%">Las competencias y la carrera profesional</span>
                </a>
                <a href="" id="slider_3">
                    <span style="top: 20px; position: absolute; font-size: 13px; left: 59%;">3.</span>
                    <span style="top: 20px; position: absolute; font-size: 13px; left: 61%; max-width: 17%">Las competencias en los procesos de gestion anuales</span>
                </a>
                <a href="" id="slider_4">
                    <span style="top: 20px; position: absolute; font-size: 13px; left: 79%;">4.</span>
                    <span style="top: 20px; position: absolute; font-size: 13px; left: 81%; max-width: 17%">El diccionario de competencias</span>
                </a>
            </div>
        </div>
<!--        <div class="pasador">-->
<!--            <img src="images/pasador.png" alt="Slider">-->
<!--        </div>-->

    </div>
</div>
<br/>
<br/>