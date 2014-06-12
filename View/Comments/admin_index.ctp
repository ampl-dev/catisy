<div class="row">
    <div class="col-md-9">
        <h1><?=__('List %s', __('Comments'));?></h1>
<? if(!$comments):?><p>You have no Comments!</p><? else :?>        <p>
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
                                <th><?=$this->Paginator->sort('name');?></th>
                                <th><?=$this->Paginator->sort('slug');?></th>
                                <th><?=$this->Paginator->sort('is_deleted');?></th>
                                <th><?=$this->Paginator->sort('created');?></th>
                                <th><?=$this->Paginator->sort('modified');?></th>
                                <th><?=$this->Paginator->sort('deleted');?></th>
                                <th class="actions" style="white-space: nowrap"><?=__('Actions');?></th>
            </tr>
            		<?foreach($comments as $comment): ?>
			<tr>
				<td><?=h($comment['Comment']['id']); ?>&nbsp;</td>
				<td>
					<?=$this->Html->link($comment['User']['name'], array('controller' => 'users', 'action' => 'view', $comment['User']['id'])); ?>
				</td>
				<td><?=h($comment['Comment']['model_alias']); ?>&nbsp;</td>
				<td><?=h($comment['Comment']['model_key']); ?>&nbsp;</td>
				<td><?=h($comment['Comment']['name']); ?>&nbsp;</td>
				<td><?=h($comment['Comment']['slug']); ?>&nbsp;</td>
				<td><?=h($comment['Comment']['is_deleted']); ?>&nbsp;</td>
				<td><?=h($comment['Comment']['created']); ?>&nbsp;</td>
				<td><?=h($comment['Comment']['modified']); ?>&nbsp;</td>
				<td><?=h($comment['Comment']['deleted']); ?>&nbsp;</td>
				<td class="actions btn-group btn-group-xs" style="white-space: nowrap">
					<?= $this->Html->link('<span class="glyphicon glyphicon-eye-open"></span>', array('action' => 'view', $comment['Comment']['id']), array('escape' => false, 'class' => 'btn btn-success')); ?>
					<?= $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $comment['Comment']['id']), array('escape' => false, 'class' => 'btn btn-info')); ?>
					<?= $this->Form->postLink('<span class="glyphicon glyphicon-remove-circle"></span>', array('action' => 'delete', $comment['Comment']['id']), array('escape' => false, 'class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $comment['Comment']['id'])); ?>
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
                <li class="list-group-item"><?=$this->Html->link(__('New %s', __('Comment')), array('action' => 'add')); ?></li>
                    			<li class="list-group-item"><?=$this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li class="list-group-item"><?=$this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add')); ?> </li>
            </ul>
        </div>
    </div>

</div>