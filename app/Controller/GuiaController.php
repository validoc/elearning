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
        $this->set('title_front', '<h3><img src="images/lguiap.png" alt="Guia"></h3>');
    }
} 