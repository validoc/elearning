<!-- jQuery-UI JavaScript Files -->
<!--<script type="text/javascript" src="/jui/js/jquery-ui-1.8.20.min.js"></script>-->
<!--<script type="text/javascript" src="/jui/js/jquery.ui.timepicker.min.js"></script>-->
<!--<link rel="stylesheet" type="text/css" href="/jui/css/jquery.ui.all.css" media="screen" />-->

<!-- DataTables Plugin -->
<?= $this->Html->script('../plugins/datatables/jquery.dataTables.min'); ?>

<!-- Demo JavaScript Files -->
<!--<script type="text/javascript" src="/js/organizer/add.js"></script>-->
<!--<script type="text/javascript" src="/js/organizer/loadState.js"></script>-->

<div class="da-panel collapsible">
    <div class="da-panel-header">
        <span class="da-panel-title">
            <img src="/images/icons/color/ui_tab_content.png" alt="" />
            Formulario Usuario
        </span>

    </div>
    <div class="da-panel-content">
        <?= $this->Form->create('Usuario', array(
            'class' => 'da-form',
            'inputDefaults' => array(
                'label' => false,
                'div' => false
            )
        ));?>
        <div class="da-form-row">
            <label>Username <span class="required">*</span></label>
            <div class="da-form-item default">
                <span class="formNote">Username</span>
                <?= $this->Form->input('username'); ?>
            </div>
        </div>
        <div class="da-form-row">
            <label>Password <span class="required">*</span></label>
            <div class="da-form-item default">
                <span class="formNote">Password</span>
                <?= $this->Form->input('password', array('type' => 'text')); ?>
            </div>
        </div>
        <div class="da-form-row">
            <label>Grupo de usuario</label>
            <div class="da-form-item small">
                <span class="formNote">Seleccione grupo de usuario</span>
                <?= $this->Form->select('grupo', array($GRUPOS), array('empty' => false)); ?>
            </div>
        </div>
        <div class="da-button-row">
            <a href="/admin/usuarios"><input type="button" value="Cancelar" class="da-button orange large left" /></a>
            <input type="submit" value="Guardar" class="da-button green large" />
        </div>
        </form>
    </div>
</div>