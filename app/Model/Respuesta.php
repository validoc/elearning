<?php
/**
 * Created by PhpStorm.
 * User: Luis Miguel Torrico
 * Date: 14-11-13
 * Time: 10:29 AM
 */

class Respuesta extends AppModel {
    //----- relacion n - 1
    public $belongsTo = array(
        'Participante' => array(
            'className' => 'Participante',
            'foreignKey' => 'participante_id'
        )
    );
} 