<?php
/**
 * Created by PhpStorm.
 * User: Luis Miguel Torrico
 * Date: 14-11-13
 * Time: 06:53 PM
 */

class DownloadController extends AppController {
    public function guia()
    {
        $file = Router::url('/', true) . 'resource/archivos/GUIA_Planes_de_Carrera.pdf';
        //Forzar la descarga
        $nombre = 'GUIA_Planes_de_Carrera.pdf';
        header('Content-type: application/pdf');
        header('Content-Disposition: attachment; filename="' . $nombre . '"');
        readfile($file);
        exit;
    }

    public function test()
    {
        $file = Router::url('/', true) . 'resource/archivos/TEST.rtf';
        //Forzar la descarga
        $nombre = 'TEST.rtf';
        header("Content-type: application/msword");
        header('Content-Disposition: attachment; filename="' . $nombre . '"');
        readfile($file);
        exit;
    }
} 