<div class="row">
    <div class="col-md-9">
        <?=$this->Form->create('Epic', array(
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
            <legend><?=__('Edit %s', __('Epic')); ?></legend>
            				<?php
				echo $this->Form->input('project_id', array(
					'required' => 'required',
					'afterInput' => '<span class="help-block"><span class="text-danger">' . __('Required') . '</span></span>&nbsp;')
				);
				echo $this->Form->input('user_id', array(
					'required' => 'required',
					'afterInput' => '<span class="help-block"><span class="text-danger">' . __('Required') . '</span></span>&nbsp;')
				);
				echo $this->Form->input('name', array(
					'required' => 'required',
					'afterInput' => '<span class="help-block"><span class="text-danger">' . __('Required') . '</span></span>&nbsp;')
				);
				echo $this->Form->hidden('id');
				echo $this->Form->input('Ticket');
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
                                    <li class="list-group-item"><?=$this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Epic.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Epic.id'))); ?></li>
                                <li class="list-group-item"><?=$this->Html->link(__('List %s', __('Epics')), array('action' => 'index'));?></li>
                			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Projects')), array('controller' => 'projects', 'action' => 'index')); ?></li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Project')), array('controller' => 'projects', 'action' => 'add')); ?></li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?></li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Creator')), array('controller' => 'users', 'action' => 'add')); ?></li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Tickets')), array('controller' => 'tickets', 'action' => 'index')); ?></li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Ticket')), array('controller' => 'tickets', 'action' => 'add')); ?></li>
            </ul>
        </div>
    </div>
</div>