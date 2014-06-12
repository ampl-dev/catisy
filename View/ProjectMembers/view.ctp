<div class="row">
    <div class="col-md-9">
        <h1><?= $projectMember['ProjectMember']['id']?></h1>
        <dl class="dl-horizontal">
            			<dt><?=__('Id'); ?></dt>
			<dd>
				<?=h($projectMember['ProjectMember']['id']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Project'); ?></dt>
			<dd>
				<?=$this->Html->link($projectMember['Project']['name'], array('controller' => 'projects', 'action' => 'view', $projectMember['Project']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?=__('Member'); ?></dt>
			<dd>
				<?=$this->Html->link($projectMember['Member']['name'], array('controller' => 'users', 'action' => 'view', $projectMember['Member']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?=__('Created'); ?></dt>
			<dd>
				<?=h($projectMember['ProjectMember']['created']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Modified'); ?></dt>
			<dd>
				<?=h($projectMember['ProjectMember']['modified']); ?>
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
                    			<li class="list-group-item"><?=$this->Html->link(__('Edit %s', __('Project Member')), array('action' => 'edit', $projectMember['ProjectMember']['id'])); ?> </li>
			<li class="list-group-item"><?=$this->Form->postLink(__('Delete %s', __('Project Member')), array('action' => 'delete', $projectMember['ProjectMember']['id']), null, __('Are you sure you want to delete # %s?', $projectMember['ProjectMember']['id'])); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Project Members')), array('action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Project Member')), array('action' => 'add')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Projects')), array('controller' => 'projects', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Project')), array('controller' => 'projects', 'action' => 'add')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Member')), array('controller' => 'users', 'action' => 'add')); ?> </li>
            </ul>
        </div>
    </div>
    
    
</div>

