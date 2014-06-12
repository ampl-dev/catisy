<div class="row">
    <div class="col-md-9">
        <?=
        $this->Form->create('User', array(
            'class' => 'form-horizontal',
            'inputDefaults' => array(
                'label' => array(
                    'class' => 'col-md-3 control-label',
                ),
                'div' => array(
                    'class' => 'form-group',
                ),
                'wrapInput' => array(
                    'class' => 'col-md-9'
                ),
                'class' => 'form-control'
            )
        ));
        ?>        <fieldset>
            <legend><?= __('Log in'); ?></legend>
            <?php
            echo $this->Form->input('email', array(
                'required' => 'required',
                'afterInput' => '<span class="help-block"><span class="text-danger">' . __('Required') . '</span></span>&nbsp;')
            );
            echo $this->Form->input('password', array(
                'required' => 'required',
                'afterInput' => '<span class="help-block"><span class="text-danger">' . __('Required') . '</span></span>&nbsp;')
            );
            ?>
            <?= $this->Form->submit(__('Submit')); ?>
        </fieldset>
        <?= $this->Form->end(); ?>
    </div>

</div>