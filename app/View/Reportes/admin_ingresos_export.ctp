<meta CHARSET="UTF-8">
<div>
    <table BORDER="1" BORDERCOLOR="black" CELLSPACING="0">
        <thead>
        <tr>
            <th style="font-size: 14px; background-color: rgb(250,191,143);" colspan="3" rowspan="2">LISTADO DE USUARIOS QUE INGRESARON Y NO INGRESARON AL SISTEMA</th>
        </tr>
        </thead>
    </table>
    <table BORDER="1" BORDERCOLOR="black" CELLSPACING="0">
        <thead>
        <tr>
            <th style="background-color: #2d6324 ;" colspan="3">INGRESARON</th>
        </tr>
        </thead>
    </table>
    <table BORDER="1" BORDERCOLOR="black" CELLSPACING="0">
        <thead>
        <tr>
            <th style="background-color: rgb(255,192,0) ;" colspan="2">Nombre</th>
            <th style="background-color: rgb(255,192,0) ;">Fecha</th>
        </tr>
        </thead>
        <tbody>
        <?php  if (count($ingresaron) > 0) {
            foreach ($ingresaron as $participante):
                ?>
                <tr>
                    <td colspan="2">
                        <?= $participante['Participante']['nombre']; ?>
                    </td>
                    <td>
                        <?php $v = strtotime($participante['Respuesta']['created']); ?>
                        <?= date('d/m/Y H:i:s', $v); ?>
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
            <th style="background-color: #ff0000;" colspan="3">NO INGRESARON</th>
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
        <?php foreach ($no_ingresaron as $participante): ?>
            <tr>
                <td colspan="3">
                    <?= $participante['Participante']['nombre']; ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>