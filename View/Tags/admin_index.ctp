<div class="row">
    <div class="col-md-9">
        <h1><?=__('List %s', __('Tags'));?></h1>
<? if(!$tags):?><p>You have no Tags!</p><? else :?>        <p>
            <?=$this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
        </p>
        <?=$this->Paginator->pagination(array(
            'ul' => 'pagination pagination-sm'
        )); ?>
        <table class="table table-striped">
            <tr>
                                <th><?=$this->Paginator->sort('id');?></th>
                                <th><?=$this->Paginator->sort('parent_id');?></th>
                                <th><?=$this->Paginator->sort('lft');?></th>
                                <th><?=$this->Paginator->sort('rght');?></th>
                                <th><?=$this->Paginator->sort('name');?></th>
                                <th><?=$this->Paginator->sort('slug');?></th>
                                <th><?=$this->Paginator->sort('created');?></th>
                                <th><?=$this->Paginator->sort('modified');?></th>
                                <th class="actions" style="white-space: nowrap"><?=__('Actions');?></th>
            </tr>
            		<?foreach($tags as $tag): ?>
			<tr>
				<td><?=h($tag['Tag']['id']); ?>&nbsp;</td>
				<td>
					<?=$this->Html->link($tag['ParentTag']['name'], array('controller' => 'tags', 'action' => 'view', $tag['ParentTag']['id'])); ?>
				</td>
				<td><?=h($tag['Tag']['lft']); ?>&nbsp;</td>
				<td><?=h($tag['Tag']['rght']); ?>&nbsp;</td>
				<td><?=h($tag['Tag']['name']); ?>&nbsp;</td>
				<td><?=h($tag['Tag']['slug']); ?>&nbsp;</td>
				<td><?=h($tag['Tag']['created']); ?>&nbsp;</td>
				<td><?=h($tag['Tag']['modified']); ?>&nbsp;</td>
				<td class="actions btn-group btn-group-xs" style="white-space: nowrap">
					<?= $this->Html->link('<span class="glyphicon glyphicon-eye-open"></span>', array('action' => 'view', $tag['Tag']['id']), array('escape' => false, 'class' => 'btn btn-success')); ?>
					<?= $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $tag['Tag']['id']), array('escape' => false, 'class' => 'btn btn-info')); ?>
					<?= $this->Form->postLink('<span class="glyphicon glyphicon-remove-circle"></span>', array('action' => 'delete', $tag['Tag']['id']), array('escape' => false, 'class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $tag['Tag']['id'])); ?>
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
                <li class="list-group-item"><?=$this->Html->link(__('New %s', __('Tag')), array('action' => 'add')); ?></li>
                    			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Tags')), array('controller' => 'tags', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Parent Tag')), array('controller' => 'tags', 'action' => 'add')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Taggeds')), array('controller' => 'taggeds', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Tagged')), array('controller' => 'taggeds', 'action' => 'add')); ?> </li>
            </ul>
        </div>
    </div>

</div>