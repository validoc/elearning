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
        $this->set('ERROR', '');
        if($valor != null) {
            if($valor >= 1 && $valor <= 2) {
                if($valor == 1) {
                    $this->set('title_front', '<span><img src="/images/chang8.png" alt="Video Federico Grayeb"/></span>');
                    $nombre = 'video1.mp4';
                    $imagen = 'sample_video3.png';
                } else {
                    $this->set('title_front', '<span><img src="/images/chang9.png" alt="Video Modelo de Competencias"/></span>');
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