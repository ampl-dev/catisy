<div class="row">
    <div class="col-md-9">
        <?=$this->Form->create('Comment', array(
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
            <legend><?=__('Admin Edit %s', __('Comment')); ?></legend>
            				<?php
				echo $this->Form->input('user_id', array(
					'required' => 'required',
					'afterInput' => '<span class="help-block"><span class="text-danger">' . __('Required') . '</span></span>&nbsp;')
				);
				echo $this->Form->input('model_alias', array(
					'required' => 'required',
					'afterInput' => '<span class="help-block"><span class="text-danger">' . __('Required') . '</span></span>&nbsp;')
				);
				echo $this->Form->input('model_key', array(
					'required' => 'required',
					'afterInput' => '<span class="help-block"><span class="text-danger">' . __('Required') . '</span></span>&nbsp;')
				);
				echo $this->Form->input('name', array(
					'required' => 'required',
					'afterInput' => '<span class="help-block"><span class="text-danger">' . __('Required') . '</span></span>&nbsp;')
				);
				echo $this->Form->hidden('id');
				?>
				<?=$this->Form->submit(__('Submit'));?>
        </fieldset>
        <?=$this->Form->end();?>
    </div>
    
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?=__('Actions'); ?></h3>
            </div>

            <ul class="list-group">
                                    <li class="list-group-item"><?=$this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Comment.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Comment.id'))); ?></li>
                                <li class="list-group-item"><?=$this->Html->link(__('List %s', __('Comments')), array('action' => 'index'));?></li>
                			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?></li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add')); ?></li>
            </ul>
        </div>
    </div>
</div>