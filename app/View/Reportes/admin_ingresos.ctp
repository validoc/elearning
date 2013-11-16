<!-- DataTables Plugin -->
<?= $this->Html->script('../plugins/datatables/jquery.dataTables.min', array('inline' => false)); ?>
<!-- DataTables Plugin Funciones -->
<?= $this->Html->script('reportes/ingresos', array('inline' => false)); ?>

<div class="da-panel-widget">
    <h1>Reporte Ingresos / No Ingresos</h1>
    <div id="da-ex-flot-line">
        <div class="da-form-row">
            <div class="clear"></div>
            <form class="da-form" accept-charset="iso-8859-1" method="post" name="formAdd" action="/admin/reportes/ingresos_export">
                <div class="da-form-col-2-8">
                    <input type="submit" name="boton" value="Exportar Excel" class="da-button blue large"/>
                </div>
            </form>
        </div>
        <div class="da-form-row">
            <div class="clear"></div>
            <br/>
            <div class="da-panel collapsible">
                <div class="da-panel-header">
                <span class="da-panel-title">
                    <img src="/images/icons/black/16/list.png" alt="" />
                    Listado de Participantes que ingresaron
                </span>
                </div>
                <div class="da-panel-content">
                    <table id="tabla_ingresos" class="da-table">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Fecha de ingreso</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($ingresaron as $participante): ?>
                            <tr>
                                <td>
                                    <?= $participante['Participante']['nombre'];?>
                                </td>
                                <td>
                                    <?php $v = strtotime($participante['Respuesta']['created']);?>
                                    <?= date('d/m/Y H:i:s', $v); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="da-form-row">
            <div class="clear"></div>
            <div class="da-panel collapsible">
                <div class="da-panel-header">
        <span class="da-panel-title">
            <img src="/images/icons/black/16/list.png" alt="" />
            Listado de Participantes que No ingresaron
        </span>
                </div>
                <div class="da-panel-content">
                    <table id="tabla_ingresos" class="da-table">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($no_ingresaron as $participante): ?>
                            <tr>
                                <td>
                                    <?= $participante['Participante']['nombre'];?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?//= $this->element('sql_dump'); ?>