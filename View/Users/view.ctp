<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Epics'), array('controller' => 'epics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Epic'), array('controller' => 'epics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Epics Tickets'), array('controller' => 'epics_tickets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Epics Ticket'), array('controller' => 'epics_tickets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tickets'), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requested Ticket'), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Taggeds'), array('controller' => 'taggeds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tagged'), array('controller' => 'taggeds', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Comments'); ?></h3>
	<?php if (!empty($user['Comment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Model Alias'); ?></th>
		<th><?php echo __('Model Key'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Slug'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Comment'] as $comment): ?>
		<tr>
			<td><?php echo $comment['id']; ?></td>
			<td><?php echo $comment['user_id']; ?></td>
			<td><?php echo $comment['model_alias']; ?></td>
			<td><?php echo $comment['model_key']; ?></td>
			<td><?php echo $comment['name']; ?></td>
			<td><?php echo $comment['slug']; ?></td>
			<td><?php echo $comment['created']; ?></td>
			<td><?php echo $comment['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['id']), array(), __('Are you sure you want to delete # %s?', $comment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Epics'); ?></h3>
	<?php if (!empty($user['Epic'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Slug'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Epic'] as $epic): ?>
		<tr>
			<td><?php echo $epic['id']; ?></td>
			<td><?php echo $epic['project_id']; ?></td>
			<td><?php echo $epic['user_id']; ?></td>
			<td><?php echo $epic['name']; ?></td>
			<td><?php echo $epic['slug']; ?></td>
			<td><?php echo $epic['created']; ?></td>
			<td><?php echo $epic['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'epics', 'action' => 'view', $epic['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'epics', 'action' => 'edit', $epic['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'epics', 'action' => 'delete', $epic['id']), array(), __('Are you sure you want to delete # %s?', $epic['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Epic'), array('controller' => 'epics', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Epics Tickets'); ?></h3>
	<?php if (!empty($user['EpicsTicket'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Epic Id'); ?></th>
		<th><?php echo __('Ticket Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['EpicsTicket'] as $epicsTicket): ?>
		<tr>
			<td><?php echo $epicsTicket['id']; ?></td>
			<td><?php echo $epicsTicket['epic_id']; ?></td>
			<td><?php echo $epicsTicket['ticket_id']; ?></td>
			<td><?php echo $epicsTicket['user_id']; ?></td>
			<td><?php echo $epicsTicket['created']; ?></td>
			<td><?php echo $epicsTicket['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'epics_tickets', 'action' => 'view', $epicsTicket['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'epics_tickets', 'action' => 'edit', $epicsTicket['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'epics_tickets', 'action' => 'delete', $epicsTicket['id']), array(), __('Are you sure you want to delete # %s?', $epicsTicket['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Epics Ticket'), array('controller' => 'epics_tickets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tickets'); ?></h3>
	<?php if (!empty($user['RequestedTicket'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('Ticket Container Id'); ?></th>
		<th><?php echo __('Ticket Type Id'); ?></th>
		<th><?php echo __('Ticket State Id'); ?></th>
		<th><?php echo __('Requestor User Id'); ?></th>
		<th><?php echo __('Assigned User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Slug'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['RequestedTicket'] as $requestedTicket): ?>
		<tr>
			<td><?php echo $requestedTicket['id']; ?></td>
			<td><?php echo $requestedTicket['project_id']; ?></td>
			<td><?php echo $requestedTicket['ticket_container_id']; ?></td>
			<td><?php echo $requestedTicket['ticket_type_id']; ?></td>
			<td><?php echo $requestedTicket['ticket_state_id']; ?></td>
			<td><?php echo $requestedTicket['requestor_user_id']; ?></td>
			<td><?php echo $requestedTicket['assigned_user_id']; ?></td>
			<td><?php echo $requestedTicket['name']; ?></td>
			<td><?php echo $requestedTicket['slug']; ?></td>
			<td><?php echo $requestedTicket['created']; ?></td>
			<td><?php echo $requestedTicket['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tickets', 'action' => 'view', $requestedTicket['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tickets', 'action' => 'edit', $requestedTicket['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tickets', 'action' => 'delete', $requestedTicket['id']), array(), __('Are you sure you want to delete # %s?', $requestedTicket['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Requested Ticket'), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tickets'); ?></h3>
	<?php if (!empty($user['AssignedTicket'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('Ticket Container Id'); ?></th>
		<th><?php echo __('Ticket Type Id'); ?></th>
		<th><?php echo __('Ticket State Id'); ?></th>
		<th><?php echo __('Requestor User Id'); ?></th>
		<th><?php echo __('Assigned User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Slug'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['AssignedTicket'] as $assignedTicket): ?>
		<tr>
			<td><?php echo $assignedTicket['id']; ?></td>
			<td><?php echo $assignedTicket['project_id']; ?></td>
			<td><?php echo $assignedTicket['ticket_container_id']; ?></td>
			<td><?php echo $assignedTicket['ticket_type_id']; ?></td>
			<td><?php echo $assignedTicket['ticket_state_id']; ?></td>
			<td><?php echo $assignedTicket['requestor_user_id']; ?></td>
			<td><?php echo $assignedTicket['assigned_user_id']; ?></td>
			<td><?php echo $assignedTicket['name']; ?></td>
			<td><?php echo $assignedTicket['slug']; ?></td>
			<td><?php echo $assignedTicket['created']; ?></td>
			<td><?php echo $assignedTicket['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tickets', 'action' => 'view', $assignedTicket['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tickets', 'action' => 'edit', $assignedTicket['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tickets', 'action' => 'delete', $assignedTicket['id']), array(), __('Are you sure you want to delete # %s?', $assignedTicket['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Assigned Ticket'), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Projects'); ?></h3>
	<?php if (!empty($user['Project'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Slug'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Project'] as $project): ?>
		<tr>
			<td><?php echo $project['id']; ?></td>
			<td><?php echo $project['user_id']; ?></td>
			<td><?php echo $project['name']; ?></td>
			<td><?php echo $project['slug']; ?></td>
			<td><?php echo $project['created']; ?></td>
			<td><?php echo $project['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'projects', 'action' => 'view', $project['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'projects', 'action' => 'edit', $project['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'projects', 'action' => 'delete', $project['id']), array(), __('Are you sure you want to delete # %s?', $project['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Taggeds'); ?></h3>
	<?php if (!empty($user['Tagged'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Model Alias'); ?></th>
		<th><?php echo __('Model Key'); ?></th>
		<th><?php echo __('Tag Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Tagged'] as $tagged): ?>
		<tr>
			<td><?php echo $tagged['id']; ?></td>
			<td><?php echo $tagged['user_id']; ?></td>
			<td><?php echo $tagged['model_alias']; ?></td>
			<td><?php echo $tagged['model_key']; ?></td>
			<td><?php echo $tagged['tag_id']; ?></td>
			<td><?php echo $tagged['created']; ?></td>
			<td><?php echo $tagged['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'taggeds', 'action' => 'view', $tagged['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'taggeds', 'action' => 'edit', $tagged['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'taggeds', 'action' => 'delete', $tagged['id']), array(), __('Are you sure you want to delete # %s?', $tagged['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tagged'), array('controller' => 'taggeds', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
