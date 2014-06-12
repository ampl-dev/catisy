<div class="row">
    <div class="col-md-9">
        <h1><?= $comment['Comment']['name']?></h1>
        <dl class="dl-horizontal">
            			<dt><?=__('Id'); ?></dt>
			<dd>
				<?=h($comment['Comment']['id']); ?>
				&nbsp;
			</dd>
			<dt><?=__('User'); ?></dt>
			<dd>
				<?=$this->Html->link($comment['User']['name'], array('controller' => 'users', 'action' => 'view', $comment['User']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?=__('Model Alias'); ?></dt>
			<dd>
				<?=h($comment['Comment']['model_alias']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Model Key'); ?></dt>
			<dd>
				<?=h($comment['Comment']['model_key']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Name'); ?></dt>
			<dd>
				<?=h($comment['Comment']['name']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Slug'); ?></dt>
			<dd>
				<?=h($comment['Comment']['slug']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Is Deleted'); ?></dt>
			<dd>
				<?=h($comment['Comment']['is_deleted']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Created'); ?></dt>
			<dd>
				<?=h($comment['Comment']['created']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Modified'); ?></dt>
			<dd>
				<?=h($comment['Comment']['modified']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Deleted'); ?></dt>
			<dd>
				<?=h($comment['Comment']['deleted']); ?>
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
                    			<li class="list-group-item"><?=$this->Html->link(__('Edit %s', __('Comment')), array('action' => 'edit', $comment['Comment']['id'])); ?> </li>
			<li class="list-group-item"><?=$this->Form->postLink(__('Delete %s', __('Comment')), array('action' => 'delete', $comment['Comment']['id']), null, __('Are you sure you want to delete # %s?', $comment['Comment']['id'])); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Comments')), array('action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Comment')), array('action' => 'add')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add')); ?> </li>
            </ul>
        </div>
    </div>
    
    
</div>

