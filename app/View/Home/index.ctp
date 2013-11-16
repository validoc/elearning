<div class="center_imagen">
    <img src="/images/imagen_head.png" alt="eLearning">
</div>
<div class="content">
    <div class="central_box">
        <div class="boxes">
            <div class="box box1">
                <h3>
                    <img src="images/lguia.png" alt="Guia de planes">
                </h3>
                <p>
                    Bajada sobre lo que se va a ver <br />
                    en estos slides.
                </p>
                <div class="imagen_box">
                    <a href="<?= $this->Html->url(array('controller' => 'guia', 'action' => 'index'));?>"><img src="/images/icono_imagen.png" alt="Guia de planes"></a>
                </div>
                <a href="<?= $this->Html->url(array('controller' => 'guia', 'action' => 'index'));?>" class="btn_azul">VER GUIA</a>
                <a href="<?= $this->Html->url(array('controller' => 'download', 'action' => 'guia'));?>" class="btn_descargar">Descargar guia</a>
            </div>
            <div class="box box2">
                <h3>
                    <img src="images/ltest.png" alt="Test">
                </h3>
                <p>
                    Bajada sobre lo que se va a ver <br />
                    en estos slides.
                </p>
                <div class="imagen_box box_dt">
                    <a href="<?= $this->Html->url(array('controller' => 'tests', 'action' => 'index'));?>"><img src="/images/icono_right.png" alt="Test"></a>
                </div>
                <a href="<?= $this->Html->url(array('controller' => 'tests', 'action' => 'index'));?>" class="btn_azul">TEST ONLINE</a>
                <a href="<?= $this->Html->url(array('controller' => 'download', 'action' => 'test'));?>" class="btn_descargar">Descargar test</a>
            </div>
        </div>
        <div class="box box_videos">
            <h3>Vi<span>de</span>os</h3>
            <div class="video">
                <p>Bajada sobre Video1</p>
                <a href="<?= $this->Html->url(array('controller' => 'video', 'action' => 'index', 1));?>"><img src="/images/icono_video1.png" alt="Video"></a>
            </div>
            <div class="video">
                <p>Bajada sobre Video1</p>
                <a href="<?= $this->Html->url(array('controller' => 'video', 'action' => 'index', 2));?>"><img src="/images/icono_video2.png" alt="Video"></a>
            </div>
        </div>
    </div>
    <div class="sombra sombra_home"></div>
</div>