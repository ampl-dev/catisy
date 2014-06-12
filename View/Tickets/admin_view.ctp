<div class="row">
    <div class="col-md-9">
        <h1><?= $ticket['Ticket']['name']?></h1>
        <dl class="dl-horizontal">
            			<dt><?=__('Id'); ?></dt>
			<dd>
				<?=h($ticket['Ticket']['id']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Project'); ?></dt>
			<dd>
				<?=$this->Html->link($ticket['Project']['name'], array('controller' => 'projects', 'action' => 'view', $ticket['Project']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?=__('Ticket Container'); ?></dt>
			<dd>
				<?=$this->Html->link($ticket['TicketContainer']['name'], array('controller' => 'ticket_containers', 'action' => 'view', $ticket['TicketContainer']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?=__('Ticket Type'); ?></dt>
			<dd>
				<?=$this->Html->link($ticket['TicketType']['name'], array('controller' => 'ticket_types', 'action' => 'view', $ticket['TicketType']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?=__('Ticket State'); ?></dt>
			<dd>
				<?=$this->Html->link($ticket['TicketState']['name'], array('controller' => 'ticket_states', 'action' => 'view', $ticket['TicketState']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?=__('Requesting User'); ?></dt>
			<dd>
				<?=$this->Html->link($ticket['RequestingUser']['name'], array('controller' => 'users', 'action' => 'view', $ticket['RequestingUser']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?=__('Assigned User'); ?></dt>
			<dd>
				<?=$this->Html->link($ticket['AssignedUser']['name'], array('controller' => 'users', 'action' => 'view', $ticket['AssignedUser']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?=__('Name'); ?></dt>
			<dd>
				<?=h($ticket['Ticket']['name']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Slug'); ?></dt>
			<dd>
				<?=h($ticket['Ticket']['slug']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Is Deleted'); ?></dt>
			<dd>
				<?=h($ticket['Ticket']['is_deleted']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Created'); ?></dt>
			<dd>
				<?=h($ticket['Ticket']['created']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Modified'); ?></dt>
			<dd>
				<?=h($ticket['Ticket']['modified']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Deleted'); ?></dt>
			<dd>
				<?=h($ticket['Ticket']['deleted']); ?>
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
                    			<li class="list-group-item"><?=$this->Html->link(__('Edit %s', __('Ticket')), array('action' => 'edit', $ticket['Ticket']['id'])); ?> </li>
			<li class="list-group-item"><?=$this->Form->postLink(__('Delete %s', __('Ticket')), array('action' => 'delete', $ticket['Ticket']['id']), null, __('Are you sure you want to delete # %s?', $ticket['Ticket']['id'])); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Tickets')), array('action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Ticket')), array('action' => 'add')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Projects')), array('controller' => 'projects', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Project')), array('controller' => 'projects', 'action' => 'add')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Ticket Containers')), array('controller' => 'ticket_containers', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Ticket Container')), array('controller' => 'ticket_containers', 'action' => 'add')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Ticket Types')), array('controller' => 'ticket_types', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Ticket Type')), array('controller' => 'ticket_types', 'action' => 'add')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Ticket States')), array('controller' => 'ticket_states', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Ticket State')), array('controller' => 'ticket_states', 'action' => 'add')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Requesting User')), array('controller' => 'users', 'action' => 'add')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Epics')), array('controller' => 'epics', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Epic')), array('controller' => 'epics', 'action' => 'add')); ?> </li>
            </ul>
        </div>
    </div>
    
    
</div>

    <div class="row">
        <div class="col-md-9">
            <h3><?=__('Related %s', __('Epics')); ?></h3>
    <?php if (!empty($ticket['Epic'])):?>
            <table class="table">
                <tr>
                    				<th><?=__('Id'); ?></th>
				<th><?=__('Project Id'); ?></th>
				<th><?=__('User Id'); ?></th>
				<th><?=__('Name'); ?></th>
				<th><?=__('Slug'); ?></th>
				<th><?=__('Is Deleted'); ?></th>
				<th><?=__('Created'); ?></th>
				<th><?=__('Modified'); ?></th>
				<th><?=__('Deleted'); ?></th>
                    <th class="actions"><?=__('Actions');?></th>
                </tr>
                		<?php foreach ($ticket['Epic'] as $epic): ?>
			<tr>
				<td><?=$epic['id'];?></td>
				<td><?=$epic['project_id'];?></td>
				<td><?=$epic['user_id'];?></td>
				<td><?=$epic['name'];?></td>
				<td><?=$epic['slug'];?></td>
				<td><?=$epic['is_deleted'];?></td>
				<td><?=$epic['created'];?></td>
				<td><?=$epic['modified'];?></td>
				<td><?=$epic['deleted'];?></td>
				<td class="actions">
					<?=$this->Html->link(__('View'), array('controller' => 'epics', 'action' => 'view', $epic['id'])); ?>
					<?=$this->Html->link(__('Edit'), array('controller' => 'epics', 'action' => 'edit', $epic['id'])); ?>
					<?=$this->Form->postLink(__('Delete'), array('controller' => 'epics', 'action' => 'delete', $epic['id']), null, __('Are you sure you want to delete # %s?', $epic['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
            </table>
    <?php endif; ?>

        </div>
        <div class="col-md-3">
            <ul class="nav nav-list">
                <li><?=$this->Html->link(__('New %s', __('Epic')), array('controller' => 'epics', 'action' => 'add'));?> </li>
            </ul>
        </div>
    </div>
