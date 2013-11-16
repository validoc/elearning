<!-- DataTables Plugin -->
<?= $this->Html->script('../plugins/datatables/jquery.dataTables.min', array('inline' => false)); ?>
<!-- DataTables Plugin Funciones -->
<?= $this->Html->script('reportes/intentos', array('inline' => false)); ?>

<div class="da-panel-widget">
    <h1>Reporte Intentos por Pregunta</h1>
    <div id="da-ex-flot-line">
        <div class="da-form-row">
            <div class="clear"></div>
            <form id="ReporteMensualForm" class="da-form" accept-charset="iso-8859-1" method="post" name="formAdd"
                  action="/admin/reportes/intentos">
                <div class="da-form-col-2-8">
                    <label>Seleccione Participante</label>
                    <?= $this->Form->select('participante_select', array($participantes), array('empty' => false)); ?>
                </div>
                <div class="da-form-col-2-8">
                    <label>&nbsp</label>
                    <input type="submit" name="boton" value="Filtrar" class="da-button green large"/>
                </div>
            </form>
        </div>
        <br/>
        <div class="da-form-row">
            <div class="clear"></div>
            <form class="da-form" accept-charset="iso-8859-1" method="post" name="formAdd" action="/admin/reportes/intentos_export">
                <div class="da-form-col-2-8">
                    <?= $this->Form->hidden('participante_select')?>
                    <input type="submit" name="boton" value="Exportar Excel" class="da-button blue large" <?= ($habilitado)? "" : "disabled='false'" ?>/>
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
                    Listado de intentos por pregunta
                </span>
                </div>
                <div class="da-panel-content">
                    <table id="tabla_intentos1" class="da-table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Pregunta</th>
                            <th>Cantidad intentos</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($preguntas as $pregunta): ?>
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
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?//= $this->element('sql_dump'); ?>