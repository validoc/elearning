<!-- DataTables Plugin -->
<?= $this->Html->script('../plugins/datatables/jquery.dataTables.min', array('inline' => false)); ?>
<!-- DataTables Plugin Funciones -->
<?= $this->Html->script('participantes/index', array('inline' => false)); ?>

<div class="da-panel collapsible">
    <div class="da-panel-header">
        <span class="da-panel-title">

            <img src="/images/icons/black/16/list.png" alt="" />
            Listado de Participantes
        </span>
    </div>
    <div class="da-panel-content">
        <table id="tabla_participantes" class="da-table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Iniciales</th>
                <th>Tipo Participante</th>
                <th style="text-align: center;">Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($participantes as $participante): ?>
                <tr>
                    <td>
                        <?= $participante['Participante']['id']; ?>
                    </td>
                    <td>
                        <?= $participante['Participante']['nombre'];?>
                    </td>
                    <td>
                        <?= $participante['Participante']['iniciales']; ?>
                    </td>
                    <td>
                        <?= $GRUPOS[$participante['Participante']['tipo_participante']]; ?>
                    </td>
                    <td style="text-align: center;">
                        <?php
                        $editar = $this->Html->image('/images/icons/color/pencil.png', array('alt' => 'Editar'));
                        $eliminar = $this->Html->image('/images/icons/color/cross.png', array('alt' => 'Eliminar'));
                        ?>
                        <?= $this->Html->link($editar, array('action' => 'edit', $participante['Participante']['id']), array('escape' => false));?>
                        |
                        <?= $this->Form->postLink($eliminar, array('action' => 'delete', $participante['Participante']['id']), array('escape' => false, 'confirm' => 'Esta seguro de eliminar?'))?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>