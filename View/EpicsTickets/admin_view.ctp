<div class="row">
    <div class="col-md-9">
        <h1><?= $epicsTicket['EpicsTicket']['id']?></h1>
        <dl class="dl-horizontal">
            			<dt><?=__('Id'); ?></dt>
			<dd>
				<?=h($epicsTicket['EpicsTicket']['id']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Epic'); ?></dt>
			<dd>
				<?=$this->Html->link($epicsTicket['Epic']['name'], array('controller' => 'epics', 'action' => 'view', $epicsTicket['Epic']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?=__('Ticket'); ?></dt>
			<dd>
				<?=$this->Html->link($epicsTicket['Ticket']['name'], array('controller' => 'tickets', 'action' => 'view', $epicsTicket['Ticket']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?=__('User'); ?></dt>
			<dd>
				<?=$this->Html->link($epicsTicket['User']['name'], array('controller' => 'users', 'action' => 'view', $epicsTicket['User']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?=__('Created'); ?></dt>
			<dd>
				<?=h($epicsTicket['EpicsTicket']['created']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Modified'); ?></dt>
			<dd>
				<?=h($epicsTicket['EpicsTicket']['modified']); ?>
				&nbsp;
			</dd>
        </dl>
    </div>
    
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?=__('Actions'); ?></h3>
            </div>

            <!-- List group -->
            <ul class="list-group">
                    			<li class="list-group-item"><?=$this->Html->link(__('Edit %s', __('Epics Ticket')), array('action' => 'edit', $epicsTicket['EpicsTicket']['id'])); ?> </li>
			<li class="list-group-item"><?=$this->Form->postLink(__('Delete %s', __('Epics Ticket')), array('action' => 'delete', $epicsTicket['EpicsTicket']['id']), null, __('Are you sure you want to delete # %s?', $epicsTicket['EpicsTicket']['id'])); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Epics Tickets')), array('action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Epics Ticket')), array('action' => 'add')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Epics')), array('controller' => 'epics', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Epic')), array('controller' => 'epics', 'action' => 'add')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Tickets')), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Ticket')), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add')); ?> </li>
            </ul>
        </div>
    </div>
    
    
</div>

