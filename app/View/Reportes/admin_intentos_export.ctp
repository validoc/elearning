<meta CHARSET="UTF-8">
<div>
    <table BORDER="1" BORDERCOLOR="black" CELLSPACING="0">
        <thead>
        <tr>
            <th style="font-size: 14px; background-color: rgb(250,191,143);" colspan="3" rowspan="2"> RATIO DE PERFORMANCE DE RESPUESTA INDIVIDUAL.</th>
        </tr>
        </thead>
    </table>
    <table BORDER="1" BORDERCOLOR="black" CELLSPACING="0">
        <thead>
        <tr>
            <th style="background-color: #2d6324; color: #ffffff;" colspan="3"><?= $participante['Participante']['nombre']?></th>
        </tr>
        </thead>
    </table>
    <table BORDER="1" BORDERCOLOR="black" CELLSPACING="0">
        <thead>
        <tr>
            <th style="background-color: rgb(255,192,0) ;">Id</th>
            <th style="background-color: rgb(255,192,0) ;">Pregunta</th>
            <th style="background-color: rgb(255,192,0) ;">Cantidad intentos</th>
        </tr>
        </thead>
        <tbody>
        <?php
            foreach ($preguntas as $pregunta):
                ?>
                <tr>
                    <td>
                        <?= $pregunta['Pregunta']['id'];?>
                    </td>
                    <td>
                        <?= $pregunta['Pregunta']['texto']   ;?>
                    </td>
                    <td>
                        <?php
                        if(isset($intentos[$pregunta['Pregunta']['id']-1])) {
                            $cantidad = $intentos[$pregunta['Pregunta']['id']-1][0]['cantidad'];
                        } else {
                            $cantidad = 0;
                        }
                        ?>
                        <?= $cantidad?>
                    </td>
                </tr>
            <?php endforeach;
        ?>
        </tbody>
    </table>
</div>