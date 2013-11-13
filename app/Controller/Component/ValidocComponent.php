<?php
App::uses('Component', 'Controller');
class ValidocComponent extends Component{

    public function getGruposUsuario(){
        $GRUPOS = array();
        $GRUPOS[1] = "Administrador";
        return $GRUPOS;
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