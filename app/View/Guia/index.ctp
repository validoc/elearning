<link rel="stylesheet" type="text/css" href="/css/jquery.bxslider.css" />
<link rel="stylesheet" type="text/css" href="/css/jquery-ui-1.css"  media="all">

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
                if(count >= 1 && count <= 4){
                    $('#puntero').css('left', '0%');
                    $('#recorrido').css('width', '0%');
                } else if(count >= 5 && count <= 8) {
                    $('#puntero').css('left', '20%');
                    $('#recorrido').css('width', '20%');
                } else if(count >= 9 && count <= 22) {
                    $('#puntero').css('left', '40%');
                    $('#recorrido').css('width', '40%');
                } else if(count >= 23 && count <= 31) {
                    $('#puntero').css('left', '60%');
                    $('#recorrido').css('width', '60%');
                } else if(count >= 32 && count <= 65) {
                    $('#puntero').css('left', '80%');
                    $('#recorrido').css('width', '80%');
                } else {
                    $('#puntero').css('left', '100%');
                    $('#recorrido').css('width', '100%');
                }
            }
        });
    });
</script>
<div class="content content_guia">
    <div class="slider  slider_test">
        <ul class="bxslider">
<!--            <li>-->
<!--                <div class="box_slider box_test">-->
<!--                    <img src="/resource/guias/01.jpg" alt="guia de planes">-->
<!--                </div>-->
<!--            </li>-->
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
<!--            <li>-->
<!--                <div class="box_slider box_test">-->
<!--                    <img src="/resource/guias/06.jpg" alt="guia de planes">-->
<!--                </div>-->
<!--            </li>-->
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
                <span style="top: 20px; position: absolute; font-size: 13px; left: 0%">Slides ></span>
                <span style="top: 20px; position: absolute; font-size: 13px; left: 19%;">1.</span>
                <span style="top: 20px; position: absolute; font-size: 13px; left: 21%; max-width: 17%">Principios de la guia de planes de carrera</span>
                <span style="top: 20px; position: absolute; font-size: 13px; left: 39%;">2.</span>
                <span style="top: 20px; position: absolute; font-size: 13px; left: 41%; max-width: 17%">Las competencias y la carrera profesional</span>
                <span style="top: 20px; position: absolute; font-size: 13px; left: 59%;">3.</span>
                <span style="top: 20px; position: absolute; font-size: 13px; left: 61%; max-width: 17%">Las competencias en los procesos de gestion anuales</span>
                <span style="top: 20px; position: absolute; font-size: 13px; left: 79%;">4.</span>
                <span style="top: 20px; position: absolute; font-size: 13px; left: 81%; max-width: 17%">El diccionario de competencias</span>
            </div>
        </div>
<!--        <div class="pasador">-->
<!--            <img src="images/pasador.png" alt="Slider">-->
<!--        </div>-->

    </div>
</div>
<br/>