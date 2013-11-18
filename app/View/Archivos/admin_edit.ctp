<!-- FileInput Plugin -->
<script type="text/javascript" src="/js/jquery.fileinput.js"></script>

<div class="da-panel collapsible">
    <div class="da-panel-header">
        <span class="da-panel-title">
            <img src="/images/icons/color/ui_tab_content.png" alt="" />
            Formulario Archivo
        </span>

    </div>
    <div class="da-panel-content">
        <?= $this->Form->create('Archivo', array(
            'class' => 'da-form',
            'enctype' => 'multipart/form-data',
            'inputDefaults' => array(
                'label' => false,
                'div' => false
            )
        ));?>
        <div class="da-form-row">
            <label>Nombre</label>
            <div class="da-form-item default">
                <span class="formNote"><?= $FORMATO_DOCUMENTO ?></span>
<!--                --><?//= $this->Form->input('nombre'); ?>
                <?= $this->Form->input('nombre', array('class' => 'da-custom-file', 'type' => 'file','label' => false, 'div' => false)); ?>
            </div>
        </div>
        <div class="da-form-row">
            <label>Tipo Documento <span class="required">*</span></label>
            <div class="da-form-item default">
                <p><?= $TIPO_DOCUMENTO?></p>
<!--                --><?//= $this->Form->input('iniciales', array('readonly' => true)); ?>
            </div>
        </div>
        <div class="da-form-row">
            <label>Estado</label>
            <div class="da-form-item small">
                <span class="formNote">Seleccione estado</span>
                <?= $this->Form->select('estado', array($ESTADOS), array('empty' => false)); ?>
            </div>
        </div>
        <div class="da-button-row">
            <a href="/admin/archivos"><input type="button" value="Cancelar" class="da-button orange large left" /></a>
            <input type="submit" value="Guardar" class="da-button green large" />
        </div>
        </form>
    </div>
</div>