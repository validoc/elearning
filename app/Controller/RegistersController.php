<?php
/**
 * Created by PhpStorm.
 * User: Luis Miguel Torrico
 * Date: 11-11-13
 * Time: 05:58 PM
 */

class RegistersController extends AppController {
    public function login() {
        $this->layout = 'frontend1';
        $this->set('title_page', '.:: LOGIN ::.');
    }
} 