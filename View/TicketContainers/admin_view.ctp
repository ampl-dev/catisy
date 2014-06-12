<div class="row">
    <div class="col-md-9">
        <h1><?= $ticketContainer['TicketContainer']['name']?></h1>
        <dl class="dl-horizontal">
            			<dt><?=__('Id'); ?></dt>
			<dd>
				<?=h($ticketContainer['TicketContainer']['id']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Name'); ?></dt>
			<dd>
				<?=h($ticketContainer['TicketContainer']['name']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Slug'); ?></dt>
			<dd>
				<?=h($ticketContainer['TicketContainer']['slug']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Created'); ?></dt>
			<dd>
				<?=h($ticketContainer['TicketContainer']['created']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Modified'); ?></dt>
			<dd>
				<?=h($ticketContainer['TicketContainer']['modified']); ?>
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
                    			<li class="list-group-item"><?=$this->Html->link(__('Edit %s', __('Ticket Container')), array('action' => 'edit', $ticketContainer['TicketContainer']['id'])); ?> </li>
			<li class="list-group-item"><?=$this->Form->postLink(__('Delete %s', __('Ticket Container')), array('action' => 'delete', $ticketContainer['TicketContainer']['id']), null, __('Are you sure you want to delete # %s?', $ticketContainer['TicketContainer']['id'])); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Ticket Containers')), array('action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Ticket Container')), array('action' => 'add')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Tickets')), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Ticket')), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
            </ul>
        </div>
    </div>
    
    
</div>

    <div class="row">
        <div class="col-md-9">
            <h3><?=__('Related %s', __('Tickets')); ?></h3>
    <?php if (!empty($ticketContainer['Ticket'])):?>
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
				<th><?=__('Is Deleted'); ?></th>
				<th><?=__('Created'); ?></th>
				<th><?=__('Modified'); ?></th>
				<th><?=__('Deleted'); ?></th>
                    <th class="actions"><?=__('Actions');?></th>
                </tr>
                		<?php foreach ($ticketContainer['Ticket'] as $ticket): ?>
			<tr>
				<td><?=$ticket['id'];?></td>
				<td><?=$ticket['project_id'];?></td>
				<td><?=$ticket['ticket_container_id'];?></td>
				<td><?=$ticket['ticket_type_id'];?></td>
				<td><?=$ticket['ticket_state_id'];?></td>
				<td><?=$ticket['requestor_user_id'];?></td>
				<td><?=$ticket['assigned_user_id'];?></td>
				<td><?=$ticket['name'];?></td>
				<td><?=$ticket['slug'];?></td>
				<td><?=$ticket['is_deleted'];?></td>
				<td><?=$ticket['created'];?></td>
				<td><?=$ticket['modified'];?></td>
				<td><?=$ticket['deleted'];?></td>
				<td class="actions">
					<?=$this->Html->link(__('View'), array('controller' => 'tickets', 'action' => 'view', $ticket['id'])); ?>
					<?=$this->Html->link(__('Edit'), array('controller' => 'tickets', 'action' => 'edit', $ticket['id'])); ?>
					<?=$this->Form->postLink(__('Delete'), array('controller' => 'tickets', 'action' => 'delete', $ticket['id']), null, __('Are you sure you want to delete # %s?', $ticket['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
            </table>
    <?php endif; ?>

        </div>
        <div class="col-md-3">
            <ul class="nav nav-list">
                <li><?=$this->Html->link(__('New %s', __('Ticket')), array('controller' => 'tickets', 'action' => 'add'));?> </li>
            </ul>
        </div>
    </div>
