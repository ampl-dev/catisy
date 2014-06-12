<div class="row">
    <div class="col-md-9">
        <h1><?= $tag['Tag']['name']?></h1>
        <dl class="dl-horizontal">
            			<dt><?=__('Id'); ?></dt>
			<dd>
				<?=h($tag['Tag']['id']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Parent Tag'); ?></dt>
			<dd>
				<?=$this->Html->link($tag['ParentTag']['name'], array('controller' => 'tags', 'action' => 'view', $tag['ParentTag']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?=__('Lft'); ?></dt>
			<dd>
				<?=h($tag['Tag']['lft']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Rght'); ?></dt>
			<dd>
				<?=h($tag['Tag']['rght']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Name'); ?></dt>
			<dd>
				<?=h($tag['Tag']['name']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Slug'); ?></dt>
			<dd>
				<?=h($tag['Tag']['slug']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Created'); ?></dt>
			<dd>
				<?=h($tag['Tag']['created']); ?>
				&nbsp;
			</dd>
			<dt><?=__('Modified'); ?></dt>
			<dd>
				<?=h($tag['Tag']['modified']); ?>
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
                    			<li class="list-group-item"><?=$this->Html->link(__('Edit %s', __('Tag')), array('action' => 'edit', $tag['Tag']['id'])); ?> </li>
			<li class="list-group-item"><?=$this->Form->postLink(__('Delete %s', __('Tag')), array('action' => 'delete', $tag['Tag']['id']), null, __('Are you sure you want to delete # %s?', $tag['Tag']['id'])); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Tags')), array('action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Tag')), array('action' => 'add')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Tags')), array('controller' => 'tags', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Parent Tag')), array('controller' => 'tags', 'action' => 'add')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Taggeds')), array('controller' => 'taggeds', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Tagged')), array('controller' => 'taggeds', 'action' => 'add')); ?> </li>
            </ul>
        </div>
    </div>
    
    
</div>

    <div class="row">
        <div class="col-md-9">
            <h3><?=__('Related %s', __('Taggeds')); ?></h3>
    <?php if (!empty($tag['Tagged'])):?>
            <table class="table">
                <tr>
                    				<th><?=__('Id'); ?></th>
				<th><?=__('User Id'); ?></th>
				<th><?=__('Model Alias'); ?></th>
				<th><?=__('Model Key'); ?></th>
				<th><?=__('Tag Id'); ?></th>
				<th><?=__('Is Deleted'); ?></th>
				<th><?=__('Created'); ?></th>
				<th><?=__('Modified'); ?></th>
				<th><?=__('Deleted'); ?></th>
                    <th class="actions"><?=__('Actions');?></th>
                </tr>
                		<?php foreach ($tag['Tagged'] as $tagged): ?>
			<tr>
				<td><?=$tagged['id'];?></td>
				<td><?=$tagged['user_id'];?></td>
				<td><?=$tagged['model_alias'];?></td>
				<td><?=$tagged['model_key'];?></td>
				<td><?=$tagged['tag_id'];?></td>
				<td><?=$tagged['is_deleted'];?></td>
				<td><?=$tagged['created'];?></td>
				<td><?=$tagged['modified'];?></td>
				<td><?=$tagged['deleted'];?></td>
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
    <div class="row">
        <div class="col-md-9">
            <h3><?=__('Related %s', __('Tags')); ?></h3>
    <?php if (!empty($tag['ChildTag'])):?>
            <table class="table">
                <tr>
                    				<th><?=__('Id'); ?></th>
				<th><?=__('Parent Id'); ?></th>
				<th><?=__('Lft'); ?></th>
				<th><?=__('Rght'); ?></th>
				<th><?=__('Name'); ?></th>
				<th><?=__('Slug'); ?></th>
				<th><?=__('Created'); ?></th>
				<th><?=__('Modified'); ?></th>
                    <th class="actions"><?=__('Actions');?></th>
                </tr>
                		<?php foreach ($tag['ChildTag'] as $childTag): ?>
			<tr>
				<td><?=$childTag['id'];?></td>
				<td><?=$childTag['parent_id'];?></td>
				<td><?=$childTag['lft'];?></td>
				<td><?=$childTag['rght'];?></td>
				<td><?=$childTag['name'];?></td>
				<td><?=$childTag['slug'];?></td>
				<td><?=$childTag['created'];?></td>
				<td><?=$childTag['modified'];?></td>
				<td class="actions">
					<?=$this->Html->link(__('View'), array('controller' => 'tags', 'action' => 'view', $childTag['id'])); ?>
					<?=$this->Html->link(__('Edit'), array('controller' => 'tags', 'action' => 'edit', $childTag['id'])); ?>
					<?=$this->Form->postLink(__('Delete'), array('controller' => 'tags', 'action' => 'delete', $childTag['id']), null, __('Are you sure you want to delete # %s?', $childTag['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
            </table>
    <?php endif; ?>

        </div>
        <div class="col-md-3">
            <ul class="nav nav-list">
                <li><?=$this->Html->link(__('New %s', __('Child Tag')), array('controller' => 'tags', 'action' => 'add'));?> </li>
            </ul>
        </div>
    </div>
