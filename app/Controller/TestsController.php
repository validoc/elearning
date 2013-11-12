<?php
/**
 * Created by PhpStorm.
 * User: Luis Miguel Torrico
 * Date: 12-11-13
 * Time: 11:42 AM
 */

class TestsController extends AppController {
    public function index() {
        $this->layout = 'frontend2';
        $this->set('title_page', '.:: TEST ::.');
        $this->set('title_front', '<h3>T<span>e</span>st</h3>');
    }
} 