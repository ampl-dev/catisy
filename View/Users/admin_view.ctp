<div class="row">
    <div class="col-md-9">
        <h1><?= $user['User']['name']?></h1>
        <dl class="dl-horizontal">
            			<dt><?=__('Id'); ?></dt>
			<dd>
				<?=h($user['User']['id']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Name'); ?></dt>
			<dd>
				<?=h($user['User']['name']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Email'); ?></dt>
			<dd>
				<?=h($user['User']['email']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Password'); ?></dt>
			<dd>
				<?=h($user['User']['password']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Is Active'); ?></dt>
			<dd>
				<?=h($user['User']['is_active']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Role'); ?></dt>
			<dd>
				<?=h($user['User']['role']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Created'); ?></dt>
			<dd>
				<?=h($user['User']['created']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Modified'); ?></dt>
			<dd>
				<?=h($user['User']['modified']); ?>
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
                    			<li class="list-group-item"><?=$this->Html->link(__('Edit %s', __('User')), array('action' => 'edit', $user['User']['id'])); ?> </li>
			<li class="list-group-item"><?=$this->Form->postLink(__('Delete %s', __('User')), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Users')), array('action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('User')), array('action' => 'add')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Comments')), array('controller' => 'comments', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Comment')), array('controller' => 'comments', 'action' => 'add')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Epics')), array('controller' => 'epics', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Epic')), array('controller' => 'epics', 'action' => 'add')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Epics Tickets')), array('controller' => 'epics_tickets', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Epics Ticket')), array('controller' => 'epics_tickets', 'action' => 'add')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Tickets')), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Requested Ticket')), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Projects')), array('controller' => 'projects', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Project')), array('controller' => 'projects', 'action' => 'add')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Taggeds')), array('controller' => 'taggeds', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Tagged')), array('controller' => 'taggeds', 'action' => 'add')); ?> </li>
            </ul>
        </div>
    </div>
    
    
