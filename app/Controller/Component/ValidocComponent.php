<?php
App::uses('Component', 'Controller');
class ValidocComponent extends Component{

    public function getGruposUsuario(){
        $GRUPOS = array();
        $GRUPOS[1] = "Administrador";
        return $GRUPOS;
    }

    public function getTipoParticipante(){
        $GRUPOS = array();
        $GRUPOS[1] = "Participante";
        $GRUPOS[2] = "Veedor";
        return $GRUPOS;
    }

    public function getEstado(){
        $ESTADOS = array();
        $ESTADOS[0] = "Deshabilitado";
        $ESTADOS[1] = "Activo";
        return $ESTADOS;
    }

    public function getTipoDocumento(){
        $TIPO_DOCUMENTO = array();
        $TIPO_DOCUMENTO[1] = "Guia";
        $TIPO_DOCUMENTO[2] = "Test";
        return $TIPO_DOCUMENTO;
    }

    public function sendEmail($template, $from, $to, $subject, $params = null) {
        App::uses('CakeEmail', 'Network/Email');
//        $Email = new CakeEmail('validoc');
        $Email = new CakeEmail();
        $Email->template($template);
        $Email->emailFormat('html');
        $Email->from($from);
        $Email->to($to);
        $Email->subject($subject);
        if($params != null){
            $Email->viewVars($params);
        }
        $Email->send();
    }
}