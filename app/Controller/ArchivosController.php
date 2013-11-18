<?php
/**
 * Created by PhpStorm.
 * User: Luis Miguel Torrico
 * Date: 16-11-13
 * Time: 10:01 AM
 */

class ArchivosController extends AppController {
    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'backend';
    }

    public function admin_index() {
        $this->set('title_page', 'Admin - Listado Archivos');
        $Validoc = $this->Components->load('Validoc');
        $this->set('ESTADOS', $Validoc->getEstado());
        $this->set('TIPO_DOCUMENTO', $Validoc->getTipoDocumento());
        $archivos = $this->Archivo->find('all');
        $this->set('archivos', $archivos);
    }

    public function admin_edit($id = null)
    {
        $this->set('title_page', 'Admin - Editar Archivo');
        $this->Archivo->id = $id;
        if ($this->request->is('get')) {
            $archivo = $this->Archivo->read();
            $this->request->data = $archivo;
            $Validoc = $this->Components->load('Validoc');
            $this->set('ESTADOS', $Validoc->getEstado());
            $TIPO_DOCUMENTOS = $Validoc->getTipoDocumento();
            $this->set('TIPO_DOCUMENTO', $TIPO_DOCUMENTOS[$archivo['Archivo']['tipo_documento']]);
            $this->set('ESTADOS', $Validoc->getEstado());
            if($archivo['Archivo']['tipo_documento'] == 1){
                $this->set('FORMATO_DOCUMENTO', 'Solo formato PDF');
            } else {
                $this->set('FORMATO_DOCUMENTO', 'Solo formato DOC');
            }
        } else {
            $datos = $this->request->data;
            $img_temp = $datos['Archivo']['nombre'];
            if($img_temp['error'] == 0) {
                $prefix =  date('Ymd_His');
                $img_name = $prefix.'_'.$img_temp['name'];
                $datos['Archivo']['nombre'] = $img_name;
            } else {
                unset($datos['Archivo']['nombre']);
            }
            try {
                if($this->Archivo->save($datos)) {
                    if($img_temp['error'] == 0) {
                        $dir_archivos = 'resource/archivos/';
                        if(move_uploaded_file($img_temp['tmp_name'], $dir_archivos.$img_name)){
                            //echo 'Movio imagen';
                        } else{
                            //echo 'Error No Movio imagen';
                        }
                    }
                    $this->Session->setFlash(__('El Archivo fue actualizado.'), 'success_message');
                    $this->redirect(array('action' => 'index'));
                }
            } catch (Exception $e) {
                $this->Session->setFlash($e->getMessage(), 'default', array('class' => 'da-message error'));
            }
        }
    }
}