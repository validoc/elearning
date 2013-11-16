<!-- DataTables Plugin -->
<?= $this->Html->script('../plugins/datatables/jquery.dataTables.min', array('inline' => false)); ?>
<!-- DataTables Plugin Funciones -->
<?= $this->Html->script('reportes/ingresos', array('inline' => false)); ?>

<div class="da-panel-widget">
    <h1>Reporte Finalizados</h1>
    <div id="da-ex-flot-line">
        <div class="da-form-row">
            <div class="clear"></div>
            <form class="da-form" accept-charset="iso-8859-1" method="post" name="formAdd" action="/admin/reportes/finalizados_export">
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
                    Listado de Participantes que finalizaron
                </span>
                </div>
                <div class="da-panel-content">
                    <table id="tabla_ingresos" class="da-table">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Porcentaje de acierto</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($completaron as $participante): ?>
                            <tr>
                                <td>
                                    <?= $participante['nombre'];?>
                                </td>
                                <td>
                                    <?php $porcentaje = 100 * $participante['acierto'] / $participante['total']?>
                                    <?= number_format($porcentaje, 2) .'%'?>
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
            Listado de Participantes que No finalizaron
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
                        <?php foreach ($no_completaron as $participante): ?>
                            <tr>
                                <td>
                                    <?= $participante['nombre'];?>
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