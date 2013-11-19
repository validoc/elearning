<?php
/**
 * Created by PhpStorm.
 * User: Luis Miguel Torrico
 * Date: 12-11-13
 * Time: 10:13 AM
 */

class VideoController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
    }

    public function index($valor = null) {
        $this->layout = 'frontend2';
        $this->set('title_page', '.:: VIDEO ::.');
        $this->set('title_front', '<span>Video 1</span>');
        $this->set('ERROR', '');
        if($valor != null) {
            if($valor >= 1 && $valor <= 2) {
                if($valor == 1) {
                    $nombre = 'video1.mp4';
                    $imagen = 'sample_video.png';
                } else {
                    $nombre = 'video2.mp4';
                    $imagen = 'sample_video2.png';
                }
                $this->set('nombre', $nombre);
                $this->set('imagen', $imagen);
            } else {
                $this->set('ERROR', 'VIDEO INVALIDO!!!');
            }
        } else {
            $this->set('ERROR', 'VIDEO INVALIDO!!!');
        }
    }
} 