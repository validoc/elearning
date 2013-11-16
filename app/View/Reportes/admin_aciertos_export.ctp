<meta CHARSET="UTF-8">
<div>
    <table BORDER="1" BORDERCOLOR="black" CELLSPACING="0">
        <thead>
        <tr>
            <th style="font-size: 14px; background-color: rgb(250,191,143);" colspan="3" rowspan="2"> Las respuestas por intentos y porcentaje total de aciertos/errores por usuario.</th>
        </tr>
        </thead>
    </table>
    <table BORDER="1" BORDERCOLOR="black" CELLSPACING="0">
        <thead>
        <tr>
            <th style="background-color: #2d6324 ;" colspan="3">LISTADO PREGUNTAS</th>
        </tr>
        </thead>
    </table>
    <table BORDER="1" BORDERCOLOR="black" CELLSPACING="0">
        <thead>
        <tr>
            <th style="background-color: rgb(255,192,0) ;" colspan="2">Pregunta</th>
            <th style="background-color: rgb(255,192,0) ;">Porcentaje de acierto en primer intento</th>
        </tr>
        </thead>
        <tbody>
        <?php  if (count($aciertos) > 0) {
            foreach ($aciertos as $pregunta):
                ?>
                <tr>
                    <td colspan="2">
                        <?= $pregunta['pregunta'] ;?>
                    </td>
                    <td>
                        <?php $porcentaje = 100 * $pregunta['acierto'] / $pregunta['total']?>
                        <?= number_format($porcentaje, 2).'%'?>
                    </td>
                </tr>
            <?php endforeach;
        }
        ?>
        </tbody>
    </table>
</div>