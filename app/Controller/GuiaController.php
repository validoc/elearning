<?php
/**
 * Created by PhpStorm.
 * User: Luis Miguel Torrico
 * Date: 12-11-13
 * Time: 11:21 AM
 */

class GuiaController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
    }

    public function index() {
        $this->layout = 'frontend2';
        $this->set('title_page', '.:: GUIA ::.');
        $this->set('title_front', '<h3><img src="images/chang5.png" alt="Guia"></h3>');
    }
} 