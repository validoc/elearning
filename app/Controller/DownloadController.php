<?php
/**
 * Created by PhpStorm.
 * User: Luis Miguel Torrico
 * Date: 14-11-13
 * Time: 06:53 PM
 */

class DownloadController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
    }

    public function guia()
    {
        $TIPO_DOC = 1;
        $this->loadModel('Archivo');
        $archivo = $this->Archivo->find('first', array('conditions' => array('tipo_documento' => $TIPO_DOC)));
        if($archivo['Archivo']['estado'] == 1) {
            $file = Router::url('/', true) . 'resource/archivos/'. $archivo['Archivo']['nombre'];
            //Forzar la descarga
            header('Content-type: application/pdf');
            header('Content-Disposition: attachment; filename="Guia.pdf"');
            readfile($file);
            exit;
        } else {
            $this->redirect(array('controller' => 'home', 'action' => 'index'));
        }
    }

    public function test()
    {
        $TIPO_DOC = 2;
        $this->loadModel('Archivo');
        $archivo = $this->Archivo->find('first', array('conditions' => array('tipo_documento' => $TIPO_DOC)));
        if($archivo['Archivo']['estado'] == 1) {
            $file = Router::url('/', true) . 'resource/archivos/'. $archivo['Archivo']['nombre'];
            //Forzar la descarga
            header("Content-type: application/msword");
            header('Content-Disposition: attachment; filename="Test.doc"');
            readfile($file);
            exit;
        } else {
            $this->redirect(array('controller' => 'home', 'action' => 'index'));
        }
    }
} 