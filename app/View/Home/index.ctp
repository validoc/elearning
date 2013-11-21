<div class="center_imagen">
    <img src="/images/imagen_head.png" alt="eLearning">
</div>
<div class="content">
    <div class="central_box">
        <div class="boxes">
            <div class="box box1">
                <h3>
                    <img src="images/chang2.png" alt="Guia de planes">
                </h3>
                <p>
                    <img src="images/chang1.png" alt="Guia de planes">
                </p>
                <div class="imagen_box">
                    <a target="_blank" href="<?= $this->Html->url(array('controller' => 'guia', 'action' => 'index'));?>"><img src="/images/icono_imagen.png" alt="Guia de planes"></a>
                </div>
                <a target="_blank" href="<?= $this->Html->url(array('controller' => 'guia', 'action' => 'index'));?>" class="btn_azul">Click para ver Gu&#237;a</a>
                <a href="<?= $this->Html->url(array('controller' => 'download', 'action' => 'guia'));?>" class="btn_descargar">Descargar Gu&#237;a</a>
            </div>
            <div class="box box2">
                <h3>
                    <img src="images/chang3.png" alt="Cuestionario">
                </h3>
                <p>
                    <img src="images/chang10.png" alt="Cuestionario"/>
                </p>
                <div class="imagen_box box_dt">
                    <a target="_blank" href="<?= $this->Html->url(array('controller' => 'tests', 'action' => 'index'));?>"><img src="/images/icono_right.png" alt="Test"></a>
                </div>
                <a target="_blank" href="<?= $this->Html->url(array('controller' => 'tests', 'action' => 'index'));?>" class="btn_azul btn_azul_m">Click para ver <br/>Cuestionario On Line</a>
                <a href="<?= $this->Html->url(array('controller' => 'download', 'action' => 'test'));?>" class="btn_descargar btn_descargar_m">Descargar Cuestionario</a>
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