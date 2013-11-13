<!-- DataTables Plugin -->
<?= $this->Html->script('../plugins/datatables/jquery.dataTables.min', array('inline' => false)); ?>
<!-- DataTables Plugin Funciones -->
<?= $this->Html->script('usuarios/index', array('inline' => false)); ?>


<div class="da-panel collapsible">
    <div class="da-panel-header">
        <span class="da-panel-title">

            <img src="/images/icons/black/16/list.png" alt="" />
            Listado de Usuarios
        </span>
    </div>
    <div class="da-panel-content">
        <table id="tabla_usuarios" class="da-table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Grupo</th>
                <th style="width: 92px; text-align: center;">Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($usuarios as $event): ?>
                <tr>
                    <td>
                        <?= $event['Usuario']['id']; ?>
                    </td>
                    <td>
                        <?= $event['Usuario']['username'];?>
                    </td>
                    <td>
                        <?= $event['Usuario']['grupo']; ?>
                    </td>
                    <td style="text-align: center;">
                        <?php
                        $editar = $this->Html->image('/images/icons/color/pencil.png', array('alt' => 'Editar'));
                        $eliminar = $this->Html->image('/images/icons/color/cross.png', array('alt' => 'Eliminar'));
                        ?>
                        <?= $this->Html->link($editar, array('action' => 'edit', $event['Usuario']['id']), array('escape' => false));?>
                        |
                        <?= $this->Form->postLink($eliminar, array('action' => 'delete', $event['Usuario']['id']), array('escape' => false, 'confirm' => 'Esta seguro de eliminar?'))?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>