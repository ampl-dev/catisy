<div class="row">
    <div class="col-md-9">
        <?=$this->Form->create('Ticket', array(
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
            <legend><?=__('Admin Add %s', __('Ticket')); ?></legend>
            				<?php
				echo $this->Form->input('project_id', array(
					'required' => 'required',
					'afterInput' => '<span class="help-block"><span class="text-danger">' . __('Required') . '</span></span>&nbsp;')
				);
				echo $this->Form->input('ticket_container_id');
				echo $this->Form->input('ticket_type_id', array(
					'required' => 'required',
					'afterInput' => '<span class="help-block"><span class="text-danger">' . __('Required') . '</span></span>&nbsp;')
				);
				echo $this->Form->input('ticket_state_id');
				echo $this->Form->input('requestor_user_id', array(
					'required' => 'required',
					'afterInput' => '<span class="help-block"><span class="text-danger">' . __('Required') . '</span></span>&nbsp;')
				);
				echo $this->Form->input('assigned_user_id');
				echo $this->Form->input('name', array(
					'required' => 'required',
					'afterInput' => '<span class="help-block"><span class="text-danger">' . __('Required') . '</span></span>&nbsp;')
				);
				echo $this->Form->input('Epic');
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
                                <li class="list-group-item"><?=$this->Html->link(__('List %s', __('Tickets')), array('action' => 'index'));?></li>
                			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Projects')), array('controller' => 'projects', 'action' => 'index')); ?></li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Project')), array('controller' => 'projects', 'action' => 'add')); ?></li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Ticket Containers')), array('controller' => 'ticket_containers', 'action' => 'index')); ?></li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Ticket Container')), array('controller' => 'ticket_containers', 'action' => 'add')); ?></li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Ticket Types')), array('controller' => 'ticket_types', 'action' => 'index')); ?></li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Ticket Type')), array('controller' => 'ticket_types', 'action' => 'add')); ?></li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Ticket States')), array('controller' => 'ticket_states', 'action' => 'index')); ?></li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Ticket State')), array('controller' => 'ticket_states', 'action' => 'add')); ?></li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?></li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Requesting User')), array('controller' => 'users', 'action' => 'add')); ?></li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Epics')), array('controller' => 'epics', 'action' => 'index')); ?></li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Epic')), array('controller' => 'epics', 'action' => 'add')); ?></li>
            </ul>
        </div>
    </div>
</div>