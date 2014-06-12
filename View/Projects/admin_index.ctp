<div class="row">
    <div class="col-md-9">
        <h1><?=__('List %s', __('Projects'));?></h1>
<? if(!$projects):?><p>You have no Projects!</p><? else :?>        <p>
            <?=$this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
        </p>
        <?=$this->Paginator->pagination(array(
            'ul' => 'pagination pagination-sm'
        )); ?>
        <table class="table table-striped">
            <tr>
                                <th><?=$this->Paginator->sort('id');?></th>
                                <th><?=$this->Paginator->sort('user_id');?></th>
                                <th><?=$this->Paginator->sort('name');?></th>
                                <th><?=$this->Paginator->sort('slug');?></th>
                                <th><?=$this->Paginator->sort('is_deleted');?></th>
                                <th><?=$this->Paginator->sort('created');?></th>
                                <th><?=$this->Paginator->sort('modified');?></th>
                                <th><?=$this->Paginator->sort('deleted');?></th>
                                <th class="actions" style="white-space: nowrap"><?=__('Actions');?></th>
            </tr>
            		<?foreach($projects as $project): ?>
			<tr>
				<td><?=h($project['Project']['id']); ?>&nbsp;</td>
				<td>
					<?=$this->Html->link($project['Creator']['name'], array('controller' => 'users', 'action' => 'view', $project['Creator']['id'])); ?>
				</td>
				<td><?=h($project['Project']['name']); ?>&nbsp;</td>
				<td><?=h($project['Project']['slug']); ?>&nbsp;</td>
				<td><?=h($project['Project']['is_deleted']); ?>&nbsp;</td>
				<td><?=h($project['Project']['created']); ?>&nbsp;</td>
				<td><?=h($project['Project']['modified']); ?>&nbsp;</td>
				<td><?=h($project['Project']['deleted']); ?>&nbsp;</td>
				<td class="actions btn-group btn-group-xs" style="white-space: nowrap">
					<?= $this->Html->link('<span class="glyphicon glyphicon-eye-open"></span>', array('action' => 'view', $project['Project']['id']), array('escape' => false, 'class' => 'btn btn-success')); ?>
					<?= $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $project['Project']['id']), array('escape' => false, 'class' => 'btn btn-info')); ?>
					<?= $this->Form->postLink('<span class="glyphicon glyphicon-remove-circle"></span>', array('action' => 'delete', $project['Project']['id']), array('escape' => false, 'class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?>
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
                <li class="list-group-item"><?=$this->Html->link(__('New %s', __('Project')), array('action' => 'add')); ?></li>
                    			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Creator')), array('controller' => 'users', 'action' => 'add')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Epics')), array('controller' => 'epics', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Epic')), array('controller' => 'epics', 'action' => 'add')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Tickets')), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Ticket')), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
            </ul>
        </div>
    </div>

</div>