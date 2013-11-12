<?php
/**
 * Created by PhpStorm.
 * User: Luis Miguel Torrico
 * Date: 12-11-13
 * Time: 11:21 AM
 */

class GuiaController extends AppController {
    public function index() {
        $this->layout = 'frontend2';
        $this->set('title_page', '.:: GUIA ::.');
        $this->set('title_front', '<h3>Guia <span>de </span>planes</h3>');
    }
} 