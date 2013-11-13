<!-- DataTables Plugin -->
<?= $this->Html->script('../plugins/datatables/jquery.dataTables.min'); ?>

<div class="da-panel collapsible">
    <div class="da-panel-header">
        <span class="da-panel-title">
            <img src="/images/icons/color/ui_tab_content.png" alt="" />
            Formulario Participante
        </span>

    </div>
    <div class="da-panel-content">
        <?= $this->Form->create('Participante', array(
            'class' => 'da-form',
            'inputDefaults' => array(
                'label' => false,
                'div' => false
            )
        ));?>
        <div class="da-form-row">
            <label>Nombre <span class="required">*</span></label>
            <div class="da-form-item default">
                <span class="formNote">Nombre</span>
                <?= $this->Form->input('nombre'); ?>
            </div>
        </div>
        <div class="da-form-row">
            <label>Iniciales <span class="required">*</span></label>
            <div class="da-form-item default">
                <span class="formNote">Iniciales</span>
                <?= $this->Form->input('iniciales'); ?>
            </div>
        </div>
        <div class="da-form-row">
            <label>Tipo Participante</label>
            <div class="da-form-item small">
                <span class="formNote">Seleccione tipo participante</span>
                <?= $this->Form->select('tipo_participante', array($GRUPOS), array('empty' => false)); ?>
            </div>
        </div>
        <div class="da-button-row">
            <a href="/admin/participantes"><input type="button" value="Cancelar" class="da-button orange large left" /></a>
            <input type="submit" value="Guardar" class="da-button green large" />
        </div>
        </form>
    </div>
</div>