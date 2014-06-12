<div class="row">
    <div class="col-md-9">
        <h1><?=__('List %s', __('Tickets'));?></h1>
<? if(!$tickets):?><p>You have no Tickets!</p><? else :?>        <p>
            <?=$this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
        </p>
        <?=$this->Paginator->pagination(array(
            'ul' => 'pagination pagination-sm'
        )); ?>
        <table class="table table-striped">
            <tr>
                                <th><?=$this->Paginator->sort('id');?></th>
                                <th><?=$this->Paginator->sort('project_id');?></th>
                                <th><?=$this->Paginator->sort('ticket_container_id');?></th>
                                <th><?=$this->Paginator->sort('ticket_type_id');?></th>
                                <th><?=$this->Paginator->sort('ticket_state_id');?></th>
                                <th><?=$this->Paginator->sort('requestor_user_id');?></th>
                                <th><?=$this->Paginator->sort('assigned_user_id');?></th>
                                <th><?=$this->Paginator->sort('name');?></th>
                                <th><?=$this->Paginator->sort('slug');?></th>
                                <th><?=$this->Paginator->sort('is_deleted');?></th>
                                <th><?=$this->Paginator->sort('created');?></th>
                                <th><?=$this->Paginator->sort('modified');?></th>
                                <th><?=$this->Paginator->sort('deleted');?></th>
                                <th class="actions" style="white-space: nowrap"><?=__('Actions');?></th>
            </tr>
            		<?foreach($tickets as $ticket): ?>
			<tr>
				<td><?=h($ticket['Ticket']['id']); ?>&nbsp;</td>
				<td>
					<?=$this->Html->link($ticket['Project']['name'], array('controller' => 'projects', 'action' => 'view', $ticket['Project']['id'])); ?>
				</td>
				<td>
					<?=$this->Html->link($ticket['TicketContainer']['name'], array('controller' => 'ticket_containers', 'action' => 'view', $ticket['TicketContainer']['id'])); ?>
				</td>
				<td>
					<?=$this->Html->link($ticket['TicketType']['name'], array('controller' => 'ticket_types', 'action' => 'view', $ticket['TicketType']['id'])); ?>
				</td>
				<td>
					<?=$this->Html->link($ticket['TicketState']['name'], array('controller' => 'ticket_states', 'action' => 'view', $ticket['TicketState']['id'])); ?>
				</td>
				<td>
					<?=$this->Html->link($ticket['RequestingUser']['name'], array('controller' => 'users', 'action' => 'view', $ticket['RequestingUser']['id'])); ?>
				</td>
				<td>
					<?=$this->Html->link($ticket['AssignedUser']['name'], array('controller' => 'users', 'action' => 'view', $ticket['AssignedUser']['id'])); ?>
				</td>
				<td><?=h($ticket['Ticket']['name']); ?>&nbsp;</td>
				<td><?=h($ticket['Ticket']['slug']); ?>&nbsp;</td>
				<td><?=h($ticket['Ticket']['is_deleted']); ?>&nbsp;</td>
				<td><?=h($ticket['Ticket']['created']); ?>&nbsp;</td>
				<td><?=h($ticket['Ticket']['modified']); ?>&nbsp;</td>
				<td><?=h($ticket['Ticket']['deleted']); ?>&nbsp;</td>
				<td class="actions btn-group btn-group-xs" style="white-space: nowrap">
					<?= $this->Html->link('<span class="glyphicon glyphicon-eye-open"></span>', array('action' => 'view', $ticket['Ticket']['id']), array('escape' => false, 'class' => 'btn btn-success')); ?>
					<?= $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $ticket['Ticket']['id']), array('escape' => false, 'class' => 'btn btn-info')); ?>
					<?= $this->Form->postLink('<span class="glyphicon glyphicon-remove-circle"></span>', array('action' => 'delete', $ticket['Ticket']['id']), array('escape' => false, 'class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $ticket['Ticket']['id'])); ?>
				</td>
			</tr>
		<? endforeach; ?>
        </table>

        <?=$this->Paginator->pagination(array(
            'ul' => 'pagination pagination-sm'
        )); ?>
<? endif; ?>    </div>
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?=__('Actions'); ?></h3>
            </div>

            <!-- List group -->
            <ul class="list-group">
                <li class="list-group-item"><?=$this->Html->link(__('New %s', __('Ticket')), array('action' => 'add')); ?></li>
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