<?php
/**
 * Created by PhpStorm.
 * User: Luis Miguel Torrico
 * Date: 11-11-13
 * Time: 06:22 PM
 */

class HomeController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
    }

    public function index() {
        $this->layout = 'frontend1';
        $this->set('title_page', 'e-learning');
    }
} 