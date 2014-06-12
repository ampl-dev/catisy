<div class="row">
    <div class="col-md-9">
        <h1><?=__('List %s', __('Project Members'));?></h1>
<? if(!$projectMembers):?><p>You have no Project Members!</p><? else :?>        <p>
            <?=$this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
        </p>
        <?=$this->Paginator->pagination(array(
            'ul' => 'pagination pagination-sm'
        )); ?>
        <table class="table table-striped">
            <tr>
                                <th><?=$this->Paginator->sort('id');?></th>
                                <th><?=$this->Paginator->sort('project_id');?></th>
                                <th><?=$this->Paginator->sort('user_id');?></th>
                                <th><?=$this->Paginator->sort('created');?></th>
                                <th><?=$this->Paginator->sort('modified');?></th>
                                <th class="actions" style="white-space: nowrap"><?=__('Actions');?></th>
            </tr>
            		<?foreach($projectMembers as $projectMember): ?>
			<tr>
				<td><?=h($projectMember['ProjectMember']['id']); ?>&nbsp;</td>
				<td>
					<?=$this->Html->link($projectMember['Project']['name'], array('controller' => 'projects', 'action' => 'view', $projectMember['Project']['id'])); ?>
				</td>
				<td>
					<?=$this->Html->link($projectMember['Member']['name'], array('controller' => 'users', 'action' => 'view', $projectMember['Member']['id'])); ?>
				</td>
				<td><?=h($projectMember['ProjectMember']['created']); ?>&nbsp;</td>
				<td><?=h($projectMember['ProjectMember']['modified']); ?>&nbsp;</td>
				<td class="actions btn-group btn-group-xs" style="white-space: nowrap">
					<?= $this->Html->link('<span class="glyphicon glyphicon-eye-open"></span>', array('action' => 'view', $projectMember['ProjectMember']['id']), array('escape' => false, 'class' => 'btn btn-success')); ?>
					<?= $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $projectMember['ProjectMember']['id']), array('escape' => false, 'class' => 'btn btn-info')); ?>
					<?= $this->Form->postLink('<span class="glyphicon glyphicon-remove-circle"></span>', array('action' => 'delete', $projectMember['ProjectMember']['id']), array('escape' => false, 'class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $projectMember['ProjectMember']['id'])); ?>
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
                <li class="list-group-item"><?=$this->Html->link(__('New %s', __('Project Member')), array('action' => 'add')); ?></li>
                    			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Projects')), array('controller' => 'projects', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Project')), array('controller' => 'projects', 'action' => 'add')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Member')), array('controller' => 'users', 'action' => 'add')); ?> </li>
            </ul>
        </div>
    </div>

</div>