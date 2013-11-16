<?php
/**
 * Created by PhpStorm.
 * User: Luis Miguel Torrico
 * Date: 11-11-13
 * Time: 05:00 PM
 */

class ConsolaController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'backend';
    }

    public function admin_index(){
        $this->set('title_page', 'Unicef Admin - Consola');
    }
} 