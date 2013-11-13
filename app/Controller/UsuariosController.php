<?php
/**
 * Created by PhpStorm.
 * User: Luis Miguel Torrico
 * Date: 13-11-13
 * Time: 11:58 AM
 */

class UsuariosController extends AppController {

    public function beforeFilter() {
        $this->layout = 'backend';
    }

    public function admin_index() {
        $this->set('title_page', 'Admin - Listado usuarios');
        $usuarios = $this->Usuario->find('all', array('all', array('order' => array('Usuario.id' => 'desc'))));
        $this->set('usuarios', $usuarios);
    }

    public function admin_add() {
        $this->set('title_page', 'Admin - Agregar usuario');
        $Validoc = $this->Components->load('Validoc');
        $this->set('GRUPOS', $Validoc->getGruposUsuario());
        if ($this->request->is('post')) {
            $datos = $this->request->data;
            if ($this->Usuario->save($datos)) {
                $this->Session->setFlash(__('El usuario fue creado.'), 'success_message');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function admin_edit($id = null)
    {
        $this->set('title_page', 'Admin - Editar usuario');
        $this->Usuario->id = $id;
        if ($this->request->is('get')) {
            $add = $this->Usuario->read();
            $this->request->data = $add;
            $Validoc = $this->Components->load('Validoc');
            $this->set('GRUPOS', $Validoc->getGruposUsuario());
            $this->render('admin_add');
        } else {
            $datos = $this->request->data;
            if ($this->Usuario->save($datos)) {
                $this->Session->setFlash(__('El usuario fue actualizado.'), 'success_message');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function admin_delete($id = null)
    {
        try {
            if ($this->Usuario->delete($id)) {
                $this->Session->setFlash(__('El usuario con id: %s fue eliminado.', h($id)), 'success_message');
            }
        } catch (Exception $e) {
            $this->Session->setFlash(__('El usuario con id: %s No fue eliminado.', h($id)), 'error_message');
        }
        $this->redirect(array('action' => 'index'));
    }
} 