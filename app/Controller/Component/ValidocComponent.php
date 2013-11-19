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

    function mime_content_type($filename)
    {
        $mime_types = array(
            'txt' => 'text/plain',
            'htm' => 'text/html',
            'html' => 'text/html',
            'php' => 'text/html',
            'css' => 'text/css',
            'js' => 'application/javascript',
            'json' => 'application/json',
            'xml' => 'application/xml',
            'swf' => 'application/x-shockwave-flash',
            'flv' => 'video/x-flv',
            // images
            'png' => 'image/png',
            'jpe' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'jpg' => 'image/jpeg',
            'gif' => 'image/gif',
            'bmp' => 'image/bmp',
            'ico' => 'image/vnd.microsoft.icon',
            'tiff' => 'image/tiff',
            'tif' => 'image/tiff',
            'svg' => 'image/svg+xml',
            'svgz' => 'image/svg+xml',
            // archives
            'zip' => 'application/zip',
            'rar' => 'application/x-rar-compressed',
            'exe' => 'application/x-msdownload',
            'msi' => 'application/x-msdownload',
            'cab' => 'application/vnd.ms-cab-compressed',
            // audio/video
            'mp3' => 'audio/mpeg',
            'qt' => 'video/quicktime',
            'mov' => 'video/quicktime',
            // adobe
            'pdf' => 'application/pdf',
            'psd' => 'image/vnd.adobe.photoshop',
            'ai' => 'application/postscript',
            'eps' => 'application/postscript',
            'ps' => 'application/postscript',
            // ms office
            'doc' => 'application/msword',
            'rtf' => 'application/rtf',
            'xls' => 'application/vnd.ms-excel',
            'ppt' => 'application/vnd.ms-powerpoint',
            // open office
            'odt' => 'application/vnd.oasis.opendocument.text',
            'ods' => 'application/vnd.oasis.opendocument.spreadsheet',
        );

        $ext = strtolower(array_pop(explode('.', $filename)));
        if (array_key_exists($ext, $mime_types)) {
            return $mime_types[$ext];
        }
        elseif (function_exists('finfo_open')) {
            $finfo = finfo_open(FILEINFO_MIME);
            $mimetype = finfo_file($finfo, $filename);
            finfo_close($finfo);
            return $mimetype;
        }
        else {
            return 'application/octet-stream';
        }
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