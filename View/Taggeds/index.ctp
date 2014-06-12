<div class="row">
    <div class="col-md-9">
        <h1><?=__('List %s', __('Taggeds'));?></h1>
<? if(!$taggeds):?><p>You have no Taggeds!</p><? else :?>        <p>
            <?=$this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
        </p>
        <?=$this->Paginator->pagination(array(
            'ul' => 'pagination pagination-sm'
        )); ?>
        <table class="table table-striped">
            <tr>
                                <th><?=$this->Paginator->sort('id');?></th>
                                <th><?=$this->Paginator->sort('user_id');?></th>
                                <th><?=$this->Paginator->sort('model_alias');?></th>
                                <th><?=$this->Paginator->sort('model_key');?></th>
                                <th><?=$this->Paginator->sort('tag_id');?></th>
                                <th><?=$this->Paginator->sort('is_deleted');?></th>
                                <th><?=$this->Paginator->sort('created');?></th>
                                <th><?=$this->Paginator->sort('modified');?></th>
                                <th><?=$this->Paginator->sort('deleted');?></th>
                                <th class="actions" style="white-space: nowrap"><?=__('Actions');?></th>
            </tr>
            		<?foreach($taggeds as $tagged): ?>
			<tr>
				<td><?=h($tagged['Tagged']['id']); ?>&nbsp;</td>
				<td>
					<?=$this->Html->link($tagged['User']['name'], array('controller' => 'users', 'action' => 'view', $tagged['User']['id'])); ?>
				</td>
				<td><?=h($tagged['Tagged']['model_alias']); ?>&nbsp;</td>
				<td><?=h($tagged['Tagged']['model_key']); ?>&nbsp;</td>
				<td>
					<?=$this->Html->link($tagged['Tag']['name'], array('controller' => 'tags', 'action' => 'view', $tagged['Tag']['id'])); ?>
				</td>
				<td><?=h($tagged['Tagged']['is_deleted']); ?>&nbsp;</td>
				<td><?=h($tagged['Tagged']['created']); ?>&nbsp;</td>
				<td><?=h($tagged['Tagged']['modified']); ?>&nbsp;</td>
				<td><?=h($tagged['Tagged']['deleted']); ?>&nbsp;</td>
				<td class="actions btn-group btn-group-xs" style="white-space: nowrap">
					<?= $this->Html->link('<span class="glyphicon glyphicon-eye-open"></span>', array('action' => 'view', $tagged['Tagged']['id']), array('escape' => false, 'class' => 'btn btn-success')); ?>
					<?= $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $tagged['Tagged']['id']), array('escape' => false, 'class' => 'btn btn-info')); ?>
					<?= $this->Form->postLink('<span class="glyphicon glyphicon-remove-circle"></span>', array('action' => 'delete', $tagged['Tagged']['id']), array('escape' => false, 'class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $tagged['Tagged']['id'])); ?>
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
                <li class="list-group-item"><?=$this->Html->link(__('New %s', __('Tagged')), array('action' => 'add')); ?></li>
                    			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Tags')), array('controller' => 'tags', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('Tag')), array('controller' => 'tags', 'action' => 'add')); ?> </li>
            </ul>
        </div>
    </div>

</div>