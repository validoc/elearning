<?php
/**
 * Created by PhpStorm.
 * User: Luis Miguel Torrico
 * Date: 13-11-13
 * Time: 03:37 PM
 */

class ParticipantesController extends AppController {
    public function beforeFilter() {
        if($this->request->params['action'] != 'login') {
            parent::beforeFilter();
        }
        $this->layout = 'backend';
    }

    public function admin_index() {
        $this->set('title_page', 'Admin - Listado participantes');
        $participantes = $this->Participante->find('all', array('all', array('order' => array('Participante.id' => 'desc'))));
        $this->set('participantes', $participantes);
    }

    public function admin_add() {
        $this->set('title_page', 'Admin - Agregar participante');
        $Validoc = $this->Components->load('Validoc');
        $this->set('GRUPOS', $Validoc->getTipoParticipante());
        if ($this->request->is('post')) {
            $datos = $this->request->data;
            if ($this->Participante->save($datos)) {
                $this->Session->setFlash(__('El participante fue creado.'), 'success_message');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function admin_edit($id = null)
    {
        $this->set('title_page', 'Admin - Editar participante');
        $this->Participante->id = $id;
        if ($this->request->is('get')) {
            $add = $this->Participante->read();
            $this->request->data = $add;
            $Validoc = $this->Components->load('Validoc');
            $this->set('GRUPOS', $Validoc->getTipoParticipante());
            $this->render('admin_add');
        } else {
            $datos = $this->request->data;
            if ($this->Participante->save($datos)) {
                $this->Session->setFlash(__('El participante fue actualizado.'), 'success_message');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function admin_delete($id = null)
    {
        try {
            if ($this->Participante->delete($id)) {
                $this->Session->setFlash(__('El participante con id: %s fue eliminado.', h($id)), 'success_message');
            }
        } catch (Exception $e) {
            $this->Session->setFlash(__('El participante con id: %s No fue eliminado.', h($id)), 'error_message');
        }
        $this->redirect(array('action' => 'index'));
    }

    public function login() {
        $this->layout = 'frontend1';
        $this->set('title_page', '.:: LOGIN ::.');
        if(!$this->request->is('get')) {
            $datos = $this->request->data;
            $participante = $this->Participante->find('first', array('conditions' => array('Participante.iniciales' => $datos['Participante']['nombre'], 'iniciales' => $datos['Participante']['iniciales'])));
            if(count($participante) > 0) {
                $this->Session->write('participante', $participante);
                $this->redirect(array('controller' => 'home', 'action' => 'index'));
            } else {
                $this->set('mensaje', 'Error de autenticacion');
            }
        }
    }
} 