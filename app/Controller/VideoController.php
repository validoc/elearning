<?php
/**
 * Created by PhpStorm.
 * User: Luis Miguel Torrico
 * Date: 12-11-13
 * Time: 10:13 AM
 */

class VideoController extends AppController {
    public function index() {
        $this->layout = 'frontend2';
        $this->set('title_page', '.:: VIDEO ::.');
        $this->set('title_front', '<span>Video 1</span>');
    }
} 