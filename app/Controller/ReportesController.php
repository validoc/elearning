<?php
/**
 * Created by PhpStorm.
 * User: Luis Miguel Torrico
 * Date: 14-11-13
 * Time: 03:13 PM
 */

class ReportesController extends AppController {
    public function beforeFilter() {
        $this->layout = 'backend';
    }

    public function admin_ingresos() {
        $this->set('title_page', 'Admin - Reporte Ingresos');
        $this->loadModel('Respuesta');
        $this->loadModel('Participante');
        //Participantes que ingresaron
        $ingresaron = $this->Respuesta->find('all', array('conditions' => array('pregunta_id' => 1), 'group' => array('Participante.id')));
        $this->set('ingresaron', $ingresaron);
        //Participantes que NO ingresaron
        $no_ingresaron = $this->Participante->query('SELECT Participante.* FROM participantes AS Participante
                                                    LEFT JOIN respuestas AS Respuesta ON (Respuesta.participante_id = Participante.id)
                                                    WHERE Respuesta.id is null');
        $this->set('no_ingresaron', $no_ingresaron);
    }

    public function admin_ingresos_export() {
        $this->layout = false;
        try{
            $this->loadModel('Respuesta');
            $this->loadModel('Participante');
            //Participantes que ingresaron
            $ingresaron = $this->Respuesta->find('all', array('conditions' => array('pregunta_id' => 1), 'group' => array('Participante.id')));
            $this->set('ingresaron', $ingresaron);
            //Participantes que NO ingresaron
            $no_ingresaron = $this->Participante->query('SELECT Participante.* FROM participantes AS Participante
                                                    LEFT JOIN respuestas AS Respuesta ON (Respuesta.participante_id = Participante.id)
                                                    WHERE Respuesta.id is null');
            $this->set('no_ingresaron', $no_ingresaron);
            //Header
            header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
            header("Content-Disposition: attachment;filename=Reporte_ingresos_".date('Y-m-d').".xls");
            header("Cache-Control: max-age=0");
            header("Expires: 0");
        }catch (Exception $e){
        }
    }

    public function admin_aciertos() {
        $this->set('title_page', 'Admin - Reporte Aciertos');
        $this->loadModel('Preguntas');
        $aciertos = $this->Preguntas->query('SELECT * FROM preguntas as Pregunta
                                                    LEFT JOIN respuestas as Respuesta on (Pregunta.id = Respuesta.pregunta_id)
                                                    WHERE not Respuesta.id is null
                                                    GROUP BY Respuesta.participante_id, Respuesta.pregunta_id
                                                    ORDER BY Respuesta.pregunta_id asc');
        $resul = array();
        foreach($aciertos as $pregunta) {
            if( isset($resul[$pregunta['Pregunta']['id']])) {
                if($pregunta['Respuesta']['calificacion'] == 0) {
                    $cont = $resul[$pregunta['Pregunta']['id']]['desacierto'];
                    $cont++;
                    $resul[$pregunta['Pregunta']['id']]['desacierto'] = $cont;
                } else {
                    $cont = $resul[$pregunta['Pregunta']['id']]['acierto'];
                    $cont++;
                    $resul[$pregunta['Pregunta']['id']]['acierto'] = $cont;
                }
                $total = $resul[$pregunta['Pregunta']['id']]['total'];
                $total++;
                $resul[$pregunta['Pregunta']['id']]['total'] = $total;
            } else {
                if($pregunta['Respuesta']['calificacion'] == 0) {
                    $resul[$pregunta['Pregunta']['id']] = array('acierto' => 0, 'desacierto' => 1, 'total' => 1, 'pregunta' => $pregunta['Pregunta']['texto']);
                } else {
                    $resul[$pregunta['Pregunta']['id']] = array('acierto' => 1, 'desacierto' => 0, 'total' => 1, 'pregunta' => $pregunta['Pregunta']['texto']);
                }
            }
        }
        $this->set('aciertos', $resul);
    }

    public function admin_aciertos_export() {
        $this->layout = false;
        $this->loadModel('Preguntas');
        $aciertos = $this->Preguntas->query('SELECT * FROM preguntas as Pregunta
                                                    LEFT JOIN respuestas as Respuesta on (Pregunta.id = Respuesta.pregunta_id)
                                                    WHERE not Respuesta.id is null
                                                    GROUP BY Respuesta.participante_id, Respuesta.pregunta_id
                                                    ORDER BY Respuesta.pregunta_id asc');
        $resul = array();
        foreach($aciertos as $pregunta) {
            if( isset($resul[$pregunta['Pregunta']['id']])) {
                if($pregunta['Respuesta']['calificacion'] == 0) {
                    $cont = $resul[$pregunta['Pregunta']['id']]['desacierto'];
                    $cont++;
                    $resul[$pregunta['Pregunta']['id']]['desacierto'] = $cont;
                } else {
                    $cont = $resul[$pregunta['Pregunta']['id']]['acierto'];
                    $cont++;
                    $resul[$pregunta['Pregunta']['id']]['acierto'] = $cont;
                }
                $total = $resul[$pregunta['Pregunta']['id']]['total'];
                $total++;
                $resul[$pregunta['Pregunta']['id']]['total'] = $total;
            } else {
                if($pregunta['Respuesta']['calificacion'] == 0) {
                    $resul[$pregunta['Pregunta']['id']] = array('acierto' => 0, 'desacierto' => 1, 'total' => 1, 'pregunta' => $pregunta['Pregunta']['texto']);
                } else {
                    $resul[$pregunta['Pregunta']['id']] = array('acierto' => 1, 'desacierto' => 0, 'total' => 1, 'pregunta' => $pregunta['Pregunta']['texto']);
                }
            }
        }
        $this->set('aciertos', $resul);
        //Header
        header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header("Content-Disposition: attachment;filename=Reporte_aciertos_".date('Y-m-d').".xls");
        header("Cache-Control: max-age=0");
        header("Expires: 0");
    }

    public function admin_finalizados() {
        $this->set('title_page', 'Admin - Reporte Finalizados');
        $this->loadModel('Participante');
        $this->loadModel('Respuesta');
        $participantes = $this->Participante->find('all', array('order' => array('Participante.id')));
        $completaron = array();
        $no_completaron = array();
        foreach($participantes as $participante) {
            $aux = $this->Respuesta->find('all', array('conditions' => array('Respuesta.participante_id' => $participante['Participante']['id']), 'group' => array('Respuesta.pregunta_id')));
            if(count($aux) == 13) {
                foreach($aux as $respuesta) {
                    if(isset($completaron[$respuesta['Participante']['id']])) {
                        if($respuesta['Respuesta']['calificacion'] == 0) {
                            $cont = $completaron[$respuesta['Participante']['id']]['desacierto'];
                            $cont++;
                            $completaron[$respuesta['Participante']['id']]['desacierto'] = $cont;
                        } else {
                            $cont = $completaron[$respuesta['Participante']['id']]['acierto'];
                            $cont++;
                            $completaron[$respuesta['Participante']['id']]['acierto'] = $cont;
                        }
                        $total = $completaron[$respuesta['Participante']['id']]['total'];
                        $total++;
                        $completaron[$respuesta['Participante']['id']]['total'] = $total;
                    } else {
                        if($respuesta['Respuesta']['calificacion'] == 0) {
                            $completaron[$respuesta['Participante']['id']] = array('nombre' => $respuesta['Participante']['nombre'], 'acierto' => 0, 'desacierto' => 1, 'total' => 1);
                        } else {
                            $completaron[$respuesta['Participante']['id']] = array('nombre' => $respuesta['Participante']['nombre'], 'acierto' => 1, 'desacierto' => 0, 'total' => 1);
                        }
                    }
                }
            } else {
                $no_completaron[$participante['Participante']['id']] = array('nombre' => $participante['Participante']['nombre']);
            }
        }
        $this->set('completaron', $completaron);
        $this->set('no_completaron', $no_completaron);
    }

    public function admin_finalizados_export() {
        $this->layout = false;
        $this->loadModel('Participante');
        $this->loadModel('Respuesta');
        $participantes = $this->Participante->find('all', array('order' => array('Participante.id')));
        $completaron = array();
        $no_completaron = array();
        foreach($participantes as $participante) {
            $aux = $this->Respuesta->find('all', array('conditions' => array('Respuesta.participante_id' => $participante['Participante']['id']), 'group' => array('Respuesta.pregunta_id')));
            if(count($aux) == 13) {
                foreach($aux as $respuesta) {
                    if(isset($completaron[$respuesta['Participante']['id']])) {
                        if($respuesta['Respuesta']['calificacion'] == 0) {
                            $cont = $completaron[$respuesta['Participante']['id']]['desacierto'];
                            $cont++;
                            $completaron[$respuesta['Participante']['id']]['desacierto'] = $cont;
                        } else {
                            $cont = $completaron[$respuesta['Participante']['id']]['acierto'];
                            $cont++;
                            $completaron[$respuesta['Participante']['id']]['acierto'] = $cont;
                        }
                        $total = $completaron[$respuesta['Participante']['id']]['total'];
                        $total++;
                        $completaron[$respuesta['Participante']['id']]['total'] = $total;
                    } else {
                        if($respuesta['Respuesta']['calificacion'] == 0) {
                            $completaron[$respuesta['Participante']['id']] = array('nombre' => $respuesta['Participante']['nombre'], 'acierto' => 0, 'desacierto' => 1, 'total' => 1);
                        } else {
                            $completaron[$respuesta['Participante']['id']] = array('nombre' => $respuesta['Participante']['nombre'], 'acierto' => 1, 'desacierto' => 0, 'total' => 1);
                        }
                    }
                }
            } else {
                $no_completaron[$participante['Participante']['id']] = array('nombre' => $participante['Participante']['nombre']);
            }
        }
        $this->set('completaron', $completaron);
        $this->set('no_completaron', $no_completaron);
        //Header
        header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header("Content-Disposition: attachment;filename=Reporte_finalizados_".date('Y-m-d').".xls");
        header("Cache-Control: max-age=0");
        header("Expires: 0");
    }

    public function admin_intentos() {
        $this->set('title_page', 'Admin - Intentos x Pregunta');
        $this->loadModel('Participante');
        $this->loadModel('Respuesta');
        $this->loadModel('Pregunta');
        $participantes = $this->Participante->find('list');
        $this->set('participantes', $participantes);
        $preguntas = array();
        if($this->request->is('get')) {
            $habilitado = false;
        } else {
            $habilitado = true;
            $datos = $this->request->data;
            $participante_id = $datos['participante_select'];
            $preguntas = $this->Pregunta->find('all');
            $intentos = $this->Respuesta->find('all', array('fields' => array('Respuesta.participante_id', 'Respuesta.pregunta_id', 'count(Respuesta.pregunta_id) as cantidad'),
                                                            'conditions' => array('participante_id' => $participante_id),
                                                            'group' => array('pregunta_id')));
            $this->set('intentos', $intentos);
        }
        $this->set('habilitado', $habilitado);
        $this->set('preguntas', $preguntas);
    }

    public function admin_intentos_export() {
        $this->layout = false;
        $datos = $this->request->data;
        $this->loadModel('Participante');
        $this->loadModel('Respuesta');
        $this->loadModel('Pregunta');
        $participante_id = $datos['participante_select'];
        $this->Participante->id = $participante_id;
        $participante = $this->Participante->read();
        $this->set('participante', $participante);
        $preguntas = $this->Pregunta->find('all');
        $intentos = $this->Respuesta->find('all', array('fields' => array('Respuesta.participante_id', 'Respuesta.pregunta_id', 'count(Respuesta.pregunta_id) as cantidad'),
                                                        'conditions' => array('participante_id' => $participante_id),
                                                        'group' => array('pregunta_id')));
        $this->set('intentos', $intentos);
        $this->set('preguntas', $preguntas);
        //Header
        header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header("Content-Disposition: attachment;filename=Reporte_intentos_".date('Y-m-d').".xls");
        header("Cache-Control: max-age=0");
        header("Expires: 0");
    }
} 