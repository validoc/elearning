<!-- DataTables Plugin -->
<?= $this->Html->script('../plugins/datatables/jquery.dataTables.min', array('inline' => false)); ?>
<!-- DataTables Plugin Funciones -->
<?= $this->Html->script('archivos/index', array('inline' => false)); ?>

<div class="da-panel collapsible">
    <div class="da-panel-header">
        <span class="da-panel-title">
            <img src="/images/icons/black/16/list.png" alt="" />
            Listado de Archivos
        </span>
    </div>
    <div class="da-panel-content">
        <table id="tabla_archivos" class="da-table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Estado</th>
                <th style="text-align: center;">Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($archivos as $archivo): ?>
                <tr>
                    <td>
                        <?= $archivo['Archivo']['id']; ?>
                    </td>
                    <td>
                        <?= $archivo['Archivo']['nombre'];?>
                    </td>
                    <td>
                        <?= $TIPO_DOCUMENTO[$archivo['Archivo']['tipo_documento']]; ?>
                    </td>
                    <td>
                        <?= $ESTADOS[$archivo['Archivo']['estado']]; ?>
                    </td>
                    <td style="text-align: center;">
                        <?php
                        $editar = $this->Html->image('/images/icons/color/pencil.png', array('alt' => 'Editar'));
                        ?>
                        <?= $this->Html->link($editar, array('action' => 'edit', $archivo['Archivo']['id']), array('escape' => false));?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>