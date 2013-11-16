<meta CHARSET="UTF-8">
<div>
    <table BORDER="1" BORDERCOLOR="black" CELLSPACING="0">
        <thead>
        <tr>
            <th style="font-size: 14px; background-color: rgb(250,191,143);" colspan="3" rowspan="2">LISTADO DE USUARIOS QUE COMPLETARON EL TEST</th>
        </tr>
        </thead>
    </table>
    <table BORDER="1" BORDERCOLOR="black" CELLSPACING="0">
        <thead>
        <tr>
            <th style="background-color: #2d6324 ;" colspan="3">COMPLETARON EL TEST</th>
        </tr>
        </thead>
    </table>
    <table BORDER="1" BORDERCOLOR="black" CELLSPACING="0">
        <thead>
        <tr>
            <th style="background-color: rgb(255,192,0) ;" colspan="2">Nombre</th>
            <th style="background-color: rgb(255,192,0) ;">Porcentaje de acierto</th>
        </tr>
        </thead>
        <tbody>
        <?php  if (count($completaron) > 0) {
            foreach ($completaron as $participante):
                ?>
                <tr>
                    <td colspan="2">
                        <?= $participante['nombre']; ?>
                    </td>
                    <td>
                        <?php $porcentaje = 100 * $participante['acierto'] / $participante['total']?>
                        <?= number_format($porcentaje, 2) .'%'?>
                    </td>
                </tr>
            <?php endforeach;
        }
        ?>
        </tbody>
    </table>
    <br/>
    <table BORDER="1" BORDERCOLOR="black" CELLSPACING="0">
        <thead>
        <tr>
            <th style="background-color: #ff0000;" colspan="3">NO COMPLETARON EL TEST</th>
        </tr>
        </thead>
    </table>
    <table BORDER="1" BORDERCOLOR="black" CELLSPACING="0">
        <thead>
        <tr>
            <th style="background-color: rgb(255,192,0);" colspan="3">Nombre</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($no_completaron as $participante): ?>
            <tr>
                <td colspan="3">
                    <?= $participante['nombre']; ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>