<div class="users form">
    <?php echo $this->Form->create('User'); ?>
        <fieldset>
            <legend><?php echo __('Registro de usuario Solicitante'); ?></legend>
            <?php
            echo $this->Form->input('username', array('label' => "Nombre de usuario", 'placeholder' => "Nombre de usuario"));
            echo $this->Form->input('password', array('label' => "Contraseña", 'placeholder' => "Contraseña"));

            echo $this->Form->input('tipo', array(
                'options' => array('admin' => 'Admin', 'author' => 'Author')
            ));
        ?>
        </fieldset>
    <?php echo $this->Form->end(__('Darse de alta')); ?>
</div>
