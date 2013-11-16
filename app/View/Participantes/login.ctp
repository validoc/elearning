<?= $this->Html->script('/plugins/validate/jquery.validate.min', array('inline' => false)); ?>

<div class="center_imagen" xmlns="http://www.w3.org/1999/html">
    <img src="/images/imagen_head.png" alt="eLearning">
</div>
<div class="content">
    <div class="central_box box_login">
        <?= $this->Form->create('Participante', array(
            'id' => 'form_participante',
            'class' => 'da-form',
            'name' => 'form_participante',
            'inputDefaults' => array(
                'label' => false,
                'div' => false
            )
        ));?>
        <div class="form">
            <h3>
                <img src="/images/login_degrade.png" alt="Login">
            </h3>
            <small>Usuario</small>
            <?= $this->Form->input('nombre', array('class' => 'first field_required')); ?>
            <br/>
            <small style="margin: 30px 0 0 0;">Password</small>
            <?= $this->Form->input('iniciales', array('type' => 'password', 'class' => 'field_required')); ?>
            <a style="cursor: pointer" class="btn_azul" id="submit">INGRESAR</a>
            <?= ( isset($mensaje) ? "<span class='error'>$mensaje</span>" : '')?>

        </div>
        <div class="sombra"></div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#submit").click(function(e) {
            e.preventDefault();
            $("#form_participante").submit();
        });

        //Validate
        $("#form_participante").validate({errorElement: "span"});
        //
        $('.field_required').each(function() {
            $(this).rules('add', {
                required: true,
                messages: {
                    required:  "Campo requerido"
                }
            });
        });
    });
</script>
<?php //echo $this->element('sql_dump'); ?>
