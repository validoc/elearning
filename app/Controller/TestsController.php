<?php
/**
 * Created by PhpStorm.
 * User: Luis Miguel Torrico
 * Date: 12-11-13
 * Time: 11:42 AM
 */

class TestsController extends AppController {
    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'frontend2';
    }

    public function index() {
        $this->set('title_page', '.:: TEST ::.');
        $this->set('title_front', '<h3><img src="images/ltest1.png" alt="Test"></h3>');
        $this->loadModel('Respuesta');
        $this->loadModel('Pregunta');
        $participante = $this->Session->read('participante');
        if($this->request->is('get')) {
            if ($participante['Participante']['tipo_participante'] == 1) {
                $respuesta = $this->Respuesta->find('first', array('conditions' => array('calificacion' => 1, 'participante_id' => $participante['Participante']['id']), 'order' => array('pregunta_id' => 'desc')));
                if ($respuesta == null) {
                    $pregunta = 1;
                } elseif ($respuesta['Respuesta']['pregunta_id'] == 13) {
                    $pregunta = 100;
                } else {
                    $pregunta = $respuesta['Respuesta']['pregunta_id'];
                    $pregunta++;
                }
            } else {
                $pregunta = $this->Session->read('pregunta');
                if($pregunta == null) {
                    $pregunta = 1;
                } elseif($pregunta == 100) {
                    $this->Session->delete('pregunta');
                }
            }
        } else {
            $datos = $this->request->data;
            $pregunta_correcta = $this->Pregunta->find('first', array('conditions' => array('id' => $datos['pregunta'])));
            $respuesta_elegida['Respuesta']['pregunta_id'] = $datos['pregunta'];
            $respuesta_elegida['Respuesta']['participante_id'] = $participante['Participante']['id'];
            $respuesta_elegida['Respuesta']['opcion_participante'] = $datos['respuesta'];
            if($datos['respuesta'] == $pregunta_correcta['Pregunta']['opcion_correcta']) {
                $respuesta_elegida['Respuesta']['calificacion'] = 1;
                $pregunta = 50;
            } else {
                $respuesta_elegida['Respuesta']['calificacion'] = 0;
                $pregunta = 60;
            }
            if($participante['Participante']['tipo_participante'] == 1)
                $this->Respuesta->save($respuesta_elegida);
            else{
                if($respuesta_elegida['Respuesta']['calificacion'] == 1) {
                    if($datos['pregunta'] == 13)
                        $this->Session->write('pregunta', 100);
                    else
                        $this->Session->write('pregunta', $datos['pregunta']+1);
                } else {
                    $this->Session->write('pregunta', $datos['pregunta']);
                }
            }
        }
        $this->set('pregunta', $pregunta);
    }
} 