</div>

    <div class="row">
        <div class="col-md-9">
            <h3><?=__('Related %s', __('Comments')); ?></h3>
    <?php if (!empty($user['Comment'])):?>
            <table class="table">
                <tr>
                    				<th><?=__('Id'); ?></th>
				<th><?=__('User Id'); ?></th>
				<th><?=__('Model Alias'); ?></th>
				<th><?=__('Model Key'); ?></th>
				<th><?=__('Name'); ?></th>
				<th><?=__('Slug'); ?></th>
				<th><?=__('Created'); ?></th>
				<th><?=__('Modified'); ?></th>
                    <th class="actions"><?=__('Actions');?></th>
                </tr>
                		<?php foreach ($user['Comment'] as $comment): ?>
			<tr>
				<td><?=$comment['id'];?></td>
				<td><?=$comment['user_id'];?></td>
				<td><?=$comment['model_alias'];?></td>
				<td><?=$comment['model_key'];?></td>
				<td><?=$comment['name'];?></td>
				<td><?=$comment['slug'];?></td>
				<td><?=$comment['created'];?></td>
				<td><?=$comment['modified'];?></td>
				<td class="actions">
					<?=$this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['id'])); ?>
					<?=$this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['id'])); ?>
					<?=$this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['id']), null, __('Are you sure you want to delete # %s?', $comment['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
            </table>
    <?php endif; ?>

        </div>
        <div class="col-md-3">
            <ul class="nav nav-list">
                <li><?=$this->Html->link(__('New %s', __('Comment')), array('controller' => 'comments', 'action' => 'add'));?> </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <h3><?=__('Related %s', __('Epics')); ?></h3>
    <?php if (!empty($user['Epic'])):?>
            <table class="table">
                <tr>
                    				<th><?=__('Id'); ?></th>
				<th><?=__('Project Id'); ?></th>
				<th><?=__('User Id'); ?></th>
				<th><?=__('Name'); ?></th>
				<th><?=__('Slug'); ?></th>
				<th><?=__('Created'); ?></th>
				<th><?=__('Modified'); ?></th>
                    <th class="actions"><?=__('Actions');?></th>
                </tr>
                		<?php foreach ($user['Epic'] as $epic): ?>
			<tr>
				<td><?=$epic['id'];?></td>
				<td><?=$epic['project_id'];?></td>
				<td><?=$epic['user_id'];?></td>
				<td><?=$epic['name'];?></td>
				<td><?=$epic['slug'];?></td>
				<td><?=$epic['created'];?></td>
				<td><?=$epic['modified'];?></td>
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
    <div class="row">
        <div class="col-md-9">
            <h3><?=__('Related %s', __('Epics Tickets')); ?></h3>
    <?php if (!empty($user['EpicsTicket'])):?>
            <table class="table">
                <tr>
                    				<th><?=__('Id'); ?></th>
				<th><?=__('Epic Id'); ?></th>
				<th><?=__('Ticket Id'); ?></th>
				<th><?=__('User Id'); ?></th>
				<th><?=__('Created'); ?></th>
				<th><?=__('Modified'); ?></th>
                    <th class="actions"><?=__('Actions');?></th>
                </tr>
                		<?php foreach ($user['EpicsTicket'] as $epicsTicket): ?>
			<tr>
				<td><?=$epicsTicket['id'];?></td>
				<td><?=$epicsTicket['epic_id'];?></td>
				<td><?=$epicsTicket['ticket_id'];?></td>
				<td><?=$epicsTicket['user_id'];?></td>
				<td><?=$epicsTicket['created'];?></td>
				<td><?=$epicsTicket['modified'];?></td>
				<td class="actions">
					<?=$this->Html->link(__('View'), array('controller' => 'epics_tickets', 'action' => 'view', $epicsTicket['id'])); ?>
					<?=$this->Html->link(__('Edit'), array('controller' => 'epics_tickets', 'action' => 'edit', $epicsTicket['id'])); ?>
					<?=$this->Form->postLink(__('Delete'), array('controller' => 'epics_tickets', 'action' => 'delete', $epicsTicket['id']), null, __('Are you sure you want to delete # %s?', $epicsTicket['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
            </table>
    <?php endif; ?>

        </div>
        <div class="col-md-3">
            <ul class="nav nav-list">
                <li><?=$this->Html->link(__('New %s', __('Epics Ticket')), array('controller' => 'epics_tickets', 'action' => 'add'));?> </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <h3><?=__('Related %s', __('Tickets')); ?></h3>
    <?php if (!empty($user['RequestedTicket'])):?>
            <table class="table">
                <tr>
                    				<th><?=__('Id'); ?></th>
				<th><?=__('Project Id'); ?></th>
				<th><?=__('Ticket Container Id'); ?></th>
				<th><?=__('Ticket Type Id'); ?></th>
				<th><?=__('Ticket State Id'); ?></th>
				<th><?=__('Requestor User Id'); ?></th>
				<th><?=__('Assigned User Id'); ?></th>
				<th><?=__('Name'); ?></th>
				<th><?=__('Slug'); ?></th>
				<th><?=__('Created'); ?></th>
				<th><?=__('Modified'); ?></th>
                    <th class="actions"><?=__('Actions');?></th>
                </tr>
                		<?php foreach ($user['RequestedTicket'] as $requestedTicket): ?>
			<tr>
				<td><?=$requestedTicket['id'];?></td>
				<td><?=$requestedTicket['project_id'];?></td>
				<td><?=$requestedTicket['ticket_container_id'];?></td>
				<td><?=$requestedTicket['ticket_type_id'];?></td>
				<td><?=$requestedTicket['ticket_state_id'];?></td>
				<td><?=$requestedTicket['requestor_user_id'];?></td>
				<td><?=$requestedTicket['assigned_user_id'];?></td>
				<td><?=$requestedTicket['name'];?></td>
				<td><?=$requestedTicket['slug'];?></td>
				<td><?=$requestedTicket['created'];?></td>
				<td><?=$requestedTicket['modified'];?></td>
				<td class="actions">
					<?=$this->Html->link(__('View'), array('controller' => 'tickets', 'action' => 'view', $requestedTicket['id'])); ?>
					<?=$this->Html->link(__('Edit'), array('controller' => 'tickets', 'action' => 'edit', $requestedTicket['id'])); ?>
					<?=$this->Form->postLink(__('Delete'), array('controller' => 'tickets', 'action' => 'delete', $requestedTicket['id']), null, __('Are you sure you want to delete # %s?', $requestedTicket['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
            </table>
    <?php endif; ?>

        </div>
        <div class="col-md-3">
            <ul class="nav nav-list">
                <li><?=$this->Html->link(__('New %s', __('Requested Ticket')), array('controller' => 'tickets', 'action' => 'add'));?> </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <h3><?=__('Related %s', __('Tickets')); ?></h3>
    <?php if (!empty($user['AssignedTicket'])):?>
            <table class="table">
                <tr>
                    				<th><?=__('Id'); ?></th>
				<th><?=__('Project Id'); ?></th>
				<th><?=__('Ticket Container Id'); ?></th>
				<th><?=__('Ticket Type Id'); ?></th>
				<th><?=__('Ticket State Id'); ?></th>
				<th><?=__('Requestor User Id'); ?></th>
				<th><?=__('Assigned User Id'); ?></th>
				<th><?=__('Name'); ?></th>
				<th><?=__('Slug'); ?></th>
				<th><?=__('Created'); ?></th>
				<th><?=__('Modified'); ?></th>
                    <th class="actions"><?=__('Actions');?></th>
                </tr>
                		<?php foreach ($user['AssignedTicket'] as $assignedTicket): ?>
			<tr>
				<td><?=$assignedTicket['id'];?></td>
				<td><?=$assignedTicket['project_id'];?></td>
				<td><?=$assignedTicket['ticket_container_id'];?></td>
				<td><?=$assignedTicket['ticket_type_id'];?></td>
				<td><?=$assignedTicket['ticket_state_id'];?></td>
				<td><?=$assignedTicket['requestor_user_id'];?></td>
				<td><?=$assignedTicket['assigned_user_id'];?></td>
				<td><?=$assignedTicket['name'];?></td>
				<td><?=$assignedTicket['slug'];?></td>
				<td><?=$assignedTicket['created'];?></td>
				<td><?=$assignedTicket['modified'];?></td>
				<td class="actions">
					<?=$this->Html->link(__('View'), array('controller' => 'tickets', 'action' => 'view', $assignedTicket['id'])); ?>
					<?=$this->Html->link(__('Edit'), array('controller' => 'tickets', 'action' => 'edit', $assignedTicket['id'])); ?>
					<?=$this->Form->postLink(__('Delete'), array('controller' => 'tickets', 'action' => 'delete', $assignedTicket['id']), null, __('Are you sure you want to delete # %s?', $assignedTicket['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
            </table>
    <?php endif; ?>

        </div>
        <div class="col-md-3">
            <ul class="nav nav-list">
                <li><?=$this->Html->link(__('New %s', __('Assigned Ticket')), array('controller' => 'tickets', 'action' => 'add'));?> </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <h3><?=__('Related %s', __('Projects')); ?></h3>
    <?php if (!empty($user['Project'])):?>
            <table class="table">
                <tr>
                    				<th><?=__('Id'); ?></th>
				<th><?=__('User Id'); ?></th>
				<th><?=__('Name'); ?></th>
				<th><?=__('Slug'); ?></th>
				<th><?=__('Created'); ?></th>
				<th><?=__('Modified'); ?></th>
                    <th class="actions"><?=__('Actions');?></th>
                </tr>
                		<?php foreach ($user['Project'] as $project): ?>
			<tr>
				<td><?=$project['id'];?></td>
				<td><?=$project['user_id'];?></td>
				<td><?=$project['name'];?></td>
				<td><?=$project['slug'];?></td>
				<td><?=$project['created'];?></td>
				<td><?=$project['modified'];?></td>
				<td class="actions">
					<?=$this->Html->link(__('View'), array('controller' => 'projects', 'action' => 'view', $project['id'])); ?>
					<?=$this->Html->link(__('Edit'), array('controller' => 'projects', 'action' => 'edit', $project['id'])); ?>
					<?=$this->Form->postLink(__('Delete'), array('controller' => 'projects', 'action' => 'delete', $project['id']), null, __('Are you sure you want to delete # %s?', $project['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
            </table>
    <?php endif; ?>

        </div>
        <div class="col-md-3">
            <ul class="nav nav-list">
                <li><?=$this->Html->link(__('New %s', __('Project')), array('controller' => 'projects', 'action' => 'add'));?> </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <h3><?=__('Related %s', __('Taggeds')); ?></h3>
    <?php if (!empty($user['Tagged'])):?>
            <table class="table">
                <tr>
                    				<th><?=__('Id'); ?></th>
				<th><?=__('User Id'); ?></th>
				<th><?=__('Model Alias'); ?></th>
				<th><?=__('Model Key'); ?></th>
				<th><?=__('Tag Id'); ?></th>
				<th><?=__('Created'); ?></th>
				<th><?=__('Modified'); ?></th>
                    <th class="actions"><?=__('Actions');?></th>
                </tr>
                		<?php foreach ($user['Tagged'] as $tagged): ?>
			<tr>
				<td><?=$tagged['id'];?></td>
				<td><?=$tagged['user_id'];?></td>
				<td><?=$tagged['model_alias'];?></td>
				<td><?=$tagged['model_key'];?></td>
				<td><?=$tagged['tag_id'];?></td>
				<td><?=$tagged['created'];?></td>
				<td><?=$tagged['modified'];?></td>
				<td class="actions">
					<?=$this->Html->link(__('View'), array('controller' => 'taggeds', 'action' => 'view', $tagged['id'])); ?>
					<?=$this->Html->link(__('Edit'), array('controller' => 'taggeds', 'action' => 'edit', $tagged['id'])); ?>
					<?=$this->Form->postLink(__('Delete'), array('controller' => 'taggeds', 'action' => 'delete', $tagged['id']), null, __('Are you sure you want to delete # %s?', $tagged['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
            </table>
    <?php endif; ?>

        </div>
        <div class="col-md-3">
            <ul class="nav nav-list">
                <li><?=$this->Html->link(__('New %s', __('Tagged')), array('controller' => 'taggeds', 'action' => 'add'));?> </li>
            </ul>
        </div>
    </div>
