<div class="row">
    <div class="col-md-9">
        <h1><?= $tagged['Tagged']['id']?></h1>
        <dl class="dl-horizontal">
            			<dt><?=__('Id'); ?></dt>
			<dd>
				<?=h($tagged['Tagged']['id']); ?>
				&nbsp;
			</dd>
			<dt><?=__('User'); ?></dt>
			<dd>
				<?=$this->Html->link($tagged['User']['name'], array('controller' => 'users', 'action' => 'view', $tagged['User']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?=__('Model Alias'); ?></dt>
			<dd>
				<?=h($tagged['Tagged']['model_alias']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Model Key'); ?></dt>
			<dd>
				<?=h($tagged['Tagged']['model_key']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Tag'); ?></dt>
			<dd>
				<?=$this->Html->link($tagged['Tag']['name'], array('controller' => 'tags', 'action' => 'view', $tagged['Tag']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?=__('Is Deleted'); ?></dt>
			<dd>
				<?=h($tagged['Tagged']['is_deleted']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Created'); ?></dt>
			<dd>
				<?=h($tagged['Tagged']['created']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Modified'); ?></dt>
			<dd>
				<?=h($tagged['Tagged']['modified']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Deleted'); ?></dt>
			<dd>
				<?=h($tagged['Tagged']['deleted']); ?>
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
                    			<li class="list-group-item"><?=$this->Html->link(__('Edit %s', __('Tagged')), array('action' => 'edit', $tagged['Tagged']['id'])); ?> </li>
			<li class="list-group-item"><?=$this->Form->postLink(__('Delete %s', __('Tagged')), array('action' => 'delete', $tagged['Tagged']['id']), null, __('Are you sure you want to delete # %s?', $tagged['Tagged']['id'])); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Taggeds')), array('action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Tagged')), array('action' => 'add')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Tags')), array('controller' => 'tags', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Tag')), array('controller' => 'tags', 'action' => 'add')); ?> </li>
            </ul>
        </div>
    </div>
    
    
</div>

